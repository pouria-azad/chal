
@extends('layout.app')
@section('title', 'چالش‌های پیشنهادی')
@section('css')
<link href="{{ asset('css/settings.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
    <div class="container-1">

        <!-- بخش تنظیمات حساب کاربری -->
        <div class="section">
            <h3>تنظیمات</h3>
            <button class="btn bg-danger w-100 btn-lg text-white mb-20" onclick="location.href='{{ route('settings.account') }}'">رفتن به تنظیمات حساب کاربری</button>

            <button class="btn bg-danger w-100 btn-lg text-white mb-20" onclick="location.href='{{ route('settings.security') }}'">رفتن به تنظیمات امنیتی</button>

            <button class="btn bg-danger w-100 btn-lg text-white mb-20" onclick="location.href='{{ route('settings.notifications') }}'">رفتن به تنظیمات اعلان‌ها</button>

            <button class="btn bg-danger w-100 btn-lg text-white mb-20" onclick="location.href='{{ route('settings.language-theme') }}'">رفتن به تنظیمات زبان و تم</button>

            <button class="btn bg-danger w-100 btn-lg text-white mb-20" onclick="location.href='{{ route('settings.privacy') }}'">رفتن به تنظیمات حریم خصوصی</button>
        </div>

        <!-- بخش اطلاعات اضافی -->
        <div class="section">
            <button class="btn bg-danger w-100 btn-lg text-white mt-20">گزارش مشکل</button>
            <button class="btn bg-danger w-100 btn-lg text-white mt-20">ارسال بازخورد</button>
            <p>نسخه برنامه: 1.0.0</p>
        </div>

        <footer>
            &copy; 2024. تمامی حقوق محفوظ است.
        </footer>
    </div>
@endsection('content')
