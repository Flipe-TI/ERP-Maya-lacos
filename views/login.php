<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="<?php echo BASE_URL; ?>/assets/css/login.css" rel="stylesheet" />
        <link rel="sortcut icon" href="assets/images/laco-de-cabelo.svg" type="image/gif" />

    </head>
    <body>
        <div id="logos">
            <img class = "logo1" src = "assets/images/Mayah.png">
            <img class = "logo2" src = "assets/images/laco-de-cabelo.svg">
        </div>
        
        <div class="loginarea">
        	<form method="POST">
                <label>
        		    <input type="email" name="email" placeholder=" ">
                    <p>Email</p>
                </label>
                <br>
                <label>
        		    <input type="password" name="password" placeholder=" ">
                    <p>Senha</p>
                </label>
                <br>
        		<input type="submit" value="Entrar" /><br/>

        		<?php if(isset($error) && !empty($error)): ?>
        		<div class="warning"><?php echo $error; ?></div>
        		<?php endif; ?>
        	</form>
        </div>
    </body>
</html>