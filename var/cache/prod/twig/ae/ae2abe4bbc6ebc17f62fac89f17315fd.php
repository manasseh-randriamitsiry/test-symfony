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

/* base.html.twig */
class __TwigTemplate_171a608fbd7c145c6d76c84ee9a520bf extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>🏥</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 41
        yield "
        ";
        // line 42
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 44
        yield "    </head>
    <body>
        ";
        // line 46
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 47
        yield "        
        <footer style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem; text-align: center; margin-top: 2rem; font-size: 0.9rem;\">
            <div style=\"max-width: 1200px; margin: 0 auto;\">
                <p style=\"margin: 0; opacity: 0.9;\">
                    Développé par <a href=\"mailto:manassehrandriamitsiry@gmail.com\" style=\"color: white; text-decoration: none; font-weight: 500;\">manassehrandriamitsiry@gmail.com</a>
                </p>
            </div>
        </footer>
    </body>
</html>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "SMUR Pontoise";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "            <style>
                :root {
                    --primary-color: #667eea;
                    --primary-dark: #5a67d8;
                    --secondary-color: #764ba2;
                    --accent-color: #f5f7fa;
                    --text-color: #2d3748;
                    --border-color: #e2e8f0;
                }
                
                body {
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                
                .btn-primary {
                    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
                    border: none;
                }
                
                .navbar-brand {
                    color: var(--primary-color) !important;
                    font-weight: 600;
                }
                
                .sidebar {
                    background: linear-gradient(180deg, var(--accent-color) 0%, #ffffff 100%);
                }
                
                .main-header {
                    background: var(--primary-color);
                }
            </style>
        ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "        ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  152 => 46,  147 => 43,  140 => 42,  103 => 8,  96 => 7,  85 => 5,  70 => 47,  68 => 46,  64 => 44,  62 => 42,  59 => 41,  57 => 7,  52 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
