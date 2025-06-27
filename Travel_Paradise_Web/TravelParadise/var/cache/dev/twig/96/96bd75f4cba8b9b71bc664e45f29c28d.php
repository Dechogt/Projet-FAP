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
        yield "
    <div class=\"flex h-screen overflow-hidden relative\"
         style=\"background-image: url('";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stats.jpg"), "html", null, true);
        yield "'); background-size: cover; background-position: center;\">

        <div class=\"absolute inset-0 bg-black opacity-30 z-0\"></div>

        <aside class=\"w-64 bg-gradient-to-br from-black to-white text-white flex flex-col shadow-xl flex-shrink-0 z-10 relative\">

            <div class=\"flex items-center justify-center h-20 border-b border-white-700 px-4\">
                <div class=\"h-10 w-10 rounded-full flex items-center justify-center shadow-lg bg-transparent border-2 border-white\">
                    <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tp-logo.png"), "html", null, true);
        yield "\" alt=\"Travel Paradise Logo\" class=\"h-6 w-6\">
                </div>
                <span class=\"ml-3 text-xl font-bold tracking-wide\">TravelParadise</span>
            </div>

            <nav class=\"flex-1 px-3 py-6 space-y-3 overflow-y-auto scrollbar-thin scrollbar-thumb-blue-700 scrollbar-track-blue-800\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
        // line 25
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v1 = "admin_dashboard") && str_starts_with($_v0, $_v1))) {
            yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
        }
        yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l7 7M19 10v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"></path></svg>
                    Dashboard
                </a>

                ";
        // line 30
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_index");
            yield "\"
                       class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                       ";
            // line 33
            if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33)) && is_string($_v3 = "app_guide_touristique_index") && str_starts_with($_v2, $_v3))) {
                yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
            }
            yield "\">
                        <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"></path>
                        </svg>
                        Guides
                    </a>

                    <a href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_index");
            yield "\"
                       class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                       ";
            // line 42
            if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v5 = "admin_visites") && str_starts_with($_v4, $_v5))) {
                yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
            }
            yield "\">
                        <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"></path>
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"></path>
                        </svg>
                        Visites
                    </a>

                    <a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\"
                       class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                       ";
            // line 52
            if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "get", ["_route"], "method", false, false, false, 52)) && is_string($_v7 = "admin_users") && str_starts_with($_v6, $_v7))) {
                yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
            }
            yield "\">
                        <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.291M12 4a4 4 0 100 8 4 4 0 000-8z\"></path>
                        </svg>
                        Utilisateurs
                    </a>
                ";
        }
        // line 59
        yield "
                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_index");
        yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
        // line 62
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62)) && is_string($_v9 = "app_visiteur_") && str_starts_with($_v8, $_v9))) {
            yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
        }
        yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                    Visiteurs
                </a>

                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics");
        yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                   ";
        // line 69
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "get", ["_route"], "method", false, false, false, 69)) && is_string($_v11 = "admin_statistics") && str_starts_with($_v10, $_v11))) {
            yield "bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md";
        }
        yield "\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>
                    </svg>
                    Statistiques
                </a>
            </nav>

            <div class=\"p-5 text-center text-gray-300 text-xs border-t border-blue-700 flex-shrink-0\">
                © ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " TravelParadise
            </div>
        </aside>

        <div class=\"flex-1 flex flex-col overflow-hidden\">

            <header class=\"flex items-center justify-between h-20 bg-white bg-opacity-80 border-b border-gray-200 px-6 shadow-sm flex-shrink-0 backdrop-blur-sm\">
                <div class=\"text-2xl font-bold text-gray-800\">
                    ";
        // line 86
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        // line 87
        yield "                </div>

                <div class=\"flex items-center space-x-6\">
                    <div class=\"flex items-center space-x-3\">
                        <div class=\"h-10 w-10 bg-blue-200 rounded-full flex items-center justify-center shadow-inner\">
                            <svg class=\"h-6 w-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
                            </svg>
                        </div>
                        <div class=\"text-sm\">
                            <div class=\"font-semibold text-gray-900\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 97), "prenom", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "prenom", [], "any", false, false, false, 97), "Utilisateur")) : ("Utilisateur")), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 97), "nom", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "")) : ("")), "html", null, true);
        yield "</div>
                            <div class=\"text-xs text-gray-500\">
                                ";
        // line 99
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">Admin</span>
                                ";
        } else {
            // line 102
            yield "                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">User</span>
                                ";
        }
        // line 104
        yield "                            </div>
                        </div>
                    </div>

                    <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" id=\"logout-button\"
                       class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200 ease-in-out\">
                        <svg class=\"h-4 w-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </header>

            <main class=\"flex-1 overflow-y-auto bg-transparent p-8 relative z-10\">

                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "flashes", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 121
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 122
                yield "                        <div class=\"mb-6\">
                            <div class=\"alert bg-";
                // line 123
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-100 border border-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-400 text-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-700 px-6 py-4 rounded-lg shadow-md\">
                                ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "
                ";
        // line 130
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 131
        yield "            </main>

        </div>
    </div>

    <div id=\"logout-modal\"
        class=\"fixed inset-0 z-50 items-center justify-center overflow-y-auto hidden transition-opacity duration-300 ease-in-out\">

        <div class=\"fixed inset-0 bg-black opacity-50\"></div>

        <div class=\"relative bg-white rounded-lg shadow-xl max-w-md mx-auto p-6\">

            <button id=\"close-modal-button\" type=\"button\" class=\"absolute top-3 right-3 text-gray-400 hover:text-gray-500 transition-colors duration-200\">
                <svg class=\"h-6 w-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>

            ";
        // line 150
        yield "            <div class=\"text-center\">
                <svg class=\"mx-auto h-12 w-12 text-green-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                </svg>
                <h3 class=\"mt-4 text-lg font-medium text-gray-900\">Au revoir !</h3>
                <p class=\"mt-2 text-sm text-gray-500\">
                    À très bientôt sur TravelParadise !
                </p>
            </div>

            ";
        // line 161
        yield "            <div class=\"mt-6 flex justify-center\">
                <button id=\"confirm-logout-button\"
                        class=\"inline-flex justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-colors duration-200 ease-in-out\">
                    OK
                </button>
            </div>
        </div>
    </div>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton = document.getElementById('logout-button');
            const logoutModal = document.getElementById('logout-modal');
            const closeModalButton = document.getElementById('close-modal-button');
            const confirmLogoutButton = document.getElementById('confirm-logout-button');

            const logoutLink = \"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\";

            function showLogoutModal() {
                logoutModal.classList.remove('hidden');
                logoutModal.classList.add('flex');
            }

            function hideLogoutModal() {
                logoutModal.classList.remove('flex');
                logoutModal.classList.add('hidden');
            }

            if (logoutButton) {
                logoutButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    showLogoutModal();
                });
            }

            if (closeModalButton) {
                closeModalButton.addEventListener('click', function() {
                    hideLogoutModal();
                });
            }

            if (confirmLogoutButton) {
                confirmLogoutButton.addEventListener('click', function() {

                    setTimeout(function() {
                        window.location.href = logoutLink;
                    }, 3000);
                    hideLogoutModal();
                });
            }
            // window.addEventListener('click', function(event) {

            //     if (event.target === logoutModal) {
            //         hideLogoutModal();
            //     }
            // });
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        yield "Tableau de bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
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
        return array (  489 => 130,  466 => 86,  411 => 178,  392 => 161,  380 => 150,  360 => 131,  358 => 130,  355 => 129,  349 => 128,  339 => 124,  331 => 123,  328 => 122,  323 => 121,  319 => 120,  304 => 108,  298 => 104,  294 => 102,  290 => 100,  288 => 99,  281 => 97,  269 => 87,  267 => 86,  256 => 78,  242 => 69,  237 => 67,  227 => 62,  222 => 60,  219 => 59,  207 => 52,  202 => 50,  189 => 42,  184 => 40,  172 => 33,  166 => 31,  164 => 30,  154 => 25,  149 => 23,  140 => 17,  129 => 9,  125 => 7,  112 => 6,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layout_app.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{% block app_title %}TravelParadise{% endblock %}{% endblock %}

{% block body %}

    <div class=\"flex h-screen overflow-hidden relative\"
         style=\"background-image: url('{{ asset('images/stats.jpg') }}'); background-size: cover; background-position: center;\">

        <div class=\"absolute inset-0 bg-black opacity-30 z-0\"></div>

        <aside class=\"w-64 bg-gradient-to-br from-black to-white text-white flex flex-col shadow-xl flex-shrink-0 z-10 relative\">

            <div class=\"flex items-center justify-center h-20 border-b border-white-700 px-4\">
                <div class=\"h-10 w-10 rounded-full flex items-center justify-center shadow-lg bg-transparent border-2 border-white\">
                    <img src=\"{{ asset('images/tp-logo.png') }}\" alt=\"Travel Paradise Logo\" class=\"h-6 w-6\">
                </div>
                <span class=\"ml-3 text-xl font-bold tracking-wide\">TravelParadise</span>
            </div>

            <nav class=\"flex-1 px-3 py-6 space-y-3 overflow-y-auto scrollbar-thin scrollbar-thumb-blue-700 scrollbar-track-blue-800\">
                <a href=\"{{ path('admin_dashboard') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'admin_dashboard' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l7 7M19 10v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"></path></svg>
                    Dashboard
                </a>

                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('app_guide_touristique_index') }}\"
                       class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                       {% if app.request.get('_route') starts with 'app_guide_touristique_index' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                        <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"></path>
                        </svg>
                        Guides
                    </a>

                    <a href=\"{{ path('app_visite_index') }}\"
                       class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                       {% if app.request.get('_route') starts with 'admin_visites' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                        <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"></path>
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"></path>
                        </svg>
                        Visites
                    </a>

                    <a href=\"{{ path('app_user_index') }}\"
                       class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                       {% if app.request.get('_route') starts with 'admin_users' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                        <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.291M12 4a4 4 0 100 8 4 4 0 000-8z\"></path>
                        </svg>
                        Utilisateurs
                    </a>
                {% endif %}

                <a href=\"{{ path('app_visiteur_index') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'app_visiteur_' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\"></path></svg>
                    Visiteurs
                </a>

                <a href=\"{{ path('admin_statistics') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-gray-300 hover:bg-blue-700 hover:text-white transition-colors duration-200 ease-in-out
                   {% if app.request.get('_route') starts with 'admin_statistics' %}bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md{% endif %}\">
                    <svg class=\"h-6 w-6 mr-4 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"></path>
                    </svg>
                    Statistiques
                </a>
            </nav>

            <div class=\"p-5 text-center text-gray-300 text-xs border-t border-blue-700 flex-shrink-0\">
                © {{ 'now'|date('Y') }} TravelParadise
            </div>
        </aside>

        <div class=\"flex-1 flex flex-col overflow-hidden\">

            <header class=\"flex items-center justify-between h-20 bg-white bg-opacity-80 border-b border-gray-200 px-6 shadow-sm flex-shrink-0 backdrop-blur-sm\">
                <div class=\"text-2xl font-bold text-gray-800\">
                    {% block page_title %}Tableau de bord{% endblock %}
                </div>

                <div class=\"flex items-center space-x-6\">
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

                    <a href=\"{{ path('app_logout') }}\" id=\"logout-button\"
                       class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200 ease-in-out\">
                        <svg class=\"h-4 w-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </header>

            <main class=\"flex-1 overflow-y-auto bg-transparent p-8 relative z-10\">

                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"mb-6\">
                            <div class=\"alert bg-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-100 border border-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-400 text-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-700 px-6 py-4 rounded-lg shadow-md\">
                                {{ message }}
                            </div>
                        </div>
                    {% endfor %}
                {% endfor %}

                {% block content %}{% endblock %}
            </main>

        </div>
    </div>

    <div id=\"logout-modal\"
        class=\"fixed inset-0 z-50 items-center justify-center overflow-y-auto hidden transition-opacity duration-300 ease-in-out\">

        <div class=\"fixed inset-0 bg-black opacity-50\"></div>

        <div class=\"relative bg-white rounded-lg shadow-xl max-w-md mx-auto p-6\">

            <button id=\"close-modal-button\" type=\"button\" class=\"absolute top-3 right-3 text-gray-400 hover:text-gray-500 transition-colors duration-200\">
                <svg class=\"h-6 w-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>

            {# Message de déconnexion #}
            <div class=\"text-center\">
                <svg class=\"mx-auto h-12 w-12 text-green-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                </svg>
                <h3 class=\"mt-4 text-lg font-medium text-gray-900\">Au revoir !</h3>
                <p class=\"mt-2 text-sm text-gray-500\">
                    À très bientôt sur TravelParadise !
                </p>
            </div>

            {# Bouton pour fermer le modal #}
            <div class=\"mt-6 flex justify-center\">
                <button id=\"confirm-logout-button\"
                        class=\"inline-flex justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-colors duration-200 ease-in-out\">
                    OK
                </button>
            </div>
        </div>
    </div>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton = document.getElementById('logout-button');
            const logoutModal = document.getElementById('logout-modal');
            const closeModalButton = document.getElementById('close-modal-button');
            const confirmLogoutButton = document.getElementById('confirm-logout-button');

            const logoutLink = \"{{ path('app_logout') }}\";

            function showLogoutModal() {
                logoutModal.classList.remove('hidden');
                logoutModal.classList.add('flex');
            }

            function hideLogoutModal() {
                logoutModal.classList.remove('flex');
                logoutModal.classList.add('hidden');
            }

            if (logoutButton) {
                logoutButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    showLogoutModal();
                });
            }

            if (closeModalButton) {
                closeModalButton.addEventListener('click', function() {
                    hideLogoutModal();
                });
            }

            if (confirmLogoutButton) {
                confirmLogoutButton.addEventListener('click', function() {

                    setTimeout(function() {
                        window.location.href = logoutLink;
                    }, 3000);
                    hideLogoutModal();
                });
            }
            // window.addEventListener('click', function(event) {

            //     if (event.target === logoutModal) {
            //         hideLogoutModal();
            //     }
            // });
        });
    </script>

{% endblock %}
", "layout_app.html.twig", "/var/www/html/templates/layout_app.html.twig");
    }
}
