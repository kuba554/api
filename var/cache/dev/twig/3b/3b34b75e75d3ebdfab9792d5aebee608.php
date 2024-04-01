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

/* admin/product/edit.html.twig */
class __TwigTemplate_b693f81a29a1d0b68580ae7cb4a55749 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/edit.html.twig", 1);
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

        echo "Edycja produktu";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div style=\"\">
        <h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo " (id: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "productId", [], "any", false, false, false, 7), "html", null, true);
        echo ")</h4>
    </div>
    ";
        // line 9
        echo twig_include($this->env, $context, "admin/product/_form.html.twig", ["button_label" => "Update"]);
        echo "
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\">Powrót do listy</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "    ";
        $context["newId"] = (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })());
        // line 15
        echo "    ";
        echo twig_include($this->env, $context, "admin/product/sidebar.html.twig", ["id" => (isset($context["newId"]) || array_key_exists("newId", $context) ? $context["newId"] : (function () { throw new RuntimeError('Variable "newId" does not exist.', 15, $this->source); })())]);
        echo "
    <div class=\"sidebar-item\">
    ";
        // line 17
        $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17), ".");
        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 18, $this->source); })())) > 1)) {
            // line 19
            echo "        <td><img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, ((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "gfxId", [], "any", false, false, false, 19)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" alt=\"Product Image\"></td>
    ";
        } else {
            // line 21
            echo "        <td><img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, (((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "gfxId", [], "any", false, false, false, 21)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21)) . ".jpg"), "html", null, true);
            echo "\" alt=\"Product Image\"></td>
    ";
        }
        // line 23
        echo "    </div>
    <div class=\"sidebar-item\">
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_images_edit", ["product_id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "productId", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                Galeria
        </a>
    </div>
    <div class=\"sidebar-item\">
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_tree_edit", ["id" => 1]);
        echo "\">
                Kategoria dodatkowa
        </a>
    </div>
    ";
        // line 34
        if ((isset($context["stockVariants"]) || array_key_exists("stockVariants", $context) ? $context["stockVariants"] : (function () { throw new RuntimeError('Variable "stockVariants" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "        <div class=\"sidebar-item variants\">Warianty produktu
            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stockVariants"]) || array_key_exists("stockVariants", $context) ? $context["stockVariants"] : (function () { throw new RuntimeError('Variable "stockVariants" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "                <div><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_stock_edit", ["stock_id" => twig_get_attribute($this->env, $this->source, $context["item"], "stockId", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "stockId", [], "any", false, false, false, 37), "html", null, true);
                echo "]-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 37), "html", null, true);
                echo "</a></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
    ";
        }
        // line 41
        echo "    ";
        echo twig_include($this->env, $context, "admin/product/_delete_form.html.twig");
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
        return "admin/product/edit.html.twig";
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
        return array (  196 => 41,  192 => 39,  179 => 37,  175 => 36,  172 => 35,  170 => 34,  163 => 30,  155 => 25,  151 => 23,  145 => 21,  139 => 19,  136 => 18,  134 => 17,  128 => 15,  125 => 14,  115 => 13,  103 => 10,  99 => 9,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edycja produktu{% endblock %}

{% block main %}
    <div style=\"\">
        <h4>{{ product.name }} (id: {{ product.productId }})</h4>
    </div>
    {{ include('admin/product/_form.html.twig', {'button_label': 'Update'}) }}
    <a href=\"{{ path('app_product_index') }}\">Powrót do listy</a>
{% endblock %}

{% block sidebar %}
    {% set newId = id %}
    {{ include('admin/product/sidebar.html.twig', { 'id': newId}) }}
    <div class=\"sidebar-item\">
    {% set parts = product.image|split('.') %}
    {% if parts|length > 1 %}
        <td><img width=\"100%\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ product.gfxId ~ '/' ~ product.image }}\" alt=\"Product Image\"></td>
    {% else %}
        <td><img width=\"100%\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ product.gfxId ~ '/' ~ product.image ~ '.jpg' }}\" alt=\"Product Image\"></td>
    {% endif %}
    </div>
    <div class=\"sidebar-item\">
        <a href=\"{{ path('app_product_images_edit', {'product_id': product.productId }) }}\">
                Galeria
        </a>
    </div>
    <div class=\"sidebar-item\">
        <a href=\"{{ path('app_categories_tree_edit', {'id': 1}) }}\">
                Kategoria dodatkowa
        </a>
    </div>
    {% if stockVariants %}
        <div class=\"sidebar-item variants\">Warianty produktu
            {% for item in stockVariants %}
                <div><a href=\"{{ path('app_product_stock_edit', {'stock_id': item.stockId }) }}\">[{{ item.stockId }}]-{{ item.size }}</a></div>
            {% endfor %}
        </div>
    {% endif %}
    {{ include('admin/product/_delete_form.html.twig') }}
{% endblock %}
", "admin/product/edit.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\admin\\product\\edit.html.twig");
    }
}
