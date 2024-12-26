@extends('layout.app')
@section('css')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection('css')
@section('content')

    <div class="container mt-5">
        <!-- Header with Profile -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="text-primary text-dark" style="">🎯 داشبورد چالش‌های روزانه</h1>
                <p class=" text-dark">چالش‌های امروز خود را کامل کنید و سطح خود را ارتقا دهید!</p>
            </div>
            <a style="text-decoration: none;" href="{{ route('profile') }}" class="text-dark">
            <div class="text-center">
            @guest
                <img src="https://via.placeholder.com/80" class="avatar rounded-circle shadow" alt="User Avatar">
                <p class="mt-2">سلام، <strong>کاربر عزیز</strong>!</p>
            @endguest
            @auth
                <img src="https://via.placeholder.com/80" class="avatar rounded-circle shadow" alt="User Avatar">
                <p class="mt-2">سلام، <strong>{{ \Illuminate\Support\Facades\Auth::user()->name }} عزیز</strong>!</p>
            @endauth
            </div>
            </a>
        </div>
        @if($chalusers->isEmpty())
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title text-success">🎉 همه چالش‌ها تکمیل شد!</h5>
                    <p class="card-text">شما امروز فوق‌العاده عمل کردید! ادامه بدهید و امتیاز بیشتری کسب کنید یا می‌توانید رتبه خود را ببینید.</p>
                    <div class="d-flex justify-content-center mt-3 gap-3">
                        <a href="{{ route('group') }}" class="btn btn-danger">چالش بعدی</a>
                        <a href="{{ route('leaderboard') }}" class="btn btn-warning">📊 رتبه‌بندی من</a>
                    </div>
                </div>
            </div>
        @else
            @foreach($chalusers as $chaluser)
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">چالش امروز</h5>
                        <p class="card-text">{{ $chaluser->Chal->name }}</p>
                        <p class="card-text">{{ $chaluser->Chal->desc }}</p>
                        <div class="challenge-meta">
                            <span><i class="fas fa-users"></i> {{ $num }} شرکت‌کننده</span>
                            <span><i class="fas fa-clock"></i> {{ $chaluser->remain }} دقیقه</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar-custom" style="width: 50%"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <form action="{{ route('chaluser.update', $chaluser->chal_id) }}" method="POST">
                                @method('patch')
                                @csrf
                                <button type="submit" class="btn btn-success" >✅ انجام شد</button>
                            </form>

                            <div class="text-end">
                                <span class="text-muted">زمان باقی‌مانده:</span>
                                <span id="timer" data-time="{{ $chaluser->remain }}" class="text-danger fw-bold timer">00:20:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif


        <!-- Stats Section -->
        <div class="row g-4">
            <!-- Total Challenges -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <a style="text-decoration: none;" href="{{ route('chaluser.index') }}">
                        <div class="card-body">
                            <h5 class="card-title text-dark">نمودار پیشرفت</h5>
                            <p class="display-5 text-success  fw-bold">25</p><small class="text-success">چالش انجام دادم</small>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Total Points -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <a style="text-decoration: none;" href="{{ route('leaderboard') }}">
                        <div class="card-body">
                            <h5 class="card-title text-dark">لیدربرد</h5>
                            <p class="display-5 text-success fw-bold">30%</p><small class="text-success">برتر هفته هستم</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Challenge History -->
        <div class="mt-5">
            <a style="text-decoration: none;" href="{{ route('chaluser.index') }}">
                <h3 class="text-primary text-dark">📜 تاریخچه چالش‌ها</h3>
            </a>
            <table class="table table-bordered mt-3 shadow-sm">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>چالش</th>
                        <th>وضعیت</th>
                        <th>تاریخ</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td>1</td>
                        <td>پیاده‌روی</td>
                        <td><span class="badge bg-success">تکمیل شد</span></td>
                        <td>2024-12-12</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>مطالعه 30 دقیقه</td>
                        <td><span class="badge bg-danger">تکمیل نشد</span></td>
                        <td>2024-12-11</td>
                    </tr>
                    <tr class="blur-row">
                        <td>3</td>
                        <td>مدیتیشن</td>
                        <td><span class="badge bg-success">تکمیل شد</span></td>
                        <td>2024-12-10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection('content')
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            console.log('JavaScript is running!'); // پیام برای تست
            const timers = document.querySelectorAll('#timer');

            if (timers.length === 0) {
                console.error('No timers found!');
                return;
            }

            timers.forEach((timerElement) => {
                let phpTimeLeft = timerElement.dataset.time;
                console.log('Timer found:', phpTimeLeft); // تست مقدار

                let [hours, minutes, seconds] = phpTimeLeft.split(':').map(Number);
                let time = hours * 3600 + minutes * 60 + seconds;

                function updateTimer() {
                    const currentHours = Math.floor(time / 3600);
                    const currentMinutes = Math.floor((time % 3600) / 60);
                    const currentSeconds = time % 60;

                    timerElement.textContent = `${currentHours.toString().padStart(2, '0')}:${currentMinutes.toString().padStart(2, '0')}:${currentSeconds.toString().padStart(2, '0')}`;

                    if (time > 0) {
                        time--;
                    } else {
                        clearInterval(timerInterval);
                        timerElement.textContent = '⏰ زمان تمام شد!';
                    }
                }

                const timerInterval = setInterval(updateTimer, 1000);
                updateTimer();
            });
        });
    </script>

@endsection('js')

