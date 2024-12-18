
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
                        <p class="stat-value">۲۵</p>
                    </div>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar" style="width: 71%; background: var(--primary)"></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: rgba(34,197,94,0.1); color: var(--success)">🏆</div>
                    <div class="stats-detail">
                        <h3 class="stat-title">امتیاز کل</h3>
                        <p class="stat-value">۱۲۵۰</p>
                    </div>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar" style="width: 85%; background: var(--success)"></div>
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

        <div class="progress-section">
            <h2 class="progress-title">نمودار پیشرفت</h2>
            <div class="chart-container">
                <canvas id="progressChart"></canvas>
            </div>
        </div>

        <div class="progress-section">
            <h2 class="daily-challenges-title">چالش‌های امروز</h2>
            <div class="daily-challenges-grid">
                <div class="challenge-card">
                    <div class="challenge-header">
                        <div class="challenge-icon" style="background: rgba(99,102,241,0.1); color: var(--primary)">📝</div>
                        <div class="challenge-detail">
                            <h3 class="challenge-title">نوشتن یک صفحه روزانه</h3>
                            <p class="challenge-status">فعال</p>
                        </div>
                    </div>
                    <button class="challenge-button">جزئیات</button>
                </div>

                <div class="challenge-card">
                    <div class="challenge-header">
                        <div class="challenge-icon" style="background: rgba(34,197,94,0.1); color: var(--success)">🏃</div>
                        <div class="challenge-detail">
                            <h3 class="challenge-title">پیاده‌روی ۱۰,۰۰۰ قدم</h3>
                            <p class="challenge-status">فعال</p>
                        </div>
                    </div>
                    <button class="challenge-button">جزئیات</button>
                </div>

                <div class="challenge-card">
                    <div class="challenge-header">
                        <div class="challenge-icon" style="background: rgba(245,158,11,0.1); color: var(--warning)">📖</div>
                        <div class="challenge-detail">
                            <h3 class="challenge-title">مطالعه یک فصل کتاب</h3>
                            <p class="challenge-status">فعال</p>
                        </div>
                    </div>
                    <button class="challenge-button">جزئیات</button>
                </div>
            </div>
        </div>
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
                    data: [25, 10],
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
