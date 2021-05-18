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

/* baseF.html.twig */
class __TwigTemplate_152833077e099ac0bd5756e7360e9ac57f1f652fdea4e7af2d9001218c29f8ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titlefr' => [$this, 'block_titlefr'],
            'cssfr' => [$this, 'block_cssfr'],
            'headerfr' => [$this, 'block_headerfr'],
            'bodyfr' => [$this, 'block_bodyfr'],
            'container' => [$this, 'block_container'],
            'contentfr' => [$this, 'block_contentfr'],
            'serviceContainer' => [$this, 'block_serviceContainer'],
            'footerfr' => [$this, 'block_footerfr'],
            'jsfr' => [$this, 'block_jsfr'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseF.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>
        ";
        // line 8
        $this->displayBlock('titlefr', $context, $blocks);
        // line 9
        echo "    </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"manifest\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("site.webmanifest"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\">
    ";
        // line 14
        $this->displayBlock('cssfr', $context, $blocks);
        // line 32
        echo "</head>

";
        // line 35
        echo "    <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logoxx.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    ";
        // line 47
        $this->displayBlock('headerfr', $context, $blocks);
        // line 114
        echo "    ";
        $this->displayBlock('bodyfr', $context, $blocks);
        // line 634
        echo "
";
        // line 635
        $this->displayBlock('footerfr', $context, $blocks);
        // line 729
        echo "<!-- Scroll Up -->
<div id=\"back-top\" >
    <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
</div>
";
        // line 733
        $this->displayBlock('jsfr', $context, $blocks);
        // line 777
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_titlefr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlefr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlefr"));

        echo "Courses | Education ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_cssfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssfr"));

        // line 15
        echo "        <!-- CSS here -->

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/progressbar_barfiller.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animated-headline.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nice-select.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_headerfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerfr"));

        // line 48
        echo "        <header>
            <!-- Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header \">
                    <div class=\"header-bottom  header-sticky\">
                        <div class=\"container-fluid\">
                            <div class=\"row align-items-center\">
                                <!-- Logo -->
                                <div class=\"col-xl-2 col-lg-2\">
                                    <div class=\"logo\">
                                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-xl-10 col-lg-10\">
                                    <div class=\"menu-wrapper d-flex align-items-center justify-content-end\">
                                        <!-- Main-menu -->
                                        <div class=\"main-menu d-none d-lg-block\">
                                            <nav>
                                                <ul id=\"navigation\">
                                                    <li class=\"active\" ><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                                                    <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Cours & Test</a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("themeF_index");
        echo "\">Cours</a></li>
                                                            <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionF_show");
        echo "\">Test</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursF_index");
        echo "\">About</a></li>
                                                    <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Promotion </a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_indexR");
        echo "\">Partenire</a></li>
                                                            <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_indexR");
        echo "\">Promotion</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">News & Events</a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_indexF");
        echo "\">News</a></li>
                                                            <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_indexF");
        echo "\">Events</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"#\">Contact</a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationF_index");
        echo "\">Reclamation</a></li>
                                                            <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedbackF_index");
        echo "\">FeedBack</a></li>

                                                        </ul>
                                                    </li>
                                                    <!-- Button -->
                                                    <li class=\"button-header margin-left \"><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_showFront");
        echo "\" class=\"btn\">Profile</a></li>
                                                    <li class=\"button-header\"><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn3\">Log Out</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class=\"col-12\">
                                    <div class=\"mobile_menu d-block d-lg-none\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_bodyfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        // line 115
        echo "        <main>
        ";
        // line 116
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
            <!--? slider Area Start-->
            <section class=\"slider-area \">
                <div class=\"slider-active\">
                    <!-- Single Slider -->
                    <div class=\"single-slider slider-height d-flex align-items-center\">
                        ";
        // line 122
        $this->displayBlock('container', $context, $blocks);
        // line 135
        echo "                    </div>
                </div>
            </section>

            ";
        // line 139
        $this->displayBlock('contentfr', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 123
        echo "                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-xl-6 col-lg-7 col-md-12\">
                                        <div class=\"hero__caption\">
                                            <h1 data-animation=\"fadeInLeft\" data-delay=\"0.2s\">SKYWAY<br> platform</h1>
                                            <p data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                                            <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\">Join for Free</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_contentfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        // line 140
        echo "            <!-- ? services-area -->
            <div class=\"services-area\">
                ";
        // line 142
        $this->displayBlock('serviceContainer', $context, $blocks);
        // line 181
        echo "            </div>
            <!-- Courses area start -->
            <div class=\"courses-area section-padding40 fix\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Our featured courses</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"courses-actives\">
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/featured1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>

                            </div>
                        </div>
                        <!-- Single -->
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/featured2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/featured3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>

                            </div>
                        </div>
                        <!-- Single -->
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/featured2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>

                            </div>
                        </div>
                        <!-- Single -->
                    </div>
                </div>
            </div>
            <!-- Courses area End -->
            <!--? About Area-1 Start -->
            <section class=\"about-area1 fix pt-10\">
                <div class=\"support-wrapper align-items-center\">
                    <div class=\"left-content1\">
                        <div class=\"about-icon\">
                            <img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/about.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <!-- section tittle -->
                        <div class=\"section-tittle section-tittle2 mb-55\">
                            <div class=\"front-text\">
                                <h2 class=\"\">Learn new skills online with top educators</h2>
                                <p>The automated process all your website tasks. Discover tools and
                                    techniques to engage effectively with vulnerable children and young
                                    people.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/right-icon.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Techniques to engage effectively with vulnerable children and young people.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/right-icon.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world  learning together.</p>
                            </div>
                        </div>

                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/right-icon.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"right-content1\">
                        <!-- img -->
                        <div class=\"right-img\">
                            <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/about.png"), "html", null, true);
        echo "\" alt=\"\">

                            <div class=\"video-icon\" >
                                <a class=\"popup-video btn-icon\" href=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=up68UAfH0d0"), "html", null, true);
        echo "\"><i class=\"fas fa-play\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
            <!--? top subjects Area Start -->
            <div class=\"topic-area section-padding40\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Explore top subjects</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic2.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic3.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic4.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic5.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic6.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic7.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/topic8.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"section-tittle text-center mt-20\">
                                <a href=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("courses.html"), "html", null, true);
        echo "\" class=\"border-btn\">View More Subjects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top subjects End -->
            <!--? About Area-3 Start -->
            <section class=\"about-area3 fix\">
                <div class=\"support-wrapper align-items-center\">
                    <div class=\"right-content3\">
                        <!-- img -->
                        <div class=\"right-img\">
                            <img src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/about3.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"left-content3\">
                        <!-- section tittle -->
                        <div class=\"section-tittle section-tittle2 mb-20\">
                            <div class=\"front-text\">
                                <h2 class=\"\">Learner outcomes on courses you will take</h2>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/right-icon.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Techniques to engage effectively with vulnerable children and young people.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/right-icon.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world
                                    learning together.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/right-icon."), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world learning together.
                                    Online learning is as easy and natural.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
            <!--? Team -->
            <section class=\"team-area section-padding40 fix\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Community experts</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"team-active\">
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/team1.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Mr. Urela</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/team2.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Mr. Uttom</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/team3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Mr. Shakil</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/team4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Mr. Arafat</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/team3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Mr. saiful</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services End -->
            <!--? About Area-2 Start -->
            <section class=\"about-area2 fix pb-padding\">
                <div class=\"support-wrapper align-items-center\">
                    <div class=\"right-content2\">
                        <!-- img -->
                        <div class=\"right-img\">
                            <img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/about2.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"left-content2\">
                        <!-- section tittle -->
                        <div class=\"section-tittle section-tittle2 mb-20\">
                            <div class=\"front-text\">
                                <h2 class=\"\">Take the next step
                                    toward your personal
                                    and professional goals
                                    with us.</h2>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
                                <a href=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn\">Join now for Free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
        </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_serviceContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "serviceContainer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "serviceContainer"));

        // line 143
        echo "                    <div class=\"container\">
                        <div class=\"row justify-content-sm-center\">
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"";
        // line 148
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
        // line 159
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
        // line 170
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
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 635
    public function block_footerfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerfr"));

        // line 636
        echo "    <footer>

        <div class=\"footer-wrappper footer-bg\">
            <!-- Footer Start-->
            <div class=\"footer-area footer-padding\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-xl-4 col-lg-5 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"single-footer-caption mb-30\">
                                    <!-- logo -->
                                    <div class=\"footer-logo mb-25\">
                                        <a href=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logo2_footer.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"footer-tittle\">
                                        <div class=\"footer-pera\">
                                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class=\"footer-social\">
                                        <a href=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fab fa-twitter\"></i></a>
                                        <a href=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://bit.ly/sai4ull"), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a href=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fab fa-pinterest-p\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-5\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Design & creatives</a></li>
                                        <li><a href=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Telecommunication</a></li>
                                        <li><a href=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Restaurant</a></li>
                                        <li><a href=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></li>
                                        <li><a href=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-4 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Design & creatives</a></li>
                                        <li><a href=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Telecommunication</a></li>
                                        <li><a href=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Restaurant</a></li>
                                        <li><a href=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></li>
                                        <li><a href=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Design & creatives</a></li>
                                        <li><a href=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Telecommunication</a></li>
                                        <li><a href=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Restaurant</a></li>
                                        <li><a href=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Programing</a></li>
                                        <li><a href=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class=\"footer-bottom-area\">
                <div class=\"container\">
                    <div class=\"footer-border\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-xl-12 \">
                                <div class=\"footer-copy-right text-center\">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://colorlib.com"), "html", null, true);
        echo "\" target=\"_blank\">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 733
    public function block_jsfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsfr"));

        // line 734
        echo "    <!-- JS here -->
    <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Jquery Mobile Menu -->
    <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
    

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>

    <!-- Date Picker -->
    <script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Nice-select, sticky -->
    <script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <!-- Progress -->
    <script src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/hover-direction-snake.min.js"), "html", null, true);
        echo "\"></script>

    <!-- contact js -->
    <script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1438 => 775,  1434 => 774,  1428 => 771,  1424 => 770,  1420 => 769,  1416 => 768,  1412 => 767,  1406 => 764,  1402 => 763,  1398 => 762,  1394 => 761,  1388 => 758,  1383 => 756,  1379 => 755,  1374 => 753,  1368 => 750,  1364 => 749,  1360 => 748,  1355 => 746,  1351 => 745,  1344 => 741,  1339 => 739,  1335 => 738,  1331 => 737,  1326 => 735,  1323 => 734,  1313 => 733,  1291 => 717,  1272 => 701,  1268 => 700,  1264 => 699,  1260 => 698,  1256 => 697,  1243 => 687,  1239 => 686,  1235 => 685,  1231 => 684,  1227 => 683,  1214 => 673,  1210 => 672,  1206 => 671,  1202 => 670,  1198 => 669,  1185 => 659,  1181 => 658,  1177 => 657,  1163 => 648,  1149 => 636,  1139 => 635,  1118 => 170,  1104 => 159,  1090 => 148,  1083 => 143,  1073 => 142,  1054 => 624,  1039 => 612,  1022 => 598,  1016 => 595,  1007 => 589,  1001 => 586,  992 => 580,  986 => 577,  977 => 571,  971 => 568,  962 => 562,  956 => 559,  929 => 535,  917 => 526,  906 => 518,  891 => 506,  875 => 493,  862 => 483,  856 => 480,  844 => 471,  838 => 468,  826 => 459,  820 => 456,  808 => 447,  802 => 444,  790 => 435,  784 => 432,  772 => 423,  766 => 420,  754 => 411,  748 => 408,  736 => 399,  730 => 396,  706 => 375,  700 => 372,  687 => 362,  675 => 353,  664 => 345,  648 => 332,  630 => 317,  608 => 298,  599 => 294,  586 => 284,  564 => 265,  555 => 261,  543 => 252,  522 => 234,  513 => 230,  500 => 220,  478 => 201,  469 => 197,  451 => 181,  449 => 142,  445 => 140,  435 => 139,  419 => 129,  411 => 123,  401 => 122,  391 => 139,  385 => 135,  383 => 122,  374 => 116,  371 => 115,  361 => 114,  333 => 96,  329 => 95,  321 => 90,  317 => 89,  309 => 84,  305 => 83,  300 => 81,  294 => 78,  290 => 77,  285 => 75,  281 => 74,  275 => 71,  271 => 70,  266 => 68,  262 => 67,  248 => 58,  236 => 48,  226 => 47,  214 => 30,  210 => 29,  206 => 28,  202 => 27,  198 => 26,  194 => 25,  190 => 24,  186 => 23,  182 => 22,  178 => 21,  174 => 20,  170 => 19,  166 => 18,  162 => 17,  158 => 15,  148 => 14,  129 => 8,  117 => 777,  115 => 733,  109 => 729,  107 => 635,  104 => 634,  101 => 114,  99 => 47,  90 => 41,  82 => 35,  78 => 32,  76 => 14,  72 => 13,  68 => 12,  63 => 9,  61 => 8,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>
        {% block titlefr %}Courses | Education {% endblock %}
    </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"manifest\" href=\"{{asset('site.webmanifest')}}\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('assets/img/favicon.ico')}}\">
    {% block cssfr%}
        <!-- CSS here -->

        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.carousel.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/slicknav.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/flaticon.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/progressbar_barfiller.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/gijgo.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/animated-headline.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/magnific-popup.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome-all.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/themify-icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/slick.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/nice-select.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
    {% endblock %}
