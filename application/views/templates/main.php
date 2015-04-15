<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <!--Global Styles -->
        <?php foreach ($glob_styles as $href=>$media): echo HTML::style($href, array('media' => $media), 'RMV/')."\n"; endforeach; ?>

        <!--Local Styles-->
        <?php foreach ($loc_styles as $href=>$media): echo HTML::style($href, array('media' => $media), 'RMV/')."\n"; endforeach; ?>

    </head>

    <body>

        <?php echo $layout; ?>

        <!--Global Scripts-->
        <?php foreach ($glob_scripts as $globjs): echo HTML::script($globjs, NULL, 'RMV/')."\n"; endforeach; ?>

        <!--Local Scripts-->
        <?php foreach ($loc_scripts as $locjs): echo HTML::script($locjs, NULL, 'RMV/')."\n"; endforeach; ?>
    </body>
</html>