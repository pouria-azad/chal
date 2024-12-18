
@extends('layout.app')
@section('title', 'چالش‌های پیشنهادی')
@section('css')
<link href="{{ asset('css/settings.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
    <div class="container">  

        <!-- بخش تنظیمات حساب کاربری -->  
        <div class="section">  
            <h3>تنظیمات</h3>  
            <button class="bbb" onclick="location.href='{{ route('settings.account') }}'">رفتن به تنظیمات حساب کاربری</button>  

            <button class="bbb" onclick="location.href='{{ route('settings.security') }}'">رفتن به تنظیمات امنیتی</button>  

            <button class="bbb" onclick="location.href='{{ route('settings.notifications') }}'">رفتن به تنظیمات اعلان‌ها</button>  
 
            <button class="bbb" onclick="location.href='{{ route('settings.language-theme') }}'">رفتن به تنظیمات زبان و تم</button>  
 
            <button class="bbb" onclick="location.href='{{ route('settings.privacy') }}'">رفتن به تنظیمات حریم خصوصی</button>  
        </div>  

        <!-- بخش اطلاعات اضافی -->  
        <div class="section">  
            <h3>اطلاعات اضافی</h3>  
            <button class="bbb">گزارش مشکل</button>  
            <button class="bbb">ارسال بازخورد</button>  
            <p>نسخه برنامه: 1.0.0</p>  
        </div>  

        <footer>  
            &copy; 2024. تمامی حقوق محفوظ است.  
        </footer>  
    </div>  
@endsection('content')