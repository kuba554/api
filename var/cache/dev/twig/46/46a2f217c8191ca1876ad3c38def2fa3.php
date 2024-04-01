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

/* product_stock/index.html.twig */
class __TwigTemplate_76fae10f610d5006f08f5c525e3a47c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_stock/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_stock/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_stock/index.html.twig", 1);
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

        echo "ProductStock index";
        
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
        echo "    <h1>ProductStock index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Stock_id</th>
                <th>Product_id</th>
                <th>Price</th>
                <th>Extended</th>
                <th>Price_type</th>
                <th>Active</th>
                <th>Default_stock</th>
                <th>Stock</th>
                <th>Warehouses</th>
                <th>Warn_level</th>
                <th>Sold</th>
                <th>Code</th>
                <th>Ean</th>
                <th>Weight</th>
                <th>Weight_type</th>
                <th>Availiability_id</th>
                <th>Delivery_id</th>
                <th>Gfx_id</th>
                <th>Options</th>
                <th>Package</th>
                <th>Price_wholesale</th>
                <th>Price_special</th>
                <th>Price_type_wholesale</th>
                <th>Price_type_special</th>
                <th>Price_buying</th>
                <th>Calculation_unit_id</th>
                <th>Calculation_unit_ratio</th>
                <th>Historical_lowest_price</th>
                <th>Wholesale_historical_lowest_price</th>
                <th>Special_historical_lowest_price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_stocks"]) || array_key_exists("product_stocks", $context) ? $context["product_stocks"] : (function () { throw new RuntimeError('Variable "product_stocks" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product_stock"]) {
            // line 47
            echo "            <tr>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "stockId", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "productId", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "price", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo ((twig_get_attribute($this->env, $this->source, $context["product_stock"], "extended", [], "any", false, false, false, 52)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "priceType", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo ((twig_get_attribute($this->env, $this->source, $context["product_stock"], "active", [], "any", false, false, false, 54)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 55
            echo ((twig_get_attribute($this->env, $this->source, $context["product_stock"], "defaultStock", [], "any", false, false, false, 55)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "stock", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["product_stock"], "warehouses", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["product_stock"], "warehouses", [], "any", false, false, false, 57), ", "), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "warnLevel", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "sold", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "code", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "ean", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "weight", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "weightType", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "availiabilityId", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "deliveryId", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "gfxId", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["product_stock"], "options", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["product_stock"], "options", [], "any", false, false, false, 67), ", "), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "package", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "priceWholesale", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "priceSpecial", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "priceTypeWholesale", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "priceTypeSpecial", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "priceBuying", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "calculationUnitId", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "calculationUnitRatio", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "historicalLowestPrice", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "wholesaleHistoricalLowestPrice", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_stock"], "specialHistoricalLowestPrice", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_stock_show", ["stock_id" => twig_get_attribute($this->env, $this->source, $context["product_stock"], "stockId", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_stock_edit", ["stock_id" => twig_get_attribute($this->env, $this->source, $context["product_stock"], "stockId", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "            <tr>
                <td colspan=\"32\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_stock_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product_stock/index.html.twig";
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
        return array (  290 => 92,  285 => 89,  276 => 85,  267 => 81,  263 => 80,  258 => 78,  254 => 77,  250 => 76,  246 => 75,  242 => 74,  238 => 73,  234 => 72,  230 => 71,  226 => 70,  222 => 69,  218 => 68,  214 => 67,  210 => 66,  206 => 65,  202 => 64,  198 => 63,  194 => 62,  190 => 61,  186 => 60,  182 => 59,  178 => 58,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  135 => 47,  130 => 46,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProductStock index{% endblock %}

{% block body %}
    <h1>ProductStock index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Stock_id</th>
                <th>Product_id</th>
                <th>Price</th>
                <th>Extended</th>
                <th>Price_type</th>
                <th>Active</th>
                <th>Default_stock</th>
                <th>Stock</th>
                <th>Warehouses</th>
                <th>Warn_level</th>
                <th>Sold</th>
                <th>Code</th>
                <th>Ean</th>
                <th>Weight</th>
                <th>Weight_type</th>
                <th>Availiability_id</th>
                <th>Delivery_id</th>
                <th>Gfx_id</th>
                <th>Options</th>
                <th>Package</th>
                <th>Price_wholesale</th>
                <th>Price_special</th>
                <th>Price_type_wholesale</th>
                <th>Price_type_special</th>
                <th>Price_buying</th>
                <th>Calculation_unit_id</th>
                <th>Calculation_unit_ratio</th>
                <th>Historical_lowest_price</th>
                <th>Wholesale_historical_lowest_price</th>
                <th>Special_historical_lowest_price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product_stock in product_stocks %}
            <tr>
                <td>{{ product_stock.id }}</td>
                <td>{{ product_stock.stockId }}</td>
                <td>{{ product_stock.productId }}</td>
                <td>{{ product_stock.price }}</td>
                <td>{{ product_stock.extended ? 'Yes' : 'No' }}</td>
                <td>{{ product_stock.priceType }}</td>
                <td>{{ product_stock.active ? 'Yes' : 'No' }}</td>
                <td>{{ product_stock.defaultStock ? 'Yes' : 'No' }}</td>
                <td>{{ product_stock.stock }}</td>
                <td>{{ product_stock.warehouses ? product_stock.warehouses|join(', ') : '' }}</td>
                <td>{{ product_stock.warnLevel }}</td>
                <td>{{ product_stock.sold }}</td>
                <td>{{ product_stock.code }}</td>
                <td>{{ product_stock.ean }}</td>
                <td>{{ product_stock.weight }}</td>
                <td>{{ product_stock.weightType }}</td>
                <td>{{ product_stock.availiabilityId }}</td>
                <td>{{ product_stock.deliveryId }}</td>
                <td>{{ product_stock.gfxId }}</td>
                <td>{{ product_stock.options ? product_stock.options|join(', ') : '' }}</td>
                <td>{{ product_stock.package }}</td>
                <td>{{ product_stock.priceWholesale }}</td>
                <td>{{ product_stock.priceSpecial }}</td>
                <td>{{ product_stock.priceTypeWholesale }}</td>
                <td>{{ product_stock.priceTypeSpecial }}</td>
                <td>{{ product_stock.priceBuying }}</td>
                <td>{{ product_stock.calculationUnitId }}</td>
                <td>{{ product_stock.calculationUnitRatio }}</td>
                <td>{{ product_stock.historicalLowestPrice }}</td>
                <td>{{ product_stock.wholesaleHistoricalLowestPrice }}</td>
                <td>{{ product_stock.specialHistoricalLowestPrice }}</td>
                <td>
                    <a href=\"{{ path('app_product_stock_show', {'stock_id': product_stock.stockId}) }}\">show</a>
                    <a href=\"{{ path('app_product_stock_edit', {'stock_id': product_stock.stockId}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"32\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_product_stock_new') }}\">Create new</a>
{% endblock %}
", "product_stock/index.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\product_stock\\index.html.twig");
    }
}
