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

/* admin/dashboard.html.twig */
class __TwigTemplate_1e39880af989cead55bcb77e3ca87da1 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->load("@EasyAdmin/page/content.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        yield "    <h1 class=\"title\">
        <i class=\"fa fa-tachometer-alt\"></i>
        Tableau de bord - SMUR Pontoise
    </h1>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i class=\"fa fa-home\"></i>
                        Bienvenue dans l'administration
                    </h3>
                </div>
                <div class=\"card-body\">
                    <p class=\"lead\">
                        Bienvenue dans l'interface d'administration du système SMUR Pontoise.
                    </p>
                    <p>
                        Utilisez le menu de navigation à gauche pour accéder aux différentes fonctionnalités :
                    </p>
                    <ul>
                        <li><strong>Utilisateurs</strong> : Gérer les comptes utilisateurs, leurs informations et leurs droits d'accès</li>
                        <li><strong>Équipes</strong> : Organiser et gérer les équipes SMUR (à venir)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-info\">
                    <i class=\"fa fa-users\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Utilisateurs</span>
                    <span class=\"info-box-number\">
                        ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "
                    </span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\">
                    <i class=\"fa fa-user-shield\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Administrateurs</span>
                    <span class=\"info-box-number\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-warning\">
                    <i class=\"fa fa-user-cog\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Gestion utilisateurs</span>
                    <span class=\"info-box-number\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersWithUserManagement"]) || array_key_exists("usersWithUserManagement", $context) ? $context["usersWithUserManagement"] : (function () { throw new RuntimeError('Variable "usersWithUserManagement" does not exist.', 70, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-primary\">
                    <i class=\"fa fa-hospital\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Gestion équipes</span>
                    <span class=\"info-box-number\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersWithTeamManagement"]) || array_key_exists("usersWithTeamManagement", $context) ? $context["usersWithTeamManagement"] : (function () { throw new RuntimeError('Variable "usersWithTeamManagement" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i class=\"fa fa-clock\"></i>
                        Derniers utilisateurs créés
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 98
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentUsers"]) || array_key_exists("recentUsers", $context) ? $context["recentUsers"] : (function () { throw new RuntimeError('Variable "recentUsers" does not exist.', 98, $this->source); })())) > 0)) {
            // line 99
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-sm\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Fonction</th>
                                        <th>Créé le</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentUsers"]) || array_key_exists("recentUsers", $context) ? $context["recentUsers"] : (function () { throw new RuntimeError('Variable "recentUsers" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 111
                yield "                                        <tr>
                                            <td>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 112), "html", null, true);
                yield "</td>
                                            <td>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "emailPro", [], "any", false, false, false, 113), "html", null, true);
                yield "</td>
                                            <td>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fonction", [], "any", false, false, false, 114), "html", null, true);
                yield "</td>
                                            <td>";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 115), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 122
            yield "                        <p class=\"text-muted\">
                            Aucun utilisateur créé récemment.
                        </p>
                    ";
        }
        // line 126
        yield "                </div>
            </div>
        </div>
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
        return "admin/dashboard.html.twig";
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
        return array (  246 => 126,  240 => 122,  234 => 118,  225 => 115,  221 => 114,  217 => 113,  213 => 112,  210 => 111,  206 => 110,  193 => 99,  191 => 98,  172 => 82,  157 => 70,  142 => 58,  126 => 45,  90 => 11,  80 => 10,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block page_title %}
    <h1 class=\"title\">
        <i class=\"fa fa-tachometer-alt\"></i>
        Tableau de bord - SMUR Pontoise
    </h1>
{% endblock %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i class=\"fa fa-home\"></i>
                        Bienvenue dans l'administration
                    </h3>
                </div>
                <div class=\"card-body\">
                    <p class=\"lead\">
                        Bienvenue dans l'interface d'administration du système SMUR Pontoise.
                    </p>
                    <p>
                        Utilisez le menu de navigation à gauche pour accéder aux différentes fonctionnalités :
                    </p>
                    <ul>
                        <li><strong>Utilisateurs</strong> : Gérer les comptes utilisateurs, leurs informations et leurs droits d'accès</li>
                        <li><strong>Équipes</strong> : Organiser et gérer les équipes SMUR (à venir)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-info\">
                    <i class=\"fa fa-users\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Utilisateurs</span>
                    <span class=\"info-box-number\">
                        {{ totalUsers }}
                    </span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success\">
                    <i class=\"fa fa-user-shield\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Administrateurs</span>
                    <span class=\"info-box-number\">{{ admins }}</span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-warning\">
                    <i class=\"fa fa-user-cog\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Gestion utilisateurs</span>
                    <span class=\"info-box-number\">{{ usersWithUserManagement }}</span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-primary\">
                    <i class=\"fa fa-hospital\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Gestion équipes</span>
                    <span class=\"info-box-number\">{{ usersWithTeamManagement }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">
                        <i class=\"fa fa-clock\"></i>
                        Derniers utilisateurs créés
                    </h3>
                </div>
                <div class=\"card-body\">
                    {% if recentUsers|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-sm\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Fonction</th>
                                        <th>Créé le</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for user in recentUsers %}
                                        <tr>
                                            <td>{{ user.fullName }}</td>
                                            <td>{{ user.emailPro }}</td>
                                            <td>{{ user.fonction }}</td>
                                            <td>{{ user.createdAt|date('d/m/Y H:i') }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <p class=\"text-muted\">
                            Aucun utilisateur créé récemment.
                        </p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/dashboard.html.twig", "Z:\\test_projet\\templates\\admin\\dashboard.html.twig");
    }
}
