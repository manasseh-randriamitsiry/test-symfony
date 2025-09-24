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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_0ee227504d55a400b3dcb8fd8f7f452d extends Template
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

        // line 3
        $_trait_0 = $this->load("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", 3);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_ealabel' => [$this, 'block_ea_form_fieldset_open_ealabel'],
                'ea_form_fieldset_open_label' => [$this, 'block_ea_form_fieldset_open_label'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 15
        yield "
";
        // line 16
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 22
        yield "
";
        // line 23
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 30
        yield "
";
        // line 32
        yield "
";
        // line 33
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 43
        yield "
";
        // line 44
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 52
        yield "
";
        // line 53
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 58
        yield "
";
        // line 59
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 64
        yield "
";
        // line 65
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 73
        yield "
";
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 121
        yield "
";
        // line 122
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 133
        yield "
";
        // line 134
        yield from $this->unwrap()->yieldBlock('collection_row', $context, $blocks);
        // line 160
        yield "
";
        // line 161
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 190
        yield "
";
        // line 191
        yield from $this->unwrap()->yieldBlock('collection_entry_row', $context, $blocks);
        // line 234
        yield "
";
        // line 235
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 252
        yield "
";
        // line 253
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 258
        yield "
";
        // line 260
        yield "
";
        // line 261
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 305
        yield "
";
        // line 307
        yield "
";
        // line 308
        yield from $this->unwrap()->yieldBlock('empty_collection', $context, $blocks);
        // line 313
        yield "
";
        // line 314
        yield from $this->unwrap()->yieldBlock('vich_file_row', $context, $blocks);
        // line 318
        yield "
";
        // line 319
        yield from $this->unwrap()->yieldBlock('vich_file_widget', $context, $blocks);
        // line 353
        yield "
";
        // line 354
        yield from $this->unwrap()->yieldBlock('vich_image_row', $context, $blocks);
        // line 358
        yield "
";
        // line 359
        yield from $this->unwrap()->yieldBlock('vich_image_widget', $context, $blocks);
        // line 425
        yield "
";
        // line 426
        yield from $this->unwrap()->yieldBlock('ea_crud_rest', $context, $blocks);
        // line 429
        yield "
";
        // line 431
        yield from $this->unwrap()->yieldBlock('ea_crud_widget', $context, $blocks);
        // line 436
        yield "
";
        // line 438
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_panels', $context, $blocks);
        // line 443
        yield "
";
        // line 444
        yield from $this->unwrap()->yieldBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 509
        yield "
";
        // line 511
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_widget', $context, $blocks);
        // line 514
        yield "
";
        // line 515
        yield from $this->unwrap()->yieldBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 519
        yield "
";
        // line 521
        yield from $this->unwrap()->yieldBlock('ea_code_editor_widget', $context, $blocks);
        // line 531
        yield "
";
        // line 533
        yield from $this->unwrap()->yieldBlock('ea_text_editor_widget', $context, $blocks);
        // line 544
        yield "
";
        // line 546
        yield from $this->unwrap()->yieldBlock('ea_form_row_row', $context, $blocks);
        // line 549
        yield "
";
        // line 550
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 556
        yield "
";
        // line 557
        yield from $this->unwrap()->yieldBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 564
        yield "
";
        // line 565
        yield from $this->unwrap()->yieldBlock('ea_form_column_open_row', $context, $blocks);
        // line 584
        yield "
";
        // line 585
        yield from $this->unwrap()->yieldBlock('ea_form_column_close_row', $context, $blocks);
        // line 588
        yield "
";
        // line 589
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_ealabel', $context, $blocks);
        // line 600
        yield "
";
        // line 601
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_label', $context, $blocks);
        // line 622
        yield "
";
        // line 623
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 635
        yield "
";
        // line 636
        yield from $this->unwrap()->yieldBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 642
        yield "
";
        // line 643
        yield from $this->unwrap()->yieldBlock('ea_form_tablist_row', $context, $blocks);
        // line 671
        yield "
";
        // line 672
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 676
        yield "
";
        // line 677
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 681
        yield "
";
        // line 682
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 695
        yield "
";
        // line 696
        yield from $this->unwrap()->yieldBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 700
        yield "
";
        // line 702
        yield from $this->unwrap()->yieldBlock('ea_filters_widget', $context, $blocks);
        // line 724
        yield "
";
        // line 725
        yield from $this->unwrap()->yieldBlock('comparison_widget', $context, $blocks);
        // line 728
        yield "
";
        // line 729
        yield from $this->unwrap()->yieldBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 739
        yield "
";
        // line 740
        yield from $this->unwrap()->yieldBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 743
        yield "
";
        // line 744
        yield from $this->unwrap()->yieldBlock('ea_fileupload_widget', $context, $blocks);
        // line 806
        yield "
";
        // line 807
        yield from $this->unwrap()->yieldBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 874
        yield "
";
        // line 875
        yield from $this->unwrap()->yieldBlock('ea_slug_widget', $context, $blocks);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "errors", [], "any", false, false, false, 6)) > 0) && CoreExtension::inFilter("ea_crud", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 6), "block_prefixes", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "block_prefixes", [], "any", false, false, false, 6), [])) : ([]))))) {
            // line 7
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["errorClass" => "global-invalid-feedback"]]);
            yield "
    ";
        }
        // line 9
        yield "
    ";
        // line 10
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
    ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <input type=\"hidden\" name=\"referrer\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", ["referrer"], "method", false, false, false, 12), "html", null, true);
            yield "\">
    ";
        }
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 18
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            yield "
        ";
        }
        // line 20
        yield "    </form>
";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 25
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "errorClass", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                yield " invalid-feedback d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    ";
        }
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 35
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 38
            yield "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        if ((($context["widget"] ?? null) != "single_text")) {
            // line 46
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 46), "")) : ("")) . " form-inline"))]);
        }
        // line 48
        yield "<div class=\"datetime-widget datetime-widget-datetime\">";
        // line 49
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        // line 50
        yield "</div>
