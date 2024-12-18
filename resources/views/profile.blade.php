@extends('layout.app')
@section('title', 'رتبه‌بندی - Daily Challenges')
@section('css')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
<div class="profile-container">
        <div class="profile-header">
            <div class="avatar">👤</div>
            <h2>کاربر1</h2>
            <p>چالش‌ها را انجام دهید، رشد کنید و موفق شوید!</p>
        </div>

        <div class="profile-body">
            <div class="info-section">
                <div class="info-item">
                    <span class="info-label">نام</span>
                    <span class="info-value">کاربر1</span>
                </div>
                <div class="info-item">
                    <span class="info-label">ایمیل</span>
                    <span class="info-value">user1@example.com</span>
                </div>
                <div class="info-item">
                    <span class="info-label">تاریخ پیوستن</span>
                    <span class="info-value">1 ژانویه 2024</span>
                </div>
                <div class="info-item">
                    <span class="info-label">وضعیت</span>
                    <span class="status-badge">فعال</span>
                </div>
            </div>
            
            <button class="btn-custom" onclick="location.href='{{ route('settings') }}'">تنظیمات</button>
        </div>
    </div>

@endsection('content')

