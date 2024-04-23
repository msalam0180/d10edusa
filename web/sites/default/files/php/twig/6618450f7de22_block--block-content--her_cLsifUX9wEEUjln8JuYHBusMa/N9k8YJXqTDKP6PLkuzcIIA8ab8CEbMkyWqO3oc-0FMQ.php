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

/* themes/custom/educationusa/templates/custom/block/block--block-content--hero-banner.html.twig */
class __TwigTemplate_fdc699b2b4094dd17e6c49f679930c36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 35
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 35), 35, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null), 36, $this->source)))];
        // line 39
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
\t";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        echo "
\t";
        // line 41
        if (($context["label"] ?? null)) {
            // line 42
            echo "\t\t<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 42, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 42, $this->source), "html", null, true);
            echo "</h2>
\t";
        }
        // line 44
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "
\t";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "</div>
";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "\t\t<div class=\" position-relative\">
\t\t\t<img class=\"img-fluid\" src=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getTargetEntity($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_banner_image", [], "any", false, false, true, 47), 47, $this->source)), "uri", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getRawValues($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_banner_image", [], "any", false, false, true, 47), 47, $this->source), "alt"), "html", null, true);
        echo "\">
\t\t\t";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_banner_overlay_text", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48))) {
            // line 49
            echo "\t\t\t\t<div class=\"position-absolute py-3 w-100 text-left\" style=\" \">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1 class=\"h1-responsive \">
\t\t\t\t\t\t\t<strong>";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_banner_overlay_text", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 57
        echo "\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/educationusa/templates/custom/block/block--block-content--hero-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 57,  95 => 52,  90 => 49,  88 => 48,  82 => 47,  79 => 46,  75 => 45,  70 => 59,  68 => 45,  63 => 44,  55 => 42,  53 => 41,  49 => 40,  44 => 39,  42 => 36,  41 => 35,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/educationusa/templates/custom/block/block--block-content--hero-banner.html.twig", "/app/web/themes/custom/educationusa/templates/custom/block/block--block-content--hero-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "if" => 41, "block" => 45);
        static $filters = array("clean_class" => 35, "escape" => 39, "field_target_entity" => 47, "field_raw" => 47);
        static $functions = array("file_url" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'field_target_entity', 'field_raw'],
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
