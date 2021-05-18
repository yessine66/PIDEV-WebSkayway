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

/* evenement/showF.html.twig */
class __TwigTemplate_63e2d159996a5a2177c33ac32f05f1646ec3df71f72f49b1c299210de09fa79c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "evenement/showF.html.twig", 1);
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

        echo "Evènement";
        
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
        echo "    ";
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
        echo "        <main>
            <!--? slider Area Start-->
            <section class=\"slider-area slider-area2\">
                <div class=\"slider-active\">
                    <!-- Single Slider -->
                    <div class=\"single-slider slider-height2\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xl-8 col-lg-11 col-md-12\">
                                    <div class=\"hero__caption hero__caption2\">
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Evènement: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 16, $this->source); })()), "nomEv", [], "any", false, false, false, 16), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_indexF");
        echo "\">Events</a></li>
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
                                <div class=\"blog_item_img\">
                                        <h1 class=\"blog-head\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 42, $this->source); })()), "nomEv", [], "any", false, false, false, 42), "html", null, true);
        echo "</h1>
                                    </a>
                                </div>
                                <div class=\"blog_details\">
                                    <ul>
                                       <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Aura lieu à ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 47, $this->source); })()), "espace", [], "any", false, false, false, 47), "html", null, true);
        echo "</h2></li>
                                       <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Le ";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "dateEv", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "dateEv", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo " à ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "dateEv", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "dateEv", [], "any", false, false, false, 48), "H:i"), "html", null, true))) : (print ("")));
        echo "</h2></li>
                                       <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "nombrePl", [], "any", false, false, false, 49), "html", null, true);
        echo " places</h2></li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div id=\"navigation\">
                                <li class=\"button-header margin-right\">
                                    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_indexF");
        echo "\" class=\"btn\">Back</a>
                                    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_reserve", ["idEv" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 57, $this->source); })()), "idEv", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\" class=\"btn\">Participer</a>
                                </li>
                                </a>
                            </div>
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
        return "evenement/showF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 57,  184 => 56,  174 => 49,  168 => 48,  164 => 47,  156 => 42,  132 => 21,  128 => 20,  121 => 16,  109 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Evènement{% endblock %}
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Evènement: {{ evenement.nomEv }}</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"{{ path('home_contoller') }}\">Home</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"{{ path('evenement_indexF') }}\">Events</a></li>
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
                                <div class=\"blog_item_img\">
                                        <h1 class=\"blog-head\">{{ evenement.nomEv }}</h1>
                                    </a>
                                </div>
                                <div class=\"blog_details\">
                                    <ul>
                                       <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Aura lieu à {{ evenement.espace }}</h2></li>
                                       <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Le {{ evenement.dateEv? evenement.dateEv|date('Y-m-d') : '' }} à {{ evenement.dateEv? evenement.dateEv|date('H:i') : '' }}</h2></li>
                                       <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">{{ evenement.nombrePl }} places</h2></li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div id=\"navigation\">
                                <li class=\"button-header margin-right\">
                                    <a href=\"{{ path('evenement_indexF') }}\" class=\"btn\">Back</a>
                                    <a href=\"{{ path('evenement_reserve', {'idEv': evenement.idEv}) }}\" class=\"btn\">Participer</a>
                                </li>
                                </a>
                            </div>
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
{% endblock %}", "evenement/showF.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\evenement\\showF.html.twig");
    }
}
