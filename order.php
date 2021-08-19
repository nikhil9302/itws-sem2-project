<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body class="bg">
        <h1 align="center">ADMIN Orders Database</h1>        
        <table border="2">
            <tr>  
                <td>Name</td>
                <td>Username</td>
                <td>Apple(in Rs)</td>
                <td>Mango(in Rs)</td>
                <td>Onion(in Rs)</td>
                <td>Tomato(in Rs)</td>
                <td>Total(in Rs)</td>
            </tr>
            <?php
            $con = new mysqli("localhost", "root", "", "groceries");
            $sql = "select * from grocery_bill;";
            $res = $con->query($sql);
            while ($row = $res->fetch_assoc()) {
                echo "<tr>" . "<td>" . $row['Name'] . "</td>" . "<td>" . $row['Username'] . "</td>" . "<td>" . $row['Apple'] . "</td>" . "<td>" . $row['Mango'] . "</td>" . "<td>" . $row['Onion'] . "</td>" . "<td>" . $row['Tomato'] . "</td>" . "<td>" . $row['Total'] . "</td>" . "</tr>";
            }
            ?>    
        </table> 
        <br><br>
        <form method="POST" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
            <h3><input type="submit" value="Delete Oldest Order History">This button deletes your first order details on database table</h3>            
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conn = new mysqli("localhost", "root", "", "groceries");
            if ($conn->connect_errno) {
                echo "Failed connection";
            } else {
                echo "Connection successful";
            }
            $sql = "delete from grocery_bill LIMIT 1;";
            $result = $con->query($sql);
            header("Refresh:0");
        }
        ?> 
        <a href="grocer.php"><input type="button" value="Back to HOME"></a>
    </body>
</html>
            

