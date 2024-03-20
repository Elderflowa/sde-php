<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultater</title>
    </head>
    <body>
       <h2 id="overskrift">Resultater</h2>
       <?php
            include "template.php";

            if (isset($_POST["submit"])){
                $score = 0;
                if (isset($_POST["q1"])) {
                    $q1 = $_POST["q1"];

                    if ($q1 == $sp1r) {
                    $score++;}}
                    
                if (isset($_POST["q2"])) {
                    $q2 = $_POST["q2"];

                    if ($q2 == $sp2r) {
                    $score++;}}
                    
                if (isset($_POST["q3"])) {
                    $q3 = $_POST["q3"];

                    if ($q3 == $sp3r) {
                    $score++;}}
                    
                $response = "<div id='responseresultat'><h2 id='text'>"."Du svarede ".$score." spørgsmål ud af ".$mængdeSpørgsmål." rigtige"."</h2></div>";   
                echo $response;   
            }
        ?>
       <center>
                <form action="simpleQuiz.php" method="POST">    
                    <div id="tilbageknap"><input class="button" type="submit" value="Prøv igen" name="tilbage"></div>
               </form>
        </center>
    </body>
</html>
