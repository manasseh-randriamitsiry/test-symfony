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

/* account/first_connection.html.twig */
class __TwigTemplate_038eed364527ea3e76c44ef9f17049c3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/first_connection.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Première connexion</title>
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
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
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

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
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
            margin-top: 1rem;
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

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class=\"form-container\">
        <div class=\"form-header\">
            <h1>SMUR Pontoise</h1>
            <div class=\"subtitle\">Création de compte - Première connexion</div>
        </div>
        
        <div class=\"form-content\">
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "flashes", ["success"], "method", false, false, false, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 166
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "            
            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "flashes", ["error"], "method", false, false, false, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 170
            yield "                <div class=\"alert alert-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "
            <div class=\"info-text\">
                Créez votre compte pour accéder au système SMUR Pontoise. Vos accès seront activés par un administrateur après validation.
            </div>

            <form method=\"post\">
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label for=\"nom\">Nom *</label>
                        <input type=\"text\" name=\"nom\" id=\"nom\" required placeholder=\"MARTIN\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"prenom\">Prénom *</label>
                        <input type=\"text\" name=\"prenom\" id=\"prenom\" required placeholder=\"Jean\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email_pro\">Email professionnel *</label>
                        <input type=\"email\" name=\"email_pro\" id=\"email_pro\" required placeholder=\"j.martin@smur-pontoise.fr\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email_perso\">Email personnel</label>
                        <input type=\"email\" name=\"email_perso\" id=\"email_perso\" placeholder=\"jean.martin@gmail.com\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"telephone\">Téléphone *</label>
                        <input type=\"tel\" name=\"telephone\" id=\"telephone\" required placeholder=\"0123456789\" pattern=\"[0-9]{10}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"fonction\">Fonction *</label>
                        <select name=\"fonction\" id=\"fonction\" required>
                            <option value=\"\">Sélectionnez une fonction</option>
                            <option value=\"Amb SMUR\">Amb SMUR</option>
                            <option value=\"Inf SMUR\">Inf SMUR</option>
                            <option value=\"Med SMUR\">Med SMUR</option>
                            <option value=\"Stg SMUR\">Stg SMUR</option>
                            <option value=\"SAMU\">SAMU</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"metier\">Métier *</label>
                        <select name=\"metier\" id=\"metier\" required>
                            <option value=\"\">Sélectionnez un métier</option>
                            <option value=\"ADE\">ADE</option>
                            <option value=\"IDE\">IDE</option>
                            <option value=\"IADE\">IADE</option>
                            <option value=\"IPDE\">IPDE</option>
                            <option value=\"Cadre\">Cadre</option>
                            <option value=\"ARM\">ARM</option>
                            <option value=\"Medecin\">Médecin</option>
                            <option value=\"Interne\">Interne</option>
                            <option value=\"Externe\">Externe</option>
                            <option value=\"DJ\">DJ</option>
                            <option value=\"étudiant paramedical\">Étudiant paramédical</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"bureau\">Bureau *</label>
                        <select name=\"bureau\" id=\"bureau\" required>
                            <option value=\"\">Sélectionnez un bureau</option>
                            <option value=\"Paramed SMUR\">Paramed SMUR</option>
                            <option value=\"Med SMUR\">Med SMUR</option>
                            <option value=\"SAMU\">SAMU</option>
                            <option value=\"Cadre\">Cadre</option>
                        </select>
                    </div>

                    <div class=\"form-group full-width\">
                        <label for=\"password\">Mot de passe *</label>
                        <input type=\"password\" 
                               name=\"password\" 
                               id=\"password\" 
                               required 
                               minlength=\"8\"
                               pattern=\"^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@\$!%*?&])[A-Za-z\\d@\$!%*?&]{8,}\$\"
                               title=\"Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial\"
                               placeholder=\"Minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial\">
                        <small style=\"color: #666; font-size: 0.8rem; margin-top: 0.5rem; display: block;\">
                            Doit contenir: 8+ caractères, 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial (@\$!%*?&)
                        </small>
                    </div>
                </div>

                <button class=\"btn-submit\" type=\"submit\">
                    Créer mon compte
                </button>
            </form>

            <div class=\"back-link\">
                <a href=\"";
        // line 267
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
        return "account/first_connection.html.twig";
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
        return array (  337 => 267,  240 => 172,  231 => 170,  227 => 169,  224 => 168,  215 => 166,  211 => 165,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Première connexion</title>
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
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
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

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
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
            margin-top: 1rem;
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

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class=\"form-container\">
        <div class=\"form-header\">
            <h1>SMUR Pontoise</h1>
            <div class=\"subtitle\">Création de compte - Première connexion</div>
        </div>
        
        <div class=\"form-content\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-error\">{{ message }}</div>
            {% endfor %}

            <div class=\"info-text\">
                Créez votre compte pour accéder au système SMUR Pontoise. Vos accès seront activés par un administrateur après validation.
            </div>

            <form method=\"post\">
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label for=\"nom\">Nom *</label>
                        <input type=\"text\" name=\"nom\" id=\"nom\" required placeholder=\"MARTIN\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"prenom\">Prénom *</label>
                        <input type=\"text\" name=\"prenom\" id=\"prenom\" required placeholder=\"Jean\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email_pro\">Email professionnel *</label>
                        <input type=\"email\" name=\"email_pro\" id=\"email_pro\" required placeholder=\"j.martin@smur-pontoise.fr\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email_perso\">Email personnel</label>
                        <input type=\"email\" name=\"email_perso\" id=\"email_perso\" placeholder=\"jean.martin@gmail.com\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"telephone\">Téléphone *</label>
                        <input type=\"tel\" name=\"telephone\" id=\"telephone\" required placeholder=\"0123456789\" pattern=\"[0-9]{10}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"fonction\">Fonction *</label>
                        <select name=\"fonction\" id=\"fonction\" required>
                            <option value=\"\">Sélectionnez une fonction</option>
                            <option value=\"Amb SMUR\">Amb SMUR</option>
                            <option value=\"Inf SMUR\">Inf SMUR</option>
                            <option value=\"Med SMUR\">Med SMUR</option>
                            <option value=\"Stg SMUR\">Stg SMUR</option>
                            <option value=\"SAMU\">SAMU</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"metier\">Métier *</label>
                        <select name=\"metier\" id=\"metier\" required>
                            <option value=\"\">Sélectionnez un métier</option>
                            <option value=\"ADE\">ADE</option>
                            <option value=\"IDE\">IDE</option>
                            <option value=\"IADE\">IADE</option>
                            <option value=\"IPDE\">IPDE</option>
                            <option value=\"Cadre\">Cadre</option>
                            <option value=\"ARM\">ARM</option>
                            <option value=\"Medecin\">Médecin</option>
                            <option value=\"Interne\">Interne</option>
                            <option value=\"Externe\">Externe</option>
                            <option value=\"DJ\">DJ</option>
                            <option value=\"étudiant paramedical\">Étudiant paramédical</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"bureau\">Bureau *</label>
                        <select name=\"bureau\" id=\"bureau\" required>
                            <option value=\"\">Sélectionnez un bureau</option>
                            <option value=\"Paramed SMUR\">Paramed SMUR</option>
                            <option value=\"Med SMUR\">Med SMUR</option>
                            <option value=\"SAMU\">SAMU</option>
                            <option value=\"Cadre\">Cadre</option>
                        </select>
                    </div>

                    <div class=\"form-group full-width\">
                        <label for=\"password\">Mot de passe *</label>
                        <input type=\"password\" 
                               name=\"password\" 
                               id=\"password\" 
                               required 
                               minlength=\"8\"
                               pattern=\"^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@\$!%*?&])[A-Za-z\\d@\$!%*?&]{8,}\$\"
                               title=\"Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial\"
                               placeholder=\"Minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial\">
                        <small style=\"color: #666; font-size: 0.8rem; margin-top: 0.5rem; display: block;\">
                            Doit contenir: 8+ caractères, 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial (@\$!%*?&)
                        </small>
                    </div>
                </div>

                <button class=\"btn-submit\" type=\"submit\">
                    Créer mon compte
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
</html>", "account/first_connection.html.twig", "Z:\\test_projet\\templates\\account\\first_connection.html.twig");
    }
}
