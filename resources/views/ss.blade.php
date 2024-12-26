
@extends('layout.app')
@section('title', 'پنل کاربری - چالش های روزانه')
@section('css')
<link href="{{ asset('css/ss.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
    <div class="dashboard">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: rgba(99,102,241,0.1); color: var(--primary)">🎯</div>
                    <div class="stats-detail">
                        <h3 class="stat-title">چالش‌های تکمیل شده</h3>
                        <p class="stat-value">{{ $doneNum[1] ?? 0 }}</p>
                    </div>
                </div>
                <div class="progress" style="height: 8px;">

                    <div class="progress-bar" style="width: {{ ($doneNum[1]/($doneNum[0]+$doneNum[1])) * 100 }}%; background: var(--primary)"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: rgba(34,197,94,0.1); color: var(--success)">🏆</div>
                    <div class="stats-detail">
                        <h3 class="stat-title">امتیاز کل</h3>
                        <p class="stat-value">{{ ($doneNum[1]*10) - ($doneNum[0]*5) ?? 0 }}</p>
                    </div>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar" style="width: {{ ($doneNum[1]*100/($doneNum[0]*50+$doneNum[1]*100)) * 100 }}%; background: var(--success)"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: rgba(245,158,11,0.1); color: var(--warning)">⭐</div>
                    <div class="stats-detail">
                        <h3 class="stat-title">روزهای پیاپی</h3>
                        <p class="stat-value">۱۵</p>
                    </div>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar" style="width: 60%; background: var(--warning)"></div>
                </div>
            </div>
        </div>


        @if(!$ChalUsers->isEmpty())

            <div class="progress-section">
                <h2 class="progress-title">نمودار پیشرفت</h2>
                <div class="chart-container">
                    <canvas id="progressChart"></canvas>
                </div>
            </div>

            <!-- Challenge History -->
            <div class="mt-5">
                <h3 class="text-dark">📜 تاریخچه چالش‌ها</h3>
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
                    @foreach($ChalUsers as $key => $ChalUser)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $ChalUser->Chal->name }}</td>
                            <td><span class="badge bg-success">تکمیل شد</span></td>
                            <td>{{ \Carbon\Carbon::parse($ChalUser['created_at'])->format('Y/m/d') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h3 >لطفا <a href="{{ route('group') }}">چالش</a> جدید بسازید</h3>

        @endif
    </div>
@endsection('content')

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('progressChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['تکمیل شده', 'باقی‌مانده'],
                datasets: [{
                    data: [{{ $doneNum[1] }},{{ $doneNum[0] }}],

                    backgroundColor: [
                        'rgba(99, 102, 241, 0.8)',
                        'rgba(226, 232, 240, 0.5)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                cutout: '75%',
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>

@endsection('js')
