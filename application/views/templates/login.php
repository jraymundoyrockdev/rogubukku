<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <!--Global Styles -->
        <?php echo html::style('min?g=global-styles', ['media' => 'screen']); ?>
        <!--Module Styles-->
        <?php
        if (!empty($resourceSource[$resourceModule . '-styles'])) {
            echo HTML::style('min?g=' . $resourceModule . '-styles', ['media' => 'screen']);
        }; ?>

    </head>

    <body>

        <?php echo $body; ?>

        <?php //echo $footer; ?>

        <!--Global Scripts-->
        <?php echo HTML::script('min?g=global-scripts');?>

        <!--Module Scripts-->
        <?php if (!empty($resourceSource[$resourceModule . '-scripts'])) {
            echo HTML::script('min?g=' . $resourceModule . '-scripts');
        } ?>
    </body>
</html>