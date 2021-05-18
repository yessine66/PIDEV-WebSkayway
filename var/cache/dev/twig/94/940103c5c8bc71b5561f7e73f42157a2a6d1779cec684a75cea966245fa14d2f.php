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

/* base.html.twig */
class __TwigTemplate_c21e23a8c44053db0c242f6a41a327755916361ca023272b6906c89d98057441 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'heeader' => [$this, 'block_heeader'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>

        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
    </title>
    <link rel=\"stylesheet\" href=\"dist/css/StylesheetB.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">

</head>
<body>

";
        // line 40
        $this->displayBlock('heeader', $context, $blocks);
        // line 677
        echo "<div class=\"container\">
    <center>";
        // line 678
        $this->displayBlock('content', $context, $blocks);
        // line 684
        echo "</center>

";
        // line 686
        $this->displayBlock('footer', $context, $blocks);
        // line 693
        echo "<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>

</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "            skyway
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_heeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heeader"));

        // line 41
        echo "    <!-- Navbar -->

<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">



    <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li >
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_index");
        echo "\"class=\"nav-link\">A propos</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_index");
        echo "\"class=\"nav-link\">Actualités</a>
            </li>

            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Navbar Search -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"navbar-search-block\">
                    <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-navbar\" type=\"submit\">
                                    <i class=\"fas fa-search\"></i>
                                </button>

                                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class= \"nav-item\">
                <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                    LOGOUT
                </a>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-expand-arrows-alt\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>






    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img src=\"/img/skywaylogo.png\" alt=\"SKYWAY Learning\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">SKYWAY Learning</span>
        </a>


        <!-- SidebarSearch Form -->
        <div class=\"form-inline\">
            <div class=\"input-group\" data-widget=\"sidebar-search\">
                <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-sidebar\">
                        <i class=\"fas fa-search fa-fw\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class=\"nav-item\">

                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-sidebar-custom.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-chart-pie\"></i>
                        <p>
                            Gestion Utilisateur
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Utilisateur</p>
                            </a>
                        </li>



                    </ul>
                </li>





                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-edit\"></i>
                        <p>
                            Gestion categorie et cours
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Catégorie</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theme_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Théme</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 329
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Cours</p>
                            </a>
                        </li>

                    </ul>
                </li>





                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Test
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 352
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Gestion questions</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 358
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_index");
        echo "\"class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Gestion reponses</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 364
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_indexBack");
        echo "\"class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Resultats</p>
                            </a>
                        </li>

                    </ul>
                </li>
















                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-tree\"></i>
                        <p>
                            Gestion Partenariat et promotion
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 398
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Partenariat</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 404
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Promotion</p>
                            </a>
                        </li>



                        <li class=\"nav-item\">
                            <a href=\"";
        // line 413
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Statistiques</p>
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"";
        // line 420
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactP");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Contact</p>
                            </a>
                        </li>










                    </ul>
                </li>




                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-envelope\"></i>
                        <p>
                            Géstion Réclamation
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 451
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Reclamation</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 457
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Feedback</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-book\"></i>
                        <p>
                            Gestion Actualités et évènements
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 475
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualite_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Actualités</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 481
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Evenement</p>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-plus-square\"></i>
                        <p>
                            Extras
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>
                                    Login & Register v1
                                    <i class=\"fas fa-angle-left right\"></i>
                                </p>
                            </a>
                            <ul class=\"nav nav-treeview\">
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Login v1</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Register v1</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Forgot Password v1</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Recover Password v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>
                                    Login & Register v2
                                    <i class=\"fas fa-angle-left right\"></i>
                                </p>
                            </a>
                            <ul class=\"nav nav-treeview\">
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/login-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Login v2</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/register-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Register v2</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/forgot-password-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Forgot Password v2</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/recover-password-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Recover Password v2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Pace</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"starter.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-search\"></i>
                        <p>
                            Search
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/search/simple.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/search/enhanced.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Enhanced</p>
                            </a>
                        </li>
                    </ul>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>























