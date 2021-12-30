            <?php require 'pages/header.php' ?>

            <!-- Main -->
            <div class="main">

                <!--cards-->
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers">1,504</div>
                            <div class="cardName">Daily Views</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">80</div>
                            <div class="cardName">Sales</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">284</div>
                            <div class="cardName">Comments</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">$7,843</div>
                            <div class="cardName">Earning</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <div class="recent">
                        <div class="cardHeader">
                            <h2>Recent Orders</h2>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>Payment</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($list as $item): ?>
                                <tr>
                                <td><?php echo $item['cod']; ?></td>
                                <td><?php echo $item['name']; ?></td>
                                <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>
                                </tr>

                            <?php endforeach; ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

       
