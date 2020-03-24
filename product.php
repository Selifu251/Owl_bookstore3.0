<?php
    require_once('Connections/owl_bookstore.php');
?>
<?php
    if(isset($_GET['search']) && $_GET['search']!=""){
        $search = $_GET['search'];
        $sql_where = "where ob_name like '%".$search."%' or ob_author like '%".$search."%'";
    }else{
        $sql_where = "";
    }
    $sql_bk = "select*from owl_book";
    $sql_order = "order by ob_publication_day desc";
    $sql = $sql_bk." ".$sql_where." ".$sql_order;
?>
<?php
    $result_product = $link->query($sql);
    echo "共有".$result_product->rowCount()."筆記錄<hr />";
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
<meta charset="utf8" />
<div id="product_div">
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
            <!-- 商品第1列 -->
                <div class="row">
                    <!-- 1-1 -->
                    <?php while($rs_product=$result_product->fetch(PDO::FETCH_ASSOC)){ ?>
                    <div class="col-md-4">
                        <div class="pro_inface">
                            <a href=<?php echo "?do=product_book&ob_id=".$rs_product['ob_id']; ?>><img src=<?php echo $rs_product['ob_img'] ?> class="rounded mx-auto d-block img-thumbnail" width="160px" /></a>
                            <div>
                                <div class="pro_inface_obname">
                                    <h4 class="ob_name"><?php echo $rs_product['ob_name'] ?></h4>
                                </div>
                                <div class="pro_inface_obauthor">
                                    <p>作者：<span class="ob_author"><?php echo $rs_product['ob_author'] ?></span></p>
                                </div>
                                <p>價格：<span class="ob_price"><?php echo $rs_product['ob_price'] ?></span></p>
                                <button class="btn btn-warning pro_inface_btn">
                                    <?php if(in_array($rs_product['ob_name'],$carlist_btn)){echo "已加入購物車";}else{echo "加入購物車";} ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- // 1-1 -->
                </div>
            <!-- // 商品第1列 -->
            </div>
            <!-- // product right 商品欄面-->
        </div>
    </div>
    <!-- // 商品頁面 -->
</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<!-- 商品退出購物車 function -->
<script>
    function DelArrVal(arr,val){
        for (i=0;i<arr.length;i++){
            if (JSON.stringify(arr[i])==JSON.stringify(val)){
                break;
            }
        }
        arr.splice(i,1);
        return arr;
    }
</script>
<!--// 商品退出購物車 function -->
<!-- 加退 購物車清單 -->
<script>
    $(".pro_inface_btn").click(function(){
        var OB_name = $(this).parent('div').find('.ob_name').text();
        var OB_author = $(this).parent('div').find('.ob_author').text();
        var OB_price = $(this).parent('div').find('.ob_price').text();
        var book_obj = {"ob_name":OB_name,"ob_author":OB_author,"ob_price":OB_price};

        if (!$.cookie("carlist")){
            var carlist_arr = [];
            console.log("[0000]"+carlist_arr+carlist_arr.constructor);
        }else{
            var carlist_arr = JSON.parse($.cookie("carlist"));
            console.log("[1000]"+carlist_arr+carlist_arr.constructor);
        }

        if($(this).text()=="加入購物車"){
            $(this).text("已加入購物車");
            carlist_arr.push(book_obj);
            var carlist_arr_jsonstr = JSON.stringify(carlist_arr);
            console.log("[0100]"+carlist_arr_jsonstr+carlist_arr_jsonstr.constructor);
            $.cookie("carlist",carlist_arr_jsonstr);
        }else{
            $(this).text("加入購物車");
            var carlist_del = DelArrVal(carlist_arr,book_obj);
            var carlist_del_jsonstr = JSON.stringify(carlist_del);
            console.log("[1100]"+carlist_del_jsonstr+carlist_del_jsonstr.constructor);
            $.cookie("carlist",carlist_del_jsonstr);
        }
    })
</script>
<!--// 加退 購物車清單 -->