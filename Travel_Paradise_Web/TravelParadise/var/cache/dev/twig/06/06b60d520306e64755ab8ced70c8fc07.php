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

/* components/welcome_modal.html.twig */
class __TwigTemplate_07305067348c5bee3f76f6bdfcc21411 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/welcome_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/welcome_modal.html.twig"));

        // line 2
        yield "
";
        // line 5
        yield "
";
        // line 7
        yield "<div id=\"welcome-modal\" class=\"fixed inset-0 z-50 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
  <div class=\"flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0\">
    ";
        // line 10
        yield "    <div class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75\" aria-hidden=\"true\"></div>

    ";
        // line 13
        yield "    <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\" aria-hidden=\"true\">&#8203;</span>

    ";
        // line 16
        yield "    <div class=\"relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6\">
      <div>
        ";
        // line 19
        yield "        <div class=\"flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full\">
          <svg class=\"w-6 h-6 text-green-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
          </svg>
        </div>
        ";
        // line 25
        yield "        <div class=\"mt-3 text-center sm:mt-5\">
          <h3 class=\"text-lg font-medium leading-6 text-gray-900\" id=\"modal-title\">Bienvenue !</h3>
          <div class=\"mt-2\">
            ";
        // line 29
        yield "            <p class=\"text-sm text-gray-500\">Nous sommes heureux de vous revoir, <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</strong> !</p>
            <p class=\"text-sm text-gray-500 mt-2\">Cliquez sur \"OK\" pour commencer l'administration</p>
          </div>
        </div>
      </div>
      ";
        // line 35
        yield "      <div class=\"mt-5 sm:mt-6\">
        <button type=\"button\" id=\"welcome-modal-ok-button\" class=\"inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm\">
          OK
        </button>
      </div>
    </div>
  </div>
</div>
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
        return "components/welcome_modal.html.twig";
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
        return array (  91 => 35,  82 => 29,  77 => 25,  70 => 19,  66 => 16,  62 => 13,  58 => 10,  54 => 7,  51 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/welcome_modal.html.twig #}

{# Ce template définit l'apparence de la modale de bienvenue #}
{# Il utilise des classes Tailwind CSS. Assure-toi que Tailwind est configuré. #}

{# La modale elle-même. Elle est cachée par défaut (classe 'hidden') #}
<div id=\"welcome-modal\" class=\"fixed inset-0 z-50 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
  <div class=\"flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0\">
    {# L'overlay gris semi-transparent derrière la modale #}
    <div class=\"fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75\" aria-hidden=\"true\"></div>

    {# Un élément pour aider à centrer la modale verticalement #}
    <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\" aria-hidden=\"true\">&#8203;</span>

    {# Le conteneur principal du contenu de la modale #}
    <div class=\"relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6\">
      <div>
        {# L'icône de bienvenue (un cercle vert avec une coche) #}
        <div class=\"flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full\">
          <svg class=\"w-6 h-6 text-green-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
          </svg>
        </div>
        {# Le texte de bienvenue #}
        <div class=\"mt-3 text-center sm:mt-5\">
          <h3 class=\"text-lg font-medium leading-6 text-gray-900\" id=\"modal-title\">Bienvenue !</h3>
          <div class=\"mt-2\">
            {# On utilise la variable userName passée par le contrôleur via le template parent #}
            <p class=\"text-sm text-gray-500\">Nous sommes heureux de vous revoir, <strong>{{ userName }}</strong> !</p>
            <p class=\"text-sm text-gray-500 mt-2\">Cliquez sur \"OK\" pour commencer l'administration</p>
          </div>
        </div>
      </div>
      {# Le bouton \"OK\" #}
      <div class=\"mt-5 sm:mt-6\">
        <button type=\"button\" id=\"welcome-modal-ok-button\" class=\"inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm\">
          OK
        </button>
      </div>
    </div>
  </div>
</div>
", "components/welcome_modal.html.twig", "/var/www/html/templates/components/welcome_modal.html.twig");
    }
}
