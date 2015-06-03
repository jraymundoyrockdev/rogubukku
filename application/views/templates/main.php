<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'/>
    <!--Global Styles -->
    <?php echo html::style('min?g=global-styles', ['media' => 'screen']); ?>
    <!--Module Styles-->
    <?php
    if (!empty($resourceSource[$resourceModule . '-styles'])) {
        echo HTML::style('min?g=' . $resourceModule . '-styles', ['media' => 'screen']);
    }; ?>
</head>

<body>

<div id="wrapper">

    <?php echo $nav; ?>

    <div id="page-wrapper">
        <?php echo $body; ?>
    </div>

</div>

<!--Global Scripts-->
<?php echo HTML::script('min?g=global-scripts'); ?>
<!--Module Scripts-->
<?php if (!empty($resourceSource[$resourceModule . '-scripts'])) {
    echo HTML::script('min?g=' . $resourceModule . '-scripts');
} ?>

</body>

</html>