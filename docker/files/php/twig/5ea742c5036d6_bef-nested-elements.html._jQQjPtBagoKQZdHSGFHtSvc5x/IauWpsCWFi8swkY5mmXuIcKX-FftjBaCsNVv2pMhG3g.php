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

/* @better_exposed_filters/bef-nested-elements.html.twig */
class __TwigTemplate_9ef1d60e102131c211dab64caad8ae214a96aa4b18732cd93cad5a62499f0f0a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 15, "set" => 16, "if" => 17, "for" => 21];
        $filters = ["abs" => 16, "escape" => 31];
        $functions = ["range" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set', 'if', 'for'],
                ['abs', 'escape'],
                ['range']
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
        // line 15
        ob_start();
        // line 16
        echo "  ";
        $context["delta"] = abs((($context["current_nesting_level"] ?? null) - ($context["new_nesting_level"] ?? null)));
        // line 17
        echo "  ";
        if ($this->getAttribute(($context["loop"] ?? null), "first", [])) {
            // line 18
            echo "    <ul>
  ";
        } else {
            // line 20
            echo "    ";
            if (($context["delta"] ?? null)) {
                // line 21
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["delta"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 22
                    echo "        ";
                    if ((($context["new_nesting_level"] ?? null) > ($context["current_nesting_level"] ?? null))) {
                        // line 23
                        echo "          <ul>
        ";
                    } else {
                        // line 25
                        echo "          </ul>
        ";
                    }
                    // line 27
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "
  <li>";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), "html", null, true);
        echo "

  ";
        // line 33
        if ($this->getAttribute(($context["loop"] ?? null), "last", [])) {
            // line 34
            echo "    ";
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["new_nesting_level"] ?? null), 0));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "      </li></ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@better_exposed_filters/bef-nested-elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  115 => 36,  110 => 35,  108 => 34,  106 => 33,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  86 => 27,  82 => 25,  78 => 23,  75 => 22,  70 => 21,  67 => 20,  63 => 18,  60 => 17,  57 => 16,  55 => 15,);
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
  Themes hierarchical taxonomy terms as nested <ul> elements.

  This template is intended to be called from within another template to provide
  the \"scaffolding\" of nested lists while the calling template provides the
  actual filter element via the 'item' variable.

  Available variables:
    - current_nesting_level: the nesting level of the most recently printe item.
    - new_nesting_level: the nesting level of the item to print.
    - item: The item to print.
    - loop: The loop variable from the iterator that calls this template.
      Requires the loop.first and loop.last elements.
#}
{% spaceless %}
  {% set delta = (current_nesting_level - new_nesting_level) | abs %}
  {% if loop.first %}
    <ul>
  {% else %}
    {% if delta %}
      {% for i in 1..delta %}
        {% if new_nesting_level > current_nesting_level  %}
          <ul>
        {% else %}
          </ul>
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endif %}

  <li>{{ item }}

  {% if loop.last %}
    {# Close any remaining <li> tags #}
    {% for i in new_nesting_level..0 %}
      </li></ul>
    {% endfor %}
  {% endif %}
{% endspaceless %}
", "@better_exposed_filters/bef-nested-elements.html.twig", "/var/www/html/modules/contrib/better_exposed_filters/templates/bef-nested-elements.html.twig");
    }
}
