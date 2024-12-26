@extends('layout.app')
@section('title', 'رتبه‌بندی - Daily Challenges')
@section('css')
    <link href="{{ asset('css/ch.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
    <div class="challenge-detail-card">
        <span class="category-tag">برنامه‌نویسی</span>
        <h1>عنوان چالش</h1>
        <div class="icon">🚀</div>
        <p>توضیحات چالش در این قسمت قرار می‌گیرد...</p>
        <button class="btn-custom w-100">شرکت در چالش</button>

        <div class="comment-section">
            <h3>نظرات</h3>
            <textarea class="comment-box" placeholder="نظر خود را بنویسید..."></textarea>
            <button class="btn-custom" style="margin-top: 10px;">ارسال نظر</button>

            <div class="comment">
                <p>این یک نظر نمونه است.</p>
                <div class="comment-footer">
                    نوشته شده توسط کاربر - ۲ ساعت پیش
                </div>
            </div>
        </div>
    </div>
@endsection('content')
