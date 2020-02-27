<?php
    header("Content-Type:text/html;charset=utf8");
    $link = new PDO("mysql:host=localhost;dbname=owl_bookstore;charset=utf8","root","");
    $link->query("set names utf8");
?>