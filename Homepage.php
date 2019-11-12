<?php
require("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <Header>
        <h1>Portfolio</h1>
    </Header>
    <div class="topnav">
        <a href="#home" class="active">Home</a>
        <a href="projekter.php">Projects</a>
        <a href="about_me.php">About Me</a>
    </div>
    <br>
    <div>
        <h2 class="overskrift">Home</h2>
    </div>
    <div class="row">
        <div class="colum">
            <div>
                <h3>Info</h3>
                <p id="infoboks" style="border: 2px solid yellow; padding: 5px; width:95%;"><b>I am</b> <br>
                - Creative in the shape, that I know that there is more than one solution.<br>
                - Responsible where I will make sure, that when I start a project, I will finish it. <br>
                - Attending work regularly, and if I am hindered in that, I will give notice. <br>
                - A 26-year-old man, who is burning to qualify and educate myself to becoming a programmer. <br>
                </p>
            </div>
        </div>
        <div class="colum">
            <div>
                <h3>Education so far</h3>
                <p id="Uddannelse_so_far" style="border: 2px solid yellow; padding: 5px; width:95%;">In the Basic course of the education I learned the basics to programming <b title="C sharp">C#</b> and Asp.net websites,
                and the basics of Python.
                Close to the end of the course there was also some lessons about creating and connect to a SQL Database.
                <br>In the school’s work placement, I have expanded my knowledge in <b title="C sharp">C#</b> and created a few applications 
                and investigated how to create a website another way than asp.net, which is using HTML, CSS, JavaScript and PHP. 
                To the extent of creating the website that you’re now on.
                </p>
            </div>
        </div>
        <div class="colum" style="text-align:center;">
            <br>
            <div>
                <img src="picture/Migselv.jpg" alt="picture/Error.png">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="colum">
           <div class="row container" id="seneste_projekts" >
           
           </div>
        </div>
        <div class="colum">
              <div class="row container" id="bedste_projekt">

              </div>
        </div>
        <div class="colum">
            <div class="row container" id="first_projekt">

            </div>
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
    <script>
        var xmlhttp = new XMLHttpRequest();
        var myObj, x;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                myObj = JSON.parse(this.responseText);
                var divCol1 = document.createElement("div");
                divCol1.classList.add("row");

                var titles = document.createElement("h4");
                titles.classList.add("title");
                titles.innerHTML = myObj.Title;
                var resume = document.createElement("p");
                resume.innerHTML = myObj.Resume;
                var link = document.createElement("a");
                link.href = "single_projekt.php?ID="+ myObj.id;
                link.innerHTML = "det hele";
                link.target = "_blank";
                divCol1.appendChild(titles);
                divCol1.appendChild(resume);
                divCol1.appendChild(link);
                document.getElementById("first_projekt").appendChild(divCol1);
            }
        };
        xmlhttp.open("GET","first_projekt.php",true);
        xmlhttp.send();

    </script>
    <script>
        var xmlhttp = new XMLHttpRequest();
        var myObj, x;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                myObj = JSON.parse(this.responseText);
                var divCol1 = document.createElement("div");
                divCol1.classList.add("row");

                var titles = document.createElement("h4");
                titles.classList.add("title");
                titles.innerHTML = myObj.Title;
                var resume = document.createElement("p");
                resume.innerHTML = myObj.Resume;
                var link = document.createElement("a");
                link.href = "single_projekt.php?ID="+ myObj.id;
                link.innerHTML = "det hele";
                link.target = "_blank";
                divCol1.appendChild(titles);
                divCol1.appendChild(resume);
                divCol1.appendChild(link);
                document.getElementById("bedste_projekt").appendChild(divCol1);
            }
        };
        xmlhttp.open("GET","random_projekt.php",true);
        xmlhttp.send();
    </script>
    <script>
        var xmlhttp = new XMLHttpRequest();
        var myObj, x;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                myObj = JSON.parse(this.responseText);
                var divCol1 = document.createElement("div");
                divCol1.classList.add("row");

                var titles = document.createElement("h4");
                titles.classList.add("title");
                titles.innerHTML = myObj.Title;
                var resume = document.createElement("p");
                resume.innerHTML = myObj.Resume;
                var link = document.createElement("a");
                link.href = "single_projekt.php?ID="+ myObj.id;
                link.innerHTML = "det hele";
                link.target = "_blank";
                divCol1.appendChild(titles);
                divCol1.appendChild(resume);
                divCol1.appendChild(link);
                document.getElementById("seneste_projekts").appendChild(divCol1);
            }
        };
        xmlhttp.open("GET","seneste_projekt.php",true);
        xmlhttp.send();
    </script>
</body>
</html>