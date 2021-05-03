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

/* feedback/indexF.html.twig */
class __TwigTemplate_860219f65a70a11a7bb0ee7732abf1a6ca4190cc0e88a679ef444148527b8c75 extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "feedback/indexF.html.twig", 1);
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

        echo "Feedback index";
        
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
        // line 117
        $this->displayBlock('footer', $context, $blocks);
        // line 120
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_bodyfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        // line 6
        echo "


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
                                    <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">FeedBacks</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Contact</a></li>
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Feedback</a></li>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["feedback"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 43
            echo "                                <article class=\"blog_item\">
                                    <div class=\"blog_item_img\">
                                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
            echo "\" class=\"blog_item_date\">
                                            <h3>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "objet", [], "any", false, false, false, 46), "html", null, true);
            echo "</h3>
                                        </a>

                                    </div>
                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog_details.html"), "html", null, true);
            echo "\">
                                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "text", [], "any", false, false, false, 52), "html", null, true);
            echo "</h2>
                                        </a>

                                        <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "avis", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>

                                        <br>
                                        <ul class=\"blog-info-link\">
                                            <li><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_showF", ["idF" => twig_get_attribute($this->env, $this->source, $context["feedback"], "idF", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i> show</a></li>
                                            ";
            // line 60
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), false))) {
                // line 61
                echo "

                                            ";
            }
            // line 64
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_delete", ["idF" => twig_get_attribute($this->env, $this->source, $context["feedback"], "idF", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i> delete</a></li>
                                            <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_edit", ["idF" => twig_get_attribute($this->env, $this->source, $context["feedback"], "idF", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> edit</a></li>
                                        </ul>
                                    </div>

                                </article>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                                <h1>no records found</h1>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            <button class=\"btn\" type=\"button\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_new");
        echo "\">Create new</a></button>
                            <nav class=\"blog-pagination justify-content-center d-flex\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div style=\"text-align: center;\">
                                            ";
        // line 78
        twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 78, $this->source); })()), "setPageRange", [0 => ((twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 78, $this->source); })()), "count", [], "any", false, false, false, 78) / 3) + 1)], "method", false, false, false, 78);
        // line 79
        echo "                                            ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 79, $this->source); })()), "feedback/pag.html.twig");
        echo "
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog_right_sidebar\">
                            <aside class=\"single_sidebar_widget search_widget\">
                                <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Recherche</h4>
                                <form method=\"post\" action=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Recherche");
        echo "\" role=\"Recherche\" class=\"sr-input-func\">
                                    <input type=\"text\" placeholder=\"Recherche...\"  name=\"Recherche\" class=\"search-int form-control\">
                                    <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                                </form>
                            </aside>
                            <aside class=\"single_sidebar_widget newsletter_widget\">
                                <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Newsletter</h4>
                                <form action=\"#\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
                                    </div>
                                    <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                            type=\"submit\">Subscribe</button>
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

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 118
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "feedback/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 118,  297 => 117,  260 => 90,  245 => 79,  243 => 78,  234 => 73,  227 => 71,  216 => 65,  211 => 64,  206 => 61,  204 => 60,  200 => 59,  193 => 55,  187 => 52,  183 => 51,  175 => 46,  171 => 45,  167 => 43,  162 => 42,  142 => 25,  138 => 24,  134 => 23,  115 => 6,  105 => 5,  94 => 120,  92 => 117,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Feedback index{% endblock %}
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
                                    <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">FeedBacks</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"{{ asset('index.html') }}\">Home</a></li>
                                            <li class=\"breadcrumb-item\"><a href=\"{{ asset('#') }}\">Contact</a></li>
                                            <li class=\"breadcrumb-item\"><a href=\"{{ asset('#') }}\">Feedback</a></li>
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
                            {% for feedback in feedback %}
                                <article class=\"blog_item\">
                                    <div class=\"blog_item_img\">
                                        <a href=\"{{ asset('#') }}\" class=\"blog_item_date\">
                                            <h3>{{ feedback.objet}}</h3>
                                        </a>

                                    </div>
                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"{{ asset('blog_details.html') }}\">
                                            <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">{{ feedback.text }}</h2>
                                        </a>

                                        <p>{{ feedback.avis }}</p>

                                        <br>
                                        <ul class=\"blog-info-link\">
                                            <li><a href=\"{{ path('feedback_showF', {'idF': feedback.idF}) }}\"><i class=\"fa fa-user\"></i> show</a></li>
                                            {% if app.user.id == false %}


                                            {% endif %}
                                            <li><a href=\"{{ path('feedback_delete', {'idF': feedback.idF}) }}\"><i class=\"fa fa-trash\"></i> delete</a></li>
                                            <li><a href=\"{{ path('feedback_edit', {'idF': feedback.idF}) }}\"><i class=\"fa fa-edit\"></i> edit</a></li>
                                        </ul>
                                    </div>

                                </article>
                            {% else %}
                                <h1>no records found</h1>
                            {% endfor %}
                            <button class=\"btn\" type=\"button\"><a href=\"{{ path('feedback_new') }}\">Create new</a></button>
                            <nav class=\"blog-pagination justify-content-center d-flex\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div style=\"text-align: center;\">
                                            {% do feedback.setPageRange( ( feedback.count / 3 ) +1 ) %}
                                            {{ knp_pagination_render(feedback, 'feedback/pag.html.twig') }}
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog_right_sidebar\">
                            <aside class=\"single_sidebar_widget search_widget\">
                                <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Recherche</h4>
                                <form method=\"post\" action=\"{{ path('Recherche') }}\" role=\"Recherche\" class=\"sr-input-func\">
                                    <input type=\"text\" placeholder=\"Recherche...\"  name=\"Recherche\" class=\"search-int form-control\">
                                    <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                                </form>
                            </aside>
                            <aside class=\"single_sidebar_widget newsletter_widget\">
                                <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Newsletter</h4>
                                <form action=\"#\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
                                    </div>
                                    <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                            type=\"submit\">Subscribe</button>
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
{% block footer %}

      {% endblock %}

{% endblock %}

", "feedback/indexF.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\feedback\\indexF.html.twig");
    }
}
