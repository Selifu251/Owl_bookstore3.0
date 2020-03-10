<?php
    require_once('Connections/owl_bookstore.php');
    $sql = "select*from owl_news_top order by ont_id";

    $result_ont = $link->query($sql);
    echo "共有".$result_ont->rowCount()."筆記錄<hr />";

    $ont_arr=array();

    while($rs_ont=$result_ont->fetch(PDO::FETCH_ASSOC)){
        echo $rs_ont['ont_id']."<br />";
        echo $rs_ont['ont_order']."<br />";
        echo $rs_ont['ont_title']."<br />";
        echo $rs_ont['ont_content']."<br />";
        echo $rs_ont['ont_img']."<br />";
        echo $rs_ont['ont_date']."<hr />";

        $ont_list=array(
            "ont_id"=>$rs_ont['ont_id'],
            "ont_order"=>$rs_ont['ont_order'],
            "ont_title"=>urlencode($rs_ont['ont_title']),
            "ont_content"=>urlencode($rs_ont['ont_content']),
            "ont_img"=>$rs_ont['ont_img'],
            "ont_date"=>$rs_ont['ont_date']
        );
        array_push($ont_arr,$ont_list);

    }
    $ont_arr_json = json_encode($ont_arr);
    echo $ont_arr_json."<hr />";

    header('Location:main_newbookimg_js.html?newbookimg='.$ont_arr_json);
?>