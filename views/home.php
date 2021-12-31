            <?php require 'pages/header.php' ?>

            <!-- Main -->
            <div class="main">

                <!--cards-->
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $total_sales; ?></div>
                            <div class="cardName">Vendas</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">$<?php echo $total_money; ?></div>
                            <div class="cardName">Renda</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $total_products; ?></div>
                            <div class="cardName">Produtos</div>
                        </div>

                        <div class="iconBx">
                        <ion-icon name="cube-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="details">
<div class="recent">
    <div class="cardHeader">
        <h2>Vendas Recentes</h2>
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
            </tr>
        </thead>
        <tbody>
        <?php foreach($list as $item): ?>
            <tr>
            <td><?php echo $item['name']; ?></td>
            <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>R$ <?php echo number_format($item['total_price'], 2, ',', '.'); ?></td>
            <td><?php echo date('d/m/Y', strtotime($item['date_sale'])); ?></td>
            </tr>

        <?php endforeach; ?>
           
        </tbody>
    </table>
</div>

            </div>
        </div>

       
