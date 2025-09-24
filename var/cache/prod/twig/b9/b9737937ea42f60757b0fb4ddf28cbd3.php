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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_35e859618aab14d46108cdda9a7518ce extends Template
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

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 4), 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 9
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 9), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 9);
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 6)), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)), "html", null, true);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 14
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 27)], false);
        yield "
    ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 28)], false);
        yield "
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 33)], false);
        yield "
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 34)], false);
        yield "
";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [($context["pageName"] ?? null), (((($tmp = ($context["entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationDomain", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
($context["custom_page_title"] ?? null))));
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 46
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 46), ["action" => $context["action"]], false);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 60
        yield "
    ";
        // line 61
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 53
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_layout_field", $context, 54, $this->getSourceContext())->macro_render_layout_field(...[$context["field"]]);
                yield "
            ";
            } else {
                // line 56
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_field_contents", $context, 56, $this->getSourceContext())->macro_render_field_contents(...[($context["entity"] ?? null), $context["field"]]);
                yield "
            ";
            }
            // line 58
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "    ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 62)], false);
        yield "
    ";
        yield from [];
    }

    // line 320
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 321
        yield "            ";
        if ((($tmp =  !($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "                ";
            yield $this->getTemplateForMacro("macro_render_field", $context, 322, $this->getSourceContext())->macro_render_field(...[($context["entity"] ?? null), ($context["field"] ?? null)]);
            yield "
            ";
        }
        // line 324
        yield "        ";
        yield from [];
    }

    // line 66
    public function macro_render_field_contents($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "    <div class=\"field-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 67), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "htmlAttributes", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 68
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 68) === false)) {
                // line 69
                yield "            ";
                // line 71
                yield "        ";
            } else {
                // line 72
                yield "            <div class=\"field-label\">";
                // line 73
                $context["label_html_attributes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 74
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 75
                        yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                        // line 77
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 77)), "html");
                        yield "\"";
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 81
                yield "<div ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label_html_attributes"] ?? null), "html", null, true);
                yield ">
                    ";
                // line 82
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 82));
                yield "
                </div>
            </div>
        ";
            }
            // line 86
            yield "
        <div class=\"field-value\">
            ";
            // line 88
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 88), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function macro_render_layout_field($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 94
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "formType", [], "any", false, false, false, 94) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 95
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_list", $context, 95, $this->getSourceContext())->macro_render_tab_list(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["field"] ?? null), "formType", [], "any", false, false, false, 96) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 97
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_open", $context, 97, $this->getSourceContext())->macro_render_tab_group_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["field"] ?? null), "formType", [], "any", false, false, false, 98) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 99
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_close", $context, 99, $this->getSourceContext())->macro_render_tab_group_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["field"] ?? null), "formType", [], "any", false, false, false, 100) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 101
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_open", $context, 101, $this->getSourceContext())->macro_render_tab_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["field"] ?? null), "formType", [], "any", false, false, false, 102) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 103
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_close", $context, 103, $this->getSourceContext())->macro_render_tab_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["field"] ?? null), "formType", [], "any", false, false, false, 104) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 105
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_open", $context, 105, $this->getSourceContext())->macro_render_column_group_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 106
($context["field"] ?? null), "formType", [], "any", false, false, false, 106) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 107
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_close", $context, 107, $this->getSourceContext())->macro_render_column_group_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["field"] ?? null), "formType", [], "any", false, false, false, 108) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 109
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_open", $context, 109, $this->getSourceContext())->macro_render_column_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["field"] ?? null), "formType", [], "any", false, false, false, 110) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 111
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_close", $context, 111, $this->getSourceContext())->macro_render_column_close(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 112
($context["field"] ?? null), "formType", [], "any", false, false, false, 112) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 113
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_open", $context, 113, $this->getSourceContext())->macro_render_fieldset_open(...[($context["field"] ?? null)]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
($context["field"] ?? null), "formType", [], "any", false, false, false, 114) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 115
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_close", $context, 115, $this->getSourceContext())->macro_render_fieldset_close(...[($context["field"] ?? null)]);
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 119
    public function macro_render_tab_list($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 120
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 121
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 122
            yield "    ";
            $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 123
            yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 127
                yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 128
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 128), "html", null, true);
                yield "\" id=\"tablist-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 128), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 129
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 129), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 130
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 130), "class" => "tab-nav-item-icon"]);
                }
                // line 132
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 132), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 132), "translationDomain", [], "any", false, false, false, 132));
                yield "

                        ";
                // line 134
                $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 134);
                // line 135
                if ((($context["tab_error_count"] ?? null) > 0)) {
                    // line 136
                    yield "<span class=\"badge badge-danger\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                    yield "\">";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                    // line 138
                    yield "</span>";
                }
                // line 140
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            yield "        </ul>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 147
    public function macro_render_tab_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 148
            yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 152
    public function macro_render_tab_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 153
            yield "        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function macro_render_tab_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 158
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 159
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 160
            yield "
    <div id=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 161), "html", null, true);
            yield "\" class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 161), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["attr"], "method", false, false, false, 161));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 162
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "            <div class=\"content-header-help tab-help\">
                ";
                // line 164
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 164), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 164), "translationDomain", [], "any", false, false, false, 164));
                yield "
            </div>
        ";
            }
            // line 167
            yield "
        <div class=\"row\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function macro_render_tab_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 172
            yield "        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 176
    public function macro_render_column_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 177
            yield "    ";
            // line 178
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 178)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 178), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "        <div class=\"row\">
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 183
    public function macro_render_column_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 184
            yield "    ";
            // line 185
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 185), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 186
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 190
    public function macro_render_column_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 191
            yield "    ";
            $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 191);
            // line 192
            yield "    ";
            $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 192) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 192) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 192) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 192) != null));
            // line 193
            yield "
    <div class=\"form-column ";
            // line 194
            yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 194), "html", null, true);
            yield "\">
        ";
            // line 195
            if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 196
                yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 198
                if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
                }
                // line 199
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 199), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 199), "translationDomain", [], "any", false, false, false, 199));
                }
                // line 200
                yield "                </div>

                ";
                // line 202
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 203
                    yield "                    <div class=\"form-column-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 203), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 203), "translationDomain", [], "any", false, false, false, 203));
                    yield "</div>
                ";
                }
                // line 205
                yield "            </div>
        ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 209
    public function macro_render_column_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 210
            yield "    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 213
    public function macro_render_fieldset_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 214
            yield "    ";
            $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 214) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 214)) || CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 214));
            // line 215
            yield "    ";
            $context["is_collapsible_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 216
            yield "    ";
            $context["is_collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 217
            yield "    ";
            $context["is_collapsible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsible_option_name"] ?? null)], "method", false, false, false, 217);
            // line 218
            yield "    ";
            $context["is_collapsed"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsed_option_name"] ?? null)], "method", false, false, false, 218);
            // line 219
            yield "
    <div class=\"form-fieldset ";
            // line 220
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 220), "html", null, true);
            yield "\">
        <fieldset>
            ";
            // line 222
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 223))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 225
                $context["fieldset_title_contents"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 226
                    yield "                            ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 227
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                        yield "
                            ";
                    }
                    // line 229
                    yield "
                            ";
                    // line 230
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 231
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 231), "class" => "form-fieldset-icon"]);
                        yield "
                            ";
                    }
                    // line 233
                    yield "
                            ";
                    // line 234
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 234));
                    yield "
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 236
                yield "
                        ";
                // line 237
                if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 238
                    yield "                            <a href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 238), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 239
                    yield (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                               aria-expanded=\"";
                    // line 240
                    yield (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 240), "html", null, true);
                    yield "\">
                                ";
                    // line 241
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </a>
                        ";
                } else {
                    // line 244
                    yield "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 245
                    yield ($context["fieldset_title_contents"] ?? null);
                    yield "
                            </span>
                        ";
                }
                // line 248
                yield "
                        ";
                // line 249
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 250
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 250));
                    yield "</div>
                        ";
                }
                // line 252
                yield "                    </div>
                </div>
            ";
            }
            // line 255
            yield "
            <div id=\"content-";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "propertyNameWithSuffix", [], "any", false, false, false, 256), "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <div class=\"row\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 260
    public function macro_render_fieldset_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 261
            yield "                </div>
            </div>
        </fieldset>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 268
    public function macro_render_detail_fields_with_tabs($entity = null, $field_layout = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field_layout" => $field_layout,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 269
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 269.");
            // line 270
            yield "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 274));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 275
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 276
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 276), "html", null, true);
                yield "\" id=\"tab-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 276), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 277
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 278
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 278)]);
                }
                // line 280
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 280), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 280), "translationDomain", [], "any", false, false, false, 280));
                yield "
                        </a>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "            </ul>
            <div class=\"tab-content\">
                ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 286));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 287
                yield "                    <div id=\"tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 287), "html", null, true);
                yield "\" class=\"tab-pane ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 287)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 287)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 287), "")) : ("")), "html", null, true);
                yield "\">
                        ";
                // line 288
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 288), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 289
                    yield "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 290
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 290), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 290), "translationDomain", [], "any", false, false, false, 290));
                    yield "
                            </div>
                        ";
                }
                // line 293
                yield "                        <div class=\"row\">
                            ";
                // line 294
                yield $this->getTemplateForMacro("macro_render_detail_fields", $context, 294, $this->getSourceContext())->macro_render_detail_fields(...[($context["entity"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 294)], "method", false, false, false, 294)]);
                yield "
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            yield "            </div>
        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 303
    public function macro_render_detail_fields($entity = null, $fields = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "fields" => $fields,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 304
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 304.");
            // line 305
            yield "
    ";
            // line 306
            $context["form_fieldset_is_already_open"] = false;
            // line 307
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 308
                yield "        ";
                $context["is_form_fieldset"] = CoreExtension::inFilter("field-form_fieldset", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 308));
                // line 309
                yield "
        ";
                // line 310
                if ((($context["is_form_fieldset"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 310) &&  !($context["is_form_fieldset"] ?? null)))) {
                    // line 311
                    yield "            ";
                    if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 312
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 312, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                        yield "
                ";
                        // line 313
                        $context["form_fieldset_is_already_open"] = false;
                        // line 314
                        yield "            ";
                    }
                    // line 315
                    yield "
            ";
                    // line 316
                    yield $this->getTemplateForMacro("macro_open_form_fieldset", $context, 316, $this->getSourceContext())->macro_open_form_fieldset(...[(((($tmp = ($context["is_form_fieldset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["field"]) : (null))]);
                    yield "
            ";
                    // line 317
                    $context["form_fieldset_is_already_open"] = true;
                    // line 318
                    yield "        ";
                }
                // line 319
                yield "
        ";
                // line 320
                yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
                // line 325
                yield "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            yield "
    ";
            // line 327
            if ((($tmp = ($context["form_fieldset_is_already_open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 328
                yield "        ";
                yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 328, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                yield "
        ";
                // line 329
                $context["form_fieldset_is_already_open"] = false;
                // line 330
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 333
    public function macro_open_form_fieldset($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 334
            yield "    ";
            trigger_deprecation('', '', "The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 334.");
            // line 335
            yield "
    ";
            // line 336
            $context["fieldset_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 336))));
            // line 337
            yield "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsible"], "method", false, false, false, 337)));
            // line 338
            yield "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsed"], "method", false, false, false, 338)));
            // line 339
            yield "    ";
            $context["fieldset_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 339), "get", ["icon"], "method", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 339), "get", ["icon"], "method", false, false, false, 339), false)) : (false))));
            // line 340
            yield "    ";
            $context["fieldset_label"] = (((null === ($context["field"] ?? null))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 340)));
            // line 341
            yield "    ";
            $context["fieldset_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 341)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 341), false)) : (false))));
            // line 342
            yield "    ";
            $context["fieldset_has_header"] = (((($context["collapsible"] ?? null) || ($context["fieldset_icon"] ?? null)) || ($context["fieldset_label"] ?? null)) || ($context["fieldset_help"] ?? null));
            // line 343
            yield "
    <div class=\"";
            // line 344
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 344) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 344)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 344), "html", null, true)) : (""));
            yield "\">
        <div class=\"form-fieldset\">
            ";
            // line 346
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 347
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fieldset_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 349
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 350
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 352
                    yield "                            href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 353
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 354
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                    yield "\"
                        ";
                }
                // line 356
                yield "                        >
                            ";
                // line 357
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 358
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                            ";
                }
                // line 360
                yield "
                            ";
                // line 361
                if ((($tmp = ($context["fieldset_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 362
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["fieldset_icon"] ?? null), "class" => "form-fieldset-icon"]);
                    yield "
                            ";
                }
                // line 364
                yield "                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_label"] ?? null));
                yield "
                        </a>

                        ";
                // line 367
                if ((($tmp = ($context["fieldset_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 368
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_help"] ?? null));
                    yield "</div>
                        ";
                }
                // line 370
                yield "                    </div>
                </div>
            ";
            }
            // line 373
            yield "
            <div ";
            // line 374
            if ((($tmp = ($context["fieldset_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldset_name"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-fieldset-body ";
            yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <dl class=\"datalist\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 378
    public function macro_close_form_fieldset(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 379
            yield "    ";
            trigger_deprecation('', '', "The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 379.");
            // line 380
            yield "
            </dl>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 387
    public function macro_render_field($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 388
            yield "    ";
            trigger_deprecation('', '', "The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 388.");
            // line 389
            yield "
    <div class=\"data-row ";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 390), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 392
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 392));
            yield "

            ";
            // line 394
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 394))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 395
                yield "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 395)), "html");
                yield "\">
                    ";
                // line 396
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
                yield "
                </a>
            ";
            }
            // line 399
            yield "        </dt>
        <dd>
            ";
            // line 401
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 401), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            yield "
        </dd>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  1467 => 401,  1463 => 399,  1457 => 396,  1452 => 395,  1450 => 394,  1445 => 392,  1440 => 390,  1437 => 389,  1434 => 388,  1421 => 387,  1410 => 380,  1407 => 379,  1396 => 378,  1379 => 374,  1376 => 373,  1371 => 370,  1365 => 368,  1363 => 367,  1356 => 364,  1350 => 362,  1348 => 361,  1345 => 360,  1339 => 358,  1337 => 357,  1334 => 356,  1327 => 354,  1323 => 353,  1318 => 352,  1314 => 350,  1312 => 349,  1304 => 347,  1302 => 346,  1297 => 344,  1294 => 343,  1291 => 342,  1288 => 341,  1285 => 340,  1282 => 339,  1279 => 338,  1276 => 337,  1274 => 336,  1271 => 335,  1268 => 334,  1256 => 333,  1249 => 330,  1247 => 329,  1242 => 328,  1240 => 327,  1237 => 326,  1223 => 325,  1221 => 320,  1218 => 319,  1215 => 318,  1213 => 317,  1209 => 316,  1206 => 315,  1203 => 314,  1201 => 313,  1196 => 312,  1193 => 311,  1191 => 310,  1188 => 309,  1185 => 308,  1167 => 307,  1165 => 306,  1162 => 305,  1159 => 304,  1146 => 303,  1137 => 298,  1119 => 294,  1116 => 293,  1110 => 290,  1107 => 289,  1105 => 288,  1094 => 287,  1077 => 286,  1073 => 284,  1055 => 280,  1052 => 278,  1050 => 277,  1041 => 276,  1038 => 275,  1021 => 274,  1015 => 270,  1012 => 269,  999 => 268,  989 => 261,  977 => 260,  962 => 256,  959 => 255,  954 => 252,  948 => 250,  946 => 249,  943 => 248,  937 => 245,  934 => 244,  928 => 241,  922 => 240,  918 => 239,  913 => 238,  911 => 237,  908 => 236,  902 => 234,  899 => 233,  893 => 231,  891 => 230,  888 => 229,  882 => 227,  879 => 226,  877 => 225,  869 => 223,  867 => 222,  860 => 220,  857 => 219,  854 => 218,  851 => 217,  848 => 216,  845 => 215,  842 => 214,  830 => 213,  823 => 210,  811 => 209,  803 => 205,  797 => 203,  795 => 202,  791 => 200,  786 => 199,  782 => 198,  778 => 196,  776 => 195,  770 => 194,  767 => 193,  764 => 192,  761 => 191,  749 => 190,  741 => 186,  738 => 185,  736 => 184,  724 => 183,  716 => 179,  713 => 178,  711 => 177,  699 => 176,  691 => 172,  679 => 171,  671 => 167,  665 => 164,  662 => 163,  660 => 162,  638 => 161,  635 => 160,  632 => 159,  629 => 158,  617 => 157,  609 => 153,  597 => 152,  589 => 148,  577 => 147,  569 => 143,  561 => 140,  558 => 138,  556 => 137,  552 => 136,  550 => 135,  548 => 134,  543 => 132,  540 => 130,  538 => 129,  529 => 128,  526 => 127,  522 => 126,  517 => 123,  514 => 122,  511 => 121,  508 => 120,  496 => 119,  486 => 115,  484 => 114,  479 => 113,  477 => 112,  472 => 111,  470 => 110,  465 => 109,  463 => 108,  458 => 107,  456 => 106,  451 => 105,  449 => 104,  444 => 103,  442 => 102,  437 => 101,  435 => 100,  430 => 99,  428 => 98,  423 => 97,  421 => 96,  416 => 95,  413 => 94,  401 => 93,  391 => 88,  387 => 86,  380 => 82,  375 => 81,  369 => 77,  365 => 75,  363 => 74,  361 => 73,  359 => 72,  356 => 71,  354 => 69,  352 => 68,  335 => 67,  322 => 66,  317 => 324,  311 => 322,  308 => 321,  301 => 320,  293 => 62,  286 => 61,  281 => 59,  275 => 58,  269 => 56,  263 => 54,  260 => 53,  255 => 52,  248 => 51,  243 => 61,  240 => 60,  237 => 51,  230 => 50,  218 => 46,  213 => 45,  206 => 44,  201 => 41,  200 => 40,  199 => 39,  197 => 38,  190 => 37,  183 => 34,  179 => 33,  174 => 32,  167 => 31,  160 => 28,  156 => 27,  151 => 26,  144 => 25,  132 => 21,  128 => 20,  123 => 19,  116 => 18,  104 => 14,  100 => 13,  95 => 12,  88 => 11,  77 => 7,  66 => 6,  62 => 4,  60 => 9,  58 => 3,  51 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/detail.html.twig");
    }
}
