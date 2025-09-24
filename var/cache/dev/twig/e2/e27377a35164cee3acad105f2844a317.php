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

/* security/login.html.twig */
class __TwigTemplate_60df7628c1ae9dcb5b36f1dd52e5efce extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Connexion</title>
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

        .login-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .login-header h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .login-header .subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .login-form {
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

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e1e5e9;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
        }

        .btn-login {
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

        .btn-login:hover {
            transform: translateY(-2px);
        }

        .forgot-password {
            text-align: center;
            margin-top: 1.5rem;
        }

        .forgot-password a {
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 5px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .remember-me input {
            margin-right: 0.5rem;
        }

        .remember-me label {
            margin-bottom: 0;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class=\"login-container\">
        <div class=\"login-header\">
            <h1>SMUR Pontoise</h1>
            <div class=\"subtitle\">Service Mobile d'Urgence et de Réanimation</div>
        </div>
        
        <div class=\"login-form\">
            ";
        // line 144
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 144, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                <div class=\"alert\">
                    ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 146, $this->source); })()), "messageKey", [], "any", false, false, false, 146), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 146, $this->source); })()), "messageData", [], "any", false, false, false, 146), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 149
        yield "
            <form method=\"post\">
                ";
        // line 151
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151) == "app_login") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "isMethod", ["GET"], "method", false, false, false, 151)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "query", [], "any", false, false, false, 151), "get", ["expired"], "method", false, false, false, 151))) {
            // line 152
            yield "                    <div class=\"alert\">Votre session a expiré, veuillez vous reconnecter.</div>
                ";
        }
        // line 154
        yield "
                <div class=\"form-group\">
                    <label for=\"username\">Identifiant</label>
                    <input type=\"text\" 
                           value=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 158, $this->source); })()), "html", null, true);
        yield "\" 
                           name=\"_username\" 
                           id=\"username\" 
                           autocomplete=\"username\" 
                           required 
                           autofocus
                           placeholder=\"Votre email ou identifiant\">
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" 
                           name=\"_password\" 
                           id=\"password\" 
                           autocomplete=\"current-password\" 
                           required
                           placeholder=\"Votre mot de passe\">
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <div class=\"remember-me\">
                    <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\">
                    <label for=\"remember_me\">Se souvenir de moi</label>
                </div>

                <button class=\"btn-login\" type=\"submit\">
                    Se connecter
                </button>
            </form>

            <div class=\"forgot-password\">
                <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\">
                    Mot de passe perdu
                </a>
                <span style=\"margin: 0 10px; color: #ccc;\">|</span>
                <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_first_connection");
        yield "\">
                    Première connexion
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
        return "security/login.html.twig";
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
        return array (  262 => 194,  255 => 190,  239 => 177,  217 => 158,  211 => 154,  207 => 152,  205 => 151,  201 => 149,  195 => 146,  192 => 145,  190 => 144,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Connexion</title>
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

        .login-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .login-header h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .login-header .subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .login-form {
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

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e1e5e9;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
        }

        .btn-login {
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

        .btn-login:hover {
            transform: translateY(-2px);
        }

        .forgot-password {
            text-align: center;
            margin-top: 1.5rem;
        }

        .forgot-password a {
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 5px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .remember-me input {
            margin-right: 0.5rem;
        }

        .remember-me label {
            margin-bottom: 0;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class=\"login-container\">
        <div class=\"login-header\">
            <h1>SMUR Pontoise</h1>
            <div class=\"subtitle\">Service Mobile d'Urgence et de Réanimation</div>
        </div>
        
        <div class=\"login-form\">
            {% if error %}
                <div class=\"alert\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            <form method=\"post\">
                {% if app.request.get('_route') == 'app_login' and app.request.isMethod('GET') and app.request.query.get('expired') %}
                    <div class=\"alert\">Votre session a expiré, veuillez vous reconnecter.</div>
                {% endif %}

                <div class=\"form-group\">
                    <label for=\"username\">Identifiant</label>
                    <input type=\"text\" 
                           value=\"{{ last_username }}\" 
                           name=\"_username\" 
                           id=\"username\" 
                           autocomplete=\"username\" 
                           required 
                           autofocus
                           placeholder=\"Votre email ou identifiant\">
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" 
                           name=\"_password\" 
                           id=\"password\" 
                           autocomplete=\"current-password\" 
                           required
                           placeholder=\"Votre mot de passe\">
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div class=\"remember-me\">
                    <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\">
                    <label for=\"remember_me\">Se souvenir de moi</label>
                </div>

                <button class=\"btn-login\" type=\"submit\">
                    Se connecter
                </button>
            </form>

            <div class=\"forgot-password\">
                <a href=\"{{ path('app_forgot_password') }}\">
                    Mot de passe perdu
                </a>
                <span style=\"margin: 0 10px; color: #ccc;\">|</span>
                <a href=\"{{ path('app_first_connection') }}\">
                    Première connexion
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
</html>", "security/login.html.twig", "Z:\\test_projet\\templates\\security\\login.html.twig");
    }
}
