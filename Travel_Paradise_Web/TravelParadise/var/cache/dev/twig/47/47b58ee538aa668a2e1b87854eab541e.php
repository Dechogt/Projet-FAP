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

/* guide_touristique/index.html.twig */
class __TwigTemplate_217562f994045c9d8dac9553226f38f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide_touristique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide_touristique/index.html.twig"));

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

        yield "Guides Touristiques - TravelParadise";
        
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

        yield "Guides Touristiques";
        
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
    ";
        // line 9
        yield "
    <div class=\"flex justify-between items-center mb-6\">
        <h2 class=\"text-2xl font-bold text-gray-800\">Liste des Guides Touristiques</h2>
        ";
        // line 13
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_new");
        yield "\"
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path></svg>
            Créer un nouveau Guide
        </a>
    </div>
     <div class=\"mb-6\">
        <form method=\"get\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_index");
        yield "\" class=\"flex items-center space-x-4\">
            <input type=\"text\" name=\"q\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 21, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" ";
        // line 22
        yield "                   placeholder=\"Rechercher par nom, prénom, email...\"
                   class=\"flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 sm:text-sm\">
            <button type=\"submit\"
                    class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"></path></svg>
                Rechercher
            </button>
             ";
        // line 29
        if ((($tmp = (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            // line 30
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_index");
            yield "\"
                   class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
                    Effacer
                </a>
            ";
        }
        // line 35
        yield "        </form>
    </div>

    ";
        // line 39
        yield "    <div class=\"bg-white shadow-md rounded-lg overflow-hidden mb-6\"> ";
        // line 40
        yield "        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    ";
        // line 44
        yield "                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ";
        // line 46
        yield "                        ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()), "ID", "g.id");
        yield " ";
        // line 47
        yield "                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                         ";
        // line 49
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()), "Nom", "g.nom");
        yield "
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                         ";
        // line 52
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 52, $this->source); })()), "Prénom", "g.prenom");
        yield "
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                         ";
        // line 55
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 55, $this->source); })()), "Email", "g.email");
        yield "
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ";
        // line 58
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 58, $this->source); })()), "Téléphone", "g.telephone");
        yield "
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        ";
        // line 61
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 61, $this->source); })()), "Photo", "g.photo");
        yield "
                    </th>
                    ";
        // line 64
        yield "                    <th scope=\"col\" class=\"relative px-6 py-3\">
                        <span class=\"sr-only\">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 70, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["guide_touristique"]) {
            yield " ";
            // line 71
            yield "                    <tr>
                        ";
            // line 73
            yield "                        <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                            ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "nom", [], "any", false, false, false, 77), "html", null, true);
            yield "
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "prenom", [], "any", false, false, false, 80), "html", null, true);
            yield "
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "email", [], "any", false, false, false, 83), "html", null, true);
            yield "
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "telephone", [], "any", false, false, false, 86), "html", null, true);
            yield "
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "photoFilename", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "photoFilename", [], "any", false, false, false, 90))), "html", null, true);
                yield "\"
                                     alt=\"Photo de ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "prenom", [], "any", false, false, false, 91), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "nom", [], "any", false, false, false, 91), "html", null, true);
                yield "\"
                                     class=\"h-10 w-10 rounded-full object-cover\">
                            ";
            } else {
                // line 94
                yield "                                Aucune photo
                            ";
            }
            // line 96
            yield "                        </td>
                        ";
            // line 98
            yield "                        <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                            ";
            // line 100
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\"
                               class=\"text-gray-600 hover:text-gray-900 mr-4\">Show</a>
                            <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["guide_touristique"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\"
                               class=\"text-teal-600 hover:text-teal-900 mr-4\">Edit</a>
                            ";
            // line 105
            yield "                            ";
            yield from $this->load("guide_touristique/_delete_form.html.twig", 105)->unwrap()->yield(CoreExtension::merge($context, ["guide_touristique" => $context["guide_touristique"]]));
            // line 106
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
        // line 108
        if (!$context['_iterated']) {
            // line 109
            yield "                    <tr>
                        <td colspan=\"7\" class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\">
                            Aucun guide touristique trouvé";
            // line 111
            if ((($tmp = (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 111, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 111, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ".
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['guide_touristique'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 120
        yield "    <div class=\"flex justify-center mt-4\">
        ";
        // line 121
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 121, $this->source); })()));
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
        return "guide_touristique/index.html.twig";
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
        return array (  369 => 121,  366 => 120,  360 => 115,  346 => 111,  342 => 109,  340 => 108,  326 => 106,  323 => 105,  318 => 102,  312 => 100,  309 => 98,  306 => 96,  302 => 94,  294 => 91,  289 => 90,  287 => 89,  281 => 86,  275 => 83,  269 => 80,  263 => 77,  257 => 74,  254 => 73,  251 => 71,  232 => 70,  224 => 64,  219 => 61,  213 => 58,  207 => 55,  201 => 52,  195 => 49,  191 => 47,  187 => 46,  184 => 44,  179 => 40,  177 => 39,  172 => 35,  163 => 30,  160 => 29,  151 => 22,  148 => 21,  144 => 20,  133 => 13,  128 => 9,  125 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_app.html.twig' %} {# Étend le layout de l'application #}

{% block app_title %}Guides Touristiques - TravelParadise{% endblock %} {# Titre dans la barre du navigateur #}
{% block page_title %}Guides Touristiques{% endblock %} {# Titre affiché dans le header #}

{% block content %} {# Renomme le bloc body en content #}

    {# Le contenu de la page commence ici #}

    <div class=\"flex justify-between items-center mb-6\">
        <h2 class=\"text-2xl font-bold text-gray-800\">Liste des Guides Touristiques</h2>
        {# Bouton \"Create New\" #}
        <a href=\"{{ path('app_guide_touristique_new') }}\"
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path></svg>
            Créer un nouveau Guide
        </a>
    </div>
     <div class=\"mb-6\">
        <form method=\"get\" action=\"{{ path('app_guide_touristique_index') }}\" class=\"flex items-center space-x-4\">
            <input type=\"text\" name=\"q\" value=\"{{ searchTerm|default('') }}\" {# Affiche le terme de recherche actuel #}
                   placeholder=\"Rechercher par nom, prénom, email...\"
                   class=\"flex-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 sm:text-sm\">
            <button type=\"submit\"
                    class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"></path></svg>
                Rechercher
            </button>
             {% if searchTerm %} {# Ajoute un bouton pour effacer la recherche si un terme est présent #}
                <a href=\"{{ path('app_guide_touristique_index') }}\"
                   class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500\">
                    Effacer
                </a>
            {% endif %}
        </form>
    </div>

    {# Tableau des guides #}
    <div class=\"bg-white shadow-md rounded-lg overflow-hidden mb-6\"> {# Ajoute une marge en bas #}
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    {# Adapte les en-têtes de colonne #}
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        {# Utilise le helper sortable pour rendre la colonne triable #}
                        {{ knp_pagination_sortable(pagination, 'ID', 'g.id') }} {# 'pagination' est l'objet, 'ID' est le label, 'g.id' est la propriété de l'entité #}
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                         {{ knp_pagination_sortable(pagination, 'Nom', 'g.nom') }}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                         {{ knp_pagination_sortable(pagination, 'Prénom', 'g.prenom') }}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                         {{ knp_pagination_sortable(pagination, 'Email', 'g.email') }}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        {{ knp_pagination_sortable(pagination, 'Téléphone', 'g.telephone') }}
                    </th>
                     <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">
                        {{ knp_pagination_sortable(pagination, 'Photo', 'g.photo') }}
                    </th>
                    {# Ajoute d'autres en-têtes si nécessaire #}
                    <th scope=\"col\" class=\"relative px-6 py-3\">
                        <span class=\"sr-only\">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                {% for guide_touristique in pagination %} {# Utilise l'objet de pagination #}
                    <tr>
                        {# Adapte l'affichage des données #}
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                            {{ guide_touristique.id }}
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ guide_touristique.nom }}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ guide_touristique.prenom }}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ guide_touristique.email }}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ guide_touristique.telephone }}
                        </td>
                         <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {% if guide_touristique.photoFilename %}
                                <img src=\"{{ asset('uploads/' ~ guide_touristique.photoFilename) }}\"
                                     alt=\"Photo de {{ guide_touristique.prenom }} {{ guide_touristique.nom }}\"
                                     class=\"h-10 w-10 rounded-full object-cover\">
                            {% else %}
                                Aucune photo
                            {% endif %}
                        </td>
                        {# Ajoute d'autres cellules si nécessaire #}
                        <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                            {# Liens d'action #}
                            <a href=\"{{ path('app_guide_touristique_show', {'id': guide_touristique.id}) }}\"
                               class=\"text-gray-600 hover:text-gray-900 mr-4\">Show</a>
                            <a href=\"{{ path('app_guide_touristique_edit', {'id': guide_touristique.id}) }}\"
                               class=\"text-teal-600 hover:text-teal-900 mr-4\">Edit</a>
                            {# Inclusion du formulaire de suppression #}
                            {% include 'guide_touristique/_delete_form.html.twig' with {'guide_touristique': guide_touristique} %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\">
                            Aucun guide touristique trouvé{% if searchTerm %} pour \"{{ searchTerm }}\"{% endif %}.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    {# Affichage de la pagination #}
    <div class=\"flex justify-center mt-4\">
        {{ knp_pagination_render(pagination) }}
    </div>

{% endblock %}
", "guide_touristique/index.html.twig", "/var/www/html/templates/guide_touristique/index.html.twig");
    }
}
