<?php require 'pages/header.php' ?>

<div class="main">

<div class="header-estoque">
    <a class="btn add" href="<?php echo BASE_URL; ?>venda/add">Adicionar Venda</a>

    <form method="GET">
    <div class="search">
    <label for="">
    <input id="busca"name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']: ''; ?>"  placeholder="Digite código ou nome do produto" type="text">
    <ion-icon name="search-outline"></ion-icon>
    </label>
    </div>
    </form>
</div>

<div class="details">
<div class="recent">
    <div class="cardHeader">
        <h2>Vendas</h2>
        <a href="#" class="btn">Ver tudo</a>
    </div>
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td>Valor Total</td>
                <td>Data da venda</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($list as $item): ?>
            <tr>
            <td><?php echo $item['name']; ?></td>
            <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>R$ <?php echo number_format($item['total_price'], 2, ',', '.'); ?></td>
            <td><?php echo date('d/m/Y',strtotime($item['date_sale'])); ?></td>
            <td>
            <a class="edit" href="<?php echo BASE_URL; ?>venda/edit/<?php echo $item['id']; ?>"><ion-icon name="create-outline"></ion-icon></a>
            <a class="delete" href="<?php echo BASE_URL; ?>venda/del/<?php echo $item['id']; ?>"><ion-icon name="trash-outline"></ion-icon></a>
            <a class="invoice"href=""> <img  width="25px" src="<?php echo BASE_URL; ?>assets/images/bill.png" alt="">  </a>

            </td>
            </tr>

        <?php endforeach; ?>
           
        </tbody>
    </table>
</div>
</div>
</div>