</head>

{# {% block bodyfr %} #}
    <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"{{asset('assets/img/logo/logoxx.png')}}\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    {% block headerfr%}
        <header>
            <!-- Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header \">
                    <div class=\"header-bottom  header-sticky\">
                        <div class=\"container-fluid\">
                            <div class=\"row align-items-center\">
                                <!-- Logo -->
                                <div class=\"col-xl-2 col-lg-2\">
                                    <div class=\"logo\">
                                        <a href=\"{{asset('index.html')}}\"><img src=\"{{asset('assets/img/logo/logo.png')}}\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-xl-10 col-lg-10\">
                                    <div class=\"menu-wrapper d-flex align-items-center justify-content-end\">
                                        <!-- Main-menu -->
                                        <div class=\"main-menu d-none d-lg-block\">
                                            <nav>
                                                <ul id=\"navigation\">
                                                    <li class=\"active\" ><a href=\"{{asset('index.html')}}\">Home</a></li>
                                                    <li><a href=\"{{asset('#')}}\">Cours & Test</a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"{{path('themeF_index')}}\">Cours</a></li>
                                                            <li><a href=\"{{path('questionF_show')}}\">Test</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"{{path('coursF_index')}}\">About</a></li>
                                                    <li><a href=\"{{asset('#')}}\">Promotion </a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"{{path('partenaire_indexR')}}\">Partenire</a></li>
                                                            <li><a href=\"{{path('promotion_indexR')}}\">Promotion</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"{{asset('#')}}\">News & Events</a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"{{path('actualite_indexF')}}\">News</a></li>
                                                            <li><a href=\"{{path('evenement_indexF')}}\">Events</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"#\">Contact</a>
                                                        <ul class=\"submenu\">
                                                            <li><a href=\"{{path('reclamationF_index')}}\">Reclamation</a></li>
                                                            <li><a href=\"{{path('feedbackF_index')}}\">FeedBack</a></li>

                                                        </ul>
                                                    </li>
                                                    <!-- Button -->
                                                    <li class=\"button-header margin-left \"><a href=\"{{path('utilisateur_showFront')}}\" class=\"btn\">Profile</a></li>
                                                    <li class=\"button-header\"><a href=\"{{path('logout')}}\" class=\"btn btn3\">Log Out</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class=\"col-12\">
                                    <div class=\"mobile_menu d-block d-lg-none\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
    {% endblock%}
    {% block bodyfr %}
        <main>
        {{ include('@MercurySeriesFlashy/flashy.html.twig') }}
            <!--? slider Area Start-->
            <section class=\"slider-area \">
                <div class=\"slider-active\">
                    <!-- Single Slider -->
                    <div class=\"single-slider slider-height d-flex align-items-center\">
                        {% block container %}
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-xl-6 col-lg-7 col-md-12\">
                                        <div class=\"hero__caption\">
                                            <h1 data-animation=\"fadeInLeft\" data-delay=\"0.2s\">SKYWAY<br> platform</h1>
                                            <p data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                                            <a href=\"{{ asset('#') }}\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\">Join for Free</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                </div>
            </section>

            {% block contentfr%}
            <!-- ? services-area -->
            <div class=\"services-area\">
                {% block serviceContainer%}
                    <div class=\"container\">
                        <div class=\"row justify-content-sm-center\">
                            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-services mb-30\">
                                    <div class=\"features-icon\">
                                        <img src=\"{{asset('assets/img/icon/icon1.svg')}}\" alt=\"\">
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
                                        <img src=\"{{asset('assets/img/icon/icon2.svg')}}\" alt=\"\">
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
                                        <img src=\"{{asset('assets/img/icon/icon3.svg')}}\" alt=\"\">
                                    </div>
                                    <div class=\"features-caption\">
                                        <h3>Life time access</h3>
                                        <p>The automated process all your website tasks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endblock %}
            </div>
            <!-- Courses area start -->
            <div class=\"courses-area section-padding40 fix\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Our featured courses</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"courses-actives\">
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"{{ asset('#') }}\"><img src=\"{{ asset('assets/img/gallery/featured1.png')}}\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"{{ asset('#')}}\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"{{ asset('#') }}\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>

                            </div>
                        </div>
                        <!-- Single -->
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"{{ asset('#') }}\"><img src=\"{{ asset('assets/img/gallery/featured2.png')}}\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"{{asset('#') }}\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"{{asset('#') }}\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"{{asset('#') }}\"><img src=\"{{ asset('assets/img/gallery/featured3.png')}}\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"{{asset('#') }}\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"{{asset('#') }}\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>

                            </div>
                        </div>
                        <!-- Single -->
                        <!-- Single -->
                        <div class=\"properties pb-20\">
                            <div class=\"properties__card\">
                                <div class=\"properties__img overlay1\">
                                    <a href=\"{{asset('#') }}\"><img src=\"{{ asset('assets/img/gallery/featured2.png')}}\" alt=\"\"></a>
                                </div>
                                <div class=\"properties__caption\">
                                    <p>User Experience</p>
                                    <h3><a href=\"{{asset('#') }}\">Fundamental of UX for Application design</a></h3>
                                    <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

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
                                            <p><span>(4.5)</span> based on 120</p>
                                        </div>
                                        <div class=\"price\">
                                            <span>\$135</span>
                                        </div>
                                    </div>
                                    <a href=\"{{asset('#') }}\" class=\"border-btn border-btn2\">Find out more</a>
                                </div>

                            </div>
                        </div>
                        <!-- Single -->
                    </div>
                </div>
            </div>
            <!-- Courses area End -->
            <!--? About Area-1 Start -->
            <section class=\"about-area1 fix pt-10\">
                <div class=\"support-wrapper align-items-center\">
                    <div class=\"left-content1\">
                        <div class=\"about-icon\">
                            <img src=\"{{ asset('assets/img/icon/about.svg')}}\" alt=\"\">
                        </div>
                        <!-- section tittle -->
                        <div class=\"section-tittle section-tittle2 mb-55\">
                            <div class=\"front-text\">
                                <h2 class=\"\">Learn new skills online with top educators</h2>
                                <p>The automated process all your website tasks. Discover tools and
                                    techniques to engage effectively with vulnerable children and young
                                    people.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"{{ asset('assets/img/icon/right-icon.svg')}}\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Techniques to engage effectively with vulnerable children and young people.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"{{ asset('assets/img/icon/right-icon.svg')}}\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world  learning together.</p>
                            </div>
                        </div>

                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"{{ asset('assets/img/icon/right-icon.svg')}}\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"right-content1\">
                        <!-- img -->
                        <div class=\"right-img\">
                            <img src=\"{{ asset('assets/img/gallery/about.png')}}\" alt=\"\">

                            <div class=\"video-icon\" >
                                <a class=\"popup-video btn-icon\" href=\"{{asset('https://www.youtube.com/watch?v=up68UAfH0d0')}}\"><i class=\"fas fa-play\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
            <!--? top subjects Area Start -->
            <div class=\"topic-area section-padding40\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Explore top subjects</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic1.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic2.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic3.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic4.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic5.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic6.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic7.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-topic text-center mb-30\">
                                <div class=\"topic-img\">
                                    <img src=\"{{ asset('assets/img/gallery/topic8.png')}}\" alt=\"\">
                                    <div class=\"topic-content-box\">
                                        <div class=\"topic-content\">
                                            <h3><a href=\"{{asset('#') }}\">Programing</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"section-tittle text-center mt-20\">
                                <a href=\"{{asset('courses.html') }}\" class=\"border-btn\">View More Subjects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top subjects End -->
            <!--? About Area-3 Start -->
            <section class=\"about-area3 fix\">
                <div class=\"support-wrapper align-items-center\">
                    <div class=\"right-content3\">
                        <!-- img -->
                        <div class=\"right-img\">
                            <img src=\"{{ asset('assets/img/gallery/about3.png')}}\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"left-content3\">
                        <!-- section tittle -->
                        <div class=\"section-tittle section-tittle2 mb-20\">
                            <div class=\"front-text\">
                                <h2 class=\"\">Learner outcomes on courses you will take</h2>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"{{ asset('assets/img/icon/right-icon.svg')}}\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Techniques to engage effectively with vulnerable children and young people.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"{{ asset('assets/img/icon/right-icon.svg')}}\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world
                                    learning together.</p>
                            </div>
                        </div>
                        <div class=\"single-features\">
                            <div class=\"features-icon\">
                                <img src=\"{{ asset('assets/img/icon/right-icon.')}}\" alt=\"\">
                            </div>
                            <div class=\"features-caption\">
                                <p>Join millions of people from around the world learning together.
                                    Online learning is as easy and natural.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
            <!--? Team -->
            <section class=\"team-area section-padding40 fix\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-8\">
                            <div class=\"section-tittle text-center mb-55\">
                                <h2>Community experts</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"team-active\">
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"{{ asset('assets/img/gallery/team1.png')}}\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"{{ asset('services.html')}}\">Mr. Urela</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"{{ asset('assets/img/gallery/team2.png')}}\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"{{ asset('services.html')}}\">Mr. Uttom</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"{{ asset('assets/img/gallery/team3.png')}}\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"{{ asset('services.html')}}\">Mr. Shakil</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"{{ asset('assets/img/gallery/team4.png')}}\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"{{ asset('services.html')}}\">Mr. Arafat</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                        <div class=\"single-cat text-center\">
                            <div class=\"cat-icon\">
                                <img src=\"{{ asset('assets/img/gallery/team3.png')}}\" alt=\"\">
                            </div>
                            <div class=\"cat-cap\">
                                <h5><a href=\"{{ asset('services.html')}}\">Mr. saiful</a></h5>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services End -->
            <!--? About Area-2 Start -->
            <section class=\"about-area2 fix pb-padding\">
                <div class=\"support-wrapper align-items-center\">
                    <div class=\"right-content2\">
                        <!-- img -->
                        <div class=\"right-img\">
                            <img src=\"{{ asset('assets/img/gallery/about2.png')}}\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"left-content2\">
                        <!-- section tittle -->
                        <div class=\"section-tittle section-tittle2 mb-20\">
                            <div class=\"front-text\">
                                <h2 class=\"\">Take the next step
                                    toward your personal
                                    and professional goals
                                    with us.</h2>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
                                <a href=\"{{ asset('#')}}\" class=\"btn\">Join now for Free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
        </main>
    {% endblock %}
{% endblock %}

