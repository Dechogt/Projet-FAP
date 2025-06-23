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

/* home/base.html.twig */
class __TwigTemplate_805b07a5b4cb7520934b61e5afb20e2b extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 17
        yield "    </head>
    <body class=\"bg-gray-50\">
        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "            <!-- Navigation -->
            <nav class=\"bg-white shadow-lg border-b border-gray-200\">
                <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                    <div class=\"flex justify-between h-16\">
                        <div class=\"flex items-center\">
                            <!-- Logo -->
                            <div class=\"flex-shrink-0 flex items-center\">
                                <div class=\"h-8 w-8 bg-blue-600 rounded-full flex items-center justify-center\">
                                    <svg class=\"h-5 w-5 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                    </svg>
                                </div>
                                <span class=\"ml-3 text-xl font-bold text-gray-900\">TravelParadise</span>
                            </div>

                            <!-- Navigation principale -->
                            <div class=\"ml-10 flex items-baseline space-x-4\">
                                <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\"
                                   class=\"";
            // line 39
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", ["_route"], "method", false, false, false, 39) == "admin_dashboard")) {
                yield "bg-blue-100 text-blue-700";
            } else {
                yield "text-gray-500 hover:text-gray-700";
            }
            yield " px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                    Dashboard
                                </a>

                                ";
            // line 43
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "                                    <a href=\"#\"
                                       class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                        Guides
                                    </a>
                                    <a href=\"#\"
                                       class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                        Visites
                                    </a>
                                    <a href=\"#\"
                                       class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                        Utilisateurs
                                    </a>
                                ";
            }
            // line 57
            yield "
                                <a href=\"#\"
                                   class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                    Statistiques
                                </a>
                            </div>
                        </div>

                        <!-- Menu utilisateur -->
                        <div class=\"flex items-center space-x-4\">
                            <div class=\"flex items-center space-x-3\">
                                <div class=\"flex items-center space-x-2\">
                                    <div class=\"h-8 w-8 bg-gray-300 rounded-full flex items-center justify-center\">
                                        <svg class=\"h-4 w-4 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"text-sm\">
                                        <div class=\"font-medium text-gray-900\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
            yield "</div>
                                        <div class=\"text-gray-500\">
                                            ";
            // line 77
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                                                <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">Admin</span>
                                            ";
            } else {
                // line 80
                yield "                                                <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">User</span>
                                            ";
            }
            // line 82
            yield "                                        </div>
                                    </div>
                                </div>

                                <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"
                                   class=\"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition-colors\">
                                    <svg class=\"h-4 w-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                                    </svg>
                                    Déconnexion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        ";
        }
        // line 99
        yield "
        <!-- Contenu principal -->
        <main class=\"";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "py-6";
        }
        yield "\">
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 103
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 104
                yield "                    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-4\">
                        <div class=\"alert alert-";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " bg-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-50 border border-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-200 text-";
                yield ((($context["label"] == "error")) ? ("red") : (((($context["label"] == "success")) ? ("green") : ("blue"))));
                yield "-700 px-4 py-3 rounded-lg\">
                            ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "
            ";
        // line 112
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 113
        yield "        </main>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "TravelParadise - Gestion d'agence";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/base.html.twig";
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
        return array (  310 => 112,  299 => 15,  289 => 14,  278 => 11,  268 => 10,  251 => 5,  240 => 113,  238 => 112,  235 => 111,  229 => 110,  219 => 106,  209 => 105,  206 => 104,  201 => 103,  197 => 102,  191 => 101,  187 => 99,  171 => 86,  165 => 82,  161 => 80,  157 => 78,  155 => 77,  148 => 75,  128 => 57,  113 => 44,  111 => 43,  100 => 39,  96 => 38,  76 => 20,  74 => 19,  70 => 17,  68 => 14,  65 => 13,  63 => 10,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}TravelParadise - Gestion d'agence{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body class=\"bg-gray-50\">
        {% if app.user %}
            <!-- Navigation -->
            <nav class=\"bg-white shadow-lg border-b border-gray-200\">
                <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                    <div class=\"flex justify-between h-16\">
                        <div class=\"flex items-center\">
                            <!-- Logo -->
                            <div class=\"flex-shrink-0 flex items-center\">
                                <div class=\"h-8 w-8 bg-blue-600 rounded-full flex items-center justify-center\">
                                    <svg class=\"h-5 w-5 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                    </svg>
                                </div>
                                <span class=\"ml-3 text-xl font-bold text-gray-900\">TravelParadise</span>
                            </div>

                            <!-- Navigation principale -->
                            <div class=\"ml-10 flex items-baseline space-x-4\">
                                <a href=\"{{ path('admin_dashboard') }}\"
                                   class=\"{% if app.request.get('_route') == 'admin_dashboard' %}bg-blue-100 text-blue-700{% else %}text-gray-500 hover:text-gray-700{% endif %} px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                    Dashboard
                                </a>

                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"#\"
                                       class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                        Guides
                                    </a>
                                    <a href=\"#\"
                                       class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                        Visites
                                    </a>
                                    <a href=\"#\"
                                       class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                        Utilisateurs
                                    </a>
                                {% endif %}

                                <a href=\"#\"
                                   class=\"text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium transition-colors\">
                                    Statistiques
                                </a>
                            </div>
                        </div>

                        <!-- Menu utilisateur -->
                        <div class=\"flex items-center space-x-4\">
                            <div class=\"flex items-center space-x-3\">
                                <div class=\"flex items-center space-x-2\">
                                    <div class=\"h-8 w-8 bg-gray-300 rounded-full flex items-center justify-center\">
                                        <svg class=\"h-4 w-4 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"text-sm\">
                                        <div class=\"font-medium text-gray-900\">{{ app.user.prenom }} {{ app.user.nom }}</div>
                                        <div class=\"text-gray-500\">
                                            {% if is_granted('ROLE_ADMIN') %}
                                                <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">Admin</span>
                                            {% else %}
                                                <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">User</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>

                                <a href=\"{{ path('app_logout') }}\"
                                   class=\"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition-colors\">
                                    <svg class=\"h-4 w-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/>
                                    </svg>
                                    Déconnexion
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        {% endif %}

        <!-- Contenu principal -->
        <main class=\"{% if app.user %}py-6{% endif %}\">
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-4\">
                        <div class=\"alert alert-{{ label }} bg-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-50 border border-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-200 text-{{ label == 'error' ? 'red' : (label == 'success' ? 'green' : 'blue') }}-700 px-4 py-3 rounded-lg\">
                            {{ message }}
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}

            {% block body %}{% endblock %}
        </main>
    </body>
</html>
", "home/base.html.twig", "/var/www/html/templates/home/base.html.twig");
    }
}
