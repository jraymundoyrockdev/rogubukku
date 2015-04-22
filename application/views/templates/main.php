<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <!--Global Styles -->
        <?php foreach ($glob_styles as $href=>$media): echo HTML::style($href, array('media' => $media), 'RMV/')."\n"; endforeach; ?>

        <!--Local Styles-->
        <?php foreach ($loc_styles as $href=>$media): echo HTML::style($href, array('media' => $media), 'RMV/')."\n"; endforeach; ?>

    </head>

    <body>

        <?php echo $nav; ?>

        <?php echo $header; ?>

        <?php echo $body; ?>

        <?php echo $footer; ?>

        <!--Global Scripts-->
        <?php foreach ($glob_scripts as $globjs): echo HTML::script($globjs, NULL, 'RMV/')."\n"; endforeach; ?>

        <!--Local Scripts-->
        <?php foreach ($loc_scripts as $locjs): echo HTML::script($locjs, NULL, 'RMV/')."\n"; endforeach; ?>
    </body>    
</html>