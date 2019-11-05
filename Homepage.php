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
                <p id="infoboks">lidt om <b>migselv</b></p>
            </div>
        </div>
        <div class="colum">
            <div>
                <h3>Uddannelse so far</h3>
                <p id="Uddannelse_so_far">lidt om hvad jeg har været igennem</p>
            </div>
        </div>
        <div class="colum">
            <img src="Migselv.jpg" alt="Error.png">
        </div>
    </div>
    <div class="row">
        <div class="colum" id="seneste_projekts">
           <script>
               $(window).ready(function(e){
                   $.ajax({
                       url : "seneste_projekt.php",
                       type : "post",
                       datatype : "json",
                       succes : function(list){
                           var divRow = document.createElement("div");
                           divRow.classList.add("row");
                           var divCol = document.createElement("div");
                           var divCol1 = document.createElement("div");
                           divCol.classList.add("columv2");
                           divCol1.classList.add("columv2");

                           list.foreach(function(obj, index){
                               var titles = document.createElement("h4");
                               titles.classList.add("title");
                               titles.innerHTML = obj.Title;
                               var resume = document.createElement("p");
                               resume.innerHTML= obj.Resume;
                               var pic = document.createElement("img");
                               const blobUrl = URL.createObjectURL(obj.Picture);
                               pic.src = blobUrl;
                               var link = document.createElement("a");
                               link.href = "single_projekt.php?ID="+ obj.id;
                               link.innerHTML = "det hele";
                               link.target = "_blank";
                               divCol.appendChild(img);
                               divCol1.appendChild(titles);
                               divCol1.appendChild(resume);
                               divCol1.appendChild(link);
                               divRow.appendChild(divCol);
                               divRow.appendChild(divCol1);
                               $("#seneste_projekts").appendChild(divRow);
                           });
                       }
                   });
              )});
            </script>
        </div>
        <div class="colum" id="bedste_projekt">
            <script>
               $(window).ready(function(e){
                   $.ajax({
                       url : "random_projekt.php",
                       type : "post",
                       datatype : "json",
                       succes : function(list){
                           var divRow = document.createElement("div");
                           divRow.classList.add("row");
                           var divCol = document.createElement("div");
                           var divCol1 = document.createElement("div");
                           divCol.classList.add("columv2");
                           divCol1.classList.add("columv2");

                           list.foreach(function(obj, index){
                               var titles = document.createElement("h4");
                               titles.classList.add("title");
                               titles.innerHTML = obj.Title;
                               var resume = document.createElement("p");
                               resume.innerHTML= obj.Resume;
                               var pic = document.createElement("img");
                               const blobUrl = URL.createObjectURL(obj.Picture);
                               pic.src = blobUrl;
                               var link = document.createElement("a");
                               link.href = "single_projekt.php?ID="+ obj.id;
                               link.innerHTML = "det hele";
                               link.target = "_blank";
                               divCol.appendChild(img);
                               divCol1.appendChild(titles);
                               divCol1.appendChild(resume);
                               divCol1.appendChild(link);
                               divRow.appendChild(divCol);
                               divRow.appendChild(divCol1);
                               $("#bedste_projekt").appendChild(divRow);
                           });
                       }
                   });
              )});
           </script>
        </div>
        <div class="colum" id="first_projekt">
            <script>
                $(window).ready(function(e){
                   $.ajax({
                       url : "first_projekt.php",
                       type : "post",
                       datatype : "json",
                       succes : function(list){
                           var divRow = document.createElement("div");
                           divRow.classList.add("row");
                           var divCol = document.createElement("div");
                           var divCol1 = document.createElement("div");
                           divCol.classList.add("columv2");
                           divCol1.classList.add("columv2");

                           list.foreach(function(obj, index){
                               var titles = document.createElement("h4");
                               titles.classList.add("title");
                               titles.innerHTML = obj.Title;
                               var resume = document.createElement("p");
                               resume.innerHTML= obj.Resume;
                               var pic = document.createElement("img");
                               const blobUrl = URL.createObjectURL(obj.Picture);
                               pic.src = blobUrl;
                               var link = document.createElement("a");
                               link.href = "single_projekt.php?ID="+ obj.id;
                               link.innerHTML = "det hele";
                               link.target = "_blank";
                               divCol.appendChild(img);
                               divCol1.appendChild(titles);
                               divCol1.appendChild(resume);
                               divCol1.appendChild(link);
                               divRow.appendChild(divCol);
                               divRow.appendChild(divCol1);
                               $("#first_projekt").appendChild(divRow);
                           });
                       }
                   });
              )});
           </script>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="colum">
                <p><b>Made by</b>: Claus N. Dimon</p>
            </div>
            <div class="colum">
                <p><b>Contact Phonenr</b>: <a href="tel:+4581754402">+4581754402</a></p>
            </div>
            <div class="colum">
                <p><b>Contact email</b>: <a href="mailto:Claus.n.dimon@live.dk">Claus.n.dimon@live.dk</a></p>
            </div>
        </div>
        <div class="row">
            <div class="colum">
                <p>&copy;<?php
                    $fromYear = 2019; 
                    $thisYear = (int)date('Y'); 
                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Portfolio</p>
            </div>
        </div>
    </footer>
</body>
</html>