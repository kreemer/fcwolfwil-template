<!DOCTYPE html>
<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head lang="en">


    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/styles.css" type="text/css" />

    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-2.1.4.min.js"></script>-->


    <jdoc:include type="head" />
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("a.navbar-brand").addClass("hidden-sm");
            jQuery("a.navbar-brand").addClass("hidden-xs");

        });

    </script>

    <!-- <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/script.js"></script>-->
    <!-- <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-hacked.js"></script>-->
    <script src="/fcw/media/jui/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">






</head>
<body>

<!-- Breadcrumb -->
<jdoc:include type="modules" name="breadcrumb" />
<!-- Menu -->
<jdoc:include type="modules" name="menu" />



<!-- Carousel -->
<div class="container-fluid hidden-sm hidden-xs">
    <div class="col-md-10">
        <jdoc:include type="modules" name="carousel" />
    </div>
</div>

<div class="container-fluid" id="container-main">
    <div class="row">
        <!-- LINKER CONTAINER -->
        <div class="col-md-2 col-md-offset-half container-red hidden-sm hidden-xs" id="container-left">
            <jdoc:include type="modules" name="user1" style="well" />
            <div class="seperator">&nbsp;</div>
            <jdoc:include type="modules" name="sidemenu" />
            <div class="seperator">&nbsp;</div>
            <jdoc:include type="modules" name="left" style="well" />
        </div>

        <div class="col-md-half">&nbsp;</div>

        <!-- CONTENT -->
        <div class="col-md-5 container-red container-fluid" id="content">

                <jdoc:include type="component" />

        </div>

        <?php if ($this->countModules('right')): ?>
        <!-- RECHTER CONTAINER -->
        <div class="col-md-2 col-md-offset-half container-red hidden-sm hidden-xs" id="container-right">

            <jdoc:include type="modules" name="right" style="well" />
        </div>
        <?php endif; ?>
    </div>
</div>



</body>
</html>
