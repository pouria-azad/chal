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

        :root {
            --primary: #ff85a2;
            --secondary: #ffc300;

        }

        /* Buttons */
        .btn-primary-1 {
            background: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary-1:hover {
            background: var(--secondary);
            border-color: var(--secondary);
        }


        body {
            background: linear-gradient(135deg, #ff85a2, #ffc300);
            font-family: 'Vazir', Arial, sans-serif;
            color: #2d3748;

        }

        .breadcrumb {

            border-radius: 5px;
        }
        .breadcrumb-item a {
            text-decoration: none;
            color: #000000;
        }
        .breadcrumb-item.active {
            font-weight: bold;
            color: rgba(33, 37, 41, 0.75);
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="#">چالش‌های روزانه</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">داشبورد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'challenges.index' ? 'active' : '' }}" href="{{ route('challenges.index') }}">چالش‌ها</a>
                    </li>
                    <li class="nav-item" style="position: relative;">
                        <a class="nav-link" href="{{ route('notif') }}">
                            اعلان‌ها
                            <span class="badge badge-pill badge-primary" style="position: absolute; right: 0; top: -5px;background-color: red; color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;">1</span>
                        </a>
                    </li>
                </ul>
                <a href="{{ route('profile') }}" class="btn btn-primary-1 btn-primary text-white {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"  href="{{ route('profile') }}">پروفایل</a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mt-2 mx-2" style="padding-top: 55px">
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.2/dist/sweetalert2.all.min.js"></script>
    <script>
        function showCelebrationAlert() {
            Swal.fire({
            title: "آفرین! 🎉",
            width: 600,
            timer: 5000,
            timerProgressBar: false,
            padding: "3em",
            color: "#ffff",
            text: "",
                html: `
                       <div style="text-align: center; font-family: Arial, sans-serif; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                          <p style="font-size: 18px;">شما چالش <strong>20 دقیقه پیاده‌روی</strong> را با موفقیت انجام دادید.</p>
                          <p style="font-size: 16px; color: #c2c2c2;">امتیازات شما: <span style="color: #b1ffd0; font-weight: bold;">+10</span></p>
                        </div>
                        `,
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
        function message($m = ' ', $t = 'success'){
            Swal.fire({
                title: "",
                text: $m,
                icon: $t,
                confirmButtonText: "بستن",
                timer: 5000,
            });
        }

    </script>


@if(session('success'))
    <script>
        message('{{session('success')}}' , 'success');
    </script>
@elseif(session('warning'))
    <script>
        message('{{session('warning')}}' , 'warning');
    </script>
@elseif(session('done'))
    <script>
        showCelebrationAlert()
    </script>
@endif
<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2024 چالش‌های روزانه. همه حقوق محفوظ است.</p>
</footer>



</body>
</html>
