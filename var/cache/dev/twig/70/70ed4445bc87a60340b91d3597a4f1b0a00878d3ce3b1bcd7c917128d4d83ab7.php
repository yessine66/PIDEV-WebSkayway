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

/* partenaire/_card.html.twig */
class __TwigTemplate_ffbc13aeb14c524efaf95de9493efc08bd99bd5820d59c82ac80b96c7e161886 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/_card.html.twig"));

        // line 1
        echo "<div class=\"card\">


    <td><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoP/") . twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 4, $this->source); })()), "logop", [], "any", false, false, false, 4)) . ""), "html", null, true);
        echo "\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>
    <div class =\"card-body\">


        <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 1.5rem;\" >
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 9, $this->source); })()), "nomP", [], "any", false, false, false, 9), "html", null, true);
        echo "<br>


            <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 1rem;\">
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 13, $this->source); })()), "domaine", [], "any", false, false, false, 13), "html", null, true);
        echo "<br>
                ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 14, $this->source); })()), "mailp", [], "any", false, false, false, 14), "html", null, true);
        echo " <br>


                <div>



                </div>
                <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1rem;\">

                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 24, $this->source); })()), "dateP", [], "any", false, false, false, 24), "html", null, true);
        echo "



                </div>

            </div>



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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  67 => 14,  63 => 13,  56 => 9,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">


    <td><img src=\"{{ asset('logoP/')~ partenaire.logop ~''}}\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>
    <div class =\"card-body\">


        <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 1.5rem;\" >
            {{ partenaire.nomP }}<br>


            <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 1rem;\">
                {{ partenaire.domaine }}<br>
                {{ partenaire.mailp }} <br>


                <div>



                </div>
                <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1rem;\">

                    {{ partenaire.dateP }}



                </div>

            </div>



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

", "partenaire/_card.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\partenaire\\_card.html.twig");
    }
}
