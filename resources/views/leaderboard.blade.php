@extends('layout.app')
@section('title', 'رتبه‌بندی - Daily Challenges')
@section('css')
<link href="{{ asset('css/leaderboard.css') }}" rel="stylesheet">
@endsection('css')

@section('content')

<div class="container mt-5">
    <h1 class="text-dark text-center">🏆 رتبه‌بندی کاربران</h1>
    <p class="text-center text-muted mb-5">بهترین کاربران هفته را مشاهده کنید و انگیزه بگیرید!</p>

    <!-- Leaderboard Table -->
    <div class="card leaderboard-card shadow-sm">
        <div class="card-header text-center">رتبه‌بندی بر اساس امتیاز</div>
        <div class="card-body">
            <table class="table table-striped leaderboard-table">
                <thead>
                    <tr>
                        <th>رتبه</th>
                        <th>نام کاربر</th>
                        <th>چالش‌های تکمیل شده</th>
                        <th>امتیاز</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>کاربر1</td>
                        <td>15</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>کاربر2</td>
                        <td>12</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>کاربر3</td>
                        <td>10</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>کاربر4</td>
                        <td>8</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>کاربر5</td>
                        <td>6</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>

@endsection('content')
