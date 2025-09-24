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
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c extends Template
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
        // line 2
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 3
        $context["__internal_d6cb25a7f50e8c6c4d6da44e34c2c6df45351711ceabdb7847e1866a450a2bfe"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 4
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "htmlLocale", [], "any", false, false, false, 6), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "textDirection", [], "any", false, false, false, 6), "html", null, true);
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
        yield Twig\Extension\CoreExtension::striptags(($context["page_title_block_output"] ?? null));
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
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 20), "defaultAssetPackageName", [], "any", false, false, false, 20)), "html", null, true);
        yield "\">
    ";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "cssAssets", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 24), "cssAssets", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 24), "cssAssets", [], "any", false, false, false, 24)) : ([]))], false);
        yield "
        ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 25), "webpackEncoreAssets", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 25), "webpackEncoreAssets", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 25), "webpackEncoreAssets", [], "any", false, false, false, 25)) : ([]))], false);
        yield "
    ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 29)), "html", null, true);
        yield "\">
    ";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 33), "defaultAssetPackageName", [], "any", false, false, false, 33)), "html", null, true);
        yield "\"></script>

        ";
        // line 35
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 38
        yield "    ";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "assetMapperAssets", [], "any", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 36), "assetMapperAssets", [], "any", false, false, false, 36)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 36), "assetMapperAssets", [], "any", false, false, false, 36)) : ([]))], false);
        yield "
        ";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "jsAssets", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 41), "jsAssets", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 41), "jsAssets", [], "any", false, false, false, 41)) : ([]))], false);
        yield "
        ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 42), "webpackEncoreAssets", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 42), "webpackEncoreAssets", [], "any", false, false, false, 42)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 42), "webpackEncoreAssets", [], "any", false, false, false, 42)) : ([]))], false);
        yield "
    ";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 46), "headContents", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 46), "headContents", [], "any", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 46), "headContents", [], "any", false, false, false, 46)) : ([])));
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
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "contentWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 56), "contentWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 56), "contentWidth", [], "any", false, false, false, 56), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 56), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-sidebar-width=\"";
        // line 57
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 57), "sidebarWidth", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 57), "sidebarWidth", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 57), "sidebarWidth", [], "any", false, false, false, 57), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 57), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 58
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
        data-ea-default-color-scheme=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardDefaultColorScheme", [], "any", false, false, false, 59), "html", null, true);
        yield "\"
        data-ea-icon-set=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 60), "iconSet", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
        data-ea-icon-prefix=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 61), "defaultIconPrefix", [], "any", false, false, false, 61), "html", null, true);
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
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 64), "defaultAssetPackageName", [], "any", false, false, false, 64)), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_color_scheme(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 67), "defaultAssetPackageName", [], "any", false, false, false, 67)), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 76), "avatarUrl", [], "any", false, false, false, 76))) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 81), "avatarUrl", [], "any", false, false, false, 81), "html", null, true);
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
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 122) || CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 122))) {
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
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flash_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["flash_messages"], "method", false, false, false, 72));
        yield "
        ";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_user_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 87), "items", [], "any", false, false, false, 87)) > 0)) {
            // line 88
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
            yield "

                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 90), "items", [], "any", false, false, false, 90));
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
($context["__internal_d6cb25a7f50e8c6c4d6da44e34c2c6df45351711ceabdb7847e1866a450a2bfe"] ?? null)), "class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 96
$context["item"], "cssClass", [], "any", false, false, false, 96), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 96), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 96)]);
                    yield "
                        ";
                } else {
                    // line 98
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 98), [],                     // line 3
($context["__internal_d6cb25a7f50e8c6c4d6da44e34c2c6df45351711ceabdb7847e1866a450a2bfe"] ?? null)), "class" => ("user-action " . CoreExtension::getAttribute($this->env, $this->source,                     // line 98
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
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        $preRendered = $_v2->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v2->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 23953587231);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settings_dropdown"] ?? null), "html", null, true);
        yield "
                    ";
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 170)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 170));
        yield "\">
                                    ";
        // line 171
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 171);
        yield "
                                </a>
                            ";
        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 200
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 201
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 211
        yield "                                </nav>
                                ";
        yield from [];
    }

    // line 201
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 202
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 203
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 209
        yield "                                        </div>
                                    ";
        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 204
        yield "                                                <a class=\"logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 204)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 204));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 205
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 205);
        yield "</span>
                                                    <span class=\"logo-compact\">";
        // line 206
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:home"]);
        yield "</span>
                                                </a>
                                            ";
        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 216
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["main_menu"], "method", false, false, false, 216));
        yield "
                            ";
        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 224
        yield "                <section class=\"main-content\">
                    ";
        // line 225
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 225)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 225), "isSearchEnabled", [], "any", false, false, false, 225));
        // line 226
        yield "                    <aside class=\"content-top ";
        yield (((($tmp = ($context["has_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ea-search-enabled") : ("ea-search-disabled"));
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
        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 228
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 229
        yield "                            <div class=\"content-search\">
                                ";
        // line 230
        if ((($tmp = ($context["has_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 294
            yield "                                ";
        }
        // line 295
        yield "                            </div>
                            ";
        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 232
        yield "                                        ";
        $context["formActionUrl"] = null;
        // line 233
        yield "                                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "                                            ";
            // line 235
            yield "                                            ";
            $context["crudController"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 235), "attributes", [], "any", false, true, false, 235), "get", ["crudControllerFqcn"], "method", true, true, false, 235) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 235), "attributes", [], "any", false, false, false, 235), "get", ["crudControllerFqcn"], "method", false, false, false, 235)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 235), "attributes", [], "any", false, false, false, 235), "get", ["crudControllerFqcn"], "method", false, false, false, 235)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 235), "query", [], "any", false, false, false, 235), "get", ["crudControllerFqcn"], "method", false, false, false, 235)));
            // line 236
            yield "                                            ";
            $context["formActionUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [($context["crudController"] ?? null)], "method", false, false, false, 236), "setAction", ["index"], "method", false, false, false, 236), "set", ["page", 1], "method", false, false, false, 236);
            // line 237
            yield "                                        ";
        }
        // line 238
        yield "                                        <form class=\"form-action-search\" method=\"get\" ";
        if ((($tmp = ($context["formActionUrl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formActionUrl"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
                                            ";
        // line 239
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 292
        yield "                                        </form>
                                    ";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 265
        yield "
                                                ";
        // line 266
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 268), "query", [], "any", false, false, false, 268), "get", ["crudControllerFqcn"], "method", false, false, false, 268), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 277
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["query"], "method", false, false, false, 277))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 277), "query", [], "any", false, true, false, 277), "get", ["query"], "method", true, true, false, 277) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["query"], "method", false, false, false, 277)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["query"], "method", false, false, false, 277), "html", null, true)) : (""));
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 277), "translationParameters", [], "any", false, false, false, 277), "EasyAdminBundle"), [],         // line 3
($context["__internal_d6cb25a7f50e8c6c4d6da44e34c2c6df45351711ceabdb7847e1866a450a2bfe"] ?? null)), "html", null, true);
        // line 277
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 277), "currentAction", [], "any", false, false, false, 277) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 277), "autofocusSearch", [], "any", false, false, false, 277) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 280), "query", [], "any", false, false, false, 280), "get", ["query"], "method", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                                                            ";
            $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 281);
            // line 282
            yield "                                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 283
                yield "                                                                ";
                $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 283), "setController", [($context["crudController"] ?? null)], "method", false, false, false, 283), "setAction", ["index"], "method", false, false, false, 283), "set", ["page", 1], "method", false, false, false, 283);
                // line 284
                yield "                                                            ";
            }
            // line 285
            yield "                                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_reset_url"] ?? null), "html", null, true);
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
        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 241
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 241), "appliedFilters", [], "any", false, false, false, 241));
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
        yield from [];
    }

    // line 298
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 299
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 300
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 313
        yield "                            </div>
                            ";
        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 301
        yield "                                    ";
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 15502912091);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15502912091);
            $this->load("@EasyAdmin/layout.html.twig", 301, "15502912091")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 312
        yield "                                ";
        yield from [];
    }

    // line 316
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_settings_dropdown_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 317
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settings_dropdown"] ?? null), "html", null, true);
        yield "
                            ";
        yield from [];
    }

    // line 323
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 326
        yield "                                    ";
        $context["has_help_message"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 326), "helpMessage", [], "any", true, true, false, 326) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 326), "helpMessage", [], "any", false, false, false, 326)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 326), "helpMessage", [], "any", false, false, false, 326)) : ("")));
        // line 327
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 328
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 347
        yield "                                    </section>
                                ";
        yield from [];
    }

    // line 328
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 333
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 334
        yield "                                                        ";
        if ((($tmp = ($context["has_help_message"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 335
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 335), "helpMessage", [], "any", false, false, false, 335), [],             // line 3
($context["__internal_d6cb25a7f50e8c6c4d6da44e34c2c6df45351711ceabdb7847e1866a450a2bfe"] ?? null)), "html");
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
        yield from [];
    }

    // line 343
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 344
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 357
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 372
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 375
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 375), "bodyContents", [], "any", true, true, false, 375) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 375), "bodyContents", [], "any", false, false, false, 375)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 375), "bodyContents", [], "any", false, false, false, 375)) : ([])));
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
        return array (  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___6417279391 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 108);
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

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu"] ?? null), "html", null, true);
        yield "
            ";
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
        return array (  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___13626770771 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 109);
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

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<div>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_avatar"] ?? null), "html", null, true);
        yield "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                        <span class=\"user-name\">";
        // line 113
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 113))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", [], "EasyAdminBundle"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true)));
        yield "</span>
                    </div>
                ";
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
        return array (  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___22121858011 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 123);
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

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___4991107621 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 124);
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

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:gear"]);
        yield "
                    ";
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
        return array (  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___3361749131 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 128);
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

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___16619069031 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 129);
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

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
            // line 135
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 136
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 136)], "method", false, false, false, 136), "set", ["entityId", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", ["entityId"], "method", false, false, false, 136)], "method", false, false, false, 136);
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
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 140), "locale", [], "any", false, false, false, 140) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 140))) ? ("active") : ("")), "url" => CoreExtension::getAttribute($this->env, $this->source, ($context["url"] ?? null), "generateUrl", [], "method", false, false, false, 140), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 140), "label" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 140)]);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        return array (  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___23953587231 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 176);
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

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  2246 => 189,  2231 => 186,  2211 => 177,  2192 => 176,  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___41902055891 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 177);
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

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 180), "avatarDisplayed", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_avatar"] ?? null), "html", null, true);
            yield "
                                ";
        } else {
            // line 183
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["class" => "user-avatar", "name" => (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 183))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("internal:user") : ("internal:user-xmark"))]);
            yield "
                                ";
        }
        // line 185
        yield "                            ";
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
        return array (  2344 => 185,  2338 => 183,  2332 => 181,  2324 => 180,  2305 => 177,  2246 => 189,  2231 => 186,  2211 => 177,  2192 => 176,  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___1571785721 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 186);
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

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_dropdown"] ?? null), "html", null, true);
        yield "
                            ";
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
        return array (  2422 => 187,  2403 => 186,  2344 => 185,  2338 => 183,  2332 => 181,  2324 => 180,  2305 => 177,  2246 => 189,  2231 => 186,  2211 => 177,  2192 => 176,  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___15502912091 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 301);
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

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  2543 => 311,  2528 => 308,  2508 => 302,  2489 => 301,  2422 => 187,  2403 => 186,  2344 => 185,  2338 => 183,  2332 => 181,  2324 => 180,  2305 => 177,  2246 => 189,  2231 => 186,  2211 => 177,  2192 => 176,  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___33123698431 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 302);
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

    // line 303
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_avatar"] ?? null), "html", null, true);
        yield "
                                            ";
        // line 304
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 304), "isNameDisplayed", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 305
            yield "                                                <span class=\"user-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 305), "name", [], "any", false, false, false, 305), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 307
        yield "                                        ";
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
        return array (  2639 => 307,  2633 => 305,  2631 => 304,  2621 => 303,  2602 => 302,  2543 => 311,  2528 => 308,  2508 => 302,  2489 => 301,  2422 => 187,  2403 => 186,  2344 => 185,  2338 => 183,  2332 => 181,  2324 => 180,  2305 => 177,  2246 => 189,  2231 => 186,  2211 => 177,  2192 => 176,  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_8d620566820d818dd9834d5ceb04b35c___6330228931 extends Template
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
        return $this->load(($context["__parent__"] ?? null), 308);
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

    // line 309
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_dropdown"] ?? null), "html", null, true);
        yield "
                                        ";
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
        return array (  2717 => 309,  2698 => 308,  2639 => 307,  2633 => 305,  2631 => 304,  2621 => 303,  2602 => 302,  2543 => 311,  2528 => 308,  2508 => 302,  2489 => 301,  2422 => 187,  2403 => 186,  2344 => 185,  2338 => 183,  2332 => 181,  2324 => 180,  2305 => 177,  2246 => 189,  2231 => 186,  2211 => 177,  2192 => 176,  2133 => 154,  2128 => 152,  2124 => 151,  2120 => 150,  2115 => 148,  2112 => 147,  2106 => 145,  2103 => 144,  2101 => 143,  2098 => 142,  2089 => 140,  2086 => 139,  2083 => 138,  2080 => 137,  2077 => 136,  2074 => 135,  2070 => 134,  2067 => 133,  2061 => 131,  2053 => 130,  2034 => 129,  1975 => 155,  1955 => 129,  1936 => 128,  1869 => 125,  1850 => 124,  1791 => 156,  1777 => 128,  1774 => 127,  1754 => 124,  1735 => 123,  1673 => 113,  1669 => 112,  1657 => 110,  1638 => 109,  1577 => 117,  1574 => 116,  1554 => 109,  1535 => 108,  1476 => 378,  1467 => 376,  1462 => 375,  1455 => 374,  1445 => 372,  1435 => 357,  1430 => 360,  1426 => 358,  1424 => 357,  1421 => 356,  1418 => 355,  1411 => 354,  1401 => 351,  1384 => 344,  1377 => 343,  1372 => 339,  1366 => 336,  1363 => 335,  1361 => 3,  1359 => 335,  1356 => 334,  1349 => 333,  1339 => 331,  1334 => 346,  1332 => 343,  1327 => 340,  1325 => 333,  1322 => 332,  1320 => 331,  1316 => 329,  1309 => 328,  1303 => 347,  1301 => 328,  1298 => 327,  1295 => 326,  1288 => 325,  1282 => 361,  1280 => 354,  1276 => 352,  1274 => 351,  1270 => 349,  1268 => 325,  1265 => 324,  1258 => 323,  1250 => 317,  1243 => 316,  1238 => 312,  1223 => 301,  1216 => 300,  1210 => 313,  1208 => 300,  1205 => 299,  1198 => 298,  1193 => 264,  1187 => 263,  1179 => 261,  1176 => 260,  1170 => 259,  1160 => 257,  1157 => 256,  1151 => 255,  1139 => 253,  1136 => 252,  1119 => 250,  1114 => 249,  1111 => 248,  1109 => 247,  1104 => 246,  1101 => 245,  1099 => 244,  1094 => 243,  1091 => 242,  1086 => 241,  1079 => 240,  1072 => 289,  1066 => 286,  1061 => 285,  1058 => 284,  1055 => 283,  1052 => 282,  1049 => 281,  1047 => 280,  1038 => 277,  1036 => 3,  1031 => 277,  1027 => 276,  1022 => 274,  1017 => 271,  1011 => 268,  1008 => 267,  1006 => 266,  1003 => 265,  1000 => 240,  993 => 239,  987 => 292,  985 => 239,  976 => 238,  973 => 237,  970 => 236,  967 => 235,  965 => 234,  962 => 233,  959 => 232,  952 => 231,  946 => 295,  943 => 294,  940 => 231,  938 => 230,  935 => 229,  928 => 228,  923 => 319,  921 => 316,  918 => 315,  916 => 298,  913 => 297,  910 => 228,  903 => 227,  894 => 363,  892 => 323,  887 => 320,  885 => 227,  880 => 226,  878 => 225,  875 => 224,  868 => 223,  860 => 216,  853 => 215,  845 => 206,  841 => 205,  834 => 204,  827 => 203,  821 => 209,  819 => 203,  816 => 202,  809 => 201,  803 => 211,  801 => 201,  798 => 200,  791 => 199,  786 => 218,  784 => 215,  780 => 213,  778 => 199,  775 => 198,  768 => 197,  760 => 171,  753 => 170,  746 => 169,  739 => 191,  736 => 190,  722 => 176,  718 => 174,  716 => 169,  709 => 165,  706 => 164,  699 => 163,  694 => 368,  692 => 223,  686 => 219,  684 => 197,  678 => 193,  676 => 163,  673 => 162,  666 => 161,  661 => 102,  658 => 101,  644 => 100,  639 => 98,  638 => 3,  636 => 98,  631 => 96,  630 => 3,  629 => 96,  626 => 95,  620 => 93,  617 => 92,  614 => 91,  597 => 90,  591 => 88,  588 => 87,  581 => 86,  573 => 72,  566 => 71,  560 => 369,  558 => 161,  554 => 159,  550 => 158,  547 => 157,  532 => 123,  529 => 122,  527 => 121,  524 => 120,  520 => 119,  505 => 108,  503 => 107,  500 => 106,  498 => 105,  495 => 104,  491 => 103,  488 => 86,  486 => 85,  483 => 84,  479 => 83,  473 => 81,  467 => 78,  464 => 77,  461 => 76,  459 => 75,  456 => 74,  453 => 71,  446 => 70,  438 => 67,  431 => 66,  423 => 64,  416 => 63,  406 => 55,  396 => 54,  386 => 53,  380 => 379,  378 => 374,  375 => 373,  373 => 372,  370 => 371,  368 => 70,  365 => 69,  362 => 66,  360 => 63,  355 => 61,  351 => 60,  347 => 59,  343 => 58,  339 => 57,  335 => 56,  331 => 55,  326 => 54,  323 => 53,  316 => 52,  311 => 49,  302 => 47,  297 => 46,  290 => 45,  283 => 42,  278 => 41,  271 => 40,  263 => 36,  256 => 35,  251 => 38,  249 => 35,  243 => 33,  236 => 32,  228 => 29,  221 => 28,  214 => 25,  209 => 24,  202 => 23,  194 => 20,  187 => 19,  176 => 16,  166 => 9,  159 => 8,  153 => 381,  151 => 52,  147 => 50,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 32,  132 => 31,  130 => 28,  127 => 27,  125 => 23,  122 => 22,  120 => 19,  114 => 17,  109 => 16,  106 => 15,  104 => 8,  97 => 6,  93 => 4,  91 => 3,  89 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}
