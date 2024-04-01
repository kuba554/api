<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product_images/show.html.twig */
class __TwigTemplate_22477dbd356f312d8091632ad9877047 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_images/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_images/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_images/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ProductImages";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ProductImages</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gfx_id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 16, $this->source); })()), "gfxId", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product_id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 20, $this->source); })()), "productId", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Main</th>
                <td>";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 24, $this->source); })()), "main", [], "any", false, false, false, 24)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Order_sord</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 28, $this->source); })()), "orderSord", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Unic_name</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 36, $this->source); })()), "unicName", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hidden</th>
                <td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 40, $this->source); })()), "hidden", [], "any", false, false, false, 40)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Extension</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 44, $this->source); })()), "extension", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Translations</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 48, $this->source); })()), "translations", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 48, $this->source); })()), "translations", [], "any", false, false, false, 48), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_images_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_images_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product_image"]) || array_key_exists("product_image", $context) ? $context["product_image"] : (function () { throw new RuntimeError('Variable "product_image" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "product_images/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product_images/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 57,  172 => 55,  167 => 53,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProductImages{% endblock %}

{% block body %}
    <h1>ProductImages</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product_image.id }}</td>
            </tr>
            <tr>
                <th>Gfx_id</th>
                <td>{{ product_image.gfxId }}</td>
            </tr>
            <tr>
                <th>Product_id</th>
                <td>{{ product_image.productId }}</td>
            </tr>
            <tr>
                <th>Main</th>
                <td>{{ product_image.main ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Order_sord</th>
                <td>{{ product_image.orderSord }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ product_image.name }}</td>
            </tr>
            <tr>
                <th>Unic_name</th>
                <td>{{ product_image.unicName }}</td>
            </tr>
            <tr>
                <th>Hidden</th>
                <td>{{ product_image.hidden ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Extension</th>
                <td>{{ product_image.extension }}</td>
            </tr>
            <tr>
                <th>Translations</th>
                <td>{{ product_image.translations ? product_image.translations|join(', ') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_product_images_index') }}\">back to list</a>

    <a href=\"{{ path('app_product_images_edit', {'id': product_image.id}) }}\">edit</a>

    {{ include('product_images/_delete_form.html.twig') }}
{% endblock %}
", "product_images/show.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\product_images\\show.html.twig");
    }
}
