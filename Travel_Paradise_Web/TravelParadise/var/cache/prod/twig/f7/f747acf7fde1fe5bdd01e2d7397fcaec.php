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

/* home/index.html.twig */
class __TwigTemplate_dbe06b6634c6e46d62691bef09848556 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield " Travel Paradise ";
        
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

        // line 7
        yield "<div class=\"min-h-screen flex items-center justify-center bg-cover bg-center\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tp2.jpg"), "html", null, true);
        yield "');\">
    <div class=\"absolute inset-0 bg-black opacity-90\"></div>

    ";
        // line 11
        yield "    <div class=\"relative z-10 text-center p-8 max-w-3xl mx-auto\"> ";
        // line 12
        yield "        ";
        // line 13
        yield "        <h1 class=\"text-6xl md:text-7xl font-extrabold mb-6 text-teal-400 animate-fade-in-down\"> ";
        // line 14
        yield "            Travel Paradise
        </h1>
        ";
        // line 17
        yield "        <p class=\"text-xl md:text-2xl mb-10 text-gray-300 animate-fade-in-up\"> ";
        // line 18
        yield "            Discover breathtaking destinations and unforgettable experiences.
            Your journey to paradise starts here.
        </p>
        ";
        // line 22
        yield "        ";
        // line 23
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"inline-block bg-gradient-to-r from-teal-500 to-blue-600 hover:from-teal-600 hover:to-blue-700 text-white font-bold py-4 px-10 rounded-full transition duration-300 ease-in-out shadow-xl transform hover:scale-105\">
            Get Started
        </a>
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
        return "home/index.html.twig";
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
        return array (  111 => 23,  109 => 22,  104 => 18,  102 => 17,  98 => 14,  96 => 13,  94 => 12,  92 => 11,  85 => 7,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Travel Paradise {% endblock %}

{% block body %}
{# Conteneur principal avec arrière-plan et centrage #}
<div class=\"min-h-screen flex items-center justify-center bg-cover bg-center\" style=\"background-image: url('{{ asset('images/tp2.jpg') }}');\">
    <div class=\"absolute inset-0 bg-black opacity-90\"></div>

    {# Contenu centré au-dessus de l'overlay #}
    <div class=\"relative z-10 text-center p-8 max-w-3xl mx-auto\"> {# mx-auto pour centrer horizontalement #}
        {# Titre avec animation subtile #}
        <h1 class=\"text-6xl md:text-7xl font-extrabold mb-6 text-teal-400 animate-fade-in-down\"> {# animate-fade-in-down nécessite une configuration d'animation dans Tailwind #}
            Travel Paradise
        </h1>
        {# Paragraphe avec animation subtile #}
        <p class=\"text-xl md:text-2xl mb-10 text-gray-300 animate-fade-in-up\"> {# animate-fade-in-up nécessite une configuration d'animation dans Tailwind #}
            Discover breathtaking destinations and unforgettable experiences.
            Your journey to paradise starts here.
        </p>
        {# Bouton stylisé et animé #}
        {# Assure-toi que la route 'app_login' est bien définie dans security.yaml et SecurityController #}
        <a href=\"{{ path('app_login') }}\" class=\"inline-block bg-gradient-to-r from-teal-500 to-blue-600 hover:from-teal-600 hover:to-blue-700 text-white font-bold py-4 px-10 rounded-full transition duration-300 ease-in-out shadow-xl transform hover:scale-105\">
            Get Started
        </a>
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "/var/www/html/templates/home/index.html.twig");
    }
}
