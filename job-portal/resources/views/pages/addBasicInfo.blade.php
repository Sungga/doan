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
            <a href="./" class="exit"><i class="fa-solid fa-house"></i></a>
            <img class="login__background" src="{{ asset('storage/uploads/blue2.jpg') }}" alt="">
            <div class="login__container">
                <h3 class="login__title">{{ $name }}</h3>
                <form action="{{ route('addBasicInfo') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                    <div class="login__input">
                        <p class="login__name">Tỉnh - thành phố</p>
                        <select name="province" id="province" class="provinces">
                        </select>
                    </div>
                    <div class="login__input">
                        <p class="login__name">Quận - huyện</p>
                        <select name="district" id="district" class="district">
                        </select>
                    </div>
                    <div class="login__input">
                        <p class="login__name">Ngày sinh</p>
                        <input type="date" name="birthdate" id="birthdate" required>
                    </div>
                    <div class="login__input">
                        <p class="login__name">Giới tính</p>
                        <select name="sex" id="sex">
                            <option value="nam">Nam</option>
                            <option value="nữ">Nữ</option>
                            <option value="khác">khác</option>
                        </select>
                    </div>
                    <div class="login__input">
                        <p class="login__name">Số điện thoại</p>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                    <div class="login__input">
                        <p class="login__name">Công việc quan tâm chính</p>
                        <select name="category_id" id="">
                            @foreach($categories as $category)
                                <option value="{{$category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="login__submit" style="margin-top: 28px;">Thêm thông tin</button>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        async function getDataAPI() {
            const url = "https://provinces.open-api.vn/api/?depth=2";

            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Lỗi: ${response.status}`);
                }
                const data = await response.json();
                return Array.isArray(data) ? data : []; // Đảm bảo luôn là mảng
            } catch (error) {
                console.error("Lỗi khi gọi API:", error);
                return []; // Trả về mảng rỗng nếu có lỗi
            }
        }

        // Gọi và lấy dữ liệu ngay
        async function getData() {
            const data = await getDataAPI(); // Lấy dữ liệu
            return data;
        }

        // Tạo selectbox chức năng chọn tỉnh/thành phố
        async function createSelectBox() {
            const data = await getData(); // Lấy dữ liệu
            
            let provincesSelectBoxHtml = '';
            for(let i = 0; i < data.length; i++) {
                provincesSelectBoxHtml += `
                <option value="${data[i].code}">${data[i].name}</option>
                `;
            }
            
            let provincesSelectBox = document.querySelector('.provinces');
            provincesSelectBox.innerHTML = provincesSelectBoxHtml;
        }

        async function createDistrictSelectBox() {
            
        }

        createSelectBox();
    </script> --}}

    <script>
        async function getDataAPI() {
            const url = "https://provinces.open-api.vn/api/?depth=2";
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Lỗi: ${response.status}`);
                }
                const data = await response.json();
                return Array.isArray(data) ? data : []; // Đảm bảo luôn là mảng
            } catch (error) {
                console.error("Lỗi khi gọi API:", error);
                return []; // Trả về mảng rỗng nếu có lỗi
            }
        }

        async function loadProvinces() {
            const data = await getDataAPI();
            const provincesSelectBox = document.querySelector('.provinces');
            let options = `<option value="">Chọn tỉnh/thành phố</option>`;

            data.forEach(province => {
                options += `<option value="${province.code}">${province.name}</option>`;
            });

            provincesSelectBox.innerHTML = options;

            // Khi chọn tỉnh/thành phố, gọi hàm loadDistricts
            provincesSelectBox.addEventListener('change', function() {
                const selectedCode = this.value;
                loadDistricts(selectedCode, data);
            });
        }

        function loadDistricts(provinceCode, data) {
            const districtsSelectBox = document.querySelector('.district');
            let options = `<option value="">Chọn quận/huyện</option>`;

            if (provinceCode) {
                const selectedProvince = data.find(province => province.code == provinceCode);
                if (selectedProvince && selectedProvince.districts) {
                    selectedProvince.districts.forEach(district => {
                        options += `<option value="${district.code}">${district.name}</option>`;
                    });
                }
            }

            districtsSelectBox.innerHTML = options;
        }

        loadProvinces();

        // Kiểm tra khi gửi form
        document.querySelector("form").addEventListener("submit", function(event) {
            const province = document.querySelector(".provinces").value;
            const district = document.querySelector(".district").value;

            if (!province) {
                alert("Vui lòng chọn tỉnh/thành phố!");
                event.preventDefault(); // Ngăn form gửi đi
                return;
            }

            if (!district) {
                alert("Vui lòng chọn quận/huyện!");
                event.preventDefault(); // Ngăn form gửi đi
                return;
            }
        });
    </script>
</body>
</html> 