<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Việc tốt</title>

  <!-- font google -->
  <link rel="stylesheet" href="assets/font/Inter/Inter-VariableFont_opsz,wght.ttf">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  @vite(['resources/css/listCv.css'])
</head>
<body>
    <div class="container">
        <header style="z-index: 9998">
            <div class="header__left"><a href="{{ route('home') }}"><i class="fa-solid fa-arrow-left"></i>Quay lại</a></div>
            <div class="header__center">
                <a href="{{ route('home') }}"><img src="{{ asset('storage/uploads/VIECTOT.png') }}" alt=""></a>
            </div>
            <div class="header__right">
                <ul class="header__menu">
                    <li>
                        <p class="header__item--right header__item--account"><img src="{{ asset('storage/uploads/user.svg') }}" alt="">{{ $candidate['name'] }}</p>
                        <ul class="header__menu--user">
                            <li><a href="#">Tài khoản</a></li>
                            <li><a href="#">Hồ sơ</a></li>
                            <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
    
        <section class="listCv">
            <div class="grid-container">
                <i class="fa-solid fa-circle-xmark buyCv__exit"></i>
                <div class="listCv__top">
                    <a href="{{ route('makeCv.form') }}">Tạo cv</a>
                    <a>Thêm cv</a>
                </div>
                <div class="listCv__list">
                    <div class="listCv__list--top">
                        <h1 class="listCv__title">Danh sách cv của bạn</h1>
                        <div class="listCv__list--left">3/4 <a id="btn-add-limit">Thêm giới hạn cv</a></div>
                    </div>
                    <div class="listCv__item">
                        <div class="listCv__item--img">
                            <a href="#">
                                <div><img src="{{ asset('storage/uploads/cv.png') }}"></img></div>
                            </a>
                        </div>
                        <div class="listCv__item--name">Cv Nguyễn Thị Lan Anh số 1</div>
                        <div class="listCv__item--edit"><a href="#" class="canEdit">Sửa cv</a></div>
                        <div class="listCv__item--bottom">
                            <a href="#" class="listCv__item--main"><i class="fa-solid fa-star"></i></a>
                            <a href="#" class="listCv__item--del"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="listCv__item">
                        <div class="listCv__item--img">
                            <a href="#">
                                <div><img src="{{ asset('storage/uploads/cv.png') }}"></img></div>
                            </a>
                        </div>
                        <div class="listCv__item--name">Cv Nguyễn Thị Lan Anh số 1 sajdajhdajhdajdd dakjsdkadj  </div>
                        <div class="listCv__item--edit"><a href="#" class="">Sửa cv</a></div>
                        <div class="listCv__item--bottom">
                            <a href="#"><i class="fa-solid fa-star"></i></a>
                            <a href="#" class="listCv__item--del"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="listCv__item">
                        <div class="listCv__item--img">
                            <a href="#">
                                <div><img src="{{ asset('storage/uploads/cv.png') }}"></img></div>
                            </a>
                        </div>
                        <div class="listCv__item--name">Cv Nguyễn Thị Lan Anh số 1 sajdajhdajhdajdd dakjsdkadj  </div>
                        <div class="listCv__item--edit"><a href="#" class="">Sửa cv</a></div>
                        <div class="listCv__item--bottom">
                            <a href="#"><i class="fa-solid fa-star"></i></a>
                            <a href="#" class="listCv__item--del"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="listCv__item">
                        <div class="listCv__item--img">
                            <a href="#">
                                <div><img src="{{ asset('storage/uploads/cv.png') }}"></img></div>
                            </a>
                        </div>
                        <div class="listCv__item--name">Cv Nguyễn Thị Lan Anh số 1 sajdajhdajhdajdd dakjsdkadj  </div>
                        <div class="listCv__item--edit"><a href="#" class="">Sửa cv</a></div>
                        <div class="listCv__item--bottom">
                            <a href="#"><i class="fa-solid fa-star"></i></a>
                            <a href="#" class="listCv__item--del"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <div class="buyCv">
            <div class="buyCv__container">
                <h2 class="buyCv__title">Chọn gói muốn mua</h2>
                <div class="buyCv__list">
                    <div class="buyCv__item">
                        <h3 class="buyCv__name">Gói cơ bản</h3>
                        <p class="buyCv__about">Tăng giới hạn lưu trữ thêm <span style="color: var(--color-base);">+ 3 CV</span></p>
                        <p class="buyCv__price">Giá 19.000₫</p>
                        <a class="buyCv__btn" href="#">Mua</a>
                    </div>
                    <div class="buyCv__item">
                        <h3 class="buyCv__name">Gói nâng cao</h3>
                        <p class="buyCv__about">Tăng giới hạn lưu trữ thêm <span style="color: var(--color-base);">+ 10 CV</span></p>
                        <p class="buyCv__price">Giá 39.000₫</p>
                        <a class="buyCv__btn" href="#">Mua</a>
                    </div>
                    <div class="buyCv__item">
                        <h3 class="buyCv__name">Gói không giới hạn</h3>
                        <p class="buyCv__about">Lưu trữ CV <span style="color: var(--color-base);">không giới hạn</span></p>
                        <p class="buyCv__price">Giá 100.000₫</p>
                        <a class="buyCv__btn" href="#">Mua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/listCv.js'])

    
</body>
</html>
