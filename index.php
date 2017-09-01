<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Lebenslauf</title>

    <link type="text/css" rel="stylesheet" href="styles/newstyles.css">
</head>
<body>
<?php include 'components/navi.php'; ?>
<?php include 'components/Anschrift.php'; ?>
<hr>

<div id="pic" class="primaryblock">
    <img src="http://via.placeholder.com/140x250" width="140" height="250">
    <div class="secondaryblock">
        <div id="block">
            <br/>Geburtsdatum:
            <br/>Geburtsort:
            <br/>Familienstand:
            <br/>Staatsangehörigkeit:
        </div>
    </div>
    <div id="block">
        <br/><b>Persönliche Daten</b>
        <br/>28.02.1996
        <br/>Prien am Chiemsee
        <br/>ledig
        <br/>Deutsch
    </div>
</div>
<hr>
<div id="notice">
    <b>Beruflicher Werdegang</b>
</div>
<hr>
<div class="container">
    <div >
        <div class="secondaryblockflex">

            <div class="entry">
                <div class="col-left"></div>
                <div ><b>Schulisches / Jobs</b></div>
            </div>
            <div class="entry">
                <div class="col-left">09/2002 - 07/2006</div>
                <div >Grundschule Halfing</div>
            </div>
            <!--
            <br/>09/2002 - 07/2006
                 <br/>09/2006 - 07/2013
                 <br/>09/2013 - 07/2015
                 <br/>08/2014 - 08/2015
                 <br/>10/2015 - 03/2016
                 <br/>07/2016 - 12/2016
                 <br/>10/2016 - 07/2017
                 <br/>07/2017 -

                     <div id="block">
                     <b>Schulisches / Jobs</b>
                     <br/>Grundschule Halfing
                     <br/>Luitpold Gymnasium Wasserburg am Inn
                     <br/>FOS Wasserburg am Inn
                     <br/>Minijob FRISTO-Getränkemarkt Bad Endorf
                     <br/>Hochschule Rosenheim - Ausbildungsrichtung Mechatronik
                     <br/>Geringfügige Beschäftigung BBW Lasertechnik Prutting
                     <br/>Hochschule Rosenheim - Ausbildungsrichtung Informatik
                     <br/>Teilzeitangestellter bei UPS
                      </div>
                      -->
        </div>


        <div id="Praktikum" class="secondaryblockflex">
            <div class="entry">
                <div class="col-left"></div>
                <div ><b>Praktikas</b></div>
            </div>
            <div class="entry">
                <div class="col-left">07/2011</div>
                <div >Metall- und Stahlbau Schürrle, Evenhausen</div>
            </div>

        </div>
    </div>
    <!--
        <div id="Praktikum" class="secondaryblock">
            <br/>07/2011
            <br/>09/2013
            <br/>02/2014

            <div id="block2">
                <b>Praktikas</b>
                <br/>Metall- und Stahlbau Schürrle, Evenhausen
                <br/>Zehnwöchige fachpraktische Ausbildung Ambros Huber, Halfing
                <br/>Neunwöchige fachpraktische Ausbildung Informationstechnik Lindner, Bad Endorf
            </div>
        </div>
    -->
    <div id="weiteres" >
        <?php include 'components/Kenntnisse.php'; ?>
        <?php include 'components/Hobbys.php'; ?>
    </div>

</div>


</body>
</html>