";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "<div class=\"datetime-widget datetime-widget-date\">";
        // line 55
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        // line 56
        yield "</div>";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "<div class=\"datetime-widget datetime-widget-time\">";
        // line 61
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        // line 62
        yield "</div>";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        if ((($tmp = ((array_key_exists("vich", $context)) ? (Twig\Extension\CoreExtension::default(($context["vich"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "file")) : ("file"));
            // line 68
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 70
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "    ";
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 78), "")) : ("")) . " form-group")]);
        // line 80
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 80), "ea_vars", [], "any", false, false, false, 80), "field", [], "any", false, false, false, 80);
        // line 81
        yield "
    <div class=\"";
        // line 82
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 82)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 82), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 82)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 82), "html", null, true)) : (""))));
        yield "\">";
        // line 83
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 83), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 83), "mb-3")) : ("mb-3"))));
        // line 84
        yield "<div ";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((($context["row_class"] ?? null) . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 84, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 86
        yield "<div class=\"form-widget\">
                ";
        // line 87
        $context["has_prepend_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 87), null)) : (null)));
        // line 88
        yield "                ";
        $context["has_append_html"] =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 88), null)) : (null)));
        // line 89
        yield "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 90
        yield "
                ";
        // line 91
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"input-group\">";
        }
        // line 92
        yield "                    ";
        if ((($tmp = ($context["has_prepend_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 94);
            yield "</span>
                        </div>
                    ";
        }
        // line 97
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

                    ";
        // line 100
        if ((($tmp = ($context["has_append_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                        <span class=\"input-group-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 101);
            yield "</span>
                    ";
        }
        // line 103
        yield "                ";
        if ((($tmp = ($context["has_input_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "</div>";
        }
        // line 104
        yield "
                ";
        // line 105
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 105)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 106), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            yield "</small>
                ";
        } elseif ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 107
($context["form"] ?? null), "vars", [], "any", false, true, false, 107), "help", [], "any", true, true, false, 107) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 107), "help", [], "any", false, false, false, 107)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                    <small class=\"form-text form-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "help", [], "any", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "help_translation_parameters", [], "any", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "translation_domain", [], "any", false, false, false, 108));
            yield "</small>
                ";
        }
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 112
        yield "</div>
        </div>
    </div>

    ";
        // line 117
        yield "    ";
        if ((null === ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 117), null)) : (null)))) {
            // line 118
            yield "        <div class=\"flex-fill\"></div>
    ";
        }
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        yield "    ";
        if (("ea-autocomplete" == ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 124
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 129
            yield "    ";
        }
        // line 130
        yield "
    ";
        // line 131
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 135
        yield "    ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 135))) {
            // line 136
            yield "        ";
            $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 137
            yield "    ";
        }
        // line 138
        yield "
    ";
        // line 139
        $context["maxKey"] = 0;
        // line 140
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 140)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 141
            yield "        ";
            if (CoreExtension::matches("/^\\d+\$/", $context["key"])) {
                // line 142
                yield "            ";
                $context["intKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber($context["key"], 0, "", "", "");
                // line 143
                yield "            ";
                if ((($context["intKey"] ?? null) > ($context["maxKey"] ?? null))) {
                    // line 144
                    yield "                ";
                    $context["maxKey"] = ($context["intKey"] ?? null);
                    // line 145
                    yield "            ";
                }
                // line 146
                yield "        ";
            }
            // line 147
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "
    ";
        // line 149
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 151
($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "ea_vars", [], "any", false, false, false, 151), "field", [], "any", false, false, false, 151) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "ea_vars", [], "any", false, false, false, 151), "field", [], "any", false, false, false, 151), "customOptions", [], "any", false, false, false, 151), "get", ["entryIsComplex"], "method", false, false, false, 151))) ? ("true") : ("false")), "data-allow-add" => (((($tmp =         // line 152
($context["allow_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-allow-delete" => (((($tmp =         // line 153
($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-num-items" => ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 154
($context["form"] ?? null), "children", [], "any", false, false, false, 154))) ? (0) : ((($context["maxKey"] ?? null) + 1))), "data-form-type-name-placeholder" => ((        // line 155
array_key_exists("prototype", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 155), "name", [], "any", false, false, false, 155)) : (""))]);
        // line 157
        yield "
    ";
        // line 158
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "    ";
        // line 164
        yield "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
        // line 165
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "ea_vars", [], "any", false, true, false, 165), "field", [], "any", false, true, false, 165), "fieldFqcn", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 165), "ea_vars", [], "any", false, false, false, 165), "field", [], "any", false, false, false, 165), "fieldFqcn", [], "any", false, false, false, 165), false)) : (false)));
        // line 166
        yield "
    <div class=\"ea-form-collection-items\">
        ";
        // line 168
        if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
            yield "
        ";
        } elseif ((($tmp =         // line 170
($context["is_array_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
        ";
        } else {
            // line 173
            yield "            <div class=\"accordion\">
                ";
            // line 174
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 177
        yield "    </div>

    ";
        // line 179
        if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 179), "prototype", [], "any", true, true, false, 179))) {
            // line 180
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
            // line 181
            yield "    ";
        }
        // line 182
        yield "
    ";
        // line 183
        if ((((array_key_exists("allow_add", $context)) ? (Twig\Extension\CoreExtension::default(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 184
            yield "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            ";
            // line 185
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:plus", "class" => "pr-1"]);
            yield "
            ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            yield "
        </button>
    ";
        }
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
        yield "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_vars", [], "any", false, true, false, 192), "field", [], "any", false, true, false, 192), "fieldFqcn", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 192), "ea_vars", [], "any", false, false, false, 192), "field", [], "any", false, false, false, 192), "fieldFqcn", [], "any", false, false, false, 192), false)) : (false)));
        // line 193
        yield "    ";
        $context["is_complex"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_vars", [], "any", false, true, false, 193), "field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", ["entryIsComplex"], "method", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryIsComplex"], "method", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 193), "ea_vars", [], "any", false, false, false, 193), "field", [], "any", false, false, false, 193), "customOptions", [], "any", false, false, false, 193), "get", ["entryIsComplex"], "method", false, false, false, 193)) : (false));
        // line 194
        yield "    ";
        $context["to_string_method"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 194), "ea_vars", [], "any", false, true, false, 194), "field", [], "any", false, true, false, 194), "customOptions", [], "any", false, true, false, 194), "get", ["entryToStringMethod"], "method", true, true, false, 194) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 194), "ea_vars", [], "any", false, false, false, 194), "field", [], "any", false, false, false, 194), "customOptions", [], "any", false, false, false, 194), "get", ["entryToStringMethod"], "method", false, false, false, 194)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 194), "ea_vars", [], "any", false, false, false, 194), "field", [], "any", false, false, false, 194), "customOptions", [], "any", false, false, false, 194), "get", ["entryToStringMethod"], "method", false, false, false, 194)) : (null));
        // line 195
        yield "    ";
        $context["allows_deleting_items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "allow_delete", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 195), "allow_delete", [], "any", false, false, false, 195), false)) : (false));
        // line 196
        yield "    ";
        $context["render_expanded"] = ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 196), "valid", [], "any", false, false, false, 196) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 196), "ea_vars", [], "any", false, true, false, 196), "field", [], "any", false, true, false, 196), "customOptions", [], "any", false, true, false, 196), "get", ["renderExpanded"], "method", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 196), "ea_vars", [], "any", false, false, false, 196), "field", [], "any", false, false, false, 196), "customOptions", [], "any", false, false, false, 196), "get", ["renderExpanded"], "method", false, false, false, 196), false)) : (false)));
        // line 197
        yield "    ";
        $context["delete_item_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 198
            yield "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            yield "\">
            ";
            // line 200
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
        </button>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 203
        yield "
    <div class=\"field-collection-item ";
        // line 204
        yield (((($tmp = ($context["is_complex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-collection-item-complex") : (""));
        yield " ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 204), "valid", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield "\">
        ";
        // line 205
        if ((($tmp = ((array_key_exists("is_array_field", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_array_field"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
            // line 207
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            ";
            // line 208
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 209
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 211
            yield "        ";
        } else {
            // line 212
            yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 214
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\">
                        ";
            // line 215
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-collection-item-collapse-marker"]);
            yield "
                        ";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null), ($context["to_string_method"] ?? null)), "html", null, true);
            yield "
                    </button>

                    ";
            // line 219
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 220
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delete_item_button"] ?? null), "html", null, true);
                yield "
                    ";
            }
            // line 222
            yield "                </h2>
                <div id=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "-contents\" class=\"accordion-collapse collapse ";
            yield (((($tmp = ($context["render_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 226
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 232
        yield "    </div>
";
        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 236
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 237
        if (CoreExtension::inFilter("collection", ($context["block_prefixes"] ?? null))) {
            // line 238
            yield "            ";
            // line 240
            yield "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))));
            // line 241
            yield "            ";
            if ((($tmp = ($context["isEmptyCollection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 242
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("empty_collection", $context, $blocks);
                yield "
            ";
            }
            // line 244
            yield "            ";
            if ((($context["isEmptyCollection"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 244), "prototype", [], "any", true, true, false, 244))) {
                // line 245
                yield "                ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->unwrap()->renderBlock("empty_collection", $context, $blocks)]);
                // line 246
                yield "            ";
            }
            // line 247
            yield "        ";
        }
        // line 248
        yield "
        ";
        // line 249
        yield from $this->yieldParentBlock("form_widget_compound", $context, $blocks);
        yield "
    </div>
";
        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 254
        yield "<div class=\"form-group field-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 254), "css_class", [], "any", true, true, false, 254)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 254), "css_class", [], "any", false, false, false, 254), "")) : ("")), "html", null, true);
        yield "\">";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 256
        yield "</div>";
        yield from [];
    }

    // line 261
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 262
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 266
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 267
                $context["element"] = "legend";
                // line 268
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 268)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 268), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 270
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 270)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 270), "")) : ("")) . " form-control-label"))]);
            }
            // line 272
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 273
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 273)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 273), "")) : ("")) . " required"))]);
            }
            // line 275
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 278
($context["label"] ?? null))) {
                // line 279
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 280
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 281
($context["name"] ?? null), "%id%" =>                     // line 282
($context["id"] ?? null)]);
                } else {
                    // line 285
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 288
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if ((($tmp = ($context["label_attr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v3 = $context;
                $_v4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($_v4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 288, $this->getSourceContext());
                }
                $_v4 = CoreExtension::toArray($_v4);
                $context = $_v4 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v3;
            }
            yield ">";
            // line 289
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 290
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 291
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                } else {
                    // line 293
                    yield ($context["label"] ?? null);
                }
            } else {
                // line 296
                if ((((array_key_exists("label_html", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 297
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 299
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 302
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        yield from [];
    }

    // line 308
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_collection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 309
        yield "    <div class=\"empty collection-empty\">
        ";
        // line 310
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["label/empty"], "method", false, false, false, 310));
        yield "
    </div>
";
        yield from [];
    }

    // line 314
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 315
        yield "    ";
        $context["force_error"] = true;
        // line 316
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 320
        yield "    <div class=\"ea-vich-file\">
        ";
        // line 321
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "            <a class=\"ea-vich-file-name\" href=\"";
            yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
            yield "\">
                ";
            // line 323
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
            // line 324
            if ((($tmp = ((array_key_exists("download_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_label"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 327
                yield ((Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["download_uri"] ?? null), "/")), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"), "html", null, true)));
            }
            // line 329
            yield "</a>
        ";
        }
        // line 331
        yield "
        ";
        // line 332
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 333
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 333), "vars", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 336), "vars", [], "any", false, false, false, 336), "id", [], "any", false, false, false, 336), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 338
        yield "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 341
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 343), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 346
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 346)) {
            // line 347
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 347), 'row');
            yield "
            ";
        }
        // line 349
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 350), "vars", [], "any", false, false, false, 350), "id", [], "any", false, false, false, 350), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        yield from [];
    }

    // line 354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 355
        yield "    ";
        $context["force_error"] = true;
        // line 356
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 359
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_vich_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 360
        yield "    ";
        $context["formTypeOptions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 360), "formTypeOptions", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, false, false, 360), "formTypeOptions", [], "any", false, false, false, 360), "")) : (""));
        // line 361
        yield "    <div class=\"ea-vich-image\">
        ";
        // line 362
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("image_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["image_uri"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 363
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("download_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 364
                yield "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 365
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 365) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 365)))) {
                    // line 366
                    yield "                        ";
                    // line 369
                    yield "                            <img style=\"cursor: initial\" src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                        ";
                    // line 371
                    yield "                    ";
                } else {
                    // line 372
                    yield "                        <img style=\"cursor: initial\" src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 374
                yield "                </div>
            ";
            } else {
                // line 376
                yield "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 377
                yield "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\">
                    ";
                // line 379
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 379) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 379)))) {
                    // line 380
                    yield "                        ";
                    // line 383
                    yield "                            <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                        ";
                    // line 385
                    yield "                    ";
                } else {
                    // line 386
                    yield "                        <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 388
                yield "                </a>

                <div id=\"";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_lightbox_id"] ?? null), "html", null, true);
                yield "\" class=\"ea-lightbox\">
                    ";
                // line 391
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 391) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 391)))) {
                    // line 392
                    yield "                        ";
                    // line 395
                    yield "                            <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
                    yield "\">
                        ";
                    // line 397
                    yield "                    ";
                } else {
                    // line 398
                    yield "                        <img src=\"";
                    yield (((($context["asset_helper"] ?? null) === true)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["download_uri"] ?? null), "html", null, true)));
                    yield "\">
                    ";
                }
                // line 400
                yield "                </div>
            ";
            }
            // line 402
            yield "        ";
        }
        // line 403
        yield "
        ";
        // line 404
        $context["file_upload_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 405
            yield "            var newFile = document.getElementById('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 405), "vars", [], "any", false, false, false, 405), "id", [], "any", false, false, false, 405), "html", null, true);
            yield "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 408), "vars", [], "any", false, false, false, 408), "id", [], "any", false, false, false, 408), "html", null, true);
            yield "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 410
        yield "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 413
        yield "            <div class=\"btn btn-secondary input-file-container\">
                ";
        // line 414
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:upload"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        yield "
                ";
        // line 415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 415), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        yield "
            </div>

            ";
        // line 418
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 418)) {
            // line 419
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 419), 'row');
            yield "
            ";
        }
        // line 421
        yield "        </div>
        <div class=\"small\" id=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 422), "vars", [], "any", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
        yield "_new_file_name\"></div>
    </div>
