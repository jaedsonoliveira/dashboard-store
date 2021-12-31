<?php include 'pages/header.php'; ?>

                    <div class="main">
                    <div class="details">
                    <div class="recent">
                        <div class="cardHeader">
                            <h2>Relatório - produtos em falta</h2>  <a onClick='window.print();' class="btn" href="">Imprimir relatório</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Nome</td>
                                    <td>Quantidade</td>
                                    <td>Quantidade Mínima</td>
                                    <td>Diferença</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($list as $item): ?>
                                <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td><?php echo $item['min_quantity']; ?></td>
                                <td><?php echo floatval($item['min_quantity']) - floatval($item['quantity']); ?></td>
                                </tr>

                            <?php endforeach; ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
</div>