{% block footerfr%}
    <footer>

        <div class=\"footer-wrappper footer-bg\">
            <!-- Footer Start-->
            <div class=\"footer-area footer-padding\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-xl-4 col-lg-5 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"single-footer-caption mb-30\">
                                    <!-- logo -->
                                    <div class=\"footer-logo mb-25\">
                                        <a href=\"{{asset('index.html')}}\"><img src=\"{{asset('assets/img/logo/logo2_footer.png')}}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"footer-tittle\">
                                        <div class=\"footer-pera\">
                                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class=\"footer-social\">
                                        <a href=\"{{asset('#')}}\"><i class=\"fab fa-twitter\"></i></a>
                                        <a href=\"{{asset('https://bit.ly/sai4ull')}}\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a href=\"{{asset('#')}}\"><i class=\"fab fa-pinterest-p\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-5\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href=\"{{asset('#')}}\">Design & creatives</a></li>
                                        <li><a href=\"{{asset('#')}}\">Telecommunication</a></li>
                                        <li><a href=\"{{asset('#')}}\">Restaurant</a></li>
                                        <li><a href=\"{{asset('#')}}\">Programing</a></li>
                                        <li><a href=\"{{asset('#')}}\">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-4 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href=\"{{asset('#')}}\">Design & creatives</a></li>
                                        <li><a href=\"{{asset('#')}}\">Telecommunication</a></li>
                                        <li><a href=\"{{asset('#')}}\">Restaurant</a></li>
                                        <li><a href=\"{{asset('#')}}\">Programing</a></li>
                                        <li><a href=\"{{asset('#')}}\">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href=\"{{asset('#')}}\">Design & creatives</a></li>
                                        <li><a href=\"{{asset('#')}}\">Telecommunication</a></li>
                                        <li><a href=\"{{asset('#')}}\">Restaurant</a></li>
                                        <li><a href=\"{{asset('#')}}\">Programing</a></li>
                                        <li><a href=\"{{asset('#')}}\">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class=\"footer-bottom-area\">
                <div class=\"container\">
                    <div class=\"footer-border\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-xl-12 \">
                                <div class=\"footer-copy-right text-center\">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"{{asset('https://colorlib.com')}}\" target=\"_blank\">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
{% endblock %}
<!-- Scroll Up -->
<div id=\"back-top\" >
    <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
