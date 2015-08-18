<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head lang="en">


    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/styles.css" type="text/css" />
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Breadcrumb -->
<jdoc:include type="modules" name="breadcrumb" />
<!-- Menu -->
<jdoc:include type="modules" name="menu" />



<!-- Carousel -->
<jdoc:include type="modules" name="carousel" />
<div class="container-fluid" id="container-slideshow">
    <div class="row row-centered">

        <div id="carousel-example-generic" class="carousel slide col-centered" data-ride="carousel">

        </div>



    </div>
</div>
<div class="container-fluid" id="container-main">
    <div class="row">
        <!-- LINKER CONTAINER -->
        <div class="col-md-2 col-md-offset-half container-red hidden-sm hidden-xs" id="container-left">
            <jdoc:include type="modules" name="left" />
            <!--<h3>Jobbörse</h3>
            <p style="text-align: center"><img src="./images/finger.jpg" /></p>
            <p style="text-align: center">DER FCWOLFWIL SUCHT DICH</p>
            <hr />
            <h3>Social Media</h3>
            <ul>
                <li>Gästebuch</li>
                <li>Forum</li>
            </ul>
            <hr />
            <h3>Sponsoren</h3>-->

        </div>

        <div class="col-md-half">&nbsp;</div>

        <!-- CONTENT -->
        <div class="col-md-5 container-red" id="content">
            <jdoc:include type="component" />
            <!-- <h1>Der FC Wolfwil mit neuem Logo</h1>
            <p>Erstellt: Mittwoch, 20. Mai 2015 09:05</p>
            <p>Der FC Wolfwil präsentiert stolz sein neues Logo. Dabei wird die Kontur des Wolfes optimiert und die Schriftart ein wenig moderner gestaltet. Es steht hier zum Download bereit und darf frei verwendet werden.</p>

            <ul>
                <li>Hier geht's zur PDF-Datei</li>
            </ul>

            <hr />
            <h1>Fischessen 2015</h1>
            <p>Erstellt: Montag, 18. Mai 2015 08:47</p>
            <p>Allen Fischliebhabern, die uns am Wochenende besucht haben, danken wir herzlich. Leider hatten wir am Freitag nicht mit einem solchen "Ansturm" gerechnet. Bei all jenen, die ohne Fisch nach Hause mussten, möchten wir uns entschuldigen. Wir werden uns bemühen, dieses Problem im kommenden Jahr zu lösen.</p>

            <h1>Der FC Wolfwil mit neuem Logo</h1>
            <p>Erstellt: Mittwoch, 20. Mai 2015 09:05</p>
            <p>Der FC Wolfwil präsentiert stolz sein neues Logo. Dabei wird die Kontur des Wolfes optimiert und die Schriftart ein wenig moderner gestaltet. Es steht hier zum Download bereit und darf frei verwendet werden.</p>

            <ul>
                <li>Hier geht's zur PDF-Datei</li>
            </ul>

            <hr />
            <h1>Fischessen 2015</h1>
            <p>Erstellt: Montag, 18. Mai 2015 08:47</p>
            <p>Allen Fischliebhabern, die uns am Wochenende besucht haben, danken wir herzlich. Leider hatten wir am Freitag nicht mit einem solchen "Ansturm" gerechnet. Bei all jenen, die ohne Fisch nach Hause mussten, möchten wir uns entschuldigen. Wir werden uns bemühen, dieses Problem im kommenden Jahr zu lösen.</p>
            -->
        </div>

        <?php if ($this->countModules('right')): ?>
        <!-- RECHTER CONTAINER -->
        <div class="col-md-2 col-md-offset-half container-red hidden-sm hidden-xs" id="container-right">

            <jdoc:include type="modules" name="right" />
            <!--<h3>Ranglisten</h3>
            <p>
                Wir sind Nummer 1!
            </p>
            <hr />
            <h3>Aktuelle Spiele</h3>

            <b>1. MANNSCHAFT</b><br /><br />

            <u>Letztes Spiel:</u><br />
            FC Hägendorf - FCW 2:3<br /><br />

            <b>1. MANNSCHAFT</b><br /><br />

            <u>Letztes Spiel:</u><br />
            FC Hägendorf - FCW 2:3<br /><br />

            <b>1. MANNSCHAFT</b><br /><br />

            <u>Letztes Spiel:</u><br />
            FC Hägendorf - FCW 2:3<br /><br />

            <b>1. MANNSCHAFT</b><br /><br />

            <u>Letztes Spiel:</u><br />
            FC Hägendorf - FCW 2:3<br /><br />

            <b>1. MANNSCHAFT</b><br /><br />

            <u>Letztes Spiel:</u><br />
            FC Hägendorf - FCW 2:3<br /><br />-->
        </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>