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

/* themes/custom/bootstrap_kabitat/templates/system/page--front.html.twig */
class __TwigTemplate_aaf1defeea70ffda5c08520a4abf4137493b226a34c938db4bb9732246264acd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'fix_left' => [$this, 'block_fix_left'],
            'content' => [$this, 'block_content'],
            'fix_right' => [$this, 'block_fix_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "include" => 56, "block" => 84, "if" => 99];
        $filters = ["escape" => 85];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'block', 'if'],
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 55
        echo "
";
        // line 56
        $this->loadTemplate("@bootstrap_kabitat/includes/header.html.twig", "themes/custom/bootstrap_kabitat/templates/system/page--front.html.twig", 56)->display($context);
        // line 57
        echo "<!--
<div class=\"loading\">
    <div class=\"loading_logo_wrapper\">
        <svg id=\"loading_logo\" width=\"49px\" height=\"48px\" viewBox=\"0 0 49 48\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <title>logo_kabitat</title>
            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                <g id=\"01_index\" transform=\"translate(-35.000000, -31.000000)\">
                    <rect fill=\"\" x=\"0\" y=\"0\" width=\"1440\" height=\"6783\"></rect>
                    <g id=\"HEADER\" transform=\"translate(35.000000, -1.000000)\" fill=\"#EDAB1F\">
                        <g id=\"logo_kabitat\" transform=\"translate(0.000000, 32.000000)\">
                            <path d=\"M18.6584771,-7.10542736e-14 C19.2755681,-7.10542736e-14 19.7778108,0.490409334 19.7778108,1.09299441 L19.7778108,1.09299441 L19.7778108,8.72669747 C19.7778108,9.17396228 20.1491731,9.53781437 20.6059429,9.53781437 L20.6059429,9.53781437 L24.9870851,9.53781437 C25.096395,9.52170708 25.2631291,9.49179355 25.307436,9.47396049 C25.3502855,9.45670268 25.4861214,9.36523631 25.587561,9.29045248 L25.587561,9.29045248 L33.8455622,0.351771622 C33.9504997,0.24160929 34.0778822,0.152731587 34.21605,0.0929045248 C34.3571327,0.0322145721 34.51279,-7.10542736e-14 34.6672814,-7.10542736e-14 L34.6672814,-7.10542736e-14 L47.8806663,-7.10542736e-14 C48.4977573,-7.10542736e-14 49,0.490409334 49,1.09299441 L49,1.09299441 L49,8.72669747 C49,9.33244647 48.4977573,9.82544448 47.8806663,9.82544448 L47.8806663,9.82544448 L39.5206425,9.82544448 L39.2020405,9.88613443 L38.9388221,10.0638898 L34.6766092,20.1778273 C34.597906,20.3317094 34.4562403,20.534201 34.2032243,20.68118 C33.9050268,20.8549086 33.6091612,20.8554838 33.4604997,20.8411023 L33.4604997,20.8411023 L24.4763891,19.3727506 C21.9159131,19.3747641 19.8130815,21.44944 19.8130815,23.9998562 C19.8130815,26.5502723 21.9159131,28.6249483 24.5002915,28.6249483 L24.5002915,28.6249483 L33.4511719,27.1600482 C33.6135336,27.1473925 33.9079417,27.1565966 34.2035158,27.3300376 C34.4504105,27.4744279 34.5935336,27.6697287 34.6699048,27.8083664 L34.6699048,27.8083664 L38.9388221,37.9326586 L39.2014575,38.1075377 L39.5483343,38.1739803 L47.8806663,38.1713916 C48.4977573,38.1713916 49,38.6643896 49,39.2701386 L49,39.2701386 L49,46.9038417 C49,47.5081525 48.4977573,48 47.8806663,48 L47.8806663,48 L34.6457109,48 C34.5005473,48 34.3513028,47.9689359 34.215467,47.9096841 C34.0746758,47.8484189 33.9458358,47.7549391 33.8438132,47.6401747 L33.8438132,47.6401747 L25.5671565,38.6911392 C25.4849554,38.6310245 25.3497026,38.5375447 25.3071446,38.5199993 C25.2637121,38.5021662 25.0978525,38.4739785 24.968721,38.4578712 L24.968721,38.4578712 L20.6059429,38.4590217 C20.1491731,38.4590217 19.7778108,38.8231614 19.7778108,39.2701386 L19.7778108,39.2701386 L19.7778108,46.9038417 C19.7778108,47.5081525 19.2755681,48 18.6584771,48 L18.6584771,48 L10.866865,48 C10.2497739,48 9.74782272,47.5081525 9.74782272,46.9038417 L9.74782272,46.9038417 L9.74782272,39.2701386 C9.74782272,38.8231614 9.37616895,38.4590217 8.91969066,38.4590217 L8.91969066,38.4590217 L1.11933373,38.4590217 C0.502242713,38.4590217 -4.26325641e-14,37.9674618 -4.26325641e-14,37.3634386 L-4.26325641e-14,37.3634386 L-4.26325641e-14,29.720819 C-4.26325641e-14,29.1165082 0.502242713,28.6249483 1.11933373,28.6249483 L1.11933373,28.6249483 L8.91969066,28.6249483 C9.37616895,28.6249483 9.74782272,28.2610962 9.74782272,27.8138314 L9.74782272,27.8138314 L9.74782272,20.1916336 C9.74782272,19.7412048 9.37616895,19.3747641 8.91969066,19.3747641 L8.91969066,19.3747641 L1.11933373,19.3747641 C0.502242713,19.3747641 -4.26325641e-14,18.8791774 -4.26325641e-14,18.2702644 L-4.26325641e-14,18.2702644 L-4.26325641e-14,10.6365614 C-4.26325641e-14,10.0308124 0.502242713,9.53781437 1.11933373,9.53781437 L1.11933373,9.53781437 L8.91852469,9.53781437 C9.37558596,9.53781437 9.74782272,9.17079835 9.74782272,8.71950671 L9.74782272,8.71950671 L9.74782272,1.09299441 C9.74782272,0.490409334 10.2497739,-7.10542736e-14 10.866865,-7.10542736e-14 L10.866865,-7.10542736e-14 Z M24.5013409,20.6823593 C26.3555289,20.6823593 27.863423,22.1705575 27.863423,23.9998849 C27.863423,25.8292124 26.3555289,27.3176982 24.5013409,27.3176982 C22.6474444,27.3176982 21.1392588,25.8292124 21.1392588,23.9998849 C21.1392588,22.1705575 22.6474444,20.6823593 24.5013409,20.6823593 Z\"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>-->

