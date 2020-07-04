<!DOCTYPE html>

<?php
    require "header.php";
?> 
<head>
    <link rel="stylesheet" href="../css/addmonhoc.css" type="text/css" />   
</head>


<div class="container" id="addsvpage">
    <h1 id="title">Thêm môn học</h1>
    <form>
    <div class="form-group">
        <label for="mamonhoc">Mã môn học:</label>
        <input type="text" class="form-control" id="mamonhoc" placeholder="Nhập vào mã môn học">
    </div>
    <div class="form-group">
        <label for="tenmonhoc">Tên môn học:</label>
        <input type="text" class="form-control" id="tenmonhoc" placeholder="Nhập vào Tên môn học">
    </div>
    <div class="form-group">
        <label for="sotc">Số tín chỉ:</label>
        <input type="number" class="form-control" id="sotc" max="10" min="1" placeholder="Số lượng tín chỉ">
    </div>
    <div id="button">
    <button type="submit" class="btn btn-primary">Thêm sinh viên</button>
    </div>
    </form>
</div>



</body>