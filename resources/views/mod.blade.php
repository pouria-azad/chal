<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>چالش‌ها - انتخاب چالش</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .modal-content {
            border-radius: 15px;
        }

        .modal-header {
            background-color: #17a2b8;
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .modal-body {
            text-align: center;
            padding: 30px;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
        }

        .share-buttons button {
            background-color: #1da1f2;
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            padding: 10px;
            transition: transform 0.3s ease;
        }

        .share-buttons button:hover {
            transform: scale(1.1);
        }

        .btn-custom {
            background-color: #17a2b8;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #138496;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .congratulation-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #28a745;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Button to trigger modal -->
<button type="button" class="btn btn-custom mt-5" data-bs-toggle="modal" data-bs-target="#challengeModal">
    انتخاب چالش
</button>

<!-- Modal -->
<div class="modal fade" id="challengeModal" tabindex="-1" aria-labelledby="challengeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="challengeModalLabel">تبریک! چالش جدید شما</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="icon text-success">🎉</div>
                <p class="congratulation-text">ایول! شما چالش "چالش پیاده‌روی" رو انتخاب کردید.</p>
                <p>حالا می‌توانید این چالش را با دوستانتان به اشتراک بگذارید و از آن‌ها دعوت کنید که به شما ملحق شوند!</p>
                
                <!-- Share Buttons -->
                <div class="share-buttons">
                    <button onclick="window.open('https://twitter.com/share?url=http://example.com/challenge1&text=چالش+پیاده‌روی&hashtags=چالش')">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://example.com/challenge1')">
                        <i class="fab fa-facebook"></i>
                    </button>
                    <button onclick="window.open('https://api.whatsapp.com/send?text=http://example.com/challenge1')">
                        <i class="fab fa-whatsapp"></i>
                    </button>
                </div>

                <!-- Button to go to challenge page -->
                <button type="button" class="btn btn-custom mt-4" onclick="window.location.href='challenge_page.html'">برو به صفحه چالش</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>