<div class=\"o_lines\">
    <div class=\"o_line -v -l\"></div>
    <div class=\"o_line -v -c\"></div>
    <div class=\"o_line -v -r\"></div>
    <div class=\"o_line -h -t\"></div>
</div>

";
        // line 84
        $this->displayBlock('main', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->loadTemplate("@bootstrap_kabitat/includes/footer.html.twig", "themes/custom/bootstrap_kabitat/templates/system/page--front.html.twig", 141)->display($context);
    }

    // line 84
    public function block_main($context, array $blocks = [])
    {
        // line 85
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\" id=\"main-top\">
    <div class=\"row\">

      ";
        // line 89
        echo "      ";
        // line 90
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 91
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 92
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 93
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 94
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 97
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 99
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 100
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 103
            echo "        ";
        }
        // line 104
        echo "
        ";
        // line 106
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 107
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 110
            echo "        ";
        }
        // line 111
        echo "
        ";
        // line 112
        if ($this->getAttribute(($context["page"] ?? null), "fix_left", [])) {
            // line 113
            echo "          ";
            $this->displayBlock('fix_left', $context, $blocks);
            // line 119
            echo "        ";
        }
        // line 120
        echo "
        ";
        // line 122
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "
        ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "fix_right", [])) {
            // line 128
            echo "          ";
            $this->displayBlock('fix_right', $context, $blocks);
            // line 134
            echo "        ";
        }
        // line 135
        echo "
      </section>
    </div>
  </div>
