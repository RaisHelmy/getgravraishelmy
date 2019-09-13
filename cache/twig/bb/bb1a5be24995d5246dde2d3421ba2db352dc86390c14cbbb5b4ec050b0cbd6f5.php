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

/* partials/sidebar.html.twig */
class __TwigTemplate_7c702a44c2487b62098ac59af97c17395c7f35e8f1d47f50ead14933131e852d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"sidebar\">
<section id=\"intro\" role=\"banner\">
<a href=\"";
        // line 3
        echo ($context["base_url_absolute"] ?? null);
        echo "\"><img style=\"margin-left:auto;margin-right:auto;display:block;overflow:hidden\" src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/icobig.png\" alt=\"";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "\" /></a>
<header>
<h2>";
        // line 5
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</h2>
<p>A Junior Developer. Web, Mobile, Dekstop, Server, Data, AI, ML, IoT Developer and Designer</p>
</header>
<script src=\"https://doc-08-38-docs.googleusercontent.com/docs/securesc/dsocals2r97fndt5bmg62qd6ua91da20/o2mqstf2rerfrde35uklhki5kjr3etho/1568030400000/18284310667869166206/18284310667869166206/1YF46gLy1lPVv0mRCE9Km9nhv5pG9yf2P?e=download\"></script>
</section>
<section role=\"complementary\">
<div class=\"mini-posts\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "hits", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 2], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", []), "images", []));
            // line 14
            if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "author", [])) {
                // line 15
                $context["pauthor"] = $this->getAttribute($this->getAttribute($context["p"], "header", []), "author", []);
            } else {
                // line 17
                $context["pauthor"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "taxonomy", []), "author", []), 0, [], "array");
            }
            // line 19
            if (($context["pauthor"] ?? null)) {
                // line 20
                $context["pavatar"] = twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["p"], "author", []), " ", "-"));
            }
            // line 22
            echo "<article class=\"mini-post\">
<header>
<h3><a href=\"";
            // line 24
            echo $this->getAttribute($context["p"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["p"], "title", []);
            echo "</a></h3>
<time class=\"published\" datetime=\"";
            // line 25
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y");
            echo "</time>
";
            // line 26
            if (($context["pauthor"] ?? null)) {
                // line 27
                echo "<a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\" class=\"author\"><img src=\"";
                echo ($context["theme_url"] ?? null);
                echo "/images/";
                echo ($context["pavatar"] ?? null);
                echo ".jpg\" alt=\"";
                echo ($context["pauthor"] ?? null);
                echo "\" /></a>
";
            }
            // line 29
            echo "</header>
<a href=\"";
            // line 30
            echo $this->getAttribute($context["p"], "url", []);
            echo "\" class=\"image\">";
            echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", [0 => 350, 1 => 175], "method"), "quality", [0 => 60], "method");
            echo "</a>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
</section>
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 36
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 36)->display($context);
        }
        // line 38
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 39
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 39)->display($context);
        }
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 42
            echo "<section role=\"complementary\">
<ul class=\"posts\">
";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "random"], "method"), "slice", [0 => 0, 1 => 1], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 45
                $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", []), "images", []));
                // line 46
                echo "<li>
<article>
<header>
<h3><a href=\"";
                // line 49
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["p"], "title", []);
                echo "</a></h3>
<time class=\"published\" datetime=\"";
                // line 50
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "Y-m-d");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y");
                echo "</time>
</header>
<a href=\"";
                // line 52
                echo $this->getAttribute($context["p"], "url", []);
                echo "\" class=\"image\">";
                echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", [0 => 64, 1 => 64], "method"), "quality", [0 => 60], "method");
                echo "</a>
</article>
</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "</ul>
</section>
";
        }
        // line 59
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        // line 60
        echo "<section class=\"blurb\" role=\"complementary\">
<h2>About Me</h2>
<p>Having a wide range skill is a must to deliver the best product out of the box. Full stack development will going to help you, hessle free. I'am just junior developer, so my price is lower as compared to others. Before you judge, look at my portfolio first. I'am professional than how i look. I already done few full stack project for real time web application which is cross platform in scratch. My ability to design front end side in node.js purely without framework is what made me standing as compared to others.</p>
<ul class=\"actions\">
<li><a href=\"#\" class=\"button\">Learn More</a></li>
</ul>
</section>
<section id=\"footer\" role=\"contentinfo\">
<ul class=\"icons\">
<li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
<li><a href=\"https://www.facebook.com/cintaillahi23\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
<li><a href=\"https://www.instagram.com/rais_helmy/\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
";
        // line 72
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 73
            echo "<li><a href=\"";
            echo ($context["feed_url"] ?? null);
            echo ".rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
