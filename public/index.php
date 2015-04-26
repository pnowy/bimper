<?php

// include and register Twig auto-loader
require_once '..\Twig-1.18.1\lib\Twig\Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('.');

$twig = new Twig_Environment($loader);

// in order to enable the template caching replace twig by the below configuration
//$twig = new Twig_Environment($loader, array(
//    'cache' => '..\cache',
//));


$template = $twig->loadTemplate('base.html');
echo $template->render(array('the' => 'variables', 'go' => 'here'));

?>
