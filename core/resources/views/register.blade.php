<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>صفحه لاگین و ثبت‌نام</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Vazirmatn', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .container {
      width: 400px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      overflow: hidden;
    }

    .tabs {
      display: flex;
      justify-content: space-around;
      background: #f3f3f3;
    }

    .tabs button {
      flex: 1;
      padding: 15px;
      border: none;
      background: none;
      cursor: pointer;
      font-weight: 600;
      transition: background 0.3s;
    }

    .tabs button.active {
      background: #667eea;
      color: #fff;
    }

    form {
      padding: 20px;
      display: none;
      flex-direction: column;
    }

    form.active {
      display: flex;
    }

    form input {
      margin: 10px 0;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: border 0.3s;
    }

    form input:focus {
      border-color: #667eea;
    }

    form button {
      margin-top: 15px;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #667eea;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s;
    }

    form button:hover {
      background: #764ba2;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="tabs">
      <button id="loginTab" class="active">ورود</button>
      <button id="registerTab">ثبت‌نام</button>
    </div>

    <form id="loginForm" class="active">
      <input type="text" placeholder="موبایل" name="mobile" required>
      <input type="password" placeholder="رمز عبور" name="password" required>
      <button type="submit">ورود</button>
    </form>

    <form id="registerForm">
      <input type="text" placeholder="نام" name="name" required>
      <input type="text" placeholder="نام خانوادگی" name="lastname" required>
      <input type="text" placeholder="کدملی" name="nationalcode" required>
      <input type="text" placeholder="موبایل" name="mobile" required>
      <input type="password" placeholder="رمز عبور" name="password" required>
      <button type="submit">ثبت‌نام</button>
    </form>
  </div>

  <script>
    const loginTab = document.getElementById('loginTab');
    const registerTab = document.getElementById('registerTab');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    loginTab.addEventListener('click', () => {
      loginTab.classList.add('active');
      registerTab.classList.remove('active');
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
    });

    registerTab.addEventListener('click', () => {
      registerTab.classList.add('active');
      loginTab.classList.remove('active');
      registerForm.classList.add('active');
      loginForm.classList.remove('active');
    });
  </script>
</body>
</html>
