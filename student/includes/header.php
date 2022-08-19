<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Dashboard </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin-2.css">
     
   

    <!-- Data Tablesd API-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .profile-image img {
    height: 200px;
    width: auto;
    border-radius: 10%;
    border: 6px dashed #36b9cc;
    padding: 5px;
    }
    hr.left-hr {
    border: 1px solid #008b8b0f;
    border-radius: 10px;
    width: 100%;
    }
    .profile-card {
    box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px;
    background: white;
    padding: 25px;
    border-radius: 10px;
    border: 2px dashed #36b9cc;
    }
    .profile-image img {
        height: 200px;
        width: auto;
        border-radius: 10%;
        border: 4px dashed #36b9cc;
        padding: 5px;
    }
    .container-fluid.student-profile-area{
        padding: 60px 0;
        background-image: url(../src/images/login-bg.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin: -23px 0;
    }

    #site-loader{
        height: 100vh;
        width: 100%;
        position: fixed;
        background: #fff url('../src/icons/Ripple-loader.gif') no-repeat center;
        z-index: 99999;
    }
    .profile-card {
    box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px;
    background: white;
    padding: 25px;
    border-radius: 10px;
    border: 2px dashed #36b9cc;
    }
    .profile-image,.profile-name {
        text-align: center;
    }
    .profile-name{
        padding: 15px;    
    }
    .container-fluid.student-profile-area{
        padding: 60px 0;
        background-image: url(../src/images/login-bg.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin: -23px 0;
    }
    .profile-image img {
        height: 200px;
        width: auto;
        border-radius: 10%;
        border: 4px dashed #36b9cc;
        padding: 5px;
    }
    hr.left-hr {
        border: 1px solid #008b8b0f;
        border-radius: 10px;
        width: 100%;
    }


    </style>

</head>

<body id="page-top" onload="myFunction()">

<div id="site-loader">

</div>

    <!-- Page Wrapper -->
    <div id="wrapper">
        