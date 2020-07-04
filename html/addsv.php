<!DOCTYPE html>

<?php
    require "header.php";
?> 
<head>
    <link rel="stylesheet" href="../css/addsv.css" type="text/css" />   
</head>


<div class="container" id="addsvpage">
    <h1 id="title">Thêm sinh viên mới</h1>
    <form>
    <div class="form-group">
        <label for="MSSV">Mã số sinh viên:</label>
        <input type="number" class="form-control" id="MSSV" maxlength="10" placeholder="Nhập vào MSSV">
    </div>
    <div class="form-group">
        <label for="tensv">Họ và tên sinh viên:</label>
        <input type="text" class="form-control" id="tensv" placeholder="Nhập vào họ và tên">
    </div>
    <div class="form-group">
        <label for="ngaysinh">Ngày tháng năm sinh:</label>
        <input type="date" class="form-control" id="ngaysinh">
    </div>
    <div class="form-group">
        <label for="email">Email sinh viên</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Nhập vào email">
    </div>
    <div class="form-group">
        <label for="malop">Mã lớp:</label>
        <input type="text" class="form-control" id="malop" placeholder="Mã lớp">
    </div>
    <div class="form-check" id="xacnhan">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Xác nhận thông tin!</label>
    </div>
    <div id="button">
    <button type="submit" class="btn btn-primary">Thêm sinh viên</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    </div>
    </form>
</div>



</body>