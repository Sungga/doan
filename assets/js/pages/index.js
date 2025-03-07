// make location
const provincesSelectBox = document.querySelector('.search__location--province ul');
const districtSelectBox = document.querySelector('.search__location--district ul');

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
    for(i = 0; i < data.length; i++) {
        provincesSelectBoxHtml += `
        <li>
            <input type="checkbox" name="${data[i].code}" id="">
            <p>${data[i].name}</p>
            <i class="fa-solid fa-angle-right search__location--toDistrict" code="${data[i].code}"></i>
        </li>
        `;
    }
    
    provincesSelectBox.innerHTML = provincesSelectBoxHtml;
}

async function createDistrictSelectBox() {
    const data = await getData(); // Lấy dữ liệu

    let districtSelectBoxHtml = '';
    data.forEach((dataItem, index) => {
        districtSelectBoxHtml += `
            <div code="${dataItem.code}" style="display: none;">
                <li>
                    <input type="checkbox" name="all_${dataItem.code}" id="" province_code="${dataItem.code}" class="all-district">
                    <p>Tất cả</p>
                </li>
            `;
        for (var i = 0; i < dataItem.districts.length; i++) {
            districtSelectBoxHtml += `
            <li>
                <input type="checkbox" name="${dataItem.districts[i].code}" id="" province_code="${dataItem.code}">
                <p>${dataItem.districts[i].name}</p>
            </li>
            `;
        }
        districtSelectBoxHtml += `</div>`;
    });
    districtSelectBox.innerHTML = districtSelectBoxHtml;
}
    
// Click vào checkbox tỉnh/thành phố để hiện selectbox quận/huyện
function showDistrictSelectBox (id) {
    const districtSelectBoxItem = document.querySelectorAll('.search__location--district ul>div');
    districtSelectBoxItem.forEach((item, index) => {
        if (item.getAttribute('code') == id) {
            item.style.display = 'block';
        }
        else {
            item.style.display = 'none';
        }
    });
}

function hideDistrictSelectBox(id) {
    const districtSelectBoxItem = document.querySelectorAll('.search__location--district ul>div');
    districtSelectBoxItem.forEach((item, index) => {
        if (item.getAttribute('code') == id) {
            item.style.display = 'none';
        }
    });
}

function allDistrictCheckedToFalse(id) {
    const districtInputItem = document.querySelectorAll(`.search__location--district ul input[province_code="${id}"]`);
    districtInputItem.forEach((item, index) => {
        item.checked = false;
    });
}

function allDistrictCheckedToTrue(id) {
    const districtInputItem = document.querySelectorAll(`.search__location--district ul input[province_code="${id}"]`);
    districtInputItem.forEach((item, index) => {
        item.checked = true;
    });
}

// Khởi tạo province list và district list
createSelectBox();
createDistrictSelectBox();

document.addEventListener("click", function (event) {
    // click vao nut to district thì nó sẽ hiện thị bảng district của province đấy
    if (event.target.classList.contains("search__location--toDistrict")) {
        const codeValue = event.target.getAttribute("code");
        showDistrictSelectBox(codeValue);
    }
    // click vao checkbox quận/huyện thì nó sẽ chỉnh sửa ẩn/hiện bảng district của province đấy
    if (event.target.matches(".search__location--province input[type='checkbox']")) {
        console.log("hehe"); //
        if (event.target.checked) { // Chỉ chạy khi checkbox chuyển từ uncheck → checked
            const codeValue = event.target.getAttribute("name");
            showDistrictSelectBox(codeValue);

            // thay doi trang thai check cua district
            allDistrictCheckedToTrue(codeValue);
        }
        else {
            const codeValue = event.target.getAttribute("name");
            hideDistrictSelectBox(codeValue);
            
            // thay doi trang thai check cua district
            allDistrictCheckedToFalse(codeValue);
        }
    }
    // Click vao input tat ca thi se co thay doi
    if (event.target.matches(".all-district")) {
        if (!event.target.checked) {
            const provinceCode = event.target.getAttribute("province_code");
            allDistrictCheckedToFalse(provinceCode);

            // checked = false khi huy chon tat ca district
            const inputProvinceWithCode = document.querySelector(`.search__location--province input[type='checkbox'][name='${provinceCode}']`);
            // inputProvinceWithCode.checked = false;
            console.log(inputProvinceWithCode);
        }
        else {
            const provinceCode = event.target.getAttribute("province_code");
            allDistrictCheckedToTrue(provinceCode);
        }
    }
    // click vao mot district thi province tuong ung se duoc checked
    if (event.target.matches(".search__location--district input[type='checkbox']")) {
        const provinceCode = event.target.getAttribute("province_code");
        const inputProvinceWithCode = document.querySelector(`.search__location--province input[type='checkbox'][name='${provinceCode}']`);

        // Lấy checkbox "Tất cả" của tỉnh hiện tại (thay vì lấy tất cả)
        const inputAllDistrict = document.querySelector(`.search__location--district input.all-district[province_code='${provinceCode}']`);

        // Lấy tất cả các quận/huyện của tỉnh hiện tại
        const allDistricts = document.querySelectorAll(`.search__location--district input[type='checkbox'][province_code='${provinceCode}']:not(.all-district)`);
        if(event.target.checked) {
            inputProvinceWithCode.checked = true;

            // Nếu tất cả quận/huyện được chọn =>  chọn "Tất cả"
            const isEveryChecked = Array.from(allDistricts).every(district => district.checked);
            if (inputAllDistrict) {
                inputAllDistrict.checked = true;
            }
        }
        else {
            // Nếu có ít nhất 1 quận/huyện bị bỏ chọn => bỏ chọn "Tất cả"
            const isEveryChecked = Array.from(allDistricts).every(district => district.checked);
            if (!isEveryChecked && inputAllDistrict) { 
                inputAllDistrict.checked = false;
            }

            // Nếu không có quận/huyện nào được chọn => bỏ chọn tỉnh
            const isAnyChecked = Array.from(allDistricts).some(district => district.checked);
            if (!isAnyChecked) {
                inputProvinceWithCode.checked = isAnyChecked;
            }
        }
    }
});

// Lắng nghe sự kiện nhập trên ô tìm kiếm tỉnh/thành phố
document.querySelector(".search__location--provinceSearch input[type='text']").addEventListener("input", function () {
    console.log("hehe");
    const searchText = this.value.toLowerCase();
    const listItems = document.querySelectorAll(".search__location--province li");

    listItems.forEach((item) => {
        const provinceName = item.querySelector("p").textContent.toLowerCase();
        item.style.display = provinceName.includes(searchText) ? "flex" : "none";
    });
});

