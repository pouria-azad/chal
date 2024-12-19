<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Dashboard - Daily Challenges')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    @yield('css')
    <style>
        .breadcrumb {
            
            border-radius: 5px; 
        }
        .breadcrumb-item a {
            text-decoration: none;
            color: #007bff;
        }
        .breadcrumb-item.active {
            font-weight: bold;
            color: #6c757d;
        }

        .hello {
            height: 60px; /* ارتفاع ناوبری */
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background 0.5s ease;
            background: linear-gradient(90deg, #6a11cb, #2575fc); /* گرادیانت اولیه */ 
            width: 100%;
            height: 100%;
        }

        div:where(.swal2-container).swal2-center>.swal2-popup {
            border-radius: 25px;
        }

    </style>

</head>
<body style="direction: rtl;">
<!-- Navbar (Menu) -->



<div class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary hello">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">چالش‌های روزانه</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">داشبورد</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"  href="{{ route('profile') }}">پروفایل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'group' ? 'active' : '' }}" href="{{ route('group') }}">چالش‌ها</a>
                </li>
                <li class="nav-item" style="position: relative;">
                    <a class="nav-link" href="{{ route('notif') }}">
                        اعلان‌ها
                        <span class="badge badge-pill badge-primary" style="position: absolute; right: 0; top: -5px;background-color: red; color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;">1</span>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mt-2 mx-2">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">  
            <li class="breadcrumb-item">  
                <a href="{{ route('dashboard') }}">داشبورد</a>  
            </li>  
            @if(Route::currentRouteName() == 'profile')  
                <li class="breadcrumb-item active" aria-current="page">پروفایل</li>  
            @elseif(Route::currentRouteName() == 'group')  
                <li class="breadcrumb-item active" aria-current="page">چالش‌ها</li>  
            @elseif(Route::currentRouteName() == 'settings') 
                <li class="breadcrumb-item">  
                    <a href="{{ route('profile') }}">پروفایل</a>  
                </li>   
                <li class="breadcrumb-item active" aria-current="page">تنظیمات</li>  
            @elseif(Route::currentRouteName() == 'ss')  
                <li class="breadcrumb-item active" aria-current="page">آمار و پیشرفت</li>  
            @elseif(Route::currentRouteName() == 'hist')  
                <li class="breadcrumb-item active" aria-current="page">تاریخچه چالش‌ها</li>  
            @elseif(Route::currentRouteName() == 'leaderboard')  
                <li class="breadcrumb-item active" aria-current="page">رتبه‌بندی چالش‌ها</li> 
            @elseif(Route::currentRouteName() == 'notif')  
                <li class="breadcrumb-item active" aria-current="page">اعلان‌ها</li>   
            @endif  
        </ol>  
    </nav>

    <!-- Main Content -->
    <div class="content">
        <!-- Your main page content -->
        @yield('content')
    </div>
</div>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('js')
<script>
        let angle = 90;

        function rotateGradient() {
            angle = (angle + 20) % 360; // افزایش زاویه با سرعت کمتر
            document.querySelector('nav').style.background = `linear-gradient(${angle}deg, #6a11cb, #2575fc)`;
        }

        setInterval(rotateGradient, 4000); // هر 50 میلی‌ثانیه چرخش
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.2/dist/sweetalert2.all.min.js"></script>
    <script>
        function showCelebrationAlert() {  
            Swal.fire({
            title: "آفرین بهت! 🏆",
            width: 600,
            timer: 5000,
            timerProgressBar: true,
            padding: "3em",
            color: "#ffff",
            text: "وضعیت چالش امروزت به انجام شده تغییر پیدا کرد.",
            confirmButtonText: "بستن",
            background: "#fff url(/img/ww.jpg)",
            backdrop: `
                rgba(0,0,123,0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
            `
            });
        }
    </script>
<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2024 چالش‌های روزانه. همه حقوق محفوظ است.</p>
</footer>



</body>
</html>
