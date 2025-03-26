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
        <div class="login">
            <img class="login__background" src="{{ asset('storage/uploads/blue2.jpg') }}" alt="">
            <div class="login__container">
                <a href="./" class="exit"><i class="fa-solid fa-house"></i></a>
                <h3 class="login__title"><i class="fa-solid fa-registered"></i> ĐĂNG KÝ</h3>
                <form action="{{ route('register') }}" method="POST">
                    {{-- @csrf --}}
                    {!! csrf_field() !!}
                    <div class="login__input">
                        <input type="text" name="name" id="name" placeholder="" required>
                        <label for="name">Họ và tên</label>
                    </div>
                    <div class="login__input">
                        <input type="email" name="email" id="email" placeholder="" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="login__input">
                        <input type="password" name="password" id="password" placeholder="" required>
                        <label for="password">Mật khẩu</label>
                    </div>
                    <div class="login__input">
                        <input type="text" name="code" id="code" placeholder="" class="send-code__input" required>
                        <label for="code">Mã xác nhận</label>
                        <div class="send-code">Gửi mã</div>
                    </div>
                    <div class="login__input">
                        <select name="role" id="role">
                            <option value="ungvien">Tôi là ứng viên</option>
                            <option value="nhatuyendung">Tôi là nhà tuyển dụng</option>
                        </select>
                    </div>
                    <div class="login__terms">
                        <input type="checkbox" id="terms" required>
                        <span>Tôi đồng ý với các <a href="#">điều khoản</a> và <a href="#">chính sách</a></span>
                    </div>
                    <button type="submit" class="login__submit">Đăng ký</button>
                </form>
                <p style="margin: 16px 0; text-align: center; font-size: 1.4rem;">hoặc</p>
                {{-- <a href="#" class="login__another"><i class="fa-brands fa-google" style="color: #de3d31;"></i> Đăng nhập bằng google</a>
                <a href="#" class="login__another"><i class="fa-brands fa-facebook" style="color: #106aff;"></i> Đăng nhập bằng facebook</a> --}}
                <p class="login__register">Đã có tài khoản? <a href="{{ route('login.form') }}">Đăng nhập ngay</a></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        let code = '';
        $(document).ready(function () {
            // Sự kiện click nút "Gửi mã"
            $(".send-code").click(function (e) {
                e.preventDefault(); // Ngăn chặn hành động mặc định của button (nếu có)

                // Lấy giá trị email từ input
                let email = $("#email").val();

                // Kiểm tra nếu email không được nhập
                if (!email) {
                    alert("Vui lòng nhập email trước khi gửi mã!");
                    return;
                }

                // Gửi yêu cầu AJAX
                $.ajax({
                    url: "/send-code",
                    type: "POST",
                    data: {
                        email: email, // Gửi email cùng với request
                        _token: "{{ csrf_token() }}" // Token CSRF
                    },
                    success: function (response) {
                        // Hiển thị phản hồi từ server
                        // alert("Phản hồi từ server: " + JSON.stringify(response));
                        console.log(response); // Log phản hồi ra console để kiểm tra
                        code = response.data;
                        alert("Đã gửi mã xác nhận thành công!");
                    },
                    error: function (xhr) {
                        alert("Gửi mã thất bại! Vui lòng thử lại.");
                    }
                });
            });

            // Sự kiện submit form
            $("form").submit(function (e) {
                // Lấy giá trị từ input code
                let inputCode = $("#code").val();

                // Kiểm tra xem input code có giống với biến code không
                if (inputCode !== code) {
                    alert("Mã xác nhận không đúng! Vui lòng kiểm tra lại.");
                    e.preventDefault(); // Ngăn chặn việc submit form
                } else {
                    alert("Mã xác nhận đúng. Đang tiến hành đăng ký...");
                    // Cho phép submit form
                }
            });
        });
        
    </script> --}}
    <script>
        let code = '';
        let countdown = 60; // Thời gian đếm ngược (giây)
        let timer; // Biến lưu bộ đếm

        $(document).ready(function () {
            // gui ma xac nhan
            $(".send-code").click(function (e) {
                e.preventDefault(); // Ngăn chặn hành động mặc định của button (nếu có)

                let email = $("#email").val();
                if (!email) {
                    alert("Vui lòng nhập email trước khi gửi mã!");
                    return;
                }

                // Kiểm tra nếu đang trong thời gian đếm ngược thì không cho gửi tiếp
                if (countdown < 60) {
                    alert(`Vui lòng chờ ${countdown} giây trước khi gửi lại.`);
                    return;
                }

                // Gửi yêu cầu AJAX
                $.ajax({
                    url: "/send-code",
                    type: "POST",
                    data: {
                        email: email,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        console.log(response);
                        code = response.data;
                        alert("Đã gửi mã xác nhận thành công!");

                        // Vô hiệu hóa nút gửi mã và bắt đầu đếm ngược
                        $(".send-code").prop("disabled", true).text(`Gửi lại sau ${countdown}s`);
                        timer = setInterval(updateCountdown, 1000);
                    },
                    error: function () {
                        alert("Gửi mã thất bại! Vui lòng thử lại.");
                    }
                });
            });

            function updateCountdown() {
                countdown--;
                $(".send-code").text(`Gửi lại sau ${countdown}s`);

                if (countdown <= 0) {
                    clearInterval(timer);
                    $(".send-code").prop("disabled", false).text("Gửi mã");
                    countdown = 60; // Reset thời gian đếm ngược
                }
            }

            $("form").submit(function (e) {
                let inputCode = $("#code").val();
                if (inputCode !== code) {
                    alert("Mã xác nhận không đúng! Vui lòng kiểm tra lại.");
                    e.preventDefault();
                } else {
                    alert("Mã xác nhận đúng. Đang tiến hành đăng ký...");
                }
            });
        });

    </script>
</body>
</html>