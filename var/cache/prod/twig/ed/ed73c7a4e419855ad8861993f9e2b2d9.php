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
class __TwigTemplate_e187cb1c48aa6c268c7d4d7120813198 extends Template
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
        $this->parent = $this->load("@EasyAdmin/page/content.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <h1 class=\"title\">
        <i class=\"fa fa-tachometer-alt\"></i>
        Tableau de bord - SMUR Pontoise
    </h1>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalUsers"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["admins"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["usersWithUserManagement"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["usersWithTeamManagement"] ?? null), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recentUsers"] ?? null)) > 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recentUsers"] ?? null));
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
        return array (  231 => 126,  225 => 122,  219 => 118,  210 => 115,  206 => 114,  202 => 113,  198 => 112,  195 => 111,  191 => 110,  178 => 99,  176 => 98,  157 => 82,  142 => 70,  127 => 58,  111 => 45,  75 => 11,  68 => 10,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard.html.twig", "/var/www/html/templates/admin/dashboard.html.twig");
    }
}
