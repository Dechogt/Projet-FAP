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
            'stylesheets' => [$this, 'block_stylesheets'],
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

        yield "Statistiques";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Optionnel: styles additionnels pour les graphiques -->
    <style>
        .chart-container {
            position: relative;
            height: 40vh;
            width: 100%;
        }
        .no-data-message {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40vh;
            color: #6b7280;
            font-style: italic;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        // line 27
        yield "
    <div class=\"bg-white overflow-hidden shadow rounded-lg p-6\">

        <div class=\"grid grid-cols-1 gap-6 lg:grid-cols-2\">
            ";
        // line 32
        yield "            <div class=\"col-span-1\">
                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par mois</h3>
                <div class=\"chart-container\">
                    <canvas id=\"visitsChart\"></canvas>
                    <div id=\"visitsChartNoData\" class=\"no-data-message\" style=\"display: none;\">
                        Aucune donnée de visite disponible.
                    </div>
                </div>
            </div>

            ";
        // line 43
        yield "            <div class=\"col-span-1\">
                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par pays</h3>
                <div class=\"chart-container\">
                    <canvas id=\"countryChart\"></canvas>
                    <div id=\"countryChartNoData\" class=\"no-data-message\" style=\"display: none;\">
                        Aucune donnée de visite disponible.
                    </div>
                </div>
            </div>

            ";
        // line 54
        yield "            <div class=\"col-span-1 lg:col-span-2\">
                <h2 class=\"text-xl font-semibold mt-6 mb-2\">Top Guides</h2>
                ";
        // line 56
        if ((array_key_exists("visitsByGuide", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["visitsByGuide"]) || array_key_exists("visitsByGuide", $context) ? $context["visitsByGuide"] : (function () { throw new RuntimeError('Variable "visitsByGuide" does not exist.', 56, $this->source); })())) > 0))) {
            // line 57
            yield "                    <ul class=\"space-y-2\">
                        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitsByGuide"]) || array_key_exists("visitsByGuide", $context) ? $context["visitsByGuide"] : (function () { throw new RuntimeError('Variable "visitsByGuide" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                // line 59
                yield "                            <li class=\"flex justify-between items-center p-2 bg-gray-50 rounded\">
                                <span class=\"font-medium\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "guide_nom", [], "any", false, false, false, 60), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "guide_prenom", [], "any", false, false, false, 60), "html", null, true);
                yield "</span>
                                <span class=\"text-blue-600 font-semibold\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "total", [], "any", false, false, false, 61), "html", null, true);
                yield " visites</span>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                    </ul>
                ";
        } else {
            // line 66
            yield "                    <p class=\"text-gray-500 italic\">Aucun guide trouvé.</p>
                ";
        }
        // line 68
        yield "            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 79
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js\"></script>

    <script>
        // Debug: Afficher les données reçues du contrôleur
        console.log('Données reçues:');
        console.log('visitsPerMonth:', ";
        // line 84
        yield json_encode(((array_key_exists("visitsPerMonth", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["visitsPerMonth"]) || array_key_exists("visitsPerMonth", $context) ? $context["visitsPerMonth"] : (function () { throw new RuntimeError('Variable "visitsPerMonth" does not exist.', 84, $this->source); })()), "{}")) : ("{}")));
        yield ");
        console.log('visitsByCountry:', ";
        // line 85
        yield json_encode(((array_key_exists("visitsByCountry", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["visitsByCountry"]) || array_key_exists("visitsByCountry", $context) ? $context["visitsByCountry"] : (function () { throw new RuntimeError('Variable "visitsByCountry" does not exist.', 85, $this->source); })()), "{}")) : ("{}")));
        yield ");

        // Récupération des données
        const visitsPerMonthData = ";
        // line 88
        yield json_encode(((array_key_exists("visitsPerMonth", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["visitsPerMonth"]) || array_key_exists("visitsPerMonth", $context) ? $context["visitsPerMonth"] : (function () { throw new RuntimeError('Variable "visitsPerMonth" does not exist.', 88, $this->source); })()), "{}")) : ("{}")));
        yield ";
        const visitsByCountryData = ";
        // line 89
        yield json_encode(((array_key_exists("visitsByCountry", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["visitsByCountry"]) || array_key_exists("visitsByCountry", $context) ? $context["visitsByCountry"] : (function () { throw new RuntimeError('Variable "visitsByCountry" does not exist.', 89, $this->source); })()), "{}")) : ("{}")));
        yield ";

        // Fonction pour vérifier si les données sont valides
        function hasValidData(data) {
            return data &&
                   typeof data === 'object' &&
                   data.labels &&
                   Array.isArray(data.labels) &&
                   data.labels.length > 0 &&
                   data.data &&
                   Array.isArray(data.data) &&
                   data.data.length > 0;
        }

        // Création du graphique des visites par mois
        if (hasValidData(visitsPerMonthData)) {
            const visitsCtx = document.getElementById('visitsChart').getContext('2d');
            const visitsChart = new Chart(visitsCtx, {
                type: 'bar',
                data: {
                    labels: visitsPerMonthData.labels,
                    datasets: [{
                        label: 'Nombre de visites',
                        data: visitsPerMonthData.data,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Visites par mois'
                        },
                        legend: {
                            display: false
                        }
                    }
                }
            });
            console.log('Graphique des visites par mois créé avec succès');
        } else {
            console.warn('Aucune donnée valide pour le graphique \"Visites par mois\"');
            document.getElementById('visitsChart').style.display = 'none';
            document.getElementById('visitsChartNoData').style.display = 'flex';
        }

        // Création du graphique des visites par pays
        if (hasValidData(visitsByCountryData)) {
            const countryCtx = document.getElementById('countryChart').getContext('2d');
            const countryChart = new Chart(countryCtx, {
                type: 'pie',
                data: {
                    labels: visitsByCountryData.labels,
                    datasets: [{
                        label: 'Nombre de visites',
                        data: visitsByCountryData.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)',
                            'rgba(199, 199, 199, 0.8)',
                            'rgba(83, 102, 255, 0.8)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)',
                            'rgba(83, 102, 255, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: 'Répartition des visites par pays'
                        }
                    }
                }
            });
            console.log('Graphique des visites par pays créé avec succès');
        } else {
            console.warn('Aucune donnée valide pour le graphique \"Visites par pays\"');
            document.getElementById('countryChart').style.display = 'none';
            document.getElementById('countryChartNoData').style.display = 'flex';
        }

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
        return array (  294 => 89,  290 => 88,  284 => 85,  280 => 84,  273 => 79,  267 => 76,  254 => 75,  238 => 68,  234 => 66,  230 => 64,  221 => 61,  215 => 60,  212 => 59,  208 => 58,  205 => 57,  203 => 56,  199 => 54,  187 => 43,  175 => 32,  169 => 27,  156 => 26,  126 => 7,  113 => 6,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %}

