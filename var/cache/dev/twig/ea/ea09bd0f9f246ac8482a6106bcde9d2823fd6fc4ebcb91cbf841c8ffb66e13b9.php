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

/* promotion/index.html.twig */
class __TwigTemplate_e12d18038c20ab60131dafab5ade700f8a779ff30c362e0a2f2b634cff778ce2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotion/index.html.twig", 1);
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

        echo "Liste des promotions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
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
    <div  class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 17
        $this->loadTemplate("promotion/_filter.html.twig", "promotion/index.html.twig", 17)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })())]));
        // line 18
        echo "

        </div>

        <div class=\"col-md-9\">

            <div class=\"d-flex justify-content-end mb-2\",style =\"margin-top: 10rem\"; >
                ";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 25, $this->source); })()), "Trier", "p.reduction");
        echo "
            </div>




            <div class=\"grid\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 33
            echo "
                    <div class=\"card\">


                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoP/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "idP", [], "any", false, false, false, 37), "logoP", [], "any", false, false, false, 37)) . ""), "html", null, true);
            echo "\"  width=\"10%\" height=\"auto\" display=\"block\"  border=\"0\" alt=\"\" class=\"card-img-top\">
                        <div class =\"card-body\">


                            <div class=\"card-title text-dark\" style=\"font-weight: bold;font-size: 1.5rem;\" >
                                ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "idP", [], "any", false, false, false, 42), "nomP", [], "any", false, false, false, 42), "html", null, true);
            echo " <br>


                                <div class=\"card-title text-primary\" style=\"font-weight: bold;font-size: 1rem;\">
                                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "codeP", [], "any", false, false, false, 46), "html", null, true);
            echo "<br>
                                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "reduction", [], "any", false, false, false, 47), "html", null, true);
            echo " %<br>


                                    <div>

                                        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["promotion"]);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 53
                echo "                                            <em class=\"text-primary\">p.idP.nomP</em>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                                    </div>
                                    <div class=\"card-title text-purple\" style=\"font-weight: bolder;font-size: 1rem;\">

                                        (";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dated", [], "any", false, false, false, 59), "html", null, true);
            echo " -<br>
                                        ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "datef", [], "any", false, false, false, 60), "html", null, true);
            echo ")<br>

                                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["promotion"]);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 63
                echo "                                            <em class=\"text-primary\">p.idP.nomP</em>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                        <div>
                                            <td><img  src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction(((("code promo:  " . twig_get_attribute($this->env, $this->source, $context["promotion"], "codeP", [], "any", false, false, false, 66)) . "
nom partenaire:  ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "idP", [], "any", false, false, false, 66), "nomP", [], "any", false, false, false, 66))), "html", null, true);
            echo "\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>

                                        </div>
                                        <div >

                                            <button type=“button” class=\"button-show\" ><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_show", ["idProm" => twig_get_attribute($this->env, $this->source, $context["promotion"], "idProm", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">show</a></button>
                                            <button type=“button” class=\"button-edit\"><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_edit", ["idProm" => twig_get_attribute($this->env, $this->source, $context["promotion"], "idProm", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">edit</a></button>


                                        </div>
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "            </div>
            <button type=“button” class=\"button-create\"><a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_new");
        echo "\">Create new</a></button>
            <div class=\"d-flex justify-content-end mb-2\",style =\"margin-top: 10rem\"; >
                <div class=\"d-flex justify-content-end mb-2\",style =\"margin-right: 10rem\"; >
                <button type=“button” class=\"button-edit\"><a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("randommail");
        echo "\">Jouer !</a></button>
            </div>
        </div>

            <div class =\"mt-4\">
                ";
        // line 171
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 171, $this->source); })()));
        echo "
            </div>

        </div>
    </div>
    ";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 177
        echo "






        <div style =\"margin-top: 5rem;\"></div>










        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">


























        <!-- recherche -->







        </div>




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



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "promotion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 177,  348 => 176,  340 => 171,  332 => 166,  326 => 163,  323 => 162,  227 => 72,  223 => 71,  214 => 66,  211 => 65,  204 => 63,  200 => 62,  195 => 60,  191 => 59,  185 => 55,  178 => 53,  174 => 52,  166 => 47,  162 => 46,  155 => 42,  147 => 37,  141 => 33,  137 => 32,  127 => 25,  118 => 18,  116 => 17,  109 => 12,  100 => 9,  97 => 8,  93 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des promotions{% endblock %}
{% block content %}


    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <div  class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-3\">
            {% include 'promotion/_filter.html.twig' with {form:form} only %}


        </div>

        <div class=\"col-md-9\">

            <div class=\"d-flex justify-content-end mb-2\",style =\"margin-top: 10rem\"; >
                {{ knp_pagination_sortable(promotions,'Trier','p.reduction' )}}
            </div>




            <div class=\"grid\">
                {% for promotion in promotions %}

                    <div class=\"card\">


                        <img src=\"{{ asset('logoP/')~ promotion.idP.logoP ~''}}\"  width=\"10%\" height=\"auto\" display=\"block\"  border=\"0\" alt=\"\" class=\"card-img-top\">
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
                                        <div>
                                            <td><img  src=\"{{ qr_code_path('code promo:  ' ~ promotion.codeP  ~'\\nnom partenaire:  ' ~ promotion.idP.nomP  ) }}\"  width=\"30%\" height=\"auto\" display=\"block\"  border=\"0\"></td>

                                        </div>
                                        <div >

                                            <button type=“button” class=\"button-show\" ><a href=\"{{ path('promotion_show', {'idProm': promotion.idProm}) }}\">show</a></button>
                                            <button type=“button” class=\"button-edit\"><a href=\"{{ path('promotion_edit', {'idProm': promotion.idProm}) }}\">edit</a></button>


                                        </div>
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







































                {% endfor %}
            </div>
            <button type=“button” class=\"button-create\"><a href=\"{{ path('promotion_new') }}\">Create new</a></button>
            <div class=\"d-flex justify-content-end mb-2\",style =\"margin-top: 10rem\"; >
                <div class=\"d-flex justify-content-end mb-2\",style =\"margin-right: 10rem\"; >
                <button type=“button” class=\"button-edit\"><a href=\"{{ path('randommail') }}\">Jouer !</a></button>
            </div>
        </div>

            <div class =\"mt-4\">
                {{ knp_pagination_render(promotions) }}
            </div>

        </div>
    </div>
    {% block body %}







        <div style =\"margin-top: 5rem;\"></div>










        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">


























        <!-- recherche -->







        </div>




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



    {% endblock %}
{% endblock %}


", "promotion/index.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\promotion\\index.html.twig");
    }
}
