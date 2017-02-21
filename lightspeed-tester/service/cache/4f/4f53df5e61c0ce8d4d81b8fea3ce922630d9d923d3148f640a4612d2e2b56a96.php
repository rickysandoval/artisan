<?php

/* pages/textpage.rain */
class __TwigTemplate_c2bd04f5e67c84b204833545fc2b07d764111f4cd575194730ecb56b90c40bb3 extends Twig_Template
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
        echo "<div class=\"page-title row textpage\">
  <div class=\"col-sm-6 col-md-6\">
    <h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["textpage"]) || array_key_exists("textpage", $context) ? $context["textpage"] : (function () { throw new Twig_Error_Runtime('Variable "textpage" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>
  </div>
  <div class=\"col-sm-6 col-md-6 breadcrumbs text-right\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array("")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Home")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('t')->getCallable(), array("Home")), "html", null, true);
        echo "</a>
    
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 8, $this->getSourceContext()); })()), "breadcrumbs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "    / <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "url", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "title", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </div>  
  ";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["textpage"]) || array_key_exists("textpage", $context) ? $context["textpage"] : (function () { throw new Twig_Error_Runtime('Variable "textpage" does not exist.', 12, $this->getSourceContext()); })()), "content", array())) {
            // line 13
            echo "  <div class=\"clearfix\"></div>
  <div class=\"col-md-12\">
    ";
            // line 15
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["textpage"]) || array_key_exists("textpage", $context) ? $context["textpage"] : (function () { throw new Twig_Error_Runtime('Variable "textpage" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
            echo " 
  </div>
  ";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "pages/textpage.rain";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  62 => 15,  58 => 13,  56 => 12,  53 => 11,  42 => 9,  38 => 8,  29 => 6,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-title row textpage\">
  <div class=\"col-sm-6 col-md-6\">
    <h1>{{ textpage.title }}</h1>
  </div>
  <div class=\"col-sm-6 col-md-6 breadcrumbs text-right\">
    <a href=\"{{ '' | url }}\" title=\"{{ 'Home' | t }}\">{{ 'Home' | t }}</a>
    
    {% for breadcrumb in page.breadcrumbs %}
    / <a href=\"{{ breadcrumb.url | url }}\">{{ breadcrumb.title }}</a>
    {% endfor %}
  </div>  
  {% if textpage.content %}
  <div class=\"clearfix\"></div>
  <div class=\"col-md-12\">
    {{ textpage.content | raw }} 
  </div>
  {% endif %}
</div>", "pages/textpage.rain", "/Applications/MAMP/htdocs/artisan/lightspeed-tester/templates/pages/textpage.rain");
    }
}
