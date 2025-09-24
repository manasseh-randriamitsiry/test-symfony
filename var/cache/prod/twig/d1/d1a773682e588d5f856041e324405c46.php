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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_d425e3504f3518bb76c546e162166b3a extends Template
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
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_row_attributes' => [$this, 'block_entity_row_attributes'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 5), 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 6
        $context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 11
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 11), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 11);
        // line 46
        $context["has_batch_actions"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0);
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8)), "html", null, true)) : (""));
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["entities"] ?? null)), "name", [], "any", false, false, false, 9))) : (""))), "html", null, true);
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 16
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

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 23
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

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 29)], false);
        yield "
    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 30)], false);
        yield "
";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 35)], false);
        yield "
    ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 36)], false);
        yield "
";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationDomain", [], "any", false, false, false, 40)], "method", false, false, false, 40);
        // line 41
        yield (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42)], "method", false, false, false, 42), [],         // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
($context["custom_page_title"] ?? null), [],         // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null))));
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
            // line 49
            yield "        <div class=\"datagrid-filters\">
            ";
            // line 50
            yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
            // line 63
            yield "        </div>
    ";
        }
        // line 65
        yield "
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('global_actions', $context, $blocks);
        // line 73
        yield "    ";
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "                ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 51), "query", [], "any", false, true, false, 51), "all", [], "any", false, true, false, 51), "filters", [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "all", [], "any", false, false, false, 51)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["filters"] ?? null) : null), [])) : ([])));
        // line 52
        yield "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", ["renderFilters"], "method", false, false, false, 53), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        yield (((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("action-filters-applied") : (""));
        yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:filter"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 54), "translationParameters", [], "any", false, false, false, 54), "EasyAdminBundle"), [],         // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null)), "html", null, true);
        // line 54
        if ((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"action-filters-button-count\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["applied_filters"] ?? null)), "html", null, true);
            yield ")</span>";
        }
        // line 55
        yield "                    </a>
                    ";
        // line 56
        if ((($tmp = ($context["applied_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["filters"], "method", false, false, false, 57), "setAction", ["index"], "method", false, false, false, 57), "html", null, true);
            yield "\" class=\"btn btn-secondary action-filters-reset\">
                            ";
            // line 58
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                        </a>
                    ";
        }
        // line 61
        yield "                </div>
            ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "        <div class=\"global-actions\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 69
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 69), ["action" => $context["action"]], false);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "        </div>
    ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "        ";
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "            <div class=\"batch-actions d-none\">
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 77
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 77), ["action" => $context["action"]], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "            </div>
        ";
        }
        // line 81
        yield "    ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "    ";
        // line 86
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "get", ["sort"], "method", false, false, false, 86)));
        // line 87
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "get", ["sort"], "method", false, false, false, 87));
        // line 88
        yield "    ";
        $context["some_results_are_hidden"] = Twig\Extension\CoreExtension::reduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 88)); }, false);
        // line 89
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) != 0);
        // line 90
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 90), "isSearchEnabled", [], "any", false, false, false, 90);
        // line 91
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0);
        // line 92
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null));
        // line 93
        yield "
    <table class=\"table datagrid ";
        // line 94
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 95
        if ((($context["num_results"] ?? null) > 0)) {
            // line 96
            yield "            <thead>
            ";
            // line 97
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 136
            yield "            </thead>
        ";
        }
        // line 138
        yield "
        <tbody>
        ";
        // line 140
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 219
        yield "        </tbody>

        <tfoot>
        ";
        // line 222
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 224
        yield "        </tfoot>
    </table>

    ";
        // line 227
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entities"] ?? null)) > 0)) {
            // line 228
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 229
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 232
            yield "        </div>
    ";
        }
        // line 234
        yield "
    ";
        // line 235
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 238
        yield "
    ";
        // line 239
        if ((($tmp = ($context["has_filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 240
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 242
        yield "
    ";
        // line 243
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 244
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "                <tr>
                    ";
        // line 99
        if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 106
        yield "
                    ";
        // line 107
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 108
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 109
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 109); })), "fields", [], "any", true, true, false, 109) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 109); })), "fields", [], "any", false, false, false, 109)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["entities"] ?? null), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isAccessible", [], "any", false, false, false, 109); })), "fields", [], "any", false, false, false, 109)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 110
            yield "                        ";
            $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 110), "searchFields", [], "any", false, false, false, 110)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 110), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 110), "searchFields", [], "any", false, false, false, 110)));
            // line 111
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 111), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 111)], "method", false, false, false, 111);
            // line 112
            yield "                        ";
            $context["next_sort_direction"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 112), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 112)], "method", false, false, false, 112) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 113
            yield "                        ";
            $context["column_icon"] = (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("internal:sort-arrow-up") : ("internal:sort-arrow-down"))) : ("internal:sort-arrows"));
            // line 114
            yield "
                        <th data-column=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 115), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
            yield " ";
            yield (((($tmp = ($context["is_sorting_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sorted") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 115), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($_v1 = ($context["class"] ?? null)) && is_string($_v2 = "field-") && str_starts_with($_v1, $_v2)); }), ""), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 115), "html", null, true);
            yield "\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 115), "textDirection", [], "any", false, false, false, 115), "html", null, true);
            yield "\">
                            ";
            // line 116
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                                ";
                $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["page", 1], "method", false, false, false, 117), "set", ["sort", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117) => ($context["next_sort_direction"] ?? null)]], "method", false, false, false, 117);
                // line 118
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 119
                    yield "                                    ";
                    $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sortable_url"] ?? null), "setController", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 119), "attributes", [], "any", false, false, false, 119), "get", ["crudControllerFqcn"], "method", false, false, false, 119)], "method", false, false, false, 119), "setAction", ["index"], "method", false, false, false, 119);
                    // line 120
                    yield "                                ";
                }
                // line 121
                yield "
                                <a href=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sortable_url"] ?? null), "html", null, true);
                yield "\">
                                    ";
                // line 123
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 123), [],                 // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null));
                // line 123
                yield " ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["column_icon"] ?? null)]);
                yield "
                                </a>
                            ";
            } else {
                // line 126
                yield "                                <span>";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 126), [],                 // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null));
                // line 126
                yield "</span>
                            ";
            }
            // line 128
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "
                    <th class=\"";
        // line 131
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 131), "showEntityActionsAsDropdown", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown-table-head") : (""));
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 131), "textDirection", [], "any", false, false, false, 131), "html", null, true);
        yield "\">
                        <span class=\"visually-hidden\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 132), "translationParameters", [], "any", false, false, false, 132), "EasyAdminBundle"), [],         // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null)), "html", null, true);
        // line 132
        yield "</span>
                    </th>
                </tr>
            ";
        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 141
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 142
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "                    <tr data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 143), "html", null, true);
                yield "\" ";
                yield from $this->unwrap()->yieldBlock('entity_row_attributes', $context, $blocks);
                yield ">
                        ";
                // line 144
                if ((($tmp = ($context["has_batch_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 145
                    yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 147), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 147), "html", null, true);
                    yield "\">
                                </div>
                            </td>
                        ";
                }
                // line 151
                yield "
                        ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 152));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 153
                    yield "                            ";
                    $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 153), "searchFields", [], "any", false, false, false, 153)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 153), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 153), "searchFields", [], "any", false, false, false, 153)));
                    // line 154
                    yield "
                            <td data-column=\"";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 155), "html", null, true);
                    yield "\" data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 155), [],                     // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null)), "html");
                    // line 155
                    yield "\" class=\"";
                    yield (((($tmp = ($context["is_searchable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
                    yield " ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 155) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 155), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 155), "html", null, true);
                    yield "\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 155), "textDirection", [], "any", false, false, false, 155), "html", null, true);
                    yield "\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "htmlAttributes", [], "any", false, false, false, 155));
                    foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                        yield "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield ">
                                ";
                    // line 156
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 156), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    yield "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                yield "
                        ";
                // line 160
                yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
                // line 185
                yield "                    </tr>

                ";
            }
            // line 188
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 189
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 209
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "
            ";
        // line 211
        if ((($tmp = ($context["some_results_are_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">";
            // line 214
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock", "class" => "mr-1"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 218
        yield "        ";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "                            <td class=\"actions ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 161), "showEntityActionsAsDropdown", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 162), "count", [], "any", false, false, false, 162) > 0)) {
            // line 163
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 163), "showEntityActionsAsDropdown", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "                                        ";
                $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]), $context, "@EasyAdmin/crud/index.html.twig", 29080550831);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29080550831);
                    $this->load("@EasyAdmin/crud/index.html.twig", 164, "29080550831")->display($embeddedContext, $embeddedBlocks);
                    $_v3->finishEmbedComponent();
                }
                // line 177
                yield "                                    ";
            } else {
                // line 178
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 178));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 179
                    yield "                                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 179), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 179), "showEntityActionsAsDropdown", [], "any", false, false, false, 179)], false);
                    yield "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                yield "                                    ";
            }
            // line 182
            yield "                                ";
        }
        // line 183
        yield "                            </td>
                        ";
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 191
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 200
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 200))) {
                // line 201
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 203), "translationParameters", [], "any", false, false, false, 203), "EasyAdminBundle"), [],                 // line 6
($context["__internal_066561e186c5c023208d356b8e92fc260134665421bb74f8bb6cb31fc6c43bdd"] ?? null)), "html", null, true);
                // line 203
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 207
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                ";
        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 223
        yield "        ";
        yield from [];
    }

    // line 229
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paginator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 230
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["crud/paginator"], "method", false, false, false, 230), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        yield "
            ";
        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 236
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", [], false);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  936 => 236,  929 => 235,  921 => 230,  914 => 229,  909 => 223,  902 => 222,  897 => 208,  883 => 207,  877 => 203,  875 => 6,  874 => 203,  870 => 201,  868 => 200,  857 => 191,  839 => 190,  832 => 189,  826 => 183,  823 => 182,  820 => 181,  811 => 179,  806 => 178,  803 => 177,  788 => 164,  785 => 163,  783 => 162,  778 => 161,  771 => 160,  761 => 143,  756 => 218,  747 => 214,  743 => 212,  741 => 211,  738 => 210,  732 => 209,  729 => 189,  716 => 188,  711 => 185,  709 => 160,  706 => 159,  697 => 156,  672 => 155,  670 => 6,  667 => 155,  664 => 154,  661 => 153,  657 => 152,  654 => 151,  645 => 147,  641 => 145,  639 => 144,  632 => 143,  629 => 142,  610 => 141,  603 => 140,  595 => 132,  593 => 6,  592 => 132,  586 => 131,  583 => 130,  576 => 128,  572 => 126,  570 => 6,  568 => 126,  561 => 123,  559 => 6,  558 => 123,  554 => 122,  551 => 121,  548 => 120,  545 => 119,  542 => 118,  539 => 117,  537 => 116,  521 => 115,  518 => 114,  515 => 113,  512 => 112,  509 => 111,  506 => 110,  501 => 109,  498 => 108,  496 => 107,  493 => 106,  485 => 100,  483 => 99,  480 => 98,  473 => 97,  464 => 244,  462 => 243,  459 => 242,  453 => 240,  451 => 239,  448 => 238,  446 => 235,  443 => 234,  439 => 232,  437 => 229,  434 => 228,  432 => 227,  427 => 224,  425 => 222,  420 => 219,  418 => 140,  414 => 138,  410 => 136,  408 => 97,  405 => 96,  403 => 95,  399 => 94,  396 => 93,  393 => 92,  390 => 91,  387 => 90,  384 => 89,  381 => 88,  378 => 87,  375 => 86,  373 => 85,  366 => 84,  361 => 81,  357 => 79,  348 => 77,  344 => 76,  341 => 75,  338 => 74,  331 => 73,  325 => 71,  316 => 69,  312 => 68,  309 => 67,  302 => 66,  296 => 61,  290 => 58,  285 => 57,  283 => 56,  280 => 55,  274 => 54,  272 => 6,  269 => 54,  263 => 53,  260 => 52,  257 => 51,  250 => 50,  244 => 73,  242 => 66,  239 => 65,  235 => 63,  233 => 50,  230 => 49,  227 => 48,  220 => 47,  215 => 6,  214 => 43,  213 => 6,  212 => 42,  211 => 41,  209 => 40,  202 => 39,  195 => 36,  191 => 35,  186 => 34,  179 => 33,  172 => 30,  168 => 29,  163 => 28,  156 => 27,  144 => 23,  140 => 22,  135 => 21,  128 => 20,  116 => 16,  112 => 15,  107 => 14,  100 => 13,  89 => 9,  78 => 8,  74 => 5,  72 => 46,  70 => 11,  68 => 6,  66 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_d425e3504f3518bb76c546e162166b3a___29080550831 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 164
        return $this->load(($context["__parent__"] ?? null), 164);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/crud/index.html.twig", 36628292451);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 36628292451);
            $this->load("@EasyAdmin/crud/index.html.twig", 165, "36628292451")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 168
        yield "
                                            ";
        // line 169
        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 35549415901);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 35549415901);
            $this->load("@EasyAdmin/crud/index.html.twig", 169, "35549415901")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 176
        yield "                                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1054 => 176,  1040 => 169,  1037 => 168,  1017 => 165,  998 => 164,  936 => 236,  929 => 235,  921 => 230,  914 => 229,  909 => 223,  902 => 222,  897 => 208,  883 => 207,  877 => 203,  875 => 6,  874 => 203,  870 => 201,  868 => 200,  857 => 191,  839 => 190,  832 => 189,  826 => 183,  823 => 182,  820 => 181,  811 => 179,  806 => 178,  803 => 177,  788 => 164,  785 => 163,  783 => 162,  778 => 161,  771 => 160,  761 => 143,  756 => 218,  747 => 214,  743 => 212,  741 => 211,  738 => 210,  732 => 209,  729 => 189,  716 => 188,  711 => 185,  709 => 160,  706 => 159,  697 => 156,  672 => 155,  670 => 6,  667 => 155,  664 => 154,  661 => 153,  657 => 152,  654 => 151,  645 => 147,  641 => 145,  639 => 144,  632 => 143,  629 => 142,  610 => 141,  603 => 140,  595 => 132,  593 => 6,  592 => 132,  586 => 131,  583 => 130,  576 => 128,  572 => 126,  570 => 6,  568 => 126,  561 => 123,  559 => 6,  558 => 123,  554 => 122,  551 => 121,  548 => 120,  545 => 119,  542 => 118,  539 => 117,  537 => 116,  521 => 115,  518 => 114,  515 => 113,  512 => 112,  509 => 111,  506 => 110,  501 => 109,  498 => 108,  496 => 107,  493 => 106,  485 => 100,  483 => 99,  480 => 98,  473 => 97,  464 => 244,  462 => 243,  459 => 242,  453 => 240,  451 => 239,  448 => 238,  446 => 235,  443 => 234,  439 => 232,  437 => 229,  434 => 228,  432 => 227,  427 => 224,  425 => 222,  420 => 219,  418 => 140,  414 => 138,  410 => 136,  408 => 97,  405 => 96,  403 => 95,  399 => 94,  396 => 93,  393 => 92,  390 => 91,  387 => 90,  384 => 89,  381 => 88,  378 => 87,  375 => 86,  373 => 85,  366 => 84,  361 => 81,  357 => 79,  348 => 77,  344 => 76,  341 => 75,  338 => 74,  331 => 73,  325 => 71,  316 => 69,  312 => 68,  309 => 67,  302 => 66,  296 => 61,  290 => 58,  285 => 57,  283 => 56,  280 => 55,  274 => 54,  272 => 6,  269 => 54,  263 => 53,  260 => 52,  257 => 51,  250 => 50,  244 => 73,  242 => 66,  239 => 65,  235 => 63,  233 => 50,  230 => 49,  227 => 48,  220 => 47,  215 => 6,  214 => 43,  213 => 6,  212 => 42,  211 => 41,  209 => 40,  202 => 39,  195 => 36,  191 => 35,  186 => 34,  179 => 33,  172 => 30,  168 => 29,  163 => 28,  156 => 27,  144 => 23,  140 => 22,  135 => 21,  128 => 20,  116 => 16,  112 => 15,  107 => 14,  100 => 13,  89 => 9,  78 => 8,  74 => 5,  72 => 46,  70 => 11,  68 => 6,  66 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_d425e3504f3518bb76c546e162166b3a___36628292451 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 165
        return $this->load(($context["__parent__"] ?? null), 165);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:dots-horizontal"]);
        yield "
                                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1132 => 166,  1113 => 165,  1054 => 176,  1040 => 169,  1037 => 168,  1017 => 165,  998 => 164,  936 => 236,  929 => 235,  921 => 230,  914 => 229,  909 => 223,  902 => 222,  897 => 208,  883 => 207,  877 => 203,  875 => 6,  874 => 203,  870 => 201,  868 => 200,  857 => 191,  839 => 190,  832 => 189,  826 => 183,  823 => 182,  820 => 181,  811 => 179,  806 => 178,  803 => 177,  788 => 164,  785 => 163,  783 => 162,  778 => 161,  771 => 160,  761 => 143,  756 => 218,  747 => 214,  743 => 212,  741 => 211,  738 => 210,  732 => 209,  729 => 189,  716 => 188,  711 => 185,  709 => 160,  706 => 159,  697 => 156,  672 => 155,  670 => 6,  667 => 155,  664 => 154,  661 => 153,  657 => 152,  654 => 151,  645 => 147,  641 => 145,  639 => 144,  632 => 143,  629 => 142,  610 => 141,  603 => 140,  595 => 132,  593 => 6,  592 => 132,  586 => 131,  583 => 130,  576 => 128,  572 => 126,  570 => 6,  568 => 126,  561 => 123,  559 => 6,  558 => 123,  554 => 122,  551 => 121,  548 => 120,  545 => 119,  542 => 118,  539 => 117,  537 => 116,  521 => 115,  518 => 114,  515 => 113,  512 => 112,  509 => 111,  506 => 110,  501 => 109,  498 => 108,  496 => 107,  493 => 106,  485 => 100,  483 => 99,  480 => 98,  473 => 97,  464 => 244,  462 => 243,  459 => 242,  453 => 240,  451 => 239,  448 => 238,  446 => 235,  443 => 234,  439 => 232,  437 => 229,  434 => 228,  432 => 227,  427 => 224,  425 => 222,  420 => 219,  418 => 140,  414 => 138,  410 => 136,  408 => 97,  405 => 96,  403 => 95,  399 => 94,  396 => 93,  393 => 92,  390 => 91,  387 => 90,  384 => 89,  381 => 88,  378 => 87,  375 => 86,  373 => 85,  366 => 84,  361 => 81,  357 => 79,  348 => 77,  344 => 76,  341 => 75,  338 => 74,  331 => 73,  325 => 71,  316 => 69,  312 => 68,  309 => 67,  302 => 66,  296 => 61,  290 => 58,  285 => 57,  283 => 56,  280 => 55,  274 => 54,  272 => 6,  269 => 54,  263 => 53,  260 => 52,  257 => 51,  250 => 50,  244 => 73,  242 => 66,  239 => 65,  235 => 63,  233 => 50,  230 => 49,  227 => 48,  220 => 47,  215 => 6,  214 => 43,  213 => 6,  212 => 42,  211 => 41,  209 => 40,  202 => 39,  195 => 36,  191 => 35,  186 => 34,  179 => 33,  172 => 30,  168 => 29,  163 => 28,  156 => 27,  144 => 23,  140 => 22,  135 => 21,  128 => 20,  116 => 16,  112 => 15,  107 => 14,  100 => 13,  89 => 9,  78 => 8,  74 => 5,  72 => 46,  70 => 11,  68 => 6,  66 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_d425e3504f3518bb76c546e162166b3a___35549415901 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 169
        return $this->load(($context["__parent__"] ?? null), 169);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 30054531711);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30054531711);
            $this->load("@EasyAdmin/crud/index.html.twig", 170, "30054531711")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 175
        yield "                                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1238 => 175,  1218 => 170,  1199 => 169,  1132 => 166,  1113 => 165,  1054 => 176,  1040 => 169,  1037 => 168,  1017 => 165,  998 => 164,  936 => 236,  929 => 235,  921 => 230,  914 => 229,  909 => 223,  902 => 222,  897 => 208,  883 => 207,  877 => 203,  875 => 6,  874 => 203,  870 => 201,  868 => 200,  857 => 191,  839 => 190,  832 => 189,  826 => 183,  823 => 182,  820 => 181,  811 => 179,  806 => 178,  803 => 177,  788 => 164,  785 => 163,  783 => 162,  778 => 161,  771 => 160,  761 => 143,  756 => 218,  747 => 214,  743 => 212,  741 => 211,  738 => 210,  732 => 209,  729 => 189,  716 => 188,  711 => 185,  709 => 160,  706 => 159,  697 => 156,  672 => 155,  670 => 6,  667 => 155,  664 => 154,  661 => 153,  657 => 152,  654 => 151,  645 => 147,  641 => 145,  639 => 144,  632 => 143,  629 => 142,  610 => 141,  603 => 140,  595 => 132,  593 => 6,  592 => 132,  586 => 131,  583 => 130,  576 => 128,  572 => 126,  570 => 6,  568 => 126,  561 => 123,  559 => 6,  558 => 123,  554 => 122,  551 => 121,  548 => 120,  545 => 119,  542 => 118,  539 => 117,  537 => 116,  521 => 115,  518 => 114,  515 => 113,  512 => 112,  509 => 111,  506 => 110,  501 => 109,  498 => 108,  496 => 107,  493 => 106,  485 => 100,  483 => 99,  480 => 98,  473 => 97,  464 => 244,  462 => 243,  459 => 242,  453 => 240,  451 => 239,  448 => 238,  446 => 235,  443 => 234,  439 => 232,  437 => 229,  434 => 228,  432 => 227,  427 => 224,  425 => 222,  420 => 219,  418 => 140,  414 => 138,  410 => 136,  408 => 97,  405 => 96,  403 => 95,  399 => 94,  396 => 93,  393 => 92,  390 => 91,  387 => 90,  384 => 89,  381 => 88,  378 => 87,  375 => 86,  373 => 85,  366 => 84,  361 => 81,  357 => 79,  348 => 77,  344 => 76,  341 => 75,  338 => 74,  331 => 73,  325 => 71,  316 => 69,  312 => 68,  309 => 67,  302 => 66,  296 => 61,  290 => 58,  285 => 57,  283 => 56,  280 => 55,  274 => 54,  272 => 6,  269 => 54,  263 => 53,  260 => 52,  257 => 51,  250 => 50,  244 => 73,  242 => 66,  239 => 65,  235 => 63,  233 => 50,  230 => 49,  227 => 48,  220 => 47,  215 => 6,  214 => 43,  213 => 6,  212 => 42,  211 => 41,  209 => 40,  202 => 39,  195 => 36,  191 => 35,  186 => 34,  179 => 33,  172 => 30,  168 => 29,  163 => 28,  156 => 27,  144 => 23,  140 => 22,  135 => 21,  128 => 20,  116 => 16,  112 => 15,  107 => 14,  100 => 13,  89 => 9,  78 => 8,  74 => 5,  72 => 46,  70 => 11,  68 => 6,  66 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_d425e3504f3518bb76c546e162166b3a___30054531711 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 170
        return $this->load(($context["__parent__"] ?? null), 170);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 171));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 172
            yield "                                                        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "cssClass", [], "any", false, false, false, 172), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "linkUrl", [], "any", false, false, false, 172), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 172), "icon:class" => "action-icon", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["action"], "htmlAttributes", [], "any", false, false, false, 172), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 172)), "label:class" => "action-label", "renderLabelRaw" => true]);
            yield "
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "                                                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1335 => 174,  1326 => 172,  1316 => 171,  1297 => 170,  1238 => 175,  1218 => 170,  1199 => 169,  1132 => 166,  1113 => 165,  1054 => 176,  1040 => 169,  1037 => 168,  1017 => 165,  998 => 164,  936 => 236,  929 => 235,  921 => 230,  914 => 229,  909 => 223,  902 => 222,  897 => 208,  883 => 207,  877 => 203,  875 => 6,  874 => 203,  870 => 201,  868 => 200,  857 => 191,  839 => 190,  832 => 189,  826 => 183,  823 => 182,  820 => 181,  811 => 179,  806 => 178,  803 => 177,  788 => 164,  785 => 163,  783 => 162,  778 => 161,  771 => 160,  761 => 143,  756 => 218,  747 => 214,  743 => 212,  741 => 211,  738 => 210,  732 => 209,  729 => 189,  716 => 188,  711 => 185,  709 => 160,  706 => 159,  697 => 156,  672 => 155,  670 => 6,  667 => 155,  664 => 154,  661 => 153,  657 => 152,  654 => 151,  645 => 147,  641 => 145,  639 => 144,  632 => 143,  629 => 142,  610 => 141,  603 => 140,  595 => 132,  593 => 6,  592 => 132,  586 => 131,  583 => 130,  576 => 128,  572 => 126,  570 => 6,  568 => 126,  561 => 123,  559 => 6,  558 => 123,  554 => 122,  551 => 121,  548 => 120,  545 => 119,  542 => 118,  539 => 117,  537 => 116,  521 => 115,  518 => 114,  515 => 113,  512 => 112,  509 => 111,  506 => 110,  501 => 109,  498 => 108,  496 => 107,  493 => 106,  485 => 100,  483 => 99,  480 => 98,  473 => 97,  464 => 244,  462 => 243,  459 => 242,  453 => 240,  451 => 239,  448 => 238,  446 => 235,  443 => 234,  439 => 232,  437 => 229,  434 => 228,  432 => 227,  427 => 224,  425 => 222,  420 => 219,  418 => 140,  414 => 138,  410 => 136,  408 => 97,  405 => 96,  403 => 95,  399 => 94,  396 => 93,  393 => 92,  390 => 91,  387 => 90,  384 => 89,  381 => 88,  378 => 87,  375 => 86,  373 => 85,  366 => 84,  361 => 81,  357 => 79,  348 => 77,  344 => 76,  341 => 75,  338 => 74,  331 => 73,  325 => 71,  316 => 69,  312 => 68,  309 => 67,  302 => 66,  296 => 61,  290 => 58,  285 => 57,  283 => 56,  280 => 55,  274 => 54,  272 => 6,  269 => 54,  263 => 53,  260 => 52,  257 => 51,  250 => 50,  244 => 73,  242 => 66,  239 => 65,  235 => 63,  233 => 50,  230 => 49,  227 => 48,  220 => 47,  215 => 6,  214 => 43,  213 => 6,  212 => 42,  211 => 41,  209 => 40,  202 => 39,  195 => 36,  191 => 35,  186 => 34,  179 => 33,  172 => 30,  168 => 29,  163 => 28,  156 => 27,  144 => 23,  140 => 22,  135 => 21,  128 => 20,  116 => 16,  112 => 15,  107 => 14,  100 => 13,  89 => 9,  78 => 8,  74 => 5,  72 => 46,  70 => 11,  68 => 6,  66 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}
