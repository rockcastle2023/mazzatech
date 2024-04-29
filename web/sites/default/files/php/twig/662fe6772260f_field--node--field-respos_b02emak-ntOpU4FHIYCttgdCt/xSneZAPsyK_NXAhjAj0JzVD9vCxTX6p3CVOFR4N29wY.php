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

/* themes/custom/test_theme/templates/field/field--node--field-respostas--perguntas.html.twig */
class __TwigTemplate_274c40820d29379903acd3daad9e94bb extends Template
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
        // line 42
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_name"] ?? null), 44, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 45
($context["field_type"] ?? null), 45, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 46
($context["label_display"] ?? null), 46, $this->source))];
        // line 50
        $context["title_classes"] = [0 => "field--label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("sr-only") : (""))];
        // line 55
        echo "
";
        // line 57
        $context["counter"] = 0;
        // line 58
        echo "
";
        // line 65
        echo "
";
        // line 66
        $macros["helpers"] = $this->macros["helpers"] = $this;
        // line 67
        echo "<div class=\"respGeral\">
";
        // line 68
        if (($context["label_hidden"] ?? null)) {
            // line 69
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 70
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field--items"], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                echo ">
      ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 72
                    echo "        ";
                    // line 73
                    echo "        ";
                    $context["counter"] = (($context["counter"] ?? null) + 1);
                    // line 74
                    echo "        
        <div";
                    // line 75
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 75), "addClass", [0 => "field--item itemResp"], "method", false, false, true, 75), 75, $this->source), "html", null, true);
                    echo ">
            <div class=\"lettterResp\"><h2>";
                    // line 76
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["helpers"], "macro_number_to_letter", [($context["counter"] ?? null)], 76, $context, $this->getSourceContext()));
                    echo "</h2></div>
            ";
                    // line 77
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo "
        </div>

      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "    </div>
  ";
            } else {
                // line 83
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 84
                    echo "      ";
                    // line 85
                    echo "      ";
                    $context["counter"] = (($context["counter"] ?? null) + 1);
                    // line 86
                    echo "      
      <div";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field--item itemResp"], "method", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo ">
        <div class=\"lettterResp\"><h2>";
                    // line 88
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["helpers"], "macro_number_to_letter", [($context["counter"] ?? null)], 88, $context, $this->getSourceContext()));
                    echo "</h2></div>
        ";
                    // line 89
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                    echo "
      </div>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "  ";
            }
        } else {
            // line 95
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
            echo ">
    <div";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 96, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 97
            if (($context["multiple"] ?? null)) {
                // line 98
                echo "      <div class=\"field--items\">
    ";
            }
            // line 100
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 101
                echo "      ";
                // line 102
                echo "      ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 103
                echo "      
      <div";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 104), "addClass", [0 => "field--item itemResp"], "method", false, false, true, 104), 104, $this->source), "html", null, true);
                echo ">
        <div class=\"lettterResp\"><h2>";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["helpers"], "macro_number_to_letter", [($context["counter"] ?? null)], 105, $context, $this->getSourceContext()));
                echo "</h2></div>
        ";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 110
                echo "      </div>
    ";
            }
            // line 112
            echo "  </div>
";
        }
        // line 114
        echo "</div>
";
    }

    // line 60
    public function macro_number_to_letter($__number__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "number" => $__number__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 61
            echo "  ";
            $context["alphabet"] = [0 => "A", 1 => "B", 2 => "C", 3 => "D", 4 => "E", 5 => "F", 6 => "G", 7 => "H", 8 => "I", 9 => "J", 10 => "K", 11 => "L", 12 => "M", 13 => "N", 14 => "O", 15 => "P", 16 => "Q", 17 => "R", 18 => "S", 19 => "T", 20 => "U", 21 => "V", 22 => "W", 23 => "X", 24 => "Y", 25 => "Z"];
            // line 62
            echo "  ";
            $context["index"] = ((($context["number"] ?? null) - 1) % 26);
            // line 63
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["alphabet"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["index"] ?? null)] ?? null) : null), 63, $this->source), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/test_theme/templates/field/field--node--field-respostas--perguntas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 63,  221 => 62,  218 => 61,  205 => 60,  200 => 114,  196 => 112,  192 => 110,  189 => 109,  180 => 106,  176 => 105,  172 => 104,  169 => 103,  166 => 102,  164 => 101,  159 => 100,  155 => 98,  153 => 97,  147 => 96,  142 => 95,  138 => 93,  128 => 89,  124 => 88,  120 => 87,  117 => 86,  114 => 85,  112 => 84,  107 => 83,  103 => 81,  93 => 77,  89 => 76,  85 => 75,  82 => 74,  79 => 73,  77 => 72,  73 => 71,  68 => 70,  65 => 69,  63 => 68,  60 => 67,  58 => 66,  55 => 65,  52 => 58,  50 => 57,  47 => 55,  45 => 52,  44 => 50,  42 => 46,  41 => 45,  40 => 44,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @ingroup templates
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field--label',
    label_display == 'visually_hidden' ? 'sr-only',
  ]
%}

{# Inicializa o contador #}
{% set counter = 0 %}

{# Função para converter números em letras #}
{% macro number_to_letter(number) %}
  {% set alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'] %}
  {% set index = (number - 1) % 26 %}
  {{ alphabet[index] }}
{% endmacro %}

{% import _self as helpers %}
<div class=\"respGeral\">
{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes.addClass(classes, 'field--items') }}>
      {% for item in items %}
        {# Incrementa o contador a cada iteração #}
        {% set counter = counter + 1 %}
        
        <div{{ item.attributes.addClass('field--item itemResp') }}>
            <div class=\"lettterResp\"><h2>{{ helpers.number_to_letter(counter) }}</h2></div>
            {{ item.content }}
        </div>

      {% endfor %}
    </div>
  {% else %}
    {% for item in items %}
      {# Incrementa o contador a cada iteração #}
      {% set counter = counter + 1 %}
      
      <div{{ attributes.addClass(classes, 'field--item itemResp') }}>
        <div class=\"lettterResp\"><h2>{{ helpers.number_to_letter(counter) }}</h2></div>
        {{ item.content }}
      </div>

    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {% if multiple %}
      <div class=\"field--items\">
    {% endif %}
    {% for item in items %}
      {# Incrementa o contador a cada iteração #}
      {% set counter = counter + 1 %}
      
      <div{{ item.attributes.addClass('field--item itemResp') }}>
        <div class=\"lettterResp\"><h2>{{ helpers.number_to_letter(counter) }}</h2></div>
        {{ item.content }}
      </div>
    {% endfor %}
    {% if multiple %}
      </div>
    {% endif %}
  </div>
{% endif %}
</div>
", "themes/custom/test_theme/templates/field/field--node--field-respostas--perguntas.html.twig", "/app/web/themes/custom/test_theme/templates/field/field--node--field-respostas--perguntas.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "import" => 66, "if" => 68, "for" => 71, "macro" => 60);
        static $filters = array("clean_class" => 44, "escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'if', 'for', 'macro'],
                ['clean_class', 'escape'],
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
