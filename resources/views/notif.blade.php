@extends('layout.app')
@section('title', 'صفحه اعلان‌ها')
@section('css')
<link href="{{ asset('css/notif.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
 
    <main class="notifications-page">
        <section class="notifications new">
            <h2>اعلان‌های جدید</h2>
            <ul>
                <li>چالش جدید: <strong>"نوشتن یک داستان کوتاه"</strong> از <em>دوست شما</em></li>
                <li>دوست شما <strong>"علی"</strong> یک چالش جدید اضافه کرد.</li>
            </ul>
        </section>

        <section class="notifications comments">
            <h2>نظرات جدید</h2>
            <ul>
                <li>کاربر <strong>سارا</strong> روی چالش شما نظر داد: <em>"این چالش فوق‌العاده است!"</em></li>
                <li>کاربر <strong>محمد</strong> به نظر شما پاسخ داد.</li>
            </ul>
        </section>

        <section class="notifications reminders">
            <h2>یادآوری‌ها</h2>
            <ul>
                <li>چالش <strong>"ورزش روزانه"</strong> شما امروز در حال اتمام است.</li>
                <li>چالش <strong>"آشپزی سالم"</strong> را تا ۲۴ ساعت آینده کامل کنید.</li>
            </ul>
        </section>

    </main>
    @endsection('content')