<?php
    require("mysqlconnect.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed;" . $conn->connect_error);
    }
    $sql = "SELECT*FROM portfolio_projekter";
    $result = $conn->query($sql);
    $list = array();
    while($row=$result->fetch_assoc()){
     echo "<div class=\"row\">";
        echo "<div class=\"columv2\">";
            echo "<img src=\"".$row['Picture']."\">";
        echo "</div>";
        echo "<div class=\"columv2\">";
            echo "<h1>".$row['Title']."</h1>";
            echo "<p>".$row['Resume']."</p>";
            echo "<a href=\"single_projekt.php?ID=".$row['ID']."\" target=\"_blank\">det hele</a>";
    echo "</div>"; 
    }
?>