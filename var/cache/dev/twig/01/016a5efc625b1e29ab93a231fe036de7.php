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

/* admin/product/_product.html.twig */
class __TwigTemplate_b2bb4347ff44830b9a9fd4974ad67da5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/_product.html.twig"));

        // line 1
        echo "<article class=\"post\">
    <h2>
        <a class=\"post-metadata-title\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["product_id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "productId", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\">
            ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
        </a>
    </h2>
    ";
        // line 7
        $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "image", [], "any", false, false, false, 7), ".");
        // line 8
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 8, $this->source); })())) > 1)) {
            // line 9
            echo "        <p class=\"post-metadata-image\"><img width=\"60px\" src=\"";
            echo twig_escape_filter($this->env, ((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "gfxId", [], "any", false, false, false, 9)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)), "html", null, true);
            echo "\" alt=\"Product Image\"></p>
    ";
        } else {
            // line 11
            echo "        <p class=\"post-metadata-image\"><img width=\"60px\" src=\"";
            echo twig_escape_filter($this->env, (((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "gfxId", [], "any", false, false, false, 11)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11)) . ".jpg"), "html", null, true);
            echo "\" alt=\"Product Image\"></p>
    ";
        }
        // line 13
        echo "    <p class=\"post-metadata\">
        <span class=\"metadata\"><i>ID: </i>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "productId", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "dateEdit", [], "any", false, false, false, 15), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i>SKU:</i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "sku", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i>EAN:</i>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "ean", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
    </p>

    <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>

    ";
        // line 23
        echo "</article>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/product/_product.html.twig";
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
        return array (  100 => 23,  95 => 20,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  74 => 13,  68 => 11,  62 => 9,  59 => 8,  57 => 7,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"post\">
    <h2>
        <a class=\"post-metadata-title\" href=\"{{ path('app_product_edit', {product_id:product.productId}) }}\">
            {{ product.name }}
        </a>
    </h2>
    {% set parts = product.image|split('.') %}
    {% if parts|length > 1 %}
        <p class=\"post-metadata-image\"><img width=\"60px\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ product.gfxId ~ '/' ~ product.image }}\" alt=\"Product Image\"></p>
    {% else %}
        <p class=\"post-metadata-image\"><img width=\"60px\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ product.gfxId ~ '/' ~ product.image ~ '.jpg' }}\" alt=\"Product Image\"></p>
    {% endif %}
    <p class=\"post-metadata\">
        <span class=\"metadata\"><i>ID: </i>{{ product.productId }}</span>
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ product.dateEdit|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <span class=\"metadata\"><i>SKU:</i> {{ product.sku }}</span>
        <span class=\"metadata\"><i>EAN:</i>{{ product.ean }}</span>
    </p>

    <p>{{ product.name }}</p>

    {# {{ include('blog/_post_tags.html.twig') }} #}
</article>
", "admin/product/_product.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\admin\\product\\_product.html.twig");
    }
}
