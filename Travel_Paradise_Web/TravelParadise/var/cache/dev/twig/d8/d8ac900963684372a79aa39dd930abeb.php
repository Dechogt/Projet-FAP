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

/* visite/_form.html.twig */
class __TwigTemplate_d90e722e8fd7f8be327ac0129e4527f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/_form.html.twig"));

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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "pays", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Pays"]);
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "pays", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "pays", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>

        ";
        // line 18
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "lieu", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Lieu"]);
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lieu", [], "any", false, false, false, 21), 'errors');
        yield "
        </div>

        ";
        // line 25
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Date"]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), 'errors');
        yield "
        </div>

        ";
        // line 32
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "heureDebut", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Heure de début"]);
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "heureDebut", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "heureDebut", [], "any", false, false, false, 35), 'errors');
        yield "
        </div>

        ";
        // line 39
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "duree", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Durée (en heures)"]);
        yield "
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "duree", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "duree", [], "any", false, false, false, 42), 'errors');
        yield "
        </div>

        ";
        // line 46
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "guide", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Guide touristique"]);
        yield "
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "guide", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "guide", [], "any", false, false, false, 49), 'errors');
        yield "
        </div>

        ";
        // line 53
        yield "        <div class=\"sm:col-span-2\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "commentaire", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Commentaire"]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "commentaire", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "commentaire", [], "any", false, false, false, 56), 'errors');
        yield "
        </div>

        ";
        // line 60
        yield "        <div class=\"sm:col-span-2\">
            <label for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "photoFile", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\"
                   class=\"cursor-pointer inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150 transform hover:-translate-y-1 hover:scale-105\">
                <svg class=\"-ml-1 mr-3 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12\"></path></svg>
                Choisir une image
            </label>

            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "photoFile", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "sr-only"]]);
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "photoFile", [], "any", false, false, false, 68), 'errors');
        yield "

            ";
        // line 71
        yield "            ";
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 71, $this->source); })()), "photoFilename", [], "any", false, false, false, 71))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                <div class=\"mt-4\">
                    <p class=\"block text-sm font-medium text-gray-700 mb-2\">Image actuelle :</p>
                    <img src=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 74, $this->source); })()), "photoFilename", [], "any", false, false, false, 74))), "html", null, true);
            yield "\" alt=\"Photo de la visite\" class=\"h-32 w-32 object-cover rounded-md shadow-md\">
                </div>
            ";
        }
        // line 77
        yield "        </div>

        ";
        // line 80
        yield "        ";
        // line 81
        yield "        <div class=\"sm:col-span-1\">
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "prix", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Prix"]);
        yield "
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "prix", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "prix", [], "any", false, false, false, 84), 'errors');
        yield "
        </div>

        <div class=\"sm:col-span-1\">
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "nombreMaxVisiteurs", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Nombre maximum de visiteurs"]);
        yield "
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "nombreMaxVisiteurs", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"]]);
        yield "
            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "nombreMaxVisiteurs", [], "any", false, false, false, 90), 'errors');
        yield "
        </div>
        ";
        // line 93
        yield "
    </div> ";
        // line 95
        yield "

    ";
        // line 98
        yield "    <div class=\"flex justify-end mt-6 space-x-4\">

        ";
        // line 101
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_index");
        yield "\"
           class=\"inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"></path></svg>
            Retour à la liste
        </a>

        ";
        // line 108
        yield "        <button type=\"submit\" class=\"inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
            Enregistrer
        </button>

    </div>

";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_end');
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
        return "visite/_form.html.twig";
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
        return array (  284 => 114,  276 => 108,  266 => 101,  262 => 98,  258 => 95,  255 => 93,  250 => 90,  246 => 89,  242 => 88,  235 => 84,  231 => 83,  227 => 82,  224 => 81,  222 => 80,  218 => 77,  212 => 74,  208 => 72,  205 => 71,  200 => 68,  196 => 67,  187 => 61,  184 => 60,  178 => 56,  174 => 55,  170 => 54,  167 => 53,  161 => 49,  157 => 48,  153 => 47,  150 => 46,  144 => 42,  140 => 41,  136 => 40,  133 => 39,  127 => 35,  123 => 34,  119 => 33,  116 => 32,  110 => 28,  106 => 27,  102 => 26,  99 => 25,  93 => 21,  89 => 20,  85 => 19,  82 => 18,  76 => 14,  72 => 13,  68 => 12,  65 => 11,  61 => 8,  56 => 5,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/visite/_form.html.twig #}

{{ form_start(form) }}

    {{ form_errors(form) }}

    {# Conteneur principal de la grille #}
    <div class=\"grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8\">

        {# Champ Pays #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.pays, 'Pays', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.pays, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.pays) }}
        </div>

        {# Champ Lieu #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.lieu, 'Lieu', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.lieu, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.lieu) }}
        </div>

        {# Champ Date #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.date, 'Date', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.date, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.date) }}
        </div>

        {# Champ Heure de début #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.heureDebut, 'Heure de début', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.heureDebut, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.heureDebut) }}
        </div>

        {# Champ Durée #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.duree, 'Durée (en heures)', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.duree, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.duree) }}
        </div>

        {# Champ Guide #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.guide, 'Guide touristique', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.guide, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.guide) }}
        </div>

        {# Champ Commentaire (sur 2 colonnes) #}
        <div class=\"sm:col-span-2\">
            {{ form_label(form.commentaire, 'Commentaire', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.commentaire, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.commentaire) }}
        </div>

        {# Champ Photo (sur 2 colonnes) #}
        <div class=\"sm:col-span-2\">
            <label for=\"{{ form.photoFile.vars.id }}\"
                   class=\"cursor-pointer inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150 transform hover:-translate-y-1 hover:scale-105\">
                <svg class=\"-ml-1 mr-3 h-5 w-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12\"></path></svg>
                Choisir une image
            </label>

            {{ form_widget(form.photoFile, {'attr': {'class': 'sr-only'}}) }}
            {{ form_errors(form.photoFile) }}

            {# Afficher l'image existante si on est en mode édition et qu'une photo existe #}
            {% if visite.photoFilename is not null %}
                <div class=\"mt-4\">
                    <p class=\"block text-sm font-medium text-gray-700 mb-2\">Image actuelle :</p>
                    <img src=\"{{ asset('uploads/' ~ visite.photoFilename) }}\" alt=\"Photo de la visite\" class=\"h-32 w-32 object-cover rounded-md shadow-md\">
                </div>
            {% endif %}
        </div>

        {# --- Ajout des champs Prix et Nombre maximum de visiteurs dans la grille --- #}
        {# Ces champs seront sur une nouvelle ligne, chacun prenant une colonne #}
        <div class=\"sm:col-span-1\">
            {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.prix, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.prix) }}
        </div>

        <div class=\"sm:col-span-1\">
            {{ form_label(form.nombreMaxVisiteurs, 'Nombre maximum de visiteurs', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
            {{ form_widget(form.nombreMaxVisiteurs, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm'}}) }}
            {{ form_errors(form.nombreMaxVisiteurs) }}
        </div>
        {# --- Fin de l'ajout --- #}

    </div> {# Fin du conteneur principal de la grille #}


    {# Conteneur pour les boutons #}
    <div class=\"flex justify-end mt-6 space-x-4\">

        {# Bouton Retour à la liste #}
        <a href=\"{{ path('app_visite_index') }}\"
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
", "visite/_form.html.twig", "/var/www/html/templates/visite/_form.html.twig");
    }
}
