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

/* promotion/game.html.twig */
class __TwigTemplate_952ee2637e49e5350df780838b556d3e1017145642b43819169556b8a0a05edc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/game.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/game.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotion/game.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"card\">


    <center> <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoP/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 8, $this->source); })()), "idP", [], "any", false, false, false, 8), "logoP", [], "any", false, false, false, 8)) . ""), "html", null, true);
        echo "\"  width=\"20%\" height=\"20%\" display=\"block\"  border=\"0\" alt=\"\">

    <div class =\"card-body\" >


    <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 3rem;\" >
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 14, $this->source); })()), "idP", [], "any", false, false, false, 14), "nomP", [], "any", false, false, false, 14), "html", null, true);
        echo " <br>
        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), "html", null, true);
        echo "<br>


        <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 2rem;\">
            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 19, $this->source); })()), "codeP", [], "any", false, false, false, 19), "html", null, true);
        echo "<br>
            ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 20, $this->source); })()), "reduction", [], "any", false, false, false, 20), "html", null, true);
        echo " %<br>


            <div>

                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "                    <em class=\"text-primary\">p.idP.nomP</em>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            </div>
            <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1.5rem;\">

                (";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 32, $this->source); })()), "dated", [], "any", false, false, false, 32), "html", null, true);
        echo " -
                ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 33, $this->source); })()), "datef", [], "any", false, false, false, 33), "html", null, true);
        echo ")<br>




                <td><img  src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction(((("code promo:  " . twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 38, $this->source); })()), "codeP", [], "any", false, false, false, 38)) . "
nom partenaire:  ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 38, $this->source); })()), "idP", [], "any", false, false, false, 38), "nomP", [], "any", false, false, false, 38))), "html", null, true);
        echo "\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>
















            </div>


        </div>

        <style>
            .grid{
                display:grid;
                grid-template-columns: repeat(3,1fr);
                grid-gap:20px;


            }
            .filter {

                display:block;
                position:fixed;
                top: 90px;
                left: 250px;

            }


        </style>



    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "promotion/game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  129 => 33,  125 => 32,  119 => 28,  112 => 26,  108 => 25,  100 => 20,  96 => 19,  87 => 15,  83 => 14,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <div class=\"card\">


    <center> <img src=\"{{ asset('logoP/')~ promotion.idP.logoP ~''}}\"  width=\"20%\" height=\"20%\" display=\"block\"  border=\"0\" alt=\"\">

    <div class =\"card-body\" >


    <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 3rem;\" >
        {{ promotion.idP.nomP }} <br>
        {{ utilisateur.nom }}  {{ utilisateur.prenom }}<br>


        <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 2rem;\">
            {{ promotion.codeP }}<br>
            {{ promotion.reduction  }} %<br>


            <div>

                {% for p in promotion %}
                    <em class=\"text-primary\">p.idP.nomP</em>
                {% endfor %}

            </div>
            <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1.5rem;\">

                ({{ promotion.dated }} -
                {{ promotion.datef }})<br>




                <td><img  src=\"{{ qr_code_path('code promo:  ' ~ promotion.codeP  ~'\\nnom partenaire:  ' ~ promotion.idP.nomP  ) }}\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>
















            </div>


        </div>

        <style>
            .grid{
                display:grid;
                grid-template-columns: repeat(3,1fr);
                grid-gap:20px;


            }
            .filter {

                display:block;
                position:fixed;
                top: 90px;
                left: 250px;

            }


        </style>



    </div>

{% endblock %}", "promotion/game.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\promotion\\game.html.twig");
    }
}
