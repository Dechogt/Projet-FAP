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

/* visite/show.html.twig */
class __TwigTemplate_631c789b054770819802bd2ed951c415 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/show.html.twig"));

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

        yield "Visite";
        
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

        // line 6
        yield "    <h1>Visite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 16, $this->source); })()), "photo", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 20, $this->source); })()), "pays", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 24, $this->source); })()), "lieu", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 28
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>HeureDebut</th>
                <td>";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 32, $this->source); })()), "heureDebut", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 32, $this->source); })()), "heureDebut", [], "any", false, false, false, 32), "H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 36, $this->source); })()), "duree", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>HeureFin</th>
                <td>";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 40, $this->source); })()), "heureFin", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 40, $this->source); })()), "heureFin", [], "any", false, false, false, 40), "H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 44, $this->source); })()), "commentaire", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "visite/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "visite/show.html.twig";
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
        return array (  167 => 53,  162 => 51,  157 => 49,  149 => 44,  142 => 40,  135 => 36,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Visite{% endblock %}

{% block body %}
    <h1>Visite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ visite.id }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ visite.photo }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ visite.pays }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ visite.lieu }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ visite.date ? visite.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>HeureDebut</th>
                <td>{{ visite.heureDebut ? visite.heureDebut|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ visite.duree }}</td>
            </tr>
            <tr>
                <th>HeureFin</th>
                <td>{{ visite.heureFin ? visite.heureFin|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ visite.commentaire }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_visite_index') }}\">back to list</a>

    <a href=\"{{ path('app_visite_edit', {'id': visite.id}) }}\">edit</a>

    {{ include('visite/_delete_form.html.twig') }}
{% endblock %}
", "visite/show.html.twig", "/var/www/html/templates/visite/show.html.twig");
    }
}
