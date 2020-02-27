<?php
    require_once('Connections/owl_bookstore.php');
    $sql = "select*from owl_book where ob_id=".$_GET['ob_id'];
    $result_pro_book = $link->query($sql);
    $rs_pro_book = $result_pro_book->fetch(PDO::FETCH_ASSOC);
?>
<?php
    $carlist_btn = array();
    if(isset($_COOKIE['carlist'])){
        $carlist_arr = json_decode($_COOKIE['carlist'],true);
        $carlist_btn = array();
        for ($i=0;$i<count($carlist_arr);$i++){
            $carlist_btn[$i] = $carlist_arr[$i]['ob_name'];
        }
    }
?>
<div id="product_book_div">
    <!-- 商品頁面 -->
    <div class="container">
        <div class="row">
            <!-- product left 書籍檢索 -->
            <div class="side-bar col-md-3">
                <!-- 選擇分類 -->
                <div class="left-side">
                    <div class="card bg-info">
                        <div style="color: white;" class="card-heading">
                            <h3>中文書</h3>
                        </div>
                        <div class="list-group">
                            <a href="javascript:;" class="list-group-item active">
                                全部
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                文學
                            </a>	
                        </div>
                    </div>
                </div>
                <!-- // 選擇分類 -->
            </div>
            <!-- //product left 書籍檢索 -->
            <!-- product right 商品欄面-->
            <div class="col-md-9">
            <!-- 商品內容 -->
            <div class="row pro_inf">
                <!-- 商品圖片 -->
                <div class="col-md-4">
                    <img src=<?php echo $rs_pro_book['ob_img']; ?> class="img-thumbnail" />
                    <a style="margin: 10px;" href="#" class="btn btn-warning pro_inface_btn">
                        <?php if(in_array($rs_pro_book['ob_name'],$carlist_btn)){echo "已加入購物車";}else{echo "加入購物車";}?>
                    </a>
                </div>
                <!-- // 商品圖片 -->
                <!-- 商品資料 -->
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item">書名：<span class="ob_name"><?php echo $rs_pro_book['ob_name']; ?></span></li>
                        <li class="list-group-item">作者：<span class="ob_author"><?php echo $rs_pro_book['ob_author']; ?></span></li>
                        <li class="list-group-item">出版社：<?php echo $rs_pro_book['ob_publishing']; ?></li>
                        <li class="list-group-item">出版日：<?php echo $rs_pro_book['ob_publication_day']; ?></li>
                        <li class="list-group-item">ISBN：<?php echo $rs_pro_book['ISBN']; ?></li>
                        <li class="list-group-item">價格：<span class="ob_price"><?php echo $rs_pro_book['ob_price']; ?></span></li>
                        <li class="list-group-item">簡介：<?php echo $rs_pro_book['ob_content']; ?></li>
                    </ul>
                </div>
                <!-- // 商品資料 -->
            </div>
            <!-- // 商品內容 -->
            </div>
            <!-- // product right 商品欄面-->
        </div>
    </div>
    <!-- // 商品頁面 -->
</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script>
    $('.pro_inface_btn').click(function(){
        $ob_name = $(this).parents('.pro_inf').find('.col-md-8').find('.ob_name').text();
        $ob_author = $(this).parents('.pro_inf').find('.col-md-8').find('.ob_author').text();
        $ob_price = $(this).parents('.pro_inf').find('.col-md-8').find('.ob_price').text();
        alert($ob_name+" "+$ob_author+" "+$ob_price);
    });
</script>