</div>
{% block jsfr%}
    <!-- JS here -->
    <script src=\"{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}\"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=\"{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/bootstrap.min.js')}}\"></script>
    <!-- Jquery Mobile Menu -->
    <script src=\"{{asset('./assets/js/jquery.slicknav.min.js')}}\"></script>
    

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src=\"{{asset('./assets/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/slick.min.js')}}\"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src=\"{{asset('./assets/js/wow.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/animated.headline.js')}}\"></script>
    <script src=\"{{asset('./assets/js/jquery.magnific-popup.js')}}\"></script>

    <!-- Date Picker -->
    <script src=\"{{asset('./assets/js/gijgo.min.js')}}\"></script>
    <!-- Nice-select, sticky -->
    <script src=\"{{asset('./assets/js/jquery.nice-select.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/jquery.sticky.js')}}\"></script>
    <!-- Progress -->
    <script src=\"{{asset('./assets/js/jquery.barfiller.js')}}\"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src=\"{{asset('./assets/js/jquery.counterup.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/jquery.countdown.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/hover-direction-snake.min.js')}}\"></script>

    <!-- contact js -->
    <script src=\"{{asset('./assets/js/contact.js')}}\"></script>
    <script src=\"{{asset('./assets/js/jquery.form.js')}}\"></script>
    <script src=\"{{asset('./assets/js/jquery.validate.min.js')}}\"></script>
    <script src=\"{{asset('./assets/js/mail-script.js')}}\"></script>
    <script src=\"{{asset('./assets/js/jquery.ajaxchimp.min.js')}}\"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=\"{{asset('./assets/js/plugins.js')}}\"></script>
    <script src=\"{{asset('./assets/js/main.js')}}\"></script>
{% endblock %}
</body>
</html>
", "baseF.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\baseF.html.twig");
    }
}
