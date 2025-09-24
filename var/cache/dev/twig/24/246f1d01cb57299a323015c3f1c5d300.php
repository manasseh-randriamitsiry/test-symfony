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

/* account/forgot_password.html.twig */
class __TwigTemplate_ccdb70b2a48bfe1b32c05078aecaa9fd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/forgot_password.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Mot de passe perdu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .form-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .form-header h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .form-header .subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .form-content {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e1e5e9;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #667eea;
        }

        .btn-submit {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
        }

        .back-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .info-text {
            background-color: #e2f3ff;
            color: #0c5460;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class=\"form-container\">
        <div class=\"form-header\">
            <h1>SMUR Pontoise</h1>
            <div class=\"subtitle\">Récupération de mot de passe</div>
        </div>
        
        <div class=\"form-content\">
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "flashes", ["success"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 148
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "            
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "flashes", ["error"], "method", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 152
            yield "                <div class=\"alert alert-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "
            <div class=\"info-text\">
                Saisissez votre adresse email pour recevoir un lien de réinitialisation de votre mot de passe.
            </div>

            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Adresse email</label>
                    <input type=\"email\" 
                           name=\"email\" 
                           id=\"email\" 
                           required 
                           autofocus
                           placeholder=\"votre.email@smur-pontoise.fr\">
                </div>

                <button class=\"btn-submit\" type=\"submit\">
                    Envoyer le lien de récupération
                </button>
            </form>

            <div class=\"back-link\">
                <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                    ← Retour à la connexion
                </a>
            </div>
        </div>
    </div>
    
    <footer style=\"position: fixed; bottom: 0; left: 0; right: 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.5rem; text-align: center; font-size: 0.8rem; z-index: 1000;\">
        <p style=\"margin: 0; opacity: 0.9;\">
            Développé par <a href=\"mailto:manassehrandriamitsiry@gmail.com\" style=\"color: white; text-decoration: none; font-weight: 500;\">manassehrandriamitsiry@gmail.com</a>
        </p>
    </footer>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/forgot_password.html.twig";
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
        return array (  246 => 176,  222 => 154,  213 => 152,  209 => 151,  206 => 150,  197 => 148,  193 => 147,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Mot de passe perdu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .form-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .form-header h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .form-header .subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .form-content {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e1e5e9;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #667eea;
        }

        .btn-submit {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
        }

        .back-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .info-text {
            background-color: #e2f3ff;
            color: #0c5460;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class=\"form-container\">
        <div class=\"form-header\">
            <h1>SMUR Pontoise</h1>
            <div class=\"subtitle\">Récupération de mot de passe</div>
        </div>
        
        <div class=\"form-content\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-error\">{{ message }}</div>
            {% endfor %}

            <div class=\"info-text\">
                Saisissez votre adresse email pour recevoir un lien de réinitialisation de votre mot de passe.
            </div>

            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Adresse email</label>
                    <input type=\"email\" 
                           name=\"email\" 
                           id=\"email\" 
                           required 
                           autofocus
                           placeholder=\"votre.email@smur-pontoise.fr\">
                </div>

                <button class=\"btn-submit\" type=\"submit\">
                    Envoyer le lien de récupération
                </button>
            </form>

            <div class=\"back-link\">
                <a href=\"{{ path('app_login') }}\">
                    ← Retour à la connexion
                </a>
            </div>
        </div>
    </div>
    
    <footer style=\"position: fixed; bottom: 0; left: 0; right: 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.5rem; text-align: center; font-size: 0.8rem; z-index: 1000;\">
        <p style=\"margin: 0; opacity: 0.9;\">
            Développé par <a href=\"mailto:manassehrandriamitsiry@gmail.com\" style=\"color: white; text-decoration: none; font-weight: 500;\">manassehrandriamitsiry@gmail.com</a>
        </p>
    </footer>
</body>
</html>", "account/forgot_password.html.twig", "Z:\\test_projet\\templates\\account\\forgot_password.html.twig");
    }
}
