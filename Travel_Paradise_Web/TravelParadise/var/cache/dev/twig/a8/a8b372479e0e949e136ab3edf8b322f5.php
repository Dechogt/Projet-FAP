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

/* visite/index.html.twig */
class __TwigTemplate_f037f7e19fd58f4b1f6767d3cdbd3c54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/index.html.twig"));

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

        yield "Visites - TravelParadise";
        
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

        yield "Visites";
        
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

        yield " ";
        // line 7
        yield "
    <div class=\"flex justify-between items-center mb-6\">
        <h2 class=\"text-2xl font-bold text-gray-800\">Liste des Visites</h2>
        ";
        // line 11
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_new");
        yield "\"
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path></svg>
            Créer une nouvelle Visite
        </a>
    </div>

    ";
        // line 19
        yield "    <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    ";
        // line 24
        yield "                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ID
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Lieu ";
        // line 29
        yield "                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Commentaire ";
        // line 32
        yield "                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Date
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Heure Début ";
        // line 38
        yield "                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Durée (heures) ";
        // line 41
        yield "                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Prix
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Guide
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Image
                    </th>
                    ";
        // line 52
        yield "                    <th scope=\"col\" class=\"relative px-6 py-3\">
                        <span class=\"sr-only\">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            yield " ";
            // line 59
            yield "                    <tr>
                        ";
            // line 61
            yield "                        <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                            ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "lieu", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            // line 66
            yield "                        </td>
                         <td class=\"px-6 py-4 text-sm text-gray-500\"> ";
            // line 68
            yield "                            ";
            // line 69
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "commentaire", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "                                ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "commentaire", [], "any", false, false, false, 70)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "commentaire", [], "any", false, false, false, 70), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "commentaire", [], "any", false, false, false, 70), "html", null, true)));
                yield "
                            ";
            } else {
                // line 72
                yield "                                Aucun commentaire
                            ";
            }
            // line 74
            yield "                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 76), "Y-m-d"), "html", null, true)) : (""));
            yield " ";
            // line 77
            yield "                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 79
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "heureDebut", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "heureDebut", [], "any", false, false, false, 79), "H:i"), "html", null, true)) : (""));
            yield " ";
            // line 80
            yield "                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "duree", [], "any", false, false, false, 82), "html", null, true);
            yield " ";
            // line 83
            yield "                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "prix", [], "any", false, false, false, 85), "EUR", ["fraction_digit" => 2]), "html", null, true);
            yield " ";
            // line 86
            yield "                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 88
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "guide", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "guide", [], "any", false, false, false, 88), "prenom", [], "any", false, false, false, 88) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "guide", [], "any", false, false, false, 88), "nom", [], "any", false, false, false, 88)), "html", null, true)) : ("N/A"));
            yield " ";
            // line 89
            yield "                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 91
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "photoFilename", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "                                ";
                // line 93
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "photoFilename", [], "any", false, false, false, 93))), "html", null, true);
                yield "\" ";
                // line 94
                yield "                                    alt=\"Image de la visite ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "lieu", [], "any", false, false, false, 94), "html", null, true);
                yield "\" ";
                // line 95
                yield "                                    class=\"h-10 w-10 rounded object-cover\"> ";
                // line 96
                yield "                            ";
            } else {
                // line 97
                yield "                                Aucune image
                            ";
            }
            // line 99
            yield "                        </td>
                        ";
            // line 101
            yield "                        <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                            ";
            // line 103
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\"
                               class=\"text-gray-600 hover:text-gray-900 mr-4\">Show</a>
                            <a href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\"
                               class=\"text-teal-600 hover:text-teal-900 mr-4\">Edit</a>
                            ";
            // line 108
            yield "                            ";
            yield from $this->load("visite/_delete_form.html.twig", 108)->unwrap()->yield(CoreExtension::merge($context, ["visite" => $context["visite"]]));
            // line 109
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 111
        if (!$context['_iterated']) {
            // line 112
            yield "                    <tr>
                        <td colspan=\"10\" class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\"> ";
            // line 114
            yield "                            Aucune visite trouvée.
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['visite'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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
        return "visite/index.html.twig";
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
        return array (  348 => 118,  339 => 114,  336 => 112,  334 => 111,  320 => 109,  317 => 108,  312 => 105,  306 => 103,  303 => 101,  300 => 99,  296 => 97,  293 => 96,  291 => 95,  287 => 94,  283 => 93,  281 => 92,  279 => 91,  275 => 89,  272 => 88,  268 => 86,  265 => 85,  261 => 83,  258 => 82,  254 => 80,  251 => 79,  247 => 77,  244 => 76,  240 => 74,  236 => 72,  230 => 70,  227 => 69,  225 => 68,  222 => 66,  219 => 65,  213 => 62,  210 => 61,  207 => 59,  188 => 58,  180 => 52,  168 => 41,  164 => 38,  157 => 32,  153 => 29,  147 => 24,  141 => 19,  130 => 11,  125 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %} {# Étend le layout de l'application #}

{% block app_title %}Visites - TravelParadise{% endblock %} {# Titre dans la barre du navigateur #}
{% block page_title %}Visites{% endblock %} {# Titre affiché dans le header #}

{% block content %} {# Renomme le bloc body en content #}

    <div class=\"flex justify-between items-center mb-6\">
        <h2 class=\"text-2xl font-bold text-gray-800\">Liste des Visites</h2>
        {# Bouton \"Create New\" #}
        <a href=\"{{ path('app_visite_new') }}\"
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path></svg>
            Créer une nouvelle Visite
        </a>
    </div>

    {# Tableau des visites #}
    <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    {# Adapte les en-têtes de colonne en fonction des propriétés de ton entité Visite #}
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ID
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Lieu {# Changé de \"Nom\" à \"Lieu\" #}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Commentaire {# Changé l'en-tête pour refléter le contenu #}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Date
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Heure Début {# Précisé \"Heure Début\" pour plus de clarté #}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Durée (heures) {# Précisé l'unité de la durée #}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Prix
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Guide
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        Image
                    </th>
                    {# Ajoute d'autres en-têtes si nécessaire #}
                    <th scope=\"col\" class=\"relative px-6 py-3\">
                        <span class=\"sr-only\">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                {% for visite in visites %} {# Assure-toi que le nom de la variable est correct #}
                    <tr>
                        {# Adapte l'affichage des données en fonction des propriétés de ton entité Visite #}
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                            {{ visite.id }}
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ visite.lieu }} {# <-- CORRIGÉ : Utilisation de 'lieu' #}
                        </td>
                         <td class=\"px-6 py-4 text-sm text-gray-500\"> {# Retire whitespace-nowrap pour le commentaire #}
                            {# CORRIGÉ : Utilisation de 'commentaire' et ajustement de la logique d'affichage #}
                            {% if visite.commentaire %}
                                {{ visite.commentaire|length > 50 ? visite.commentaire|slice(0, 50) ~ '...' : visite.commentaire }}
                            {% else %}
                                Aucun commentaire
                            {% endif %}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ visite.date ? visite.date|date('Y-m-d') : '' }} {# Formate la date #}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ visite.heureDebut ? visite.heureDebut|date('H:i') : '' }} {# Formate l'heure de début #}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ visite.duree }} {# Affiche la durée en heures #}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ visite.prix|format_currency('EUR', {fraction_digit: 2}) }} {# Formate le prix avec 2 décimales #}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ visite.guide ? visite.guide.prenom ~ ' ' ~ visite.guide.nom : 'N/A' }} {# Affiche le nom du guide #}
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {% if visite.photoFilename %}
                                {# Utilise la fonction asset() pour générer l'URL de l'image #}
                                <img src=\"{{ asset('uploads/' ~ visite.photoFilename) }}\" {# Adapte le chemin #}
                                    alt=\"Image de la visite {{ visite.lieu }}\" {# Changé l'alt text pour utiliser 'lieu' #}
                                    class=\"h-10 w-10 rounded object-cover\"> {# Classes Tailwind pour styliser l'image #}
                            {% else %}
                                Aucune image
                            {% endif %}
                        </td>
                        {# Ajoute d'autres cellules si nécessaire #}
                        <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                            {# Liens d'action #}
                            <a href=\"{{ path('app_visite_show', {'id': visite.id}) }}\"
                               class=\"text-gray-600 hover:text-gray-900 mr-4\">Show</a>
                            <a href=\"{{ path('app_visite_edit', {'id': visite.id}) }}\"
                               class=\"text-teal-600 hover:text-teal-900 mr-4\">Edit</a>
                            {# Inclusion du formulaire de suppression (si tu veux le bouton ici) #}
                            {% include 'visite/_delete_form.html.twig' with {'visite': visite} %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"10\" class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\"> {# Augmenté colspan pour couvrir toutes les colonnes #}
                            Aucune visite trouvée.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "visite/index.html.twig", "/var/www/html/templates/visite/index.html.twig");
    }
}
