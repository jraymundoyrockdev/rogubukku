<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Minify resources (third-party-content)
 *
 */
abstract class Controller_Minify_Index extends Controller_Base
{

    /**
     * Default method to call minify
     *
     */
    public function action_index()
    {
        extract(Kohana::$config->load('minify')->as_array(), EXTR_SKIP);

        if ($this->request->param('group')) {
            $_GET['g'] = $this->request->param('group');
        }

        Minify::$uploaderHoursBehind = $uploaderHoursBehind;
        Minify::setCache(isset($cachePath) ? $cachePath : '', $cacheFileLocking);

        if ($documentRoot) {
            $_SERVER['DOCUMENT_ROOT'] = $documentRoot;
            Minify::$isDocRootSet = true;
        }

        $serveOptions['minifierOptions']['text/css']['symlinks'] = $symlinks;
        $serveOptions['minApp']['allowDirs'] += array_values($symlinks);

        if ($allowDebugFlag) {
            $serveOptions['debug'] = Minify_DebugDetector::shouldDebugRequest($_COOKIE, $_GET, $_SERVER['REQUEST_URI']);
        }

        if ($errorLogger) {
            if (true === $errorLogger) {
                $errorLogger = FirePHP::getInstance(true);
            }
            Minify_Logger::setLogger($errorLogger);
        }

        // Check for URI versioning
        if (preg_match('/&\\d/', $_SERVER['QUERY_STRING'])) {
            $serveOptions['maxAge'] = 31536000;
        }

        if (isset($_GET['g'])) {
            // Well need groups config
            $serveOptions['minApp']['groups'] = $groupsConfig;
        }

        if (isset($_GET['f']) OR isset($_GET['g'])) {
            set_time_limit(0);

            // serve!
            $serveController = new Minify_Controller_MinApp();
            $response = Minify::serve($serveController, $serveOptions);

            exit;
        }
    }

} // End Controller_Minify
