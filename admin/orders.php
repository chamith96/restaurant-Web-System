<?php
include "navbar.inc.php";
include "connect.inc.php";

         if(isset($_POST['delete'])){
           $delete = $_POST['delete'];
           if($sqli = "DELETE FROM `orders` WHERE 'email'=$delete"){
             echo "ok";
           }
         }

         $sql = "SELECT * FROM orders";
         $query = mysqli_query($conn, $sql);

         echo "<h3 align='center'>Food Order list</h3>";
         echo "<table border='1' width='100%'>
           <tr>
             <th>Customer Name</th>
             <th>Customer Email</th>
             <th>Customer Telephone</th>
             <th>Customer Address 1</th>
             <th>Customer Address 2</th>
             <th>Food</th>
             <th>Order Date</th>
             <th>Amount</th>
           </tr>";
           while($row = mysqli_fetch_assoc($query)){
             echo "<tr>";
             echo "<td>" . $row['customer name'] . "</td>";
             echo "<td>" . $row['email'] . "</td>";
             echo "<td>" . $row['teleno'] . "</td>";
             echo "<td>" . $row['address_1'] . "</td>";
             echo "<td>" . $row['address_2'] . "</td>";
             echo "<td>" . $row['food'] . "</td>";
             echo "<td>" . $row['date'] . "</td>";
             echo "<td>" . $row['amount'] . "</td>";
             echo "</tr>";
           }
           echo "</table>";
 ?>
