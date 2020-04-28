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

/* __string_template__7529b66ed4911fcb8f1b154530702faf3164aa3592a3158c88be723cdf27dda2 */
class __TwigTemplate_0d96f521497251b30b2fe71a9d26dfb90a487c669715503955bb4b0fee46558a extends \Twig\Template
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
\t<div class=\"media\">
\t\t<div class=\"titulo\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
        echo "</div>
\t\t<div class=\"imagen\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_tipo_servicio_imagen"] ?? null)), "html", null, true);
        echo " </div>
\t</div>
\t<div class=\"info\">
\t\t<div class=\"texto\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description__value"] ?? null)), "html", null, true);
        echo "</div>
\t\t<div class=\"boton\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_tipo_servicio_url"] ?? null)), "html", null, true);
        echo " </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__7529b66ed4911fcb8f1b154530702faf3164aa3592a3158c88be723cdf27dda2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  69 => 7,  63 => 4,  59 => 3,  55 => 1,);
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
\t<div class=\"media\">
\t\t<div class=\"titulo\">{{ name }}</div>
\t\t<div class=\"imagen\">{{ field_tipo_servicio_imagen }} </div>
\t</div>
\t<div class=\"info\">
\t\t<div class=\"texto\">{{ description__value }}</div>
\t\t<div class=\"boton\">{{ field_tipo_servicio_url }} </div>
\t</div>
</div>", "__string_template__7529b66ed4911fcb8f1b154530702faf3164aa3592a3158c88be723cdf27dda2", "");
    }
}
