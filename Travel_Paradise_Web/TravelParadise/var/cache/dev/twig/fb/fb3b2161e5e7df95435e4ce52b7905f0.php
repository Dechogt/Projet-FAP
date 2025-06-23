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

/* admin/statistics.html.twig */
class __TwigTemplate_5eff19f206a13add669e5bdfd19daf36 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics.html.twig"));

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

        yield "Statistiques - TravelParadise";
        
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

        yield "Statistiques détaillées";
        
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
    <div class=\"bg-white overflow-hidden shadow rounded-lg p-6\">
        <h2 class=\"text-lg font-medium leading-6 text-gray-900 mb-4\">Graphiques et Analyses</h2>

        <div class=\"grid grid-cols-1 gap-6 lg:grid-cols-2\">
            <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par mois</h3>
            <div class=\"chart-container\" style=\"position: relative; height:40vh; width:80vw\"> ";
        // line 14
        yield "                <canvas id=\"visitsChart\"></canvas>
            </div>

            <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par pays</h3>
            <div class=\"chart-container\" style=\"position: relative; height:40vh; width:80vw\">
                <canvas id=\"countryChart\"></canvas>
            </div>

            <h2 class=\"text-xl font-semibold mt-6 mb-2\">Top Guides</h2>
            ";
        // line 24
        yield "            <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitsByGuide"]) || array_key_exists("visitsByGuide", $context) ? $context["visitsByGuide"] : (function () { throw new RuntimeError('Variable "visitsByGuide" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 26
            yield "                    <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "guide", [], "any", false, false, false, 26), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "total", [], "any", false, false, false, 26), "html", null, true);
            yield " visites</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </ul>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield " ";
        // line 37
        yield "
    <script>
        // Récupère les données passées par Symfony
        const visitsPerMonthData = ";
        // line 40
        yield json_encode((isset($context["visitsPerMonth"]) || array_key_exists("visitsPerMonth", $context) ? $context["visitsPerMonth"] : (function () { throw new RuntimeError('Variable "visitsPerMonth" does not exist.', 40, $this->source); })()));
        yield ";
        const visitsByCountryData = ";
        // line 41
        yield json_encode((isset($context["visitsByCountry"]) || array_key_exists("visitsByCountry", $context) ? $context["visitsByCountry"] : (function () { throw new RuntimeError('Variable "visitsByCountry" does not exist.', 41, $this->source); })()));
        yield ";

        // Initialise le graphique des visites par mois
        const visitsCtx = document.getElementById('visitsChart').getContext('2d');
        const visitsChart = new Chart(visitsCtx, {
            type: 'bar', // Type de graphique (barres)
            data: {
                labels: visitsPerMonthData.labels, // Utilise les labels du contrôleur
                datasets: [{
                    label: 'Nombre de visites',
                    data: visitsPerMonthData.data, // Utilise les données du contrôleur
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Couleur bleue
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true, // Rend le graphique responsive
                scales: {
                    y: {
                        beginAtZero: true // Commence l'axe Y à zéro
                    }
                }
            }
        });

        // Initialise le graphique de répartition par pays
        const countryCtx = document.getElementById('countryChart').getContext('2d');
        const countryChart = new Chart(countryCtx, {
            type: 'pie', // Type de graphique (camembert)
            data: {
                labels: visitsByCountryData.labels, // Utilise les labels du contrôleur
                datasets: [{
                    label: 'Nombre de visites',
                    data: visitsByCountryData.data, // Utilise les données du contrôleur
                    backgroundColor: [ // Couleurs pour chaque segment
                        'rgba(255, 99, 132, 0.5)', // Rouge
                        'rgba(54, 162, 235, 0.5)', // Bleu
                        'rgba(255, 206, 86, 0.5)', // Jaune
                        'rgba(75, 192, 192, 0.5)', // Vert
                        'rgba(153, 102, 255, 0.5)', // Violet
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                 responsive: true,
                 plugins: {
                    legend: {
                        position: 'top', // Position de la légende
                    },
                    title: {
                        display: true,
                        text: 'Répartition des visites par pays' // Titre du graphique
                    }
                }
            }
        });
    </script>
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
        return "admin/statistics.html.twig";
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
        return array (  204 => 41,  200 => 40,  195 => 37,  191 => 36,  178 => 35,  162 => 28,  151 => 26,  147 => 25,  144 => 24,  133 => 14,  125 => 7,  112 => 6,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %}

{% block app_title %}Statistiques - TravelParadise{% endblock %}
{% block page_title %}Statistiques détaillées{% endblock %}

{% block content %}

    <div class=\"bg-white overflow-hidden shadow rounded-lg p-6\">
        <h2 class=\"text-lg font-medium leading-6 text-gray-900 mb-4\">Graphiques et Analyses</h2>

        <div class=\"grid grid-cols-1 gap-6 lg:grid-cols-2\">
            <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par mois</h3>
            <div class=\"chart-container\" style=\"position: relative; height:40vh; width:80vw\"> {# Ajoute un conteneur pour contrôler la taille #}
                <canvas id=\"visitsChart\"></canvas>
            </div>

            <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par pays</h3>
            <div class=\"chart-container\" style=\"position: relative; height:40vh; width:80vw\">
                <canvas id=\"countryChart\"></canvas>
            </div>

            <h2 class=\"text-xl font-semibold mt-6 mb-2\">Top Guides</h2>
            {# Tu peux afficher cette liste sous forme de tableau simple si un graphique n'est pas idéal #}
            <ul>
                {% for stat in visitsByGuide %}
                    <li>{{ stat.guide }}: {{ stat.total }} visites</li>
                {% endfor %}
            </ul>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }} {# Inclut les scripts parents si ton layout_app.html.twig en a #}

    <script>
        // Récupère les données passées par Symfony
        const visitsPerMonthData = {{ visitsPerMonth|json_encode|raw }};
        const visitsByCountryData = {{ visitsByCountry|json_encode|raw }};

        // Initialise le graphique des visites par mois
        const visitsCtx = document.getElementById('visitsChart').getContext('2d');
        const visitsChart = new Chart(visitsCtx, {
            type: 'bar', // Type de graphique (barres)
            data: {
                labels: visitsPerMonthData.labels, // Utilise les labels du contrôleur
                datasets: [{
                    label: 'Nombre de visites',
                    data: visitsPerMonthData.data, // Utilise les données du contrôleur
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Couleur bleue
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true, // Rend le graphique responsive
                scales: {
                    y: {
                        beginAtZero: true // Commence l'axe Y à zéro
                    }
                }
            }
        });

        // Initialise le graphique de répartition par pays
        const countryCtx = document.getElementById('countryChart').getContext('2d');
        const countryChart = new Chart(countryCtx, {
            type: 'pie', // Type de graphique (camembert)
            data: {
                labels: visitsByCountryData.labels, // Utilise les labels du contrôleur
                datasets: [{
                    label: 'Nombre de visites',
                    data: visitsByCountryData.data, // Utilise les données du contrôleur
                    backgroundColor: [ // Couleurs pour chaque segment
                        'rgba(255, 99, 132, 0.5)', // Rouge
                        'rgba(54, 162, 235, 0.5)', // Bleu
                        'rgba(255, 206, 86, 0.5)', // Jaune
                        'rgba(75, 192, 192, 0.5)', // Vert
                        'rgba(153, 102, 255, 0.5)', // Violet
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                 responsive: true,
                 plugins: {
                    legend: {
                        position: 'top', // Position de la légende
                    },
                    title: {
                        display: true,
                        text: 'Répartition des visites par pays' // Titre du graphique
                    }
                }
            }
        });
    </script>
{% endblock %}
", "admin/statistics.html.twig", "/var/www/html/templates/admin/statistics.html.twig");
    }
}
