<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Việc tốt</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- font google -->
    <link rel="stylesheet" href="{{ asset('fonts/Inter/Inter-VariableFont_opsz,wght.ttf') }}">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Load CSS -->
    @vite(['resources/css/auth.css'])
</head>
<body>
    <div class="container">
        <img class="login__background" src="{{ asset('storage/uploads/blue2.jpg') }}" alt="">
        <div class="login">
            <div class="login__container">
                <h3 class="login__title"><i class="fa-solid fa-hotel"></i> ĐĂNG NHẬP</h3>
                <div class="login__input">
                    <input type="text" id="email" placeholder="">
                    <label for="email">Email</label>
                </div>
                <div class="login__input">
                    <input type="text" id="password" placeholder="">
                    <label for="password">Mật khẩu</label>
                </div>
                <p class="login__recoverPass"><a href="#">Quên mật khẩu</a></p>
                <button class="login__submit">Đăng nhập</button>
                <p style="margin: 16px 0; text-align: center; font-size: 1.4rem;">hoặc</p>
                <a href="#" class="login__another"><i class="fa-brands fa-google" style="color: #de3d31;"></i> Đăng nhập bằng google</a>
                <a href="#" class="login__another"><i class="fa-brands fa-facebook" style="color: #106aff;"></i> Đăng nhập bằng facebook</a>
                <p class="login__register">Chưa có tài khoản? <a href="#">Đăng ký tài khoản mới</a></p>
            </div>
        </div>
    </div>
</body>
</html>