";
        yield from [];
    }

    // line 426
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 427
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
";
        yield from [];
    }

    // line 431
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 432
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 433
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 438
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_panels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 439
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 439.");
        // line 440
        yield "
    ";
        // line 441
        yield from         $this->unwrap()->yieldBlock("ea_crud_widget_fieldsets", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 444
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_crud_widget_fieldsets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 445
        yield "    ";
        trigger_deprecation('', '', "The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." in \"@EasyAdmin/crud/form_theme.html.twig\" at line 445.");
        // line 446
        yield "
    ";
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 447), "ea_crud_form", [], "any", false, false, false, 447), "form_fieldsets", [], "any", false, false, false, 447), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 447) || (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 447) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 448
            yield "        ";
            $context["fieldset_has_header"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 448), false)) : (false)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 448), false)) : (false))) || ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 448), false)) : (false)));
            // line 449
            yield "
        ";
            // line 450
            $context["collapsible"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 450);
            // line 451
            yield "        ";
            $context["collapsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 451);
            // line 452
            yield "
        <div class=\"";
            // line 453
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 453) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 453)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 453), "html", null, true)) : (""));
            yield "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 455
            if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                    <div class=\"form-fieldset-header ";
                yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 456)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 456), false)) : (false)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 458
                if ((($tmp =  !($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 459
                    yield "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 461
                    yield "                                href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 462
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                                aria-expanded=\"";
                    // line 463
                    yield (((($tmp = ($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
                    yield "\"
                            ";
                }
                // line 465
                yield "                            >
                                ";
                // line 466
                if ((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 467
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
                    yield "
                                ";
                }
                // line 469
                yield "
                                ";
                // line 470
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 470)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 470), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 471
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 471), "class" => "form-fieldset-icon"]);
                    yield "
                                ";
                }
                // line 473
                yield "                                ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 473));
                yield "
                            </a>

                            ";
                // line 476
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 476)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 476), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 477
                    yield "                                <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 477));
                    yield "</div>
                            ";
                }
                // line 479
                yield "                        </div>
                    </div>
                ";
            }
            // line 482
            yield "
                <div id=\"content-";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldset_name"], "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !($context["collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                    <div class=\"row\">
                        ";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "block_prefixes", [], "any", false, false, false, 485)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "ea_crud_form", [], "any", false, false, false, 485), "form_fieldset", [], "any", false, false, false, 485) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 486
                yield "                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 486), "ea_crud_form", [], "any", false, false, false, 486), "form_tab", [], "any", false, false, false, 486) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 486), "ea_crud_form", [], "any", false, false, false, 486), "form_tab", [], "any", false, false, false, 486) == ($context["tab_name"] ?? null)))) {
                    // line 487
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                            ";
                }
                // line 489
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 490
            yield "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 494
        if (!$context['_iterated']) {
            // line 495
            yield "        ";
            // line 506
            yield "        ";
            yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 506, $this->getSourceContext())->macro_recursiveFieldsetForm(...[($context["form"] ?? null)]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 511
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 512
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 512), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        yield "
";
        yield from [];
    }

    // line 515
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_autocomplete_inner_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 516
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 516), "name", [], "any", false, false, false, 516);
        // line 517
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 521
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_code_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 522
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 524
($context["form"] ?? null), "vars", [], "any", false, false, false, 524), "ea_vars", [], "any", false, false, false, 524), "field", [], "any", false, false, false, 524), "customOptions", [], "any", false, false, false, 524), "get", ["language"], "method", false, false, false, 524), "data-tab-size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 525
($context["form"] ?? null), "vars", [], "any", false, false, false, 525), "ea_vars", [], "any", false, false, false, 525), "field", [], "any", false, false, false, 525), "customOptions", [], "any", false, false, false, 525), "get", ["tabSize"], "method", false, false, false, 525), "data-indent-with-tabs" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 526
($context["form"] ?? null), "vars", [], "any", false, false, false, 526), "ea_vars", [], "any", false, false, false, 526), "field", [], "any", false, false, false, 526), "customOptions", [], "any", false, false, false, 526), "get", ["indentWithTabs"], "method", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-show-line-numbers" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 527
($context["form"] ?? null), "vars", [], "any", false, false, false, 527), "ea_vars", [], "any", false, false, false, 527), "field", [], "any", false, false, false, 527), "customOptions", [], "any", false, false, false, 527), "get", ["showLineNumbers"], "method", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")), "data-number-of-rows" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 528
($context["form"] ?? null), "vars", [], "any", false, false, false, 528), "ea_vars", [], "any", false, false, false, 528), "field", [], "any", false, false, false, 528), "customOptions", [], "any", false, false, false, 528), "get", ["numOfRows"], "method", false, false, false, 528)])]);
        // line 529
        yield "
