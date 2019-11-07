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
        $list[] = $row; 
            /* 'id' => $row['ID'],
            'Title' => $row['Title'],
            'Resume' => $row['Resume'],
            'Picture' => $row['Picture'],
            'all' => $row['Hole_text']     */
        //)
    //);
    }
    echo json_encode($list);
?>