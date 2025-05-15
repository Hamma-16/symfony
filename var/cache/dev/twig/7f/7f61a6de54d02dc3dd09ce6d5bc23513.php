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

/* product/index.html.twig */
class __TwigTemplate_bc50c74786d38ad2fbfb06a69c8204d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        yield "Product index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <h1>Product index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            yield "                ";
            $context["cartItem"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["cart_items"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20), [], "array", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 20, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20), [], "array", false, false, false, 20)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 20, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20), [], "array", false, false, false, 20)) : (null));
            // line 21
            yield "                ";
            $context["alreadyInCart"] = (((isset($context["cartItem"]) || array_key_exists("cartItem", $context) ? $context["cartItem"] : (function () { throw new RuntimeError('Variable "cartItem" does not exist.', 21, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartItem"]) || array_key_exists("cartItem", $context) ? $context["cartItem"] : (function () { throw new RuntimeError('Variable "cartItem" does not exist.', 21, $this->source); })()), "quantity", [], "any", false, false, false, 21)) : (0));
            // line 22
            yield "                ";
            $context["maxReached"] = ((isset($context["alreadyInCart"]) || array_key_exists("alreadyInCart", $context) ? $context["alreadyInCart"] : (function () { throw new RuntimeError('Variable "alreadyInCart" does not exist.', 22, $this->source); })()) >= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 22));
            // line 23
            yield "
                <tr>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">show</a>

                        ";
            // line 32
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 33
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\">edit</a>
                        ";
            }
            // line 35
            yield "
                        <form action=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display:inline;\">
                            <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 37) - (isset($context["alreadyInCart"]) || array_key_exists("alreadyInCart", $context) ? $context["alreadyInCart"] : (function () { throw new RuntimeError('Variable "alreadyInCart" does not exist.', 37, $this->source); })())), "html", null, true);
            yield "\" required>
                            <button type=\"submit\"
                                    ";
            // line 39
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 39) == 0) || (isset($context["maxReached"]) || array_key_exists("maxReached", $context) ? $context["maxReached"] : (function () { throw new RuntimeError('Variable "maxReached" does not exist.', 39, $this->source); })()))) {
                yield "disabled";
            }
            yield ">
                                Add to Cart
                            </button>
                        </form>

                        ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 44) == 0)) {
                // line 45
                yield "                            <small style=\"color:red;\">Out of stock</small>
                        ";
            } elseif (            // line 46
(isset($context["maxReached"]) || array_key_exists("maxReached", $context) ? $context["maxReached"] : (function () { throw new RuntimeError('Variable "maxReached" does not exist.', 46, $this->source); })())) {
                // line 47
                yield "                            <small style=\"color:orange;\">Max quantity already in cart</small>
                        ";
            }
            // line 49
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
        </tbody>
    </table>
    ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
            yield "\">Create new</a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/index.html.twig";
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
        return array (  220 => 60,  218 => 59,  213 => 56,  204 => 52,  202 => 51,  196 => 49,  192 => 47,  190 => 46,  187 => 45,  185 => 44,  175 => 39,  170 => 37,  166 => 36,  163 => 35,  157 => 33,  155 => 32,  150 => 30,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 23,  126 => 22,  123 => 21,  120 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product index{% endblock %}

{% block body %}
    <h1>Product index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {% for product in products %}
                {% set cartItem = cart_items[product.id] ?? null %}
                {% set alreadyInCart = cartItem ? cartItem.quantity : 0 %}
                {% set maxReached = alreadyInCart >= product.stock %}

                <tr>
                    <td>{{ product.id }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.price }}</td>
                    <td>
                        <a href=\"{{ path('app_product_show', {'id': product.id}) }}\">show</a>

                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\">edit</a>
                        {% endif %}

                        <form action=\"{{ path('app_cart_add', {id: product.id}) }}\" method=\"POST\" style=\"display:inline;\">
                            <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"{{ product.stock - alreadyInCart }}\" required>
                            <button type=\"submit\"
                                    {% if product.stock == 0 or maxReached %}disabled{% endif %}>
                                Add to Cart
                            </button>
                        </form>

                        {% if product.stock == 0 %}
                            <small style=\"color:red;\">Out of stock</small>
                        {% elseif maxReached %}
                            <small style=\"color:orange;\">Max quantity already in cart</small>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
            {% endfor %}

        </tbody>
    </table>
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('app_product_new') }}\">Create new</a>
    {% endif %}
{% endblock %}
", "product/index.html.twig", "D:\\symfony\\templates\\product\\index.html.twig");
    }
}
