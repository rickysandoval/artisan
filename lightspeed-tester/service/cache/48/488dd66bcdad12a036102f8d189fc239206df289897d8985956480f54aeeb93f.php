<?php

/* snippets/messages.rain */
class __TwigTemplate_664d6b387de792ff0d1b79d9126950aa2c2409835abe1ee3ce23b6accf63ecba extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 1, $this->getSourceContext()); })()), "messages", array())) {
            // line 2
            echo "  <div class=\"messages\">
    ";
            // line 3
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 3, $this->getSourceContext()); })()), "messages", array()), "info", array())) {
                // line 4
                echo "      <ul class=\"info\">
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 5, $this->getSourceContext()); })()), "messages", array()), "info", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 6
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "      </ul>
    ";
            }
            // line 10
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 10, $this->getSourceContext()); })()), "messages", array()), "success", array())) {
                // line 11
                echo "      <ul class=\"success\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 12, $this->getSourceContext()); })()), "messages", array()), "success", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 13
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "      </ul>
    ";
            }
            // line 17
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 17, $this->getSourceContext()); })()), "messages", array()), "error", array())) {
                // line 18
                echo "      <ul class=\"error\">
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 19, $this->getSourceContext()); })()), "messages", array()), "error", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "      </ul>
    ";
            }
            // line 24
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "snippets/messages.rain";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  88 => 22,  79 => 20,  75 => 19,  72 => 18,  69 => 17,  65 => 15,  56 => 13,  52 => 12,  49 => 11,  46 => 10,  42 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.messages %}
  <div class=\"messages\">
    {% if page.messages.info %}
      <ul class=\"info\">
        {% for message in page.messages.info %}
          <li>{{ message }}</li>
        {% endfor %}
      </ul>
    {% endif %}
    {% if page.messages.success %}
      <ul class=\"success\">
        {% for message in page.messages.success %}
          <li>{{ message }}</li>
        {% endfor %}
      </ul>
    {% endif %}
    {% if page.messages.error %}
      <ul class=\"error\">
        {% for message in page.messages.error %}
          <li>{{ message }}</li>
        {% endfor %}
      </ul>
    {% endif %}
  </div>
{% endif %}", "snippets/messages.rain", "/Applications/MAMP/htdocs/artisan/lightspeed-tester/templates/snippets/messages.rain");
    }
}
