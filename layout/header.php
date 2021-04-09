<html>

<head>
    <title>Hệ thống MVC</title>
    <base href="<?php echo base_url(); ?>">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/reset.css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                UNITOP
            </div>
            <div id="user_login">
                <p>Xin chào <strong><?php echo $_SESSION['user_login'] ?></strong> (<a href="?mod=users&action=logout">Thoát</a>)</p>
            </div>
            <ul id="main-menu">
                <li><a href="?mod=home">Trang chủ</a></li>
                <li><a href="gioi-thieu-2.html">Giới thiệu</a></li>
                <li><a href="?mod=users&controller=index">Thành viên</a></li>
            </ul>
        </div>