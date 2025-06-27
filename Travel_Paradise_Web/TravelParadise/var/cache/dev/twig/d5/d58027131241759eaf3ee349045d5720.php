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

/* guide_touristique/show.html.twig */
class __TwigTemplate_116461ee37fd17cbea168d7c5c569248 extends Template
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
        // line 2
        return "layout_app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide_touristique/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide_touristique/show.html.twig"));

        $this->parent = $this->load("layout_app.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Guide ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield " - TravelParadise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "Détails du Guide Touristique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
    <div class=\"max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md\">

        <h2 class=\"text-2xl font-bold text-gray-800 mb-6 text-center\">Détails du Guide Touristique</h2>

        ";
        // line 14
        yield "        ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 14, $this->source); })()), "photoFilename", [], "any", false, false, false, 14))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "            <div class=\"mb-6 text-center\"> ";
            // line 16
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 16, $this->source); })()), "photoFilename", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" alt=\"Photo de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"h-48 w-48 object-cover rounded-full shadow-md mx-auto\"> ";
            // line 17
            yield "            </div>
        ";
        }
        // line 19
        yield "
        ";
        // line 21
        yield "        <div class=\"border-t border-gray-200 pt-4\">
            <dl class=\"divide-y divide-gray-200\">
                <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Nom</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        yield "</dd>
                </div>
                <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Prénom</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), "html", null, true);
        yield "</dd>
                </div>
                 <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Adresse e-mail</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</dd>
                </div>
                 <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Téléphone</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["guide_touristique"] ?? null), "telephone", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37), "html", null, true)) : ("N/A"));
        yield "</dd> ";
        // line 38
        yield "                </div>
                <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Pays d'affectation</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 41, $this->source); })()), "paysAffectation", [], "any", false, false, false, 41), "html", null, true);
        yield "</dd>
                </div>
                 <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Statut</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">
                        ";
        // line 46
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 46, $this->source); })()), "isStatut", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Actif</span>
                        ";
        } else {
            // line 49
            yield "                             <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Inactif</span>
                        ";
        }
        // line 51
        yield "                    </dd>
                </div>
            </dl>
        </div>

        ";
        // line 57
        yield "        <div class=\"mt-6 flex justify-end space-x-4\">
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_index");
        yield "\"
               class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
                Retour à la liste
            </a>
            <a href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\"
               class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z\"></path></svg>
                Modifier
            </a>
        </div>

        ";
        // line 71
        yield "        ";
        yield from $this->load("guide_touristique/_delete_form.html.twig", 71)->unwrap()->yield($context);
        // line 72
        yield "
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
        return "guide_touristique/show.html.twig";
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
        return array (  237 => 72,  234 => 71,  224 => 63,  216 => 58,  213 => 57,  206 => 51,  202 => 49,  198 => 47,  196 => 46,  188 => 41,  183 => 38,  180 => 37,  173 => 33,  166 => 29,  159 => 25,  153 => 21,  150 => 19,  146 => 17,  138 => 16,  136 => 15,  133 => 14,  126 => 8,  113 => 7,  90 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/guide_touristique/show.html.twig #}
{% extends 'layout_app.html.twig' %}

{% block app_title %}Guide {{ guide_touristique.nom }} - TravelParadise{% endblock %}
{% block page_title %}Détails du Guide Touristique{% endblock %}

{% block content %}

    <div class=\"max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md\">

        <h2 class=\"text-2xl font-bold text-gray-800 mb-6 text-center\">Détails du Guide Touristique</h2>

        {# Afficher l'image si elle existe #}
        {% if guide_touristique.photoFilename is not null %}
            <div class=\"mb-6 text-center\"> {# Centrer l'image #}
                <img src=\"{{ asset('uploads/' ~ guide_touristique.photoFilename) }}\" alt=\"Photo de {{ guide_touristique.nom }} {{ guide_touristique.prenom }}\" class=\"h-48 w-48 object-cover rounded-full shadow-md mx-auto\"> {# Image ronde et centrée #}
            </div>
        {% endif %}

        {# Afficher les informations du guide #}
        <div class=\"border-t border-gray-200 pt-4\">
            <dl class=\"divide-y divide-gray-200\">
                <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Nom</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ guide_touristique.nom }}</dd>
                </div>
                <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Prénom</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ guide_touristique.prenom }}</dd>
                </div>
                 <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Adresse e-mail</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ guide_touristique.email }}</dd>
                </div>
                 <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Téléphone</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ guide_touristique.telephone ?? 'N/A' }}</dd> {# Affiche N/A si le téléphone est null #}
                </div>
                <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Pays d'affectation</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ guide_touristique.paysAffectation }}</dd>
                </div>
                 <div class=\"px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Statut</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">
                        {% if guide_touristique.isStatut %}
                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Actif</span>
                        {% else %}
                             <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Inactif</span>
                        {% endif %}
                    </dd>
                </div>
            </dl>
        </div>

        {# Boutons d'action #}
        <div class=\"mt-6 flex justify-end space-x-4\">
            <a href=\"{{ path('app_guide_touristique_index') }}\"
               class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
                Retour à la liste
            </a>
            <a href=\"{{ path('app_guide_touristique_edit', {'id': guide_touristique.id}) }}\"
               class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z\"></path></svg>
                Modifier
            </a>
        </div>

        {# Formulaire de suppression (souvent un petit formulaire POST) #}
        {% include 'guide_touristique/_delete_form.html.twig' %}

    </div>

{% endblock %}
", "guide_touristique/show.html.twig", "/var/www/html/templates/guide_touristique/show.html.twig");
    }
}
