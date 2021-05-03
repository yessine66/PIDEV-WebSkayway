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

/* promotion/_card.html.twig */
class __TwigTemplate_b40e7850953271ed4725d4dc5bd430245a94e976654870e037047d2d1adf8139 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/_card.html.twig"));

        // line 1
        echo "<div class=\"card\">


    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoP/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 4, $this->source); })()), "idP", [], "any", false, false, false, 4), "logoP", [], "any", false, false, false, 4)) . ""), "html", null, true);
        echo "\"  width=\"5%\" height=\"auto\" display=\"block\"  border=\"0\" alt=\"\" class=\"card-img-top\">

    <div class =\"card-body\">


        <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 1.5rem;\" >
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 10, $this->source); })()), "idP", [], "any", false, false, false, 10), "nomP", [], "any", false, false, false, 10), "html", null, true);
        echo " <br>



            <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 1rem;\">
                ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 15, $this->source); })()), "codeP", [], "any", false, false, false, 15), "html", null, true);
        echo "<br>
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 16, $this->source); })()), "reduction", [], "any", false, false, false, 16), "html", null, true);
        echo " %<br>


                <div>

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "                        <em class=\"text-primary\">p.idP.nomP</em>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                </div>
                <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1rem;\">

                    (";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 28, $this->source); })()), "dated", [], "any", false, false, false, 28), "html", null, true);
        echo " -<br>
                    ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "datef", [], "any", false, false, false, 29), "html", null, true);
        echo ")<br>

                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "                        <em class=\"text-primary\">p.idP.nomP</em>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
                </div>

            </div>

            <div>
                <td><img  src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction(((("code promo:  " . twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 40, $this->source); })()), "codeP", [], "any", false, false, false, 40)) . "
nom partenaire:  ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 40, $this->source); })()), "idP", [], "any", false, false, false, 40), "nomP", [], "any", false, false, false, 40))), "html", null, true);
        echo "\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>

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
        return "promotion/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  114 => 34,  107 => 32,  103 => 31,  98 => 29,  94 => 28,  88 => 24,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">


    <img src=\"{{ asset('logoP/')~ promotion.idP.logoP ~''}}\"  width=\"5%\" height=\"auto\" display=\"block\"  border=\"0\" alt=\"\" class=\"card-img-top\">

    <div class =\"card-body\">


        <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 1.5rem;\" >
            {{ promotion.idP.nomP }} <br>



            <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 1rem;\">
                {{ promotion.codeP }}<br>
                {{ promotion.reduction  }} %<br>


                <div>

                    {% for p in promotion %}
                        <em class=\"text-primary\">p.idP.nomP</em>
                    {% endfor %}

                </div>
                <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1rem;\">

                    ({{ promotion.dated }} -<br>
                    {{ promotion.datef }})<br>

                    {% for p in promotion %}
                        <em class=\"text-primary\">p.idP.nomP</em>
                    {% endfor %}

                </div>

            </div>

            <div>
                <td><img  src=\"{{ qr_code_path('code promo:  ' ~ promotion.codeP  ~'\\nnom partenaire:  ' ~ promotion.idP.nomP  ) }}\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>

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

", "promotion/_card.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\promotion\\_card.html.twig");
    }
}
