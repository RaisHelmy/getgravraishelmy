<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/navigation.html.twig */
class __TwigTemplate_4a25bb50f4e89fcf889301110dac8f9127c4bb56a0e132f0613f4b1240f5c827 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav class=\"links\" role=\"navigation\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 5
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current") : (""));
                // line 6
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a href=\"";
                // line 7
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                        ";
                // line 8
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                    </a>
                </li>
            ";
            }
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 14
            echo "            <li>
                <a href=\"";
            // line 15
            echo $this->getAttribute($context["mitem"], "link", []);
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
</nav>          ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  74 => 15,  71 => 14,  66 => 13,  60 => 12,  53 => 8,  49 => 7,  44 => 6,  41 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"links\" role=\"navigation\">
    <ul>
    {% for page in pages.children %}
        {% if page.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
            </li>
        {% endfor %}
    </ul>
</nav>          ", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\user\\themes\\future\\templates\\partials\\navigation.html.twig");
    }
}
