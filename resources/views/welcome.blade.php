<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>چالش‌های روزانه</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-success" href="#">چالش‌های روزانه</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#features">ویژگی‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#challenges">چالش‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">نظرات</a>
                </li>
            </ul>
            @guest
                <a href="{{ route('dashboard') }}" class="btn btn-primary text-white" style="color: #6366f1;">شروع کنید</a>
            @endguest
            @auth
                <a href="{{ route('profile') }}" class="btn btn-primary text-white" style="color: #6366f1;">پروفایل</a>
            @endauth
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="hero-section position-relative d-flex align-items-center justify-content-center text-white">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4 animate-up">زندگی پر از چالش‌های جذاب</h1>
        <p class="lead mb-4 animate-up">هر روز یک چالش جدید برای رشد شخصی و موفقیت</p>
        <div class="d-flex justify-content-center gap-3 animate-up">
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-light">شروع رایگان</a>
            <a href="#how-it-works" class="btn btn-lg btn-outline-light">بیشتر بدانید</a>
        </div>
    </div>
</header>

<main>
    <!-- Features Section -->
    <section id="features" class="py-6">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">چرا چالش‌های روزانه؟</h2>
                <p class="text-muted">ابزاری قدرتمند برای رشد شخصی و حرفه‌ای</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h4>رقابت سالم</h4>
                        <p>با دوستانتان در چالش‌های مختلف رقابت کنید و امتیاز جمع کنید</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>جامعه پویا</h4>
                        <p>عضوی از جامعه‌ای پویا و هدفمند باشید</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>پیشرفت مداوم</h4>
                        <p>پیشرفت خود را به صورت آماری دنبال کنید</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Daily Challenges -->
    <section id="challenges" class="bg-light py-6">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">چالش‌های امروز</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="challenge-card">
                        <span class="challenge-badge">آسان</span>
                        <h3>مدیتیشن صبحگاهی</h3>
                        <p>۱۰ دقیقه مدیتیشن برای شروع روزی پر انرژی</p>
                        <div class="challenge-meta">
                            <span><i class="fas fa-users"></i> ۲۵۰ شرکت‌کننده</span>
                            <span><i class="fas fa-clock"></i> ۱۰ دقیقه</span>
                        </div>
                        <button class="btn btn-custom btn-warning w-100">شرکت در چالش</button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="challenge-card">
                        <span class="challenge-badge bg-warning">متوسط</span>
                        <h3>مطالعه روزانه</h3>
                        <p>۳۰ دقیقه مطالعه کتاب مورد علاقه‌تان</p>
                        <div class="challenge-meta">
                            <span><i class="fas fa-users"></i> ۱۸۰ شرکت‌کننده</span>
                            <span><i class="fas fa-clock"></i> ۳۰ دقیقه</span>
                        </div>
                        <button class="btn btn-custom btn-warning w-100">شرکت در چالش</button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="challenge-card">
                        <span class="challenge-badge bg-danger">سخت</span>
                        <h3>ورزش روزانه</h3>
                        <p>۴۵ دقیقه تمرین ورزشی متنوع</p>
                        <div class="challenge-meta">
                            <span><i class="fas fa-users"></i> ۱۲۰ شرکت‌کننده</span>
                            <span><i class="fas fa-clock"></i> ۴۵ دقیقه</span>
                        </div>
                        <button class="btn btn-custom btn-warning w-100">شرکت در چالش</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-6">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">تجربه کاربران</h2>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <div class="avatar">م</div>
                            <div>
                                <h5>مریم احمدی</h5>
                                <p class="text-muted">کاربر فعال - ۶ ماه</p>
                            </div>
                        </div>
                        <p class="testimonial-text">«چالش‌های روزانه به من کمک کرد عادت‌های سالم رو در خودم ایجاد کنم.»</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <div class="avatar">ع</div>
                            <div>
                                <h5>علی محمدی</h5>
                                <p class="text-muted">کاربر فعال - ۳ ماه</p>
                            </div>
                        </div>
                        <p class="testimonial-text">«رقابت دوستانه با بقیه کاربرها انگیزه من رو چند برابر کرده.»</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <div class="avatar">س</div>
                            <div>
                                <h5>سارا کریمی</h5>
                                <p class="text-muted">کاربر فعال - ۱ سال</p>
                            </div>
                        </div>
                        <p class="testimonial-text">«بهترین تصمیمی که گرفتم عضویت در این پلتفرم بود.»</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="fw-bold">چالش‌های روزانه</h5>
                <p>پلتفرم رشد شخصی از طریق چالش‌های روزانه</p>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-telegram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                </div>
            </div>


        </div>

        <hr class="my-4">

        <div class="text-center">
            <p class="mb-0">© ۲۰۲۴ چالش‌های روزانه. تمامی حقوق محفوظ است.</p>
        </div>
    </div>
</footer>

<style>
    :root {
        --primary: #ff85a2;
        --secondary: #ffc300;

    }

    body {
        font-family: 'Vazirmatn', system-ui, -apple-system, sans-serif;
        /*background: linear-gradient(120deg, #00d2ff, #3a7bd5);*/

    }

    .py-6 {
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    .animate-up {
        animation: fadeInUp 0.5s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Feature Cards */
    .feature-card {
        background: white;
        border-radius: 1rem;
        padding: 2rem;
        text-align: center;
        transition: transform 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .feature-card:hover {
        transform: translateY(-10px);
    }

    .icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .icon-wrapper i {
        font-size: 1.5rem;
        color: white;
    }

    /* Challenge Cards */
    .challenge-card {
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        padding-top: 3.5rem;
        position: relative;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .challenge-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: var(--primary);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 2rem;
        font-size: 0.875rem;
    }

    .challenge-meta {
        display: flex;
        justify-content: space-between;
        margin: 1rem 0;
        color: #6c757d;
        font-size: 0.875rem;
    }

    /* Testimonial Cards */
    .testimonial-card {
        background: white;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .testimonial-profile {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--primary);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    /* Buttons */
    .btn-primary {
        background: var(--primary);
        border-color: var(--primary);
    }

    .btn-custom {
        background: #6366f1;
        color: white;
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 10px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background: #4f46e5;
        color: white;
        transform: translateY(-2px);
    }

    .btn-lg:hover {
        background: #4f46e5;
        border-color: #4f46e5;
        color: #ffffff;
    }

    /* Footer */
    footer .social-links a {
        font-size: 1.5rem;
        transition: opacity 0.3s;
    }

    footer .social-links a:hover {
        opacity: 0.8;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-section {
            min-height: 80vh;
        }

        .feature-card,
        .challenge-card,
        .testimonial-card {
            margin-bottom: 1rem;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
