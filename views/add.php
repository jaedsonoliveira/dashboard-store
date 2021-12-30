<?php include('pages/header.php'); ?>

<div class="main">

    <a class="btn_back" href="<?php echo BASE_URL; ?>estoque"><ion-icon name="arrow-back-circle-outline"></ion-icon></a>
    
    <form class="add-form" method="POST" class="form">
    <h2>Adicionar Produto</h2>
        <label for="">Código de Barras</label><br>
        <input type="text" name="cod" required><br>

        <label for="">Nome do Produto</label><br>
        <input type="text" name="name" required><br>

        <label for="">Preço</label><br>
        <input type="text" name="price" required><br>

        <label for="">Quantidade</label><br>
        <input type="text" name="quantity" required><br>

        <label for="">Quantidade Mínima</label><br>
        <input type="text" name="min_quantity"><br>

        <input class="btn" type="submit" value="Adicionar">

    </form>
</div>