<?php
session_start();
?>
<html>
    <head>
        <title>Shop</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body class="bg">
        
        <form method="POST" action="transaction.php">
            <h1 align="center"><caption>Student Details</h1>                
            <table align="center">
                <tr>
                    <td>Grocery Name </td>
                    <td>Quantity(kg)</td>
                    <td>Price for 1 kg(Rs)</td>
                </tr>
                <tr>
                    <td>Apple :</td>
                    <td><input type="text" name="apple"></td>
                    <td>200</td>                    
                </tr>
                <tr>
                    <td>Mango :</td>
                    <td><input type="text" name="mango"></td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Onion :</td>
                    <td><input type="text" name="onion"></td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Tomato : </td>
                    <td><input type="text" name="tomato"></td>
                    <td>24</td>
                </tr>
                
                <tr align='center'>                    
                    <td><input type="submit" name="submit" value="CHECKOUT"></td>
                    <td><a href="grocer.php"><input type="button" value="Back to HOME"></a></td>
                </tr>
            </table>
            
        </form>       
        
    </body>
</html>

    
