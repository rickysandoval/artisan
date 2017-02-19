<?php
// Use correct path to Twig's autoloader file
require_once './vendor/autoload.php';
// Twig's autoloader will take care of loading required classes
ini_set('display_errors', 1);

class TemplateRenderer
{
  public $loader; // Instance of Twig_Loader_Filesystem
  public $environment; // Instance of Twig_Environment

  public function __construct($envOptions = array(), $templateDirs = array())
  {
    // Merge default options
    // You may want to change these settings
    $envOptions += array(
      'debug' => true,
      'charset' => 'utf-8',
      'cache' => './cache', // Store cached files under cache directory
      'strict_variables' => true,
    );
    $templateDirs = array_merge(
      array('./templates'), // Base directory with all templates
      $templateDirs
    );
    $this->loader = new Twig_Loader_Filesystem($templateDirs);
    $this->environment = new Twig_Environment($this->loader, $envOptions);

    $urlAsset = new Twig_Filter('url_asset', function ($string) { 
      $non_local_assets = array("custom.css", "settings.css", "logo.png", "hamburger.png");
      $cache_control = '1';
      if (isset($_GET['ckcachecontrol'])) {
          $cache_control $_GET['ckcachecontrol'];
      }
      if (in_array($string, $non_local_assets)) {
        return 'http://assets.shoplightspeed.com/artisan-rug-gallery-608660/'.$string.'?'.$cache_control;
      } else {
        return '/assets/' . $string;
      }
    });
    $urlCore = new Twig_Filter('url_core', function ($string) { return 'http://static.shoplightspeed.com/assets/' . $string; });
    $url = new Twig_Filter('url', function ($string) { return $string; });
    $t = new Twig_Filter('t', function ($string) { return $string; });
    $money = new Twig_Filter('money', function ($number) { money_format('', $number); });
    $urlImage = new Twig_Filter('url_image', function ($id, $modifier, $string) { 
      $builtUrl = "http://static.shoplightspeed.com/shops/608660/files/  " . $id;
      if ($modifier) {
        $builtUrl .= '/'.$modifier.'/';
      }
      $string = preg_replace('/[^\da-z ]/i', '', $string);
      $string = preg_replace('/\s+/', '-', $string);
      $builtUrl .= '/'.$string.'.jpg';
    });

    $filters = array(
      1 => $urlAsset,
      2 => $urlCore,
      3 => $url,
      4 => $t,
      5 => $money,
      6 => $urlImage
    );

    foreach ($filters as $filter) {
      $this->environment->addFilter($filter);
    }

    $active = new Twig_Test('active', function ($string) { 
      return strpos($_SERVER['REQUEST_URI'], $string);
    });

    $tests = array(
      1 => $active
    );

    foreach ($tests as $test) {
      $this->environment->addTest($test);
    }

  }

  public function render($templateFile, array $variables)
  {
    return $this->environment->render($templateFile, $variables);
  }
}
