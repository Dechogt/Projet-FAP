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

/* layout_app.html.twig */
class __TwigTemplate_fff1c1a1674bbc85e4678000ff456bc7 extends Template
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
            'app_title' => [$this, 'block_app_title'],
            'body' => [$this, 'block_body'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout_app.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout_app.html.twig"));

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

        yield from $this->unwrap()->yieldBlock('app_title', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        yield "TravelParadise";
        
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
        yield "    ";
        // line 8
        yield "    ";
        // line 9
        yield "    <div class=\"flex h-screen overflow-hidden relative\"
         style=\"background-image: url('";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stats.jpg"), "html", null, true);
        yield "'); background-size: cover; background-position: center;\">

        ";
        // line 13
        yield "        ";
        // line 14
        yield "        <div class=\"absolute inset-0 bg-black opacity-50 z-0\"></div> ";
        // line 15
        yield "
        ";
        // line 17
        yield "        <aside class=\"w-64 bg-gradient-to-br from-gray-800 to-gray-900 text-white flex flex-col shadow-xl flex-shrink-0 z-10 relative\"> ";
        // line 18
        yield "            ";
        // line 19
        yield "            ";
        // line 20
        yield "            <div class=\"flex items-center justify-center h-20 border-b border-gray-700 px-4\">
                 <div class=\"h-10 w-10 bg-teal-500 rounded-full flex items-center justify-center shadow-lg\">
                    <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-transparent.png"), "html", null, true);
        yield "\" alt=\"Travel Paradise Logo\" class=\"h-6 w-6\">
                </div>
                <span class=\"ml-3 text-xl font-bold text-teal-300 tracking-wide\">TravelParadise</span>
            </div>
            ";
        // line 27
        yield "            <nav class=\"flex-1 px-3 py-6 space-y-3 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-800\">
                ";
        // line 29
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
        // line 31
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", ["_route"], "method", false, false, false, 31)) && is_string($_v1 = "admin_dashboard") && str_starts_with($_v0, $_v1))) {
            yield "bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md";
        }
        yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l7 7M19 10v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"></path></svg>
                    Dashboard
                </a>

                ";
        // line 36
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_index");
            yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
            // line 39
            if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", ["_route"], "method", false, false, false, 39)) && is_string($_v3 = "app_guide_touristique_index") && str_starts_with($_v2, $_v3))) {
                yield "bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md";
            }
            yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"></path>
                    </svg>
                    Guides
                </a>

                <a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_index");
            yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
            // line 48
            if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48)) && is_string($_v5 = "admin_visites") && str_starts_with($_v4, $_v5))) {
                yield "bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md";
            }
            yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"></path>
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"></path>
                    </svg>
                    Visites
                </a>

                <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
            // line 58
            if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58)) && is_string($_v7 = "admin_users") && str_starts_with($_v6, $_v7))) {
                yield "bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md";
            }
            yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.291M12 4a4 4 0 100 8 4 4 0 000-8z\"></path>
                    </svg>
                    Utilisateurs
                </a>
            ";
        }
        // line 65
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_index");
        yield "\"
                class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                ";
        // line 67
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67)) && is_string($_v9 = "app_visiteur_") && str_starts_with($_v8, $_v9))) {
            yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
        }
        yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0 ";
        // line 68
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68)) && is_string($_v11 = "app_visiteur_") && str_starts_with($_v10, $_v11))) {
            yield "text-white";
        } else {
            yield "text-gray-400 group-hover:text-gray-300";
        }
        yield "\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                    Visiteurs
            </a>

            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics");
        yield "\"
                class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                ";
        // line 74
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "get", ["_route"], "method", false, false, false, 74)) && is_string($_v13 = "admin_statistics") && str_starts_with($_v12, $_v13))) {
            yield "bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md";
        }
        yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>
                    </svg>
                    Statistiques
            </a>
            </nav>
            ";
        // line 82
        yield "            <div class=\"p-5 text-center text-gray-500 text-xs border-t border-gray-700 flex-shrink-0\">
                © ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " TravelParadise
            </div>
        </aside>

        ";
        // line 88
        yield "        <div class=\"flex-1 flex flex-col overflow-hidden\"> ";
        // line 89
        yield "
            ";
        // line 91
        yield "            <header class=\"flex items-center justify-between h-20 bg-white bg-opacity-80 border-b border-gray-200 px-6 shadow-sm flex-shrink-0 backdrop-blur-sm\"> ";
        // line 92
        yield "                ";
        // line 93
        yield "                <div class=\"text-2xl font-bold text-gray-800\">
                    ";
        // line 94
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        // line 95
        yield "                </div>
                ";
        // line 97
        yield "                <div class=\"flex items-center space-x-6\">
                    ";
        // line 99
        yield "                    <div class=\"flex items-center space-x-3\">
                         <div class=\"h-10 w-10 bg-blue-200 rounded-full flex items-center justify-center shadow-inner\">
                            <svg class=\"h-6 w-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
                            </svg>
                        </div>
                        <div class=\"text-sm\">
                            <div class=\"font-semibold text-gray-900\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 106), "prenom", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "prenom", [], "any", false, false, false, 106), "Utilisateur")) : ("Utilisateur")), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 106), "nom", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "")) : ("")), "html", null, true);
        yield "</div>
                            <div class=\"text-xs text-gray-500\">
                                ";
        // line 108
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">Admin</span>
                                ";
        } else {
            // line 111
            yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">User</span>
                                ";
        }
        // line 113
        yield "                            </div>
                        </div>
                    </div>

                    ";
        // line 118
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"
                       class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200 ease-in-out\">
                        <svg class=\"h-4 w-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </header>

            ";
        // line 129
        yield "            <main class=\"flex-1 overflow-y-auto bg-transparent p-8 relative z-10\"> ";
        // line 130
        yield "                ";
        // line 131
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "flashes", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 132
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 133
                yield "                        <div class=\"mb-6\">
                            <div class=\"alert alert-";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " bg-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-100 border border-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-400 text-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-700 px-6 py-4 rounded-lg shadow-md\">
                                ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "
                ";
        // line 142
        yield "                ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 143
        yield "            </main>

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout_app.html.twig";
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
        return array (  437 => 142,  415 => 94,  400 => 143,  397 => 142,  394 => 140,  388 => 139,  378 => 135,  368 => 134,  365 => 133,  360 => 132,  355 => 131,  353 => 130,  351 => 129,  337 => 118,  331 => 113,  327 => 111,  323 => 109,  321 => 108,  314 => 106,  305 => 99,  302 => 97,  299 => 95,  297 => 94,  294 => 93,  292 => 92,  290 => 91,  287 => 89,  285 => 88,  278 => 83,  275 => 82,  263 => 74,  258 => 72,  247 => 68,  241 => 67,  235 => 65,  223 => 58,  218 => 56,  205 => 48,  200 => 46,  188 => 39,  182 => 37,  180 => 36,  170 => 31,  164 => 29,  161 => 27,  154 => 22,  150 => 20,  148 => 19,  146 => 18,  144 => 17,  141 => 15,  139 => 14,  137 => 13,  132 => 10,  129 => 9,  127 => 8,  125 => 7,  112 => 6,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layout_app.html.twig - Layout avec Image d'Arrière-plan Floutée #}
{% extends 'base.html.twig' %}

{% block title %}{% block app_title %}TravelParadise{% endblock %}{% endblock %}

{% block body %}
    {# Conteneur principal avec l'image d'arrière-plan #}
    {# L'image est appliquée ici, et le contenu est superposé #}
    <div class=\"flex h-screen overflow-hidden relative\"
         style=\"background-image: url('{{ asset('images/stats.jpg') }}'); background-size: cover; background-position: center;\">

        {# Overlay pour le floutage et pour assombrir légèrement l'image #}
        {# Cet overlay permet de rendre le texte plus lisible #}
        <div class=\"absolute inset-0 bg-black opacity-50 z-0\"></div> {# Ajuste opacity pour plus ou moins de noirceur #}

        {# Sidebar (Menu latéral) - Doit être au-dessus de l'overlay #}
        <aside class=\"w-64 bg-gradient-to-br from-gray-800 to-gray-900 text-white flex flex-col shadow-xl flex-shrink-0 z-10 relative\"> {# z-10 pour être au-dessus de l'overlay #}
            {# ... (Contenu de la sidebar comme précédemment) ... #}
            {# Logo ou titre de l'application dans la sidebar #}
            <div class=\"flex items-center justify-center h-20 border-b border-gray-700 px-4\">
                 <div class=\"h-10 w-10 bg-teal-500 rounded-full flex items-center justify-center shadow-lg\">
                    <img src=\"{{ asset('images/logo-transparent.png') }}\" alt=\"Travel Paradise Logo\" class=\"h-6 w-6\">
                </div>
                <span class=\"ml-3 text-xl font-bold text-teal-300 tracking-wide\">TravelParadise</span>
            </div>
            {# Navigation principale #}
            <nav class=\"flex-1 px-3 py-6 space-y-3 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-800\">
                {# Liens de navigation #}
                <a href=\"{{ path('admin_dashboard') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'admin_dashboard' %}bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l7 7M19 10v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"></path></svg>
                    Dashboard
                </a>

                {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('app_guide_touristique_index') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'app_guide_touristique_index' %}bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"></path>
                    </svg>
                    Guides
                </a>

                <a href=\"{{ path('app_visite_index') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'admin_visites' %}bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"></path>
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"></path>
                    </svg>
                    Visites
                </a>

                <a href=\"{{ path('app_user_index') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'admin_users' %}bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.291M12 4a4 4 0 100 8 4 4 0 000-8z\"></path>
                    </svg>
                    Utilisateurs
                </a>
            {% endif %}
            <a href=\"{{ path('app_visiteur_index') }}\"
                class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                {% if app.request.get('_route') starts with 'app_visiteur_' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0 {% if app.request.get('_route') starts with 'app_visiteur_' %}text-white{% else %}text-gray-400 group-hover:text-gray-300{% endif %}\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                    Visiteurs
            </a>

            <a href=\"{{ path('admin_statistics') }}\"
                class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 ease-in-out
                {% if app.request.get('_route') starts with 'admin_statistics' %}bg-gradient-to-r from-teal-500 to-teal-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>
                    </svg>
                    Statistiques
            </a>
            </nav>
            {# Pied de page de la sidebar #}
            <div class=\"p-5 text-center text-gray-500 text-xs border-t border-gray-700 flex-shrink-0\">
                © {{ 'now'|date('Y') }} TravelParadise
            </div>
        </aside>

        {# Contenu principal (Header + Main Content) #}
        <div class=\"flex-1 flex flex-col overflow-hidden\"> {# flex-1 pour prendre l'espace restant, overflow-hidden pour gérer le défilement #}

            {# Header (En-tête) #}
            <header class=\"flex items-center justify-between h-20 bg-white bg-opacity-80 border-b border-gray-200 px-6 shadow-sm flex-shrink-0 backdrop-blur-sm\"> {# Header semi-transparent avec flou #}
                {# Titre de la page actuelle #}
                <div class=\"text-2xl font-bold text-gray-800\">
                    {% block page_title %}{% endblock %}
                </div>
                {# Profil utilisateur ou actions #}
                <div class=\"flex items-center space-x-6\">
                    {# Avatar ou nom de l'utilisateur #}
                    <div class=\"flex items-center space-x-3\">
                         <div class=\"h-10 w-10 bg-blue-200 rounded-full flex items-center justify-center shadow-inner\">
                            <svg class=\"h-6 w-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
                            </svg>
                        </div>
                        <div class=\"text-sm\">
                            <div class=\"font-semibold text-gray-900\">{{ app.user.prenom|default('Utilisateur') }} {{ app.user.nom|default('') }}</div>
                            <div class=\"text-xs text-gray-500\">
                                {% if is_granted('ROLE_ADMIN') %}
                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">Admin</span>
                                {% else %}
                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">User</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    {# Bouton de déconnexion #}
                    <a href=\"{{ path('app_logout') }}\"
                       class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200 ease-in-out\">
                        <svg class=\"h-4 w-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </header>

            {# Contenu principal de la page #}
            <main class=\"flex-1 overflow-y-auto bg-transparent p-8 relative z-10\"> {# bg-transparent pour laisser passer l'arrière-plan, z-10 pour être au-dessus de l'overlay #}
                {# Affichage des messages flash #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"mb-6\">
                            <div class=\"alert alert-{{ label }} bg-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-100 border border-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-400 text-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-700 px-6 py-4 rounded-lg shadow-md\">
                                {{ message }}
                            </div>
                        </div>
                    {% endfor %}
                {% endfor %}

                {# Ici sera injecté le contenu spécifique de chaque page #}
                {% block content %}{% endblock %}
            </main>

        </div>
    </div>
{% endblock %}
", "layout_app.html.twig", "/var/www/html/templates/layout_app.html.twig");
    }
}
