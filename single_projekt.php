<?php
$ID = $_GET['ID'];
require("mysqlconnect.php");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed;" . $conn->connect_error);
}
$sql = "SELECT * FROM portfolio_projekter WHERE ID = " . $ID;
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single Project</title>
    <link rel="stylesheet" href="stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <Header>
        <h1 id="title"><?php echo $list['Title'];?></h1>
    </Header>
    <hr>
    <br>
    <div>
        <img src="<?php echo $list['Picture'];?>" alt="picture not found" id="picture">
        <br>
        <p id="om_projekt"><?php echo $list['Resume'];?></p>
        <br>
        <p id="done_projekt"> <?php echo $list['all'];?></p>
    </div>
    <footer>
        <div class="row">
            <div class="colum">
                <p><b>Made by</b>: Claus N. Dimon</p>
            </div>
            <div class="colum">
                <p><b>Contact Phonenr</b>: <a href="tel:+45 81 75 44 02">+45 81 75 44 02</a></p>
            </div>
            <div class="colum">
                <p><b>Contact email</b>: <a href="mailto:Claus.n.dimon@live.dk">Claus.n.dimon@live.dk</a></p>
            </div>
            <div class="colum">
                <p>&copy;<?php
                    $fromYear = 2019; 
                    $thisYear = (int)date('Y'); 
                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Portfolio
                </p>
            </div>
        </div>
    </footer>
</body>
</html>