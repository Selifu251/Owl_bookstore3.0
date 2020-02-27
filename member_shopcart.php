<?php
    if(isset($_COOKIE['carlist']) && $_COOKIE['carlist']!='[]'){
        $carlist_arr = json_decode($_COOKIE['carlist'],true);
        $carlist_div = 1;
    }else{
        $carlist_div = 0;
    }
?>

<div id="mem_shopcart_div">
    <div class="container">
        <div class="row">
            <!-- 左半邊 會員專區 -->
            <div class="col-md-3">
                <!-- 會員專區 -->
                <div class="card bg-light" style="margin-top:20px;">
                    <div class="card-heading">
                        <h4 class="h4">會員專區</h4>
                    </div>
                    <ul class="list-group">
                        <a href="javascript:;"><li class="list-group-item">會員資料</li></a>
                        <a href="#"><li class="list-group-item active">購物車</li></a>
                    </ul>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger">登出</a>
                    </div>
                </div>
                <!-- // 會員專區 -->
            </div>
            <!-- // 左半邊 會員專區 -->
            <!-- 右半邊 會員資料 -->
            <div class="col-md-9">
                <?php if($carlist_div>0){ ?>
                <table id="carlist_tab" class="table">
                    <tr>
                        <th colspan="5"><h3>購物車</h3></th>
                    </tr>
                    <?php  ?>
                    <?php $tot_price=0; for($i=0;$i<count($carlist_arr);$i++){ ?>
                    <tr class="cart_list">
                        <td><?php echo ($i+1); ?></td>
                        <td class="ob_name" style="width: 350px;"><?php echo $carlist_arr[$i]['ob_name']; ?></td>
                        <td class="ob_author"><?php echo $carlist_arr[$i]['ob_author']; ?></td>
                        <td class="ob_price"><?php echo $carlist_arr[$i]['ob_price']; ?></td>
                        <td>
                            <button class="btn carlist_btn">-</button>
                            <input type="text" class="carlist_pronum" style="width: 30px; text-align: right;" value="1">
                            <button class="btn carlist_btn">+</button>
                        </td>
                    </tr>
                    <?php $tot_price += intval($carlist_arr[$i]['ob_price']); ?>
                    <?php } ?>
                    <tr class="tot_list">
                        <td class="total_price" colspan="5">總金額：<span style="font-size:30px; color: red;" class="tot_price"><?php echo $tot_price; ?></span>元</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align: right;">
                            <button class="btn btn-success">確定送出</button>
                        </td>
                    </tr>
                </table>
                <?php }else{ echo "<h3>購物車為空</h3>"; } ?>
            </div>
            <!-- // 右半邊 會員資料 -->
        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<!-- 加減清單按鈕 -->
<script>
    $('.carlist_btn').click(function(){
        var carlist_pronum = $(this).parent('td').find('input').val();
        var pro_price = $(this).parents('.cart_list').find('.ob_price').text();
        var tot_price = $(this).parents('#carlist_tab').find('.tot_list').find('.tot_price').text();

        if($(this).text()=="+"){
            $(this).parent('td').find('input').val(parseInt(carlist_pronum)+1);
            var new_price =parseInt(tot_price)+parseInt(pro_price);
            $(this).parents('#carlist_tab').find('.tot_list').find('.tot_price').text(new_price);
        }else{
            if(parseInt(carlist_pronum)>0){
                $(this).parent('td').find('input').val(parseInt(carlist_pronum)-1);
                var new_price =parseInt(tot_price)-parseInt(pro_price);
                $(this).parents('#carlist_tab').find('.tot_list').find('.tot_price').text(new_price);
            }
        }
    });
</script>
<!--// 加減清單按鈕 -->