";
        yield from [];
    }

    // line 533
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_text_editor_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 534
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 536
($context["form"] ?? null), "vars", [], "any", false, true, false, 536), "ea_vars", [], "any", false, true, false, 536), "field", [], "any", false, true, false, 536), "customOptions", [], "any", false, true, false, 536), "get", ["numOfRows"], "method", true, true, false, 536)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 536), "ea_vars", [], "any", false, false, false, 536), "field", [], "any", false, false, false, 536), "customOptions", [], "any", false, false, false, 536), "get", ["numOfRows"], "method", false, false, false, 536), 5)) : (5)), "data-trix-editor-config" => json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 537
($context["form"] ?? null), "vars", [], "any", false, true, false, 537), "ea_vars", [], "any", false, true, false, 537), "field", [], "any", false, true, false, 537), "customOptions", [], "any", false, true, false, 537), "get", ["trixEditorConfig"], "method", true, true, false, 537)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 537), "ea_vars", [], "any", false, false, false, 537), "field", [], "any", false, false, false, 537), "customOptions", [], "any", false, false, false, 537), "get", ["trixEditorConfig"], "method", false, false, false, 537), null)) : (null)))])]);
        // line 538
        yield "

    <div class=\"ea-text-editor-wrapper ";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 540)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 540), "")) : ("")) . (((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))), "html", null, true);
        yield "\">
        <trix-editor input=\"";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" class=\"trix-content\"></trix-editor>
    </div>
";
        yield from [];
    }

    // line 546
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_row_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 547
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 547), "row_attr", [], "any", false, false, false, 547), "class", [], "any", false, false, false, 547), "html", null, true);
        yield "\"></div>
