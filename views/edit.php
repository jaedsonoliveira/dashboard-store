<?php include('pages/header.php'); ?>

<div class="main">

    <a class="btn_back" href="<?php echo BASE_URL; ?>estoque"><ion-icon name="arrow-back-circle-outline"></ion-icon></a>
    
    <form class="add-form" method="POST" class="form">
    <h2>Editar Produto</h2>
        <label for="">Código de Barras</label><br>
        <input type="text" name="cod" value="<?php echo $info['cod']; ?>" required><br>

        <label for="">Nome do Produto</label><br>
        <input type="text" name="name"   value="<?php echo $info['name']; ?>" required><br>

        <label for="">Preço</label><br>
        <input type="text" name="price"  value="<?php echo number_format($info['price'], 2, ',', '.'); ?>"  required><br>

        <label for="">Quantidade</label><br>
        <input type="text" name="quantity"  value="<?php echo number_format($info['quantity'], 2, ',', '.'); ?>"  required><br>

        <label for="">Quantidade Mínima</label><br>
        <input type="text" name="min_quantity"  value="<?php echo number_format($info['min_quantity'], 2, ',', '.'); ?>" ><br>

        <input class="btn" type="submit" value="Editar">

    </form>
</div>