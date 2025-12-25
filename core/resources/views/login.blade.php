<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ورود به سیستم</title>
    <link rel="stylesheet" href="/MyWebsite/ERP/css/style.css">
</head>
<body>
    <div class="container">
        <h2>فرم ورود</h2>
        <form method="POST" action="/login">
            @csrf
            <label>شماره تماس</label>
            <input type="text" name="phone" placeholder="شماره تماس">

            <label>رمز عبور</label>
            <input type="password" name="password" placeholder="رمز عبور">

            <button type="submit">ورود</button>
        </form>

        <!-- نمایش پیام‌ها -->
        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif
    </div>
</body>
</html>

