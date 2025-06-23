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

/* guide_touristique/_form.html.twig */
class __TwigTemplate_8ef7c3298fbc1d462f6ab1f761f6d338 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide_touristique/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide_touristique/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        yield "

    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'errors');
        yield "

    ";
        // line 8
        yield "    <div class=\"grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8\">

        ";
        // line 11
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Nom"]);
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>

        ";
        // line 18
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Prénom"]);
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'errors');
        yield "
        </div>

        ";
        // line 25
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Adresse e-mail"]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'errors');
        yield "
        </div>

        ";
        // line 32
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Téléphone"]);
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "telephone", [], "any", false, false, false, 35), 'errors');
        yield "
        </div>

        ";
        // line 39
        yield "        <div class=\"sm:col-span-2\"> ";
        // line 40
        yield "             ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "paysAffectation", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Pays d'affectation"]);
        yield "
             ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "paysAffectation", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
             ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "paysAffectation", [], "any", false, false, false, 42), 'errors');
        yield "
        </div>


        ";
        // line 47
        yield "        <div class=\"sm:col-span-2\">
            <label for=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "photoFile", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        yield "\"
                   class=\"cursor-pointer inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150 transform hover:-translate-y-1 hover:scale-105\">
                <svg class=\"-ml-1 mr-3 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12\"></path></svg>
                Choisir une image
            </label>

            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "photoFile", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "sr-only"]]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "photoFile", [], "any", false, false, false, 55), 'errors');
        yield "

            ";
        // line 58
        yield "            ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 58, $this->source); })()), "photoFilename", [], "any", false, false, false, 58))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            // line 59
            yield "                <div class=\"mt-4\">
                    <p class=\"block text-sm font-medium text-gray-700 mb-2\">Image actuelle :</p>
                    <img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["guide_touristique"]) || array_key_exists("guide_touristique", $context) ? $context["guide_touristique"] : (function () { throw new RuntimeError('Variable "guide_touristique" does not exist.', 61, $this->source); })()), "photoFilename", [], "any", false, false, false, 61))), "html", null, true);
            yield "\" alt=\"Photo du guide\" class=\"h-32 w-32 object-cover rounded-md shadow-md\">
                </div>
            ";
        }
        // line 64
        yield "        </div>

        ";
        // line 67
        yield "        <div class=\"sm:col-span-2\"> ";
        // line 68
        yield "             ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "statut", [], "any", false, false, false, 68), 'row');
        yield "
        </div>


        ";
        // line 73
        yield "        ";
        // line 74
        yield "        <div class=\"sm:col-span-2\">
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "password", [], "any", false, false, false, 75), 'row');
        yield "
        </div>
        ";
        // line 78
        yield "

    </div> ";
        // line 81
        yield "

    ";
        // line 84
        yield "    <div class=\"flex justify-end mt-6 space-x-4\">

        ";
        // line 87
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_touristique_index");
        yield "\" ";
        // line 88
        yield "           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
            Retour à la liste
        </a>

        ";
        // line 94
        yield "        <button type=\"submit\" class=\"inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Enregistrer
        </button>

    </div>

";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "guide_touristique/_form.html.twig";
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
        return array (  241 => 100,  233 => 94,  226 => 88,  222 => 87,  218 => 84,  214 => 81,  210 => 78,  205 => 75,  202 => 74,  200 => 73,  192 => 68,  190 => 67,  186 => 64,  180 => 61,  176 => 59,  172 => 58,  167 => 55,  163 => 54,  154 => 48,  151 => 47,  144 => 42,  140 => 41,  135 => 40,  133 => 39,  127 => 35,  123 => 34,  119 => 33,  116 => 32,  110 => 28,  106 => 27,  102 => 26,  99 => 25,  93 => 21,  89 => 20,  85 => 19,  82 => 18,  76 => 14,  72 => 13,  68 => 12,  65 => 11,  61 => 8,  56 => 5,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/guide_touristique/_form.html.twig #}

{{ form_start(form) }}

    {{ form_errors(form) }}

    {# Conteneur principal de la grille #}
    <div class=\"grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8\">

        {# Champ Nom #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.nom, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.nom) }}
        </div>

        {# Champ Prénom #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.prenom, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.prenom) }}
        </div>

        {# Champ Email #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.email, 'Adresse e-mail', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.email, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.email) }}
        </div>

        {# Champ Téléphone #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.telephone, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.telephone) }}
        </div>

        {# Champ Pays d'affectation #}
        <div class=\"sm:col-span-2\"> {# Tu peux le mettre sur 2 colonnes si tu veux #}
             {{ form_label(form.paysAffectation, 'Pays d\\'affectation', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
             {{ form_widget(form.paysAffectation, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
             {{ form_errors(form.paysAffectation) }}
        </div>


        {# Champ Photo (avec le bouton stylisé) #}
        <div class=\"sm:col-span-2\">
            <label for=\"{{ form.photoFile.vars.id }}\"
                   class=\"cursor-pointer inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150 transform hover:-translate-y-1 hover:scale-105\">
                <svg class=\"-ml-1 mr-3 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12\"></path></svg>
                Choisir une image
            </label>

            {{ form_widget(form.photoFile, {'attr': {'class': 'sr-only'}}) }}
            {{ form_errors(form.photoFile) }}

            {# Afficher l'image existante si on est en mode édition et qu'une photo existe #}
            {% if guide_touristique.photoFilename is not null %} {# Utilise guide_touristique ici #}
                <div class=\"mt-4\">
                    <p class=\"block text-sm font-medium text-gray-700 mb-2\">Image actuelle :</p>
                    <img src=\"{{ asset('uploads/' ~ guide_touristique.photoFilename) }}\" alt=\"Photo du guide\" class=\"h-32 w-32 object-cover rounded-md shadow-md\">
                </div>
            {% endif %}
        </div>

        {# Champ Statut #}
        <div class=\"sm:col-span-2\"> {# Tu peux le mettre sur 2 colonnes si tu veux #}
             {{ form_row(form.statut) }}
        </div>


        {# --- Ajout du champ Mot de passe dans la grille --- #}
        {# Ce champ RepeatedType prendra 2 colonnes #}
        <div class=\"sm:col-span-2\">
            {{ form_row(form.password) }}
        </div>
        {# --- Fin de l'ajout --- #}


    </div> {# Fin du conteneur principal de la grille #}


    {# Conteneur pour les boutons #}
    <div class=\"flex justify-end mt-6 space-x-4\">

        {# Bouton Retour à la liste #}
        <a href=\"{{ path('app_guide_touristique_index') }}\" {# Assure-toi que le nom de la route est correct #}
           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
            Retour à la liste
        </a>

        {# Bouton de soumission #}
        <button type=\"submit\" class=\"inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Enregistrer
        </button>

    </div>

{{ form_end(form) }}
", "guide_touristique/_form.html.twig", "/var/www/html/templates/guide_touristique/_form.html.twig");
    }
}
