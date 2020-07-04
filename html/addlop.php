<!DOCTYPE html>

<?php
    require "header.php";
?> 
<head>
    <link rel="stylesheet" href="../css/addlop.css" type="text/css" />   
</head>


<div class="container" id="addsvpage">
    <h1 id="title">Thêm lớp</h1>
    <form>
    <div class="form-group">
        <label for="malop">Mã lớp:</label>
        <input type="text" class="form-control" id="malop" placeholder="Nhập vào mã lớp">
    </div>
    <div class="form-group">
        <label for="tenlop">Tên lớp:</label>
        <input type="text" class="form-control" id="tenlop" placeholder="Nhập vào tên lớp">
    </div>
    <div class="form-group">
        <label for="makhoa">Chọn khoa:</label>
        <select multiple class="form-control" id="makhoa">
        <option>01 - Khoa 1</option>
        <option>02 - Khoa 2</option>
        <option>03 - Khoa 3</option>
        <option>04 - Khoa 4</option>
        <option>05 - Khoa 5</option>
        <option>06 - Khoa 6</option>
        <option>07 - Khoa 7</option>
        <option>08 - Khoa 8</option>
        <option>09 - Khoa 9</option>
        <option>10 - Khoa 10</option>
        </select>
    </div>
    <div id="button">
    <button type="submit" class="btn btn-primary">Thêm lớp</button>
    </div>
    </form>
</div>



</body>