<!DOCTYPE html>
<html lang="en">
<head>
    <title>About me</title>
    <link rel="stylesheet" href="Stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <Header>
        <h1>Portfolio</h1>
    </Header>
    <div class="topnav">
        <a href="homepage.php">Home</a>
        <a href="projekter.php">Projekter</a>
        <a href="#about me" class="active">About Me</a>
    </div>
    <br>
    <div>
        <h2 class="overskrift">About me</h2>
    </div>
    <br>
    <div class="row">
        <div class="picture_side">
            <img src="picture/Migselv.jpg" alt="picture/Error.png" style="width: 75%;">
        </div>
        <div class="text_side">
            <div>
                <h3>About me</h3>
                <p>grundlæggende</p>
            </div>
            <div>
                <a href="CV.pdf" class="download">CV som pdf</a>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="picture_side" style="height:200px;">
            <h3 class="texttitle"><b>Current Workplace</b></h3>
            <p style="text-align: center; display: inline-block; width:100%;">SDE Munkebjergvej, 5000 Odense C</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="picture_side" style="height:200px;">
            <h3 class="texttitle"><b>available for Hiring</b></h3>
            <p style="text-align: center; display: inline-block; width:100%;"> Yes</p>
        </div>
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
