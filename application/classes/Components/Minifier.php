<?php

class Components_Minifier
{

    public static function factory()
    {
        return new Components_Minifier();
    }

    public function minify($source)
    {
        $globalResource = Kohana::$config->load('minify');

        $loadResource = Kohana::$config->load('minify_groups')->get('js');

        $globalScripts = $loadResource['global'];
        $modular = $loadResource[$source];

        $globalResource['groupsConfig']['scripts'] = array_merge($globalScripts, $modular);

        return true;
    }
}