";
    }

    // line 100
    public function block_highlighted($context, array $blocks = [])
    {
        // line 101
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 107
    public function block_help($context, array $blocks = [])
    {
        // line 108
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 113
    public function block_fix_left($context, array $blocks = [])
    {
        // line 114
        echo "            <div  class=\"fix-left\">
              <div class=\"fix-left-header\"></div>
              ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fix_left", [])), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 122
    public function block_content($context, array $blocks = [])
    {
        // line 123
        echo "          <a id=\"main-content\"></a>
          ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 128
    public function block_fix_right($context, array $blocks = [])
    {
        // line 129
        echo "            <div  class=\"fix-right\">
            <div class=\"fix-left-header\"></div>
              ";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fix_right", [])), "html", null, true);
        echo "
            </div>
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_kabitat/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 131,  234 => 129,  231 => 128,  225 => 124,  222 => 123,  219 => 122,  212 => 116,  208 => 114,  205 => 113,  198 => 108,  195 => 107,  188 => 101,  185 => 100,  177 => 135,  174 => 134,  171 => 128,  169 => 127,  166 => 126,  163 => 122,  160 => 120,  157 => 119,  154 => 113,  152 => 112,  149 => 111,  146 => 110,  143 => 107,  140 => 106,  137 => 104,  134 => 103,  131 => 100,  128 => 99,  123 => 97,  121 => 94,  120 => 93,  119 => 92,  118 => 91,  117 => 90,  115 => 89,  108 => 85,  105 => 84,  101 => 141,  98 => 140,  96 => 84,  68 => 57,  66 => 56,  63 => 55,  61 => 54,);
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
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}

