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

        yield "Statistiques";
        
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

        <div class=\"grid grid-cols-1 gap-6 lg:grid-cols-2\">
            ";
        // line 12
        yield "            <div class=\"col-span-1\"> ";
        // line 13
        yield "                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par mois</h3>
                <div class=\"chart-container\" style=\"position: relative; height:40vh; width:100%;\"> ";
        // line 15
        yield "                    <canvas id=\"visitsChart\"></canvas>
                </div>
            </div>

            ";
        // line 20
        yield "            <div class=\"col-span-1\"> ";
        // line 21
        yield "                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par pays</h3>
                <div class=\"chart-container\" style=\"position: relative; height:40vh; width:100%;\"> ";
        // line 23
        yield "                    <canvas id=\"countryChart\"></canvas>
                </div>
            </div>

            ";
        // line 28
        yield "            <div class=\"col-span-1 lg:col-span-2\"> ";
        // line 29
        yield "                <h2 class=\"text-xl font-semibold mt-6 mb-2\">Top Guides</h2>
                <ul>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitsByGuide"]) || array_key_exists("visitsByGuide", $context) ? $context["visitsByGuide"] : (function () { throw new RuntimeError('Variable "visitsByGuide" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 32
            yield "                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "guide_nom", [], "any", false, false, false, 32), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "guide_prenom", [], "any", false, false, false, 32), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "total_visites", [], "any", false, false, false, 32), "html", null, true);
            yield " visites</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                </ul>
            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 46
        yield "    <script>
        const visitsPerMonthData = ";
        // line 47
        yield json_encode((isset($context["visitsPerMonth"]) || array_key_exists("visitsPerMonth", $context) ? $context["visitsPerMonth"] : (function () { throw new RuntimeError('Variable "visitsPerMonth" does not exist.', 47, $this->source); })()));
        yield ";
        const visitsByCountryData = ";
        // line 48
        yield json_encode((isset($context["visitsByCountry"]) || array_key_exists("visitsByCountry", $context) ? $context["visitsByCountry"] : (function () { throw new RuntimeError('Variable "visitsByCountry" does not exist.', 48, $this->source); })()));
        yield ";

        if (visitsPerMonthData && visitsPerMonthData.labels && visitsPerMonthData.data) {
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
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Visites par mois'
                        }
                    }
                }
            });
        } else {
            console.warn('No data available for \"Visites par mois\" chart.');
            // Optionnel : afficher un message dans le canvas si pas de données
            const visitsCanvas = document.getElementById('visitsChart');
            if (visitsCanvas) {
                visitsCanvas.innerHTML = '<p class=\"text-center text-gray-500\">Aucune donnée de visite disponible.</p>';
            }
        }

        // Création du graphique des visites par pays
        if (visitsByCountryData && visitsByCountryData.labels && visitsByCountryData.data) {
            const countryCtx = document.getElementById('countryChart').getContext('2d');
            const countryChart = new Chart(countryCtx, {
                type: 'pie',
                data: {
                    labels: visitsByCountryData.labels,
                    datasets: [{
                        label: 'Nombre de visites',
                        data: visitsByCountryData.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Répartition des visites par pays'
                        }
                    }
                }
            });
        } else {
            console.warn('No data available for \"Visites par pays\" chart.');
            
            const countryCanvas = document.getElementById('countryChart');
            if (countryCanvas) {
                countryCanvas.innerHTML = '<p class=\"text-center text-gray-500\">Aucune donnée de visite disponible.</p>';
            }
        }

        const monthlyTrendsData = ";
        // line 141
        yield json_encode((isset($context["monthlyTrends"]) || array_key_exists("monthlyTrends", $context) ? $context["monthlyTrends"] : (function () { throw new RuntimeError('Variable "monthlyTrends" does not exist.', 141, $this->source); })()));
        yield ";
        if (monthlyTrendsData && monthlyTrendsData.labels && monthlyTrendsData.data) {
            // ... code pour créer le graphique monthlyTrends ...
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
        return array (  315 => 141,  219 => 48,  215 => 47,  212 => 46,  206 => 43,  193 => 42,  176 => 34,  163 => 32,  159 => 31,  155 => 29,  153 => 28,  147 => 23,  144 => 21,  142 => 20,  136 => 15,  133 => 13,  131 => 12,  125 => 7,  112 => 6,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %}

{% block app_title %}Statistiques - TravelParadise{% endblock %}
{% block page_title %}Statistiques{% endblock %}

{% block content %}

    <div class=\"bg-white overflow-hidden shadow rounded-lg p-6\">

        <div class=\"grid grid-cols-1 gap-6 lg:grid-cols-2\">
            {# Visites par mois #}
            <div class=\"col-span-1\"> {# Assure-toi que le div prend toute la largeur si nécessaire #}
                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par mois</h3>
                <div class=\"chart-container\" style=\"position: relative; height:40vh; width:100%;\"> {# Ajusté width à 100% pour mieux s'adapter #}
                    <canvas id=\"visitsChart\"></canvas>
                </div>
            </div>

            {# Visites par pays #}
            <div class=\"col-span-1\"> {# Assure-toi que le div prend toute la largeur si nécessaire #}
                <h3 class=\"text-xl font-semibold mt-6 mb-2\">Visites par pays</h3>
                <div class=\"chart-container\" style=\"position: relative; height:40vh; width:100%;\"> {# Ajusté width à 100% pour mieux s'adapter #}
                    <canvas id=\"countryChart\"></canvas>
                </div>
            </div>

            {# Top Guides #}
            <div class=\"col-span-1 lg:col-span-2\"> {# Permet aux top guides de s'étendre sur les deux colonnes si besoin #}
                <h2 class=\"text-xl font-semibold mt-6 mb-2\">Top Guides</h2>
                <ul>
                    {% for stat in visitsByGuide %}
                        <li>{{ stat.guide_nom }} {{ stat.guide_prenom }}: {{ stat.total_visites }} visites</li>
                    {% endfor %}
                </ul>
            </div>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {# Ton script JavaScript pour créer les graphiques #}
    <script>
        const visitsPerMonthData = {{ visitsPerMonth|json_encode|raw }};
        const visitsByCountryData = {{ visitsByCountry|json_encode|raw }};

        if (visitsPerMonthData && visitsPerMonthData.labels && visitsPerMonthData.data) {
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
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Visites par mois'
                        }
                    }
                }
            });
        } else {
            console.warn('No data available for \"Visites par mois\" chart.');
            // Optionnel : afficher un message dans le canvas si pas de données
            const visitsCanvas = document.getElementById('visitsChart');
            if (visitsCanvas) {
                visitsCanvas.innerHTML = '<p class=\"text-center text-gray-500\">Aucune donnée de visite disponible.</p>';
            }
        }

        // Création du graphique des visites par pays
        if (visitsByCountryData && visitsByCountryData.labels && visitsByCountryData.data) {
            const countryCtx = document.getElementById('countryChart').getContext('2d');
            const countryChart = new Chart(countryCtx, {
                type: 'pie',
                data: {
                    labels: visitsByCountryData.labels,
                    datasets: [{
                        label: 'Nombre de visites',
                        data: visitsByCountryData.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Répartition des visites par pays'
                        }
                    }
                }
            });
        } else {
            console.warn('No data available for \"Visites par pays\" chart.');
            
            const countryCanvas = document.getElementById('countryChart');
            if (countryCanvas) {
                countryCanvas.innerHTML = '<p class=\"text-center text-gray-500\">Aucune donnée de visite disponible.</p>';
            }
        }

        const monthlyTrendsData = {{ monthlyTrends|json_encode|raw }};
        if (monthlyTrendsData && monthlyTrendsData.labels && monthlyTrendsData.data) {
            // ... code pour créer le graphique monthlyTrends ...
        }

    </script>
{% endblock %}
", "admin/statistics.html.twig", "/var/www/html/templates/admin/statistics.html.twig");
    }
}
