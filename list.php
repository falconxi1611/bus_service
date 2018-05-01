<?php
$api  = "http://busmap.somee.com/api/Route/GetRoutes";
$data = file_get_contents($api);
$data = json_decode($data);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Bus Service</title>
    <link rel="shortcut icon" href="images/icon.png">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="keywords"
          content="Travel Tours Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    <!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <!-- //Web-Fonts -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
<!-- header -->
<div class="header-w3l">
    <!-- navigation -->
    <div class="nav-agile">
        <nav class="navbar navbar-default">
            <div class="navbar-header logo-w3layouts">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- logo -->
                <h1>
                    <a href="index.php" style="color: #00ff00">Bus Service</a>
                </h1>
                <!-- //logo -->
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="w3l-navtop">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php" class="active">Trang chủ</a>
                        </li>
                        <li>
                            <a href="tuyen_xe.php">Tuyến xe</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lý
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li>
                                    <a href="new.php">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="list.php">Cập nhật</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <!-- social icons -->
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-facebook icon-border facebook"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus icon-border googleplus"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-rss icon-border rss"> </a>
                        </li>
                    </ul>
                </div>
                <!-- //social icons -->
                <div class="clearfix"></div>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //navigation -->
<!-- //header -->

<!-- banner -->
<div class="inner_banner_agile">

</div>
<!--//banner -->
<!-- short -->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short_ls">
            <li>
                <a href="index.php">Home</a>
                <span>/</span>
            </li>
            <li>List</li>
        </ul>
    </div>
</div>
<!-- //short-->
<!-- //banner -->

<!--code-->
<div class="container">
    <div class="row">
        <h1 class="page-header">
            <div class="crush">Danh sách tuyến xe</div>
        </h1>
    </div>

    <div class="row">
        <div class="col-md-10">

            <div class="table-responsive">

                <table class="table table-sm table-hover">
                    <thead class="thead-default">

                    <tr class="add-category-row">
                        <th style="width: 30px;">
                            <a href="new.php">
                                <button class="btn-view-fund btn btn-default btn-xs  pull-left" type="button">
                                    <span class="glyphicon glyphicon-plus green" aria-hidden="true"></span>
                                </button>
                            </a>
                        </th>


                        <th colspan="2">Thêm tuyến xe</th>

                        <th style="width: 70px;"></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    foreach ($data as $value)
                    {
                        ?>
                        <tr>
                            <td colspan="12"><?php echo($value->code . ". " . $value->name) ?></td>

                            <td style="text-align: right;">
                                <a href="update_form.php?code=<?php echo $value->code ?>">
                                    <button class="btn-view-fund btn btn-default btn-xs  " type="button">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </a>
                                <a href="delete.php?code=<?php echo $value->code ?>">
                                    <button class="btn-view-fund btn btn-default btn-xs" type="button"
                                            Onclick="return ConfirmDelete();">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"
                                              onclick="ConfirmDelete"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- //icons page-->
<script>
    function ConfirmDelete() {
        var x = confirm("Xác nhận xóa ?");
        if (x)
            return true;
        else
            return false;
    }
</script>

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-row w3layouts-agile">
            <div class="col-md-4 col-xs-4 footer-grids">
                <h2>More Information</h2>
                <p class="footer-one-w3ls">This is a great you can use this space to go into a little more detail about
                    your company. Talk about your team and
                    what services you provide. </p>
            </div>
            <div class="col-md-5 col-xs-5 footer-grids w3l-agileits">
                <h3>Newsletter</h3>
                <p>Recieve our latest news straight to your inbox</p>
                <form action="#" method="post">
                    <input type="email" placeholder="Email" name="email" required="">
                    <input type="submit" value="Subscribe"/>
                </form>
            </div>
            <div class="col-md-3 col-xs-3 footer-grids social-agileits">
                <h3>Connect With Us</h3>
                <div class="social-w3l">
                    <ul>
                        <li>
                            <a href="#" class="wthree_facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wthree_twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wthree_dribbble">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="social-w3r">
                    <ul>
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <a href="#">Dribbble</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- copyright -->
<div class="copy-section">
    <p>© Trung tâm Quản lý giao thông công cộng Thành phố
        <a href="http://buyttphcm.com.vn/">Hồ Chí Minh</a>
    </p>
</div>
<!-- //copyright -->
<!-- //footer -->


<!-- Js files -->
<!-- JavaScript -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Default-JavaScript-File -->
<script src="js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->

<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->

<!-- smooth scrolling-bottom-to-top -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //smooth scrolling-bottom-to-top -->
<!-- //Js files -->

</body>

</html>