";
        yield from [];
    }

    // line 550
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 551
        yield "    ";
        // line 552
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 552), "ea_is_inside_tab", [], "any", true, true, false, 552)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 552), "ea_is_inside_tab", [], "any", false, false, false, 552), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 553
            yield "        <div class=\"row\">
    ";
        }
        yield from [];
    }

    // line 557
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 558
        yield "    ";
        // line 560
        yield "    ";
        if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 560), "ea_is_inside_tab", [], "any", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 560), "ea_is_inside_tab", [], "any", false, false, false, 560), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 561
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 565
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 566
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 566), "ea_vars", [], "any", false, false, false, 566), "field", [], "any", false, false, false, 566);
        // line 567
        yield "    ";
        $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 567);
        // line 568
        yield "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 568) != false)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 568) != null)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 568) != "")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 568) != null));
        // line 569
        yield "
    <div class=\"form-column ";
        // line 570
        yield (((($tmp =  !($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 570), "html", null, true);
        yield "\">
        ";
        // line 571
        if ((($tmp = ($context["column_has_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 574
            if ((($tmp = ($context["field_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["field_icon"] ?? null), "class" => "form-column-icon"]);
            }
            // line 575
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 575)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 575)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 575), "")) : ("")), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 575), "translationDomain", [], "any", false, false, false, 575));
            }
            // line 576
            yield "                </div>

                ";
            // line 578
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 578)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 579
                yield "                    <div class=\"form-column-help\">";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 579), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 579), "translationDomain", [], "any", false, false, false, 579));
                yield "</div>
                ";
            }
            // line 581
            yield "            </div>
        ";
        }
        yield from [];
    }

    // line 585
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_column_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 586
        yield "    </div>
";
        yield from [];
    }

    // line 589
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_ealabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 590
        yield "    ";
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 591
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "form-fieldset-collapse-marker"]);
            yield "
    ";
        }
        // line 593
        yield "
    ";
        // line 594
        if ((($tmp = ($context["ea_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 595
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => ($context["ea_icon"] ?? null), "class" => "form-fieldset-icon"]);
            yield "
    ";
        }
        // line 597
        yield "
    ";
        // line 598
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 598), "label", [], "any", false, false, false, 598));
        yield "
";
        yield from [];
    }

    // line 601
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 602
        yield "    <div class=\"form-fieldset-header ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
        yield " ";
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["ea_help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
        yield "\">
        <div class=\"form-fieldset-title\">
            ";
        // line 604
        if ((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 605
            yield "                <a href=\"#content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 605), "name", [], "any", false, false, false, 605), "html", null, true);
            yield "\" data-bs-toggle=\"collapse\"
                   class=\"form-fieldset-title-content form-fieldset-collapse ";
            // line 606
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
            yield "\"
                   aria-expanded=\"";
            // line 607
            yield (((($tmp = ($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield "\" aria-controls=\"content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 607), "name", [], "any", false, false, false, 607), "html", null, true);
            yield "\">
                    ";
            // line 608
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </a>
            ";
        } else {
            // line 611
            yield "                <span class=\"not-collapsible form-fieldset-title-content\">
                    ";
            // line 612
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'ealabel');
            yield "
                </span>
            ";
        }
        // line 615
        yield "
            ";
        // line 616
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 617
            yield "                <div class=\"form-fieldset-help\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
            yield "</div>
            ";
        }
        // line 619
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 623
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 624
        yield "    ";
        $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 624), "label", [], "any", false, false, false, 624) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 625
        yield "
    <div class=\"form-fieldset ";
        // line 626
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\">
        <fieldset>
            ";
        // line 628
        if ((($tmp = ($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 629
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            ";
        }
        // line 631
        yield "
            <div id=\"content-";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 632), "name", [], "any", false, false, false, 632), "html", null, true);
        yield "\" class=\"form-fieldset-body ";
        yield (((($tmp =  !($context["fieldset_has_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
        yield " ";
        yield (((($tmp = ($context["ea_is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
        yield " ";
        yield (((($tmp =  !($context["ea_is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\">
                <div class=\"row\">
";
        yield from [];
    }

    // line 636
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_fieldset_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 637
        yield "                </div>
            </div>
        </fieldset>
    </div>
";
        yield from [];
    }

    // line 643
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tablist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 644
        yield "    ";
        $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 645
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 646
        yield "    ";
        $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 647
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 647), "ea_vars", [], "any", false, false, false, 647), "field", [], "any", false, false, false, 647);
        // line 648
        yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 651));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 652
            yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 653
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 653)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 653), "html", null, true);
            yield "\" id=\"tablist-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 653), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            // line 654
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 654)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 654), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 655
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 655), "class" => "tab-nav-item-icon"]);
            }
            // line 657
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 657), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 657), "translationDomain", [], "any", false, false, false, 657));
            yield "

                        ";
            // line 659
            $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 659);
            // line 660
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 661
                yield "<span class=\"badge badge-danger\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                yield "\">";
                // line 662
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab_error_count"] ?? null), "html", null, true);
                // line 663
                yield "</span>";
            }
            // line 665
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        yield "        </ul>
    </div>
