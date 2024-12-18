<!DOCTYPE html>  
<html lang="fa" dir="rtl">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>تنظیمات حریم خصوصی</title>  
    <style>  
        body {  
            font-family: 'Tahoma', sans-serif;  
            margin: 0;  
            padding: 0;  
            background-color: #eef2f3;  
            color: #444;  
        }  
        .container {  
            max-width: 600px;  
            margin: 20px auto;  
            padding: 25px;  
            background: #fff;  
            border-radius: 10px;  
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  
        }  
        h1 {  
            text-align: center;  
            color: #007bff;  
        }  
        .section {  
            margin-bottom: 25px;  
            padding: 15px;  
            border-radius: 8px;  
            background: #f9f9f9;  
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);  
        }  
        .section h3 {  
            margin-bottom: 15px;  
            font-size: 20px;  
            color: #333;  
            border-bottom: 2px solid #007bff;  
            padding-bottom: 5px;  
        }  
        button {  
            width: 100%;  
            padding: 10px;  
            margin: 5px 0;  
            border: none;  
            border-radius: 5px;  
            font-size: 16px;  
            background-color: #007bff;  
            color: #fff;  
            cursor: pointer;  
            transition: background-color 0.3s;  
        }  
        button:hover {  
            background-color: #0056b3;  
        }  
        .checkbox-label {  
            display: flex;  
            align-items: center;  
            margin-bottom: 10px;  
        }  
        .checkbox-label input {  
            margin-left: 10px;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h1>تنظیمات حریم خصوصی</h1>  
        <div class="section">  
            <h3>تنظیمات حریم خصوصی</h3>  
            <div class="checkbox-label">  
                <label>پروفایل من فقط برای دوستان نمایش داده شود.</label>  
                <input type="checkbox">  
            </div>  
            <div class="checkbox-label">  
                <label>به اشتراک گذاری چالش‌ها با دیگران</label>  
                <input type="checkbox">  
            </div>  
        </div>  
        <button onclick="location.href='{{ route('settings') }}'">بازگشت به تنظیمات</button>  
    </div>  
</body>  
</html>  