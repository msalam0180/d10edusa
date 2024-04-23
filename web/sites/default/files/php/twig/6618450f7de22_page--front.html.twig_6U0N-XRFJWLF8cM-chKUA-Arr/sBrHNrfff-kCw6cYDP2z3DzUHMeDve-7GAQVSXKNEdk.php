<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/educationusa/templates/custom/menu/page--front.html.twig */
class __TwigTemplate_8d27c0fe6728ab0d002f4bbdf073fa58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["sidebar_first_exists"] =  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 71), 71, $this->source)), "<img><video><audio><drupal-render-placeholder>")));
        // line 72
        $context["sidebar_second_exists"] =  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 72), 72, $this->source)), "<img><video><audio><drupal-render-placeholder>")));
        // line 73
        echo "
";
        // line 75
        echo "  ";
        // line 76
        echo "    <header class=\"fixed-top pb-0\">
      ";
        // line 77
        $this->displayBlock('head', $context, $blocks);
        // line 128
        echo "    </header>
    ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) {
            // line 130
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 131, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 136
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 136)) {
            // line 137
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 144
            echo "    ";
        }
        // line 145
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 146
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "    </div>
    ";
        // line 174
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 174) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 174)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 174))) {
            // line 175
            echo "      <div class=\"featured-bottom\">
        ";
            // line 177
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "
          ";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
            echo "
          ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
        ";
            // line 181
            echo "      </div>
    ";
        }
        // line 183
        echo "    <footer class=\"site-footer\">
      ";
        // line 184
        $this->displayBlock('footer', $context, $blocks);
        // line 206
        echo "    </footer>
  ";
    }

    // line 77
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 78) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 78)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 78))) {
            // line 79
            echo "          <nav class=\"navbar navbar-expand-lg py-0\">
          ";
            // line 80
            if (($context["container_navbar"] ?? null)) {
                // line 81
                echo "          <div class=\"container\">
          ";
            }
            // line 83
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
              ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
              ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 85)) {
                // line 86
                echo "                <div class=\"form-inline navbar-form ms-auto\">
                  ";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 90
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 91
                echo "          </div>
          ";
            }
            // line 93
            echo "          </nav>
        ";
        }
        // line 95
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 95, $this->source), "html", null, true);
        echo ">
          ";
        // line 96
        if (($context["container_navbar"] ?? null)) {
            // line 97
            echo "          <div class=\"container\">
          ";
        }
        // line 99
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
            ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 100) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 100))) {
            // line 101
            echo "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 101, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 102, $this->source), "html", null, true);
            echo " container\" id=\"CollapsingNavbar\">
                ";
            // line 103
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 104
                echo "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 109
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
                ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 110)) {
                // line 111
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 115
            echo "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 116
                echo "                  </div>
                ";
            }
            // line 118
            echo "\t            </div>
            ";
        }
        // line 120
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 121
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 123
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 124
            echo "          </div>
          ";
        }
        // line 126
        echo "        </nav>
      ";
    }

    // line 137
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 139, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 146
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 147, $this->source), "html", null, true);
        echo " container-main\">
          ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 150, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a href=\"#main-content\" id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 156
        if (($context["sidebar_first_exists"] ?? null)) {
            // line 157
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 157, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 163
        echo "            ";
        if (($context["sidebar_second_exists"] ?? null)) {
            // line 164
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 164, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 170
        echo "          </div>
        </div>
      ";
    }

    // line 184
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 185, $this->source), "html", null, true);
        echo "\">
          ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_zero", [], "any", false, false, true, 186)) {
            // line 187
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_zero", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 191
        echo "          ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 191) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 191)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 191)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 191))) {
            // line 192
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
              ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
              ";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 199
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 199)) {
            // line 200
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 204
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/educationusa/templates/custom/menu/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 204,  386 => 201,  383 => 200,  380 => 199,  374 => 196,  370 => 195,  366 => 194,  362 => 193,  359 => 192,  356 => 191,  350 => 188,  347 => 187,  345 => 186,  340 => 185,  336 => 184,  330 => 170,  323 => 166,  317 => 164,  314 => 163,  307 => 159,  301 => 157,  299 => 156,  293 => 153,  287 => 150,  282 => 148,  277 => 147,  273 => 146,  265 => 140,  261 => 139,  258 => 138,  254 => 137,  249 => 126,  245 => 124,  242 => 123,  238 => 121,  235 => 120,  231 => 118,  227 => 116,  224 => 115,  218 => 112,  215 => 111,  213 => 110,  208 => 109,  201 => 104,  199 => 103,  195 => 102,  190 => 101,  188 => 100,  183 => 99,  179 => 97,  177 => 96,  172 => 95,  168 => 93,  164 => 91,  161 => 90,  155 => 87,  152 => 86,  150 => 85,  146 => 84,  141 => 83,  137 => 81,  135 => 80,  132 => 79,  129 => 78,  125 => 77,  120 => 206,  118 => 184,  115 => 183,  111 => 181,  107 => 179,  103 => 178,  98 => 177,  95 => 175,  93 => 174,  90 => 173,  88 => 146,  85 => 145,  82 => 144,  79 => 137,  76 => 136,  69 => 132,  65 => 131,  62 => 130,  60 => 129,  57 => 128,  55 => 77,  52 => 76,  50 => 75,  47 => 73,  45 => 72,  43 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/educationusa/templates/custom/menu/page--front.html.twig", "/app/web/themes/custom/educationusa/templates/custom/menu/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 77, "if" => 129);
        static $filters = array("trim" => 71, "striptags" => 71, "render" => 71, "escape" => 131);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['trim', 'striptags', 'render', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
