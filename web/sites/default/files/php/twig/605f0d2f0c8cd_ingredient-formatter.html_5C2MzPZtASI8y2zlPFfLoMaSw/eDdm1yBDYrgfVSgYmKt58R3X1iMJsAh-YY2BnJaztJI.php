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

/* modules/contrib/recipe/modules/ingredient/templates/ingredient-formatter.html.twig */
class __TwigTemplate_b4cf7e91829344990b067ab0fb2e35e1a0849e9d07420d2942affaa35ec172ef extends \Twig\Template
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
        // line 30
        echo "<span class=\"quantity-unit\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["quantity"] ?? null), 30, $this->source));
        if (($context["unit_name"] ?? null)) {
            if (($context["unit_display"] ?? null)) {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unit_name"] ?? null), 30, $this->source), "html", null, true);
            } else {
                echo " <abbr title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unit_name"] ?? null), 30, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unit_abbreviation"] ?? null), 30, $this->source), "html", null, true);
                echo "</abbr>";
            }
        }
        echo "</span> <span class=\"ingredient-name\">";
        if (($context["url"] ?? null)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ingredient"] ?? null), "label", [], "any", false, false, true, 30), 30, $this->source), $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 30, $this->source)), "html", null, true);
        } else {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ingredient"] ?? null), "label", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        }
        if ((twig_length_filter($this->env, ($context["note"] ?? null)) > 0)) {
            echo " (";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["note"] ?? null), 30, $this->source), "html", null, true);
            echo ")";
        }
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/recipe/modules/ingredient/templates/ingredient-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/recipe/modules/ingredient/templates/ingredient-formatter.html.twig", "/Applications/MAMP/htdocs/blog_food/web/modules/contrib/recipe/modules/ingredient/templates/ingredient-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30);
        static $filters = array("raw" => 30, "escape" => 30, "length" => 30);
        static $functions = array("link" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape', 'length'],
                ['link']
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