{% block app_title %}Statistiques - TravelParadise{% endblock %}
{% block page_title %}Statistiques{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Optionnel: styles additionnels pour les graphiques -->
    <style>
        .chart-container {
            position: relative;
            height: 40vh;
            width: 100%;
        }
        .no-data-message {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40vh;
            color: #6b7280;
            font-style: italic;
        }
    </style>
{% endblock %}

{% block content %}

    <div class=\"bg-white overflow-hidden shadow rounded-lg p-6\">

        <div class=\"grid grid-cols-1 gap-6 lg:grid-cols-2\">
            {# Visites par mois #}
            <div class=\"col-span-1\">
                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par mois</h3>
                <div class=\"chart-container\">
                    <canvas id=\"visitsChart\"></canvas>
                    <div id=\"visitsChartNoData\" class=\"no-data-message\" style=\"display: none;\">
                        Aucune donnée de visite disponible.
                    </div>
                </div>
            </div>

            {# Visites par pays #}
            <div class=\"col-span-1\">
                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par pays</h3>
                <div class=\"chart-container\">
                    <canvas id=\"countryChart\"></canvas>
                    <div id=\"countryChartNoData\" class=\"no-data-message\" style=\"display: none;\">
                        Aucune donnée de visite disponible.
                    </div>
                </div>
            </div>

            {# Top Guides #}
            <div class=\"col-span-1 lg:col-span-2\">
                <h2 class=\"text-xl font-semibold mt-6 mb-2\">Top Guides</h2>
                {% if visitsByGuide is defined and visitsByGuide|length > 0 %}
                    <ul class=\"space-y-2\">
                        {% for stat in visitsByGuide %}
                            <li class=\"flex justify-between items-center p-2 bg-gray-50 rounded\">
                                <span class=\"font-medium\">{{ stat.guide_nom }} {{ stat.guide_prenom }}</span>
                                <span class=\"text-blue-600 font-semibold\">{{ stat.total }} visites</span>
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p class=\"text-gray-500 italic\">Aucun guide trouvé.</p>
                {% endif %}
            </div>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {# Charger Chart.js depuis CDN #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js\"></script>

    <script>
        // Debug: Afficher les données reçues du contrôleur
        console.log('Données reçues:');
        console.log('visitsPerMonth:', {{ visitsPerMonth|default('{}')|json_encode|raw }});
        console.log('visitsByCountry:', {{ visitsByCountry|default('{}')|json_encode|raw }});

        // Récupération des données
        const visitsPerMonthData = {{ visitsPerMonth|default('{}')|json_encode|raw }};
        const visitsByCountryData = {{ visitsByCountry|default('{}')|json_encode|raw }};

        // Fonction pour vérifier si les données sont valides
        function hasValidData(data) {
            return data &&
                   typeof data === 'object' &&
                   data.labels &&
                   Array.isArray(data.labels) &&
                   data.labels.length > 0 &&
                   data.data &&
                   Array.isArray(data.data) &&
                   data.data.length > 0;
        }

        // Création du graphique des visites par mois
        if (hasValidData(visitsPerMonthData)) {
            const visitsCtx = document.getElementById('visitsChart').getContext('2d');
            const visitsChart = new Chart(visitsCtx, {
                type: 'bar',
                data: {
                    labels: visitsPerMonthData.labels,
                    datasets: [{
                        label: 'Nombre de visites',
                        data: visitsPerMonthData.data,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Visites par mois'
                        },
                        legend: {
                            display: false
                        }
                    }
                }
            });
            console.log('Graphique des visites par mois créé avec succès');
        } else {
            console.warn('Aucune donnée valide pour le graphique \"Visites par mois\"');
            document.getElementById('visitsChart').style.display = 'none';
            document.getElementById('visitsChartNoData').style.display = 'flex';
        }

        // Création du graphique des visites par pays
        if (hasValidData(visitsByCountryData)) {
            const countryCtx = document.getElementById('countryChart').getContext('2d');
            const countryChart = new Chart(countryCtx, {
                type: 'pie',
                data: {
                    labels: visitsByCountryData.labels,
                    datasets: [{
                        label: 'Nombre de visites',
                        data: visitsByCountryData.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)',
                            'rgba(199, 199, 199, 0.8)',
                            'rgba(83, 102, 255, 0.8)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)',
                            'rgba(83, 102, 255, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: 'Répartition des visites par pays'
                        }
                    }
                }
            });
            console.log('Graphique des visites par pays créé avec succès');
        } else {
            console.warn('Aucune donnée valide pour le graphique \"Visites par pays\"');
            document.getElementById('countryChart').style.display = 'none';
            document.getElementById('countryChartNoData').style.display = 'flex';
        }

    </script>
{% endblock %}
", "admin/statistics.html.twig", "/var/www/html/templates/admin/statistics.html.twig");
    }
}
