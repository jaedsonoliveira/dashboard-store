<html>
    <head> 
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css"/>
    </head>
    <body>
    <div class="loginarea">
    <form method="POST">
        <!--<label for="text"> Seu numero:<br></label>-->
        <input placeholder="Seu número:" type="text" name="number"/><br><br>

      <!-- <label for="password">Sua senha: <br></label> -->
        <input placeholder="Sua senha:" type="password" name="password"/><br>

        <input type="submit" value="Entrar"/>
    </form>

    <div class="login-img">
        <img src="<?php echo BASE_URL; ?>assets/images/login.jpg" alt="">
    </div>


<?php if(!empty($msg)): ?>
    <h2><?php echo $msg; ?> </h2>
<?php endif; ?>
</div>
    </body>
</html>

