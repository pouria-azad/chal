@extends('layout.app')
@section('css')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection('css')
@section('content')
<div class="container mt-5">
    <!-- Header with Profile -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="text-primary text-dark">🎯 داشبورد چالش‌های روزانه</h1>
            <p class="text-muted">چالش‌های امروز خود را کامل کنید و سطح خود را ارتقا دهید!</p>
        </div>
        <div class="text-center">
            <img src="https://via.placeholder.com/80" class="avatar rounded-circle shadow" alt="User Avatar">
            <p class="mt-2">سلام، <strong>کاربر عزیز</strong>!</p>
        </div>
    </div>

    <!-- Level Progress -->
    <div class="mb-4">
        <h5>سطح شما: <span class="text-success">3</span></h5>
        <div class="progress" style="height: 30px; border-radius: 15px;">
            <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
        </div>
    </div>

    <!-- Countdown Timer -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="card-title">چالش امروز</h5>
            <p class="card-text">20 دقیقه پیاده‌روی کن و از هوای تازه لذت ببر.</p>
            <div class="d-flex align-items-center justify-content-between">
                <button class="btn btn-success" onclick="showCelebrationAlert()">✅ انجام شد</button>
                <div class="text-end">
                    <span class="text-muted">زمان باقی‌مانده:</span>
                    <span id="timer" class="text-danger fw-bold">00:20:00</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="row g-4">
        <!-- Total Challenges -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <a style="text-decoration: none;" href="{{ route('ss') }}">
                    <div class="card-body">
                        <h5 class="card-title text-primary text-dark">آمار و پیشرفت</h5>
                    </div>
                </a>
            </div>
        </div>
        <!-- Total Points -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <a style="text-decoration: none;" href="{{ route('leaderboard') }}">
                    <div class="card-body">
                        <h5 class="card-title text-primary text-dark">رتبه من در هفته</h5>
                        <p class="display-5 text-info fw-bold">45050</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Challenge History -->
    <div class="mt-5">
        <a style="text-decoration: none;" href="{{ route('hist') }}">
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
            <tbody>
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
    // Countdown Timer Logic
    let timerElement = document.getElementById('timer');
    let time = 20 * 60; // 20 minutes in seconds

    function updateTimer() {
        const minutes = Math.floor(time / 60);
        const seconds = time % 60;
        timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        if (time > 0) {
            time--;
        } else {
            clearInterval(timerInterval);
            timerElement.textContent = '⏰ زمان تمام شد!';
        }
    }

    const timerInterval = setInterval(updateTimer, 1000);

    
</script>
@endsection('js')

