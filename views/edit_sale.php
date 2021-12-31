<?php include('pages/header.php'); ?>

<div class="main">

    <a class="btn_back" href="<?php echo BASE_URL; ?>venda"><ion-icon name="arrow-back-circle-outline"></ion-icon></a>
    
    <form class="add-form" method="POST" class="form">
    <h2>Editar Venda</h2>

        <label for="">Nome do Produto</label><br>
        <input type="text" name="name"   value="<?php echo $info['name']; ?>" required><br>

        <label for="">Preço</label><br>
        <input type="text" name="price"  value="<?php echo number_format($info['price'], 2, ',', '.'); ?>"  required><br>

        <label for="">Quantidade</label><br>
        <input type="text" name="quantity"  value="<?php echo $info['quantity']; ?>"  required><br>

        <label for="">Valor Total</label><br>
        <input type="text" name="total_price"  value="<?php echo $info['total_price']; ?>" ><br>

        <label for="">Data de venda</label><br>
        <input type="date" name="date_sale"  value="<?php echo $info['date_sale']; ?>" ><br>

        <input class="btn" type="submit" value="Editar"> 

    </form>
</div>