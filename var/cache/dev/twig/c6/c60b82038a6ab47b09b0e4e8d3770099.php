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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d extends Template
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
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'main_content_wrapper' => [$this, 'block_main_content_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 3
        $context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 4
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "htmlLocale", [], "any", false, false, false, 6), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "textDirection", [], "any", false, false, false, 6), "html", null, true);
        yield "\" data-turbo=\"false\">
<head>
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 15
        yield "
    ";
        // line 16
        $context["page_title_block_output"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield "    <title>";
        yield Twig\Extension\CoreExtension::striptags((isset($context["page_title_block_output"]) || array_key_exists("page_title_block_output", $context) ? $context["page_title_block_output"] : (function () { throw new RuntimeError('Variable "page_title_block_output" does not exist.', 17, $this->source); })()));
        yield "</title>

    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 22
        yield "
    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('configured_stylesheets', $context, $blocks);
        // line 27
        yield "
    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 31
        yield "
    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 39
        yield "
    ";
        // line 40
        yield from $this->unwrap()->yieldBlock('configured_javascripts', $context, $blocks);
        // line 44
        yield "
    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('configured_head_contents', $context, $blocks);
        // line 50
        yield "</head>

";
        // line 52
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 381
        yield "</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        // line 9
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 20
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 20, $this->source); })()), "assets", [], "any", false, false, false, 20), "defaultAssetPackageName", [], "any", false, false, false, 20)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 24
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "cssAssets", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 24, $this->source); })()), "assets", [], "any", false, false, false, 24), "cssAssets", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 24, $this->source); })()), "assets", [], "any", false, false, false, 24), "cssAssets", [], "any", false, false, false, 24)) : ([]))], false);
        yield "
        ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 25), "webpackEncoreAssets", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 25, $this->source); })()), "assets", [], "any", false, false, false, 25), "webpackEncoreAssets", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 25, $this->source); })()), "assets", [], "any", false, false, false, 25), "webpackEncoreAssets", [], "any", false, false, false, 25)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 29
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 29, $this->source); })()), "dashboardFaviconPath", [], "any", false, false, false, 29)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 33
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 33, $this->source); })()), "assets", [], "any", false, false, false, 33), "defaultAssetPackageName", [], "any", false, false, false, 33)), "html", null, true);
        yield "\"></script>

        ";
        // line 35
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 38
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 36
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "assetMapperAssets", [], "any", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 36, $this->source); })()), "assets", [], "any", false, false, false, 36), "assetMapperAssets", [], "any", false, false, false, 36)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 36, $this->source); })()), "assets", [], "any", false, false, false, 36), "assetMapperAssets", [], "any", false, false, false, 36)) : ([]))], false);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 41
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "jsAssets", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 41, $this->source); })()), "assets", [], "any", false, false, false, 41), "jsAssets", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 41, $this->source); })()), "assets", [], "any", false, false, false, 41), "jsAssets", [], "any", false, false, false, 41)) : ([]))], false);
        yield "
        ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 42), "webpackEncoreAssets", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "assets", [], "any", false, false, false, 42), "webpackEncoreAssets", [], "any", false, false, false, 42)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "assets", [], "any", false, false, false, 42), "webpackEncoreAssets", [], "any", false, false, false, 42)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 46
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 46), "headContents", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 46, $this->source); })()), "assets", [], "any", false, false, false, 46), "headContents", [], "any", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 46, $this->source); })()), "assets", [], "any", false, false, false, 46), "headContents", [], "any", false, false, false, 46)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 47
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        yield "    <body ";
        yield from $this->unwrap()->yieldBlock('body_attr', $context, $blocks);
        // line 54
        yield "        id=\"";
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\"
        class=\"ea ";
        // line 55
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\"
        data-ea-content-width=\"";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "crud", [], "any", false, false, false, 56), "contentWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "crud", [], "any", false, false, false, 56), "contentWidth", [], "any", false, false, false, 56), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "dashboardContentWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "dashboardContentWidth", [], "any", false, false, false, 56), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-sidebar-width=\"";
        // line 57
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "crud", [], "any", false, false, false, 57), "sidebarWidth", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "crud", [], "any", false, false, false, 57), "sidebarWidth", [], "any", false, false, false, 57), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "dashboardSidebarWidth", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "dashboardSidebarWidth", [], "any", false, false, false, 57), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 58
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
        data-ea-default-color-scheme=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 59, $this->source); })()), "dashboardDefaultColorScheme", [], "any", false, false, false, 59), "html", null, true);
        yield "\"
        data-ea-icon-set=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 60, $this->source); })()), "assets", [], "any", false, false, false, 60), "iconSet", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
        data-ea-icon-prefix=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 61, $this->source); })()), "assets", [], "any", false, false, false, 61), "defaultIconPrefix", [], "any", false, false, false, 61), "html", null, true);
        yield "\"
    >
    ";
        // line 63
        yield from $this->unwrap()->yieldBlock('javascript_page_layout', $context, $blocks);
        // line 66
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascript_page_color_scheme', $context, $blocks);
        // line 69
        yield "
    ";
        // line 70
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 371
        yield "
    ";
        // line 372
        yield from $this->unwrap()->yieldBlock('body_javascript', $context, $blocks);
        // line 373
        yield "
    ";
        // line 374
        yield from $this->unwrap()->yieldBlock('configured_body_contents', $context, $blocks);
        // line 379
        yield "    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 64
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 64, $this->source); })()), "assets", [], "any", false, false, false, 64), "defaultAssetPackageName", [], "any", false, false, false, 64)), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_color_scheme(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        // line 67
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 67, $this->source); })()), "assets", [], "any", false, false, false, 67), "defaultAssetPackageName", [], "any", false, false, false, 67)), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 71
        yield "        ";
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 74
        yield "
        ";
        // line 75
        $context["user_menu_avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield "            ";
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 76, $this->source); })()), "userMenu", [], "any", false, false, false, 76), "avatarUrl", [], "any", false, false, false, 76))) {
                // line 77
                yield "                <span class=\"user-avatar\">
                    ";
                // line 78
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:user"]);
                yield "
                </span>
            ";
            } else {
                // line 81
                yield "                <img class=\"user-avatar\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 81, $this->source); })()), "userMenu", [], "any", false, false, false, 81), "avatarUrl", [], "any", false, false, false, 81), "html", null, true);
                yield "\" />
            ";
            }
            // line 83
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "
        ";
        // line 85
        $context["user_menu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 86
            yield "            ";
            yield from $this->unwrap()->yieldBlock('user_menu', $context, $blocks);
            // line 103
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "
        ";
        // line 105
        $context["impersonator_permission"] = ((Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR", null, true)) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 106
        yield "
        ";
        // line 107
        $context["user_menu_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 108
            yield "            ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 6417279391);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 6417279391);
                $this->load("@EasyAdmin/layout.html.twig", 108, "6417279391")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 119
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "
        ";
        // line 121
        $context["settings_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 122
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 122, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 122) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 122, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 122))) {
                // line 123
                yield "                ";
                $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v1->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v1->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]), $context, "@EasyAdmin/layout.html.twig", 22121858011);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 22121858011);
                    $this->load("@EasyAdmin/layout.html.twig", 123, "22121858011")->display($embeddedContext, $embeddedBlocks);
                    $_v1->finishEmbedComponent();
                }
                // line 157
                yield "            ";
            }
            // line 158
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "
        <div class=\"wrapper\">
            ";
        // line 161
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 369
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flash_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 72
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 72, $this->source); })()), "templatePath", ["flash_messages"], "method", false, false, false, 72));
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_user_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 87
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 87, $this->source); })()), "userMenu", [], "any", false, false, false, 87), "items", [], "any", false, false, false, 87)) > 0)) {
            // line 88
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
            yield "

                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 90, $this->source); })()), "userMenu", [], "any", false, false, false, 90), "items", [], "any", false, false, false, 90));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 91
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                            ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 93
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                        yield "
                            ";
                    }
                    // line 95
                    yield "
                            ";
                    // line 96
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 96), [],                     // line 3
(isset($context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"]) || array_key_exists("__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020", $context) ? $context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"] : (function () { throw new RuntimeError('Variable "__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020" does not exist.', 3, $this->source); })())), "class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 96
$context["item"], "cssClass", [], "any", false, false, false, 96), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 96), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 96)]);
                    yield "
                        ";
                } else {
                    // line 98
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 98), [],                     // line 3
(isset($context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"]) || array_key_exists("__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020", $context) ? $context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"] : (function () { throw new RuntimeError('Variable "__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020" does not exist.', 3, $this->source); })())), "class" => ("user-action " . CoreExtension::getAttribute($this->env, $this->source,                     // line 98
$context["item"], "cssClass", [], "any", false, false, false, 98)), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 98), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 98), "target" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 98), "rel" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 98), "referrerpolicy" => "origin-when-cross-origin", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 98)]);
                    yield "
                        ";
                }
                // line 100
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                ";
        }
        // line 102
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 162
        yield "                <div class=\"responsive-header\">
                    ";
        // line 163
        yield from $this->unwrap()->yieldBlock('responsive_header', $context, $blocks);
        // line 193
        yield "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 197
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 219
        yield "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                ";
        // line 223
        yield from $this->unwrap()->yieldBlock('main_content_wrapper', $context, $blocks);
        // line 368
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 164
        yield "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            ";
        // line 165
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:menu-bars"]);
        yield "
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 169
        yield from $this->unwrap()->yieldBlock('responsive_header_logo', $context, $blocks);
        // line 174
        yield "                        </div>

                        ";
        // line 176
        $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v2->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 176, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v2->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 176, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 23953587231);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 23953587231);
            $this->load("@EasyAdmin/layout.html.twig", 176, "23953587231")->display($embeddedContext, $embeddedBlocks);
            $_v2->finishEmbedComponent();
        }
        // line 190
        yield "
                        ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 191, $this->source); })()), "html", null, true);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 170
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 170, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 170)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 170, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 170));
        yield "\">
                                    ";
        // line 171
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 171, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 171);
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 198
        yield "                            <header class=\"main-header\">
                                ";
        // line 199
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 213
        yield "                            </header>

                            ";
        // line 215
        yield from $this->unwrap()->yieldBlock('main_menu_wrapper', $context, $blocks);
        // line 218
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 200
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 201
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 211
        yield "                                </nav>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 201
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        // line 202
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 203
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 209
        yield "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 204
        yield "                                                <a class=\"logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 204, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 204)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 204, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 204));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 205
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 205, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 205);
        yield "</span>
                                                    <span class=\"logo-compact\">";
        // line 206
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:home"]);
        yield "</span>
                                                </a>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 216
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 216, $this->source); })()), "templatePath", ["main_menu"], "method", false, false, false, 216));
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content_wrapper"));

        // line 224
        yield "                <section class=\"main-content\">
                    ";
        // line 225
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 225, $this->source); })()), "crud", [], "any", false, false, false, 225)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 225, $this->source); })()), "crud", [], "any", false, false, false, 225), "isSearchEnabled", [], "any", false, false, false, 225));
        // line 226
        yield "                    <aside class=\"content-top ";
        yield (((($tmp = (isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 226, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        yield "\">
                        ";
        // line 227
        yield from $this->unwrap()->yieldBlock('content_top_header', $context, $blocks);
        // line 320
        yield "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 323
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 363
        yield "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 228
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('search_wrapper', $context, $blocks);
        // line 297
        yield "
                            ";
        // line 298
        yield from $this->unwrap()->yieldBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 315
        yield "
                            ";
        // line 316
        yield from $this->unwrap()->yieldBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 319
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 228
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_wrapper"));

        // line 229
        yield "                            <div class=\"content-search\">
                                ";
        // line 230
        if ((($tmp = (isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 230, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 294
            yield "                                ";
        }
        // line 295
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 232
        yield "                                        ";
        $context["formActionUrl"] = null;
        // line 233
        yield "                                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 233, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "                                            ";
            // line 235
            yield "                                            ";
            $context["crudController"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 235), "attributes", [], "any", false, true, false, 235), "get", ["crudControllerFqcn"], "method", true, true, false, 235) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "attributes", [], "any", false, false, false, 235), "get", ["crudControllerFqcn"], "method", false, false, false, 235)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "attributes", [], "any", false, false, false, 235), "get", ["crudControllerFqcn"], "method", false, false, false, 235)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "query", [], "any", false, false, false, 235), "get", ["crudControllerFqcn"], "method", false, false, false, 235)));
            // line 236
            yield "                                            ";
            $context["formActionUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [(isset($context["crudController"]) || array_key_exists("crudController", $context) ? $context["crudController"] : (function () { throw new RuntimeError('Variable "crudController" does not exist.', 236, $this->source); })())], "method", false, false, false, 236), "setAction", ["index"], "method", false, false, false, 236), "set", ["page", 1], "method", false, false, false, 236);
            // line 237
            yield "                                        ";
        }
        // line 238
        yield "                                        <form class=\"form-action-search\" method=\"get\" ";
        if ((($tmp = (isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 238, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 238, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
                                            ";
        // line 239
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 292
        yield "                                        </form>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 240
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 265
        yield "
                                                ";
        // line 266
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 266, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "query", [], "any", false, false, false, 268), "get", ["crudControllerFqcn"], "method", false, false, false, 268), "html", null, true);
            yield "\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                ";
        }
        // line 271
        yield "
                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        ";
        // line 274
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:search", "class" => "content-search-icon"]);
        yield "

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 277
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["query"], "method", false, false, false, 277))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 277), "query", [], "any", false, true, false, 277), "get", ["query"], "method", true, true, false, 277) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["query"], "method", false, false, false, 277)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["query"], "method", false, false, false, 277), "html", null, true)) : (""));
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 277, $this->source); })()), "i18n", [], "any", false, false, false, 277), "translationParameters", [], "any", false, false, false, 277), "EasyAdminBundle"), [],         // line 3
(isset($context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"]) || array_key_exists("__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020", $context) ? $context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"] : (function () { throw new RuntimeError('Variable "__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020" does not exist.', 3, $this->source); })())), "html", null, true);
        // line 277
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 277, $this->source); })()), "crud", [], "any", false, false, false, 277), "currentAction", [], "any", false, false, false, 277) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 277, $this->source); })()), "crud", [], "any", false, false, false, 277), "autofocusSearch", [], "any", false, false, false, 277) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "request", [], "any", false, false, false, 280), "query", [], "any", false, false, false, 280), "get", ["query"], "method", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                                                            ";
            $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 281);
            // line 282
            yield "                                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 282, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 283
                yield "                                                                ";
                $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 283), "setController", [(isset($context["crudController"]) || array_key_exists("crudController", $context) ? $context["crudController"] : (function () { throw new RuntimeError('Variable "crudController" does not exist.', 283, $this->source); })())], "method", false, false, false, 283), "setAction", ["index"], "method", false, false, false, 283), "set", ["page", 1], "method", false, false, false, 283);
                // line 284
                yield "                                                            ";
            }
            // line 285
            yield "                                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_reset_url"]) || array_key_exists("search_reset_url", $context) ? $context["search_reset_url"] : (function () { throw new RuntimeError('Variable "search_reset_url" does not exist.', 285, $this->source); })()), "html", null, true);
            yield "\" class=\"content-search-reset\">
                                                                ";
            // line 286
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 289
        yield "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 241
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 241, $this->source); })()), "search", [], "any", false, false, false, 241), "appliedFilters", [], "any", false, false, false, 241));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 242
            yield "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 243
                yield "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 244
                    yield "                                                                ";
                    // line 245
                    yield "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 246
                        yield "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 247
                            yield "                                                                        ";
                            // line 248
                            yield "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 249
                                yield "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 250
                                    yield "                                                                                <input type=\"hidden\" name=\"filters[";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIndex"], "html", null, true);
                                    yield "]\" value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIterValue"], "html", null, true);
                                    yield "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['subIndex'], $context['subIterValue'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 252
                                yield "                                                                        ";
                            } else {
                                // line 253
                                yield "                                                                            <input type=\"hidden\" name=\"filters[";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                yield "]\" value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["iterValue"], "html", null, true);
                                yield "\">
                                                                        ";
                            }
                            // line 255
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['index'], $context['iterValue'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 256
                        yield "                                                                ";
                    } else {
                        // line 257
                        yield "                                                                    <input type=\"hidden\" name=\"filters[";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">
                                                                ";
                    }
                    // line 259
                    yield "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                yield "                                                        ";
            } else {
                // line 261
                yield "                                                            <input type=\"hidden\" name=\"filters[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldValue"], "html", null, true);
                yield "\">
                                                        ";
            }
            // line 263
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['fieldValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 298
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu_wrapper"));

        // line 299
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 300
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 313
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 301
        yield "                                    ";
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 301, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 301, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 15502912091);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15502912091);
            $this->load("@EasyAdmin/layout.html.twig", 301, "15502912091")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 312
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 316
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_settings_dropdown_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "settings_dropdown_wrapper"));

        // line 317
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 317, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 323
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 324
        yield "                            <article class=\"content\">
                                ";
        // line 325
        yield from $this->unwrap()->yieldBlock('content_header_wrapper', $context, $blocks);
        // line 349
        yield "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 351
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 352
        yield "                                </section>

                                ";
        // line 354
        yield from $this->unwrap()->yieldBlock('content_footer_wrapper', $context, $blocks);
        // line 361
        yield "                            </article>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 326
        yield "                                    ";
        $context["has_help_message"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 326), "helpMessage", [], "any", true, true, false, 326) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 326, $this->source); })()), "crud", [], "any", false, false, false, 326), "helpMessage", [], "any", false, false, false, 326)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 326, $this->source); })()), "crud", [], "any", false, false, false, 326), "helpMessage", [], "any", false, false, false, 326)) : ("")));
        // line 327
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 328
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 347
        yield "                                    </section>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 328
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 329
        yield "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 331
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 332
        yield "
                                                    ";
        // line 333
        yield from $this->unwrap()->yieldBlock('content_help', $context, $blocks);
        // line 340
        yield "                                                </h1>
                                            </div>

                                            ";
        // line 343
        yield from $this->unwrap()->yieldBlock('page_actions_wrapper', $context, $blocks);
        // line 346
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 333
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 334
        yield "                                                        ";
        if ((($tmp = (isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 334, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 335
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 335, $this->source); })()), "crud", [], "any", false, false, false, 335), "helpMessage", [], "any", false, false, false, 335), [],             // line 3
(isset($context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"]) || array_key_exists("__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020", $context) ? $context["__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020"] : (function () { throw new RuntimeError('Variable "__internal_07b596ea74142fe518e8ea99375813261e9659dbd61af11d02f9a2cad2423020" does not exist.', 3, $this->source); })())), "html");
            // line 335
            yield "\">
                                                                ";
            // line 336
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 339
        yield "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 343
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 344
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 355
        yield "                                    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        $this->unwrap()->renderBlock("content_footer", $context, $blocks))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 356
            yield "                                        <section class=\"content-footer\">
                                            ";
            // line 357
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 358
            yield "                                        </section>
                                    ";
        }
        // line 360
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 357
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 372
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 375
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 375), "bodyContents", [], "any", true, true, false, 375) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 375, $this->source); })()), "assets", [], "any", false, false, false, 375), "bodyContents", [], "any", false, false, false, 375)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 375, $this->source); })()), "assets", [], "any", false, false, false, 375), "bodyContents", [], "any", false, false, false, 375)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 376
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___6417279391 extends Template
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
        // line 108
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 108, $this->source); })()), 108);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]), $context, "@EasyAdmin/layout.html.twig", 13626770771);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 13626770771);
            $this->load("@EasyAdmin/layout.html.twig", 109, "13626770771")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 116
        yield "
                ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu"]) || array_key_exists("user_menu", $context) ? $context["user_menu"] : (function () { throw new RuntimeError('Variable "user_menu" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___13626770771 extends Template
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
        // line 109
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 109, $this->source); })()), 109);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield "<div>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                        <span class=\"user-name\">";
        // line 113
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", [], "EasyAdminBundle"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 113, $this->source); })()), "userMenu", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true)));
        yield "</span>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___22121858011 extends Template
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
        // line 123
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 123, $this->source); })()), 123);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 4991107621);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 4991107621);
            $this->load("@EasyAdmin/layout.html.twig", 124, "4991107621")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 127
        yield "
                    ";
        // line 128
        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 3361749131);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3361749131);
            $this->load("@EasyAdmin/layout.html.twig", 128, "3361749131")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 156
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___4991107621 extends Template
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
        // line 124
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 124, $this->source); })()), 124);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:gear"]);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___3361749131 extends Template
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
        // line 128
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 128, $this->source); })()), 128);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v7 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v7->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v7->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 16619069031);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 16619069031);
            $this->load("@EasyAdmin/layout.html.twig", 129, "16619069031")->display($embeddedContext, $embeddedBlocks);
            $_v7->finishEmbedComponent();
        }
        // line 155
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___16619069031 extends Template
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
        // line 129
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 129, $this->source); })()), 129);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 130, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-locales-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 133
        yield "
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 134, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
            // line 135
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 135, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 136
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 136)], "method", false, false, false, 136), "set", ["entityId", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", ["entityId"], "method", false, false, false, 136)], "method", false, false, false, 136);
                // line 137
                yield "                                ";
            } else {
                // line 138
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 138)], "method", false, false, false, 138);
                // line 139
                yield "                                ";
            }
            // line 140
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "locale", [], "any", false, false, false, 140) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 140))) ? ("active") : ("")), "url" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 140, $this->source); })()), "generateUrl", [], "method", false, false, false, 140), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 140), "label" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 140)]);
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['localeDto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "
                            ";
        // line 143
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 143, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 144, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "                                    ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                yield "
                                ";
            }
            // line 147
            yield "
                                ";
            // line 148
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-appearance-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", [], "EasyAdminBundle")]);
            yield "

                                ";
            // line 150
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:sun", "data-ea-color-scheme" => "light", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 151
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:moon", "data-ea-color-scheme" => "dark", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 152
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item active", "url" => "#", "icon" => "internal:desktop", "data-ea-color-scheme" => "auto", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 154
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___23953587231 extends Template
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
        // line 176
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 176, $this->source); })()), 176);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v8 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v8->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v8->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 41902055891);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 41902055891);
            $this->load("@EasyAdmin/layout.html.twig", 177, "41902055891")->display($embeddedContext, $embeddedBlocks);
            $_v8->finishEmbedComponent();
        }
        // line 186
        yield "                            ";
        $_v9 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v9->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v9->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 1571785721);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 1571785721);
            $this->load("@EasyAdmin/layout.html.twig", 186, "1571785721")->display($embeddedContext, $embeddedBlocks);
            $_v9->finishEmbedComponent();
        }
        // line 189
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  5324 => 189,  5309 => 186,  5286 => 177,  5255 => 176,  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___41902055891 extends Template
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
        // line 177
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 177, $this->source); })()), 177);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 180, $this->source); })()), "userMenu", [], "any", false, false, false, 180), "avatarDisplayed", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 181, $this->source); })()), "html", null, true);
            yield "
                                ";
        } else {
            // line 183
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["class" => "user-avatar", "name" => (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("internal:user") : ("internal:user-xmark"))]);
            yield "
                                ";
        }
        // line 185
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  5821 => 185,  5815 => 183,  5809 => 181,  5798 => 180,  5767 => 177,  5324 => 189,  5309 => 186,  5286 => 177,  5255 => 176,  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___1571785721 extends Template
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
        // line 186
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 186, $this->source); })()), 186);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 187, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  6295 => 187,  6264 => 186,  5821 => 185,  5815 => 183,  5809 => 181,  5798 => 180,  5767 => 177,  5324 => 189,  5309 => 186,  5286 => 177,  5255 => 176,  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___15502912091 extends Template
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
        // line 301
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 301, $this->source); })()), 301);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v10 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v10->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v10->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 33123698431);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 33123698431);
            $this->load("@EasyAdmin/layout.html.twig", 302, "33123698431")->display($embeddedContext, $embeddedBlocks);
            $_v10->finishEmbedComponent();
        }
        // line 308
        yield "                                        ";
        $_v11 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v11->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v11->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 6330228931);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 6330228931);
            $this->load("@EasyAdmin/layout.html.twig", 308, "6330228931")->display($embeddedContext, $embeddedBlocks);
            $_v11->finishEmbedComponent();
        }
        // line 311
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  6818 => 311,  6803 => 308,  6780 => 302,  6749 => 301,  6295 => 187,  6264 => 186,  5821 => 185,  5815 => 183,  5809 => 181,  5798 => 180,  5767 => 177,  5324 => 189,  5309 => 186,  5286 => 177,  5255 => 176,  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___33123698431 extends Template
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
        // line 302
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 302, $this->source); })()), 302);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 303
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 303, $this->source); })()), "html", null, true);
        yield "
                                            ";
        // line 304
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 304, $this->source); })()), "userMenu", [], "any", false, false, false, 304), "isNameDisplayed", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 305
            yield "                                                <span class=\"user-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 305, $this->source); })()), "userMenu", [], "any", false, false, false, 305), "name", [], "any", false, false, false, 305), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 307
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  7313 => 307,  7307 => 305,  7305 => 304,  7292 => 303,  7261 => 302,  6818 => 311,  6803 => 308,  6780 => 302,  6749 => 301,  6295 => 187,  6264 => 186,  5821 => 185,  5815 => 183,  5809 => 181,  5798 => 180,  5767 => 177,  5324 => 189,  5309 => 186,  5286 => 177,  5255 => 176,  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c59084b87a09837fb7424c7dbbd0635d___6330228931 extends Template
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
        // line 308
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 308, $this->source); })()), 308);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 309
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 309, $this->source); })()), "html", null, true);
        yield "
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  7787 => 309,  7756 => 308,  7313 => 307,  7307 => 305,  7305 => 304,  7292 => 303,  7261 => 302,  6818 => 311,  6803 => 308,  6780 => 302,  6749 => 301,  6295 => 187,  6264 => 186,  5821 => 185,  5815 => 183,  5809 => 181,  5798 => 180,  5767 => 177,  5324 => 189,  5309 => 186,  5286 => 177,  5255 => 176,  4812 => 154,  4807 => 152,  4803 => 151,  4799 => 150,  4794 => 148,  4791 => 147,  4785 => 145,  4782 => 144,  4780 => 143,  4777 => 142,  4768 => 140,  4765 => 139,  4762 => 138,  4759 => 137,  4756 => 136,  4753 => 135,  4749 => 134,  4746 => 133,  4740 => 131,  4729 => 130,  4698 => 129,  4255 => 155,  4232 => 129,  4201 => 128,  3747 => 125,  3716 => 124,  3273 => 156,  3259 => 128,  3256 => 127,  3233 => 124,  3202 => 123,  2756 => 113,  2752 => 112,  2737 => 110,  2706 => 109,  2261 => 117,  2258 => 116,  2235 => 109,  2204 => 108,  1761 => 378,  1752 => 376,  1747 => 375,  1737 => 374,  1721 => 372,  1705 => 357,  1697 => 360,  1693 => 358,  1691 => 357,  1688 => 356,  1685 => 355,  1675 => 354,  1659 => 351,  1633 => 344,  1623 => 343,  1615 => 339,  1609 => 336,  1606 => 335,  1604 => 3,  1602 => 335,  1599 => 334,  1589 => 333,  1573 => 331,  1565 => 346,  1563 => 343,  1558 => 340,  1556 => 333,  1553 => 332,  1551 => 331,  1547 => 329,  1537 => 328,  1528 => 347,  1526 => 328,  1523 => 327,  1520 => 326,  1510 => 325,  1501 => 361,  1499 => 354,  1495 => 352,  1493 => 351,  1489 => 349,  1487 => 325,  1484 => 324,  1474 => 323,  1463 => 317,  1453 => 316,  1445 => 312,  1430 => 301,  1420 => 300,  1411 => 313,  1409 => 300,  1406 => 299,  1396 => 298,  1388 => 264,  1382 => 263,  1374 => 261,  1371 => 260,  1365 => 259,  1355 => 257,  1352 => 256,  1346 => 255,  1334 => 253,  1331 => 252,  1314 => 250,  1309 => 249,  1306 => 248,  1304 => 247,  1299 => 246,  1296 => 245,  1294 => 244,  1289 => 243,  1286 => 242,  1281 => 241,  1271 => 240,  1261 => 289,  1255 => 286,  1250 => 285,  1247 => 284,  1244 => 283,  1241 => 282,  1238 => 281,  1236 => 280,  1227 => 277,  1225 => 3,  1220 => 277,  1216 => 276,  1211 => 274,  1206 => 271,  1200 => 268,  1197 => 267,  1195 => 266,  1192 => 265,  1189 => 240,  1179 => 239,  1170 => 292,  1168 => 239,  1159 => 238,  1156 => 237,  1153 => 236,  1150 => 235,  1148 => 234,  1145 => 233,  1142 => 232,  1132 => 231,  1123 => 295,  1120 => 294,  1117 => 231,  1115 => 230,  1112 => 229,  1102 => 228,  1094 => 319,  1092 => 316,  1089 => 315,  1087 => 298,  1084 => 297,  1081 => 228,  1071 => 227,  1059 => 363,  1057 => 323,  1052 => 320,  1050 => 227,  1045 => 226,  1043 => 225,  1040 => 224,  1030 => 223,  1019 => 216,  1009 => 215,  998 => 206,  994 => 205,  987 => 204,  977 => 203,  968 => 209,  966 => 203,  963 => 202,  953 => 201,  944 => 211,  942 => 201,  939 => 200,  929 => 199,  921 => 218,  919 => 215,  915 => 213,  913 => 199,  910 => 198,  900 => 197,  889 => 171,  882 => 170,  872 => 169,  862 => 191,  859 => 190,  845 => 176,  841 => 174,  839 => 169,  832 => 165,  829 => 164,  819 => 163,  811 => 368,  809 => 223,  803 => 219,  801 => 197,  795 => 193,  793 => 163,  790 => 162,  780 => 161,  772 => 102,  769 => 101,  755 => 100,  750 => 98,  749 => 3,  747 => 98,  742 => 96,  741 => 3,  740 => 96,  737 => 95,  731 => 93,  728 => 92,  725 => 91,  708 => 90,  702 => 88,  699 => 87,  689 => 86,  678 => 72,  668 => 71,  659 => 369,  657 => 161,  653 => 159,  649 => 158,  646 => 157,  631 => 123,  628 => 122,  626 => 121,  623 => 120,  619 => 119,  604 => 108,  602 => 107,  599 => 106,  597 => 105,  594 => 104,  590 => 103,  587 => 86,  585 => 85,  582 => 84,  578 => 83,  572 => 81,  566 => 78,  563 => 77,  560 => 76,  558 => 75,  555 => 74,  552 => 71,  542 => 70,  531 => 67,  521 => 66,  510 => 64,  500 => 63,  484 => 55,  468 => 54,  452 => 53,  443 => 379,  441 => 374,  438 => 373,  436 => 372,  433 => 371,  431 => 70,  428 => 69,  425 => 66,  423 => 63,  418 => 61,  414 => 60,  410 => 59,  406 => 58,  402 => 57,  398 => 56,  394 => 55,  389 => 54,  386 => 53,  376 => 52,  368 => 49,  359 => 47,  354 => 46,  344 => 45,  334 => 42,  329 => 41,  319 => 40,  308 => 36,  298 => 35,  290 => 38,  288 => 35,  282 => 33,  272 => 32,  261 => 29,  251 => 28,  241 => 25,  236 => 24,  226 => 23,  215 => 20,  205 => 19,  188 => 16,  175 => 9,  165 => 8,  156 => 381,  154 => 52,  150 => 50,  148 => 45,  145 => 44,  143 => 40,  140 => 39,  138 => 32,  135 => 31,  133 => 28,  130 => 27,  128 => 23,  125 => 22,  123 => 19,  117 => 17,  112 => 16,  109 => 15,  107 => 8,  100 => 6,  96 => 4,  94 => 3,  92 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea = ea() %}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% if block('content_footer') is not empty %}
                                        <section class=\"content-footer\">
                                            {% block content_footer %}{% endblock %}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "Z:\\test_projet\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}
