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
class __TwigTemplate_7903ce0fa87627ad97746d58c1d3f02c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion - TravelParadise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"min-h-screen flex items-center justify-center bg-cover bg-center relative\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tp2.jpg"), "html", null, true);
        yield "');\">

    ";
        // line 10
        yield "    ";
        // line 11
        yield "    <div class=\"absolute inset-0 bg-black opacity-50\"></div>

    ";
        // line 14
        yield "    ";
        // line 15
        yield "    ";
        // line 16
        yield "    <div class=\"max-w-md w-full space-y-8 bg-gray-900 bg-opacity-80 p-10 rounded-xl shadow-2xl border border-gray-700 relative z-10\">

        ";
        // line 19
        yield "        <div class=\"text-center\">
            <div class=\"mb-4 animate-pulse\">
                <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tp-logo.png"), "html", null, true);
        yield "\"
                     style=\"width: 100px; height: 100px;\"
                     alt=\"Travel Paradise Logo\"
                     class=\"mx-auto block mb-2\">

                <h1 class=\"text-4xl font-extrabold text-white\">TravelParadise</h1>
            </div>
            <p class=\"text-gray-400\">Administration touristique</p>
        </div>

        ";
        // line 32
        yield "        ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <div class=\"bg-red-800 bg-opacity-50 border border-red-700 text-red-300 px-4 py-3 rounded relative\" role=\"alert\"> ";
            // line 34
            yield "                <span class=\"block sm:inline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageKey", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageData", [], "any", false, false, false, 34), "security"), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 37
        yield "
        ";
        // line 39
        yield "        <form method=\"post\" class=\"mt-8 space-y-6\">
            ";
        // line 41
        yield "            <div>
                <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-300\">
                    📧 Adresse e-mail
                </label>
                <div class=\"mt-1\">
                    <input type=\"email\"
                           value=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"email\"
                           required
                           autofocus
                           placeholder=\"votre.email@travelparadise.com\">
                </div>
            </div>

            ";
        // line 59
        yield "            <div>
                <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-300\">
                    🔒 Mot de passe
                </label>
                <div class=\"mt-1\">
                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"current-password\"
                           required
                           placeholder=\"••••••••\">
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            ";
        // line 77
        yield "            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\"
                           name=\"_remember_me\"
                           type=\"checkbox\"
                           class=\"h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-600 rounded bg-gray-700\">
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-300\">
                        Se souvenir de moi
                    </label>
                </div>
                ";
        // line 88
        yield "                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-teal-500 hover:text-teal-400\">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            ";
        // line 96
        yield "            <div>
                <button type=\"submit\" class=\"w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-teal-600 to-blue-700 hover:from-teal-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transform transition duration-300 ease-in-out hover:scale-105\">
                    🚀 Se connecter
                </button>
            </div>
        </form>

        ";
        // line 104
        yield "
    </div>

    ";
        // line 108
        yield "    ";
        // line 109
        yield "    <div class=\"absolute inset-0 flex items-center justify-center pointer-events-none z-0\">
        <div class=\"w-64 h-64 bg-teal-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob\"></div>
        <div class=\"w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000\"></div>
        <div class=\"w-64 h-64 bg-yellow-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000\"></div>
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
        return array (  236 => 109,  234 => 108,  229 => 104,  220 => 96,  211 => 88,  199 => 77,  194 => 74,  177 => 59,  163 => 47,  155 => 41,  152 => 39,  149 => 37,  142 => 34,  140 => 33,  137 => 32,  124 => 21,  120 => 19,  116 => 16,  114 => 15,  112 => 14,  108 => 11,  106 => 10,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion - TravelParadise{% endblock %}

{% block body %}
{# Conteneur principal avec image de fond #}
<div class=\"min-h-screen flex items-center justify-center bg-cover bg-center relative\" style=\"background-image: url('{{ asset('images/tp2.jpg') }}');\">

    {# Surcouche semi-transparente sur l'image de fond #}
    {# bg-black avec opacity-50 rend l'image de fond plus sombre #}
    <div class=\"absolute inset-0 bg-black opacity-50\"></div>

    {# La boîte du formulaire - positionnée au-dessus de la surcouche #}
    {# bg-gray-900 pour un fond très sombre, bg-opacity-80 pour la transparence #}
    {# z-10 assure que la boîte est au-dessus de la surcouche #}
    <div class=\"max-w-md w-full space-y-8 bg-gray-900 bg-opacity-80 p-10 rounded-xl shadow-2xl border border-gray-700 relative z-10\">

        {# Logo et titre #}
        <div class=\"text-center\">
            <div class=\"mb-4 animate-pulse\">
                <img src=\"{{ asset('images/tp-logo.png') }}\"
                     style=\"width: 100px; height: 100px;\"
                     alt=\"Travel Paradise Logo\"
                     class=\"mx-auto block mb-2\">

                <h1 class=\"text-4xl font-extrabold text-white\">TravelParadise</h1>
            </div>
            <p class=\"text-gray-400\">Administration touristique</p>
        </div>

        {# Erreurs de connexion #}
        {% if error %}
            <div class=\"bg-red-800 bg-opacity-50 border border-red-700 text-red-300 px-4 py-3 rounded relative\" role=\"alert\"> {# Augmente l'opacité de l'alerte pour la lisibilité #}
                <span class=\"block sm:inline\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
            </div>
        {% endif %}

        {# Formulaire de connexion #}
        <form method=\"post\" class=\"mt-8 space-y-6\">
            {# Champ Email #}
            <div>
                <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-300\">
                    📧 Adresse e-mail
                </label>
                <div class=\"mt-1\">
                    <input type=\"email\"
                           value=\"{{ last_username }}\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"email\"
                           required
                           autofocus
                           placeholder=\"votre.email@travelparadise.com\">
                </div>
            </div>

            {# Champ Mot de passe #}
            <div>
                <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-300\">
                    🔒 Mot de passe
                </label>
                <div class=\"mt-1\">
                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
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
                           class=\"h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-600 rounded bg-gray-700\">
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-300\">
                        Se souvenir de moi
                    </label>
                </div>
                {# Lien \"Mot de passe oublié\" (à implémenter plus tard) #}
                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-teal-500 hover:text-teal-400\">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            {# Bouton Se connecter #}
            <div>
                <button type=\"submit\" class=\"w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-teal-600 to-blue-700 hover:from-teal-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transform transition duration-300 ease-in-out hover:scale-105\">
                    🚀 Se connecter
                </button>
            </div>
        </form>

        {# Section des comptes de test retirée #}

    </div>

    {# Effet visuel subtil derrière la boîte du formulaire (optionnel) #}
    {# Ceci est un exemple simple, des animations plus complexes nécessiteraient CSS/JS #}
    <div class=\"absolute inset-0 flex items-center justify-center pointer-events-none z-0\">
        <div class=\"w-64 h-64 bg-teal-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob\"></div>
        <div class=\"w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000\"></div>
        <div class=\"w-64 h-64 bg-yellow-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000\"></div>
    </div>

</div>
{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