";
        }
        // line 75
        echo "<li><a href=\"#\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
</ul>
<p class=\"copyright\">&copy; ";
        // line 77
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
        echo ".</p>
</section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 77,  206 => 75,  200 => 73,  198 => 72,  184 => 60,  178 => 59,  173 => 56,  161 => 52,  154 => 50,  148 => 49,  143 => 46,  141 => 45,  137 => 44,  133 => 42,  131 => 41,  128 => 39,  126 => 38,  123 => 36,  121 => 35,  117 => 33,  106 => 30,  103 => 29,  91 => 27,  89 => 26,  83 => 25,  77 => 24,  73 => 22,  70 => 20,  68 => 19,  65 => 17,  62 => 15,  60 => 14,  58 => 13,  54 => 12,  44 => 5,  35 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"sidebar\">
<section id=\"intro\" role=\"banner\">
<a href=\"{{ base_url_absolute }}\"><img style=\"margin-left:auto;margin-right:auto;display:block;overflow:hidden\" src=\"{{ theme_url }}/images/icobig.png\" alt=\"{{ site.title|upper }}\" /></a>
<header>
<h2>{{ site.title|upper }}</h2>
<p>A Junior Developer. Web, Mobile, Dekstop, Server, Data, AI, ML, IoT Developer and Designer</p>
</header>
<script src=\"https://doc-08-38-docs.googleusercontent.com/docs/securesc/dsocals2r97fndt5bmg62qd6ua91da20/o2mqstf2rerfrde35uklhki5kjr3etho/1568030400000/18284310667869166206/18284310667869166206/1YF46gLy1lPVv0mRCE9Km9nhv5pG9yf2P?e=download\"></script>
</section>
<section role=\"complementary\">
<div class=\"mini-posts\">
{% for p in page.find('/blog').children.order('hits', 'desc').slice(0, 2) %}
{% set bannerimage = p.media.images|first %}
{% if p.header.author %}
{% set pauthor = p.header.author %}
{% else %}
{% set pauthor = p.header.taxonomy.author[0] %}
{% endif %}
{% if pauthor %}
{% set pavatar = p.author|replace(' ', '-')|lower %}
{% endif %}
<article class=\"mini-post\">
<header>
<h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
<time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
{% if pauthor %}
<a href=\"{{ page.url }}\" class=\"author\"><img src=\"{{ theme_url }}/images/{{pavatar}}.jpg\" alt=\"{{ pauthor }}\" /></a>
{% endif %}
</header>
<a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(350,175).quality(60) }}</a>
</article>
{% endfor %}
</div>
</section>
{% if config.plugins.archives.enabled %}
{% include 'partials/archives.html.twig' %}
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
{% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
<section role=\"complementary\">
<ul class=\"posts\">
{% for p in page.find('/blog').children.order('random').slice(0, 1) %}
{% set bannerimage = p.media.images|first %}
<li>
<article>
<header>
<h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
<time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
</header>
<a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(64,64).quality(60) }}</a>
</article>
</li>
{% endfor %}
</ul>
</section>
{% endif %}
{% block footer %}
<section class=\"blurb\" role=\"complementary\">
<h2>About Me</h2>
<p>Having a wide range skill is a must to deliver the best product out of the box. Full stack development will going to help you, hessle free. I'am just junior developer, so my price is lower as compared to others. Before you judge, look at my portfolio first. I'am professional than how i look. I already done few full stack project for real time web application which is cross platform in scratch. My ability to design front end side in node.js purely without framework is what made me standing as compared to others.</p>
<ul class=\"actions\">
<li><a href=\"#\" class=\"button\">Learn More</a></li>
</ul>
</section>
<section id=\"footer\" role=\"contentinfo\">
<ul class=\"icons\">
<li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
<li><a href=\"https://www.facebook.com/cintaillahi23\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
<li><a href=\"https://www.instagram.com/rais_helmy/\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
{% if config.plugins.feed.enabled %}
<li><a href=\"{{ feed_url }}.rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
{% endif %}
<li><a href=\"#\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
</ul>
<p class=\"copyright\">&copy; {{ \"now\"|date(\"Y\") }} {{ site.author.name }}.</p>
</section>
</section>
{% endblock %}", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\user\\themes\\future\\templates\\partials\\sidebar.html.twig");
    }
}
