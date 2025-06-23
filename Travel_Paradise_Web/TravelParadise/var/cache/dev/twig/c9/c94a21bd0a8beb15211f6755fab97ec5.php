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

/* visiteur/index.html.twig */
class __TwigTemplate_9b773c2c0a81c7001c67655a185af472 extends Template
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
            'app_title' => [$this, 'block_app_title'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout_app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/index.html.twig"));

        $this->parent = $this->load("layout_app.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_app_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "app_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "app_title"));

        yield "Liste des Visiteurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Liste des Visiteurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "    <div class=\"flex justify-end mb-4\">
        ";
        // line 9
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_new");
        yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Ajouter un visiteur
        </a>
    </div>

    <div class=\"overflow-x-auto\">
        <div class=\"align-middle inline-block min-w-full py-4\">
            <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ID
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Nom
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Prénom
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Présent
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Commentaire
                            </th>
                            ";
        // line 36
        yield "                            ";
        // line 42
        yield "                            <th scope=\"col\" class=\"relative px-6 py-3\">
                                <span class=\"sr-only\">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visiteurs"]) || array_key_exists("visiteurs", $context) ? $context["visiteurs"] : (function () { throw new RuntimeError('Variable "visiteurs" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["visiteur"]) {
            // line 49
            yield "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "nom", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "prenom", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    ";
            // line 55
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "present", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                                        <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800\">
                                            Oui
                                        </span>
                                    ";
            } else {
                // line 60
                yield "                                        <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800\">
                                            Non
                                        </span>
                                    ";
            }
            // line 64
            yield "                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "commentaire", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>

                                ";
            // line 68
            yield "                                ";
            // line 69
            yield "                                ";
            // line 70
            yield "
                                <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                    ";
            // line 73
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:text-blue-900\">Voir</a>
                                    ";
            // line 75
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visiteur"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" class=\"text-indigo-600 hover:text-indigo-900 ml-4\">Modifier</a>
                                    ";
            // line 77
            yield "                                    ";
            // line 78
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                            <tr>
                                <td colspan=\"6\" class=\"px-6 py-4 text-center text-sm text-gray-500\">Aucun visiteur trouvé.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['visiteur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "visiteur/index.html.twig";
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
        return array (  248 => 85,  239 => 81,  237 => 80,  231 => 78,  229 => 77,  224 => 75,  219 => 73,  215 => 70,  213 => 69,  211 => 68,  206 => 65,  203 => 64,  197 => 60,  191 => 56,  188 => 55,  183 => 52,  179 => 51,  175 => 50,  172 => 49,  167 => 48,  159 => 42,  157 => 36,  127 => 9,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %}

{% block app_title %}Liste des Visiteurs{% endblock %}
{% block page_title %}Liste des Visiteurs{% endblock %}

{% block content %}
    <div class=\"flex justify-end mb-4\">
        {# Assure-toi que la route 'app_visiteur_new' existe pour le bouton d'ajout #}
        <a href=\"{{ path('app_visiteur_new') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Ajouter un visiteur
        </a>
    </div>

    <div class=\"overflow-x-auto\">
        <div class=\"align-middle inline-block min-w-full py-4\">
            <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                ID
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Nom
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Prénom
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Présent
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Commentaire
                            </th>
                            {# Supprime les colonnes qui n'existent pas dans ton entité Visiteur #}
                            {# <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Email
                            </th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                                Téléphone
                            </th> #}
                            <th scope=\"col\" class=\"relative px-6 py-3\">
                                <span class=\"sr-only\">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for visiteur in visiteurs %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">{{ visiteur.id }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ visiteur.nom }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ visiteur.prenom }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    {# Affiche une icône ou un texte selon la valeur de 'present' #}
                                    {% if visiteur.present %}
                                        <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800\">
                                            Oui
                                        </span>
                                    {% else %}
                                        <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800\">
                                            Non
                                        </span>
                                    {% endif %}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ visiteur.commentaire }}</td>

                                {# Supprime les lignes pour l'email et le téléphone #}
                                {# <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ visiteur.email }}</td> #}
                                {# <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ visiteur.telephone }}</td> #}

                                <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                    {# Assure-toi que la route 'app_visiteur_show' existe pour voir les détails #}
                                    <a href=\"{{ path('app_visiteur_show', {'id': visiteur.id}) }}\" class=\"text-blue-600 hover:text-blue-900\">Voir</a>
                                    {# Assure-toi que la route 'app_visiteur_edit' existe pour modifier #}
                                    <a href=\"{{ path('app_visiteur_edit', {'id': visiteur.id}) }}\" class=\"text-indigo-600 hover:text-indigo-900 ml-4\">Modifier</a>
                                    {# Pour la suppression, il faut une route et une logique côté contrôleur #}
                                    {# <a href=\"#\" class=\"text-red-600 hover:text-red-900 ml-4\">Supprimer</a> #}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"px-6 py-4 text-center text-sm text-gray-500\">Aucun visiteur trouvé.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "visiteur/index.html.twig", "/var/www/html/templates/visiteur/index.html.twig");
    }
}
