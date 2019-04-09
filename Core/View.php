<?php

namespace Core;
class View 
{
    /**To render a viw file
     * 
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);
        $file = "../App/Views/$view";//Relative to the Core directory
        if(is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;
        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__).'/App/Views');
            //usar acima quando estiver no servidor e realmente existir a raiz do projeto..
            //$loader = new \Twig\Loader\FilesystemLoader('../App/Views');
            $twig = new \Twig\Environment($loader);
        }
        echo $twig->render($template, $args);
    }
}