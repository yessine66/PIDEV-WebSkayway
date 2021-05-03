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

/* categorie/indexF.html.twig */
class __TwigTemplate_2c430295d259d212dd733983530e7dc6aef6c0e248a419f55e8bf3cc28bccc64 extends Template
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
            'th' => [$this, 'block_th'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "categorie/indexF.html.twig", 1);
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

        echo "Cours index";
        
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Our courses</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Services</a></li>
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
            <!-- Courses area start -->
            <div class=\"courses-area section-padding40 fix\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Nos Catégories</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 44
            echo "
                            <div class=\"col-lg-4\">
                                <div class=\"properties properties2 mb-30\">
                                    <div class=\"properties__card\">
                                        <div class=\"properties__img overlay1\">
                                            <a href=\"#\"><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/img_2.png"), "html", null, true);
            echo "\" alt=\"\"></a>
                                        </div>
                                        <div class=\"properties__caption\">
                                            <p></p>
                                            <h3><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></h3>
                                            <p>
                                            </p>
                                            <div class=\"properties__footer d-flex justify-content-between align-items-center\">
                                                <div class=\"restaurant-name\">
                                                    <div class=\"rating\">
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star-half\"></i>
                                                    </div>

                                                </div>
                                                <div class=\"price\">
                                                </div>
                                            </div>
                                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursF_index", ["idCategorie" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"border-btn border-btn2\">Voir les Cours de Catégorie ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 70), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "
                            <p>no records found</p>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mt-40\">
                            <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"border-btn\">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Courses area End -->
            <!--? top subjects Area Start -->
            <div class=\"topic-area\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Explore top subjects</h2>
                            </div>
                        </div>
                    </div>
                    ";
        // line 103
        $this->displayBlock('th', $context, $blocks);
        // line 127
        echo "                </div>
                <!-- top subjects End -->
                <!-- ? services-area -->
                <div class=\"services-area services-area2 section-padding40\">
                    <div class=\"container\">
                        <div class=\"row justify-content-sm-center\">
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/icon1.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>60+ UX courses</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/icon2.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>Expert instructors</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/icon3.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>Life time access</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_th($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "th"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "th"));

        // line 104
        echo "                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                <div class=\"single-topic text-center mb-30\">
                                    <div class=\"topic-img\">
                                        <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic1.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"topic-content-box\">
                                            <div class=\"topic-content\">
                                                <h3><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"> </a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row justify-content-center\">
                                <div class=\"col-xl-12\">
                                    <div class=\"section-tittle text-center mt-20\">
                                        <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("courses.html"), "html", null, true);
        echo "\" class=\"border-btn\">View More Subjects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 121,  332 => 111,  326 => 108,  320 => 104,  310 => 103,  287 => 158,  273 => 147,  259 => 136,  248 => 127,  246 => 103,  226 => 86,  218 => 80,  209 => 76,  196 => 70,  174 => 53,  167 => 49,  160 => 44,  155 => 43,  130 => 21,  126 => 20,  110 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Cours index{% endblock %}
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Our courses</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"{{ asset('index.html') }}\">Home</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"{{ asset('#') }}\">Services</a></li>
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
            <!-- Courses area start -->
            <div class=\"courses-area section-padding40 fix\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Nos Catégories</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        {% for categorie in categories %}

                            <div class=\"col-lg-4\">
                                <div class=\"properties properties2 mb-30\">
                                    <div class=\"properties__card\">
                                        <div class=\"properties__img overlay1\">
                                            <a href=\"#\"><img src=\"{{ asset('assets/img/blog/img_2.png') }}\" alt=\"\"></a>
                                        </div>
                                        <div class=\"properties__caption\">
                                            <p></p>
                                            <h3><a href=\"{{ asset('#') }}\">{{ categorie.nomCategorie }}</a></h3>
                                            <p>
                                            </p>
                                            <div class=\"properties__footer d-flex justify-content-between align-items-center\">
                                                <div class=\"restaurant-name\">
                                                    <div class=\"rating\">
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star\"></i>
                                                        <i class=\"fas fa-star-half\"></i>
                                                    </div>

                                                </div>
                                                <div class=\"price\">
                                                </div>
                                            </div>
                                            <a href=\"{{ path('coursF_index', {'idCategorie': categorie.idCategorie}) }}\" class=\"border-btn border-btn2\">Voir les Cours de Catégorie {{ categorie.nomCategorie }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}

                            <p>no records found</p>

                        {% endfor %}

                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mt-40\">
                            <a href=\"{{ asset('#') }}\" class=\"border-btn\">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Courses area End -->
            <!--? top subjects Area Start -->
            <div class=\"topic-area\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Explore top subjects</h2>
                            </div>
                        </div>
                    </div>
                    {% block th %}
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                <div class=\"single-topic text-center mb-30\">
                                    <div class=\"topic-img\">
                                        <img src=\"{{ asset('assets/img/gallery/topic1.png')}}\" alt=\"\">
                                        <div class=\"topic-content-box\">
                                            <div class=\"topic-content\">
                                                <h3><a href=\"{{ asset('#') }}\"> </a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row justify-content-center\">
                                <div class=\"col-xl-12\">
                                    <div class=\"section-tittle text-center mt-20\">
                                        <a href=\"{{ asset('courses.html') }}\" class=\"border-btn\">View More Subjects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                </div>
                <!-- top subjects End -->
                <!-- ? services-area -->
                <div class=\"services-area services-area2 section-padding40\">
                    <div class=\"container\">
                        <div class=\"row justify-content-sm-center\">
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"{{ asset('assets/img/icon/icon1.svg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>60+ UX courses</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"{{ asset('assets/img/icon/icon2.svg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>Expert instructors</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"{{ asset('assets/img/icon/icon3.svg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>Life time access</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    {% endblock %}
{% endblock %}
", "categorie/indexF.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\categorie\\indexF.html.twig");
    }
}