";
        yield from [];
    }

    // line 672
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 673
        yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
        yield from [];
    }

    // line 677
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_group_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 678
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 682
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_open_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 683
        yield "    ";
        $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 684
        yield "    ";
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 684), "ea_vars", [], "any", false, false, false, 684), "field", [], "any", false, false, false, 684);
        // line 685
        yield "
    <div id=\"";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_tab_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ea_css_class"] ?? null), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 686), "attr", [], "any", false, false, false, 686));
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
        // line 687
        if ((($tmp = ($context["ea_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 688
            yield "            <div class=\"content-header-help tab-help\">
                ";
            // line 689
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 689), "translationDomain", [], "any", false, false, false, 689));
            yield "
            </div>
        ";
        }
        // line 692
        yield "
        <div class=\"row\">
";
        yield from [];
    }

    // line 696
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_form_tabpane_close_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 697
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 702
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 703
        yield "    ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 703), "query", [], "any", false, true, false, 703), "all", [], "method", false, true, false, 703), "filters", [], "array", true, true, false, 703)) ? (Twig\Extension\CoreExtension::default((($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 703), "query", [], "any", false, false, false, 703), "all", [], "method", false, false, false, 703)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["filters"] ?? null) : null), [])) : ([])));
        // line 704
        yield "
    ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
            // line 706
            yield "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 707), "name", [], "any", false, false, false, 707), "html", null, true);
            yield "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 708), "html", null, true);
            yield "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 709
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 709), "name", [], "any", false, false, false, 709), ($context["applied_filters"] ?? null))) {
                yield "checked";
            }
            yield ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 710), "html", null, true);
            yield "\" aria-expanded=\"";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 710), "name", [], "any", false, false, false, 710), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            yield "\" aria-controls=\"filter-content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 710), "html", null, true);
            yield "\"
                        ";
            // line 711
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 711), "label_attr", [], "any", true, true, false, 711)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 711), "label_attr", [], "any", false, false, false, 711), [])) : ([])));
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
            // line 712
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 712), "label", [], "any", true, true, false, 712)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "label", [], "any", false, false, false, 712), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "name", [], "any", false, false, false, 712)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 712), "name", [], "any", false, false, false, 712)))), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 712), "translationDomain", [], "any", false, false, false, 712)), "html", null, true);
            yield "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 715
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 715), "html", null, true);
            yield "\" class=\"filter-content collapse ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 715), "name", [], "any", false, false, false, 715), ($context["applied_filters"] ?? null))) {
                yield "show";
            }
            yield "\" aria-labelledby=\"filter-heading-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 715), "html", null, true);
            yield "\">
                    <div class=\"form-widget\">
                        ";
            // line 717
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
                    </div>
                </div>
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
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 725
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_comparison_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 726
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 726), "attr", [], "any", false, false, false, 726), ["data-ea-comparison-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 726), "id", [], "any", false, false, false, 726)])]);
        yield "
";
        yield from [];
    }

    // line 729
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_numeric_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 730
        yield "    <div class=\"form-widget-compound\">
        ";
        // line 731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 731), 'row');
        yield "
        ";
        // line 732
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 732), 'row');
        yield "
        <div data-ea-value2-of-comparison-id=\"";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 733), "vars", [], "any", false, false, false, 733), "id", [], "any", false, false, false, 733), "html", null, true);
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 733), "vars", [], "any", false, false, false, 733), "value", [], "any", false, false, false, 733) != "between")) ? ("d-none") : (""));
        yield "\">
            ";
        // line 734
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 734), 'row');
        yield "
        </div>
    </div>";
        // line 737
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield from [];
    }

    // line 740
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_datetime_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 741
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("ea_numeric_filter_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 744
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 745
        yield "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 747
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 748
        yield "            ";
        $context["title"] = "";
        // line 749
        yield "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 750
        yield "            ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 751
            yield "                ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 752
                yield "                    ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 753
                yield "                ";
            } else {
                // line 754
                yield "                    ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 754);
                // line 755
                yield "                    ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 755));
                // line 756
                yield "                ";
            }
            // line 757
            yield "            ";
        }
        // line 758
        yield "            <div class=\"custom-file\">
                ";
        // line 759
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 759), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 759), "vars", [], "any", false, false, false, 759), "attr", [], "any", false, false, false, 759), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        yield "
                ";
        // line 760
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 760), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (CoreExtension::testEmpty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        yield "
            </div>
            <div class=\"input-group-text\">";
        // line 763
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 764
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 765
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 765)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 767
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 767)), "html", null, true);
                yield "
                    ";
            }
        }
        // line 770
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 771
            yield "                    <label class=\"btn ea-fileupload-delete-btn ";
            yield ((Twig\Extension\CoreExtension::testEmpty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 771), "vars", [], "any", false, false, false, 771), "id", [], "any", false, false, false, 771), "html", null, true);
            yield "\">
                        ";
            // line 772
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                    </label>
                ";
        }
        // line 775
        yield "                <label class=\"btn\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 775), "vars", [], "any", false, false, false, 775), "id", [], "any", false, false, false, 775), "html", null, true);
        yield "\">
                    ";
        // line 776
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
        yield "
                </label>
            </div>
        </div>
        ";
        // line 780
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 781
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 784
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 785
                yield "                        <tr>
                            <td>
                                ";
                // line 787
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 787))), "html", null, true);
                    yield "\">";
                }
                // line 788
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 788)), "html", null, true);
                yield "\">
                                        ";
                // line 789
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 789), "html", null, true);
                yield "
                                    </span>
                                ";
                // line 791
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 792
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 793
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 793)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 800
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 801
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 801), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 803
        yield "    </div>
    ";
        // line 804
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 804), 'errors');
        yield "
";
        yield from [];
    }

    // line 807
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_TODO_ea_fileupload_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 808
        yield "    ";
        $context["placeholder"] = "";
        // line 809
        yield "    ";
        $context["title"] = "";
        // line 810
        yield "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 811
        yield "    ";
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 812
            yield "        ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 813
                yield "            ";
                $context["placeholder"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 814
                yield "        ";
            } else {
                // line 815
                yield "            ";
                $context["placeholder"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 815);
                // line 816
                yield "            ";
                $context["title"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 816));
                // line 817
                yield "        ";
            }
            // line 818
            yield "    ";
        }
        // line 819
        yield "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 822
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 822), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 822), "vars", [], "any", false, false, false, 822), "attr", [], "any", false, false, false, 822), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        yield "

            ";
        // line 824
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 825
            yield "                <span class=\"input-group-text\">
                    ";
            // line 826
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 827
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(Twig\Extension\CoreExtension::reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 827)); })), "html", null, true);
                yield "
                    ";
            } else {
                // line 829
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 829)), "html", null, true);
                yield "
                    ";
            }
            // line 831
            yield "                </span>
            ";
        }
        // line 833
        yield "
            ";
        // line 834
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 835
            yield "                <button class=\"btn ea-fileupload-delete-btn\">
                    ";
            // line 836
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:delete"]);
            yield "
                </button>
            ";
        }
        // line 839
        yield "
            ";
        // line 840
        if ((($tmp = ($context["currentFiles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 841
            yield "                <button class=\"btn\">
                    ";
            // line 842
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:folder-open"]);
            yield "
                </button>
            ";
        }
        // line 845
        yield "        </div>

        ";
        // line 847
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 848
            yield "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 851
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 852
                yield "                        <tr>
                            <td>
                                ";
                // line 854
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 854))), "html", null, true);
                    yield "\">";
                }
                // line 855
                yield "                                    <span title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 855)), "html", null, true);
                yield "\">
                                        ";
                // line 856
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:file-lines"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 856), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 858
                if ((($tmp = ($context["download_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</a>";
                }
                // line 859
                yield "                            </td>
                            <td class=\"text-right file-size\">";
                // line 860
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 860)), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 863
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 867
        yield "        ";
        if ((($tmp = ($context["allow_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 868
            yield "            <div class=\"d-none\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 868), 'widget', ["label" => false]);
            yield "</div>
        ";
        }
        // line 870
        yield "    </div>

    ";
        // line 872
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 872), 'errors');
        yield "
";
        yield from [];
    }

    // line 875
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ea_slug_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 876
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(),         // line 878
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 878), "children", [], "any", false, false, false, 878)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 878), "id", [], "any", false, false, false, 878); }))]);
        // line 880
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 880)) {
            // line 881
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($_v7 =             // line 882
($context["attr"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["data-confirm-text"] ?? null) : null))]);
            // line 884
            yield "    ";
        }
        // line 885
        yield "
    <div class=\"input-group\">
        ";
        // line 887
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield "
        <button type=\"button\" class=\"btn\"
                data-icon-locked=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]), "html");
        yield "\"
                data-icon-unlocked=\"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock-open-solid"]), "html");
        yield "\">
            ";
        // line 891
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock"]);
        yield "
        </button>
    </div>
