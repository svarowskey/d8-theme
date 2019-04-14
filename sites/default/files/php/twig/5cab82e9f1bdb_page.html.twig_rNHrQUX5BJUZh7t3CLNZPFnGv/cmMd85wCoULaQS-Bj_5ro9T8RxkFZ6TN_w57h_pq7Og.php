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

/* themes/custom/ceilings/templates/layout/page.html.twig */
class __TwigTemplate_e9dc08b0da3c2c6b693f276e522c7e383f561d00a2430fa390f7b9daff05bb65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header class=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "header_left", [])) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_left", [])), "html", null, true);
            echo "
                ";
        }
        // line 8
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 11
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
                ";
        }
        // line 13
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "header_right", [])) {
            // line 16
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
            echo "
                ";
        }
        // line 18
        echo "            </div>
        </div>
    </div>
    <div class=\"menu-wrap\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
                    aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
                <div class=\"container\">
                    ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 31
            echo "                        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
                    ";
        }
        // line 33
        echo "                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Page Title -->
";
        // line 40
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 41
            echo "    <div id=\"page-title\">
        <div id=\"page-title-inner\">
            <!-- start: Container -->
            <div class=\"container\">
                ";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 50
        echo "<!-- End Page Title -- >

<!-- layout -->
<div id=\"wrapper\">
    <!-- start: Container -->
    <div class=\"container-fluid\">
        <!--start:content -->
        <div class=\"row layout\">
            <!--- Start content -->
            ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 60
            echo "                <div class=\"content_layout\">
                    <div class=\"\">
                        ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 66
        echo "            <!---End content -->
        </div>
        <!--End Content -->
    </div>
</div>
<!-- End layout -->
";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "characteristics", [])) {
            // line 73
            echo "    <div class=\"characteristics container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "characteristics", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 81
        echo "
";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "make_measure", [])) {
            // line 83
            echo "    <div class=\"make-measure-wrap wow fadeInUp\" data-wow-duration=\"2s\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "make_measure", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 91
        echo "
<!-- Start: Yandex Map -->
<div id=\"map\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"places\">
                    <span class=\"places__title\">ПОТОЛКИ</span>
                    <span class=\"places__address\">г. Омск, ул.70 Лет Октября, д.20</span>
                    <div class=\"places-phone\">
                        <img class=\"places-phone__img places-phone__img_margin-right\"
                             src=\"themes/custom/ceilings/images/icons/phone.png\" alt=\"img\">
                        <a class=\"places-phone__link\" href=\"tel:+73812503405\">(3812) 503-405</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Yandex Map -->

<!-- start: Footer -->
<div class=\"footer-wrap\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Start Footer region -->
            <div class=\"col-md-4\">
                ";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "footer_left", [])) {
            // line 119
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left", [])), "html", null, true);
            echo "
                ";
        }
        // line 121
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 123
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 124
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
                ";
        }
        // line 126
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "footer_right", [])) {
            // line 129
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right", [])), "html", null, true);
            echo "
                ";
        }
        // line 131
        echo "            </div>
            <!-- End Footer region -->
        </div>
    </div>
</div>
<!--End Footer -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/ceilings/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 131,  260 => 129,  258 => 128,  254 => 126,  248 => 124,  246 => 123,  242 => 121,  236 => 119,  234 => 118,  205 => 91,  197 => 86,  192 => 83,  190 => 82,  187 => 81,  179 => 76,  174 => 73,  172 => 72,  164 => 66,  157 => 62,  153 => 60,  151 => 59,  140 => 50,  132 => 45,  126 => 41,  124 => 40,  115 => 33,  109 => 31,  107 => 30,  93 => 18,  87 => 16,  85 => 15,  81 => 13,  75 => 11,  73 => 10,  69 => 8,  63 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                {% if page.header_left %}
                    {{ page.header_left }}
                {% endif %}
            </div>
            <div class=\"col-md-4\">
                {% if page.header %}
                    {{ page.header }}
                {% endif %}
            </div>
            <div class=\"col-md-4\">
                {% if page.header_right %}
                    {{ page.header_right }}
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"menu-wrap\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
                    aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
                <div class=\"container\">
                    {% if page.primary_menu %}
                        {{ page.primary_menu }}
                    {% endif %}
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Page Title -->
{% if page.page_title and not is_front %}
    <div id=\"page-title\">
        <div id=\"page-title-inner\">
            <!-- start: Container -->
            <div class=\"container\">
                {{ page.page_title }}
            </div>
        </div>
    </div>
{% endif %}
<!-- End Page Title -- >

<!-- layout -->
<div id=\"wrapper\">
    <!-- start: Container -->
    <div class=\"container-fluid\">
        <!--start:content -->
        <div class=\"row layout\">
            <!--- Start content -->
            {% if page.content %}
                <div class=\"content_layout\">
                    <div class=\"\">
                        {{ page.content }}
                    </div>
                </div>
            {% endif %}
            <!---End content -->
        </div>
        <!--End Content -->
    </div>
</div>
<!-- End layout -->
{% if page.characteristics %}
    <div class=\"characteristics container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                {{ page.characteristics }}
            </div>
        </div>
    </div>
{% endif %}

{% if page.make_measure %}
    <div class=\"make-measure-wrap wow fadeInUp\" data-wow-duration=\"2s\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                {{ page.make_measure }}
            </div>
        </div>
    </div>
{% endif %}

<!-- Start: Yandex Map -->
<div id=\"map\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"places\">
                    <span class=\"places__title\">ПОТОЛКИ</span>
                    <span class=\"places__address\">г. Омск, ул.70 Лет Октября, д.20</span>
                    <div class=\"places-phone\">
                        <img class=\"places-phone__img places-phone__img_margin-right\"
                             src=\"themes/custom/ceilings/images/icons/phone.png\" alt=\"img\">
                        <a class=\"places-phone__link\" href=\"tel:+73812503405\">(3812) 503-405</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Yandex Map -->

<!-- start: Footer -->
<div class=\"footer-wrap\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Start Footer region -->
            <div class=\"col-md-4\">
                {% if page.footer_left %}
                    {{ page.footer_left }}
                {% endif %}
            </div>
            <div class=\"col-md-4\">
                {% if page.footer %}
                    {{ page.footer }}
                {% endif %}
            </div>
            <div class=\"col-md-4\">
                {% if page.footer_right %}
                    {{ page.footer_right }}
                {% endif %}
            </div>
            <!-- End Footer region -->
        </div>
    </div>
</div>
<!--End Footer -->", "themes/custom/ceilings/templates/layout/page.html.twig", "/app/themes/custom/ceilings/templates/layout/page.html.twig");
    }
}
