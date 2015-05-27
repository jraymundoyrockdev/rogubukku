<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <!--Global Styles -->
    <?php echo html::style('min?g=globalStyles', ['media' => 'screen']); ?>
    <!--Local Styles-->
    <?php foreach ($loc_styles as $href => $media): echo HTML::style($href, array('media' => $media),
            'RMV/') . "\n"; endforeach; ?>
</head>

<body>

<div id="wrapper">

    <?php echo $nav; ?>

    <div id="page-wrapper">
        <?php echo $body; ?>
    </div>

</div>

<!--Global Scripts-->
<?php echo HTML::script('min?g=globalScripts');?>

<!--Local Scripts-->
<?php foreach ($loc_scripts as $locjs): echo HTML::script($locjs, null, 'RMV/') . "\n"; endforeach; ?>

</body>

</html>