<?php
    require("mysqlconnect.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed;" . $conn->connect_error);
    }
    $sql = "SELECT*FROM portfolio_projekter ORDER BY ID ASC LIMIT 1";
    $result = $conn->query($sql);
    $list = array();
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
         $list = array(
            'id' => $row['ID'],
            'Title' => $row["Title"],
            'Resume' => utf8_encode($row["Resume"]),
            'Picture' => $row['Picture'],
            'all' => utf8_encode($row['Hole_text'])
        );
    }
    $json = json_encode($list);
    echo $json;
?>