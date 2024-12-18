<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات چالش - Daily Challenges</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .challenge-detail-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }

        .challenge-detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .category-tag {
            display: inline-block;
            padding: 0.2rem 0.5rem;
            font-size: 0.9rem;
            font-weight: bold;
            border-radius: 10px;
            background-color: #e9ecef;
            margin-bottom: 10px;
        }

        .btn-custom {
            background-color: #17a2b8;
            color: white;
        }

        .btn-custom:hover {
            background-color: #138496;
        }

        .icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .comment-section {
            margin-top: 30px;
        }

        .comment-box {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .comment-btn {
            background-color: #17a2b8;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .comment {
            margin-top: 15px;
        }

        .comment p {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }

        .comment-footer {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-primary text-center">جزئیات چالش</h1>
    <p class="text-center text-muted mb-5">اطلاعات بیشتر و کامنت‌های کاربران</p>

    <!-- Challenge Detail Card -->
    <div class="card challenge-detail-card shadow-sm">
        <div class="card-body text-center">
            <div class="icon text-success">🚶‍♂️</div>
            <h5 class="card-title">چالش پیاده‌روی</h5>
            <p class="category-tag">فیزیکی</p>
            <p class="card-text">
                این چالش به شما کمک می‌کند تا روز خود را با 20 دقیقه پیاده‌روی در فضای باز شروع کنید. در کنار لذت بردن از هوای تازه، بدن شما فعال‌تر می‌شود.
            </p>
            <p class="card-text">
                این فعالیت به بهبود سلامتی، تقویت سیستم قلبی و عروقی و کاهش استرس کمک می‌کند.
            </p>
            <div class="col col-md-6 mx-auto">
            <button class="btn btn-block btn-success w-100">✅ انجام شد</button>
            </div>
            
        </div>
    </div>

    <!-- Comments Section -->
    <div class="comment-section">
        <h4 class="text-center">کامنت‌ها</h4>
        
        <!-- Comment Box -->
        <textarea class="comment-box" rows="4" placeholder="نظر خود را بنویسید..."></textarea>
        <div class="text-center mt-3">
            <button class="comment-btn">ارسال کامنت</button>
        </div>

        <!-- Display Comments -->
        <div class="comment mt-4">
            <p>این چالش خیلی خوبه! من هر روز 20 دقیقه پیاده‌روی می‌کنم و حس خوبی دارم.</p>
            <div class="comment-footer text-end">
                <small>کاربر 1 - 1 ساعت پیش</small>
            </div>
        </div>
        
        <div class="comment mt-3">
            <p>واقعا موثره! این چالش به من کمک کرد تا بیشتر بیرون برم.</p>
            <div class="comment-footer text-end">
                <small>کاربر 2 - 2 ساعت پیش</small>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
