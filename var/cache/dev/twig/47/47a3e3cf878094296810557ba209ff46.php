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

/* dashboard/index.html.twig */
class __TwigTemplate_7cd829410d0f4da642d46dfc80786eb2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Bureau</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header h1 {
            font-size: 1.8rem;
            font-weight: 300;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-name {
            font-weight: 500;
        }

        .logout-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .welcome {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .welcome h2 {
            color: #667eea;
            margin-bottom: 1rem;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .module-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: inherit;
        }

        .module-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .module-card.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .module-card.disabled:hover {
            transform: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .module-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .module-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #667eea;
        }

        .module-description {
            color: #666;
            line-height: 1.5;
        }

        .access-denied {
            color: #dc3545;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .user-details {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }

        .user-details h3 {
            color: #667eea;
            margin-bottom: 1rem;
        }

        .user-detail-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
        }

        .user-detail-item:last-child {
            border-bottom: none;
        }

        .user-detail-label {
            font-weight: 500;
            color: #555;
        }

        .user-detail-value {
            color: #333;
        }
    </style>
</head>
<body>
    <header class=\"header\">
        <div class=\"header-content\">
            <h1>SMUR Pontoise</h1>
            <div class=\"user-info\">
                <span class=\"user-name\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "fullName", [], "any", false, false, false, 178), "html", null, true);
        yield "</span>
                <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"logout-btn\">Déconnexion</a>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <div class=\"welcome\">
            <h2>Bureau</h2>
            <p>Bienvenue ";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "prenom", [], "any", false, false, false, 187), "html", null, true);
        yield ", voici les modules auxquels vous avez accès :</p>
        </div>

        <div class=\"modules-grid\">
            ";
        // line 191
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "accesGestionUtilisateurs", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 192
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"module-card\">
                    <span class=\"module-icon\">👥</span>
                    <div class=\"module-title\">Gestion des utilisateurs</div>
                    <div class=\"module-description\">
                        Gérer les comptes utilisateurs, leurs informations et leurs droits d'accès.
                    </div>
                </a>
            ";
        } else {
            // line 200
            yield "                <div class=\"module-card disabled\">
                    <span class=\"module-icon\">👥</span>
                    <div class=\"module-title\">Gestion des utilisateurs</div>
                    <div class=\"module-description\">
                        Gérer les comptes utilisateurs, leurs informations et leurs droits d'accès.
                    </div>
                    <div class=\"access-denied\">Accès non autorisé</div>
                </div>
            ";
        }
        // line 209
        yield "
            ";
        // line 210
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 210, $this->source); })()), "accesGestionEquipes", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                <a href=\"#\" class=\"module-card\" onclick=\"alert('Module en cours de développement')\">
                    <span class=\"module-icon\">🏥</span>
                    <div class=\"module-title\">Gestion des équipes</div>
                    <div class=\"module-description\">
                        Organiser et gérer les équipes SMUR, planifier les interventions.
                    </div>
                </a>
            ";
        } else {
            // line 219
            yield "                <div class=\"module-card disabled\">
                    <span class=\"module-icon\">🏥</span>
                    <div class=\"module-title\">Gestion des équipes</div>
                    <div class=\"module-description\">
                        Organiser et gérer les équipes SMUR, planifier les interventions.
                    </div>
                    <div class=\"access-denied\">Accès non autorisé</div>
                </div>
            ";
        }
        // line 228
        yield "
            <a href=\"#\" class=\"module-card\" onclick=\"alert('Module en cours de développement')\">
                <span class=\"module-icon\">📦</span>
                <div class=\"module-title\">Commandes</div>
                <div class=\"module-description\">
                    Gérer les commandes de matériel médical et d'équipements.
                </div>
            </a>
        </div>

        <div class=\"user-details\">
            <h3>Vos informations</h3>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Fonction :</span>
                <span class=\"user-detail-value\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 242, $this->source); })()), "fonction", [], "any", false, false, false, 242), "html", null, true);
        yield "</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Métier :</span>
                <span class=\"user-detail-value\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 246, $this->source); })()), "metier", [], "any", false, false, false, 246), "html", null, true);
        yield "</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Bureau :</span>
                <span class=\"user-detail-value\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 250, $this->source); })()), "bureau", [], "any", false, false, false, 250), "html", null, true);
        yield "</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Email professionnel :</span>
                <span class=\"user-detail-value\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 254, $this->source); })()), "emailPro", [], "any", false, false, false, 254), "html", null, true);
        yield "</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Téléphone :</span>
                <span class=\"user-detail-value\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 258, $this->source); })()), "telephone", [], "any", false, false, false, 258), "html", null, true);
        yield "</span>
            </div>
            ";
        // line 260
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 260, $this->source); })()), "derniereConnexion", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 261
            yield "            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Dernière connexion :</span>
                <span class=\"user-detail-value\">";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 263, $this->source); })()), "derniereConnexion", [], "any", false, false, false, 263), "d/m/Y à H:i"), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 266
        yield "        </div>
    </div>
    
    <footer style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem; text-align: center; margin-top: 2rem; font-size: 0.9rem;\">
        <div style=\"max-width: 1200px; margin: 0 auto;\">
            <p style=\"margin: 0; opacity: 0.9;\">
                Développé par <a href=\"mailto:manassehrandriamitsiry@gmail.com\" style=\"color: white; text-decoration: none; font-weight: 500;\">manassehrandriamitsiry@gmail.com</a>
            </p>
        </div>
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
        return "dashboard/index.html.twig";
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
        return array (  358 => 266,  352 => 263,  348 => 261,  346 => 260,  341 => 258,  334 => 254,  327 => 250,  320 => 246,  313 => 242,  297 => 228,  286 => 219,  276 => 211,  274 => 210,  271 => 209,  260 => 200,  248 => 192,  246 => 191,  239 => 187,  228 => 179,  224 => 178,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>SMUR Pontoise - Bureau</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header h1 {
            font-size: 1.8rem;
            font-weight: 300;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-name {
            font-weight: 500;
        }

        .logout-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .welcome {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .welcome h2 {
            color: #667eea;
            margin-bottom: 1rem;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .module-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: inherit;
        }

        .module-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .module-card.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .module-card.disabled:hover {
            transform: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .module-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .module-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #667eea;
        }

        .module-description {
            color: #666;
            line-height: 1.5;
        }

        .access-denied {
            color: #dc3545;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .user-details {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }

        .user-details h3 {
            color: #667eea;
            margin-bottom: 1rem;
        }

        .user-detail-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
        }

        .user-detail-item:last-child {
            border-bottom: none;
        }

        .user-detail-label {
            font-weight: 500;
            color: #555;
        }

        .user-detail-value {
            color: #333;
        }
    </style>
</head>
<body>
    <header class=\"header\">
        <div class=\"header-content\">
            <h1>SMUR Pontoise</h1>
            <div class=\"user-info\">
                <span class=\"user-name\">{{ user.fullName }}</span>
                <a href=\"{{ path('app_logout') }}\" class=\"logout-btn\">Déconnexion</a>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <div class=\"welcome\">
            <h2>Bureau</h2>
            <p>Bienvenue {{ user.prenom }}, voici les modules auxquels vous avez accès :</p>
        </div>

        <div class=\"modules-grid\">
            {% if user.accesGestionUtilisateurs %}
                <a href=\"{{ path('admin') }}\" class=\"module-card\">
                    <span class=\"module-icon\">👥</span>
                    <div class=\"module-title\">Gestion des utilisateurs</div>
                    <div class=\"module-description\">
                        Gérer les comptes utilisateurs, leurs informations et leurs droits d'accès.
                    </div>
                </a>
            {% else %}
                <div class=\"module-card disabled\">
                    <span class=\"module-icon\">👥</span>
                    <div class=\"module-title\">Gestion des utilisateurs</div>
                    <div class=\"module-description\">
                        Gérer les comptes utilisateurs, leurs informations et leurs droits d'accès.
                    </div>
                    <div class=\"access-denied\">Accès non autorisé</div>
                </div>
            {% endif %}

            {% if user.accesGestionEquipes %}
                <a href=\"#\" class=\"module-card\" onclick=\"alert('Module en cours de développement')\">
                    <span class=\"module-icon\">🏥</span>
                    <div class=\"module-title\">Gestion des équipes</div>
                    <div class=\"module-description\">
                        Organiser et gérer les équipes SMUR, planifier les interventions.
                    </div>
                </a>
            {% else %}
                <div class=\"module-card disabled\">
                    <span class=\"module-icon\">🏥</span>
                    <div class=\"module-title\">Gestion des équipes</div>
                    <div class=\"module-description\">
                        Organiser et gérer les équipes SMUR, planifier les interventions.
                    </div>
                    <div class=\"access-denied\">Accès non autorisé</div>
                </div>
            {% endif %}

            <a href=\"#\" class=\"module-card\" onclick=\"alert('Module en cours de développement')\">
                <span class=\"module-icon\">📦</span>
                <div class=\"module-title\">Commandes</div>
                <div class=\"module-description\">
                    Gérer les commandes de matériel médical et d'équipements.
                </div>
            </a>
        </div>

        <div class=\"user-details\">
            <h3>Vos informations</h3>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Fonction :</span>
                <span class=\"user-detail-value\">{{ user.fonction }}</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Métier :</span>
                <span class=\"user-detail-value\">{{ user.metier }}</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Bureau :</span>
                <span class=\"user-detail-value\">{{ user.bureau }}</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Email professionnel :</span>
                <span class=\"user-detail-value\">{{ user.emailPro }}</span>
            </div>
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Téléphone :</span>
                <span class=\"user-detail-value\">{{ user.telephone }}</span>
            </div>
            {% if user.derniereConnexion %}
            <div class=\"user-detail-item\">
                <span class=\"user-detail-label\">Dernière connexion :</span>
                <span class=\"user-detail-value\">{{ user.derniereConnexion|date('d/m/Y à H:i') }}</span>
            </div>
            {% endif %}
        </div>
    </div>
    
    <footer style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem; text-align: center; margin-top: 2rem; font-size: 0.9rem;\">
        <div style=\"max-width: 1200px; margin: 0 auto;\">
            <p style=\"margin: 0; opacity: 0.9;\">
                Développé par <a href=\"mailto:manassehrandriamitsiry@gmail.com\" style=\"color: white; text-decoration: none; font-weight: 500;\">manassehrandriamitsiry@gmail.com</a>
            </p>
        </div>
    </footer>
</body>
</html>", "dashboard/index.html.twig", "Z:\\test_projet\\templates\\dashboard\\index.html.twig");
    }
}
