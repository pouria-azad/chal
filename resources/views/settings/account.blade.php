<!DOCTYPE html>  
<html lang="fa" dir="rtl">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>تنظیمات حساب کاربری</title>  
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
        label {  
            display: block;  
            margin: 10px 0 5px;  
            font-weight: bold;  
            color: #555;  
        }  
        input[type="text"],  
        input[type="email"] {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 15px;  
            border: 1px solid #ccc;  
            border-radius: 5px;  
            font-size: 16px;  
            transition: border-color 0.3s;  
        }  
        input[type="text"]:focus,  
        input[type="email"]:focus {  
            border-color: #007bff;  
            outline: none;  
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
    </style>  
</head>  
<body>  
    <div class="container">  
        <h1>تنظیمات حساب کاربری</h1>  
        <div class="section">  
            <h3>تنظیمات حساب کاربری</h3>  
            <label for="username">نام کاربری</label>  
            <input type="text" id="username" placeholder="نام کاربری جدید">  
            <label for="profile-picture">تصویر پروفایل</label>  
            <input type="file" id="profile-picture">  
            <label for="email">ایمیل</label>  
            <input type="email" id="email" placeholder="ایمیل جدید">  
        </div>  
        <button onclick="location.href='{{ route('settings') }}'">بازگشت به تنظیمات</button>  
    </div>  
</body>  
</html>  