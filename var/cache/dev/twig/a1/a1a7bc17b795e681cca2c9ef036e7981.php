<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_20a4ff5a9c4f5a9bb562c7c1d777bc6e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action.html.twig"));

        // line 4
        if (("a" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "htmlElement", [], "any", false, false, false, 4))) {
            // line 5
            yield "    <a class=\"";
            yield (((($tmp = ((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isIncludedInDropdown"]) || array_key_exists("isIncludedInDropdown", $context) ? $context["isIncludedInDropdown"] : (function () { throw new RuntimeError('Variable "isIncludedInDropdown" does not exist.', 5, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "cssClass", [], "any", false, false, false, 5), "html", null, true);
            yield "\"
       href=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "linkUrl", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
       ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8), "class" => "action-icon"]);
                yield " ";
            }
            // line 9
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9));
                yield "</span>";
            }
            // line 10
            yield "</a>
";
        } elseif (("button" == CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "htmlElement", [], "any", false, false, false, 11))) {
            // line 12
            yield "    <button class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "cssClass", [], "any", false, false, false, 12), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 12)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        <span class=\"btn-label\">";
            // line 14
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "icon", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "icon", [], "any", false, false, false, 14)]);
                yield " ";
            }
            // line 15
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "label", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "label", [], "any", false, false, false, 15));
                yield "</span>";
            }
            // line 16
            yield "</span>
    </button>
";
        } elseif (("form" == CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "htmlElement", [], "any", false, false, false, 18))) {
            // line 19
            $context["form_id"] = ((("form-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19)) . "-") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 20
            CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()), "setHtmlAttribute", ["form", (isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 20, $this->source); })())], "method", false, false, false, 20);
            // line 21
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "linkUrl", [], "any", false, false, false, 21), "html", null, true);
            yield "\" method=\"POST\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\">
        <button class=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()), "cssClass", [], "any", false, false, false, 22), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 22)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
            <span class=\"btn-label\">";
            // line 24
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()), "icon", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()), "icon", [], "any", false, false, false, 24)]);
                yield " ";
            }
            // line 25
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"action-label\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25));
                yield "</span>";
            }
            // line 26
            yield "</span>
        </button>
    </form>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  159 => 26,  153 => 25,  148 => 24,  132 => 22,  125 => 21,  123 => 20,  121 => 19,  119 => 18,  115 => 16,  109 => 15,  104 => 14,  87 => 12,  85 => 11,  82 => 10,  76 => 9,  71 => 8,  58 => 7,  54 => 6,  47 => 5,  45 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var action \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if 'a' == action.htmlElement %}
    <a class=\"{{ isIncludedInDropdown|default(false) ? 'dropdown-item' }} {{ action.cssClass }}\"
       href=\"{{ action.linkUrl }}\"
       {% for name, value in action.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
        {%- if action.icon %}{{ component('ea:Icon', { name: (action.icon), class: 'action-icon' }) }} {% endif -%}
        {%- if action.label is not empty -%}<span class=\"action-label\">{{ action.label|trans|raw }}</span>{%- endif -%}
    </a>
{% elseif 'button' == action.htmlElement %}
    <button class=\"{{ action.cssClass }}\" {% for name, value in action.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
        <span class=\"btn-label\">
            {%- if action.icon %}{{ component('ea:Icon', { name: (action.icon) }) }} {% endif -%}
            {%- if action.label is not empty -%}<span class=\"action-label\">{{ action.label|trans|raw }}</span>{%- endif -%}
        </span>
    </button>
{% elseif 'form' == action.htmlElement %}
    {%- set form_id = 'form-' ~ action.name ~ '-' ~ random() -%}
    {%- do action.setHtmlAttribute('form', form_id) -%}
    <form action=\"{{ action.linkUrl }}\" method=\"POST\" id=\"{{ form_id }}\">
        <button class=\"{{ action.cssClass }}\" {% for name, value in action.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
            <span class=\"btn-label\">
                {%- if action.icon %}{{ component('ea:Icon', { name: (action.icon) }) }} {% endif -%}
                {%- if action.label is not empty -%}<span class=\"action-label\">{{ action.label|trans|raw }}</span>{%- endif -%}
            </span>
        </button>
    </form>
{% endif %}
", "@EasyAdmin/crud/action.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action.html.twig");
    }
}
