<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body class="bg al">
        <h1>Sign Up</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Name: <input type="text" name="name"><br><br>
            User Name: <input type="text" name="uname"><br><br>
            Password: <input type="password" name="pass"><br><br> 
            <input type="submit" name="signup" value="SIGN UP"><br>
        </form>
        <a href="index.php"><input type="button" name="login" value="LOGIN"></a>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['name'], $_POST['uname'], $_POST['pass'])) {
                $con = new mysqli("localhost", "root", "", "groceries");
                $n = $_POST['name'];
                $u = $_POST['uname'];
                $p = $_POST['pass'];
                $sql = "insert into userdata values('$n','$u','$p');";
                $result = $con->query($sql);
                if ($result) {
                    echo "<br><i>SignUp successful</i>";
                }
            }
        }
        ?>
    </body>
</html>

