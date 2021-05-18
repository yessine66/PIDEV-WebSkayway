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

/* reclamation/indexF.html.twig */
class __TwigTemplate_9fe0ffe651a2386649b3a4b10a0cb16f777fdfac2938eac11b3cba30e0ff7461 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'contentfr' => [$this, 'block_contentfr'],
            'bodyfr' => [$this, 'block_bodyfr'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "reclamation/indexF.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reclamation index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contentfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        // line 8
        echo "
";
        // line 9
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

        // line 10
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
                                <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Reclamations</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Contact</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationF_index");
        echo "\">Reclamation</a></li>
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 49
            echo "                            <article class=\"blog_item\">
                                <div class=\"blog_item_img\">
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
            echo "\" class=\"blog_item_date\">
                                        <h3>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "objet", [], "any", false, false, false, 52), "html", null, true);
            echo "</h3>
                                    </a>

                                </div>
                                <div class=\"blog_details\">
                                    <a class=\"d-inline-block\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog_details.html"), "html", null, true);
            echo "\">
                                        <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "textR", [], "any", false, false, false, 58), "html", null, true);
            echo "</h2>
                                    </a>

                                    <p>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "enseignant", [], "any", false, false, false, 61), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "cours", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
                                    <p style=\"float: right\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateEnvoi", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
                                    <br>
                                    <ul class=\"blog-info-link\">
                                        <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_showF", ["idRec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idRec", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i> show</a></li>
                                        <li><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["idRec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idRec", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i> delete</a></li>
                                        <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["idRec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idRec", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> edit</a></li>


                                    </ul>
                                </div>

                            </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                            <h1>no records found</h1>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        <button class=\"btn\" type=\"button\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Create new</a></button>
                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"";
        // line 92
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
                                <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Recherche</h4>
                                <form method=\"post\" action=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Recherche");
        echo "\" role=\"Recherche\" class=\"sr-input-func\">
                                    <input type=\"text\" placeholder=\"Recherche...\"  name=\"Recherche\" class=\"search-int form-control\">
                                    <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                                </form>
                            </form>

                        </aside>
                        <aside class=\"single_sidebar_widget newsletter_widget\">
                            <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Newsletter</h4>
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
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

</main>
    ";
        // line 129
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 133
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo "    ";
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 130
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "        <script src=\"//code.jquery.com/jquery.js\"></script>
        <!-- Load Flashy default JavaScript -->
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 138
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 138,  383 => 136,  379 => 134,  369 => 133,  357 => 131,  354 => 130,  344 => 129,  331 => 139,  328 => 133,  326 => 129,  299 => 105,  283 => 92,  277 => 89,  271 => 86,  263 => 81,  255 => 77,  248 => 75,  235 => 67,  231 => 66,  227 => 65,  221 => 62,  216 => 61,  210 => 58,  206 => 57,  198 => 52,  194 => 51,  190 => 49,  185 => 48,  165 => 31,  161 => 30,  157 => 29,  136 => 10,  117 => 9,  114 => 8,  104 => 7,  85 => 6,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}
{% block head %}
    <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
{% endblock %}
{% block title %}Reclamation index{% endblock %}
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
                                <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Reclamations</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"{{ asset('index.html') }}\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"{{ asset('#') }}\">Contact</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('reclamationF_index') }}\">Reclamation</a></li>
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
                        {% for reclamation in reclamations %}
                            <article class=\"blog_item\">
                                <div class=\"blog_item_img\">
                                    <a href=\"{{ asset('#') }}\" class=\"blog_item_date\">
                                        <h3>{{ reclamation.objet}}</h3>
                                    </a>

                                </div>
                                <div class=\"blog_details\">
                                    <a class=\"d-inline-block\" href=\"{{ asset('blog_details.html') }}\">
                                        <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">{{ reclamation.textR }}</h2>
                                    </a>

                                    <p>{{ reclamation.enseignant }}{{ reclamation.cours }}</p>
                                    <p style=\"float: right\">{{ reclamation.dateEnvoi }}</p>
                                    <br>
                                    <ul class=\"blog-info-link\">
                                        <li><a href=\"{{ path('reclamation_showF', {'idRec': reclamation.idRec}) }}\"><i class=\"fa fa-user\"></i> show</a></li>
                                        <li><a href=\"{{ path('reclamation_delete', {'idRec': reclamation.idRec}) }}\"><i class=\"fa fa-trash\"></i> delete</a></li>
                                        <li><a href=\"{{ path('reclamation_edit', {'idRec': reclamation.idRec}) }}\"><i class=\"fa fa-edit\"></i> edit</a></li>


                                    </ul>
                                </div>

                            </article>
                        {% else %}
                            <h1>no records found</h1>
                        {% endfor %}
                        <button class=\"btn\" type=\"button\"><a href=\"{{ path('reclamation_new') }}\">Create new</a></button>
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
                                <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Recherche</h4>
                                <form method=\"post\" action=\"{{ path('Recherche') }}\" role=\"Recherche\" class=\"sr-input-func\">
                                    <input type=\"text\" placeholder=\"Recherche...\"  name=\"Recherche\" class=\"search-int form-control\">
                                    <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                                </form>
                            </form>

                        </aside>
                        <aside class=\"single_sidebar_widget newsletter_widget\">
                            <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Newsletter</h4>
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
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

</main>
    {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    {% endblock %}
    {% block javascripts %}
        <script src=\"//code.jquery.com/jquery.js\"></script>
        <!-- Load Flashy default JavaScript -->
        <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
        {#{{ encore_entry_script_tags('app') }}#}
    {% endblock %}
    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}
{% endblock %}", "reclamation/indexF.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\reclamation\\indexF.html.twig");
    }
}
