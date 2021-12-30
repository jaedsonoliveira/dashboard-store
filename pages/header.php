
<div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                            <span class="title">Jaedson Alves</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL; ?>">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL; ?>estoque">
                            <span class="icon"><ion-icon name="cube-outline"></ion-icon></span>
                            <span class="title">Estoque</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL ?>relatorio">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                            <span class="title">Relatório(estoque)</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL; ?>venda">
                        <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                            <span class="title">Vendas</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <span class="title">Minha Conta</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo BASE_URL; ?>login/sair">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                </div>

           

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
        <script type="text/javascript">
            //MenuToggle
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function(){
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

            //add hovered class in selected list item
            let list = document.querySelectorAll('.navigation li');
            function activeLink(){
                list.forEach((item) =>
                    item.classList.remove('hovered'));
                    this.classList.add('hovered');
            }
            list.forEach((item)=>
            item.addEventListener('mouseover', activeLink));
        </script>