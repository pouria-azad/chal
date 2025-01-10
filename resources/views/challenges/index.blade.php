
@extends('layout.app')
@section('title', 'چالش‌های پیشنهادی')

@section('css')
    <link href="{{ asset('css/listOfChallenges.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection('css')

@section('content')
    <div class="container">
        <h1 class="text-dark text-center mt-5">🎯 چالش‌های پیشنهادی</h1>
        <p class="text-center text-muted mb-4">
            چالش‌های هیجان‌انگیز برای ارتقای سطح شما. یکی را انتخاب کنید و شروع کنید!
        </p>

        <div class="text-center my-4">
            <a href="{{ route('challenges.create') }}" class="btn btn-pink btn-lg">+ افزودن چالش</a>
        </div>

        <div class="search-container">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="چالش مورد نظر خود را جستجو کنید...">
                <button class="search-button">جستجو</button>
                <button class="filter-button">فیلترها</button>
            </div>
            <div class="filter-container hidden" id="filter-section">
                <div class="category-filter">
                    <h5>دسته‌بندی</h5>
                    <label for="categories">انتخاب دسته‌بندی:</label>
                    <select id="categories">
                        <option value="all">همه</option>
                        <option value="health">سلامتی</option>
                        <option value="productivity">بهره‌وری</option>
                        <option value="fun">سرگرمی</option>
                    </select>
                </div>
                <div class="sort-filter">
                    <h5>مرتب‌سازی</h5>
                    <label for="sort">مرتب‌سازی بر اساس:</label>
                    <select id="sort">
                        <option value="newest">جدیدترین</option>
                        <option value="popular">محبوب‌ترین</option>
                        <option value="points">امتیاز</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            @foreach($chals as $chal)
                @php($exists = \App\Models\ChalUser::where('chal_id', $chal['id'])->where('user_id', auth()->user()->id)->exists())
                @php($status = \App\Models\ChalUser::where('chal_id', $chal['id'])->where('user_id', auth()->user()->id)->where('status', 1)->exists())

                @if(!$status)
                    <div class="col-md-4">
                        <div class="challenge-card">
                            <div class="challenge-banner">
                            <span class="challenge-icon">
                                {{ $chal->Cat()->first()->emoji ?? '🎯' }}
                            </span>
                            </div>
                            <div class="challenge-content">
                                <span class="challenge-tag bg-warning">سخت</span>
                                <h3 class="challenge-title">{{ $chal['name'] }}</h3>
                                <p class="challenge-description">{{ $chal['desc'] }}</p>
                                <div class="challenge-meta">
                                    <span><i class="fas fa-users"></i> ۲۵۰ شرکت‌کننده</span>
                                    <span><i class="fas fa-clock"></i> ۱۰ دقیقه</span>
                                </div>
                                @if(!$exists)
                                    <form action="{{ route('chaluser.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $chal['id'] }}">
                                        <button type="submit" class="join-button">پیوستن به چالش</button>
                                    </form>
                                @else
                                    <button class="join-button-2" onclick="window.location='{{ route("dashboard") }}'">
                                        مشاهده چالش
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
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
    <script>
        const filterButton = document.querySelector('.filter-button');
        const filterSection = document.getElementById('filter-section');

        filterButton.addEventListener('click', () => {
            filterSection.classList.toggle('hidden');
        });

    </script>
@endsection('js')
