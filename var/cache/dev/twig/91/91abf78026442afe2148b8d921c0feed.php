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

/* product_images/edit.html.twig */
class __TwigTemplate_0c43144418cc6296d6a4542561ad3af1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_images/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_images/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_images/edit.html.twig", 1);
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

        echo "Galeria";
        
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
        echo "    <h1>Galeria</h1>
    <div class=\"image-gallery\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_gallery"]) || array_key_exists("product_gallery", $context) ? $context["product_gallery"] : (function () { throw new RuntimeError('Variable "product_gallery" does not exist.', 8, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <div class=\"image\">
        ";
            // line 10
            $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 10), ".");
            // line 11
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 11, $this->source); })())) > 1)) {
                // line 12
                echo "            <a id=\"img-stock\" href=\"";
                echo twig_escape_filter($this->env, ((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, $context["item"], "gfxId", [], "any", false, false, false, 12)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 12)), "html", null, true);
                echo "\"><img width=\"180px\" src=\"";
                echo twig_escape_filter($this->env, ((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, $context["item"], "gfxId", [], "any", false, false, false, 12)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 12)), "html", null, true);
                echo "\" alt=\"Product Image\"></a>
        ";
            } else {
                // line 14
                echo "            <a id=\"img-stock\" href=\"";
                echo twig_escape_filter($this->env, ((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, $context["item"], "gfxId", [], "any", false, false, false, 14)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14)), "html", null, true);
                echo "\"><img width=\"180px\" src=\"";
                echo twig_escape_filter($this->env, (((("https://zielonysklep.pl/userdata/public/gfx/" . twig_get_attribute($this->env, $this->source, $context["item"], "gfxId", [], "any", false, false, false, 14)) . "/") . twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14)) . ".jpg"), "html", null, true);
                echo "\" alt=\"Product Image\"></a>
        ";
            }
            // line 16
            echo "        <div class=\"photo-action-bar\">
        <div class=\"row row_hbetween\">
            <div class=\"col_auto-bar\">
                <button class=\"btn\"><i class=\"fa-solid fa-bars\"></i></button>
                <span class=\"tooltip\">
                    <a data-href=\"\" data-prompt-title=\"Edytuj opis zdjęcia\" data-prompt-value=\"c0eb2a3bb9809fe78c921ed0af0bd9fb\" data-prompt-name=\"gfx_name\" aria-label=\"Edytuj opis zdjęcia\"></a>
                    <span class=\"tooltip__container\">
                        Edytuj opis zdjęcia
                    </span>
                </span>
            </div>
            ";
            // line 27
            echo twig_include($this->env, $context, "product_images/_delete_form.html.twig");
            echo "
        </div>
        </div>\t\t\t\t\t\t\t\t\t\t
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>

    ";
        // line 34
        echo twig_include($this->env, $context, "product_images/_form.html.twig", ["button_label" => "Zaktualizuj"]);
        echo "

    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_images_index");
        echo "\">Powrót do edycji produktu</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product_images/edit.html.twig";
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
        return array (  174 => 36,  169 => 34,  165 => 32,  146 => 27,  133 => 16,  125 => 14,  117 => 12,  114 => 11,  112 => 10,  109 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galeria{% endblock %}

{% block body %}
    <h1>Galeria</h1>
    <div class=\"image-gallery\">
    {% for item in product_gallery %}
        <div class=\"image\">
        {% set parts = item.name|split('.') %}
        {% if parts|length > 1 %}
            <a id=\"img-stock\" href=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ item.gfxId ~ '/' ~ item.name }}\"><img width=\"180px\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ item.gfxId ~ '/' ~ item.name }}\" alt=\"Product Image\"></a>
        {% else %}
            <a id=\"img-stock\" href=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ item.gfxId ~ '/' ~ item.name }}\"><img width=\"180px\" src=\"{{ 'https://zielonysklep.pl/userdata/public/gfx/' ~ item.gfxId ~ '/' ~ item.name ~ '.jpg' }}\" alt=\"Product Image\"></a>
        {% endif %}
        <div class=\"photo-action-bar\">
        <div class=\"row row_hbetween\">
            <div class=\"col_auto-bar\">
                <button class=\"btn\"><i class=\"fa-solid fa-bars\"></i></button>
                <span class=\"tooltip\">
                    <a data-href=\"\" data-prompt-title=\"Edytuj opis zdjęcia\" data-prompt-value=\"c0eb2a3bb9809fe78c921ed0af0bd9fb\" data-prompt-name=\"gfx_name\" aria-label=\"Edytuj opis zdjęcia\"></a>
                    <span class=\"tooltip__container\">
                        Edytuj opis zdjęcia
                    </span>
                </span>
            </div>
            {{ include('product_images/_delete_form.html.twig') }}
        </div>
        </div>\t\t\t\t\t\t\t\t\t\t
        </div>
    {% endfor %}
    </div>

    {{ include('product_images/_form.html.twig', {'button_label': 'Zaktualizuj'}) }}

    <a href=\"{{ path('app_product_images_index') }}\">Powrót do edycji produktu</a>
{% endblock %}
", "product_images/edit.html.twig", "C:\\Users\\admin\\Desktop\\KOPIE\\dupa\\czysta\\templates\\product_images\\edit.html.twig");
    }
}
