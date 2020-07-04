<!DOCTYPE html>

<?php
    require "header.php";
?> 
<head>
    <link rel="stylesheet" href="../css/addkhoa.css" type="text/css" />   
</head>


<div class="container" id="addsvpage">
    <h1 id="title">Thêm khoa</h1>
    <form>
    <div class="form-group">
        <label for="makhoa">Mã khoa:</label>
        <input type="number" class="form-control" id="makhoa" min="1" placeholder="Nhập vào mã khoa" required>
    </div>
    <div class="form-group">
        <label for="tenkhoa">Tên khoa:</label>
        <input type="text" class="form-control" id="tenkhoa" placeholder="Nhập vào Tên khoa" required>
    </div>
    <div class="form-group">
        <label for="namthanhlap">Năm thành lập:</label>
        <input type="month" class="form-control" id="namthanhlap" required>
    </div>
    <div id="button">
    <button type="submit" class="btn btn-primary">Thêm khoa</button>
    </div>
    </form>
</div>



</body>