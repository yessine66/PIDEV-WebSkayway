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

/* partenaire/index.html.twig */
class __TwigTemplate_b28d0ae30ed03f6581cc0013ae7fd0fa15b0204c36a9c7dc3823011a16cb483a extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des partenaires ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <h1> Liste des partenaires </h1>



        <table id =\"tableac\" class=\"table\" >
            <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"rechercher .....\">
            <thead>
            <tr>
                <th>Id Partenaire</th>
                <th>Nom Partenaire</th>
                <th>Domaine</th>
                <th>Date Partenariat</th>
                <th>Mail</th>
                <th>Logo</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) || array_key_exists("partenaires", $context) ? $context["partenaires"] : (function () { throw new RuntimeError('Variable "partenaires" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "idP", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "nomP", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "domaine", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "dateP", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "mailp", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoP/") . twig_get_attribute($this->env, $this->source, $context["partenaire"], "logop", [], "any", false, false, false, 38)) . ""), "html", null, true);
            echo "\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>
                    <td>
                        <button type=“button” class=\"button-show\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_show", ["idP" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "idP", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">show</a></button>
                        <button type=“button” class=\"button-edit\"><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_edit", ["idP" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "idP", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">edit</a></button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                <tr>
                    <td colspan=\"7\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "            <div class=\"alert alert-success\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        <button type=“button” class=\"button-create\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_new");
        echo "\">Create new</a></button>
        <button type=“button” class=\"button-create\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triM");
        echo "\">trier</a></button>































        <style>
            .button-create {
                display: inline-block;
                padding: 12px 18px;
                cursor: pointer;
                border-radius: 5px;
                background-color: #fff3cd;
                font-size: 16px;
                font-weight: bold;
                color: red;
            }
            .button-show {
                display: inline-block;
                padding: 12px 18px;
                cursor: pointer;
                border-radius: 5px;
                background-color: #d3e0ea;
                font-size: 16px;
                font-weight: bold;
                color: red;
            }
            .button-edit {
                display: inline-block;
                padding: 12px 18px;
                cursor: pointer;
                border-radius: 5px;
                background-color: #fde8cd;
                font-size: 16px;
                font-weight: bold;
                color: red;
            }
        </style>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
        <script>
            \$(document).ready(function(){
                \$('#search').keyup(function(){
                    search_table(\$(this).val());
                });
                function search_table(value){
                    \$('#tableac tbody tr').each(function(){
                        var found = 'false';
                        \$(this).each(function(){
                            if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                            {
                                found = 'true';
                            }
                        });
                        if(found === 'true')
                        {
                            \$(this).show();

                        }
                        else
                        {
                            \$(this).hide();

                        }
                    });
                }
            });
        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 57,  222 => 56,  213 => 53,  210 => 52,  206 => 51,  202 => 49,  193 => 45,  184 => 41,  180 => 40,  175 => 38,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  152 => 32,  147 => 31,  126 => 12,  117 => 9,  114 => 8,  109 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Liste des partenaires {% endblock %}

{% block body %}
    {% block content%}
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        <h1> Liste des partenaires </h1>



        <table id =\"tableac\" class=\"table\" >
            <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"rechercher .....\">
            <thead>
            <tr>
                <th>Id Partenaire</th>
                <th>Nom Partenaire</th>
                <th>Domaine</th>
                <th>Date Partenariat</th>
                <th>Mail</th>
                <th>Logo</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for partenaire in partenaires %}
                <tr>
                    <td>{{ partenaire.idP }}</td>
                    <td>{{ partenaire.nomP }}</td>
                    <td>{{ partenaire.domaine }}</td>
                    <td>{{ partenaire.dateP }}</td>
                    <td>{{ partenaire.mailp }}</td>
                    <td><img src=\"{{ asset('logoP/')~ partenaire.logop ~''}}\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>
                    <td>
                        <button type=“button” class=\"button-show\"><a href=\"{{ path('partenaire_show', {'idP': partenaire.idP}) }}\">show</a></button>
                        <button type=“button” class=\"button-edit\"><a href=\"{{ path('partenaire_edit', {'idP': partenaire.idP}) }}\">edit</a></button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        <button type=“button” class=\"button-create\"><a href=\"{{ path('partenaire_new') }}\">Create new</a></button>
        <button type=“button” class=\"button-create\"><a href=\"{{ path('triM') }}\">trier</a></button>































        <style>
            .button-create {
                display: inline-block;
                padding: 12px 18px;
                cursor: pointer;
                border-radius: 5px;
                background-color: #fff3cd;
                font-size: 16px;
                font-weight: bold;
                color: red;
            }
            .button-show {
                display: inline-block;
                padding: 12px 18px;
                cursor: pointer;
                border-radius: 5px;
                background-color: #d3e0ea;
                font-size: 16px;
                font-weight: bold;
                color: red;
            }
            .button-edit {
                display: inline-block;
                padding: 12px 18px;
                cursor: pointer;
                border-radius: 5px;
                background-color: #fde8cd;
                font-size: 16px;
                font-weight: bold;
                color: red;
            }
        </style>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
        <script>
            \$(document).ready(function(){
                \$('#search').keyup(function(){
                    search_table(\$(this).val());
                });
                function search_table(value){
                    \$('#tableac tbody tr').each(function(){
                        var found = 'false';
                        \$(this).each(function(){
                            if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                            {
                                found = 'true';
                            }
                        });
                        if(found === 'true')
                        {
                            \$(this).show();

                        }
                        else
                        {
                            \$(this).hide();

                        }
                    });
                }
            });
        </script>

    {% endblock %}
{% endblock %}
", "partenaire/index.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\partenaire\\index.html.twig");
    }
}
