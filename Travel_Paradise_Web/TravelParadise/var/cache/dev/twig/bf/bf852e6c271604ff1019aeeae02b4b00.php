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

/* visiteur/new.html.twig */
class __TwigTemplate_6437e92ac3a509df5bff274e483497e9 extends Template
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
        // line 2
        return "layout_app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/new.html.twig"));

        $this->parent = $this->load("layout_app.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Ajout d'utilisateur - TravelParadise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "Créer un Nouveau Visiteur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
    ";
        // line 10
        yield "    <div class=\"max-w-3xl mx-auto px-4 py-8\"> ";
        // line 11
        yield "        <div class=\"bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200\">
            <div class=\"px-6 py-5 bg-gradient-to-r from-blue-500 to-blue-600 text-white\"> ";
        // line 13
        yield "                <h2 class=\"text-xl font-semibold\"> Nouveau Visiteur</h2>
            </div>

            <div class=\"px-6 py-8\">
                ";
        // line 18
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "

                    ";
        // line 21
        yield "                    <div>
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Nom"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 30
        yield "                    <div>
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Prénom"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 39
        yield "                    <div class=\"flex items-center\">
                        <div class=\"flex items-center h-5\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "present", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded"]]);
        yield "
                        </div>
                        <div class=\"ml-3 text-sm\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "present", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "font-medium text-gray-700"], "label" => "Présent"]);
        yield "
                        </div>
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "present", [], "any", false, false, false, 46), 'errors');
        yield "
                    </div>

                    ";
        // line 50
        yield "                    <div>
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "commentaire", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Commentaire"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "commentaire", [], "any", false, false, false, 53), 'widget', ["attr" => ["rows" => "4", "class" => "shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "commentaire", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 59
        yield "                    <div>
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "visite", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Visite"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "visite", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "visite", [], "any", false, false, false, 63), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 68
        yield "                    <div class=\"pt-4 flex justify-end space-x-4\">
                        ";
        // line 70
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_index");
        yield "\" ";
        // line 71
        yield "                           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150\">
                            Retour à la liste
                        </a>

                        ";
        // line 76
        yield "                        <button type=\"submit\"
                                class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150\">
                            Enregistrer le Visiteur
                        </button>
                    </div>

                ";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
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
        return "visiteur/new.html.twig";
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
        return array (  262 => 82,  254 => 76,  248 => 71,  244 => 70,  241 => 68,  234 => 63,  230 => 62,  225 => 60,  222 => 59,  215 => 54,  211 => 53,  206 => 51,  203 => 50,  197 => 46,  192 => 44,  186 => 41,  182 => 39,  175 => 34,  171 => 33,  166 => 31,  163 => 30,  156 => 25,  152 => 24,  147 => 22,  144 => 21,  138 => 18,  132 => 13,  129 => 11,  127 => 10,  124 => 8,  111 => 7,  88 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/visiteur/new.html.twig #}
{% extends 'layout_app.html.twig' %} {# Assure-toi que c'est le bon layout #}

{% block app_title %}Ajout d'utilisateur - TravelParadise{% endblock %}
{% block page_title %}Créer un Nouveau Visiteur{% endblock %}

{% block content %}

    {# Conteneur principal pour le formulaire, centré et avec une ombre #}
    <div class=\"max-w-3xl mx-auto px-4 py-8\"> {# J'ai réduit la largeur pour un formulaire plus simple #}
        <div class=\"bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200\">
            <div class=\"px-6 py-5 bg-gradient-to-r from-blue-500 to-blue-600 text-white\"> {# Changement de couleur pour différencier #}
                <h2 class=\"text-xl font-semibold\"> Nouveau Visiteur</h2>
            </div>

            <div class=\"px-6 py-8\">
                {# Le formulaire lui-même #}
                {{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}

                    {# Champ Nom #}
                    <div>
                        {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(form.nom, {'attr': {'class': 'shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
                            {{ form_errors(form.nom) }}
                        </div>
                    </div>

                    {# Champ Prénom #}
                    <div>
                        {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(form.prenom, {'attr': {'class': 'shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
                            {{ form_errors(form.prenom) }}
                        </div>
                    </div>

                    {# Champ Présent (Checkbox) #}
                    <div class=\"flex items-center\">
                        <div class=\"flex items-center h-5\">
                            {{ form_widget(form.present, {'attr': {'class': 'focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded'}}) }}
                        </div>
                        <div class=\"ml-3 text-sm\">
                            {{ form_label(form.present, 'Présent', {'label_attr': {'class': 'font-medium text-gray-700'}}) }}
                        </div>
                        {{ form_errors(form.present) }}
                    </div>

                    {# Champ Commentaire #}
                    <div>
                        {{ form_label(form.commentaire, 'Commentaire', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(form.commentaire, {'attr': {'rows': '4', 'class': 'shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
                            {{ form_errors(form.commentaire) }}
                        </div>
                    </div>

                    {# Champ Visite (Select) #}
                    <div>
                        {{ form_label(form.visite, 'Visite', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(form.visite, {'attr': {'class': 'shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
                            {{ form_errors(form.visite) }}
                        </div>
                    </div>

                    {# Boutons d'action #}
                    <div class=\"pt-4 flex justify-end space-x-4\">
                        {# Bouton Retour à la liste #}
                        <a href=\"{{ path('app_visiteur_index') }}\" {# Assure-toi que cette route existe #}
                           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150\">
                            Retour à la liste
                        </a>

                        {# Bouton Enregistrer #}
                        <button type=\"submit\"
                                class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150\">
                            Enregistrer le Visiteur
                        </button>
                    </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}
", "visiteur/new.html.twig", "/var/www/html/templates/visiteur/new.html.twig");
    }
}
