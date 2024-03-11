<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Menu</title>
  <style>
        body {
        font-family: 'Arial', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .arrow-container {
        position: absolute;
        top: 50%;
        right: 0; /* Đặt right thành 0 để mũi tên nằm kế thẻ select */
        transform: translateY(-50%);
        pointer-events: none;
        }

        .select {
        padding: 8px;
        font-size: 16px;
        appearance: none;
        padding-right: 24px; /* Tăng giá trị padding để giữ khoảng trắng giữa nội dung và mũi tên */
        background: url('../img/arrow1.svg') /* Sử dụng ảnh mũi tên làm background */
        -webkit-appearance: none; /* Cho trình duyệt webkit (như Chrome, Safari) */
        -moz-appearance: none; /* Cho trình duyệt Firefox */
        appearance: none;
        border: none;
        }
        pointer-events: none;
        }

        .arrow {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
        }

  </style>
</head>
<body>

<div class="dropdown">
  <select id="select1" class="select">
    <option value="option1">Option 1</option>
    <option value="option2">Option 2</option>
    <option value="option3">Option 3</option>
  </select>
  <div class="arrow-container">
    <img src="../img/arrow1.svg" alt="Arrow" class="arrow">
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const dropdown = document.querySelector('.dropdown');
    const arrow = document.querySelector('.arrow');
    const select = document.getElementById('select1');

    dropdown.addEventListener('click', function () {
        select.focus();
    });

    select.addEventListener('focus', function () {
        arrow.style.transform = 'rotate(180deg)';
    });

    select.addEventListener('blur', function () {
        arrow.style.transform = 'rotate(0deg)';
    });

    select.addEventListener('change', function () {
        arrow.style.transform = 'rotate(0deg)';
    });
    });
</script>

</body>
</html>
