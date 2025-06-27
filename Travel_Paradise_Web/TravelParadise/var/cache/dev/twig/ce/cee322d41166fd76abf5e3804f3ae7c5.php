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

/* visite/show.html.twig */
class __TwigTemplate_8025abf98b019ca21da1f71cc3044b04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/show.html.twig"));

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

        yield "Détails de la Visite - TravelParadise";
        
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

        yield "Détails de la Visite";
        
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

        yield " ";
        // line 8
        yield "
    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Détails de la Visite</h2>

    ";
        // line 12
        yield "    <div class=\"bg-white shadow-md rounded-lg p-6 mb-6\">
        <dl class=\"divide-y divide-gray-200\">
            ";
        // line 15
        yield "            <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    ID
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield " ";
        // line 21
        yield "                </dd>
            </div>
            ";
        // line 24
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Nom
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 29, $this->source); })()), "lieu", [], "any", false, false, false, 29), "html", null, true);
        yield "
                </dd>
            </div>
             ";
        // line 33
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Description
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 38, $this->source); })()), "commentaire", [], "any", false, false, false, 38), "html", null, true);
        yield "
                </dd>
            </div>
             ";
        // line 42
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Date
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 47
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 47, $this->source); })()), "date", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 47, $this->source); })()), "date", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true)) : (""));
        yield "
                </dd>
            </div>
             ";
        // line 51
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Heure
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 56
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 56, $this->source); })()), "heureDebut", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 56, $this->source); })()), "heureDebut", [], "any", false, false, false, 56), "H:i"), "html", null, true)) : (""));
        yield "
                </dd>
            </div>
             ";
        // line 60
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Durée (minutes)
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 64, $this->source); })()), "duree", [], "any", false, false, false, 64), "html", null, true);
        yield "</dd>
            </div>
             ";
        // line 67
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Prix
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 72, $this->source); })()), "prix", [], "any", false, false, false, 72), "EUR"), "html", null, true);
        yield "
                </dd>
            </div>
             ";
        // line 76
        yield "             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Guide
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 81
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 81, $this->source); })()), "guide", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 81, $this->source); })()), "guide", [], "any", false, false, false, 81), "prenom", [], "any", false, false, false, 81) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 81, $this->source); })()), "guide", [], "any", false, false, false, 81), "nom", [], "any", false, false, false, 81)), "html", null, true)) : ("N/A"));
        yield "
                </dd>
            </div>
            <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Image
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    ";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 89, $this->source); })()), "photoFilename", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            // line 90
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 90, $this->source); })()), "photoFilename", [], "any", false, false, false, 90))), "html", null, true);
            yield "\" alt=\"Image de la visite ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 90, $this->source); })()), "lieu", [], "any", false, false, false, 90), "html", null, true);
            yield "\" class=\"h-48 w-auto object-cover shadow-md rounded\">
                    ";
        } else {
            // line 92
            yield "                        Aucune image
                    ";
        }
        // line 94
        yield "                </dd>
            </div>
            ";
        // line 97
        yield "        </dl>
    </div>

    ";
        // line 101
        yield "    <div class=\"flex justify-end space-x-4\">
        ";
        // line 103
        yield "        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        yield "\"
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\"></path></svg>
            Edit
        </a>

        ";
        // line 110
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_index");
        yield "\" ";
        // line 111
        yield "           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
            Back to list
        </a>

        ";
        // line 117
        yield "        ";
        yield from $this->load("visite/_delete_form.html.twig", 117)->unwrap()->yield(CoreExtension::merge($context, ["visite" => (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 117, $this->source); })())]));
        // line 118
        yield "    </div>

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
        return "visite/show.html.twig";
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
        return array (  293 => 118,  290 => 117,  283 => 111,  279 => 110,  269 => 103,  266 => 101,  261 => 97,  257 => 94,  253 => 92,  245 => 90,  242 => 89,  231 => 81,  224 => 76,  218 => 72,  211 => 67,  206 => 64,  200 => 60,  194 => 56,  187 => 51,  181 => 47,  174 => 42,  168 => 38,  161 => 33,  155 => 29,  148 => 24,  144 => 21,  141 => 20,  134 => 15,  130 => 12,  125 => 8,  111 => 7,  88 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/visite/show.html.twig #}
{% extends 'layout_app.html.twig' %} {# Étend le layout de l'application #}

{% block app_title %}Détails de la Visite - TravelParadise{% endblock %} {# Titre dans la barre du navigateur #}
{% block page_title %}Détails de la Visite{% endblock %} {# Titre affiché dans le header #}

{% block content %} {# Renomme le bloc body en content #}

    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Détails de la Visite</h2>

    {# Affichage des détails dans une structure stylisée #}
    <div class=\"bg-white shadow-md rounded-lg p-6 mb-6\">
        <dl class=\"divide-y divide-gray-200\">
            {# Exemple pour l'ID #}
            <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    ID
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.id }} {# Assure-toi que la variable est correcte #}
                </dd>
            </div>
            {# Exemple pour le Nom #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Nom
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.lieu }}
                </dd>
            </div>
             {# Exemple pour la Description #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Description
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.commentaire }}
                </dd>
            </div>
             {# Exemple pour la Date #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Date
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.date ? visite.date|date('Y-m-d') : '' }}
                </dd>
            </div>
             {# Exemple pour l'Heure #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Heure
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.heureDebut ? visite.heureDebut|date('H:i') : '' }}
                </dd>
            </div>
             {# Exemple pour la Durée #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Durée (minutes)
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">{{ visite.duree }}</dd>
            </div>
             {# Exemple pour le Prix #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Prix
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.prix|format_currency('EUR') }}
                </dd>
            </div>
             {# Exemple pour le Guide #}
             <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Guide
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {{ visite.guide ? visite.guide.prenom ~ ' ' ~ visite.guide.nom : 'N/A' }}
                </dd>
            </div>
            <div class=\"py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4\">
                <dt class=\"text-sm font-medium text-gray-500\">
                    Image
                </dt>
                <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                    {% if visite.photoFilename %} {# Utilise le nom correct ici aussi #}
                        <img src=\"{{ asset('uploads/' ~ visite.photoFilename) }}\" alt=\"Image de la visite {{ visite.lieu }}\" class=\"h-48 w-auto object-cover shadow-md rounded\">
                    {% else %}
                        Aucune image
                    {% endif %}
                </dd>
            </div>
            {# Ajoute ici les autres champs de ton entité Visite #}
        </dl>
    </div>

    {# Boutons d'action (Edit, Back to list, Delete) #}
    <div class=\"flex justify-end space-x-4\">
        {# Bouton Edit #}
        <a href=\"{{ path('app_visite_edit', {'id': visite.id}) }}\"
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\"></path></svg>
            Edit
        </a>

        {# Bouton Back to list #}
        <a href=\"{{ path('app_visite_index') }}\" {# Utilise la route de la liste des visites #}
           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
            Back to list
        </a>

        {# Inclusion du formulaire de suppression #}
        {% include 'visite/_delete_form.html.twig' with {'visite': visite} %}
    </div>

{% endblock %}

", "visite/show.html.twig", "/var/www/html/templates/visite/show.html.twig");
    }
}
