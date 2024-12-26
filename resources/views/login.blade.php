<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به چالش روزانه</title>
    <!-- اضافه کردن لینک به فایل CSS بوت‌استرپ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
<div class="login-container">
    <h1 class="text-center">به چالش روزانه خوش آمدید!</h1>
    <p class="text-center">وارد شوید و ماجراجویی خود را آغاز کنید.</p>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="ایمیل" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="رمز عبور" required>
        </div>
        <button type="submit" class="btn btn-warning w-100 text-dark">ورود</button>
    </form>
    <div class="signup text-center mt-3">
        <p>حساب کاربری ندارید؟ <a href="#">ثبت‌نام کنید</a></p>
    </div>
</div>

@if ($errors)
    <span class="invalid-feedback">
        <strong>{{ $errors }}</strong>
    </span>
@endif

</body>
</html>
