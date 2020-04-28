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

/* modules/contrib/kabitat/dsu_c_sideimagetext/templates/paragraph--c-sideimagetext.html.twig */
class __TwigTemplate_e18cf48c20f624cf34020b17db655dee4151666bc23321e181bc5e89ca9896cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "block" => 46, "if" => 55];
        $filters = ["clean_class" => 43, "escape" => 47, "render" => 49];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'render'],
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
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 43
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 44
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 46
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 47
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " style=\"background-image: url('";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_background_image_img_url"] ?? null)), "html", null, true);
        echo "');\">
        ";
        // line 48
        $context["content_classes"] = [0 => ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 49
($context["content"] ?? null), "field_c_image2", []))) && $this->getAttribute(($context["content"] ?? null), "field_c_title", []))) ? ("col-sm-6") : ("")), 1 => ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 50
($context["content"] ?? null), "field_c_image2", []))) && twig_test_empty($this->getAttribute(($context["content"] ?? null), "field_c_title", [])))) ? ("col-sm-12") : ("")), 2 => ((($this->getAttribute(        // line 51
($context["content"] ?? null), "field_c_title", []) && twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_c_image2", [])))))) ? ("col-sm-12") : ("")), 3 => (((twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 52
($context["content"] ?? null), "field_c_image2", [])))) && twig_test_empty($this->getAttribute(($context["content"] ?? null), "field_c_title", [])))) ? ("col-sm-12") : (""))];
        // line 54
        echo "        ";
        $context["horizontal_align"] = "";
        // line 55
        echo "        ";
        if (($this->getAttribute(($context["content"] ?? null), "field_horizontal_aligment", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_horizontal_aligment", []), 0, [], "array"), "#markup", [], "array"))) {
            // line 56
            echo "            ";
            $context["horizontal_align"] = ("horizontal-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_horizontal_aligment", []), 0, [], "array"), "#markup", [], "array")));
            // line 57
            echo "        ";
        }
        // line 58
        echo "
        ";
        // line 59
        $context["position_class"] = [0 => ("image-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(        // line 60
($context["content"] ?? null), "field_image_position", []), 0, [], "array"), "#markup", [], "array")))];
        // line 62
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "    </div>
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        // line 63
        echo "            ";
        $context["vertical_align"] = ("vertical-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vertical_alignment", []), 0, [], "array"), "#markup", [], "array")));
        // line 64
        echo "            <div class=\"wrapper-paragraph-section\">
                ";
        // line 65
        if (((( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_c_image2", []))) || $this->getAttribute(($context["content"] ?? null), "field_c_title", [])) || $this->getAttribute(($context["content"] ?? null), "field_c_sideimagetext_subheading", [])) || $this->getAttribute(($context["content"] ?? null), "field_c_sideimagetext_summary", []))) {
            // line 66
            echo "                    <div class=\"inner-wrapper-c-sideimagetext\">
                        ";
            // line 67
            if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_c_image2", [])))) {
                // line 68
                echo "                            <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null), 1 => "wrapper-img-section", 2 => ($context["position_class"] ?? null)], "method")), "html", null, true);
                echo ">
                                ";
                // line 69
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_c_image2", [])), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 72
            echo "                        ";
            if ((($this->getAttribute(($context["content"] ?? null), "field_c_title", []) || $this->getAttribute(($context["content"] ?? null), "field_c_sideimagetext_subheading", [])) || $this->getAttribute(($context["content"] ?? null), "field_c_sideimagetext_summary", []))) {
                // line 73
                echo "                            <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null), 1 => "wrapper-description-section"], "method"), "removeClass", [0 => "wrapper-img-section", 1 => ($context["position_class"] ?? null)], "method")), "html", null, true);
                echo ">
                                ";
                // line 74
                $context["button_color"] = "none";
                // line 75
                echo "                                ";
                $context["font_style"] = "none";
                // line 76
                echo "                                ";
                if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", [], "any", false, true), 0, [], "array", true, true)) {
                    // line 77
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_color", [], "any", false, true), 0, [], "array", false, true), "#options", [], "array", true, true)) {
                        // line 78
                        echo "                                        ";
                        $context["button_color"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_color", []), 0, [], "array"), "#options", [], "array"), "entity", []), "field_color_code", []), "value", []);
                        // line 79
                        echo "                                    ";
                    }
                    // line 80
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_color", [], "any", false, true), 0, [], "array", false, true), "#options", [], "array", true, true)) {
                        // line 81
                        echo "                                        ";
                        $context["font_style"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_color", []), 0, [], "array"), "#options", [], "array"), "entity", []), "field_font_color", []), "value", []);
                        // line 82
                        echo "                                    ";
                    }
                    // line 83
                    echo "
                                    ";
                    // line 84
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vertical_alignment", []), 0, [], "array"), "#markup", [], "array") == "above") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vertical_alignment", []), 0, [], "array"), "#markup", [], "array") == "top_center"))) {
                        // line 85
                        echo "                                        <div class=\"dsu_btn ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["horizontal_align"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vertical_align"] ?? null)), "html", null, true);
                        echo "\">
                                            <div class=\"btn image_cta_link\" style=\"background:";
                        // line 86
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_color"] ?? null)), "html", null, true);
                        echo "\">
                                                <a href=\"";
                        // line 87
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                        echo "\" style=\"color:";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_style"] ?? null)), "html", null, true);
                        echo "\">
                                                    ";
                        // line 88
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                        echo "
                                                </a>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 93
                    echo "                                ";
                }
                // line 94
                echo "
                                ";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_c_title", [])), "html", null, true);
                echo "
                                ";
                // line 96
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_c_sideimagetext_subheading", [])), "html", null, true);
                echo "
                                ";
                // line 97
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_c_sideimagetext_summary", [])), "html", null, true);
                echo "

                                ";
                // line 99
                if ((($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", [], "any", false, true), 0, [], "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vertical_alignment", []), 0, [], "array"), "#markup", [], "array") == "below")) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vertical_alignment", []), 0, [], "array"), "#markup", [], "array") == "bottom_center"))) {
                    // line 100
                    echo "                                    <div class=\"dsu_btn ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["horizontal_align"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vertical_align"] ?? null)), "html", null, true);
                    echo "\">
                                        <div class=\"btn image_cta_link\" style=\"background:";
                    // line 101
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_color"] ?? null)), "html", null, true);
                    echo "\">
                                            <a href=\"";
                    // line 102
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                    echo "\" style=\"color:";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_style"] ?? null)), "html", null, true);
                    echo "\">
                                                ";
                    // line 103
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_c_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                    echo "
                                            </a>
                                        </div>
                                    </div>
                                ";
                }
                // line 108
                echo "                            </div>
                        ";
            }
            // line 110
            echo "                    </div>
                ";
        }
        // line 112
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/kabitat/dsu_c_sideimagetext/templates/paragraph--c-sideimagetext.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 112,  251 => 110,  247 => 108,  239 => 103,  231 => 102,  227 => 101,  220 => 100,  218 => 99,  213 => 97,  209 => 96,  205 => 95,  202 => 94,  199 => 93,  191 => 88,  183 => 87,  179 => 86,  172 => 85,  170 => 84,  167 => 83,  164 => 82,  161 => 81,  158 => 80,  155 => 79,  152 => 78,  149 => 77,  146 => 76,  143 => 75,  141 => 74,  136 => 73,  133 => 72,  127 => 69,  122 => 68,  120 => 67,  117 => 66,  115 => 65,  112 => 64,  109 => 63,  106 => 62,  101 => 114,  98 => 62,  96 => 60,  95 => 59,  92 => 58,  89 => 57,  86 => 56,  83 => 55,  80 => 54,  78 => 52,  77 => 51,  76 => 50,  75 => 49,  74 => 48,  67 => 47,  61 => 46,  59 => 44,  58 => 43,  57 => 41,);
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
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{% set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
] %}
{% block paragraph %}
    <div{{attributes.addClass(classes)}} style=\"background-image: url('{{ field_background_image_img_url }}');\">
        {% set content_classes = [
            content.field_c_image2|render and content.field_c_title ? 'col-sm-6',
            content.field_c_image2|render and content.field_c_title is empty ? 'col-sm-12',
            content.field_c_title and content.field_c_image2|render is empty ? 'col-sm-12',
            content.field_c_image2|render is empty and content.field_c_title is empty ? 'col-sm-12'
        ] %}
        {% set horizontal_align = '' %}
        {% if content.field_horizontal_aligment and content.field_horizontal_aligment[0]['#markup'] %}
            {% set horizontal_align = 'horizontal-' ~ content.field_horizontal_aligment[0]['#markup']%}
        {% endif %}

        {% set position_class = [
            'image-' ~  content.field_image_position[0]['#markup']
        ] %}
        {% block content %}
            {% set vertical_align = 'vertical-' ~ content.field_vertical_alignment[0]['#markup'] %}
            <div class=\"wrapper-paragraph-section\">
                {% if content.field_c_image2|render is not empty or content.field_c_title or content.field_c_sideimagetext_subheading or content.field_c_sideimagetext_summary %}
                    <div class=\"inner-wrapper-c-sideimagetext\">
                        {% if content.field_c_image2|render is not empty %}
                            <div {{ content_attributes.addClass(content_classes, 'wrapper-img-section',position_class) }}>
                                {{ content.field_c_image2 }}
                            </div>
                        {% endif %}
                        {% if content.field_c_title or content.field_c_sideimagetext_subheading or content.field_c_sideimagetext_summary %}
                            <div {{ content_attributes.addClass(content_classes, 'wrapper-description-section').removeClass('wrapper-img-section',position_class) }}>
                                {% set button_color = 'none' %}
                                {% set font_style = 'none' %}
                                {% if content.field_c_link[0] is defined %}
                                    {% if content.field_button_color[0]['#options'] is defined %}
                                        {% set button_color =  content.field_button_color[0]['#options'].entity.field_color_code.value %}
                                    {% endif %}
                                    {% if content.field_button_color[0]['#options'] is defined %}
                                        {% set font_style = content.field_button_color[0]['#options'].entity.field_font_color.value %}
                                    {% endif %}

                                    {% if content.field_vertical_alignment[0]['#markup'] == 'above' or content.field_vertical_alignment[0]['#markup'] == 'top_center' %}
                                        <div class=\"dsu_btn {{horizontal_align}} {{ vertical_align }}\">
                                            <div class=\"btn image_cta_link\" style=\"background:{{ button_color }}\">
                                                <a href=\"{{ content.field_c_link[0]['#url']}}\" title=\"{{ content.field_c_link[0]['#title']}}\" style=\"color:{{ font_style }}\">
                                                    {{ content.field_c_link[0]['#title']}}
                                                </a>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endif %}

                                {{ content.field_c_title }}
                                {{ content.field_c_sideimagetext_subheading }}
                                {{ content.field_c_sideimagetext_summary }}

                                {% if content.field_c_link[0] is defined and content.field_vertical_alignment[0]['#markup'] == 'below' or content.field_vertical_alignment[0]['#markup'] == 'bottom_center' %}
                                    <div class=\"dsu_btn {{horizontal_align}} {{ vertical_align }}\">
                                        <div class=\"btn image_cta_link\" style=\"background:{{ button_color }}\">
                                            <a href=\"{{ content.field_c_link[0]['#url']}}\" title=\"{{ content.field_c_link[0]['#title']}}\" style=\"color:{{ font_style }}\">
                                                {{ content.field_c_link[0]['#title']}}
                                            </a>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock paragraph %}
", "modules/contrib/kabitat/dsu_c_sideimagetext/templates/paragraph--c-sideimagetext.html.twig", "/var/www/html/modules/contrib/kabitat/dsu_c_sideimagetext/templates/paragraph--c-sideimagetext.html.twig");
    }
}
