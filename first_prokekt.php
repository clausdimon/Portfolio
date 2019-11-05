<?php
    require("mysqlconnect.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed;" . $conn->connect_error);
    }
    $sql = "SELECT*FROM portfolio_projekter ORDER BY ID DESC LIMIT 1";
    $result = $conn->query($sql);
    $list = array();
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $list = array(
            'id' => $row['ID'],
            'Title' => $row["Title"],
            'Resume' => $row["Resume"],
            'Picture' => $row['Picture'],
            'all' => $row['Hole-text']
        );
    }
    echo json_encode($list);
?>