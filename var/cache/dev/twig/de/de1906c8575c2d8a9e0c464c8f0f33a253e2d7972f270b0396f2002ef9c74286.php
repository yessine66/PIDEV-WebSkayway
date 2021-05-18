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

/* promotion/indexR.html.twig */
class __TwigTemplate_07f465cbe43f791530f74aec1232cdb36c86d192fd92d39262dbad51e47d5553 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contentfr' => [$this, 'block_contentfr'],
            'bodyfr' => [$this, 'block_bodyfr'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/indexR.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/indexR.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "promotion/indexR.html.twig", 1);
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

        echo "Promotion index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_contentfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('bodyfr', $context, $blocks);
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_bodyfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        // line 7
        echo "
    <main>

        <!--? slider Area Start-->
        <!--? slider Area Start-->
        <section class=\"slider-area slider-area2\">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 col-lg-11 col-md-12\">
                                <div class=\"hero__caption hero__caption2\">
                                    <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Promotion </h1>
                                    <!-- breadcrumb Start-->
 ";
        // line 25
        echo "                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div  class=\"container\",style =\"top: 50rem\";>
            <div style =\"margin-top: 5rem;\"></div>
            <div class=\"row\",style =\"margin-top: 50rem\";>
                <div class=\"col-md-9\">
                    <div class=\"grid\",style =\"margin-top: 50rem\";>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 39
            echo "                            ";
            $this->loadTemplate("promotion/_card.html.twig", "promotion/indexR.html.twig", 39)->display(twig_to_array(["promotion" => $context["promotion"]]));
            // line 40
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </div>
                </div>
            </div>

            <div style =\"margin-top: 5rem;\"></div>

            <button type=“button” class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\" tabindex=\"0\" style=\"animation-delay: 0.7s;\"><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("play");
        echo "\">Jouer</a></button>

                <div style =\"margin-top: 5rem;\"></div>








        </div>






    </main>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "promotion/indexR.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 48,  161 => 42,  154 => 40,  151 => 39,  147 => 38,  132 => 25,  115 => 7,  105 => 6,  94 => 70,  92 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Promotion index{% endblock %}
{% block contentfr %}

    {% block bodyfr %}

    <main>

        <!--? slider Area Start-->
        <!--? slider Area Start-->
        <section class=\"slider-area slider-area2\">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 col-lg-11 col-md-12\">
                                <div class=\"hero__caption hero__caption2\">
                                    <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Promotion </h1>
                                    <!-- breadcrumb Start-->
 {#                                    <nav aria-label=\"breadcrumb\">
                                        <h3 class=\"text-heading\">PROMOTION</h3>
                                    </nav> #}
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div  class=\"container\",style =\"top: 50rem\";>
            <div style =\"margin-top: 5rem;\"></div>
            <div class=\"row\",style =\"margin-top: 50rem\";>
                <div class=\"col-md-9\">
                    <div class=\"grid\",style =\"margin-top: 50rem\";>
                        {% for promotion in promotions %}
                            {% include 'promotion/_card.html.twig'with {promotion:promotion} only %}

                        {% endfor %}
                    </div>
                </div>
            </div>

            <div style =\"margin-top: 5rem;\"></div>

            <button type=“button” class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\" tabindex=\"0\" style=\"animation-delay: 0.7s;\"><a href=\"{{ path('play') }}\">Jouer</a></button>

                <div style =\"margin-top: 5rem;\"></div>








        </div>






    </main>


    {% endblock %}

{% endblock %}


", "promotion/indexR.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\promotion\\indexR.html.twig");
    }
}
