// ------------------------------------------<< js show menu user >>------------------------------------
const userBtn = document.querySelector('.header__item--account');
const menuUser = document.querySelector('.header__menu--user');

// Toggle hiển thị khi click vào nút user
userBtn.addEventListener('click', (event) => {
    event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
    menuUser.style.visibility = menuUser.style.visibility === 'visible' ? 'hidden' : 'visible';
    menuUser.style.opacity = menuUser.style.visibility === 'hidden' ? '0' : '1';
    menuUser.style.top = menuUser.style.visibility === 'hidden' ? '0' : '100%';
});

// Ẩn menu khi click ra ngoài
document.addEventListener('click', (event) => {
    if (!menuUser.contains(event.target) && !userBtn.contains(event.target)) {
        menuUser.style.visibility = 'hidden';
        menuUser.style.opacity = '0';
        menuUser.style.top = '0';
    }
});

// --------------------------------------<< js show form list buy CV >>-----------------------------------------
const showFormBuyCvBtn = document.querySelector('#btn-add-limit');
const hiddenFormBuyCvBtn = document.querySelector('.buyCv__exit');
const formBuyCv = document.querySelector('.buyCv');
const formBuyCvCont = document.querySelector('.buyCv__container');

const showFormAddCvBtn = document.querySelector('.listCv__top--addBtn');
const hiddenFormAddCvBtn = document.querySelector('.addCv__exit');
const formAddCv = document.querySelector('.addCv');
const formAddCvCont = document.querySelector('.addCv__container');

function toggleContainer(showFormBtn, hiddenFormBtn, form, formCont) {
    showFormBtn.addEventListener('click', function() {
        form.style.display = 'flex';
    })
    hiddenFormBtn.addEventListener('click', function() {
        form.style.display = 'none';
    })
    document.addEventListener('click', (event) => {
        if (!formCont.contains(event.target) && !showFormBtn.contains(event.target)) {
            form.style.display = 'none';
        }
    });
}

toggleContainer(showFormBuyCvBtn, hiddenFormBuyCvBtn, formBuyCv, formBuyCvCont);
toggleContainer(showFormAddCvBtn, hiddenFormAddCvBtn, formAddCv, formAddCvCont);

// -----------------<< JS FOR INPUT FILE CV >>---------------------
const fileInputCv = document.getElementById('cv');
const labelCv = document.querySelector('label[for="cv"]');

// change content in label Cv when have file in inputCv
fileInputCv.addEventListener('change', function () {
    if (this.files && this.files.length > 0) {
        labelCv.textContent = this.files[0].name;
    } else {
        labelCv.textContent = 'Tải lên CV của bạn';
    }
});

// drop file in label
// Ngăn hành vi mặc định của trình duyệt
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    labelCv.addEventListener(eventName, e => {
        e.preventDefault();
        e.stopPropagation();
    });
});

// Hiệu ứng khi kéo file vào
labelCv.addEventListener('dragover', () => {
    labelCv.classList.add('dragover');
});

labelCv.addEventListener('dragleave', () => {
    labelCv.classList.remove('dragover');
});

labelCv.addEventListener('drop', e => {
    labelCv.classList.remove('dragover');

    const files = e.dataTransfer.files;
    if (files.length > 0) {
        const file = files[0];
        labelCv.textContent = file.name;

        // Gán file vào input
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        fileInputCv.files = dataTransfer.files;
    }
});

// Khi chọn file bằng input (bấm chọn)
fileInputCv.addEventListener('change', function () {
    if (this.files && this.files.length > 0) {
        labelCv.textContent = this.files[0].name;
    } else {
        labelCv.textContent = 'Tải lên CV của bạn';
    }
});
