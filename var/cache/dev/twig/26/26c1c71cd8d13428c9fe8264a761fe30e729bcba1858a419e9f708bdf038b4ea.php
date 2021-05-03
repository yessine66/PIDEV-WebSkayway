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

/* actualite/showF.html.twig */
class __TwigTemplate_d2d6e1a9711517a2f206c51b986eb22030c7ca45cc58291a37a16dce7be8c98a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/showF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/showF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "actualite/showF.html.twig", 1);
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

        echo "Actualite";
        
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
        $this->displayBlock('bodyfr', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_bodyfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        // line 6
        echo "<main>
    <!--? slider Area Start-->
    <section class=\"slider-area slider-area2\">
        <div class=\"slider-active\">
            <!-- Single Slider -->
            <div class=\"single-slider slider-height2\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-8 col-lg-11 col-md-12\">
                            <div class=\"hero__caption hero__caption2\">
                                <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Actualité: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 16, $this->source); })()), "titreAc", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contoller");
        echo "\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_indexF");
        echo "\">News</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Blog Area Start -->
    <section class=\"blog_area single-post-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 posts-list\">
                    <div class=\"single-post\">
                        <div class=\"feature-img\">
                            <img class=\"img-fluid\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">
                        </div>
                        <div class=\"blog_details\">
                            <h2 class=\"blog-head\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 42, $this->source); })()), "titreAc", [], "any", false, false, false, 42), "html", null, true);
        echo "
                            </h2>
                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">
                                ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), "html", null, true);
        echo "
                            </h2>
                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">
                                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_showEF", ["idEv" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 48, $this->source); })()), "idEv", [], "any", false, false, false, 48), "idEv", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 48, $this->source); })()), "idEv", [], "any", false, false, false, 48), "html", null, true);
        echo "</a>
                            </h2>
                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">
                                ";
        // line 51
        ((twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 51, $this->source); })()), "dateAjout", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 51, $this->source); })()), "dateAjout", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "
                            </h2>
                        </div>
                    </div>
                    <br><br>
                    <button class=\"btn\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_indexF");
        echo "\">Back</a></button>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btns\" type=\"button\"><i class=\"ti-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                        type=\"submit\">Search</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "actualite/showF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 56,  175 => 51,  167 => 48,  161 => 45,  155 => 42,  131 => 21,  127 => 20,  120 => 16,  108 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Actualite{% endblock %}
{% block contentfr %}
{% block bodyfr %}
<main>
    <!--? slider Area Start-->
    <section class=\"slider-area slider-area2\">
        <div class=\"slider-active\">
            <!-- Single Slider -->
            <div class=\"single-slider slider-height2\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-8 col-lg-11 col-md-12\">
                            <div class=\"hero__caption hero__caption2\">
                                <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Actualité: {{ actualite.titreAc }}</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('home_contoller') }}\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('actualite_indexF') }}\">News</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Blog Area Start -->
    <section class=\"blog_area single-post-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 posts-list\">
                    <div class=\"single-post\">
                        <div class=\"feature-img\">
                            <img class=\"img-fluid\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">
                        </div>
                        <div class=\"blog_details\">
                            <h2 class=\"blog-head\">{{ actualite.titreAc }}
                            </h2>
                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">
                                {{ actualite.description }}
                            </h2>
                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">
                                <a href=\"{{ path('evenement_showEF', {'idEv': actualite.idEv.idEv}) }}\"> {{ actualite.idEv }}</a>
                            </h2>
                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">
                                {{ actualite.dateAjout ? actualite.dateAjout|date('Y-m-d') : ''  }}
                            </h2>
                        </div>
                    </div>
                    <br><br>
                    <button class=\"btn\"><a href=\"{{ path('actualite_indexF') }}\">Back</a></button>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btns\" type=\"button\"><i class=\"ti-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                        type=\"submit\">Search</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>

{% endblock %}
{% endblock %}", "actualite/showF.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\actualite\\showF.html.twig");
    }
}
