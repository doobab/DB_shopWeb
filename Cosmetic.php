<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>화장품</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

   <?php
      session_start();
      $conn = oci_connect("B889015","B889015","203.249.87.162:1521/orcl");
   
      if(!$conn) {
         echo "Connect Fali"; 
         exit();
      }
   ?>

</head>
<body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">DrugStore</a>
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

                    <?php
                       }
                    ?>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li class="hidden"> </li>
            <li class="page-scroll">
                <a href="Drug.php" target="_self">약품</a>
            </li>
            <li class="page-scroll">
                <a href="Cosmetic.php" target="_self">화장품</a>
            </li>
            <li class="page-scroll">
                <a href="Body_hair.php">바디/헤어</a>
            </li>
            <li class="page-scroll">
                <a href="Food.php">음식</a>
            </li>
        </ul>
    </div>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>화장품</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#product1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/skincare.PNG" class="img-responsive" alt="스킨케어">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#product2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/cleansing.jpg" class="img-responsive" alt="클렌징폼">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#product3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/suncream.PNG" class="img-responsive" alt="선크림">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#product4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/lipstic.png" class="img-responsive" alt="립스틱">
                    </a>
                </div>
            </div>
        </div>
    </section>
	
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

    <!-- 상품목록 -->

    <div class="portfolio-modal modal fade" id="product1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>스킨케어</h2>
                            <?php
                               $sql = oci_parse($conn, "select Product.Pprice, MAnufacturer.MAname, MAnufacturer.MAtp, MAnufacturer.MAadd from Product, MAnufacturer where Product.Pid = 874001");
                               oci_execute($sql);
                               $rows = oci_fetch_array($sql);
                               oci_free_statement($sql);
                            ?>
                            <hr class="star-primary">
                            <img src="img/skincare.PNG" class="img-responsive img-centered" alt="">
                            <p>상품설명</p>
                            <ul class="list-inline item-details">
                                <li>가격:
                                    <strong><?php echo $rows['PPRICE']; ?>원</a>
                                    </strong>
                                </li>
                                <li>제조사명:
                                    <strong><?php echo $rows['MANAME']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 전화번호:
                                    <strong><?php echo $rows['MATP']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 주소:
                                    <strong><?php echo $rows['MAADD']; ?></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="location.href='cart.php'"> 장바구니에 추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="product2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>클렌징폼</h2>
                            <?php
                               $sql = oci_parse($conn, "select Product.Pprice, MAnufacturer.MAname, MAnufacturer.MAtp, MAnufacturer.MAadd from Product, MAnufacturer where Product.Pid = 874002");

                               oci_execute($sql);
                               $rows = oci_fetch_array($sql);
                               oci_free_statement($sql);
                            ?>
                            <hr class="star-primary">
                            <img src="img/cleansing.jpg" class="img-responsive img-centered" alt="">
                            <p>상품설명</p>
                            <ul class="list-inline item-details">
                                <li>가격:
                                    <strong><?php echo $rows['PPRICE']; ?>원</a>
                                    </strong>
                                </li>
                                <li>제조사명:
                                    <strong><?php echo $rows['MANAME']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 전화번호:
                                    <strong><?php echo $rows['MATP']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 주소:
                                    <strong><?php echo $rows['MAADD']; ?></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="location.href='cart.php'"> 장바구니에 추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="product3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>선크림</h2>
                            <?php
                               $sql = oci_parse($conn, "select Product.Pprice, MAnufacturer.MAname, MAnufacturer.MAtp, MAnufacturer.MAadd from Product, MAnufacturer where Product.Pid = 874003");
                               oci_execute($sql);
                               $rows = oci_fetch_array($sql);
                               oci_free_statement($sql);
                            ?>
                            <hr class="star-primary">
                            <img src="img/suncream.PNG" class="img-responsive img-centered" alt="">
                            <p>상품설명</p>
                            <ul class="list-inline item-details">
                                <li>가격:
                                    <strong><?php echo $rows['PPRICE']; ?>원</a>
                                    </strong>
                                </li>
                                <li>제조사명:
                                    <strong><?php echo $rows['MANAME']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 전화번호:
                                    <strong><?php echo $rows['MATP']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 주소:
                                    <strong><?php echo $rows['MAADD']; ?></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="location.href='cart.php'"> 장바구니에 추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="product4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>립</h2>
                            <?php
                               $sql = oci_parse($conn, "select Product.Pprice, MAnufacturer.MAname, MAnufacturer.MAtp, MAnufacturer.MAadd from Product, MAnufacturer where Product.Pid = 874004");
                               oci_execute($sql);
                               $rows = oci_fetch_array($sql);
                               oci_free_statement($sql);
                            ?>
                            <hr class="star-primary">
                            <img src="img/lipstic.png" class="img-responsive img-centered" alt="">
                            <p>상품설명</p>
                            <ul class="list-inline item-details">
                                <li>가격:
                                    <strong><?php echo $rows['PPRICE']; ?>원</a>
                                    </strong>
                                </li>
                                <li>제조사명:
                                    <strong><?php echo $rows['MANAME']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 전화번호:
                                    <strong><?php echo $rows['MATP']; ?></a>
                                    </strong>
                                </li>
                                <li>제조사 주소:
                                    <strong><?php echo $rows['MAADD']; ?></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="location.href='cart.php'"> 장바구니에 추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
