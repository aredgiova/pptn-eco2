<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the New Era</title>
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/fail.css">
</head>
<body>
    <section>
        <div class="form-container">
        <img src="img/logo.png" alt="" class="iconos__img">
        <h1>WELCOME TO THE NEW ERA</h1>
            <form action="validar.php" method="post">
                <div class="control">
                    <label for="usuario" class="value">User</label>
                    <input type="text" placeholder="User" name="usuario"></p>
                </div>
                <div class="control">
                    <label for="password" class="value">Password</label>
                    <input type="password" placeholder="Password" name="password"></p>
                </div>
                <div class="control">    
                    <input type="submit" value="Login" name="enter">
                </div>    
            </form>
            <div class="link">
                <a href="#">Forgot password?</a>
            </div>
            <?php if(!empty($message)): ?>
                <p><?php $message ?></p>
            <?php endif; ?>
        </div>
</section>    
</body>
</html>