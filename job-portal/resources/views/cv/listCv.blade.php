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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
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
                <div class="listCv__top">
                    <a href="{{ route('makeCv.form') }}">Tạo cv</a>
                    <a class="listCv__top--addBtn">Thêm cv</a>
                </div>
                <div class="listCv__list">
                    <div class="listCv__list--top">
                        <h1 class="listCv__title">Danh sách cv của bạn</h1>
                        <div class="listCv__list--left">3/4 <a id="btn-add-limit">Thêm giới hạn cv</a></div>
                    </div>
                    {{-- list cv in here --}}
                    @foreach ($cvs as $cv)
                        <div class="listCv__item">
                            <div class="listCv__item--img">
                                <a href="#">
                                    <div>
                                        <canvas id="pdf-canvas-{{ $cv->id }}" style="width: 100%; height: auto; border-radius: 8px;"></canvas>
                                    </div>
                                </a>
                            </div>
                            <div class="listCv__item--name">{{ $cv->name }}</div>
                            {{-- <div class="listCv__item--edit"><a href="#">Sửa cv</a></div> --}}
                            <div class="listCv__item--bottom">
                                @if ($cv->status == 1)
                                    <a href="#"><i class="fa-solid fa-star listCv__item--main"></i></a>
                                @else
                                    <a href="#"><i class="fa-solid fa-star"></i></a>
                                @endif
                                <a href="#" class="listCv__item--del"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <session class="addCv">
            <div class="addCv__container">
                <i class="fa-solid fa-circle-xmark addCv__exit"></i>
                <h2 class="addCv__title">Thêm Cv</h2>
                <form action="{{ route('upload.cv') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" id="" class="addCv__name" placeholder="Tên của cv" required>
                    <label for="cv" class="addCv__cv" id="drop-zone">Tải lên CV của bạn</label>
                    <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" style="display: none" required>
                    <button class="addCv__btn" type="submit">Tải lên</button>
                </form>
            </div>
        </session>

        <div class="buyCv">
            <div class="buyCv__container">
                <i class="fa-solid fa-circle-xmark buyCv__exit"></i>
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

    <script>
        // ------------------<< show page 1 of file pdf >>--------------------------------
        document.addEventListener("DOMContentLoaded", function () {
            const cvs = @json($cvs);

            pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js";

            cvs.forEach(cv => {
                const canvas = document.getElementById(`pdf-canvas-${cv.id}`);
                const ctx = canvas.getContext("2d");

                const url = `/storage/cv/${cv.file_name}`;

                pdfjsLib.getDocument(url).promise.then(pdf => {
                    pdf.getPage(1).then(page => {
                        const viewport = page.getViewport({ scale: 1.0 });
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        const renderContext = {
                            canvasContext: ctx,
                            viewport: viewport
                        };
                        page.render(renderContext);
                    });
                });
            });
        });
    </script>
    
</body>
</html>
