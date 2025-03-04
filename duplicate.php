<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dewi Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito', sans-serif;
    }
    
   
    
    input,
    #button {
        border: none;
        outline: none;
        background: none;
    }
    
    .cont {
        overflow: hidden;
        position: relative;
        width: 900px;
        height: 570px;
        background: #fff;
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    }
    
    .form {
        position: relative;
        width: 640px;
        height: 100%;
        padding: 50px 30px;
        -webkit-transition: -webkit-transform 1.2s ease-in-out;
        transition: -webkit-transform 1.2s ease-in-out;
        transition: transform 1.2s ease-in-out;
        transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    }
    
    h2 {
        font-size: 30px;
        width: 100%;
        text-align: center;
        margin-top: 20px;
    }
    
    label {
        display: block;
        width: 260px;
        margin: 25px auto 0;
        text-align: center;
    }
    
    label span {
        font-size: 14px;
        font-weight: 600;
        color: #505f75;
        text-transform: uppercase;
    }
    
    input {
        display: block;
        width: 100%;
        margin-top: 5px;
        font-size: 19px;
        padding-bottom: 5px;
        border-bottom: 1px solid rgba(109, 93, 93, 0.4);
        text-align: center;
        font-family: 'Nunito', sans-serif;
        color: #252223;
        font-weight: bold;
    }
    
   #button {
        display: block;
        margin: 0 auto;
        width: 130px;
        height: 36px;
        border-radius: 30px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        margin-top: 40px;
        margin-bottom: 30px;
        padding: 10px;
        text-transform: uppercase;
        font-weight: 600;
        font-family: 'Nunito', sans-serif;
        background: -webkit-linear-gradient(left, #7579ff, #b224ef);
    }
    
    .submit {
        margin-top: 40px;
        margin-bottom: 30px;
        padding: 10px;
        text-transform: uppercase;
        font-weight: 600;
        font-family: 'Nunito', sans-serif;
        background: -webkit-linear-gradient(left, #7579ff, #b224ef);
    }
    
    input .password {
        color: #03A9F4;
    }
    
    .submit:hover {
        box-shadow: 0 2px 10px #333;
    }
    
    .forgot-pass {
        text-align: center;
        color: rgb(17, 110, 216);
    }
    
    .forgot-pass:hover {
        color: rgb(247, 16, 0);
    }
    
    .sub-cont {
        overflow: hidden;
        position: absolute;
        left: 640px;
        top: 0;
        width: 900px;
        height: 100%;
        padding-left: 260px;
        background: #fff;
        -webkit-transition: -webkit-transform 1.2s ease-in-out;
        transition: -webkit-transform 1.2s ease-in-out;
        transition: transform 1.2s ease-in-out;
    }
    
    .cont.s-signup .sub-cont {
        -webkit-transform: translate3d(-640px, 0, 0);
        transform: translate3d(-640px, 0, 0);
    }
    
    .img {
        overflow: hidden;
        z-index: 2;
        position: absolute;
        left: 0;
        top: 0;
        width: 260px;
        height: 100%;
        padding-top: 360px;
    }
    
    .img:before {
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        width: 900px;
        height: 100%;
        background-image: url(http://drive.google.com/uc?export=view&id=1JPTV2PXAe6dsAjMt8v1ehtZN1bFo5vbr);
        background-size: cover;
        transition: -webkit-transform 1.2s ease-in-out;
        transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    }
    
    .img:after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
    }
    
    .cont.s-signup .img:before {
        -webkit-transform: translate3d(640px, 0, 0);
        transform: translate3d(640px, 0, 0);
    }
    
    .img-text {
        z-index: 2;
        position: absolute;
        left: 0;
        top: 50px;
        width: 100%;
        padding: 0 20px;
        text-align: center;
        color: #fff;
        -webkit-transition: -webkit-transform 1.2s ease-in-out;
        transition: -webkit-transform 1.2s ease-in-out;
        transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    }
    
    .img-text h2 {
        margin-bottom: 10px;
        font-weight: normal;
    }
    
    .img-text p {
        font-size: 14px;
        line-height: 1.5;
    }
    
    .cont.s-signup .img-text.m-up {
        -webkit-transform: translateX(520px);
        transform: translateX(520px);
    }
    
    .img-text.m-in {
        -webkit-transform: translateX(-520px);
        transform: translateX(-520px);
    }
    
    .cont.s-signup .img-text.m-in {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    
    .sign-in {
        padding-top: 65px;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    
    .cont.s-signup .sign-in {
        -webkit-transition-timing-function: ease-in-out;
        transition-timing-function: ease-in-out;
        -webkit-transition-duration: 1.2s;
        transition-duration: 1.2s;
        -webkit-transform: translate3d(640px, 0, 0);
        transform: translate3d(640px, 0, 0);
    }
    
    .img-btn {
        overflow: hidden;
        z-index: 2;
        position: relative;
        width: 100px;
        height: 36px;
        margin: 0 auto;
        background: transparent;
        color: #fff;
        text-transform: uppercase;
        font-size: 15px;
        cursor: pointer;
    }
    
    .img-btn:after {
        content: '';
        z-index: 2;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #fff;
        border-radius: 30px;
    }
    
    .img-btn span {
        position: absolute;
        left: 0;
        top: 0;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        -webkit-transition: -webkit-transform 1.2s;
        transition: -webkit-transform 1.2s;
        transition: transform 1.2s;
        transition: transform 1.2s, -webkit-transform 1.2s;
        ;
    }
    
    .img-btn span.m-in {
        -webkit-transform: translateY(-72px);
        transform: translateY(-72px);
    }
    
    .cont.s-signup .img-btn span.m-in {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    
    .cont.s-signup .img-btn span.m-up {
        -webkit-transform: translateY(72px);
        transform: translateY(72px);
    }
    
    .sign-up {
        -webkit-transform: translate3d(-900px, 0, 0);
        transform: translate3d(-900px, 0, 0);
    }
    
    .cont.s-signup .sign-up {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    #form{
      
      display: none;
      position: relative;
      justify-content: center;
      margin-top: 80px;
    }
    .close{
            position: absolute;
            margin-top: 15px;
            margin-left: 30% ;

        }
    .button{
      background-color: dodgerblue;

    }
</style>



</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Pressmeet</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#">About</a></li>
          <li><a class="nav-link scrollto" href="#">Services</a></li>
         
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            
          </li>
          <li><a class="nav-link scrollto" href="#">Contact</a></li>
          <li><a class="getstarted scrollto" href="#">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <div class="d-flex">
            
       
</section>



<!-- end division section -->
 

 <!--------onclick----------->



    <!-- ======= About Section ======= -->
   
    <!-- ======= About Boxes Section ======= -->
    

    <!-- ======= Clients Section ======= -->
    

    <!-- ======= Features Section ======= -->
  

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Testimonials Section ======= -->
   

    <!-- ======= Portfolio Section ======= -->
    

    <!-- ======= Team Section ======= -->
   

    

     

  <!-- ======= Footer ======= -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
