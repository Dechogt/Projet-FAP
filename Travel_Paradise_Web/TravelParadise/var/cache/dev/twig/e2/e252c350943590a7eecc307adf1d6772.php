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

/* visiteur/_form.html.twig */
class __TwigTemplate_833424acafe79ea8b6e968705594aa17 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/_form.html.twig"));

        // line 3
        yield "
";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "

    ";
        // line 7
        yield "    <div>
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Nom"]);
        yield "
        <div class=\"mt-1\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
        </div>
        ";
        // line 12
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "            <p class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'errors');
            yield "</p>
        ";
        }
        // line 15
        yield "    </div>

    <div>
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Prénom"]);
        yield "
        <div class=\"mt-1\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
        </div>
        ";
        // line 22
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <p class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'errors');
            yield "</p>
        ";
        }
        // line 25
        yield "    </div>

    <div>
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "present", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Présent"]);
        yield "
        <div class=\"mt-1\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "present", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"]]);
        yield "
        </div>
        ";
        // line 32
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "present", [], "any", false, false, false, 32), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <p class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "present", [], "any", false, false, false, 33), 'errors');
            yield "</p>
        ";
        }
        // line 35
        yield "    </div>

    <div>
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "commentaire", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Commentaire"]);
        yield "
        <div class=\"mt-1\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "commentaire", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md", "rows" => "3"]]);
        yield "
        </div>
        ";
        // line 42
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "commentaire", [], "any", false, false, false, 42), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "            <p class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "commentaire", [], "any", false, false, false, 43), 'errors');
            yield "</p>
        ";
        }
        // line 45
        yield "    </div>

    ";
        // line 48
        yield "    <div>
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "visite", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Visite"]);
        yield "
        <div class=\"mt-1\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "visite", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"]]);
        yield "
        </div>
        ";
        // line 53
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "visite", [], "any", false, false, false, 53), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "            <p class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "visite", [], "any", false, false, false, 54), 'errors');
            yield "</p>
        ";
        }
        // line 56
        yield "    </div>

    ";
        // line 59
        yield "    <div class=\"flex justify-end space-x-4\">
        ";
        // line 61
        yield "        <button type=\"submit\"
                class=\"inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Enregistrer
        </button>
    </div>

";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "visiteur/_form.html.twig";
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
        return array (  186 => 67,  178 => 61,  175 => 59,  171 => 56,  165 => 54,  163 => 53,  158 => 51,  153 => 49,  150 => 48,  146 => 45,  140 => 43,  138 => 42,  133 => 40,  128 => 38,  123 => 35,  117 => 33,  115 => 32,  110 => 30,  105 => 28,  100 => 25,  94 => 23,  92 => 22,  87 => 20,  82 => 18,  77 => 15,  71 => 13,  69 => 12,  64 => 10,  59 => 8,  56 => 7,  51 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/visiteur/_form.html.twig #}
{# Ce template est un PARTIAL, il n'étend PAS de layout #}

{{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}

    {# Affichage des champs du formulaire avec styles #}
    <div>
        {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
        <div class=\"mt-1\">
            {{ form_widget(form.nom, {'attr': {'class': 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
        </div>
        {% if form_errors(form.nom) %}
            <p class=\"text-red-500 text-xs mt-1\">{{ form_errors(form.nom) }}</p>
        {% endif %}
    </div>

    <div>
        {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
        <div class=\"mt-1\">
            {{ form_widget(form.prenom, {'attr': {'class': 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
        </div>
        {% if form_errors(form.prenom) %}
            <p class=\"text-red-500 text-xs mt-1\">{{ form_errors(form.prenom) }}</p>
        {% endif %}
    </div>

    <div>
        {{ form_label(form.present, 'Présent', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
        <div class=\"mt-1\">
            {{ form_widget(form.present, {'attr': {'class': 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded'}}) }}
        </div>
        {% if form_errors(form.present) %}
            <p class=\"text-red-500 text-xs mt-1\">{{ form_errors(form.present) }}</p>
        {% endif %}
    </div>

    <div>
        {{ form_label(form.commentaire, 'Commentaire', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
        <div class=\"mt-1\">
            {{ form_widget(form.commentaire, {'attr': {'class': 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md', 'rows': '3'}}) }}
        </div>
        {% if form_errors(form.commentaire) %}
            <p class=\"text-red-500 text-xs mt-1\">{{ form_errors(form.commentaire) }}</p>
        {% endif %}
    </div>

    {# Champ pour la visite #}
    <div>
        {{ form_label(form.visite, 'Visite', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
        <div class=\"mt-1\">
            {{ form_widget(form.visite, {'attr': {'class': 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md'}}) }}
        </div>
        {% if form_errors(form.visite) %}
            <p class=\"text-red-500 text-xs mt-1\">{{ form_errors(form.visite) }}</p>
        {% endif %}
    </div>

    {# Boutons d'action #}
    <div class=\"flex justify-end space-x-4\">
        {# Bouton Enregistrer #}
        <button type=\"submit\"
                class=\"inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Enregistrer
        </button>
    </div>

{{ form_end(form) }}", "visiteur/_form.html.twig", "/var/www/html/templates/visiteur/_form.html.twig");
    }
}
