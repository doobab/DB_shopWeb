<!DOCTYPE html>
<html lang="kr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <?php
      session_start();
   ?>

    <title>DrugStore</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">DrugStore</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <?php
                       if (!isset($_SESSION['uid'])){
                    ?>

                   <li class="page-scroll">
                        <a href="Login.html" target="_self">로그인</a>
                    </li>
                    <li class="page-scroll">
                        <a href="Join.html" target="_self">회원가입</a>
                    </li>
                    <li class="page-scroll">
                        <a href="cart.php">장바구니</a>
		    </li>

                    <?php
                       } else{
                    ?>

                    <li class="page-scroll">
                        <a href="Logout.php" target="_self">로그아웃</a>
                    </li>
                    <li class="page-scroll">
                        <a href="Pwchk.html" target="_self">회원정보</a>
                    </li>
                    <li class="page-scroll">
                        <a href="cart.php">장바구니</a>
		    </li>
                    <?php
                       }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/drugstore.png" alt="">
                    <div class="intro-text">
                        <h1 class="name">DrugStore</h1>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>카테고리</h2>
                    <hr class="star-primary">
                </div>
            </div>
        </div>
   </section>

  <div style="text-align : center;">
     <a href="Drug.php">
         <img src="img/drug.jpg" onmouseover="this.src='img/drug_over.png';" onmouseout="this.src='img/drug.jpg';" alt="약품" align = "center" width="500" vspace = 25 hspace = 25/>
     </a>
     <a href="Cosmetic.php">
         <img src="img/cosmetic.jpg" onmouseover="this.src='img/cosmetic_over.png';" onmouseout="this.src='img/cosmetic.jpg';" alt="화장품" align = "center" width="500" vspace = 25 hspace = 25/>
     </a>
     <br>
     <a href="Body_hair.php">
         <img src="img/body_hair.jpg" onmouseover="this.src='img/body_hair_over.png';" onmouseout="this.src='img/body_hair.jpg';" alt="바디/헤어" align = "center" width="500" vspace = 25 hspace = 25/>
     </a>
     <a href="Food.php">
         <img src="img/food.jpg" onmouseover="this.src='img/food_over.png';" onmouseout="this.src='img/food.jpg';" alt="식품" align = "center" width="500" vspace = 25 hspace = 25/>
     </a>
     <br>
     <br>
  </div>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>홍익대학교</h3>
                        <p>소프트웨어융합학과</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>SNS</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>조원</h3>
                        <p>B889015 김지윤
                            <br>B889025 박정은
                            <br>B889026 박정은
                            <br>B889043 오은주</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>