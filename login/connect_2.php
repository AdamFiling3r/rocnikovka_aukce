<?php
    $user = "sql4457624";
     $password = "UBNemP9Mjk";
     $db = "sql4457624";
     $host = "sql4.freemysqlhosting.net";

     $conn = mysqli_connect($host, $user, $password);
     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     } else{
         echo("Connection succesful");
     }

     mysqli_select_db($conn, $db);
     $sql = "SELECT * FROM test";
     $second = "SELECT data FROM test WHERE id = 1";
     $result = mysqli_query($conn, $sql);
     $selected = mysqli_query($conn, $second);

     echo "<table>";
     while($r = mysqli_fetch_assoc($result)){
          foreach($r as $r){
              $string = $r;
              echo "<tr><td>" . $string . "</td>";
              
          }
     }

     echo "</table>";

    mysqli_free_result($result);
     mysqli_close($conn);

