<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
        <title>Transaction</title>
    </head>

<body class="bg al">
    <?php       
        $n = $_SESSION['nameu'];
        $u = $_SESSION['user'];
        $a = $_POST["apple"]*200; 
        $m = $_POST["mango"]*100;
        $o = $_POST["onion"]*30;
        $t = $_POST["tomato"]*24;
        $total = $a+$m+$o+$t; 
        $con=new mysqli("localhost","root","","groceries");
        if($con->connect_errno)
        {
            echo "Failed connection";
        }
        else{
            echo "<h3><e>Transaction successful "."<br>"."Total Amount: Rs ".$total."</e></h3>";
            echo "<h2><i>Happy Shopping!!</i></h2>";
        }
        $sql="insert into grocery_bill values('$n','$u',$a,$m,$o,$t,$total);";
        $result=$con->query($sql);
    ?>
    <td><a href="grocer.php"><input type="button" value="Back to HOME"></a></td>
</body>
</html>




