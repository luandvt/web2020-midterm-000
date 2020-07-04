<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/home.css" type="text/css" /> 
</head>

<?php
    require "header.php";
?>


<div class="container" id="homepage">
    <h1 id="title">Quản lý sinh viên - 000</h1>
    <hr/>
        <div id="menu-home">
            <div class="row">
                <div class="col-sm" id="item">
                    <button id="button-khoa"><a class="linkitem" href="../html/dskhoa.php">Danh sách khoa</a></button>
                </div>
                <div class="col-sm" id="item">
                    <button id="button-lop"><a class="linkitem" href="../html/dslop.php">Danh sách lớp</a></button>
                </div>
                <div class="col-sm" id="item">
                    <button id="button-sinhvien"><a class="linkitem" href="../html/dssinhvien.php">Danh sách sinh viên</a></button>
                </div>
                <div class="col-sm" id="item">
                    <button id="button-monhoc"><a class="linkitem" href="../html/dsmonhoc.php">Danh sách môn học</a></button>
                </div>
            </div>    
        </div>
    <hr/>
    <div id="thanhvien">
        <text>1. Trần Quang Linh - 43.01.104.093</text></br>
        <text>2. Đặng Vũ Thành Luân - 43.01.104.103</text></br>
        <text>3. Phan Vũ Duy - 43.01.104.034</text>
    </div>
</div>

</body>