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

/* admin/dashboard.html.twig */
class __TwigTemplate_1915ee147060d4412c743018dd3b20e6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Dashboard - TravelParadise";
        
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

        // line 6
        yield "<div class=\"space-y-6\">
    <!-- En-tête -->
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-900\">📊 Dashboard</h1>
            <p class=\"text-gray-600\">Vue d'ensemble de votre agence de voyage</p>
        </div>
        <div class=\"text-sm text-gray-500\">
            Dernière mise à jour : ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
        </div>
    </div>

    <!-- Statistiques principales -->
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
        <div class=\"card bg-gradient-to-r from-blue-500 to-blue-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🎯</div>
                <div>
                    <p class=\"text-blue-100\">Total Visites</p>
                    <p class=\"text-3xl font-bold\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "totalVisites", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-green-500 to-green-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🗺️</div>
                <div>
                    <p class=\"text-green-100\">Guides Actifs</p>
                    <p class=\"text-3xl font-bold\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 35, $this->source); })()), "guidesActifs", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-purple-500 to-purple-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🧳</div>
                <div>
                    <p class=\"text-purple-100\">Visiteurs</p>
                    <p class=\"text-3xl font-bold\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "totalVisiteurs", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-orange-500 to-orange-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">👥</div>
                <div>
                    <p class=\"text-orange-100\">Utilisateurs</p>
                    <p class=\"text-3xl font-bold\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 55, $this->source); })()), "totalUsers", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques supplémentaires -->
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"card bg-gradient-to-r from-indigo-500 to-indigo-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">📅</div>
                <div>
                    <p class=\"text-indigo-100\">Visites Aujourd'hui</p>
                    <p class=\"text-3xl font-bold\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "visitesAujourdhui", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-teal-500 to-teal-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🔜</div>
                <div>
                    <p class=\"text-teal-100\">Visites Prochaines (7j)</p>
                    <p class=\"text-3xl font-bold\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 78, $this->source); })()), "visitesProchainement", [], "any", false, false, false, 78), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-pink-500 to-pink-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">📊</div>
                <div>
                    <p class=\"text-pink-100\">Taux de Présence</p>
                    <p class=\"text-3xl font-bold\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 88, $this->source); })()), "tauxPresence", [], "any", false, false, false, 88)), "html", null, true);
        yield "%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques et tableaux -->
    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <!-- Visites par mois -->
        <div class=\"card\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">📈 Visites par mois</h3>
            ";
        // line 99
        if (((isset($context["visitesParMois"]) || array_key_exists("visitesParMois", $context) ? $context["visitesParMois"] : (function () { throw new RuntimeError('Variable "visitesParMois" does not exist.', 99, $this->source); })()) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["visitesParMois"]) || array_key_exists("visitesParMois", $context) ? $context["visitesParMois"] : (function () { throw new RuntimeError('Variable "visitesParMois" does not exist.', 99, $this->source); })())) > 0))) {
            // line 100
            yield "                <div class=\"space-y-2\">
                    ";
            // line 101
            $context["maxCount"] = 0;
            // line 102
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitesParMois"]) || array_key_exists("visitesParMois", $context) ? $context["visitesParMois"] : (function () { throw new RuntimeError('Variable "visitesParMois" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mois"]) {
                // line 103
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["mois"], "total", [], "any", false, false, false, 103) > (isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 103, $this->source); })()))) {
                    // line 104
                    yield "                            ";
                    $context["maxCount"] = CoreExtension::getAttribute($this->env, $this->source, $context["mois"], "total", [], "any", false, false, false, 104);
                    // line 105
                    yield "                        ";
                }
                // line 106
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mois'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitesParMois"]) || array_key_exists("visitesParMois", $context) ? $context["visitesParMois"] : (function () { throw new RuntimeError('Variable "visitesParMois" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mois"]) {
                // line 108
                yield "                        <div class=\"flex justify-between items-center\">
                            <span class=\"text-sm text-gray-600\">
                                ";
                // line 110
                $context["moisNoms"] = ["", "Jan", "Fév", "Mar", "Avr", "Mai", "Jun", "Jul", "Aoû", "Sep", "Oct", "Nov", "Déc"];
                // line 111
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["moisNoms"]) || array_key_exists("moisNoms", $context) ? $context["moisNoms"] : (function () { throw new RuntimeError('Variable "moisNoms" does not exist.', 111, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["mois"], "mois", [], "any", false, false, false, 111), [], "array", false, false, false, 111), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mois"], "annee", [], "any", false, false, false, 111), "html", null, true);
                yield "
                            </span>
                            <div class=\"flex items-center space-x-2\">
                                <div class=\"w-32 bg-gray-200 rounded-full h-2\">
                                    <div class=\"bg-primary-600 h-2 rounded-full\" 
                                         style=\"width: ";
                // line 116
                yield ((((isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 116, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["mois"], "total", [], "any", false, false, false, 116) / (isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 116, $this->source); })())) * 100)), "html", null, true)) : (0));
                yield "%\"></div>
                                </div>
                                <span class=\"text-sm font-medium\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mois"], "total", [], "any", false, false, false, 118), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mois'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                </div>
            ";
        } else {
            // line 124
            yield "                <p class=\"text-gray-500 text-center py-4\">Aucune donnée disponible</p>
            ";
        }
        // line 126
        yield "        </div>

        <!-- Visites par guide -->
        <div class=\"card\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">🗺️ Top guides</h3>
            ";
        // line 131
        if (((isset($context["visitesParGuide"]) || array_key_exists("visitesParGuide", $context) ? $context["visitesParGuide"] : (function () { throw new RuntimeError('Variable "visitesParGuide" does not exist.', 131, $this->source); })()) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["visitesParGuide"]) || array_key_exists("visitesParGuide", $context) ? $context["visitesParGuide"] : (function () { throw new RuntimeError('Variable "visitesParGuide" does not exist.', 131, $this->source); })())) > 0))) {
            // line 132
            yield "                <div class=\"space-y-3\">
                    ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitesParGuide"]) || array_key_exists("visitesParGuide", $context) ? $context["visitesParGuide"] : (function () { throw new RuntimeError('Variable "visitesParGuide" does not exist.', 133, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
                // line 134
                yield "                        <div class=\"flex items-center justify-between p-3 bg-gray-50 rounded-lg\">
                            <div class=\"flex items-center space-x-3\">
                                <div class=\"w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center\">
                                    <span class=\"text-primary-600 font-medium text-sm\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["guide"], "guide", [], "any", false, false, false, 137))), "html", null, true);
                yield "</span>
                                </div>
                                <div>
                                    <p class=\"font-medium text-gray-900\">";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide"], "guide", [], "any", false, false, false, 140), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                            <span class=\"bg-primary-100 text-primary-800 px-2 py-1 rounded-full text-sm font-medium\">
                                ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide"], "total", [], "any", false, false, false, 144), "html", null, true);
                yield " visites
                            </span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['guide'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "                </div>
            ";
        } else {
            // line 150
            yield "                <p class=\"text-gray-500 text-center py-4\">Aucun guide disponible</p>
            ";
        }
        // line 152
        yield "        </div>
    </div>

    <!-- Visites prochaines et taux de présence -->
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <!-- Visites prochaines -->
        <div class=\"card lg:col-span-2\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">🕒 Visites prochaines</h3>
            ";
        // line 160
        if (((isset($context["visitesProchainement"]) || array_key_exists("visitesProchainement", $context) ? $context["visitesProchainement"] : (function () { throw new RuntimeError('Variable "visitesProchainement" does not exist.', 160, $this->source); })()) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["visitesProchainement"]) || array_key_exists("visitesProchainement", $context) ? $context["visitesProchainement"] : (function () { throw new RuntimeError('Variable "visitesProchainement" does not exist.', 160, $this->source); })())) > 0))) {
            // line 161
            yield "                <div class=\"overflow-x-auto\">
                    <table class=\"table w-full\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Guide</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visitesProchainement"]) || array_key_exists("visitesProchainement", $context) ? $context["visitesProchainement"] : (function () { throw new RuntimeError('Variable "visitesProchainement" does not exist.', 172, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
                // line 173
                yield "                                <tr>
                                    <td>
                                        <div class=\"text-sm text-gray-900\">";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true);
                yield "</div>
                                        ";
                // line 176
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "heureDebut", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 177
                    yield "                                            <div class=\"text-sm text-gray-500\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "heureDebut", [], "any", false, false, false, 177), "H:i"), "html", null, true);
                    yield "</div>
                                        ";
                }
                // line 179
                yield "                                    </td>
                                    <td class=\"text-sm text-gray-900\">";
                // line 180
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "lieu", [], "any", true, true, false, 180) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "lieu", [], "any", false, false, false, 180)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "lieu", [], "any", false, false, false, 180), "html", null, true)) : ("Non défini"));
                yield "</td>
                                    <td class=\"text-sm text-gray-900\">
                                        ";
                // line 182
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "guide", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 183
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "guide", [], "any", false, false, false, 183), "nom", [], "any", false, false, false, 183), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "guide", [], "any", false, false, false, 183), "prenom", [], "any", false, false, false, 183), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 185
                    yield "                                            Non assigné
                                        ";
                }
                // line 187
                yield "                                    </td>
                                    <td>
                                        ";
                // line 189
                $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                // line 190
                yield "                                        ";
                $context["visiteDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 190), "Y-m-d");
                // line 191
                yield "                                        ";
                if (((isset($context["visiteDate"]) || array_key_exists("visiteDate", $context) ? $context["visiteDate"] : (function () { throw new RuntimeError('Variable "visiteDate" does not exist.', 191, $this->source); })()) < (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 191, $this->source); })()))) {
                    // line 192
                    yield "                                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800\">
                                                Terminée
                                            </span>
                                        ";
                } elseif ((                // line 195
(isset($context["visiteDate"]) || array_key_exists("visiteDate", $context) ? $context["visiteDate"] : (function () { throw new RuntimeError('Variable "visiteDate" does not exist.', 195, $this->source); })()) == (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 195, $this->source); })()))) {
                    // line 196
                    yield "                                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800\">
                                                Aujourd'hui
                                            </span>
                                        ";
                } else {
                    // line 200
                    yield "                                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800\">
                                                Programmée
                                            </span>
                                        ";
                }
                // line 204
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['visite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 211
            yield "                <p class=\"text-gray-500 text-center py-4\">Aucune visite programmée</p>
            ";
        }
        // line 213
        yield "        </div>

        <!-- Taux de présence -->
        <div class=\"card\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">📊 Taux de présence</h3>
            <div class=\"text-center\">
                <div class=\"relative inline-flex items-center justify-center w-32 h-32\">
                    <svg class=\"w-32 h-32 transform -rotate-90\" viewBox=\"0 0 36 36\">
                        <path class=\"text-gray-300\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\"
                              d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                        <path class=\"text-primary-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\"
                              stroke-dasharray=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 224, $this->source); })()), "tauxPresence", [], "any", false, false, false, 224), "html", null, true);
        yield ", 100\"
                              d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                    </svg>
                    <div class=\"absolute inset-0 flex items-center justify-center\">
                        <span class=\"text-2xl font-bold text-gray-900\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 228, $this->source); })()), "tauxPresence", [], "any", false, false, false, 228)), "html", null, true);
        yield "%</span>
                    </div>
                </div>
                <p class=\"text-sm text-gray-600 mt-4\">Taux de présence moyen des visiteurs</p>
            </div>
        </div>
    </div>

    <!-- Actions rapides -->
    <div class=\"card\">
        <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">⚡ Actions rapides</h3>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4\">
            <a href=\"#\" class=\"flex items-center p-4 bg-primary-50 rounded-lg hover:bg-primary-100 transition-colors\">
                <div class=\"text-primary-600 text-2xl mr-3\">➕</div>
                <div>
                    <p class=\"font-medium text-primary-900\">Nouvelle visite</p>
                    <p class=\"text-sm text-primary-600\">Programmer une visite</p>
                </div>
            </a>
            
            <a href=\"#\" class=\"flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors\">
                <div class=\"text-green-600 text-2xl mr-3\">🗺️</div>
                <div>
                    <p class=\"font-medium text-green-900\">Nouveau guide</p>
                    <p class=\"text-sm text-green-600\">Ajouter un guide</p>
                </div>
            </a>
            
            <a href=\"#\" class=\"flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors\">
                <div class=\"text-purple-600 text-2xl mr-3\">🧳</div>
                <div>
                    <p class=\"font-medium text-purple-900\">Nouveau visiteur</p>
                    <p class=\"text-sm text-purple-600\">Enregistrer un visiteur</p>
                </div>
            </a>
            
            ";
        // line 264
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 265
            yield "            <a href=\"#\" class=\"flex items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors\">
                <div class=\"text-orange-600 text-2xl mr-3\">👥</div>
                <div>
                    <p class=\"font-medium text-orange-900\">Nouvel utilisateur</p>
                    <p class=\"text-sm text-orange-600\">Créer un compte</p>
                </div>
            </a>
            ";
        }
        // line 273
        yield "        </div>
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
        return "admin/dashboard.html.twig";
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
        return array (  515 => 273,  505 => 265,  503 => 264,  464 => 228,  457 => 224,  444 => 213,  440 => 211,  434 => 207,  426 => 204,  420 => 200,  414 => 196,  412 => 195,  407 => 192,  404 => 191,  401 => 190,  399 => 189,  395 => 187,  391 => 185,  383 => 183,  381 => 182,  376 => 180,  373 => 179,  367 => 177,  365 => 176,  361 => 175,  357 => 173,  353 => 172,  340 => 161,  338 => 160,  328 => 152,  324 => 150,  320 => 148,  310 => 144,  303 => 140,  297 => 137,  292 => 134,  288 => 133,  285 => 132,  283 => 131,  276 => 126,  272 => 124,  268 => 122,  258 => 118,  253 => 116,  242 => 111,  240 => 110,  236 => 108,  231 => 107,  225 => 106,  222 => 105,  219 => 104,  216 => 103,  211 => 102,  209 => 101,  206 => 100,  204 => 99,  190 => 88,  177 => 78,  164 => 68,  148 => 55,  135 => 45,  122 => 35,  109 => 25,  95 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard - TravelParadise{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    <!-- En-tête -->
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-900\">📊 Dashboard</h1>
            <p class=\"text-gray-600\">Vue d'ensemble de votre agence de voyage</p>
        </div>
        <div class=\"text-sm text-gray-500\">
            Dernière mise à jour : {{ \"now\"|date(\"d/m/Y H:i\") }}
        </div>
    </div>

    <!-- Statistiques principales -->
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
        <div class=\"card bg-gradient-to-r from-blue-500 to-blue-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🎯</div>
                <div>
                    <p class=\"text-blue-100\">Total Visites</p>
                    <p class=\"text-3xl font-bold\">{{ stats.totalVisites }}</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-green-500 to-green-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🗺️</div>
                <div>
                    <p class=\"text-green-100\">Guides Actifs</p>
                    <p class=\"text-3xl font-bold\">{{ stats.guidesActifs }}</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-purple-500 to-purple-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🧳</div>
                <div>
                    <p class=\"text-purple-100\">Visiteurs</p>
                    <p class=\"text-3xl font-bold\">{{ stats.totalVisiteurs }}</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-orange-500 to-orange-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">👥</div>
                <div>
                    <p class=\"text-orange-100\">Utilisateurs</p>
                    <p class=\"text-3xl font-bold\">{{ stats.totalUsers }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques supplémentaires -->
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"card bg-gradient-to-r from-indigo-500 to-indigo-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">📅</div>
                <div>
                    <p class=\"text-indigo-100\">Visites Aujourd'hui</p>
                    <p class=\"text-3xl font-bold\">{{ stats.visitesAujourdhui }}</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-teal-500 to-teal-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">🔜</div>
                <div>
                    <p class=\"text-teal-100\">Visites Prochaines (7j)</p>
                    <p class=\"text-3xl font-bold\">{{ stats.visitesProchainement }}</p>
                </div>
            </div>
        </div>

        <div class=\"card bg-gradient-to-r from-pink-500 to-pink-600 text-white\">
            <div class=\"flex items-center\">
                <div class=\"text-3xl mr-4\">📊</div>
                <div>
                    <p class=\"text-pink-100\">Taux de Présence</p>
                    <p class=\"text-3xl font-bold\">{{ stats.tauxPresence|round }}%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques et tableaux -->
    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <!-- Visites par mois -->
        <div class=\"card\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">📈 Visites par mois</h3>
            {% if visitesParMois and visitesParMois|length > 0 %}
                <div class=\"space-y-2\">
                    {% set maxCount = 0 %}
                    {% for mois in visitesParMois %}
                        {% if mois.total > maxCount %}
                            {% set maxCount = mois.total %}
                        {% endif %}
                    {% endfor %}
                    {% for mois in visitesParMois %}
                        <div class=\"flex justify-between items-center\">
                            <span class=\"text-sm text-gray-600\">
                                {% set moisNoms = ['', 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'] %}
                                {{ moisNoms[mois.mois] }} {{ mois.annee }}
                            </span>
                            <div class=\"flex items-center space-x-2\">
                                <div class=\"w-32 bg-gray-200 rounded-full h-2\">
                                    <div class=\"bg-primary-600 h-2 rounded-full\" 
                                         style=\"width: {{ maxCount > 0 ? (mois.total / maxCount * 100)|round : 0 }}%\"></div>
                                </div>
                                <span class=\"text-sm font-medium\">{{ mois.total }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <p class=\"text-gray-500 text-center py-4\">Aucune donnée disponible</p>
            {% endif %}
        </div>

        <!-- Visites par guide -->
        <div class=\"card\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">🗺️ Top guides</h3>
            {% if visitesParGuide and visitesParGuide|length > 0 %}
                <div class=\"space-y-3\">
                    {% for guide in visitesParGuide %}
                        <div class=\"flex items-center justify-between p-3 bg-gray-50 rounded-lg\">
                            <div class=\"flex items-center space-x-3\">
                                <div class=\"w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center\">
                                    <span class=\"text-primary-600 font-medium text-sm\">{{ guide.guide|first|upper }}</span>
                                </div>
                                <div>
                                    <p class=\"font-medium text-gray-900\">{{ guide.guide }}</p>
                                </div>
                            </div>
                            <span class=\"bg-primary-100 text-primary-800 px-2 py-1 rounded-full text-sm font-medium\">
                                {{ guide.total }} visites
                            </span>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <p class=\"text-gray-500 text-center py-4\">Aucun guide disponible</p>
            {% endif %}
        </div>
    </div>

    <!-- Visites prochaines et taux de présence -->
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <!-- Visites prochaines -->
        <div class=\"card lg:col-span-2\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">🕒 Visites prochaines</h3>
            {% if visitesProchainement and visitesProchainement|length > 0 %}
                <div class=\"overflow-x-auto\">
                    <table class=\"table w-full\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Guide</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for visite in visitesProchainement %}
                                <tr>
                                    <td>
                                        <div class=\"text-sm text-gray-900\">{{ visite.date|date('d/m/Y') }}</div>
                                        {% if visite.heureDebut %}
                                            <div class=\"text-sm text-gray-500\">{{ visite.heureDebut|date('H:i') }}</div>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-sm text-gray-900\">{{ visite.lieu ?? 'Non défini' }}</td>
                                    <td class=\"text-sm text-gray-900\">
                                        {% if visite.guide %}
                                            {{ visite.guide.nom }} {{ visite.guide.prenom }}
                                        {% else %}
                                            Non assigné
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% set today = \"now\"|date(\"Y-m-d\") %}
                                        {% set visiteDate = visite.date|date(\"Y-m-d\") %}
                                        {% if visiteDate < today %}
                                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800\">
                                                Terminée
                                            </span>
                                        {% elseif visiteDate == today %}
                                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800\">
                                                Aujourd'hui
                                            </span>
                                        {% else %}
                                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800\">
                                                Programmée
                                            </span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <p class=\"text-gray-500 text-center py-4\">Aucune visite programmée</p>
            {% endif %}
        </div>

        <!-- Taux de présence -->
        <div class=\"card\">
            <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">📊 Taux de présence</h3>
            <div class=\"text-center\">
                <div class=\"relative inline-flex items-center justify-center w-32 h-32\">
                    <svg class=\"w-32 h-32 transform -rotate-90\" viewBox=\"0 0 36 36\">
                        <path class=\"text-gray-300\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\"
                              d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                        <path class=\"text-primary-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\"
                              stroke-dasharray=\"{{ stats.tauxPresence }}, 100\"
                              d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                    </svg>
                    <div class=\"absolute inset-0 flex items-center justify-center\">
                        <span class=\"text-2xl font-bold text-gray-900\">{{ stats.tauxPresence|round }}%</span>
                    </div>
                </div>
                <p class=\"text-sm text-gray-600 mt-4\">Taux de présence moyen des visiteurs</p>
            </div>
        </div>
    </div>

    <!-- Actions rapides -->
    <div class=\"card\">
        <h3 class=\"text-lg font-semibold text-gray-900 mb-4\">⚡ Actions rapides</h3>
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4\">
            <a href=\"#\" class=\"flex items-center p-4 bg-primary-50 rounded-lg hover:bg-primary-100 transition-colors\">
                <div class=\"text-primary-600 text-2xl mr-3\">➕</div>
                <div>
                    <p class=\"font-medium text-primary-900\">Nouvelle visite</p>
                    <p class=\"text-sm text-primary-600\">Programmer une visite</p>
                </div>
            </a>
            
            <a href=\"#\" class=\"flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors\">
                <div class=\"text-green-600 text-2xl mr-3\">🗺️</div>
                <div>
                    <p class=\"font-medium text-green-900\">Nouveau guide</p>
                    <p class=\"text-sm text-green-600\">Ajouter un guide</p>
                </div>
            </a>
            
            <a href=\"#\" class=\"flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors\">
                <div class=\"text-purple-600 text-2xl mr-3\">🧳</div>
                <div>
                    <p class=\"font-medium text-purple-900\">Nouveau visiteur</p>
                    <p class=\"text-sm text-purple-600\">Enregistrer un visiteur</p>
                </div>
            </a>
            
            {% if is_granted('ROLE_ADMIN') %}
            <a href=\"#\" class=\"flex items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors\">
                <div class=\"text-orange-600 text-2xl mr-3\">👥</div>
                <div>
                    <p class=\"font-medium text-orange-900\">Nouvel utilisateur</p>
                    <p class=\"text-sm text-orange-600\">Créer un compte</p>
                </div>
            </a>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "admin/dashboard.html.twig", "/var/www/html/templates/admin/dashboard.html.twig");
    }
}
