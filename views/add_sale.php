<?php include('pages/header.php'); ?>

<div class="main">

    <a class="btn_back" href="<?php echo BASE_URL; ?>venda"><ion-icon name="arrow-back-circle-outline"></ion-icon></a>
    
    <form class="add-form" method="POST" class="form">
    <h2>Adicionar Venda</h2>

        <label for="">Nome do Produto</label><br>
        <input type="text" name="name" required><br>

        <label for="">Preço</label><br>
        <input type="text" name="price" required><br>

        <label for="">Quantidade</label><br>
        <input type="text" name="quantity" required><br>

        <label for="">Valor Total</label><br>
        <input type="text" name="total_price" required ><br>

        <label for="">Data de venda</label><br>
        <input type="date" name="date_sale" ><br>

        <input class="btn" type="submit" value="Editar"> 

    </form>
</div>