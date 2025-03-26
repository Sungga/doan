<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Việc tốt</title>

    <!-- font google -->
    <link rel="stylesheet" href="assets/font/Inter/Inter-VariableFont_opsz,wght.ttf">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Load CSS -->
    @vite(['resources/css/home.css'])

    {{-- js bieu do --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="header__left">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{ asset('storage/uploads/VIECTOT.png') }}" alt="Logo">
                    </a>
                </div>
                <ul class="header__menu">
                    <li><a class="header__item--left header__item--focus" href="#">Tìm việc làm</a></li>
                    <li><a class="header__item--left" href="#">Tuyển dụng</a></li>
                    <li><a class="header__item--left" href="#">Hồ sơ</a></li>
                </ul>
            </div>
            <div class="header__right">
                <ul class="header__menu">
                    <li><a class="header__item--right header__item--login" href="#">Đăng nhập</a></li>
                    <li><a class="header__item--right header__item--register" href="{{ route('register') }}">Đăng ký</a></li>
                    <!-- <li><a class="header__item--right header__item--account" href="#"><img src="{{ asset('storage/uploads/user.svg') }}" alt="">Trương Anh Vũ</a></li> -->
                    <li><a class="header__item--right header__item--recruit" href="#">Đăng tuyển & tìm hồ sơ</a></li>
                </ul>
            </div>
        </header>
    
        <section class="slider">
            <div class="slide__background">
                <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="">
            </div>
            <div class="grid-container">
                <div class="slider__top" style="width: 100%; height: 24px;"></div>
                <div class="search">
                    <input type="text" name="search" id="" class="search__text" placeholder="Vị trí tuyển dụng, tên công ty">
                    <div class="search__center">
                        <div class="search__location">
                            <div class="search__location--btn">
                                <p style="user-select: none;"><i class="fa-solid fa-location-dot"></i>Địa điểm</p>
                                <p><i class="fa-solid fa-angle-down"></i></p>
                            </div>
                            <div class="search__location--list">
                                <div class="search__location--province">
                                    <div class="search__location--provinceSearch">
                                        <input type="text" name="" id="" placeholder="Tìm tỉnh, thành phố,...">
                                    </div>
                                    <ul>
                                        <!-- <li>
                                            <input type="checkbox" name="" id="">
                                            <p>Hồ Chí Minh</p>
                                            <i class="fa-solid fa-angle-right search__location--toDistrict"></i>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="search__location--district">
                                    <h3>QUẬN/HUYỆN</h3>
                                    <ul>
                                        <!-- <li><input type="checkbox" name="" id="">
                                            <p>Quận 1</p>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search__right"><button class="search__btn"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button></div>
                </div>
                <div class="slider__bottom">
                    <div class="slider__category">
                        <ul class="slider__category--list">
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Kinh doanh/Bán hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Kinh doanh/Bán hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Kinh doanh/Bán hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Kinh doanh/Bán hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Kinh doanh/Bán hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Kinh doanh/Bán hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="slider__category--list">
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Công nghệ thông tin</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Công nghệ thông tin</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Công nghệ thông tin</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Công nghệ thông tin</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Công nghệ thông tin</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Công nghệ thông tin</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="slider__category--list">
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Nhân sự/Hành chính/Pháp chế</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Nhân sự/Hành chính/Pháp chế</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Nhân sự/Hành chính/Pháp chế</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Nhân sự/Hành chính/Pháp chế</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Nhân sự/Hành chính/Pháp chế</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Nhân sự/Hành chính/Pháp chế</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="slider__category--list">
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Chăm sóc khách hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Chăm sóc khách hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Chăm sóc khách hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Chăm sóc khách hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Chăm sóc khách hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                            <li>
                                <div class="slider__category--topSearch">
                                    <h3>Được tìm kiếm nhiều nhất</h3>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Nhân viên kinh doanh</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Lập trình PHP</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Trưởng phòng marketing</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Dịch vụ khách hàng</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Tư vấn bảo hiểm</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>IT Helpdesk</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Vận hành sàn thương mại điện tử</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Laravel</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Javascript</a>
                                    <a href="#"><i class="fa-solid fa-fire" style="color: #ff4242;"></i>Unity Developer</a>
                                </div>
                                <a href="#" class="slider__category--item">
                                    <p class="slider__category--name">Chăm sóc khách hàng</p>
                                    <i class="fa-solid fa-angle-right slider__category--iconToRight"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="slider__pagination">
                            <div class="slider__pagination--left">
                                <p>1/4</p>
                            </div>
                            <div class="slider__pagination--right">
                                <i class="fa-solid fa-angle-left prevButton disabled" style="margin-right: 4px;"></i>
                                <i class="fa-solid fa-angle-right nextButton"></i>
                            </div>
                        </div>
                    </div>
                    <div class="slider__bottom--right">
                        <div class="slider__jobAd">
                            <a href="#">
                                <img src="{{ asset('storage/uploads/slider_ad1.png') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('storage/uploads/slider_ad2.jpg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('storage/uploads/slider_ad3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="slider__workMarket">
                            <div class="slider__workMarket--left">
                                <h3 class="slider__workMarket--title">
                                    <i class="fa-solid fa-briefcase"></i>
                                    Thị trường việc làm <span class="slider__workMarket--time"></span>
                                </h3>
                                <p class="slider__workMarket--newJob">Việc làm mới hôm nay <span>4.538</span></p>
                            </div>
                            <div class="slider__workMarket--right">
                                <div class="slider__workMarket--totalJob">
                                    <p>Tổng việc làm <span>87.328</span></p>
                                </div>
                                <!-- <canvas class="slider__workMarket--jobChart"></canvas> -->
                                <div class="slider__workMarket--seeMore">
                                    <p>Xem chi tiết</p>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- click div class slider__workMarket--seeMore then show block__dashboard -->
        <div class="dashboard">
            <div class="dashboard__container" style="display: block;">
                <div class="dashboard__close">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <h3 class="dashboard__title">Thị trường việc làm hôm nay <span></span></h3>
                <div class="dashboard__content">
                    <div class="dashboard__left">
                        <h4>Việc làm mới nhất</h4>
                        <div class="dashboard__left--list">
                            <div class="dashboard__left--item">
                                <div class="dashboard__left--img">
                                    <a href="#">
                                        <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dashboard__left--about">
                                    <p class="dashboard__left--name"><a href="#">Nhân Viên Kinh Doanh Mảng Sàn Gỗ Thu Nhập Từ 15 - 20 Triệu</a></p>
                                    <p class="dashboard__left--company"><a href="#">CÔNG TY TNHH XÂY DỰNG VÀ THƯƠNG MẠI THẾ GIỚI SÀN</a></p>
                                    <p class="dasboard__left--location">Thành phố Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="dashboard__left--item">
                                <div class="dashboard__left--img">
                                    <a href="#">
                                        <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dashboard__left--about">
                                    <p class="dashboard__left--name"><a href="#">Nhân Viên Kinh Doanh Mảng Sàn Gỗ Thu Nhập Từ 15 - 20 Triệu</a></p>
                                    <p class="dashboard__left--company"><a href="#">CÔNG TY TNHH XÂY DỰNG VÀ THƯƠNG MẠI THẾ GIỚI SÀN</a></p>
                                    <p class="dasboard__left--location">Thành phố Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="dashboard__left--item">
                                <div class="dashboard__left--img">
                                    <a href="#">
                                        <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dashboard__left--about">
                                    <p class="dashboard__left--name"><a href="#">Nhân Viên Kinh Doanh Mảng Sàn Gỗ Thu Nhập Từ 15 - 20 Triệu</a></p>
                                    <p class="dashboard__left--company"><a href="#">CÔNG TY TNHH XÂY DỰNG VÀ THƯƠNG MẠI THẾ GIỚI SÀN</a></p>
                                    <p class="dasboard__left--location">Thành phố Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="dashboard__left--item">
                                <div class="dashboard__left--img">
                                    <a href="#">
                                        <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dashboard__left--about">
                                    <p class="dashboard__left--name"><a href="#">Nhân Viên Kinh Doanh Mảng Sàn Gỗ Thu Nhập Từ 15 - 20 Triệu</a></p>
                                    <p class="dashboard__left--company"><a href="#">CÔNG TY TNHH XÂY DỰNG VÀ THƯƠNG MẠI THẾ GIỚI SÀN</a></p>
                                    <p class="dasboard__left--location">Thành phố Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="dashboard__left--item">
                                <div class="dashboard__left--img">
                                    <a href="#">
                                        <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dashboard__left--about">
                                    <p class="dashboard__left--name"><a href="#">Nhân Viên Kinh Doanh Mảng Sàn Gỗ Thu Nhập Từ 15 - 20 Triệu</a></p>
                                    <p class="dashboard__left--company"><a href="#">CÔNG TY TNHH XÂY DỰNG VÀ THƯƠNG MẠI THẾ GIỚI SÀN</a></p>
                                    <p class="dasboard__left--location">Thành phố Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="dashboard__left--item">
                                <div class="dashboard__left--img">
                                    <a href="#">
                                        <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dashboard__left--about">
                                    <p class="dashboard__left--name"><a href="#">Nhân Viên Kinh Doanh Mảng Sàn Gỗ Thu Nhập Từ 15 - 20 Triệu</a></p>
                                    <p class="dashboard__left--company"><a href="#">CÔNG TY TNHH XÂY DỰNG VÀ THƯƠNG MẠI THẾ GIỚI SÀN</a></p>
                                    <p class="dasboard__left--location">Thành phố Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard__right">
                        <div class="dashboard__right--top">
                            <div class="dashboard__rigthTop--item">
                                <p class="dashboard__rightTop--quantity">989</p>
                                <p class="dashboard__rightTop--name">Việc làm mới hôm nay</p>
                            </div>
                            <div class="dashboard__rigthTop--item">
                                <p class="dashboard__rightTop--quantity">57.911</p>
                                <p class="dashboard__rightTop--name">Việc làm đang tuyển</p>
                            </div>
                            <div class="dashboard__rigthTop--item">
                                <p class="dashboard__rightTop--quantity">18.116</p>
                                <p class="dashboard__rightTop--name">Công ty đang tuyển</p>
                            </div>
                        </div>
                        <div class="dashboard__right--bottom">
                            <div class="dashboard__rightBottom--item">
                                <h4 class="dashboard__rightBottom--title">Việc làm qua các ngày</h4>
                                <div class="dashborad__rightBottom--boxChart">
                                    <canvas id="myChartJobOpportunityGrowthDashboard"></canvas>
                                </div>
                            </div>
                            <div class="dashboard__rightBottom--item">
                                <h4 class="dashboard__rightBottom--title">Nhu cầu tuyển dụng</h4>
                                <div class="dashborad__rightBottom--boxChart">
                                    <canvas id="myChartDemandJobDashboard"></canvas>
                                    <div id="htmlLegendDemandJobDashboard">
                                        <div class="item">
                                            <div class="color" style="background-color: red;"></div>
                                            <div class="text">Kinh doanh/Bán hàng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="listJob">
            <div class="grid-container">
                <div class="listJob__top">
                    <h2 class="listJob__title">Việc làm mới nhất</h2>
                    <a href="#" class="listJob__seeAll">Xem tất tất cả <span>&#187;</span></a>
                </div>
                <div class="listJob__filter">
                    <div class="listJob__filter--type">
                        <span class="listJob__filter--typeTitle"><i class="fa-solid fa-filter"></i> Lọc theo:</span>
                        <span class="listJob__filter--typeSelect">Địa điểm <i class="fa-solid fa-chevron-down"></i></span>
                        <ul class="listJob__filter--typeListType">
                            <li class="listJob__filter--typeItemType listJob__filter--cities selected">Địa điểm</li>
                            <li class="listJob__filter--typeItemType listJob__filter--salary">Mức lương</li>
                            <li class="listJob__filter--typeItemType listJob__filter--experience">Kinh nghiệm</li>
                            <li class="listJob__filter--typeItemType listJob__filter--categories">Ngành nghề</li>
                        </ul>
                    </div>
                    <div class="listJob__filter--right">
                        <i class="fa-solid fa-arrow-left listJob__filter--moveLeft"></i>
                        <div class="listJob__filter--filterCities listJob__filter--filterContainer">
                            <div class="listJob__filter--filterList">
                                <div class="listJob__filter--filterItem selected">Ngẫu nhiên</div>
                                <div class="listJob__filter--filterItem">Hà Nội</div>
                                <div class="listJob__filter--filterItem">Thành phố Hồ Chí Minh</div>
                                <div class="listJob__filter--filterItem">Miền Bắc</div>
                                <div class="listJob__filter--filterItem">Miền Trung</div>
                                <div class="listJob__filter--filterItem">Miền Nam</div>
                            </div>
                        </div>
                        <div class="listJob__filter--filterSalary listJob__filter--filterContainer">
                            <div class="listJob__filter--filterList">
                                <div class="listJob__filter--filterItem selected">Tất cả</div>
                                <div class="listJob__filter--filterItem">Dưới 10 triệu</div>
                                <div class="listJob__filter--filterItem">Từ 10-15 triệu</div>
                                <div class="listJob__filter--filterItem">Từ 15-20 triệu</div>
                                <div class="listJob__filter--filterItem">Từ 20-25 triệu</div>
                                <div class="listJob__filter--filterItem">Từ 25-30 triệu</div>
                                <div class="listJob__filter--filterItem">Từ 30-50 triệu</div>
                                <div class="listJob__filter--filterItem">Trên 50 triệu</div>
                                <div class="listJob__filter--filterItem">Thỏa thuận</div>
                            </div>
                        </div>
                        <div class="listJob__filter--filterExperience listJob__filter--filterContainer">
                            <div class="listJob__filter--filterList">
                                <div class="listJob__filter--filterItem selected">Tất cả</div>
                                <div class="listJob__filter--filterItem">Chưa có kinh ngiệm</div>
                                <div class="listJob__filter--filterItem">1 năm trở xuống</div>
                                <div class="listJob__filter--filterItem">1 năm</div>
                                <div class="listJob__filter--filterItem">2 năm</div>
                                <div class="listJob__filter--filterItem">3 năm</div>
                                <div class="listJob__filter--filterItem">Từ 4-5 năm</div>
                                <div class="listJob__filter--filterItem">Trên 5 năm</div>
                            </div>
                        </div>
                        <div class="listJob__filter--filterCategories listJob__filter--filterContainer">
                            <div class="listJob__filter--filterList">
                                <div class="listJob__filter--filterItem selected">Tất cả</div>
                                <div class="listJob__filter--filterItem">Kinh doanh/Bán hàng</div>
                                <div class="listJob__filter--filterItem">Biên/Phiên dịch</div>
                                <div class="listJob__filter--filterItem">Báo chí/Truyền hình</div>
                                <div class="listJob__filter--filterItem">Bưu chính/Viễn thông</div>
                                <div class="listJob__filter--filterItem">Bưu chính - Viễn thông</div>
                                <div class="listJob__filter--filterItem">Bảo hiểm</div>
                                <div class="listJob__filter--filterItem">Bất Động sản</div>
                            </div>
                        </div>
                        <i class="fa-solid fa-arrow-right listJob__filter--moveRight"></i>
                    </div>
                </div>
                <div class="listJob__list">
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="listJob__item">
                        <div class="listJob__item--body">
                            <a href="#">
                                <div class="listJob__item--left">
                                    <img src="{{ asset('storage/uploads/slide2.jpg') }}" alt="" class="listJob__item--logo">
                                </div>
                            </a>
                            <div class="listJob__item--right">
                                <a href="#" class="listJob__item--title">Nhân Viên Kinh Doanh/Tư Vấn/ Bán Hàng Sản Phẩm Thể Thao (Yêu Thích Thể Thao, Full-Time, Làm Theo Ca, Cửa Hàng Thanh Xuân)</a>
                                <a href="#" class="listJob__item--company">CÔNG TY CỔ PHẦN TẬP ĐOÀN DVN VIỆT NAM</a>
                            </div>
                        </div>
                        <div class="listJob__item--footer">
                            <div class="listJob__item--footerItem">
                                <div class="listJob__item--info">10 - 20 triệu</div>
                                <div class="listJob__item--info">Bình Dương</div>
                            </div>
                            <div class="listJob__item--footerItem">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart" style="display: none;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listJob__bottom">
                    <i class="fa-solid fa-chevron-left"></i>
                    <p><span>1</span> / 93 trang</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>

        <div class="topCompany">
            <div class="grid-container">
                <div class="topCompany__container">
                    <div class="topCompany__top">
                        <h3 class="topCompany__title">Thương hiệu bạn có thể biết</h3>
                    </div>
                    <div class="topCompany__list">
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                        <a href="#" class="topCompany__item">
                            <div class="topCompany__item--top">
                                <div class="topCompany__item--left">
                                    <img src="{{ asset('storage/uploads/slide_pink.jpg') }}" alt="">
                                </div>
                                <div class="topCompany__item--right">
                                    <div class="topCompany__item--name">CÔNG TY CỔ PHẦN CHỨNG KHOÁN VPS - CHI NHÁNH THÀNH PHỐ HỒ CHÍ MINH</div>
                                    <div class="topCompany__item--field">Marketing / Truyền thông / Quảng cáo</div>
                                </div>
                            </div>
                            <div class="topCompany__item--bottom">
                                <i class="fa-solid fa-briefcase"></i>
                                24 việc làm
                            </div>
                        </a>
                    </div>
                    <a href="#" class="topCompany__seeAll">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>

    <section class="footer">
        <p class="copyright">
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> 
            Bản quyền thuộc MOMER 
        </p>
    </section>

    <!-- chat bot -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="Chưa có data câu hỏi mô!"
      agent-id="020b6d32-f258-4915-93aa-7290ea1ae3c6"
      language-code="vi"
    ></df-messenger>

    <!-- Load JS -->
    @vite(['resources/js/home.js'])
    <script>
        const listDayJobChart = ['07/02', '13/02', '19/02', '25/02', '03/02', '09/02'];
        const dataJobChart = {
            labels: listDayJobChart,
            datasets: [
                {
                    label: 'Lượt truy cập',
                    backgroundColor: '#FFD700',
                    // borderColor: 'rgba(0, 0, 0, 1)',
                    borderColor: '#046bc9',
                    data: [9865, 12000, 74712, 58911, 89011, 57911]
                }
            ]
        }
        const config = {
            type: 'line',
            data: dataJobChart,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        ticks: { color: '#000' }, // Màu chữ của ngày tháng
                        grid: { color: 'rgba(0, 0, 0, 0.08)' } // Màu lưới ngang
                    },
                    y: {
                        ticks: { color: '#000' }, // Màu chữ trục Y
                        grid: { color: 'rgba(0, 0, 0, 0.08)' } // Màu lưới dọc
                    }
                },
                plugins: {
                    legend: {
                        display: false // Ẩn legend
                    }
                }
            }
        };
        const canvasJobChart = document.getElementById('myChartJobOpportunityGrowthDashboard');
        const chart = new Chart(canvasJobChart, config);
    </script>
    <script>
        const jobCategories = [
            "Kinh doanh / Bán hàng",
            "Hành chính / Văn phòng",
            "Dịch vụ khách hàng",
            "Marketing / Truyền thông / Quảng cáo",
            "Tư vấn"
        ];

        // Số lượng tin tuyển dụng mỗi ngành (có thể thay đổi dựa vào dữ liệu thực tế)
        const jobDemandData = [120, 90, 110, 80, 100];

        const ctx = document.getElementById('myChartDemandJobDashboard').getContext('2d');
        const jobDemandChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: jobCategories,
                datasets: [{
                    label: 'Số lượng tin tuyển dụng',
                    data: jobDemandData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        ticks: {
                            display: false // Ẩn labels trên trục X
                        },
                        grid: {
                            drawTicks: false, // Ẩn cả dấu tick trên trục X
                            drawBorder: false // Ẩn viền trục X nếu cần
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false // Ẩn legend
                    }
                }
            }
        });

        

        // chú thích
        const jobCategoriesWithColor = [
            { name: "Kinh doanh / Bán hàng", color: "#ff4d4d" },
            { name: "Hành chính / Văn phòng", color: "#4d79ff" },
            { name: "Dịch vụ khách hàng", color: "#ffd24d" },
            { name: "Marketing / Truyền thông / Quảng cáo", color: "#4dd2ff" },
            { name: "Tư vấn", color: "#b366ff" }
        ];

        const legendContainer = document.getElementById("htmlLegendDemandJobDashboard");

        // Xóa nội dung cũ (nếu có)
        legendContainer.innerHTML = "";

        jobCategoriesWithColor.forEach(category => {
            const item = document.createElement("div");
            item.classList.add("item");

            const colorBox = document.createElement("div");
            colorBox.classList.add("color");
            colorBox.style.backgroundColor = category.color;

            const text = document.createElement("div");
            text.classList.add("text");
            text.textContent = category.name;

            item.appendChild(colorBox);
            item.appendChild(text);
            legendContainer.appendChild(item);
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const today = new Date();
            const formattedDate = today.toLocaleDateString("vi-VN", {
                day: "2-digit",
                month: "2-digit",
                year: "numeric"
            });

            const workMarketTitle = document.querySelector(".slider__workMarket h3 span");
            workMarketTitle.innerHTML += ` ${formattedDate}`;

            const dashboardTitle = document.querySelector(".dashboard__title span");
            dashboardTitle.innerHTML += ` ${formattedDate}`;
        });
    </script>
</body>
</html>