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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
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
        yield "
<div class=\"min-h-screen flex items-center justify-center bg-cover bg-center relative\" style=\"background-image: url('";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tp2.jpg"), "html", null, true);
        yield "');\">
    <div class=\"absolute inset-0 bg-black opacity-50\"></div>
    <div class=\"max-w-md w-full space-y-8 bg-gray-900 bg-opacity-80 p-10 rounded-xl shadow-2xl border border-gray-700 relative z-10\">

        ";
        // line 13
        yield "        <div class=\"text-center\">
            ";
        // line 15
        yield "            <div class=\"mb-4\"> ";
        // line 16
        yield "                <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tp-logo.png"), "html", null, true);
        yield "\"
                     style=\"width: 100px; height: 100px;\" ";
        // line 18
        yield "                     alt=\"Travel Paradise Logo\"
                     class=\"mx-auto block mb-2\"> ";
        // line 20
        yield "
                <h1 class=\"text-4xl font-extrabold text-white\">TravelParadise</h1> ";
        // line 22
        yield "            </div>
            <p class=\"text-gray-400\">Administration touristique</p> ";
        // line 24
        yield "        </div>

        ";
        // line 27
        yield "        ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            ";
            // line 29
            yield "            <div class=\"bg-red-800 bg-opacity-60 border border-red-700 text-red-300 px-4 py-3 rounded relative\" role=\"alert\"> ";
            // line 30
            yield "                <span class=\"block sm:inline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 33
        yield "
        <form method=\"post\" class=\"mt-8 space-y-6\">
            <div>
                <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-300\">
                    Adresse e-mail
                </label>
                <div class=\"mt-1\">

                    <input type=\"email\"
                           value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"email\"
                           required
                           autofocus
                           placeholder=\"votre.email@travelparadise.com\">
                </div>
            </div>

            <div>

                <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-300\">
                    Mot de passe
                </label>
                <div class=\"mt-1\">

                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"current-password\"
                           required
                           placeholder=\"••••••••\">
                </div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\"
                           name=\"_remember_me\"
                           type=\"checkbox\"
                           class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-600 rounded bg-gray-700\"> ";
        // line 76
        yield "                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-300\">
                        Se souvenir de moi
                    </label>
                </div>
                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-blue-500 hover:text-blue-400\">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            <div>
                <button type=\"submit\" class=\"w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-teal-600 to-blue-700 hover:from-teal-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transform transition duration-300 ease-in-out hover:scale-105\">
                    <svg class=\"w-5 h-5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                        Se connecter
                </button>
            </div>
        </form>

    </div>

    <div class=\"absolute inset-0 flex items-center justify-center pointer-events-none z-0\">
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
        return array (  197 => 76,  188 => 69,  158 => 42,  147 => 33,  140 => 30,  138 => 29,  136 => 28,  133 => 27,  129 => 24,  126 => 22,  123 => 20,  120 => 18,  115 => 16,  113 => 15,  110 => 13,  103 => 8,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/login/login.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Connexion - TravelParadise{% endblock %}

{% block body %}

<div class=\"min-h-screen flex items-center justify-center bg-cover bg-center relative\" style=\"background-image: url('{{ asset('images/tp2.jpg') }}');\">
    <div class=\"absolute inset-0 bg-black opacity-50\"></div>
    <div class=\"max-w-md w-full space-y-8 bg-gray-900 bg-opacity-80 p-10 rounded-xl shadow-2xl border border-gray-700 relative z-10\">

        {# Logo et titre #}
        <div class=\"text-center\">
            {# L'animation pulse est bien, mais pour correspondre à l'image, on peut la retirer ou la rendre moins prononcée si besoin #}
            <div class=\"mb-4\"> {# Retiré animate-pulse pour un rendu plus statique comme l'image #}
                <img src=\"{{ asset('images/tp-logo.png') }}\"
                     style=\"width: 100px; height: 100px;\" {# Taille fixe pour le logo #}
                     alt=\"Travel Paradise Logo\"
                     class=\"mx-auto block mb-2\"> {# Centrage du logo #}

                <h1 class=\"text-4xl font-extrabold text-white\">TravelParadise</h1> {# Titre principal #}
            </div>
            <p class=\"text-gray-400\">Administration touristique</p> {# Sous-titre #}
        </div>

        {# Erreurs de connexion #}
        {% if error %}
            {# Le style de l'alerte d'erreur est déjà bien, mais on peut ajuster l'opacité pour qu'elle soit moins agressive #}
            <div class=\"bg-red-800 bg-opacity-60 border border-red-700 text-red-300 px-4 py-3 rounded relative\" role=\"alert\"> {# Légère augmentation de l'opacité pour la lisibilité #}
                <span class=\"block sm:inline\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
            </div>
        {% endif %}

        <form method=\"post\" class=\"mt-8 space-y-6\">
            <div>
                <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-300\">
                    Adresse e-mail
                </label>
                <div class=\"mt-1\">

                    <input type=\"email\"
                           value=\"{{ last_username }}\"
                           name=\"email\"
                           id=\"inputEmail\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"email\"
                           required
                           autofocus
                           placeholder=\"votre.email@travelparadise.com\">
                </div>
            </div>

            <div>

                <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-300\">
                    Mot de passe
                </label>
                <div class=\"mt-1\">

                    <input type=\"password\"
                           name=\"password\"
                           id=\"inputPassword\"
                           class=\"appearance-none block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-700 text-white\"
                           autocomplete=\"current-password\"
                           required
                           placeholder=\"••••••••\">
                </div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\"
                           name=\"_remember_me\"
                           type=\"checkbox\"
                           class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-600 rounded bg-gray-700\"> {# Styles pour la checkbox #}
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-300\">
                        Se souvenir de moi
                    </label>
                </div>
                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-blue-500 hover:text-blue-400\">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            <div>
                <button type=\"submit\" class=\"w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-teal-600 to-blue-700 hover:from-teal-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transform transition duration-300 ease-in-out hover:scale-105\">
                    <svg class=\"w-5 h-5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                    </svg>
                        Se connecter
                </button>
            </div>
        </form>

    </div>

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
