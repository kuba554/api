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

/* product_stock/show.html.twig */
class __TwigTemplate_2968a6b08bacfd33def0b81cd1b42bc7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_stock/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_stock/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_stock/show.html.twig", 1);
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

        echo "ProductStock";
        
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
        echo "    <h1>ProductStock</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Stock_id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 16, $this->source); })()), "stockId", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product_id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 20, $this->source); })()), "productId", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Extended</th>
                <td>";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 28, $this->source); })()), "extended", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Price_type</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 32, $this->source); })()), "priceType", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Active</th>
                <td>";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 36, $this->source); })()), "active", [], "any", false, false, false, 36)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Default_stock</th>
                <td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 40, $this->source); })()), "defaultStock", [], "any", false, false, false, 40)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 44, $this->source); })()), "stock", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Warehouses</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 48, $this->source); })()), "warehouses", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 48, $this->source); })()), "warehouses", [], "any", false, false, false, 48), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Warn_level</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 52, $this->source); })()), "warnLevel", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sold</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 56, $this->source); })()), "sold", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 60, $this->source); })()), "code", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ean</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 64, $this->source); })()), "ean", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 68, $this->source); })()), "weight", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Weight_type</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 72, $this->source); })()), "weightType", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Availiability_id</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 76, $this->source); })()), "availiabilityId", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Delivery_id</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 80, $this->source); })()), "deliveryId", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gfx_id</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 84, $this->source); })()), "gfxId", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>";
        // line 88
        ((twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 88, $this->source); })()), "options", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 88, $this->source); })()), "options", [], "any", false, false, false, 88), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Package</th>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 92, $this->source); })()), "package", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price_wholesale</th>
                <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 96, $this->source); })()), "priceWholesale", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price_special</th>
                <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 100, $this->source); })()), "priceSpecial", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price_type_wholesale</th>
                <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 104, $this->source); })()), "priceTypeWholesale", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price_type_special</th>
                <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 108, $this->source); })()), "priceTypeSpecial", [], "any", false, false, false, 108), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price_buying</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 112, $this->source); })()), "priceBuying", [], "any", false, false, false, 112), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calculation_unit_id</th>
                <td>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 116, $this->source); })()), "calculationUnitId", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calculation_unit_ratio</th>
                <td>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 120, $this->source); })()), "calculationUnitRatio", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historical_lowest_price</th>
                <td>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 124, $this->source); })()), "historicalLowestPrice", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wholesale_historical_lowest_price</th>
                <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 128, $this->source); })()), "wholesaleHistoricalLowestPrice", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Special_historical_lowest_price</th>
                <td>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 132, $this->source); })()), "specialHistoricalLowestPrice", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_stock_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_stock_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product_stock"]) || array_key_exists("product_stock", $context) ? $context["product_stock"] : (function () { throw new RuntimeError('Variable "product_stock" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 141
        echo twig_include($this->env, $context, "product_stock/_delete_form.html.twig");
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
        return "product_stock/show.html.twig";
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
        return array (  324 => 141,  319 => 139,  314 => 137,  306 => 132,  299 => 128,  292 => 124,  285 => 120,  278 => 116,  271 => 112,  264 => 108,  257 => 104,  250 => 100,  243 => 96,  236 => 92,  229 => 88,  222 => 84,  215 => 80,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProductStock{% endblock %}

{% block body %}
    <h1>ProductStock</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product_stock.id }}</td>
            </tr>
            <tr>
                <th>Stock_id</th>
                <td>{{ product_stock.stockId }}</td>
            </tr>
            <tr>
                <th>Product_id</th>
                <td>{{ product_stock.productId }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product_stock.price }}</td>
            </tr>
            <tr>
                <th>Extended</th>
                <td>{{ product_stock.extended ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Price_type</th>
                <td>{{ product_stock.priceType }}</td>
            </tr>
            <tr>
                <th>Active</th>
                <td>{{ product_stock.active ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Default_stock</th>
                <td>{{ product_stock.defaultStock ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>{{ product_stock.stock }}</td>
            </tr>
            <tr>
                <th>Warehouses</th>
                <td>{{ product_stock.warehouses ? product_stock.warehouses|join(', ') : '' }}</td>
            </tr>
            <tr>
                <th>Warn_level</th>
                <td>{{ product_stock.warnLevel }}</td>
            </tr>
            <tr>
                <th>Sold</th>
                <td>{{ product_stock.sold }}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ product_stock.code }}</td>
            </tr>
            <tr>
                <th>Ean</th>
                <td>{{ product_stock.ean }}</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>{{ product_stock.weight }}</td>
            </tr>
            <tr>
                <th>Weight_type</th>
                <td>{{ product_stock.weightType }}</td>
            </tr>
            <tr>
                <th>Availiability_id</th>
                <td>{{ product_stock.availiabilityId }}</td>
            </tr>
            <tr>
                <th>Delivery_id</th>
                <td>{{ product_stock.deliveryId }}</td>
            </tr>
            <tr>
                <th>Gfx_id</th>
                <td>{{ product_stock.gfxId }}</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>{{ product_stock.options ? product_stock.options|join(', ') : '' }}</td>
            </tr>
            <tr>
                <th>Package</th>
                <td>{{ product_stock.package }}</td>
            </tr>
            <tr>
                <th>Price_wholesale</th>
                <td>{{ product_stock.priceWholesale }}</td>
            </tr>
            <tr>
                <th>Price_special</th>
                <td>{{ product_stock.priceSpecial }}</td>
            </tr>
            <tr>
                <th>Price_type_wholesale</th>
                <td>{{ product_stock.priceTypeWholesale }}</td>
            </tr>
            <tr>
                <th>Price_type_special</th>
                <td>{{ product_stock.priceTypeSpecial }}</td>
            </tr>
            <tr>
                <th>Price_buying</th>
                <td>{{ product_stock.priceBuying }}</td>
            </tr>
            <tr>
                <th>Calculation_unit_id</th>
                <td>{{ product_stock.calculationUnitId }}</td>
            </tr>
            <tr>
                <th>Calculation_unit_ratio</th>
                <td>{{ product_stock.calculationUnitRatio }}</td>
            </tr>
            <tr>
                <th>Historical_lowest_price</th>
                <td>{{ product_stock.historicalLowestPrice }}</td>
            </tr>
            <tr>
                <th>Wholesale_historical_lowest_price</th>
                <td>{{ product_stock.wholesaleHistoricalLowestPrice }}</td>
            </tr>
            <tr>
                <th>Special_historical_lowest_price</th>
                <td>{{ product_stock.specialHistoricalLowestPrice }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_product_stock_index') }}\">back to list</a>

    <a href=\"{{ path('app_product_stock_edit', {'id': product_stock.id}) }}\">edit</a>

    {{ include('product_stock/_delete_form.html.twig') }}
{% endblock %}
", "product_stock/show.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\product_stock\\show.html.twig");
    }
}
