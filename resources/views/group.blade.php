
@extends('layout.app')
@section('title', 'چالش‌های پیشنهادی')
@section('css')
<link href="{{ asset('css/group.css') }}" rel="stylesheet">
@endsection('css')

@section('content')
<h1 class="text-primary text-center mt-5">🎯 چالش‌های پیشنهادی</h1>
    <p class="text-center text-muted mb-4">چالش‌های هیجان‌انگیز برای ارتقای سطح شما. یکی را انتخاب کنید و شروع کنید!</p>

    <div class="search-container">
        <input type="text" class="search-input" placeholder="جستجوی چالش..." id="searchInput">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="challenge-card">
                    <div class="challenge-banner">
                        <span class="challenge-icon">🚶‍♂️</span>
                    </div>
                    <div class="challenge-content">
                        <span class="challenge-tag">فیزیکی</span>
                        <h3 class="challenge-title">چالش پیاده‌روی گروهی</h3>
                        <p class="challenge-description">یک پیاده‌روی گروهی ۲۰ دقیقه‌ای برای تقویت ارتباطات!</p>
                        <div class="progress-container">
                            <div class="progress-bar-custom" style="width: 70%"></div>
                        </div>
                        <button class="join-button">پیوستن به چالش</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="challenge-card">
                    <div class="challenge-banner">
                        <span class="challenge-icon">🎨</span>
                    </div>
                    <div class="challenge-content">
                        <span class="challenge-tag">هنری</span>
                        <a href='google.ocom' style='text-decoration: none;'><h3 class="challenge-title">چالش هنری گروهی</h3></a>
                        <p class="challenge-description">با دوستان خود یک نقاشی گروهی بسازید!</p>
                        <div class="progress-container">
                            <div class="progress-bar-custom" style="width: 50%"></div>
                        </div>
                        <button class="join-button">پیوستن به چالش</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="challenge-card">
                    <div class="challenge-banner">
                        <span class="challenge-icon">🤝</span>
                    </div>
                    <div class="challenge-content">
                        <span class="challenge-tag">اجتماعی</span>
                        <h3 class="challenge-title">چالش اجتماعی گروهی</h3>
                        <p class="challenge-description">با گروه خود یک فعالیت اجتماعی انجام دهید!</p>
                        <div class="progress-container">
                            <div class="progress-bar-custom" style="width: 40%"></div>
                        </div>
                        <button class="join-button">پیوستن به چالش</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('js')
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchText = this.value.toLowerCase();
            const cards = document.querySelectorAll('.challenge-card');
            
            cards.forEach(card => {
                const title = card.querySelector('.challenge-title').textContent.toLowerCase();
                const tag = card.querySelector('.challenge-tag').textContent.toLowerCase();
                const description = card.querySelector('.challenge-description').textContent.toLowerCase();
                
                if (title.includes(searchText) || tag.includes(searchText) || description.includes(searchText)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
@endsection('js')