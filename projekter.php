<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projekter</title>
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
        <a href="#projekter" class="active">Projekter</a>
        <a href="about_me.php">About Me</a>
    </div>
    <br>
    <div>
        <h2 class="overskrift">Projekter</h2>
    </div>
    <div class="row" id="projekter">
        
    </div>
    <footer>
        <div class="row">
            <div class="colum">
                <p><b>Made by</b>: Claus Dimon</p>
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
    <script>
        var xmlhttp = new XMLHttpRequest();
        var myObj, x;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                myObj = JSON.parse(this.responseText);
                for(x in myObj)
                {
                    var divrow = document.createElement("div");
                    var divCol = document.createElement("div");
                    var divCol1 = document.createElement("div");
                    divrow.classList.add("columv2");
                    divCol.classList.add("columv2");
                    divCol1.classList.add("columv2");

                    var titles = document.createElement("h4");
                    titles.classList.add("title");
                    titles.innerHTML = myObj[x].Title;
                    var resume = document.createElement("p");
                    resume.innerHTML = myObj[x].Resume;
                    var pic = document.createElement("img");
                    pic.src = myObj[x].Picture;
                    var link = document.createElement("a");
                    link.href = "single_projekt.php?ID="+ myObj[x].ID;
                    link.innerHTML = "det hele";
                    link.target = "_blank";
                    divCol.appendChild(pic);
                    divCol1.appendChild(titles);
                    divCol1.appendChild(resume);
                    divCol1.appendChild(link);
                    divrow.appendChild(divCol);
                    divrow.appendChild(divCol1);
                    document.getElementById("projekter").appendChild(divrow);

                }
            }
        };
        xmlhttp.open("GET","all_projekts.php",true);
        xmlhttp.send();
    </script>
</body>
</html>