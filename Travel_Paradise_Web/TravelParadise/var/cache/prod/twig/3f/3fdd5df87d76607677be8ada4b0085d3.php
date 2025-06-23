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
class __TwigTemplate_8c61f2b334ec6bd788f3b4896679c9d4 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion - TravelParadise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8\">
    ";
        // line 9
        yield "    <div class=\"max-w-md w-full space-y-8 bg-white p-10 rounded-xl shadow-2xl\"> ";
        // line 10
        yield "        ";
        // line 11
        yield "        <div class=\"text-center\">
            <div class=\"text-6xl mb-4\">🏝️</div>
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">TravelParadise</h1> ";
        // line 14
        yield "            <p class=\"text-gray-600\">Administration</p> ";
        // line 15
        yield "        </div>

        ";
        // line 18
        yield "        ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            ";
            // line 20
            yield "            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                <span class=\"block sm:inline\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 24
        yield "
        ";
        // line 26
        yield "        <form method=\"post\" class=\"mt-8 space-y-6\">
            ";
        // line 28
        yield "            <div>
                <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700\"> ";
        // line 30
        yield "                    📧 Adresse e-mail
                </label>
                <div class=\"mt-1\">
                    <input type=\"email\"
                           value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm\" ";
        // line 38
        yield "                           autocomplete=\"email\"
                           required
                           autofocus
                           placeholder=\"votre.email@travelparadise.com\">
                </div>
            </div>

            ";
        // line 46
        yield "            <div>
                <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-700\"> ";
        // line 48
        yield "                    🔒 Mot de passe
                </label>
                <div class=\"mt-1\">
                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm\" ";
        // line 55
        yield "                           autocomplete=\"current-password\"
                           required
                           placeholder=\"••••••••\">
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            ";
        // line 64
        yield "            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\"
                           name=\"_remember_me\"
                           type=\"checkbox\"
                           class=\"h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded\"> ";
        // line 70
        yield "                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-900\"> ";
        // line 71
        yield "                        Se souvenir de moi
                    </label>
                </div>
                ";
        // line 75
        yield "                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-teal-600 hover:text-teal-500\">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            ";
        // line 83
        yield "            <div>
                <button type=\"submit\" class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\"> ";
        // line 85
        yield "                    🚀 Se connecter
                </button>
            </div>
        </form>

        ";
        // line 91
        yield "        <div class=\"mt-8 p-4 bg-blue-100 border border-blue-300 text-blue-800 rounded-lg\"> ";
        // line 92
        yield "            <h3 class=\"text-sm font-medium mb-2\">🧪 Comptes de test :</h3>
            <div class=\"text-xs space-y-1\">
                <div><strong>Admin :</strong> admin@travelparadise.com</div>
                <div><strong>Staff :</strong> staff@travelparadise.com</div>
                <div><em>Mot de passe : password123</em></div>
            </div>
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
        return array (  205 => 92,  203 => 91,  196 => 85,  193 => 83,  184 => 75,  179 => 71,  177 => 70,  170 => 64,  165 => 61,  157 => 55,  149 => 48,  146 => 46,  137 => 38,  131 => 34,  125 => 30,  122 => 28,  119 => 26,  116 => 24,  110 => 21,  107 => 20,  105 => 19,  102 => 18,  98 => 15,  96 => 14,  92 => 11,  90 => 10,  88 => 9,  85 => 7,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion - TravelParadise{% endblock %}

{% block body %}
{# Conteneur principal centré verticalement et horizontalement avec fond sombre #}
<div class=\"min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8\">
    {# Conteneur du formulaire avec fond blanc/gris clair et ombre #}
    <div class=\"max-w-md w-full space-y-8 bg-white p-10 rounded-xl shadow-2xl\"> {# bg-white ou bg-gray-800 si tu veux un fond sombre pour le formulaire #}
        {# Logo et titre #}
        <div class=\"text-center\">
            <div class=\"text-6xl mb-4\">🏝️</div>
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">TravelParadise</h1> {# text-gray-900 pour un fond blanc, text-white pour un fond sombre #}
            <p class=\"text-gray-600\">Administration</p> {# text-gray-600 pour un fond blanc, text-gray-400 pour un fond sombre #}
        </div>

        {# Erreurs de connexion #}
        {% if error %}
            {# Utilisation des classes Tailwind pour les alertes #}
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                <span class=\"block sm:inline\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
            </div>
        {% endif %}

        {# Formulaire de connexion #}
        <form method=\"post\" class=\"mt-8 space-y-6\">
            {# Champ Email #}
            <div>
                <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700\"> {# text-gray-700 pour un fond blanc, text-gray-300 pour un fond sombre #}
                    📧 Adresse e-mail
                </label>
                <div class=\"mt-1\">
                    <input type=\"email\"
                           value=\"{{ last_username }}\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm\" {# Classes Tailwind pour l'input #}
                           autocomplete=\"email\"
                           required
                           autofocus
                           placeholder=\"votre.email@travelparadise.com\">
                </div>
            </div>

            {# Champ Mot de passe #}
            <div>
                <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-700\"> {# text-gray-700 pour un fond blanc, text-gray-300 pour un fond sombre #}
                    🔒 Mot de passe
                </label>
                <div class=\"mt-1\">
                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm\" {# Classes Tailwind pour l'input #}
                           autocomplete=\"current-password\"
                           required
                           placeholder=\"••••••••\">
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            {# Se souvenir de moi et Mot de passe oublié #}
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\"
                           name=\"_remember_me\"
                           type=\"checkbox\"
                           class=\"h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded\"> {# Classes Tailwind pour la checkbox #}
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-900\"> {# text-gray-900 pour un fond blanc, text-gray-300 pour un fond sombre #}
                        Se souvenir de moi
                    </label>
                </div>
                {# Lien \"Mot de passe oublié\" (à implémenter plus tard) #}
                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-teal-600 hover:text-teal-500\">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            {# Bouton Se connecter #}
            <div>
                <button type=\"submit\" class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\"> {# Classes Tailwind pour le bouton #}
                    🚀 Se connecter
                </button>
            </div>
        </form>

        {# Informations de test (à supprimer en prod) #}
        <div class=\"mt-8 p-4 bg-blue-100 border border-blue-300 text-blue-800 rounded-lg\"> {# Classes Tailwind pour la section d'information #}
            <h3 class=\"text-sm font-medium mb-2\">🧪 Comptes de test :</h3>
            <div class=\"text-xs space-y-1\">
                <div><strong>Admin :</strong> admin@travelparadise.com</div>
                <div><strong>Staff :</strong> staff@travelparadise.com</div>
                <div><em>Mot de passe : password123</em></div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
