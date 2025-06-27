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

/* user/index.html.twig */
class __TwigTemplate_6d4bb7abda171484ca949e72d97aa96a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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

        yield "Users List - TravelParadise";
        
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

        yield "Users List";
        
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
        yield "
    ";
        // line 9
        yield "    ";
        // line 10
        yield "
    ";
        // line 12
        yield "    <div class=\"mb-4 text-right\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path></svg>
            Ajouter un utilisateur
        </a>
    </div>

    ";
        // line 20
        yield "    <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ID
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Email
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Roles
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        First Name
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Last Name
                    </th>
                    <th scope=\"col\" class=\"relative px-6 py-3\">
                        <span class=\"sr-only\">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">

            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 47
            yield "                <tr>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                        ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "
                    </td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                        ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 52), "html", null, true);
            yield "
                    </td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                         ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 56
                yield "                            ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 57
                    yield "                                <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                                    Admin
                                </span>
                            ";
                } elseif ((                // line 60
$context["role"] == "ROLE_USER")) {
                    // line 61
                    yield "                                 <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                    User
                                </span>
                            ";
                } else {
                    // line 65
                    yield "                                 <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                    ";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "
                                </span>
                            ";
                }
                // line 69
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                    </td>
                     <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">
                        ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 72), "")) : ("")), "html", null, true);
            yield "
                    </td>
                     <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">
                        ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 75), "")) : ("")), "html", null, true);
            yield "
                    </td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                        ";
            // line 79
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"text-gray-600 hover:text-gray-900 mr-4\">Show</a>
                        <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"text-teal-600 hover:text-teal-900 mr-4\">Edit</a>
                        ";
            // line 82
            yield "                        ";
            // line 83
            yield "                        ";
            // line 84
            yield "                        ";
            // line 85
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "                <tr>
                    <td colspan=\"6\" class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\">
                        No users found.
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "            </tbody>
        </table>
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
        return "user/index.html.twig";
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
        return array (  278 => 94,  267 => 88,  265 => 87,  259 => 85,  257 => 84,  255 => 83,  253 => 82,  249 => 80,  244 => 79,  238 => 75,  232 => 72,  228 => 70,  222 => 69,  216 => 66,  213 => 65,  207 => 61,  205 => 60,  200 => 57,  197 => 56,  193 => 55,  187 => 52,  181 => 49,  177 => 47,  172 => 46,  144 => 20,  135 => 13,  132 => 12,  129 => 10,  127 => 9,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %}

{% block app_title %}Users List - TravelParadise{% endblock %} {# Titre dans la barre du navigateur #}
{% block page_title %}Users List{% endblock %} {# Titre affiché dans le header #}

{% block content %}

    {# Le titre H1 peut être supprimé car le titre est déjà dans le header via page_title #}
    {# <h1>User Index</h1> #}

    {# Bouton pour ajouter un nouvel utilisateur (stylisé avec Tailwind) #}
    <div class=\"mb-4 text-right\">
        <a href=\"{{ path('app_user_new') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path></svg>
            Ajouter un utilisateur
        </a>
    </div>

    {# Tableau des utilisateurs (stylisé avec Tailwind) #}
    <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ID
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Email
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Roles
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        First Name
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Last Name
                    </th>
                    <th scope=\"col\" class=\"relative px-6 py-3\">
                        <span class=\"sr-only\">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">

            {% for user in users %}
                <tr>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                        {{ user.id }}
                    </td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                        {{ user.email }}
                    </td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                         {% for role in user.roles %}
                            {% if role == 'ROLE_ADMIN' %}
                                <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                                    Admin
                                </span>
                            {% elseif role == 'ROLE_USER' %}
                                 <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                    User
                                </span>
                            {% else %}
                                 <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                    {{ role }}
                                </span>
                            {% endif %}
                        {% endfor %}
                    </td>
                     <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">
                        {{ user.prenom|default('') }}
                    </td>
                     <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">
                        {{ user.nom|default('') }}
                    </td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                        {# Liens d'action stylisés #}
                        <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"text-gray-600 hover:text-gray-900 mr-4\">Show</a>
                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"text-teal-600 hover:text-teal-900 mr-4\">Edit</a>
                        {# Le formulaire de suppression est généralement un formulaire séparé, pas un simple lien #}
                        {# Tu auras un _delete_form.html.twig que tu incluras ici #}
                        {# Exemple d'inclusion (le formulaire doit être stylisé séparément) #}
                        {# {% include 'user/_delete_form.html.twig' with {'user': user} %} #}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\" class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\">
                        No users found.
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "user/index.html.twig", "/var/www/html/templates/user/index.html.twig");
    }
}
