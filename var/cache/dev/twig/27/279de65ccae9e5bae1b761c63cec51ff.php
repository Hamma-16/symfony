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

/* registration/register.html.twig */
class __TwigTemplate_6e9803e8eadaf0d2b9ad12068a5d495e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Inscription
";
        
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
        yield "\t<div class=\"auth-container\">
\t\t<div class=\"card auth-card shadow-sm\">
\t\t\t<div class=\"card-header text-center bg-white\">
\t\t\t\t<h2>
\t\t\t\t\t<i class=\"fas fa-user-plus me-2\"></i>Créer un compte</h2>
\t\t\t</div>

\t\t\t<div class=\"card-body\">
\t\t\t\t";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

\t\t\t\t";
        // line 18
        yield "\t\t\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18)) > 0)) {
            // line 19
            yield "\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 21
                yield "\t\t\t\t\t\t\t<p class=\"mb-0\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 21), "html", null, true);
                yield "</p>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        yield "
\t\t\t\t<div class=\"form-group input-icon mb-3\">
\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse email"]]);
        // line 33
        yield "
\t\t\t\t\t";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group input-icon mb-3\">
\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "phone_number", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+331234567890"]]);
        // line 44
        yield "
\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "phone_number", [], "any", false, false, false, 45), 'errors');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group input-icon mb-3\">
\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        // line 55
        yield "
\t\t\t\t\t";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'errors');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group input-icon mb-4\">
\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), "second", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Répéter le mot de passe"]]);
        // line 66
        yield "
\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), "second", [], "any", false, false, false, 67), 'errors');
        yield "
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>

\t\t\t\t";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "registration/register.html.twig";
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
        return array (  196 => 72,  188 => 67,  185 => 66,  183 => 61,  175 => 56,  172 => 55,  170 => 50,  162 => 45,  159 => 44,  157 => 39,  149 => 34,  146 => 33,  144 => 28,  139 => 25,  135 => 23,  126 => 21,  122 => 20,  119 => 19,  116 => 18,  111 => 15,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription
{% endblock %}

{% block body %}
\t<div class=\"auth-container\">
\t\t<div class=\"card auth-card shadow-sm\">
\t\t\t<div class=\"card-header text-center bg-white\">
\t\t\t\t<h2>
\t\t\t\t\t<i class=\"fas fa-user-plus me-2\"></i>Créer un compte</h2>
\t\t\t</div>

\t\t\t<div class=\"card-body\">
\t\t\t\t{{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}

\t\t\t\t{# Display global errors (e.g., duplicate email) #}
\t\t\t\t{% if registrationForm.vars.errors|length > 0 %}
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t{% for error in registrationForm.vars.errors %}
\t\t\t\t\t\t\t<p class=\"mb-0\">{{ error.message }}</p>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"form-group input-icon mb-3\">
\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t{{ form_widget(registrationForm.email, {
\t\t\t\t\t\t'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'placeholder': 'Adresse email'
\t\t\t\t\t\t}
\t\t\t\t\t}) }}
\t\t\t\t\t{{ form_errors(registrationForm.email) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group input-icon mb-3\">
\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t{{ form_widget(registrationForm.phone_number, {
\t\t\t\t\t\t'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'placeholder': '+331234567890'
\t\t\t\t\t\t}
\t\t\t\t\t}) }}
\t\t\t\t\t{{ form_errors(registrationForm.phone_number) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group input-icon mb-3\">
\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t{{ form_widget(registrationForm.plainPassword.first, {
\t\t\t\t\t\t'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'placeholder': 'Mot de passe'
\t\t\t\t\t\t}
\t\t\t\t\t}) }}
\t\t\t\t\t{{ form_errors(registrationForm.plainPassword.first) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group input-icon mb-4\">
\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t{{ form_widget(registrationForm.plainPassword.second, {
\t\t\t\t\t\t'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'placeholder': 'Répéter le mot de passe'
\t\t\t\t\t\t}
\t\t\t\t\t}) }}
\t\t\t\t\t{{ form_errors(registrationForm.plainPassword.second) }}
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>

\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "registration/register.html.twig", "D:\\symfony\\templates\\registration\\register.html.twig");
    }
}
