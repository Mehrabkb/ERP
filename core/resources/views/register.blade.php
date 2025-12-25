<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="/MyWebsite/ERP/css/style.css">
</head>

<body>
    <h2>فرم ثبت نام</h2>
    <form method="POST" action="/register">
        @csrf
        <label>نام</label>
        <input type="text" name="first_name">

        <label>نام خانوادگی</label>
        <input type="text" name="last_name">

        <label>شماره تماس</label>
        <input type="text" name="phone">

        <label>رمز عبور</label>
        <input type="password" name="password">

        <button type="submit">ثبت نام</button>
    </form>
</body>

</html>