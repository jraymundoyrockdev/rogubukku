<?php defined('SYSPATH') OR die('No direct script access.');

define('MINIFY_MIN_DIR', realpath('modules'.DIRECTORY_SEPARATOR.'minify'.DIRECTORY_SEPARATOR.'min').DIRECTORY_SEPARATOR);
define('MINIFY_LIB_PATH', MINIFY_MIN_DIR.'lib');


ini_set('zlib.output_compression', '0');
ini_set('pcre.backtrack_limit', 20000000);
ini_set('pcre.recursion_limit', 20000000);

require_once MINIFY_MIN_DIR.'utils.php';

return array(
    'uploaderHoursBehind' => 0,
    'serveOptions' => array(
        'maxAge' => 604800,
        'bubbleCssImports' => false,
        'minApp' => array(
            'groupsOnly' => false,
            'allowDirs' => array(),
        ),
        'minifierOptions' => array(
            'text/css' => array(),
        ),
        'preserveComments' => true,
        'rewriteCssUris' => true,
        'currentDir' => false,
    ),
    'quiet' => false,
    'symlinks' => array(
        // uncoment this line if you are working on a subdirectory
        // '/' . substr(Kohana::$base_url, 0, -1) => (Kohana::$base_url !== '/' ? DOCROOT : '/'),
    ),
    'errorLogger' => true,
    'rewriteCssUris' => false,
    'allowDebugFlag' => false,
    'cachePath' => Kohana::$cache_dir . DIRECTORY_SEPARATOR . 'minify',
    'documentRoot' => DOCROOT,
    'cacheFileLocking' => false,
    'groupsConfig' => array(
        'globalScripts'  => array('//media/js/jquery/jquery-1.10.2.min.js',
            '//media/js/bootstrap/bootstrap.js',
            '//media/js/bootstrap_validator/dist/formValidation.js',
            '//media/js/bootstrap_validator/dist/bootstrap.js'),
        'globalStyles' => array(
            '//media/css/bootstrap/bootstrap.min.css',
            '//media/css/fonts/css/font-awesome.min.css',
            '//media/css/main/main_style.css',
            '//media/css/shieldui/shieldui-all.min.css',
            '//media/css/shieldui/all.min.css',
            '//media/css/hackmain.css'
        ),
    ),
);
