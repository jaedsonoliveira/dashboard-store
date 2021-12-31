<?php
$p = new Products();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $p->delProduct($_GET['id']);

    
}