";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 678
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "</center>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 686
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 687
        echo "    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2020-2021 Skyway</a>.</strong>
        All rights reserved.

    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  926 => 687,  916 => 686,  891 => 678,  685 => 481,  676 => 475,  655 => 457,  646 => 451,  612 => 420,  602 => 413,  590 => 404,  581 => 398,  544 => 364,  535 => 358,  526 => 352,  500 => 329,  491 => 323,  482 => 317,  454 => 292,  442 => 283,  248 => 92,  212 => 59,  206 => 56,  189 => 41,  179 => 40,  168 => 9,  158 => 8,  129 => 693,  127 => 686,  123 => 684,  121 => 678,  118 => 677,  116 => 40,  108 => 35,  103 => 33,  98 => 31,  93 => 29,  88 => 27,  83 => 25,  78 => 23,  73 => 21,  68 => 19,  58 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>

        {% block title %}
            skyway
        {% endblock %}

    </title>
    <link rel=\"stylesheet\" href=\"dist/css/StylesheetB.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/jqvmap/jqvmap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/summernote/summernote-bs4.min.css') }}\">

</head>
<body>

{% block heeader %}
    <!-- Navbar -->

<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">



    <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li >
                <a href=\"{{ path('partenaire_index') }}\"class=\"nav-link\">A propos</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"{{ path('promotion_index') }}\"class=\"nav-link\">Actualités</a>
            </li>

            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Navbar Search -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"navbar-search-block\">
                    <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-navbar\" type=\"submit\">
                                    <i class=\"fas fa-search\"></i>
                                </button>

                                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class= \"nav-item\">
                <a href=\"{{ path('logout') }}\">
                    LOGOUT
                </a>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-expand-arrows-alt\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>






    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img src=\"/img/skywaylogo.png\" alt=\"SKYWAY Learning\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">SKYWAY Learning</span>
        </a>


        <!-- SidebarSearch Form -->
        <div class=\"form-inline\">
            <div class=\"input-group\" data-widget=\"sidebar-search\">
                <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-sidebar\">
                        <i class=\"fas fa-search fa-fw\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class=\"nav-item\">

                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/top-nav-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-sidebar-custom.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{ asset('pages/layout/collapsed-sidebar.html') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-chart-pie\"></i>
                        <p>
                            Gestion Utilisateur
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('utilisateur_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Utilisateur</p>
                            </a>
                        </li>



                    </ul>
                </li>





                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-edit\"></i>
                        <p>
                            Gestion categorie et cours
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('categorie_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Catégorie</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('theme_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Théme</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('cours_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Cours</p>
                            </a>
                        </li>

                    </ul>
                </li>





                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-table\"></i>
                        <p>
                            Gestion Test
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('question_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Gestion questions</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('reponse_index') }}\"class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Gestion reponses</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('test_indexBack') }}\"class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Resultats</p>
                            </a>
                        </li>

                    </ul>
                </li>
















                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-tree\"></i>
                        <p>
                            Gestion Partenariat et promotion
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('partenaire_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Partenariat</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('promotion_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Promotion</p>
                            </a>
                        </li>



                        <li class=\"nav-item\">
                            <a href=\"{{ path('stat') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Statistiques</p>
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"{{ path('contactP') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Contact</p>
                            </a>
                        </li>










                    </ul>
                </li>




                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-envelope\"></i>
                        <p>
                            Géstion Réclamation
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('reclamation_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Reclamation</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('feedback_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Feedback</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-book\"></i>
                        <p>
                            Gestion Actualités et évènements
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('actualite_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Actualités</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('evenement_index') }}\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Evenement</p>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-plus-square\"></i>
                        <p>
                            Extras
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>
                                    Login & Register v1
                                    <i class=\"fas fa-angle-left right\"></i>
                                </p>
                            </a>
                            <ul class=\"nav nav-treeview\">
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Login v1</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Register v1</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Forgot Password v1</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Recover Password v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>
                                    Login & Register v2
                                    <i class=\"fas fa-angle-left right\"></i>
                                </p>
                            </a>
                            <ul class=\"nav nav-treeview\">
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/login-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Login v2</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/register-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Register v2</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/forgot-password-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Forgot Password v2</p>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"pages/examples/recover-password-v2.html\" class=\"nav-link\">
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>Recover Password v2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Pace</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"starter.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-search\"></i>
                        <p>
                            Search
                            <i class=\"fas fa-angle-left right\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"pages/search/simple.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"pages/search/enhanced.html\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Enhanced</p>
                            </a>
                        </li>
                    </ul>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>























{% endblock %}
<div class=\"container\">
    <center>{% block content %}</center>
</div>




{% endblock %}</center>

{% block footer %}
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2020-2021 Skyway</a>.</strong>
        All rights reserved.

    </footer>
{% endblock %}
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>

</body>
</html>

", "base.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\base.html.twig");
    }
}
