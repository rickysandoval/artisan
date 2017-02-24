<?php
// Use correct path to Twig's autoloader file
require_once dirname(__FILE__).'/vendor/autoload.php';
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
      'cache' => dirname(__FILE__).'/cache', // Store cached files under cache directory
      'strict_variables' => true,
    );
    $templateDirs = array_merge(
      array(dirname(__FILE__).'/templates'), // Base directory with all templates
      $templateDirs
    );
    $this->loader = new Twig_Loader_Filesystem($templateDirs);
    $this->environment = new Twig_Environment($this->loader, $envOptions);

    $urlAsset = new Twig_Filter('url_asset', function ($string) { 
      $non_local_assets = array("custom.css", "settings.css", "logo.png", "hamburger.png", 'lightbox.js');
      $cache_control = '1';
      if (isset($_GET['ckcachecontrol'])) {
          $cache_control = $_GET['ckcachecontrol'];
      }
      if (in_array($string, $non_local_assets)) {
        return 'http://assets.shoplightspeed.com/artisan-rug-gallery-608660/'.$string.'?'.$cache_control;
      } else {
        return '/assets/' . $string;
      }
    });
    $urlCore = new Twig_Filter('url_core', function ($string) { return 'http://static.shoplightspeed.com/assets/' . $string; });
    $url = new Twig_Filter('url', function ($string) { if ($string) {return $string;} else { return '/'; } });
    $t = new Twig_Filter('t', function ($string) { return $string; });
    $money = new Twig_Filter('money', function ($number) { return money_format('$%i', $number); });
    $percentage = new Twig_Filter('percentage', function ($number) { return $number.'%'; });
    $urlImage = new Twig_Filter('url_image', function ($id, $modifier, $string) { 
      $builtUrl = "http://static.shoplightspeed.com/shops/608660/files/00" . $id;
      if ($modifier) {
        $builtUrl .= '/'.preg_replace('/[p]/i', '', $modifier);
      }
      $string = preg_replace('/[^\da-z ]/i', '', $string);
      $string = preg_replace('/\s+/', '-', $string);
      return $builtUrl .= '/'.strtolower($string).'.jpg';
    });
    $paginate = new Twig_Filter('paginate', function ($collection) { 
      return array(
        'previous' => array(
          'url' => 'category'
        ),
        'next' => array(
          'url' => 'category'
        ),
        'parts' => array(
          0 => array(
            'url' => 'category',
            'title' => '1',
            'active' => true
          ),
          1 => array(
            'url' => 'category',
            'title' => '2',
            'active' => false
          )
        )
      );
    });

    $filters = array(
      1 => $urlAsset,
      2 => $urlCore,
      3 => $url,
      4 => $t,
      5 => $money,
      6 => $urlImage,
      7 => new Twig_Filter('html_product_configure', function () {}),
      8 => $percentage,
      9 => $paginate
    );

    foreach ($filters as $filter) {
      $this->environment->addFilter($filter);
    }

    $active = new Twig_Test('active', function ($string) {
      if (is_array($string)) {
        return strpos($_SERVER['REQUEST_URI'], $string['url']);
      } else {
        return strpos($_SERVER['REQUEST_URI'], $string);
      }
    });

    $divisible = new Twig_Test('divisibleby', function($number, $by) {
      return $number % $by == 0;
    });

    $tests = array(
      0 => $active,
      1 => $divisible
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
