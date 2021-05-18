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

/* actualite/indexF.html.twig */
class __TwigTemplate_55a9066ca437fc8ef1191ae75fb05e8a39e30a8fb8f1a21bedbf28e81588fe98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "actualite/indexF.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contentfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('bodyfr', $context, $blocks);
        // line 106
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_bodyfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        // line 5
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
                                <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Actualités</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contoller");
        echo "\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
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
    <!--? Blog Area Start-->
    <section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 38
            echo "                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_showF", ["idAc" => twig_get_attribute($this->env, $this->source, $context["actualite"], "idAc", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"blog_item_date\">
                                    <h3>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titreAc", [], "any", false, false, false, 42), "html", null, true);
            echo "</h3>
                                </a>
                            </div>
                            <div class=\"blog_details\">
                                <ul>
                                <li>
                                    <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</h2>
                                </li>
                                <li><i class=\"blog-info-link\" style=\"float: right;\">";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAjout", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "dateAjout", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</i></li>
                                </ul>
                            </div>

                        </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                            <h1>no records found</h1>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\" aria-label=\"Next\">
                                        <i class=\"ti-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Search Keyword'\">
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
        return "actualite/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  200 => 69,  194 => 66,  186 => 61,  181 => 58,  174 => 56,  163 => 50,  158 => 48,  149 => 42,  145 => 41,  140 => 38,  135 => 37,  115 => 20,  111 => 19,  95 => 5,  85 => 4,  74 => 106,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}
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
                                <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Actualités</h1>
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
    <!--? Blog Area Start-->
    <section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\">
                        {% for actualite in actualites %}
                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">
                                <a href=\"{{ path('actualite_showF', {'idAc': actualite.idAc}) }}\" class=\"blog_item_date\">
                                    <h3>{{ actualite.titreAc }}</h3>
                                </a>
                            </div>
                            <div class=\"blog_details\">
                                <ul>
                                <li>
                                    <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">{{ actualite.description }}</h2>
                                </li>
                                <li><i class=\"blog-info-link\" style=\"float: right;\">{{ actualite.dateAjout ? actualite.dateAjout|date('Y-m-d') : '' }}</i></li>
                                </ul>
                            </div>

                        </article>
                        {% else %}
                            <h1>no records found</h1>
                        {% endfor %}
                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"{{ asset('#') }}\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"{{ asset('#') }}\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"{{ asset('#') }}\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"{{ asset('#') }}\" class=\"page-link\" aria-label=\"Next\">
                                        <i class=\"ti-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Search Keyword'\">
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

{% endblock %}
", "actualite/indexF.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\actualite\\indexF.html.twig");
    }
}
