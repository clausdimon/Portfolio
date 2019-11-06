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
    <div id="projekter" class="row">
        <script>
               $(window).ready(function(e){
                   $.ajax({
                       url : "all_projekts.php",
                       type : "post",
                       datatype : "json",
                       succes : function(list){
                           var divCol = document.createElement("div");
                           divCol.classList.add("columv2");
                           var divcolpic = document.createElement("div");
                           divcolpic.classLists.add("columv2");
                           var divColTxt =document.createElement("div");
                           divColTxt.classLists.add("columv2");

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
                               divcolpic.appendChild(img);
                               divColTxt.appendChild(titles);
                               divColTxt.appendChild(resume);
                               divColTxt.appendChild(link);
                               divCol.appendChild(divcolpic);
                               divCol.appendChild(divColTxt);
                               $("#projekter").appendChild(divCol);
                           });
                       }
                   });
              });
        </script>
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
</body>
</html>