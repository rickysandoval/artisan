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
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("jquery-1-9-1.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("jquery-ui-1-10-1.js")), "html", null, true);
        echo "\"></script>
   
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("global.js")), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("jcarousel.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("gui.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array("gui-responsive-2-0.js")), "html", null, true);
        echo "\"></script>
        
    <!--[if lt IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 35
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
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 48, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\">
              <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_asset')->getCallable(), array("logo.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 49, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" />
            </a>
          </div>
          <nav class=\"nonbounce vertical\">
            <div class=\"nav-contents\">
              <a class=\"header__sign-in\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
        echo "\">
               Sign in
              </a>
              
              <div class=\"header-cart__wrapper\">
                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("cart")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Cart")), "html", null, true);
        echo "\" class=\"header-cart\">
                  <span class=\"header-cart__label\">Cart</span>
                  <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                  <span class=\"header-cart__count\">";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 62, $this->getSourceContext()); })()), "cart", array()), "products", array())), "html", null, true);
        echo "</span>
                  <span class=\"header-cart__count--mobile\">( ";
        // line 63
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 63, $this->getSourceContext()); })()), "cart", array()), "products", array())), "html", null, true);
        echo " - 
                    ";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 64, $this->getSourceContext()); })()), "cart", array()), "products", array())) == 1)) {
            // line 65
            echo "                      item
                    ";
        } else {
            // line 67
            echo "                      items
                    ";
        }
        // line 69
        echo "                  )</span>
                </a>   
              </div> 

              <form action=\"";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("search")), "html", null, true);
        echo "\" method=\"get\" id=\"formSearch\">
                <input type=\"text\" name=\"q\" autocomplete=\"off\"  value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 74, $this->getSourceContext()); })()), "search", array()), "html", null, true);
        echo "\"/>
                <span onclick=\"\$('#formSearch').submit();\" title=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Search")), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-search\"></span>
              </form>   

              <ul>
                <li class=\"item ";
        // line 79
        if (call_user_func_array($this->env->getTest('active')->getCallable(), array("featured-rugs"))) {
            echo " active";
        }
        echo "\">
                  <a class=\"itemLink\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("featured-rugs")), "html", null, true);
        echo "\" title=\"Featured Rugs\">Featured</a>
                </li>
                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 82, $this->getSourceContext()); })()), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 83
            echo "                <li class=\"item";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array())) {
                echo " sub";
            }
            if (call_user_func_array($this->env->getTest('active')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array())))) {
                echo " active";
            }
            echo "\">
                  <a class=\"itemLink\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
            echo "</a>
                  ";
            // line 85
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array())) {
                // line 86
                echo "                  <span class=\"glyphicon glyphicon-play\"></span>
                  <ul class=\"subnav\">
                    ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 89
                    echo "                    <li class=\"subitem\">
                      <a class=\"subitemLink\" href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    echo "</a>
                      ";
                    // line 91
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array())) {
                        // line 92
                        echo "                      <ul class=\"subnav\">
                        ";
                        // line 93
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "subs", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 94
                            echo "                        <li class=\"subitem\">
                          <a class=\"subitemLink\" href=\"";
                            // line 95
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
                        // line 98
                        echo "                      </ul>
                      ";
                    }
                    // line 100
                    echo "                    </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                  </ul>
                  ";
            }
            // line 104
            echo "                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                <li class=\"item ";
        if (call_user_func_array($this->env->getTest('active')->getCallable(), array("service"))) {
            echo " active";
        }
        echo "\">
                  <span class=\"itemLink\">More</span>
                  <ul class=\"subnav\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 109, $this->getSourceContext()); })()), "links", array()), "more", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 110
            echo "                    <li class=\"subitem\">
                      <a class=\"subitemLink\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "url", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
            echo "\">
                        ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
            echo "
                      </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
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
        // line 128
        $this->loadTemplate("snippets/messages.rain", "index.twig", 128)->display($context);
        // line 129
        echo "        ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 129, $this->getSourceContext()); })()), "index.twig", 129)->display($context);
        // line 130
        echo "      </div>
      
      <footer>
        <hr class=\"full-width\" />
        <div class=\"container\">
          <div class=\"social row\">
            ";
        // line 136
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 136, $this->getSourceContext()); })()), "setting_newsletter", array())) {
            // line 137
            echo "            <div class=\"newsletter col-xs-12 col-sm-7 col-md-7\">
              <span class=\"title\">";
            // line 138
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Sign up for our newsletter")), "html", null, true);
            echo ":</span>
              <form id=\"formNewsletter\" action=\"";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/newsletter")), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"hidden\" name=\"key\" value=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 140, $this->getSourceContext()); })()), "key", array()), "html", null, true);
            echo "\" />
                <input type=\"text\" name=\"email\" id=\"formNewsletterEmail\" value=\"\" placeholder=\"";
            // line 141
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("E-mail")), "html", null, true);
            echo "\"/>
                <a class=\"btn glyphicon glyphicon-send\" href=\"#\" onclick=\"\$('#formNewsletter').submit(); return false;\" title=\"";
            // line 142
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Subscribe")), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 142, $this->getSourceContext()); })()), "language", array()) == "de")) {
                echo "style=\"padding: 0px 10px;\"";
            }
            echo "><span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Subscribe")), "html", null, true);
            echo "</span></a>
              </form>
            </div>
            ";
        }
        // line 146
        echo "    ";
        if (((((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_facebook", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_twitter", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_google", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_instagram", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_pinterest", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_youtube", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 146, $this->getSourceContext()); })()), "social_linkedin", array()))) {
            // line 147
            echo "            <div class=\"social-media col-xs-12 col-md-12 ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 147, $this->getSourceContext()); })()), "setting_newsletter", array())) {
                echo " col-sm-5 col-md-5 text-right";
            } else {
                echo " text-center";
            }
            echo "\">
              ";
            // line 148
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_facebook", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 148, $this->getSourceContext()); })()), "social_facebook", array()), "html", null, true);
                echo "\" class=\"social-icon facebook\" target=\"_blank\"></a>";
            }
            // line 149
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 149, $this->getSourceContext()); })()), "social_twitter", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 149, $this->getSourceContext()); })()), "social_twitter", array()), "html", null, true);
                echo "\" class=\"social-icon twitter\" target=\"_blank\"></a>";
            }
            // line 150
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 150, $this->getSourceContext()); })()), "social_google", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 150, $this->getSourceContext()); })()), "social_google", array()), "html", null, true);
                echo "\" class=\"social-icon google\" target=\"_blank\"></a>";
            }
            // line 151
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 151, $this->getSourceContext()); })()), "social_pinterest", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 151, $this->getSourceContext()); })()), "social_pinterest", array()), "html", null, true);
                echo "\" class=\"social-icon pinterest\" target=\"_blank\"></a>";
            }
            // line 152
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 152, $this->getSourceContext()); })()), "social_youtube", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 152, $this->getSourceContext()); })()), "social_youtube", array()), "html", null, true);
                echo "\" class=\"social-icon youtube\" target=\"_blank\"></a>";
            }
            // line 153
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 153, $this->getSourceContext()); })()), "social_tumblr", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 153, $this->getSourceContext()); })()), "social_tumblr", array()), "html", null, true);
                echo "\" class=\"social-icon tumblr\" target=\"_blank\"></a>";
            }
            // line 154
            echo "              ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 154, $this->getSourceContext()); })()), "social_instagram", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 154, $this->getSourceContext()); })()), "social_instagram", array()), "html", null, true);
                echo "\" class=\"social-icon instagram\" target=\"_blank\" title=\"Instagram ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 154, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "\"></a>";
            }
            echo "              
            </div>
            ";
        }
        // line 157
        echo "          </div>
          <hr class=\"full-width\" />
          <div class=\"links row\">
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <label class=\"collapse\" for=\"_1\">
                  <strong>";
        // line 162
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Customer service")), "html", null, true);
        echo "</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_1\" type=\"checkbox\">
                    <div class=\"list\">
  
                  <ul class=\"no-underline no-list-style\">
                        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 168, $this->getSourceContext()); })()), "links", array()), "service", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 169
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
        // line 172
        echo "                    </ul>
                  </div> 
             
            </div>     
       
            
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
          <label class=\"collapse\" for=\"_2\">
                  <strong>";
        // line 180
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Products")), "html", null, true);
        echo "</strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_2\" type=\"checkbox\">
                    <div class=\"list\">
              <ul>
                <li><a href=\"";
        // line 185
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("collection")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("All products")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("All products")), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 186
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("collection/?sort=newest")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("New products")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("New products")), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("collection/offers")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Offers")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Offers")), "html", null, true);
        echo "</a></li>
                ";
        // line 188
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 188, $this->getSourceContext()); })()), "setting_brands", array())) {
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 188, $this->getSourceContext()); })()), "brands", array())) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("brands")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Brands")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Brands")), "html", null, true);
                echo "</a></li>";
            }
        }
        // line 189
        echo "                ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 189, $this->getSourceContext()); })()), "tags", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("tags")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Tags")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Tags")), "html", null, true);
            echo "</a></li>";
        }
        // line 190
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
        // line 198
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 198, $this->getSourceContext()); })()), "account", array())) {
            // line 199
            echo "                ";
            echo call_user_func_array($this->env->getFilter('t')->getCallable(), array("Welcome, \$1!", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 199, $this->getSourceContext()); })()), "account", array()), "firstname", array())));
            echo "              
                ";
        } else {
            // line 201
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
            echo "
                ";
        }
        // line 203
        echo "              </strong>
                  <span class=\"glyphicon glyphicon-chevron-down hidden-sm hidden-md hidden-lg\"></span></label>
                    <input class=\"collapse_input hidden-md hidden-lg hidden-sm\" id=\"_3\" type=\"checkbox\">
                    <div class=\"list\">
            
           
              <ul>
                ";
        // line 210
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 210, $this->getSourceContext()); })()), "account", array())) {
            // line 211
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My account")), "html", null, true);
            echo "</a></li>
                ";
        } else {
            // line 213
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Register")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Register")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 215
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/orders")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My orders")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My orders")), "html", null, true);
        echo "</a></li>
                ";
        // line 216
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 216, $this->getSourceContext()); })()), "settings", array()), "account", array()), "tickets", array())) {
            // line 217
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/tickets")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My tickets")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My tickets")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 219
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/wishlist")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My wishlist")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("My wishlist")), "html", null, true);
        echo "</a></li>
                ";
        // line 220
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 220, $this->getSourceContext()); })()), "account", array())) {
            // line 221
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("account/logout")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Logout")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Logout")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 223
        echo "              </ul>
            </div>
            </div>
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                 <label class=\"collapse\" for=\"_4\">
                  <strong>";
        // line 228
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 228, $this->getSourceContext()); })()), "contact_name", array())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 228, $this->getSourceContext()); })()), "contact_name", array());
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
        // line 235
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 235, $this->getSourceContext()); })()), "contact_description", array())) {
            echo "<span class=\"contact-description\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 235, $this->getSourceContext()); })()), "contact_description", array());
            echo "</span>";
        }
        // line 236
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 236, $this->getSourceContext()); })()), "contact_phone", array())) {
            // line 237
            echo "              <div class=\"contact\">
                <span class=\"glyphicon glyphicon-earphone\"></span>
                ";
            // line 239
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 239, $this->getSourceContext()); })()), "contact_phone", array());
            echo "
              </div>
              ";
        }
        // line 242
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 242, $this->getSourceContext()); })()), "contact_email", array())) {
            // line 243
            echo "              <div class=\"contact\">
                <span class=\"glyphicon glyphicon-envelope\"></span>
                <a href=\"mailto:";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 245, $this->getSourceContext()); })()), "contact_email", array()), "html", null, true);
            echo "\" title=\"Email\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 245, $this->getSourceContext()); })()), "contact_email", array());
            echo "</a>
              </div>
              ";
        }
        // line 248
        echo "              </div>
              
              ";
        // line 250
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 250, $this->getSourceContext()); })()), "setting_kiyoh", array())) {
            echo "<iframe scrolling=\"no\" src=\"https://www.kiyoh.nl/widget.php?company=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 250, $this->getSourceContext()); })()), "setting_kiyoh", array()), "html", null, true);
            echo "\" width=\"210\" height=\"128\" border=\"1\" frameborder=\"0\" style=\"margin-top:20px;\"></iframe>";
        }
        // line 251
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 251, $this->getSourceContext()); })()), "setting_feedbackcompany", array())) {
            // line 252
            echo "              <iframe scrolling=\"no\" frameborder=\"0\" height=\"150\" width=\"200\" style=\"display:none;margin-top:20px\" id=\"tfcwidget\" src=\"https://beoordelingen.feedbackcompany.nl/widget/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 252, $this->getSourceContext()); })()), "setting_feedbackcompany", array()), "html", null, true);
            echo ".html\"></iframe>
<img src=\"https://beoordelingen.feedbackcompany.nl/samenvoordeel/img/spacer.gif\" style=\"display:none;\" onload=\"document.getElementById('tfcwidget').style.display='block';\">
              ";
        }
        // line 255
        echo "              ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 255, $this->getSourceContext()); })()), "hallmarks", array())) {
            // line 256
            echo "              <div class=\"hallmarks\">
                ";
            // line 257
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 257, $this->getSourceContext()); })()), "hallmarks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["hallmark"]) {
                // line 258
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "url", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                echo "\" ";
                if ( !(isset($context["new_window"]) || array_key_exists("new_window", $context) ? $context["new_window"] : (function () { throw new Twig_Error_Runtime('Variable "new_window" does not exist.', 258, $this->getSourceContext()); })())) {
                    echo "target=\"_blank\"";
                }
                echo ">
                  ";
                // line 259
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "image", array())) {
                    // line 260
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "image", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                    echo "\" />
                  ";
                } else {
                    // line 262
                    echo "                  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hallmark"], "title", array()), "html", null, true);
                    echo "
                  ";
                }
                // line 264
                echo "                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hallmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo " 
              </div>
              ";
        }
        // line 268
        echo "            </div>
          </div>
          <hr class=\"full-width\" />
        </div>
        <div class=\"copyright-payment\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"copyright col-md-6\">
                © ";
        // line 276
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Copyright")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 276, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " 
                ";
        // line 277
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 277, $this->getSourceContext()); })()), "links", array()), "powered_by", array())) {
            // line 278
            echo "                - Powered by
                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 279, $this->getSourceContext()); })()), "links", array()), "powered_by", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 280
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "url", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "new_window", array())) {
                    echo " target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "title", array()), "html", null, true);
                echo "</a>
                ";
                // line 281
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo " - ";
                }
                // line 282
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                ";
        }
        // line 284
        echo "              </div>
              <div class=\"payments col-md-6 text-right\">
                ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new Twig_Error_Runtime('Variable "shop" does not exist.', 286, $this->getSourceContext()); })()), "payments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 287
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("service/payment-methods")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Payment methods")), "html", null, true);
            echo "\">
                  <img src=\"";
            // line 288
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url_core')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["payment"], "icon", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["payment"], "title", array()), "html", null, true);
            echo "\" />
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    ";
        // line 298
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
        return array (  909 => 298,  901 => 291,  890 => 288,  883 => 287,  879 => 286,  875 => 284,  872 => 283,  858 => 282,  854 => 281,  841 => 280,  824 => 279,  821 => 278,  819 => 277,  811 => 276,  801 => 268,  796 => 265,  789 => 264,  783 => 262,  773 => 260,  771 => 259,  760 => 258,  756 => 257,  753 => 256,  750 => 255,  743 => 252,  740 => 251,  734 => 250,  730 => 248,  722 => 245,  718 => 243,  715 => 242,  709 => 239,  705 => 237,  702 => 236,  696 => 235,  679 => 228,  672 => 223,  662 => 221,  660 => 220,  651 => 219,  641 => 217,  639 => 216,  630 => 215,  620 => 213,  610 => 211,  608 => 210,  599 => 203,  593 => 201,  587 => 199,  585 => 198,  569 => 190,  558 => 189,  546 => 188,  538 => 187,  530 => 186,  522 => 185,  514 => 180,  504 => 172,  486 => 169,  482 => 168,  473 => 162,  466 => 157,  453 => 154,  446 => 153,  439 => 152,  432 => 151,  425 => 150,  418 => 149,  412 => 148,  403 => 147,  400 => 146,  387 => 142,  383 => 141,  379 => 140,  375 => 139,  371 => 138,  368 => 137,  366 => 136,  358 => 130,  355 => 129,  353 => 128,  339 => 116,  329 => 112,  323 => 111,  320 => 110,  316 => 109,  307 => 106,  300 => 104,  296 => 102,  289 => 100,  285 => 98,  272 => 95,  269 => 94,  265 => 93,  262 => 92,  260 => 91,  252 => 90,  249 => 89,  245 => 88,  241 => 86,  239 => 85,  231 => 84,  221 => 83,  217 => 82,  212 => 80,  206 => 79,  199 => 75,  195 => 74,  191 => 73,  185 => 69,  181 => 67,  177 => 65,  175 => 64,  171 => 63,  167 => 62,  159 => 59,  149 => 54,  139 => 49,  133 => 48,  117 => 35,  111 => 32,  107 => 31,  103 => 30,  98 => 28,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  38 => 7,  34 => 6,  27 => 5,  22 => 2,  19 => 1,);
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
            {% if theme.setting_newsletter %}
            <div class=\"newsletter col-xs-12 col-sm-7 col-md-7\">
              <span class=\"title\">{{ 'Sign up for our newsletter' | t }}:</span>
              <form id=\"formNewsletter\" action=\"{{ 'account/newsletter' | url }}\" method=\"post\">
                <input type=\"hidden\" name=\"key\" value=\"{{ page.key }}\" />
                <input type=\"text\" name=\"email\" id=\"formNewsletterEmail\" value=\"\" placeholder=\"{{ 'E-mail' | t }}\"/>
                <a class=\"btn glyphicon glyphicon-send\" href=\"#\" onclick=\"\$('#formNewsletter').submit(); return false;\" title=\"{{ 'Subscribe' | t }}\" {% if shop.language == 'de' %}style=\"padding: 0px 10px;\"{% endif %}><span>{{ 'Subscribe' | t }}</span></a>
              </form>
            </div>
            {% endif %}
    {% if theme.social_facebook or theme.social_twitter or theme.social_google or theme.social_instagram or theme.social_pinterest or theme.social_youtube or theme.social_linkedin %}
            <div class=\"social-media col-xs-12 col-md-12 {% if theme.setting_newsletter %} col-sm-5 col-md-5 text-right{% else %} text-center{% endif %}\">
              {% if theme.social_facebook %}<a href=\"{{ theme.social_facebook }}\" class=\"social-icon facebook\" target=\"_blank\"></a>{% endif %}
              {% if theme.social_twitter %}<a href=\"{{ theme.social_twitter }}\" class=\"social-icon twitter\" target=\"_blank\"></a>{% endif %}
              {% if theme.social_google %}<a href=\"{{ theme.social_google }}\" class=\"social-icon google\" target=\"_blank\"></a>{% endif %}
              {% if theme.social_pinterest %}<a href=\"{{ theme.social_pinterest }}\" class=\"social-icon pinterest\" target=\"_blank\"></a>{% endif %}
              {% if theme.social_youtube %}<a href=\"{{ theme.social_youtube }}\" class=\"social-icon youtube\" target=\"_blank\"></a>{% endif %}
              {% if theme.social_tumblr %}<a href=\"{{ theme.social_tumblr }}\" class=\"social-icon tumblr\" target=\"_blank\"></a>{% endif %}
              {% if theme.social_instagram %}<a href=\"{{ theme.social_instagram }}\" class=\"social-icon instagram\" target=\"_blank\" title=\"Instagram {{ shop.name }}\"></a>{% endif %}              
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
                <li><a href=\"{{ 'collection' | url }}\" title=\"{{ 'All products' | t }}\">{{ 'All products' | t }}</a></li>
                <li><a href=\"{{ 'collection/?sort=newest' | url }}\" title=\"{{ 'New products' | t }}\">{{ 'New products' | t }}</a></li>
                <li><a href=\"{{ 'collection/offers' | url }}\" title=\"{{ 'Offers' | t }}\">{{ 'Offers' | t }}</a></li>
                {% if theme.setting_brands %}{% if shop.brands %}<li><a href=\"{{ 'brands' | url }}\" title=\"{{ 'Brands' | t }}\">{{ 'Brands' | t }}</a></li>{% endif %}{% endif %}
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
        <div class=\"copyright-payment\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"copyright col-md-6\">
                © {{ 'Copyright' | t }} {{ 'now' | date('Y') }} {{ shop.name }} 
                {% if shop.links.powered_by %}
                - Powered by
                {% for link in shop.links.powered_by %}
                <a href=\"{{ link.url | url }}\" title=\"{{ link.title }}\"{% if link.new_window %} target=\"_blank\"{% endif %}>{{ link.title }}</a>
                {% if not loop.last %} - {% endif %}
                {% endfor %}
                {% endif %}
              </div>
              <div class=\"payments col-md-6 text-right\">
                {% for payment in shop.payments %}
                <a href=\"{{ 'service/payment-methods' | url }}\" title=\"{{ 'Payment methods' | t }}\">
                  <img src=\"{{ payment.icon | url_core }}\" alt=\"{{ payment.title }}\" />
                </a>
                {% endfor %}
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
