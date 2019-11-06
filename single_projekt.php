<?php
$ID = $_GET['ID'];
echo "ID: ". $ID;
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
        'Resume' => $row["Resume"],
        'Picture' => $row['Picture'],
        'all' => $row['Hole-text']
    );
}
$true_list = list($id, $Title, $resume, $Picture, $all)= $list;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single Projekt</title>
    <link rel="stylesheet" href="Stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <Header>
        <h1 id="title"><?php echo $true_list.Title;?></h1>
    </Header>
    <br>
    <div>
        <img src="<?php URL.createObjectURL($true_list.Picture);?>" alt="Error.png" id="picture">
        <br>
        <p id="om_projekt"><?php echo $true_list.resume;?></p>
        <br>
        <p id="done_projekt"> <?php echo $true_list.all;?></p>
    </div>
    <footer>
        <div class="row">
            <div class="colum">
                <p><b>Made by</b>: Claus N. Dimon</p>
                <p>&copy;<?php
                    $fromYear = 2019; 
                    $thisYear = (int)date('Y'); 
                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Portfolio
                </p>
            </div>
            <div class="colum">
                <p><b>Contact Phonenr</b>: <a href="tel:+4581754402">+4581754402</a></p>
            </div>
            <div class="colum">
                <p><b>Contact email</b>: <a href="mailto:Claus.n.dimon@live.dk">Claus.n.dimon@live.dk</a></p>
            </div>
        </div>
    </footer>
</body>
</html>