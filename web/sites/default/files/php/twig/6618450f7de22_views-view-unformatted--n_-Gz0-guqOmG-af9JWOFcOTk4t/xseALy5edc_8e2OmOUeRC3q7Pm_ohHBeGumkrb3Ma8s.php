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

/* themes/custom/educationusa/templates/custom/views/views-view-unformatted--navigation-panel.html.twig */
class __TwigTemplate_6976f95065b630bbdf6b322a1907f2da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "\t<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        echo "<section class=\" \">
    <div class=\"pb-3 pt-4 nav-panel-color\">
        <div class=\"row three-col-expander\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "                <div class=\"col-sm-3 col-6 col-md-6 col-lg-3 mt-2 nav-items\">
                    <a href=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 26), "field_nav_link", [], "any", false, false, true, 26)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "url", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\" style=\"text-decoration: none; color: inherit;\">
                        <div class=\"card mb-3 border-0\" id=\"CardOne-Navigation\" style=\"margin: 10px;\"> 
                            <div class=\"row g-0\">
                                <div class=\"col-md-4\"><img class=\"img-fluid rounded-3\" src=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = $context["row"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 29), "field_nav_image", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "uri", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 29), "field_nav_image", [], "any", false, false, true, 29)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "alt", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\"></div>
                                <div class=\"col-md-8\">
                                    <div class=\"ms-3\">
                                        <h5 class=\"card-title\">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 32), "title", [], "any", false, false, true, 32)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "value", [], "any", false, false, true, 32), 32, $this->source));
            echo "</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/educationusa/templates/custom/views/views-view-unformatted--navigation-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 40,  73 => 32,  65 => 29,  59 => 26,  56 => 25,  52 => 24,  47 => 21,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/educationusa/templates/custom/views/views-view-unformatted--navigation-panel.html.twig", "/app/web/themes/custom/educationusa/templates/custom/views/views-view-unformatted--navigation-panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 24);
        static $filters = array("escape" => 19, "raw" => 32);
        static $functions = array("file_url" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
                ['file_url']
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
