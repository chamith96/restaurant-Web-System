<?php
include "navbar.inc.php";
include "connect.inc.php";

         $sql = "SELECT * FROM food";
         $query = mysqli_query($conn, $sql);

         echo "<h3 align='center'>Food list</h3>";
         echo "<table border='1' width='100%'>
           <tr>
             <th>Food id</th>
             <th>Food Name</th>
             <th>Food Price (Rs.)</th>
             <th>Delete</th>
           </tr>";
           while($row = mysqli_fetch_assoc($query)){
             echo "<tr>";
             echo "<td>" . $row['fid'] . "</td>";
             echo "<td>" . $row['food name'] . "</td>";
             echo "<td>" . $row['price'] . "</td>";
             echo 	'<td><a href="deletefood.php?sid='.$row['fid'].'"><img src="images/drop.png" ></a></tr>';
           }
           echo "</table>";
 ?>
