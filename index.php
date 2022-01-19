<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&display=swap');</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');</style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <style>
        a{
            color : #F2F2F2;
            text-decoration : none;
            font-family: 'Kanit', sans-serif;
        }
        p{
            color : #F2F2F2;
            font-family: 'Kanit', sans-serif;
        }
        a.navbar-brand:hover{
            color : #fff;
        }
        .nav-tabs{
            border: none;
        }
        .nav-tabs a:hover{
            color : #fff;
            transition : 0.9s ease-out; 
        }
        .nav-tabs .nav-link{
            border-color : transparent;
            color : #000;
        }
        .nav-margin{
            margin : 15px;
        }
        .navbar-brand{
            font-size : 1.5rem
        }
        .drop li a{
            transition : 0.3s all;
        }
        .drop li a:hover{
            border-bottom: 1px solid #fff;
        }
        header.banner{
            background-image: url("img/5566.png");
            background-position : top;
            background-size : cover;
            height : 100vh;
            width: 100%;
            position : fixed;
        }
        .banner-details{
            position: absolute;
            top : 34%;
            left : 50%;
            transform : translate(-50%, -50%);
            text-align: center;
        }
        .banner-details h2 a{
            color : #2287ca;
            transition : 0.5s ease-out;        }
        .banner-details h2 a:hover{
            color : #2287ca;
        }
        .news-slide{
            padding-bottom: 2rem;
        }
        .news-slide h2{
            text-align: center;
            padding-top: 2rem;
            margin-bottom: 2rem;
            font-family: 'Kanit', sans-serif;
            color : #2287ca;
            /* border-bottom : 5px solid #6287DB; */
        }
        .card-img-overlay{
            top : 125px;
            overflow : hidden;
            margin : 0.25rem;
        }        /* .card-img-overlay::before{
            content : "";
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
            
        }
 */
        /* .card img{
            filter: blur(5px);
            -webkit-filter: blur(2px);
        } */
        .carousel-control-prev {
            left: -10rem;
        }

        .carousel-control-next {
            right: -10rem;
        }
        .banner-details h2{
            font-size: 52px;
            margin-bottom: 2rem;
        }
        .banner-details p{
            color : #2287ca;
            font-size: 40px;
            margin-bottom: 2rem;
        }
        .banner-details p.title{
            color : #2287ca;
            font-size: 22px;
            margin-top: 2rem;
        }
    </style>

    <!-- font-family: 'IBM Plex Sans Thai', sans-serif; -->
    <!-- font-family: 'Kanit', sans-serif; -->
</head>
<body>

                <header class="banner ">
                    <div class="container">
                        <div class="banner-details">
                            <h2><a href="#"><i class="bi bi-reddit" style="margin-right:1rem;" ></i>ยินดีต้อนรับเข้าสู่เว็บไซต์</a></h2>
                            <p>เเผนกวิชาเทคโนโลยีสารสนเทศ</p>
                            <div class="banner-box">
                                <p class="title">เว็บไซต์สำหรับเกี่ยวกับความรู้ด้านไอที ที่จัดทำขึ้นโดยเเผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคนครนายก</p>
                            </div>
                            <div class="banner-button">
                                <div class="container dropdown">
                                    <button class="btn btn-defult dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><a href="#">เข้าสู้เว็บไซต์</a><span class="caret"></span></button>

                                </div>
                            </div>
                        </div>
                        

                        <!-- <div class="news-slide fixed-bottom">
                            <h2>ข่าวประชาสัมพันธ์</h2>
                                <div class="carousel slide container" id="carouselExampleControls" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <div class="card bg-dark text-white">
                                                    <img src="img/test.png" alt="">
                                                    <div class="card-img-overlay">
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card bg-dark text-white">
                                                    <img src="img/test.png" alt="">
                                                    <div class="card-img-overlay">
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card bg-dark text-white">
                                                    <img src="img/test.png" alt="">
                                                    <div class="card-img-overlay">
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <div class="card bg-dark text-white">
                                                    <img src="img/test.png" alt="">
                                                    <div class="card-img-overlay">
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card bg-dark text-white">
                                                    <img src="img/test.png" alt="">
                                                    <div class="card-img-overlay">
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card bg-dark text-white">
                                                    <img src="img/test.png" alt="">
                                                    <div class="card-img-overlay">
                                                        <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div> -->
                                
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                        </div>
                    </div>
                </header>

        <nav class="navbar navbar-light bg-light ">
            <div class="container">
                <a class="navbar-brand fst-italic fw-bold" href="#">INFORMATION TECHNOLOGY.</a>
                <a class="navbar-brand d-flex" href="#"><i class="bi bi-instagram me-3"></i><i class="bi bi-facebook"></i></a>
            </div>
        </nav> 
    
        <nav class="navbar" style="background-color : #2287ca;";>
            <div class="container">
                <a class="navbar-brand fs-3" href="test.php">เเผนกวิชาเทคโนโลยีสารสนเทศ</a>
                <ul class="nav nav-tabs" id="dropdownMenu1">
                    <li><a href="#">หน้าหลัก</a></li>
                    <li><i class="bi bi-caret-down" style="color : #fff; margin-right : 5px;"></i><a href="#">เกี่ยวกับNYIT</a>
                        <ul class="drop">
                            <div>
                                <li class="all"><i class="bi bi-chevron-right"></i><a href="#">ประวัติความเป็นมา</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">กิจกรรม</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">ตารางเรียน/สอน</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">บุคลากร</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">นักเรียน/นักศึกษา</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">ผลงาน</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><i class="bi bi-caret-down" style="color : #fff; margin-right : 5px;"></i><a href="#">เกี่ยวกับNYIT</a>
                        <ul class="drop">
                            <div>
                                <li><a href="#">ประวัติความเป็นมา</a></li>
                                <li><a href="#">กิจกรรม</a></li>
                                <li><a href="#">ตารางเรียน/สอน</a></li>
                                <li><a href="#">บุคลากร</a></li>
                                <li><a href="#">นักเรียน/นักศึกษา</a></li>
                                <li><a href="#">ผลงาน</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><i class="bi bi-caret-down" style="color : #fff; margin-right : 5px;"></i><a href="#">สื่อการเรียนการสอน</a>
                        <ul class="drop">
                            <div>
                                <li><i class="bi bi-chevron-right"></i><a href="#">การจัดการฐานข้อมูล/DATABASE</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">การสร้างWebsite</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">การจัดการระบบเครือข่าย</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">การเขียนโปรเเกรมเบื้องต้น</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">การออกเเบบกราฟิก</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">การสร้างเกม</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="#">Hardware/Software</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#">ติดต่อ</a></li>
                    <div id="marker"></div>
                </ul>
            </div>
        </nav>
        
        <!-- Navbar -->




        
</body>
</html>