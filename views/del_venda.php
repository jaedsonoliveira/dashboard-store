<?php
$v = new Vendas();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $p->delVenda($_GET['id']);

    
}