";
        yield from [];
    }

    // line 495
    public function macro_recursiveFieldsetForm($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 496
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!CoreExtension::inFilter("hidden", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 496), "block_prefixes", [], "any", false, false, false, 496)) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 496), "ea_crud_form", [], "any", false, true, false, 496), "form_tab", [], "any", true, true, false, 496) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 496), "ea_crud_form", [], "any", false, false, false, 496), "form_tab", [], "any", false, false, false, 496)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 496), "ea_crud_form", [], "any", false, true, false, 496), "form_tabs", [], "any", true, true, false, 496))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 497
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 497), "ea_crud_form", [], "any", false, true, false, 497), "form_tabs", [], "any", true, true, false, 497)) {
                    // line 498
                    yield "                    ";
                    // line 499
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_recursiveFieldsetForm", $context, 499, $this->getSourceContext())->macro_recursiveFieldsetForm(...[$context["field"]]);
                    yield "
                ";
                } else {
                    // line 501
                    yield "                    ";
                    // line 502
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    yield "
                ";
                }
                // line 504
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 505
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  2817 => 505,  2811 => 504,  2805 => 502,  2803 => 501,  2797 => 499,  2795 => 498,  2792 => 497,  2787 => 496,  2775 => 495,  2766 => 891,  2762 => 890,  2758 => 889,  2753 => 887,  2749 => 885,  2746 => 884,  2744 => 882,  2742 => 881,  2739 => 880,  2737 => 878,  2735 => 876,  2728 => 875,  2721 => 872,  2717 => 870,  2711 => 868,  2708 => 867,  2702 => 863,  2693 => 860,  2690 => 859,  2686 => 858,  2679 => 856,  2674 => 855,  2668 => 854,  2664 => 852,  2660 => 851,  2655 => 848,  2653 => 847,  2649 => 845,  2643 => 842,  2640 => 841,  2638 => 840,  2635 => 839,  2629 => 836,  2626 => 835,  2624 => 834,  2621 => 833,  2617 => 831,  2611 => 829,  2605 => 827,  2603 => 826,  2600 => 825,  2598 => 824,  2593 => 822,  2588 => 819,  2585 => 818,  2582 => 817,  2579 => 816,  2576 => 815,  2573 => 814,  2570 => 813,  2567 => 812,  2564 => 811,  2561 => 810,  2558 => 809,  2555 => 808,  2548 => 807,  2541 => 804,  2538 => 803,  2532 => 801,  2529 => 800,  2523 => 796,  2514 => 793,  2511 => 792,  2507 => 791,  2500 => 789,  2495 => 788,  2489 => 787,  2485 => 785,  2481 => 784,  2476 => 781,  2474 => 780,  2467 => 776,  2462 => 775,  2456 => 772,  2449 => 771,  2447 => 770,  2440 => 767,  2434 => 765,  2432 => 764,  2430 => 763,  2425 => 760,  2421 => 759,  2418 => 758,  2415 => 757,  2412 => 756,  2409 => 755,  2406 => 754,  2403 => 753,  2400 => 752,  2397 => 751,  2394 => 750,  2391 => 749,  2388 => 748,  2386 => 747,  2382 => 745,  2375 => 744,  2367 => 741,  2360 => 740,  2355 => 737,  2350 => 734,  2344 => 733,  2340 => 732,  2336 => 731,  2333 => 730,  2326 => 729,  2318 => 726,  2311 => 725,  2288 => 717,  2277 => 715,  2271 => 712,  2257 => 711,  2249 => 710,  2243 => 709,  2239 => 708,  2235 => 707,  2232 => 706,  2215 => 705,  2212 => 704,  2209 => 703,  2202 => 702,  2195 => 697,  2188 => 696,  2181 => 692,  2175 => 689,  2172 => 688,  2170 => 687,  2148 => 686,  2145 => 685,  2142 => 684,  2139 => 683,  2132 => 682,  2125 => 678,  2118 => 677,  2111 => 673,  2104 => 672,  2097 => 668,  2089 => 665,  2086 => 663,  2084 => 662,  2080 => 661,  2078 => 660,  2076 => 659,  2071 => 657,  2068 => 655,  2066 => 654,  2057 => 653,  2054 => 652,  2050 => 651,  2045 => 648,  2042 => 647,  2039 => 646,  2036 => 645,  2033 => 644,  2026 => 643,  2017 => 637,  2010 => 636,  1996 => 632,  1993 => 631,  1987 => 629,  1985 => 628,  1978 => 626,  1975 => 625,  1972 => 624,  1965 => 623,  1958 => 619,  1952 => 617,  1950 => 616,  1947 => 615,  1941 => 612,  1938 => 611,  1932 => 608,  1926 => 607,  1922 => 606,  1917 => 605,  1915 => 604,  1907 => 602,  1900 => 601,  1893 => 598,  1890 => 597,  1884 => 595,  1882 => 594,  1879 => 593,  1873 => 591,  1870 => 590,  1863 => 589,  1857 => 586,  1850 => 585,  1843 => 581,  1837 => 579,  1835 => 578,  1831 => 576,  1826 => 575,  1822 => 574,  1818 => 572,  1816 => 571,  1810 => 570,  1807 => 569,  1804 => 568,  1801 => 567,  1798 => 566,  1791 => 565,  1784 => 561,  1781 => 560,  1779 => 558,  1772 => 557,  1765 => 553,  1762 => 552,  1760 => 551,  1753 => 550,  1745 => 547,  1738 => 546,  1730 => 541,  1726 => 540,  1722 => 538,  1720 => 537,  1719 => 536,  1717 => 534,  1710 => 533,  1704 => 529,  1702 => 528,  1701 => 527,  1700 => 526,  1699 => 525,  1698 => 524,  1696 => 522,  1689 => 521,  1681 => 517,  1678 => 516,  1671 => 515,  1663 => 512,  1656 => 511,  1644 => 506,  1642 => 495,  1640 => 494,  1632 => 490,  1626 => 489,  1620 => 487,  1617 => 486,  1613 => 485,  1602 => 483,  1599 => 482,  1594 => 479,  1588 => 477,  1586 => 476,  1579 => 473,  1573 => 471,  1571 => 470,  1568 => 469,  1562 => 467,  1560 => 466,  1557 => 465,  1550 => 463,  1546 => 462,  1541 => 461,  1537 => 459,  1535 => 458,  1527 => 456,  1525 => 455,  1520 => 453,  1517 => 452,  1514 => 451,  1512 => 450,  1509 => 449,  1506 => 448,  1501 => 447,  1498 => 446,  1495 => 445,  1488 => 444,  1481 => 441,  1478 => 440,  1475 => 439,  1468 => 438,  1456 => 433,  1451 => 432,  1444 => 431,  1436 => 427,  1429 => 426,  1421 => 422,  1418 => 421,  1412 => 419,  1410 => 418,  1404 => 415,  1398 => 414,  1395 => 413,  1391 => 410,  1385 => 408,  1378 => 405,  1376 => 404,  1373 => 403,  1370 => 402,  1366 => 400,  1360 => 398,  1357 => 397,  1352 => 395,  1350 => 392,  1348 => 391,  1344 => 390,  1340 => 388,  1334 => 386,  1331 => 385,  1326 => 383,  1324 => 380,  1322 => 379,  1318 => 378,  1315 => 377,  1312 => 376,  1308 => 374,  1302 => 372,  1299 => 371,  1294 => 369,  1292 => 366,  1290 => 365,  1287 => 364,  1284 => 363,  1282 => 362,  1279 => 361,  1276 => 360,  1269 => 359,  1261 => 356,  1258 => 355,  1251 => 354,  1243 => 350,  1240 => 349,  1234 => 347,  1232 => 346,  1226 => 343,  1220 => 342,  1217 => 341,  1213 => 338,  1207 => 336,  1200 => 333,  1198 => 332,  1195 => 331,  1191 => 329,  1188 => 327,  1185 => 325,  1183 => 324,  1181 => 323,  1176 => 322,  1174 => 321,  1171 => 320,  1164 => 319,  1156 => 316,  1153 => 315,  1146 => 314,  1138 => 310,  1135 => 309,  1128 => 308,  1120 => 302,  1116 => 299,  1113 => 297,  1111 => 296,  1107 => 293,  1104 => 291,  1102 => 290,  1100 => 289,  1085 => 288,  1081 => 285,  1078 => 282,  1077 => 281,  1076 => 280,  1074 => 279,  1072 => 278,  1070 => 275,  1067 => 273,  1065 => 272,  1062 => 270,  1059 => 268,  1057 => 267,  1055 => 266,  1052 => 262,  1045 => 261,  1040 => 256,  1038 => 255,  1032 => 254,  1025 => 253,  1017 => 249,  1014 => 248,  1011 => 247,  1008 => 246,  1005 => 245,  1002 => 244,  996 => 242,  993 => 241,  990 => 240,  988 => 238,  986 => 237,  983 => 236,  976 => 235,  970 => 232,  961 => 226,  953 => 223,  950 => 222,  944 => 220,  942 => 219,  936 => 216,  932 => 215,  926 => 214,  922 => 212,  919 => 211,  913 => 209,  911 => 208,  907 => 207,  902 => 206,  900 => 205,  894 => 204,  891 => 203,  884 => 200,  880 => 199,  877 => 198,  874 => 197,  871 => 196,  868 => 195,  865 => 194,  862 => 193,  859 => 192,  852 => 191,  843 => 186,  839 => 185,  836 => 184,  834 => 183,  831 => 182,  828 => 181,  825 => 180,  823 => 179,  819 => 177,  813 => 174,  810 => 173,  804 => 171,  802 => 170,  797 => 169,  795 => 168,  791 => 166,  788 => 165,  785 => 164,  783 => 162,  776 => 161,  769 => 158,  766 => 157,  764 => 155,  763 => 154,  762 => 153,  761 => 152,  760 => 151,  759 => 149,  756 => 148,  750 => 147,  747 => 146,  744 => 145,  741 => 144,  738 => 143,  735 => 142,  732 => 141,  727 => 140,  725 => 139,  722 => 138,  719 => 137,  716 => 136,  713 => 135,  706 => 134,  699 => 131,  696 => 130,  693 => 129,  690 => 124,  687 => 123,  680 => 122,  673 => 118,  670 => 117,  664 => 112,  662 => 111,  656 => 108,  654 => 107,  649 => 106,  647 => 105,  644 => 104,  639 => 103,  633 => 101,  631 => 100,  626 => 98,  623 => 97,  617 => 94,  614 => 93,  611 => 92,  607 => 91,  604 => 90,  601 => 89,  598 => 88,  596 => 87,  593 => 86,  591 => 85,  579 => 84,  577 => 83,  574 => 82,  571 => 81,  568 => 80,  566 => 78,  564 => 77,  557 => 76,  551 => 70,  548 => 68,  546 => 67,  544 => 66,  537 => 65,  532 => 62,  530 => 61,  528 => 60,  521 => 59,  516 => 56,  514 => 55,  512 => 54,  505 => 53,  499 => 50,  497 => 49,  495 => 48,  492 => 46,  490 => 45,  483 => 44,  478 => 41,  475 => 39,  473 => 38,  471 => 37,  468 => 35,  466 => 34,  459 => 33,  453 => 28,  442 => 26,  437 => 25,  434 => 24,  427 => 23,  421 => 20,  415 => 18,  412 => 17,  405 => 16,  396 => 12,  394 => 11,  390 => 10,  387 => 9,  381 => 7,  378 => 6,  371 => 5,  366 => 875,  363 => 874,  361 => 807,  358 => 806,  356 => 744,  353 => 743,  351 => 740,  348 => 739,  346 => 729,  343 => 728,  341 => 725,  338 => 724,  336 => 702,  333 => 700,  331 => 696,  328 => 695,  326 => 682,  323 => 681,  321 => 677,  318 => 676,  316 => 672,  313 => 671,  311 => 643,  308 => 642,  306 => 636,  303 => 635,  301 => 623,  298 => 622,  296 => 601,  293 => 600,  291 => 589,  288 => 588,  286 => 585,  283 => 584,  281 => 565,  278 => 564,  276 => 557,  273 => 556,  271 => 550,  268 => 549,  266 => 546,  263 => 544,  261 => 533,  258 => 531,  256 => 521,  253 => 519,  251 => 515,  248 => 514,  246 => 511,  243 => 509,  241 => 444,  238 => 443,  236 => 438,  233 => 436,  231 => 431,  228 => 429,  226 => 426,  223 => 425,  221 => 359,  218 => 358,  216 => 354,  213 => 353,  211 => 319,  208 => 318,  206 => 314,  203 => 313,  201 => 308,  198 => 307,  195 => 305,  193 => 261,  190 => 260,  187 => 258,  185 => 253,  182 => 252,  180 => 235,  177 => 234,  175 => 191,  172 => 190,  170 => 161,  167 => 160,  165 => 134,  162 => 133,  160 => 122,  157 => 121,  155 => 76,  152 => 75,  149 => 73,  147 => 65,  144 => 64,  142 => 59,  139 => 58,  137 => 53,  134 => 52,  132 => 44,  129 => 43,  127 => 33,  124 => 32,  121 => 30,  119 => 23,  116 => 22,  114 => 16,  111 => 15,  109 => 5,  106 => 4,  104 => 2,  35 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/crud/form_theme.html.twig");
    }
}
