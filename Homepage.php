<?php
require("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="Stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <Header>
        <h1>Portfolio</h1>
    </Header>
    <div class="topnav">
        <a href="#home" class="active">Home</a>
        <a href="projekter.php">Projekter</a>
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
                <p id="infoboks" style="border: 2px solid yellow; padding: 5px; width:95%;"><b>Jeg er</b> <br>
                - Kreativ i form af at jeg ved der er mere end en løsning.<br>
                - Ansvarsbevisdst hvor jeg sikre mig at når jeg begynder et projekt bliver det også færdigt. <br>
                - Mødestabil hvor jeg husker at orientere hvis der sker noget der vil forhindre at man møder op. <br>
                - En 26-årig mand der brænder for at dygtiggøre og uddanne mig til en programmør. <br>
                </p>
            </div>
        </div>
        <div class="colum">
            <div>
                <h3>Uddannelse so far</h3>
                <p id="Uddannelse_so_far" style="border: 2px solid yellow; padding: 5px; width:95%;">lidt om hvad jeg har været igennem</p>
            </div>
        </div>
        <div class="colum">
            <br>
            <div>
                <img src="picture/Migselv.jpg" alt="picture/Error.png">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="colum">
           <div class="row" id="seneste_projekts" >
           
           </div>
        </div>
        <div class="colum">
              <div class="row" id="bedste_projekt">

              </div>
        </div>
        <div class="colum">
            <div class="row" id="first_projekt">

            </div>
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
    <script>
        var xmlhttp = new XMLHttpRequest();
        var myObj, x;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                myObj = JSON.parse(this.responseText);
                var divCol = document.createElement("div");
                var divCol1 = document.createElement("div");
                divCol.classList.add("columv2");
                divCol1.classList.add("columv2");

                var titles = document.createElement("h4");
                titles.classList.add("title");
                titles.innerHTML = myObj.Title;
                var resume = document.createElement("p");
                resume.innerHTML = myObj.Resume;
                var pic = document.createElement("img");
                pic.src = myObj.Picture;
                var link = document.createElement("a");
                link.href = "single_projekt.php?ID="+ myObj.id;
                link.innerHTML = "det hele";
                link.target = "_blank";
                divCol.appendChild(pic);
                divCol1.appendChild(titles);
                divCol1.appendChild(resume);
                divCol1.appendChild(link);
                document.getElementById("first_projekt").appendChild(divCol);
                document.getElementById("first_projekt").appendChild(divCol1);
                /* for(x in myObj)
                {
                    var divCol = document.createElement("div");
                    var divCol1 = document.createElement("div");
                    divCol.classList.add("columv2");
                    divCol1.classList.add("columv2");

                    var titles = document.createElement("h4");
                    titles.classList.add("title");
                    titles.innerHTML = myObj[x].Title;
                    var resume = document.createElement("p");
                    resume.innerHTML = myObj[x].resume;
                    var pic = document.createElement("img");
                    pic.src = myObj[x].Picture;
                    var link = document.createElement("a");
                    link.href = "single_projekt.php?ID="+ myObj[x].id;
                    link.innerHTML = "det hele";
                    link.target = "_blank";
                    divCol.appendChild(pic);
                    divCol1.appendChild(titles);
                    divCol1.appendChild(resume);
                    divCol1.appendChild(link);
                    document.getElementById("first_projekt").appendChild(divCol);
                    document.getElementById("first_projekt").appendChild(divCol1);

                } */
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
                var divCol = document.createElement("div");
                var divCol1 = document.createElement("div");
                divCol.classList.add("columv2");
                divCol1.classList.add("columv2");

                var titles = document.createElement("h4");
                titles.classList.add("title");
                titles.innerHTML = myObj.Title;
                var resume = document.createElement("p");
                resume.innerHTML = myObj.Resume;
                var pic = document.createElement("img");
                pic.src = myObj.Picture;
                var link = document.createElement("a");
                link.href = "single_projekt.php?ID="+ myObj.id;
                link.innerHTML = "det hele";
                link.target = "_blank";
                divCol.appendChild(pic);
                divCol1.appendChild(titles);
                divCol1.appendChild(resume);
                divCol1.appendChild(link);
                document.getElementById("bedste_projekt").appendChild(divCol);
                document.getElementById("bedste_projekt").appendChild(divCol1);
                /* for(x in myObj)
                {
                    var divCol = document.createElement("div");
                    var divCol1 = document.createElement("div");
                    divCol.classList.add("columv2");
                    divCol1.classList.add("columv2");

                    var titles = document.createElement("h4");
                    titles.classList.add("title");
                    titles.innerHTML = myObj[x].Title;
                    var resume = document.createElement("p");
                    resume.innerHTML = myObj[x].resume;
                    var pic = document.createElement("img");
                    pic.src = myObj[x].Picture;
                    var link = document.createElement("a");
                    link.href = "single_projekt.php?ID="+ myObj[x].id;
                    link.innerHTML = "det hele";
                    link.target = "_blank";
                    divCol.appendChild(pic);
                    divCol1.appendChild(titles);
                    divCol1.appendChild(resume);
                    divCol1.appendChild(link);
                    document.getElementById("first_projekt").appendChild(divCol);
                    document.getElementById("first_projekt").appendChild(divCol1);

                } */
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
                var divCol = document.createElement("div");
                var divCol1 = document.createElement("div");
                divCol.classList.add("columv2");
                divCol1.classList.add("columv2");

                var titles = document.createElement("h4");
                titles.classList.add("title");
                titles.innerHTML = myObj.Title;
                var resume = document.createElement("p");
                resume.innerHTML = myObj.Resume;
                var pic = document.createElement("img");
                pic.src = myObj.Picture;
                var link = document.createElement("a");
                link.href = "single_projekt.php?ID="+ myObj.id;
                link.innerHTML = "det hele";
                link.target = "_blank";
                divCol.appendChild(pic);
                divCol1.appendChild(titles);
                divCol1.appendChild(resume);
                divCol1.appendChild(link);
                document.getElementById("seneste_projekts").appendChild(divCol);
                document.getElementById("seneste_projekts").appendChild(divCol1);
                /* for(x in myObj)
                {
                    var divCol = document.createElement("div");
                    var divCol1 = document.createElement("div");
                    divCol.classList.add("columv2");
                    divCol1.classList.add("columv2");

                    var titles = document.createElement("h4");
                    titles.classList.add("title");
                    titles.innerHTML = myObj[x].Title;
                    var resume = document.createElement("p");
                    resume.innerHTML = myObj[x].resume;
                    var pic = document.createElement("img");
                    pic.src = myObj[x].Picture;
                    var link = document.createElement("a");
                    link.href = "single_projekt.php?ID="+ myObj[x].id;
                    link.innerHTML = "det hele";
                    link.target = "_blank";
                    divCol.appendChild(pic);
                    divCol1.appendChild(titles);
                    divCol1.appendChild(resume);
                    divCol1.appendChild(link);
                    document.getElementById("first_projekt").appendChild(divCol);
                    document.getElementById("first_projekt").appendChild(divCol1);

                } */
            }
        };
        xmlhttp.open("GET","seneste_projekt.php",true);
        xmlhttp.send();
    </script>
</body>
</html>