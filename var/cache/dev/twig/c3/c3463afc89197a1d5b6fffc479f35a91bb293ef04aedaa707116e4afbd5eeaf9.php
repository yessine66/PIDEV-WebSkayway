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

/* stars/ajoutstars.html.twig */
class __TwigTemplate_ce1a57695c31f9f8804abe090eb069cea6722a25463da6c5f5a1ab24c55b67fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stars/ajoutstars.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stars/ajoutstars.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "stars/ajoutstars.html.twig", 1);
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

        echo "Cours";
        
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Cours: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 16, $this->source); })()), "nomC", [], "any", false, false, false, 16), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursF_index");
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 42, $this->source); })()), "nomC", [], "any", false, false, false, 42), "html", null, true);
        echo "</h1>
                                    </a>
                                </div>
                                <div class=\"blog_details\">
                                    <ul>
                                        <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\"> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</h2></li>
                                    </ul>
                                </div>
                            </div>
                            <br><br>
                            <div id=\"navigation\">
                                <li class=\"button-header margin-left\"><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursF_index");
        echo "\" class=\"btn\">Back</a></li>
                                <a href =\"";
        // line 54
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/file/") . twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 54, $this->source); })()), "pdf", [], "any", false, false, false, 54)), "html", null, true);
        echo "\" class=\"btn btn-success\"> Telecharger</a>
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


    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">

    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
    <body>
    <!-- http://127.0.0.1:5500/index.html?titre=C%27est+bien&comment=Super+avis&note=4 -->
    <div class=\"container\"> 
        <form action=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_stars", ["idC" => (isset($context["idC"]) || array_key_exists("idC", $context) ? $context["idC"] : (function () { throw new RuntimeError('Variable "idC" does not exist.', 92, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
    
            <div class=\"stars\">
                <i class=\"lar la-star\" data-value=\"1\"></i><i class=\"lar la-star\" data-value=\"2\"></i><i class=\"lar la-star\" data-value=\"3\"></i><i class=\"lar la-star\" data-value=\"4\"></i><i class=\"lar la-star\" data-value=\"5\"></i>
            </div>
            <input type=\"hidden\" name=\"note\" id=\"note\" >
           ";
        // line 99
        echo "    
    
    
            <style>
                body{margin:40px;}
                .btn-circle {
                    width: 30px;
                    height: 30px;
                    text-align: center;
                    padding: 6px 0;
                    font-size: 12px;
                    line-height: 1.428571429;
                    border-radius: 15px;
                }
                .btn-circle.btn-lg {
                    width: 50px;
                    height: 50px;
                    padding: 10px 16px;
                    font-size: 18px;
                    line-height: 1.33;
                    border-radius: 25px;
                }
                .btn-circle.btn-xl {
                    width: 70px;
                    height: 70px;
                    padding: 10px 16px;
                    font-size: 24px;
                    line-height: 1.33;
                    border-radius: 35px;
                }
            </style>
            <button type=\"submit\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_stars", ["idC" => (isset($context["idC"]) || array_key_exists("idC", $context) ? $context["idC"] : (function () { throw new RuntimeError('Variable "idC" does not exist.', 130, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-info btn-circle btn-lg\">
                <i class=\"glyphicon glyphicon-ok\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_stars", ["idC" => (isset($context["idC"]) || array_key_exists("idC", $context) ? $context["idC"] : (function () { throw new RuntimeError('Variable "idC" does not exist.', 131, $this->source); })())]), "html", null, true);
        echo "\"></i></button>
        </form>

    </div>

    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/scripts.js"), "html", null, true);
        echo "\"></script>

    </body>










    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stars/ajoutstars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 136,  264 => 131,  260 => 130,  227 => 99,  218 => 92,  177 => 54,  173 => 53,  164 => 47,  156 => 42,  132 => 21,  128 => 20,  121 => 16,  109 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Cours{% endblock %}
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Cours: {{ cour.nomC }}</h1>
                                            <!-- breadcrumb Start-->
                                            <nav aria-label=\"breadcrumb\">
                                                <ol class=\"breadcrumb\">
                                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('home_contoller') }}\">Home</a></li>
                                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('coursF_index') }}\">Events</a></li>
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
                                    <h1 class=\"blog-head\">{{ cour.nomC }}</h1>
                                    </a>
                                </div>
                                <div class=\"blog_details\">
                                    <ul>
                                        <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\"> {{ cour.description }}</h2></li>
                                    </ul>
                                </div>
                            </div>
                            <br><br>
                            <div id=\"navigation\">
                                <li class=\"button-header margin-left\"><a href=\"{{ path('coursF_index') }}\" class=\"btn\">Back</a></li>
                                <a href =\"{{ asset('/uploads/file/') ~ cour.pdf }}\" class=\"btn btn-success\"> Telecharger</a>
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


    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">

    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
    <body>
    <!-- http://127.0.0.1:5500/index.html?titre=C%27est+bien&comment=Super+avis&note=4 -->
    <div class=\"container\"> 
        <form action=\"{{ path('add_stars',{'idC':idC}) }}\" method=\"post\">
    
            <div class=\"stars\">
                <i class=\"lar la-star\" data-value=\"1\"></i><i class=\"lar la-star\" data-value=\"2\"></i><i class=\"lar la-star\" data-value=\"3\"></i><i class=\"lar la-star\" data-value=\"4\"></i><i class=\"lar la-star\" data-value=\"5\"></i>
            </div>
            <input type=\"hidden\" name=\"note\" id=\"note\" >
           {# <button type=\"submit\" href=\"{{ path('add_stars',{'idevent':idevent}) }}\"  class=\"btn btn-primary\">ajouter</button>#}
    
    
    
            <style>
                body{margin:40px;}
                .btn-circle {
                    width: 30px;
                    height: 30px;
                    text-align: center;
                    padding: 6px 0;
                    font-size: 12px;
                    line-height: 1.428571429;
                    border-radius: 15px;
                }
                .btn-circle.btn-lg {
                    width: 50px;
                    height: 50px;
                    padding: 10px 16px;
                    font-size: 18px;
                    line-height: 1.33;
                    border-radius: 25px;
                }
                .btn-circle.btn-xl {
                    width: 70px;
                    height: 70px;
                    padding: 10px 16px;
                    font-size: 24px;
                    line-height: 1.33;
                    border-radius: 35px;
                }
            </style>
            <button type=\"submit\" href=\"{{ path('add_stars',{'idC':idC}) }}\" class=\"btn btn-info btn-circle btn-lg\">
                <i class=\"glyphicon glyphicon-ok\" href=\"{{ path('add_stars',{'idC':idC}) }}\"></i></button>
        </form>

    </div>

    <script src=\"{{asset('JS/scripts.js')}}\"></script>

    </body>










    {% endblock %}
{% endblock %}

", "stars/ajoutstars.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\stars\\ajoutstars.html.twig");
    }
}
