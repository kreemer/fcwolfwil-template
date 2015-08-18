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
        </div>

        <div class="col-md-half">&nbsp;</div>

        <!-- CONTENT -->
        <div class="col-md-5 container-red" id="content">
            <jdoc:include type="component" />
        </div>

        <?php if ($this->countModules('right')): ?>
        <!-- RECHTER CONTAINER -->
        <div class="col-md-2 col-md-offset-half container-red hidden-sm hidden-xs" id="container-right">

            <jdoc:include type="modules" name="right" />
        </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>