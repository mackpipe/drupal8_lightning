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

/* __string_template__988d4c569c8dc329d5dd77c3c265066807e6e917e1166137c453a6a90341da7a */
class __TwigTemplate_938017f81dc31b83df4898b241593e3571d6d647229581e51ff36602ff33d3e8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<div class=\"item\">
\t<div class=\"imagen\">
\t\t";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_propiedad_imagen"] ?? null)), "html", null, true);
        echo "
\t</div>
\t<div class=\"detalle\">
\t\t<div class=\"titulo\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</div>
\t\t<div class=\"subtitulo\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_propiedad_barrio"] ?? null)), "html", null, true);
        echo "</div>
\t\t<div class=\"precio\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_propiedad_precio"] ?? null)), "html", null, true);
        echo " </div>
\t\t<div class=\"carateristicas\">
\t\t\t<div class=\"habitaciones\">";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_propiedad_habitaciones2"] ?? null)), "html", null, true);
        echo "</div>
\t\t\t<div class=\"banos\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_propiedad_banos2"] ?? null)), "html", null, true);
        echo "</div>
\t\t\t<div class=\"parqueaderos\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_propiedad_parqueaderos2"] ?? null)), "html", null, true);
        echo "</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__988d4c569c8dc329d5dd77c3c265066807e6e917e1166137c453a6a90341da7a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  82 => 11,  78 => 10,  73 => 8,  69 => 7,  65 => 6,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"item\">
\t<div class=\"imagen\">
\t\t{{ field_propiedad_imagen }}
\t</div>
\t<div class=\"detalle\">
\t\t<div class=\"titulo\">{{ title }}</div>
\t\t<div class=\"subtitulo\">{{ field_propiedad_barrio }}</div>
\t\t<div class=\"precio\">{{ field_propiedad_precio }} </div>
\t\t<div class=\"carateristicas\">
\t\t\t<div class=\"habitaciones\">{{ field_propiedad_habitaciones2 }}</div>
\t\t\t<div class=\"banos\">{{ field_propiedad_banos2 }}</div>
\t\t\t<div class=\"parqueaderos\">{{ field_propiedad_parqueaderos2 }}</div>
\t\t</div>
\t</div>
</div>", "__string_template__988d4c569c8dc329d5dd77c3c265066807e6e917e1166137c453a6a90341da7a", "");
    }
}
