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

/* admin/product/index.html.twig */
class __TwigTemplate_21dff8c1a35771d79b8f57f8d63709b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_product_index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produkty";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <h1>Produkty</h1>
    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Zdjęcie</th>
                <th scope=\"col\">Stan magazynowy</th>
                <th scope=\"col\">EAN</th>
                <th scope=\"col\">SKU</th>
                <th scope=\"col\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                ";
        // line 19
        echo "                <th scope=\"col\">Cena netto</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "            ";
            $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 25), ".");
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                ";
            // line 28
            if ((twig_length_filter($this->env, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 28, $this->source); })())) > 1)) {
                // line 29
                echo "                    <td><img width=\"60px\" src=\"";
                echo twig_escape_filter($this->env, ((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, $context["product"], "gfxId", [], "any", false, false, false, 29)) . "/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 29)), "html", null, true);
                echo "\" alt=\"Product Image\"></td>
                ";
            } else {
                // line 31
                echo "                    <td><img width=\"60px\" src=\"";
                echo twig_escape_filter($this->env, (((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, $context["product"], "gfxId", [], "any", false, false, false, 31)) . "/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 31)) . ".jpg"), "html", null, true);
                echo "\" alt=\"Product Image\"></td>
                ";
            }
            // line 33
            echo "                ";
            if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 33))) {
                // line 34
                echo "                    <td>0</td>
                ";
            } else {
                // line 36
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 36), "stock", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                ";
            }
            // line 38
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "EAN", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "SKU", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                ";
            // line 42
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceWholesale", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                 <div class=\"item-actions\">
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                    </a>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            echo "
                    </a>
                  </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"5\" align=\"center\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
    <div class=\"navigation text-center\"> 
    ";
        // line 62
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 62, $this->source); })()));
        echo " 
    </div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 66
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 68
        echo "Dodaj nowy produkt";
        echo "
        </a>
    </div>
    <form action=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_products_command");
        echo "\" method=\"post\">
        <button class=\"btn btn-lg btn-block btn-success\" id=\"update-products-btn\"><i class=\"fa-solid fa-download\"></i> Aktualizuj produkty</button>
    </form>

    ";
        // line 75
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 77
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
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
        return "admin/product/index.html.twig";
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
        return array (  285 => 77,  280 => 75,  273 => 71,  267 => 68,  263 => 67,  260 => 66,  250 => 65,  237 => 62,  232 => 59,  223 => 56,  220 => 55,  209 => 49,  205 => 48,  200 => 46,  196 => 45,  189 => 42,  185 => 40,  181 => 39,  176 => 38,  170 => 36,  166 => 34,  163 => 33,  157 => 31,  151 => 29,  149 => 28,  145 => 27,  142 => 26,  139 => 25,  134 => 24,  127 => 20,  124 => 19,  120 => 17,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_product_index' %}

{% block title %}Produkty{% endblock %}

{% block main %}
    <h1>Produkty</h1>
    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Zdjęcie</th>
                <th scope=\"col\">Stan magazynowy</th>
                <th scope=\"col\">EAN</th>
                <th scope=\"col\">SKU</th>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                {# <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> {{ 'label.published_at'|trans }}</th> #}
                <th scope=\"col\">Cena netto</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for product in pagination %}
            {% set parts = product.image|split('.') %}
            <tr>
                <td>{{ product.productId }}</td>
                {% if parts|length > 1 %}
                    <td><img width=\"60px\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ product.gfxId ~ '/' ~ product.image }}\" alt=\"Product Image\"></td>
                {% else %}
                    <td><img width=\"60px\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ product.gfxId ~ '/' ~ product.image ~ '.jpg' }}\" alt=\"Product Image\"></td>
                {% endif %}
                {% if product.stock is null %}
                    <td>0</td>
                {% else %}
                    <td>{{ product.stock.stock }}</td>
                {% endif %}
                <td>{{ product.EAN }}</td>
                <td>{{ product.SKU }}</td>
                <td>{{ product.name }}</td>
                {# <td>{{ product.dateEdit|format_datetime('medium', 'short', '', 'GMT+1')}}</td> #}
                <td>{{ product.priceWholesale }}</td>
                <td class=\"text-right\">
                 <div class=\"item-actions\">
                    <a href=\"{{ path('app_product_show', {product_id: product.productId}) }}\" class=\"btn btn-sm btn-default\">
                        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                    </a>
                    <a href=\"{{ path('app_product_edit', {product_id: product.productId}) }}\" class=\"btn btn-sm btn-primary\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                    </a>
                  </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" align=\"center\">{{ 'post.no_posts_found'|trans }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"navigation text-center\"> 
    {{ knp_pagination_render(pagination) }} 
    </div> 
{% endblock %}
{% block sidebar %}
    <div class=\"section actions\">
        <a href=\"{{ path('app_product_new') }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'Dodaj nowy produkt' }}
        </a>
    </div>
    <form action=\"{{ path('app_update_products_command') }}\" method=\"post\">
        <button class=\"btn btn-lg btn-block btn-success\" id=\"update-products-btn\"><i class=\"fa-solid fa-download\"></i> Aktualizuj produkty</button>
    </form>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}

", "admin/product/index.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\admin\\product\\index.html.twig");
    }
}
