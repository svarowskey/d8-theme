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

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_4b4e3c9d5607711d2af286a218d543708f62173594971c1658e00e425bbd62b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74, "for" => 95];
        $filters = ["raw" => 96];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw'],
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
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        ";
        }
        // line 83
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  ";
        // line 91
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 92
            echo "    <div class=\"container\">
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 96
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </ul>
      </div>
    </div>
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["test_val"] ?? null)));
        echo "

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 111
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 114
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 119
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 123
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 124
            echo "  <div class=\"topwidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 131
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 132
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 134
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 138
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 139
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 141
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 144
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 145
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 146
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 148
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 154
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 158
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 159
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 168
        echo "<!-- End Page Title -- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 177
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 178
            echo "        <div class=\"row\">
          ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 182
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 191
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 192
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 198
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 202
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 203
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 204
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 208
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 211
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 212
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 213
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 214
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 218
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 224
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 225
            echo "      <div class=\"row\">
        ";
            // line 226
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 229
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start Middle Widget -->
";
        // line 236
        if ((($this->getAttribute(($context["page"] ?? null), "middle_first", []) || $this->getAttribute(($context["page"] ?? null), "middle_second", [])) || $this->getAttribute(($context["page"] ?? null), "middle_third", []))) {
            // line 237
            echo "  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 243
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 244
            if ($this->getAttribute(($context["page"] ?? null), "middle_first", [])) {
                // line 245
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 247
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 250
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 251
            if ($this->getAttribute(($context["page"] ?? null), "middle_second", [])) {
                // line 252
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 254
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 257
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_third_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 258
            if ($this->getAttribute(($context["page"] ?? null), "middle_third", [])) {
                // line 259
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 261
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 267
        echo "<!--End Top Widget -->


<!-- Start bottom -->
";
        // line 271
        if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", []))) {
            // line 272
            echo "  <div class=\"bottom-widgets\">
    <!-- Start Container -->
    <div class=\"container\">
      
      <div class=\"row\">

        <!-- Start Bottom First Region -->
        <div class = ";
            // line 279
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 280
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 281
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 283
            echo "        </div>
        <!-- End Bottom First Region -->

        <!-- Start Bottom Second Region -->
        <div class = ";
            // line 287
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 288
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 289
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 291
            echo "        </div>
        <!-- End Bottom Second Region -->

        <!-- Start Bottom third Region -->
        <div class = ";
            // line 295
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 296
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 297
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 299
            echo "        </div>
        <!-- End Bottom Third Region -->

        <div class = ";
            // line 302
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 303
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 304
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          ";
            }
            // line 306
            echo "        </div>

      </div>
    </div>
  </div>
";
        }
        // line 312
        echo "<!--End Bottom -->


<!-- start: Footer -->
";
        // line 316
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 317
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 323
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 324
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 325
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 327
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 331
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 332
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 333
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 335
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 339
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 340
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 341
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 343
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 349
        echo "<!--End Footer -->


<!-- Start Footer Menu -->
";
        // line 353
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 354
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 358
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        ";
            // line 360
            if (($context["show_social_icon"] ?? null)) {
                // line 361
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 363
                if (($context["facebook_url"] ?? null)) {
                    // line 364
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
                }
                // line 366
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 367
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
                }
                // line 369
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 370
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
                }
                // line 372
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 373
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
                }
                // line 375
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 376
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
                }
                // line 378
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 379
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
            ";
                }
                // line 381
                echo "          </div>
        </div>
        ";
            }
            // line 384
            echo "      </div>
    </div>
  </div>
";
        }
        // line 388
        echo "<!-- End Footer Menu -->


";
        // line 391
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 392
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 398
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 399
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null)), "html", null, true);
                echo "</p>        
        ";
            }
            // line 401
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 405
            if (($context["show_credit_link"] ?? null)) {
                // line 406
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 410
            echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>
";
        }
        // line 416
        echo "

<!-- Google map -->
";
        // line 419
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", []))) {
            // line 420
            echo "  <div class=\"google_map\">
    ";
            // line 421
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 424
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 424,  742 => 421,  739 => 420,  737 => 419,  732 => 416,  724 => 410,  718 => 406,  716 => 405,  710 => 401,  705 => 399,  701 => 398,  693 => 392,  691 => 391,  686 => 388,  680 => 384,  675 => 381,  669 => 379,  666 => 378,  660 => 376,  657 => 375,  651 => 373,  648 => 372,  642 => 370,  639 => 369,  633 => 367,  630 => 366,  624 => 364,  622 => 363,  618 => 361,  616 => 360,  611 => 358,  605 => 354,  603 => 353,  597 => 349,  589 => 343,  583 => 341,  581 => 340,  577 => 339,  571 => 335,  565 => 333,  563 => 332,  559 => 331,  553 => 327,  547 => 325,  545 => 324,  541 => 323,  533 => 317,  531 => 316,  525 => 312,  517 => 306,  511 => 304,  509 => 303,  505 => 302,  500 => 299,  494 => 297,  492 => 296,  488 => 295,  482 => 291,  476 => 289,  474 => 288,  470 => 287,  464 => 283,  458 => 281,  456 => 280,  452 => 279,  443 => 272,  441 => 271,  435 => 267,  427 => 261,  421 => 259,  419 => 258,  415 => 257,  410 => 254,  404 => 252,  402 => 251,  398 => 250,  393 => 247,  387 => 245,  385 => 244,  381 => 243,  373 => 237,  371 => 236,  362 => 229,  356 => 226,  353 => 225,  351 => 224,  343 => 218,  336 => 214,  332 => 213,  329 => 212,  327 => 211,  322 => 208,  315 => 204,  311 => 203,  308 => 202,  306 => 201,  301 => 198,  294 => 194,  290 => 193,  287 => 192,  285 => 191,  277 => 186,  271 => 182,  265 => 179,  262 => 178,  260 => 177,  249 => 168,  241 => 163,  235 => 159,  233 => 158,  227 => 154,  219 => 148,  213 => 146,  211 => 145,  207 => 144,  202 => 141,  196 => 139,  194 => 138,  190 => 137,  185 => 134,  179 => 132,  177 => 131,  173 => 130,  165 => 124,  163 => 123,  157 => 119,  149 => 114,  144 => 111,  142 => 110,  132 => 103,  129 => 102,  123 => 98,  114 => 96,  110 => 95,  105 => 92,  103 => 91,  93 => 83,  87 => 82,  85 => 81,  79 => 77,  73 => 75,  71 => 74,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        {% if page.header %}
          {{ page.header }}
        {% endif %}
      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  {% if is_front and show_slideshow%}
    <div class=\"container\">
      <div class=\"flexslider\">
        <ul class=\"slides\">
          {% for slider_contents in slider_content %}
            {{ slider_contents | raw }}
          {% endfor %}
        </ul>
      </div>
    </div>
  {% endif %}

  {{ test_val | raw }}

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  {% if page.highlighted %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.highlighted }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End Highlighted-->


