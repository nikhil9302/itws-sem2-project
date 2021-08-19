<?php
session_start();
?>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body class="bg">
        <h1>Welcome back <?php echo $_SESSION["nameu"]; ?></h1>
        <div class="al">
            <h2><i>What would you like to do?</i></h2>
            <?php
            if (isset($_SESSION["user"])) {
                if ($_SESSION["user"] == "nike07") {
                    echo "<a href='order.php'><input type='submit' value='Orders'></a><br><br>";
                } else {
                    echo "<a href='shop.php'><input type='submit' value='Buy Grocery'></a><br><br>";
                }
            }
            ?>   
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">            
                <input type="submit" name="logout" value="Logout">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                unset($_SESSION["nameu"]);
                unset($_SESSION["user"]);
                header('Location: index.php');
            }
            ?>
        </div>        
    </body>
</html>

    