{% include '@bootstrap_kabitat/includes/header.html.twig' %}
<!--
<div class=\"loading\">
    <div class=\"loading_logo_wrapper\">
        <svg id=\"loading_logo\" width=\"49px\" height=\"48px\" viewBox=\"0 0 49 48\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <title>logo_kabitat</title>
            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                <g id=\"01_index\" transform=\"translate(-35.000000, -31.000000)\">
                    <rect fill=\"\" x=\"0\" y=\"0\" width=\"1440\" height=\"6783\"></rect>
                    <g id=\"HEADER\" transform=\"translate(35.000000, -1.000000)\" fill=\"#EDAB1F\">
                        <g id=\"logo_kabitat\" transform=\"translate(0.000000, 32.000000)\">
                            <path d=\"M18.6584771,-7.10542736e-14 C19.2755681,-7.10542736e-14 19.7778108,0.490409334 19.7778108,1.09299441 L19.7778108,1.09299441 L19.7778108,8.72669747 C19.7778108,9.17396228 20.1491731,9.53781437 20.6059429,9.53781437 L20.6059429,9.53781437 L24.9870851,9.53781437 C25.096395,9.52170708 25.2631291,9.49179355 25.307436,9.47396049 C25.3502855,9.45670268 25.4861214,9.36523631 25.587561,9.29045248 L25.587561,9.29045248 L33.8455622,0.351771622 C33.9504997,0.24160929 34.0778822,0.152731587 34.21605,0.0929045248 C34.3571327,0.0322145721 34.51279,-7.10542736e-14 34.6672814,-7.10542736e-14 L34.6672814,-7.10542736e-14 L47.8806663,-7.10542736e-14 C48.4977573,-7.10542736e-14 49,0.490409334 49,1.09299441 L49,1.09299441 L49,8.72669747 C49,9.33244647 48.4977573,9.82544448 47.8806663,9.82544448 L47.8806663,9.82544448 L39.5206425,9.82544448 L39.2020405,9.88613443 L38.9388221,10.0638898 L34.6766092,20.1778273 C34.597906,20.3317094 34.4562403,20.534201 34.2032243,20.68118 C33.9050268,20.8549086 33.6091612,20.8554838 33.4604997,20.8411023 L33.4604997,20.8411023 L24.4763891,19.3727506 C21.9159131,19.3747641 19.8130815,21.44944 19.8130815,23.9998562 C19.8130815,26.5502723 21.9159131,28.6249483 24.5002915,28.6249483 L24.5002915,28.6249483 L33.4511719,27.1600482 C33.6135336,27.1473925 33.9079417,27.1565966 34.2035158,27.3300376 C34.4504105,27.4744279 34.5935336,27.6697287 34.6699048,27.8083664 L34.6699048,27.8083664 L38.9388221,37.9326586 L39.2014575,38.1075377 L39.5483343,38.1739803 L47.8806663,38.1713916 C48.4977573,38.1713916 49,38.6643896 49,39.2701386 L49,39.2701386 L49,46.9038417 C49,47.5081525 48.4977573,48 47.8806663,48 L47.8806663,48 L34.6457109,48 C34.5005473,48 34.3513028,47.9689359 34.215467,47.9096841 C34.0746758,47.8484189 33.9458358,47.7549391 33.8438132,47.6401747 L33.8438132,47.6401747 L25.5671565,38.6911392 C25.4849554,38.6310245 25.3497026,38.5375447 25.3071446,38.5199993 C25.2637121,38.5021662 25.0978525,38.4739785 24.968721,38.4578712 L24.968721,38.4578712 L20.6059429,38.4590217 C20.1491731,38.4590217 19.7778108,38.8231614 19.7778108,39.2701386 L19.7778108,39.2701386 L19.7778108,46.9038417 C19.7778108,47.5081525 19.2755681,48 18.6584771,48 L18.6584771,48 L10.866865,48 C10.2497739,48 9.74782272,47.5081525 9.74782272,46.9038417 L9.74782272,46.9038417 L9.74782272,39.2701386 C9.74782272,38.8231614 9.37616895,38.4590217 8.91969066,38.4590217 L8.91969066,38.4590217 L1.11933373,38.4590217 C0.502242713,38.4590217 -4.26325641e-14,37.9674618 -4.26325641e-14,37.3634386 L-4.26325641e-14,37.3634386 L-4.26325641e-14,29.720819 C-4.26325641e-14,29.1165082 0.502242713,28.6249483 1.11933373,28.6249483 L1.11933373,28.6249483 L8.91969066,28.6249483 C9.37616895,28.6249483 9.74782272,28.2610962 9.74782272,27.8138314 L9.74782272,27.8138314 L9.74782272,20.1916336 C9.74782272,19.7412048 9.37616895,19.3747641 8.91969066,19.3747641 L8.91969066,19.3747641 L1.11933373,19.3747641 C0.502242713,19.3747641 -4.26325641e-14,18.8791774 -4.26325641e-14,18.2702644 L-4.26325641e-14,18.2702644 L-4.26325641e-14,10.6365614 C-4.26325641e-14,10.0308124 0.502242713,9.53781437 1.11933373,9.53781437 L1.11933373,9.53781437 L8.91852469,9.53781437 C9.37558596,9.53781437 9.74782272,9.17079835 9.74782272,8.71950671 L9.74782272,8.71950671 L9.74782272,1.09299441 C9.74782272,0.490409334 10.2497739,-7.10542736e-14 10.866865,-7.10542736e-14 L10.866865,-7.10542736e-14 Z M24.5013409,20.6823593 C26.3555289,20.6823593 27.863423,22.1705575 27.863423,23.9998849 C27.863423,25.8292124 26.3555289,27.3176982 24.5013409,27.3176982 C22.6474444,27.3176982 21.1392588,25.8292124 21.1392588,23.9998849 C21.1392588,22.1705575 22.6474444,20.6823593 24.5013409,20.6823593 Z\"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>-->

<div class=\"o_lines\">
    <div class=\"o_line -v -l\"></div>
    <div class=\"o_line -v -c\"></div>
    <div class=\"o_line -v -r\"></div>
    <div class=\"o_line -h -t\"></div>
</div>

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\" id=\"main-top\">
    <div class=\"row\">

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>
        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {% if page.fix_left %}
          {% block fix_left %}
            <div  class=\"fix-left\">
              <div class=\"fix-left-header\"></div>
              {{ page.fix_left }}
            </div>
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}

        {% if page.fix_right %}
          {% block fix_right %}
            <div  class=\"fix-right\">
            <div class=\"fix-left-header\"></div>
              {{ page.fix_right }}
            </div>
          {% endblock %}
        {% endif %}

      </section>
    </div>
  </div>
{% endblock %}

{% include '@bootstrap_kabitat/includes/footer.html.twig' %}
", "themes/custom/bootstrap_kabitat/templates/system/page--front.html.twig", "/var/www/html/themes/custom/bootstrap_kabitat/templates/system/page--front.html.twig");
    }
}
