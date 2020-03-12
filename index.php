<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>貓頭鷹書房</title>
        <meta charset="utf8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/OwlBookstore_Main.css" rel="stylesheet" type="text/css" />
    </head>


    <style>
body {
    font-family: Microsoft JhengHei;
}
.pro_inface {
    background-color: white;
    border: 1px gray solid;
    border-radius:5px;
    height: 380px;
    margin-top: 10px;
    padding: 2px;
}
.pro_inface_obname {
    height: 60px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.pro_inface_obauthor {
    height: 30px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
}
#carlist_tab {
    border: 1px solid black;
}
.end_div {
    height: 300px;
    background-color:azure;
    margin-top: 10px;
}
    </style>

    <body>
        <!-- top_header -->
        <div class="top_header">
            <p>歡迎光臨貓頭鷹書房</p>
        </div>
        <!-- // top_header -->
        <!-- title -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="logo_h1">貓頭鷹書房</h1>
                    <img src="images/logo.png">
                </div>
                <div class="col-md-8">
                    <!-- header-list -->
                    <ul class="nav">
                        <li class="list_head nav-item list_right_line"><span class="nav-link">06-5788888</span></li>
                        <li class="list_head nav-item list_right_line"><span class="nav-link">登入</span></li>
                        <li class="list_head nav-item"><span class="nav-link">註冊</span></li>
                    </ul>
                    <!-- // header-list -->
                    <!-- search -->
                    <div>
                        <input type="search" class="form-control search_book">
                        <a href="?do=product" class="btn"><img class="search_img" src="images/search1.png"></a>
                    </div>
                    <!-- // search -->
                </div>
            </div>
        </div>
        <!-- // title-->
        <!-- nav -->
        <div class="container-filed">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <div>
                        <form class="form">
                            <select class="form-control">
                                <option><a>書籍分類</a></option>
                                <option><a>中文書</a></option>
                                <option><a>英文書</a></option>
                            </select>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_dropdown" aria-controls="nav_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="nav_dropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="?">首頁</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">關於我們</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">會員專區</a></li>
                            <li class="nav-item"><a class="nav-link" href="react_test001.html">ReactTest</a></li>
                            <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="?do=mem_shopcart">購物車</a></li>
                            <li class="nav-item"><a class="nav-link" href="myresume.html"">自製履歷/作品</a></li>
                            <li class="nav-item"><a class="nav-link" href="main_newbookimg.php"">NweBookImgPhp</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- nav -->
        <!-- Main -->
        <?php if(!isset($_GET['do'])){ require_once("main_index.html"); } ?>
        <?php if(isset($_GET['do']) && $_GET['do']=='product'){ require_once("product.php"); } ?>
        <?php if(isset($_GET['do']) && $_GET['do']=='product_book'){ require_once("product_book.php"); } ?>
        <?php if(isset($_GET['do']) && $_GET['do']=='mem_shopcart'){ require_once("member_shopcart.php"); } ?>
        <!-- // Main -->
        <!-- end_div -->
        <div class="end_div" style="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>相關連結</h3>
                        <ul>
                            <li>關於我們</li>
                            <li><a href="myresume.html">其餘作品</a></li>
                            <li><a href="https://github.com/Selifu251/Owl_bookstore3.5">GitHub</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>聯繫方式</h3>
                        <ul>
                            <li>台南市 台灣</li>
                            <li>0962055037</li>
                            <li>affu1412@gmail.com</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <!--// end_div -->
        <!-- floor_header -->
        <div class="floor_header container-filed">
            <p>歡迎光臨貓頭鷹書房</p>
        </div>
        <!-- // floor_header -->
    </body>

    <!-- Bootstarp4.0 -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- // Bootstarp4.0 -->
    <script src="js/jquery.cookie.js"></script>
</html>