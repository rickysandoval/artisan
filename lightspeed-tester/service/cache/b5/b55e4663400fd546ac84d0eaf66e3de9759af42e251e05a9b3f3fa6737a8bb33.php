<?php

/* index.twig */
class __TwigTemplate_5ffcba7ece0f4fa460e1967e1a41445506d476614dd0f9dab2bcb92171fc8df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 2, $this->getSourceContext()); })()), "language", array()), "html", null, true);
        echo "\">
  <head>
    ";
        // line 5
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 5, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 6, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 7, $this->getSourceContext()); })()), "keywords", array()), "html", null, true);
        echo "\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta property=\"fb:app_id\" content=\"966242223397117\"/>


    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("favicon.ico")), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    <link href='//fonts.googleapis.com/css?family=";
        // line 16
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 16, $this->getSourceContext()); })()), "body_google_webfonts", array())), "html", null, true);
        echo ":400,300,500,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=";
        // line 17
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 17, $this->getSourceContext()); })()), "headings_google_webfonts", array())), "html", null, true);
        echo ":400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("favicon.ico")), "html", null, true);
        echo "\" type=\"image/x-icon\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("bootstrap.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("style.css")), "html", null, true);
        echo "\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("settings.css")), "html", null, true);
        echo "\" />  
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("gui-2-0.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("gui-responsive-2-0.css")), "html", null, true);
        echo "\" />   
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("custom.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">

    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("jquery-1-9-1.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("jquery-ui-1-10-1.js")), "html", null, true);
        echo "\"></script>
   
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("global.js")), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("jcarousel.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("gui.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("gui-responsive-2-0.js")), "html", null, true);
        echo "\"></script>
        
    <!--[if lt IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("style-ie.css")), "html", null, true);
        echo "\" />
    <![endif]-->
  </head>
  <body>  
    <header class=\"desktop\">
      <div class=\"navigation clearfix\">
        <div class=\"align\">
          <ul class=\"burger\">
            <span></span>
            <span></span>
            <span></span>
          </ul>
          <div class=\"vertical logo\">
            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 50, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\">
              <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("logo.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 51, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" />
            </a>
          </div>
          <nav class=\"nonbounce vertical\">
            <div class=\"nav-contents\">
              <a class=\"header__sign-in\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
        echo "\">
               Sign in
              </a>
              
              <div class=\"header-cart__wrapper\">
                <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("cart")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Cart")), "html", null, true);
        echo "\" class=\"header-cart\">
                  <span class=\"header-cart__label\">Cart</span>
                  <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                  <span class=\"header-cart__count\">";
        // line 64
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 64, $this->getSourceContext()); })()), "cart", array()), "products", array())), "html", null, true);
        echo "</span>
                  <span class=\"header-cart__count--mobile\">( ";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 65, $this->getSourceContext()); })()), "cart", array()), "products", array())), "html", null, true);
        echo " - 
                    ";
        // line 66
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 66, $this->getSourceContext()); })()), "cart", array()), "products", array())) == 1)) {
            // line 67
            echo "                      item
                    ";
        } else {
            // line 69
            echo "                      items
                    ";
        }
        // line 71
        echo "                  )</span>
                </a>   
              </div> 

              <form action=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("search")), "html", null, true);
        echo "\" method=\"get\" id=\"formSearch\">
                <input type=\"text\" name=\"q\" autocomplete=\"off\"  value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 76, $this->getSourceContext()); })()), "search", array()), "html", null, true);
        echo "\"/>
                <span onclick=\"\$('#formSearch').submit();\" title=\"";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Search")), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-search\"></span>
              </form>   

              <ul>
                <li class=\"item ";
        // line 81
        if (call_user_func_array($this->env->getTest('active')->getCallable(), array("featured-rugs"))) {
            echo " active";
        }
        echo "\">
                  <a class=\"itemLink\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("featured-rugs")), "html", null, true);
        echo "\" title=\"Featured Rugs\">Featured</a>
                </li>
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 84, $this->getSourceContext()); })()), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 85
            echo "                <li class=\"item";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array())) {
                echo " sub";
            }
            if (call_user_func_array($this->env->getTest('active')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array())))) {
                echo " active";
            }
            echo "\">
                  <a class=\"itemLink\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
            echo "</a>
                  ";
            // line 87
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array())) {
                // line 88
                echo "                  <span class=\"glyphicon glyphicon-play\"></span>
                  <ul class=\"subnav\">
                    ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 91
                    echo "                    <li class=\"subitem\">
                      <a class=\"subitemLink\" href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    echo "</a>
                      ";
                    // line 93
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array())) {
                        // line 94
                        echo "                      <ul class=\"subnav\">
                        ";
                        // line 95
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 96
                            echo "                        <li class=\"subitem\">
                          <a class=\"subitemLink\" href=\"";
                            // line 97
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()))), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                            echo "</a>
                        </li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 100
                        echo "                      </ul>
                      ";
                    }
                    // line 102
                    echo "                    </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                  </ul>
                  ";
            }
            // line 106
            echo "                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                <li class=\"item ";
        if (call_user_func_array($this->env->getTest('active')->getCallable(), array("service"))) {
            echo " active";
        }
        echo "\">
                  <span class=\"itemLink\">More</span>
                  <ul class=\"subnav\">
                    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 111, $this->getSourceContext()); })()), "links", array()), "more", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 112
            echo "                    <li class=\"subitem\">
                      <a class=\"subitemLink\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "url", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
            echo "\">
                        ";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
            echo "
                      </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                  </ul>
                </li>
              </ul>
              <span class=\"glyphicon glyphicon-remove\"></span> 
              </div> 
          </nav>
        </div>
      </div>
    </header>
    
    <div class=\"wrapper\">
      <div class=\"container content\">
        ";
        // line 130
        $this->loadTemplate("snippets/messages.rain", "index.twig", 130)->display($context);
        // line 131
        echo "        ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 131, $this->getSourceContext()); })()), "index.twig", 131)->display($context);
        // line 132
        echo "      </div>
      
      <footer>
        <hr class=\"full-width\" />
        <div class=\"container\">
          <div class=\"social row\">
            ";
        // line 148
        echo "    ";
        if (((((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_facebook", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_twitter", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_google", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_instagram", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_pinterest", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_youtube", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_linkedin", array()))) {
            // line 149
            echo "            <div class=\"social-media col-xs-12 col-md-12 ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 149, $this->getSourceContext()); })()), "setting_newsletter", array())) {
                echo " col-sm-5 col-md-5 text-right";
            } else {
                echo " text-center";
            }
            echo "\">
              ";
            // line 150
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 150, $this->getSourceContext()); })()), "social_facebook", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 150, $this->getSourceContext()); })()), "social_facebook", array()), "html", null, true);
                echo "\" class=\"fa fa-facebook\" target=\"_blank\" title=\"Facebook\"></a>";
            }
            // line 151
            echo "              
              ";
            // line 153
            echo "              <a target=\"_blank\" href=\"https://www.houzz.com/pro/artisanrugs/artisan-rug-gallery\" title=\"Houzz\"><i class=\"fa fa-houzz\"></i></a>
              ";
            // line 154
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 154, $this->getSourceContext()); })()), "social_pinterest", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 154, $this->getSourceContext()); })()), "social_pinterest", array()), "html", null, true);
                echo "\" class=\"fa fa-pinterest\" target=\"_blank\" title=\"Pinterest\"></a>";
            }
            // line 155
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 155, $this->getSourceContext()); })()), "social_twitter", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 155, $this->getSourceContext()); })()), "social_twitter", array()), "html", null, true);
                echo "\" class=\"fa fa-twitter\" target=\"_blank\" title=\"Twitter\"></a>";
            }
            // line 156
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 156, $this->getSourceContext()); })()), "social_instagram", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 156, $this->getSourceContext()); })()), "social_instagram", array()), "html", null, true);
                echo "\" class=\"fa fa-instagram\" target=\"_blank\" title=\"Instagram ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 156, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "\"></a>";
            }
            echo "              
            </div>
            ";
        }
        // line 159
        echo "          </div>
          <hr class=\"full-width\" />
          <div class=\"links row\">
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <label class=\"collapse\" for=\"_1\">
                  <strong>";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Customer service")), "html", null, true);
        echo "</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_1\" type=\"checkbox\">
                    <div class=\"list\">
  
                  <ul class=\"no-underline no-list-style\">
                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 170, $this->getSourceContext()); })()), "links", array()), "service", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 171
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "url", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "new_window", array())) {
                echo " target=\"_blank\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
            echo "</a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                    </ul>
                  </div> 
             
            </div>     
       
            
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
          <label class=\"collapse\" for=\"_2\">
                  <strong>";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Products")), "html", null, true);
        echo "</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_2\" type=\"checkbox\">
                    <div class=\"list\">
              <ul>
                <li><a href=\"";
        // line 187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("collection/?sort=newest")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("New products")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("New products")), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 188
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("collection/offers")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Offers")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Offers")), "html", null, true);
        echo "</a></li>
                ";
        // line 190
        echo "                ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 190, $this->getSourceContext()); })()), "tags", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("tags")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Tags")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Tags")), "html", null, true);
            echo "</a></li>";
        }
        // line 191
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("index.rss")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("RSS feed")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("RSS feed")), "html", null, true);
        echo "</a></li>
              </ul>
            </div>
            </div>
            
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
              <label class=\"collapse\" for=\"_3\">
                  <strong>
                ";
        // line 199
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 199, $this->getSourceContext()); })()), "account", array())) {
            // line 200
            echo "                ";
            echo call_user_func_array($this->env->getFilter('t')->getCallable(), array("Welcome, \$1!", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 200, $this->getSourceContext()); })()), "account", array()), "firstname", array())));
            echo "              
                ";
        } else {
            // line 202
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
            echo "
                ";
        }
        // line 204
        echo "              </strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_3\" type=\"checkbox\">
                    <div class=\"list\">
            
           
              <ul>
                ";
        // line 211
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 211, $this->getSourceContext()); })()), "account", array())) {
            // line 212
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
            echo "</a></li>
                ";
        } else {
            // line 214
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Register")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Register")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 216
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/orders")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My orders")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My orders")), "html", null, true);
        echo "</a></li>
                ";
        // line 217
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 217, $this->getSourceContext()); })()), "settings", array()), "account", array()), "tickets", array())) {
            // line 218
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/tickets")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My tickets")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My tickets")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 220
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/wishlist")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My wishlist")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My wishlist")), "html", null, true);
        echo "</a></li>
                ";
        // line 221
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 221, $this->getSourceContext()); })()), "account", array())) {
            // line 222
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/logout")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Logout")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Logout")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 224
        echo "              </ul>
            </div>
            </div>
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                 <label class=\"collapse\" for=\"_4\">
                  <strong>";
        // line 229
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 229, $this->getSourceContext()); })()), "contact_name", array())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 229, $this->getSourceContext()); })()), "contact_name", array());
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Company info")), "html", null, true);
            echo " ";
        }
        echo "</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_4\" type=\"checkbox\">
                    <div class=\"list\">
              
              
              
              ";
        // line 236
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 236, $this->getSourceContext()); })()), "contact_description", array())) {
            echo "<span class=\"contact-description\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 236, $this->getSourceContext()); })()), "contact_description", array());
            echo "</span>";
        }
        // line 237
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 237, $this->getSourceContext()); })()), "contact_phone", array())) {
            // line 238
            echo "              <div class=\"contact\">
                <span class=\"glyphicon glyphicon-earphone\"></span>
                ";
            // line 240
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 240, $this->getSourceContext()); })()), "contact_phone", array());
            echo "
              </div>
              ";
        }
        // line 243
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 243, $this->getSourceContext()); })()), "contact_email", array())) {
            // line 244
            echo "              <div class=\"contact\">
                <span class=\"glyphicon glyphicon-envelope\"></span>
                <a href=\"mailto:";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 246, $this->getSourceContext()); })()), "contact_email", array()), "html", null, true);
            echo "\" title=\"Email\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 246, $this->getSourceContext()); })()), "contact_email", array());
            echo "</a>
              </div>
              ";
        }
        // line 249
        echo "              </div>
              
              ";
        // line 251
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 251, $this->getSourceContext()); })()), "setting_kiyoh", array())) {
            echo "<iframe scrolling=\"no\" src=\"https://www.kiyoh.nl/widget.php?company=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 251, $this->getSourceContext()); })()), "setting_kiyoh", array()), "html", null, true);
            echo "\" width=\"210\" height=\"128\" border=\"1\" frameborder=\"0\" style=\"margin-top:20px;\"></iframe>";
        }
        // line 252
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 252, $this->getSourceContext()); })()), "setting_feedbackcompany", array())) {
            // line 253
            echo "              <iframe scrolling=\"no\" frameborder=\"0\" height=\"150\" width=\"200\" style=\"display:none;margin-top:20px\" id=\"tfcwidget\" src=\"https://beoordelingen.feedbackcompany.nl/widget/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 253, $this->getSourceContext()); })()), "setting_feedbackcompany", array()), "html", null, true);
            echo ".html\"></iframe>
<img src=\"https://beoordelingen.feedbackcompany.nl/samenvoordeel/img/spacer.gif\" style=\"display:none;\" onload=\"document.getElementById('tfcwidget').style.display='block';\">
              ";
        }
        // line 256
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 256, $this->getSourceContext()); })()), "hallmarks", array())) {
            // line 257
            echo "              <div class=\"hallmarks\">
                ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 258, $this->getSourceContext()); })()), "hallmarks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["hallmark"]) {
                // line 259
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "url", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                echo "\" ";
                if ( !(isset($context["new_window"]) || array_key_exists("new_window", $context) ? $context["new_window"] : (function () { throw new Twig_Error_Runtime('Variable "new_window" does not exist.', 259, $this->getSourceContext()); })())) {
                    echo "target=\"_blank\"";
                }
                echo ">
                  ";
                // line 260
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "image", array())) {
                    // line 261
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "image", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                    echo "\" />
                  ";
                } else {
                    // line 263
                    echo "                  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                    echo "
                  ";
                }
                // line 265
                echo "                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hallmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo " 
              </div>
              ";
        }
        // line 269
        echo "            </div>
          </div>
          <hr class=\"full-width\" />
        </div>
        <div class=\"footer-bottom\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"copyright\">
                ©";
        // line 277
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Copyright")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 277, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " 
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    ";
        // line 285
        echo "  </body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 285,  743 => 277,  733 => 269,  728 => 266,  721 => 265,  715 => 263,  705 => 261,  703 => 260,  692 => 259,  688 => 258,  685 => 257,  682 => 256,  675 => 253,  672 => 252,  666 => 251,  662 => 249,  654 => 246,  650 => 244,  647 => 243,  641 => 240,  637 => 238,  634 => 237,  628 => 236,  611 => 229,  604 => 224,  594 => 222,  592 => 221,  583 => 220,  573 => 218,  571 => 217,  562 => 216,  552 => 214,  542 => 212,  540 => 211,  531 => 204,  525 => 202,  519 => 200,  517 => 199,  501 => 191,  490 => 190,  482 => 188,  474 => 187,  466 => 182,  456 => 174,  438 => 171,  434 => 170,  425 => 164,  418 => 159,  405 => 156,  398 => 155,  392 => 154,  389 => 153,  386 => 151,  380 => 150,  371 => 149,  368 => 148,  360 => 132,  357 => 131,  355 => 130,  341 => 118,  331 => 114,  325 => 113,  322 => 112,  318 => 111,  309 => 108,  302 => 106,  298 => 104,  291 => 102,  287 => 100,  274 => 97,  271 => 96,  267 => 95,  264 => 94,  262 => 93,  254 => 92,  251 => 91,  247 => 90,  243 => 88,  241 => 87,  233 => 86,  223 => 85,  219 => 84,  214 => 82,  208 => 81,  201 => 77,  197 => 76,  193 => 75,  187 => 71,  183 => 69,  179 => 67,  177 => 66,  173 => 65,  169 => 64,  161 => 61,  151 => 56,  141 => 51,  135 => 50,  119 => 37,  113 => 34,  109 => 33,  105 => 32,  100 => 30,  95 => 28,  91 => 27,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  38 => 7,  34 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ shop.language }}\">
  <head>
    {# {% include 'blocks/head.rain' %} #}
    <title>{{ page.title }} | {{ shop.name }}</title>
    <meta name=\"description\" content=\"{{ shop.description }}\" />
    <meta name=\"keywords\" content=\"{{ shop.keywords }}\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta property=\"fb:app_id\" content=\"966242223397117\"/>


    <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico' | url_asset }}\" type=\"image/x-icon\" />
    <link href='//fonts.googleapis.com/css?family={{ theme.body_google_webfonts | url_encode }}:400,300,500,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family={{ theme.headings_google_webfonts | url_encode }}:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico' | url_asset }}\" type=\"image/x-icon\" /> 
    <link rel=\"stylesheet\" href=\"{{ 'bootstrap.css' | url_asset }}\" />
    <link rel=\"stylesheet\" href=\"{{ 'style.css' | url_asset }}\" />    
    <link rel=\"stylesheet\" href=\"{{ 'settings.css' | url_asset }}\" />  
    <link rel=\"stylesheet\" href=\"{{ 'gui-2-0.css' | url_core }}\" />
    <link rel=\"stylesheet\" href=\"{{ 'gui-responsive-2-0.css' | url_core }}\" />   
    <link rel=\"stylesheet\" href=\"{{ 'custom.css' | url_asset }}\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">

    <script src=\"{{ 'jquery-1-9-1.js' | url_core }}\"></script>
    <script src=\"{{ 'jquery-ui-1-10-1.js' | url_core }}\"></script>
   
    <script type=\"text/javascript\" src=\"{{ 'global.js' | url_asset }}\"></script>

    <script type=\"text/javascript\" src=\"{{ 'jcarousel.js' | url_asset }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'gui.js' | url_core }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'gui-responsive-2-0.js' | url_core }}\"></script>
        
    <!--[if lt IE 9]>
    <link rel=\"stylesheet\" href=\"{{ 'style-ie.css' | url_asset }}\" />
    <![endif]-->
  </head>
  <body>  
    <header class=\"desktop\">
      <div class=\"navigation clearfix\">
        <div class=\"align\">
          <ul class=\"burger\">
            <span></span>
            <span></span>
            <span></span>
          </ul>
          <div class=\"vertical logo\">
            <a href=\"{{ '' | url }}\" title=\"{{ shop.title }}\">
              <img src=\"{{ 'logo.png' | url_asset }}\" alt=\"{{ shop.title }}\" />
            </a>
          </div>
          <nav class=\"nonbounce vertical\">
            <div class=\"nav-contents\">
              <a class=\"header__sign-in\" href=\"{{ 'account' | url }}\" title=\"{{ 'My account' | t }}\">
               Sign in
              </a>
              
              <div class=\"header-cart__wrapper\">
                <a href=\"{{ 'cart' | url }}\" title=\"{{ 'Cart' | t }}\" class=\"header-cart\">
                  <span class=\"header-cart__label\">Cart</span>
                  <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                  <span class=\"header-cart__count\">{{ page.cart.products | length }}</span>
                  <span class=\"header-cart__count--mobile\">( {{ page.cart.products | length }} - 
                    {% if page.cart.products | length == 1 %}
                      item
                    {% else %}
                      items
                    {% endif %}
                  )</span>
                </a>   
              </div> 

              <form action=\"{{ 'search' | url }}\" method=\"get\" id=\"formSearch\">
                <input type=\"text\" name=\"q\" autocomplete=\"off\"  value=\"{{ page.search }}\"/>
                <span onclick=\"\$('#formSearch').submit();\" title=\"{{ 'Search' | t }}\" class=\"glyphicon glyphicon-search\"></span>
              </form>   

              <ul>
                <li class=\"item {% if 'featured-rugs' is active %} active{% endif %}\">
                  <a class=\"itemLink\" href=\"{{'featured-rugs' | url }}\" title=\"Featured Rugs\">Featured</a>
                </li>
                {% for category in shop.categories %}
                <li class=\"item{% if category.subs %} sub{% endif %}{% if category.url is active %} active{% endif %}\">
                  <a class=\"itemLink\" href=\"{{ category.url | url }}\" title=\"{{ category.title }}\">{{ category.title }}</a>
                  {% if category.subs %}
                  <span class=\"glyphicon glyphicon-play\"></span>
                  <ul class=\"subnav\">
                    {% for category in category.subs %}
                    <li class=\"subitem\">
                      <a class=\"subitemLink\" href=\"{{ category.url | url }}\" title=\"{{ category.title }}\">{{ category.title }}</a>
                      {% if category.subs %}
                      <ul class=\"subnav\">
                        {% for category in category.subs %}
                        <li class=\"subitem\">
                          <a class=\"subitemLink\" href=\"{{ category.url | url }}\" title=\"{{ category.title }}\">{{ category.title }}</a>
                        </li>
                        {% endfor %}
                      </ul>
                      {% endif %}
                    </li>
                    {% endfor %}
                  </ul>
                  {% endif %}
                </li>
                {% endfor %}
                <li class=\"item {% if 'service' is active %} active{% endif %}\">
                  <span class=\"itemLink\">More</span>
                  <ul class=\"subnav\">
                    {% for link in shop.links.more %}
                    <li class=\"subitem\">
                      <a class=\"subitemLink\" href=\"{{ link.url | url }}\" title=\"{{ link.title }}\">
                        {{ link.title }}
                      </a>
                    </li>
                    {% endfor %}
                  </ul>
                </li>
              </ul>
              <span class=\"glyphicon glyphicon-remove\"></span> 
              </div> 
          </nav>
        </div>
      </div>
    </header>
    
    <div class=\"wrapper\">
      <div class=\"container content\">
        {% include 'snippets/messages.rain' %}
        {% include template %}
      </div>
      
      <footer>
        <hr class=\"full-width\" />
        <div class=\"container\">
          <div class=\"social row\">
            {# {% if theme.setting_newsletter %}
            <div class=\"newsletter col-xs-12 col-sm-7 col-md-7\">
              <span class=\"title\">{{ 'Sign up for our newsletter' | t }}:</span>
              <form id=\"formNewsletter\" action=\"{{ 'account/newsletter' | url }}\" method=\"post\">
                <input type=\"hidden\" name=\"key\" value=\"{{ page.key }}\" />
                <input type=\"text\" name=\"email\" id=\"formNewsletterEmail\" value=\"\" placeholder=\"{{ 'E-mail' | t }}\"/>
                <a class=\"btn glyphicon glyphicon-send\" href=\"#\" onclick=\"\$('#formNewsletter').submit(); return false;\" title=\"{{ 'Subscribe' | t }}\" {% if shop.language == 'de' %}style=\"padding: 0px 10px;\"{% endif %}><span>{{ 'Subscribe' | t }}</span></a>
              </form>
            </div>
            {% endif %} #}
    {% if theme.social_facebook or theme.social_twitter or theme.social_google or theme.social_instagram or theme.social_pinterest or theme.social_youtube or theme.social_linkedin %}
            <div class=\"social-media col-xs-12 col-md-12 {% if theme.setting_newsletter %} col-sm-5 col-md-5 text-right{% else %} text-center{% endif %}\">
              {% if theme.social_facebook %}<a href=\"{{ theme.social_facebook }}\" class=\"fa fa-facebook\" target=\"_blank\" title=\"Facebook\"></a>{% endif %}
              
              {# {% if theme.social_google %}<a href=\"{{ theme.social_google }}\" class=\"social-icon google\" target=\"_blank\"></a>{% endif %} #}
              <a target=\"_blank\" href=\"https://www.houzz.com/pro/artisanrugs/artisan-rug-gallery\" title=\"Houzz\"><i class=\"fa fa-houzz\"></i></a>
              {% if theme.social_pinterest %}<a href=\"{{ theme.social_pinterest }}\" class=\"fa fa-pinterest\" target=\"_blank\" title=\"Pinterest\"></a>{% endif %}
              {% if theme.social_twitter %}<a href=\"{{ theme.social_twitter }}\" class=\"fa fa-twitter\" target=\"_blank\" title=\"Twitter\"></a>{% endif %}
              {% if theme.social_instagram %}<a href=\"{{ theme.social_instagram }}\" class=\"fa fa-instagram\" target=\"_blank\" title=\"Instagram {{ shop.name }}\"></a>{% endif %}              
            </div>
            {% endif %}
          </div>
          <hr class=\"full-width\" />
          <div class=\"links row\">
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <label class=\"collapse\" for=\"_1\">
                  <strong>{{ 'Customer service' | t }}</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_1\" type=\"checkbox\">
                    <div class=\"list\">
  
                  <ul class=\"no-underline no-list-style\">
                        {% for link in shop.links.service %}
                        <li><a href=\"{{ link.url | url }}\" title=\"{{ link.title }}\" {% if link.new_window %} target=\"_blank\" {% endif %}>{{ link.title }}</a>
                        </li>
                        {% endfor %}
                    </ul>
                  </div> 
             
            </div>     
       
            
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
          <label class=\"collapse\" for=\"_2\">
                  <strong>{{ 'Products' | t }}</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_2\" type=\"checkbox\">
                    <div class=\"list\">
              <ul>
                <li><a href=\"{{ 'collection/?sort=newest' | url }}\" title=\"{{ 'New products' | t }}\">{{ 'New products' | t }}</a></li>
                <li><a href=\"{{ 'collection/offers' | url }}\" title=\"{{ 'Offers' | t }}\">{{ 'Offers' | t }}</a></li>
                {# {% if theme.setting_brands %}{% if shop.brands %}<li><a href=\"{{ 'brands' | url }}\" title=\"{{ 'Brands' | t }}\">{{ 'Brands' | t }}</a></li>{% endif %}{% endif %} #}
                {% if shop.tags %}<li><a href=\"{{ 'tags' | url }}\" title=\"{{ 'Tags' | t }}\">{{ 'Tags' | t }}</a></li>{% endif %}
                <li><a href=\"{{ 'index.rss' | url }}\" title=\"{{ 'RSS feed' | t }}\">{{ 'RSS feed' | t }}</a></li>
              </ul>
            </div>
            </div>
            
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
              <label class=\"collapse\" for=\"_3\">
                  <strong>
                {% if page.account %}
                {{ 'Welcome, \$1!' | t(page.account.firstname) | raw }}              
                {% else %}
                {{ 'My account' | t }}
                {% endif %}
              </strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_3\" type=\"checkbox\">
                    <div class=\"list\">
            
           
              <ul>
                {% if page.account %}
                <li><a href=\"{{ 'account' | url }}\" title=\"{{ 'My account' | t }}\">{{ 'My account' | t }}</a></li>
                {% else %}
                <li><a href=\"{{ 'account' | url }}\" title=\"{{ 'Register' | t }}\">{{ 'Register' | t }}</a></li>
                {% endif %}
                <li><a href=\"{{ 'account/orders' | url }}\" title=\"{{ 'My orders' | t }}\">{{ 'My orders' | t }}</a></li>
                {% if shop.settings.account.tickets %}
                <li><a href=\"{{ 'account/tickets' | url }}\" title=\"{{ 'My tickets' | t }}\">{{ 'My tickets' | t }}</a></li>
                {% endif %}
                <li><a href=\"{{ 'account/wishlist' | url }}\" title=\"{{ 'My wishlist' | t }}\">{{ 'My wishlist' | t }}</a></li>
                {% if page.account %}
                <li><a href=\"{{ 'account/logout' | url }}\" title=\"{{ 'Logout' | t }}\">{{ 'Logout' | t }}</a></li>
                {% endif %}
              </ul>
            </div>
            </div>
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                 <label class=\"collapse\" for=\"_4\">
                  <strong>{% if theme.contact_name %}{{ theme.contact_name | raw }} {% else %} {{ 'Company info' | t }} {% endif %}</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_4\" type=\"checkbox\">
                    <div class=\"list\">
              
              
              
              {% if theme.contact_description %}<span class=\"contact-description\">{{ theme.contact_description | raw }}</span>{% endif %}
              {% if theme.contact_phone | raw %}
              <div class=\"contact\">
                <span class=\"glyphicon glyphicon-earphone\"></span>
                {{ theme.contact_phone | raw }}
              </div>
              {% endif %}
              {% if theme.contact_email %}
              <div class=\"contact\">
                <span class=\"glyphicon glyphicon-envelope\"></span>
                <a href=\"mailto:{{ theme.contact_email }}\" title=\"Email\">{{ theme.contact_email | raw }}</a>
              </div>
              {% endif %}
              </div>
              
              {% if theme.setting_kiyoh %}<iframe scrolling=\"no\" src=\"https://www.kiyoh.nl/widget.php?company={{ theme.setting_kiyoh }}\" width=\"210\" height=\"128\" border=\"1\" frameborder=\"0\" style=\"margin-top:20px;\"></iframe>{% endif %}
              {% if theme.setting_feedbackcompany %}
              <iframe scrolling=\"no\" frameborder=\"0\" height=\"150\" width=\"200\" style=\"display:none;margin-top:20px\" id=\"tfcwidget\" src=\"https://beoordelingen.feedbackcompany.nl/widget/{{ theme.setting_feedbackcompany }}.html\"></iframe>
<img src=\"https://beoordelingen.feedbackcompany.nl/samenvoordeel/img/spacer.gif\" style=\"display:none;\" onload=\"document.getElementById('tfcwidget').style.display='block';\">
              {% endif %}
              {% if shop.hallmarks %}
              <div class=\"hallmarks\">
                {% for hallmark in shop.hallmarks %}
                <a href=\"{{ hallmark.url | url }}\" title=\"{{ hallmark.title }}\" {% if not new_window %}target=\"_blank\"{% endif %}>
                  {% if hallmark.image %}
                  <img src=\"{{ hallmark.image }}\" alt=\"{{ hallmark.title }}\" title=\"{{ hallmark.title }}\" />
                  {% else %}
                  {{ hallmark.title }}
                  {% endif %}
                </a>
                {% endfor %} 
              </div>
              {% endif %}
            </div>
          </div>
          <hr class=\"full-width\" />
        </div>
        <div class=\"footer-bottom\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"copyright\">
                ©{{ 'Copyright' | t }} {{ 'now' | date('Y') }} {{ shop.name }} 
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    {# {% include 'blocks/body.rain' %} #}
  </body>

</html>", "index.twig", "/Applications/MAMP/htdocs/artisan/lightspeed-tester/templates/index.twig");
    }
}
