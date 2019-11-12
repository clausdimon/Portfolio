<!DOCTYPE html>
<html lang="en">
<head>
    <title>About me</title>
    <link rel="stylesheet" href="stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <Header>
        <h1>Portfolio</h1>
    </Header>
    <div class="topnav">
        <a href="Homepage.php">Home</a>
        <a href="projekter.php">Projects</a>
        <a href="#about me" class="active">About Me</a>
    </div>
    <br>
    <div>
        <h2 class="overskrift">About me</h2>
    </div>
    <br>
    <div class="row">
        <div class="picture_side" style="text-align:center;">
            <img src="picture/Migselv.jpg" alt="picture/Error.png" style="width: 75%;">
        </div>
        <div class="text_side">
            <div>
                <h3>About me</h3>
                <p>I am a 26-year old man, living in Odense C, who is currently working to become a Programmer, 
                though the path to making that choice have been long and difficult, trying multiple things. In my education so far,
                I have Learned a lot about how to program with <b title="C sharp">C#</b> and then learned some HTML, CSS,
                 <b title="JavaScript">JS</b> and PHP. I take great joy in getting a difficult project, and figure out how it all 
                 needs to be written makes the journey through it even more satisfying, still the process of making the project done
                 can be done in many ways, and figure out how, can be difficult, and sometimes takes valuable time away 
                 from the project, but the deadline will always be held. <br><br>
                 I am originally from Ballerup a city on Zealand, where most of my family still lives.
                 But I make sure to spent some of my time visiting them. In my spare time I’m normally on my pc, 
                 playing and chatting with fiends and family. And some weekends is used on playing Dungeon and Dragons 
                 both as a Dungeon Master and as a player, as I really enjoy the possibilities of having a character in 
                 another world where you can act different than you would normally do.<br><br>
                As a ending of my education I don’t have a preference to what kind of programmer I want to become, 
                I just want to have job where I can end the day without feeling like I didn’t make the world a better 
                place with my Programming. That could be through applications or with a new beautiful website created. <br>
                </p>
            </div>
            <br>
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
            <h3 class="texttitle"><b>Available for Hiring</b></h3>
            <p style="text-align: center; display: inline-block; width:100%;"> Yes</p>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="colum">
                <p><b>Made by</b>: Claus N. Dimon</p>
            </div>
            <div class="colum">
                <p><b>Contact Phonenr</b>: <a href="tel:+4581754402">+45 81 75 44 02</a></p>
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