<!-- Start Top Widget -->
{% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}
  <div class=\"topwidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = {{ topwidget_class }}>
          {% if page.topwidget_first %}
            {{ page.topwidget_first }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = {{ topwidget_class }}>
          {% if page.topwidget_second %}
            {{ page.topwidget_second }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = {{ topwidget_third_class }}>
          {% if page.topwidget_third %}
            {{ page.topwidget_third }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End Top Widget -->


<!-- Page Title -->
{%  if page.page_title and not is_front %}
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
  <div class=\"container\">
    
    <!--Content top-->
      {% if page.content_top %}
        <div class=\"row\">
          {{ page.content_top }}
        </div>
      {% endif %}
    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      {% if page.sidebar_first %}
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
      {% endif %}
      <!---End Right SideBar -->

      <!--- Start content -->
      {% if page.content %}
        <div class=\"content_layout\">
          <div class={{contentlayout}}>
            {{ page.content }}
          </div>
        </div>
      {% endif %}
      <!---End content -->

      <!--- Start Right SideBar -->
      {% if page.sidebar_second %}
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
      {% endif %}
      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    {% if page.content_bottom %}
      <div class=\"row\">
        {{ page.content_bottom }}
      </div>
    {% endif %}
    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start Middle Widget -->
{% if page.middle_first or page.middle_second or page.middle_third %}
  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = {{ middle_class }}>
          {% if page.middle_first %}
            {{ page.middle_first }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = {{ middle_class }}>
          {% if page.middle_second %}
            {{ page.middle_second }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = {{ middle_third_class }}>
          {% if page.middle_third %}
            {{ page.middle_third }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End Top Widget -->


<!-- Start bottom -->
{% if page.bottom_first or page.bottom_second or page.bottom_third %}
  <div class=\"bottom-widgets\">
    <!-- Start Container -->
    <div class=\"container\">
      
      <div class=\"row\">

        <!-- Start Bottom First Region -->
        <div class = {{ bottom_class }}>
          {% if page.bottom_first %}
            {{ page.bottom_first }}
          {% endif %}
        </div>
        <!-- End Bottom First Region -->

        <!-- Start Bottom Second Region -->
        <div class = {{ bottom_class }}>
          {% if page.bottom_second %}
            {{ page.bottom_second }}
          {% endif %}
        </div>
        <!-- End Bottom Second Region -->

        <!-- Start Bottom third Region -->
        <div class = {{ bottom_class }}>
          {% if page.bottom_third %}
            {{ page.bottom_third }}
          {% endif %}
        </div>
        <!-- End Bottom Third Region -->

        <div class = {{ bottom_class }}>
          {% if page.bottom_forth %}
            {{ page.bottom_forth }}
          {% endif %}
        </div>

      </div>
    </div>
  </div>
{% endif %}
<!--End Bottom -->


<!-- start: Footer -->
{% if page.footer_first or page.footer_second or page.footer_third %}
  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_first %}
            {{ page.footer_first }}
          {% endif %}
        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_second %}
            {{ page.footer_second }}
          {% endif %}
        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = {{ footer_third_class }}>
          {% if page.footer_third %}
            {{ page.footer_third }}
          {% endif %}
        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End Footer -->


<!-- Start Footer Menu -->
{% if page.footer_menu %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          {{ page.footer_menu }}
        </div>
        {% if show_social_icon %}
        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            {% if facebook_url %}
              <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            {% endif %}
            {% if google_plus_url %}
              <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            {% endif %}
            {% if twitter_url %}
              <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            {% endif %}
            {% if pinterest_url %}
              <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
            {% endif %}
          </div>
        </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}
<!-- End Footer Menu -->


{% if copyright_text or show_credit_link %}
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        {% if copyright_text %}        
          <p>{{copyright_text}}</p>        
        {% endif %}
      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      {% endif %}
      <!-- End Credit link -->
      
    </div>
  </div>
</div>
{% endif %}


<!-- Google map -->
{% if is_front and page.google_map %}
  <div class=\"google_map\">
    {{ page.google_map }}
  </div>
{% endif %}
<!-- End Google map -->", "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig", "/app/themes/drupal8_zymphonies_theme/templates/layout/page.html.twig");
    }
}
