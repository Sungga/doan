// ------------------------------------------<< js show menu user >>------------------------------------
const userBtn = document.querySelector('.header__item--account');
const menuUser = document.querySelector('.header__menu--user');

if(userBtn != null) {
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
}
