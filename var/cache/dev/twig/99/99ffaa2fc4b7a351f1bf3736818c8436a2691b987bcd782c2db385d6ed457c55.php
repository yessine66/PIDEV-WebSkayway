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

/* security/login.html.twig */
class __TwigTemplate_df8ffc8fea6d70daf5968af4e3b2f12fd5c6a089ea4c0add061b9252e06d5c91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "

";
        // line 7
        echo "    <!-- Login Admin -->
";
        // line 48
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title> App landing</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"assets/css/progressbar_barfiller.css\">
    <link rel=\"stylesheet\" href=\"assets/css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animated-headline.css\">
    <link rel=\"stylesheet\" href=\"assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>
<body>
<!-- ? Preloader Start -->
<div id=\"preloader-active\">
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-inner position-relative\">
            <div class=\"preloader-circle\"></div>
            <div class=\"preloader-img pere-text\">
                <img src=\"assets/img/logo/logoxx.png\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->




<main class=\"login-body\" data-vide-bg=\"assets/img/login-bg.mp4\">
    <!-- Login Admin -->
    <form class=\"login-container\" id=\"form1\" action=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">


        <div class=\"login-form\">
            <!-- logo-login -->
            <div class=\"logo-login\">
                <a href=\"index.html\"><img src=\"assets/img/logo/logoxx.png\" alt=\"\"></a>
            </div>
            <h2>Login Here</h2>
            <div class=\"form-input\">
                <label for=\"name\">Username</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-input\">
                <label for=\"name\">Password</label>
                <input type=\"password\" id=\"password\" name=\"_password\">
            </div>
            <div class=\"form-input pt-30\">
                <input type=\"submit\"  name=\"button\" id=\"button\" value=\"Valider\">
            </div>

            <!-- Forget Password -->
            <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forget");
        echo "\" class=\"forget\">Forget Password</a>
            <!-- Forget Password -->
            <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_new");
        echo "\" class=\"registration\">Registration</a>
        </div>
    </form>
    <!-- /end login form -->
</main>


<script src=\"./assets/js/vendor/modernizr-3.5.0.min.js\"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=\"./assets/js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"./assets/js/popper.min.js\"></script>
<script src=\"./assets/js/bootstrap.min.js\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"./assets/js/jquery.slicknav.min.js\"></script>

<!-- Video bg -->
<script src=\"./assets/js/jquery.vide.js\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=\"./assets/js/owl.carousel.min.js\"></script>
<script src=\"./assets/js/slick.min.js\"></script>
<!-- One Page, Animated-HeadLin -->
<script src=\"./assets/js/wow.min.js\"></script>
<script src=\"./assets/js/animated.headline.js\"></script>
<script src=\"./assets/js/jquery.magnific-popup.js\"></script>

<!-- Date Picker -->
<script src=\"./assets/js/gijgo.min.js\"></script>
<!-- Nice-select, sticky -->
<script src=\"./assets/js/jquery.nice-select.min.js\"></script>
<script src=\"./assets/js/jquery.sticky.js\"></script>
<!-- Progress -->
<script src=\"./assets/js/jquery.barfiller.js\"></script>

<!-- counter , waypoint,Hover Direction -->
<script src=\"./assets/js/jquery.counterup.min.js\"></script>
<script src=\"./assets/js/waypoints.min.js\"></script>
<script src=\"./assets/js/jquery.countdown.min.js\"></script>
<script src=\"./assets/js/hover-direction-snake.min.js\"></script>

<!-- contact js -->
<script src=\"./assets/js/contact.js\"></script>
<script src=\"./assets/js/jquery.form.js\"></script>
<script src=\"./assets/js/jquery.validate.min.js\"></script>
<script src=\"./assets/js/mail-script.js\"></script>
<script src=\"./assets/js/jquery.ajaxchimp.min.js\"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=\"./assets/js/plugins.js\"></script>
<script src=\"./assets/js/main.js\"></script>

</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 119,  127 => 117,  113 => 106,  99 => 95,  50 => 48,  47 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{#

<main class=\"login-body\" data-vide-bg=\"assets/img/login-bg.mp4\" style=\"position: relative;\"><div style=\"position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;\"><video autoplay=\"\" loop=\"\" muted=\"\" style=\"margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; width: auto; height: 1302px;\"><source src=\"assets/img/login-bg.mp4\" type=\"video/mp4\"><source src=\"assets/img/login-bg.webm\" type=\"video/webm\"><source src=\"assets/img/login-bg.ogv\" type=\"video/ogg\"></video></div>
#}
    <!-- Login Admin -->
{#
<form class=\"form-default\" action=\"login-bg.mp4\" method=\"POST\">

    <div class=\"login-form\">
        <!-- logo-login -->
        <div class=\"logo-login\">
            <a href=\"index.html\"><img src=\"assets/img/logo/loder.png\" alt=\"\"></a>
        </div>
        <h2>Login Here</h2>
        <div class=\"form-input\">
            <label for=\"name\">Email</label>
            <input type=\"email\" name=\"email\" placeholder=\"Email\">
        </div>
        <div class=\"form-input\">
            <label for=\"name\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Password\">
        </div>
        <div class=\"form-input pt-30\">
            <input type=\"submit\" name=\"submit\" value=\"login\">
        </div>

        <!-- Forget Password -->
        <a href=\"#\" class=\"forget\">Forget Password</a>
        <!-- Forget Password -->
        <a href=\"register.html\" class=\"registration\">Registration</a>
    </div>
</form>
#}
{#
<form class=\"login-container\" id=\"form1\" action=\"{{ path('login') }}\" method=\"post\">
    <p><input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"></p>
    <p><input type=\"password\" id=\"password\" name=\"_password\"></p>
    <p><input type=\"submit\"  name=\"button\" id=\"button\" value=\"Valider\"></p>
</form>

<!-- /end login form -->
</main>


#}

<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title> App landing</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"assets/css/progressbar_barfiller.css\">
    <link rel=\"stylesheet\" href=\"assets/css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animated-headline.css\">
    <link rel=\"stylesheet\" href=\"assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"assets/css/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>
<body>
<!-- ? Preloader Start -->
<div id=\"preloader-active\">
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-inner position-relative\">
            <div class=\"preloader-circle\"></div>
            <div class=\"preloader-img pere-text\">
                <img src=\"assets/img/logo/logoxx.png\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->




<main class=\"login-body\" data-vide-bg=\"assets/img/login-bg.mp4\">
    <!-- Login Admin -->
    <form class=\"login-container\" id=\"form1\" action=\"{{ path('login') }}\" method=\"post\">


        <div class=\"login-form\">
            <!-- logo-login -->
            <div class=\"logo-login\">
                <a href=\"index.html\"><img src=\"assets/img/logo/logoxx.png\" alt=\"\"></a>
            </div>
            <h2>Login Here</h2>
            <div class=\"form-input\">
                <label for=\"name\">Username</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
            </div>
            <div class=\"form-input\">
                <label for=\"name\">Password</label>
                <input type=\"password\" id=\"password\" name=\"_password\">
            </div>
            <div class=\"form-input pt-30\">
                <input type=\"submit\"  name=\"button\" id=\"button\" value=\"Valider\">
            </div>

            <!-- Forget Password -->
            <a href=\"{{ path('forget') }}\" class=\"forget\">Forget Password</a>
            <!-- Forget Password -->
            <a href=\"{{path('account_new')}}\" class=\"registration\">Registration</a>
        </div>
    </form>
    <!-- /end login form -->
</main>


<script src=\"./assets/js/vendor/modernizr-3.5.0.min.js\"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=\"./assets/js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"./assets/js/popper.min.js\"></script>
<script src=\"./assets/js/bootstrap.min.js\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"./assets/js/jquery.slicknav.min.js\"></script>

<!-- Video bg -->
<script src=\"./assets/js/jquery.vide.js\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=\"./assets/js/owl.carousel.min.js\"></script>
<script src=\"./assets/js/slick.min.js\"></script>
<!-- One Page, Animated-HeadLin -->
<script src=\"./assets/js/wow.min.js\"></script>
<script src=\"./assets/js/animated.headline.js\"></script>
<script src=\"./assets/js/jquery.magnific-popup.js\"></script>

<!-- Date Picker -->
<script src=\"./assets/js/gijgo.min.js\"></script>
<!-- Nice-select, sticky -->
<script src=\"./assets/js/jquery.nice-select.min.js\"></script>
<script src=\"./assets/js/jquery.sticky.js\"></script>
<!-- Progress -->
<script src=\"./assets/js/jquery.barfiller.js\"></script>

<!-- counter , waypoint,Hover Direction -->
<script src=\"./assets/js/jquery.counterup.min.js\"></script>
<script src=\"./assets/js/waypoints.min.js\"></script>
<script src=\"./assets/js/jquery.countdown.min.js\"></script>
<script src=\"./assets/js/hover-direction-snake.min.js\"></script>

<!-- contact js -->
<script src=\"./assets/js/contact.js\"></script>
<script src=\"./assets/js/jquery.form.js\"></script>
<script src=\"./assets/js/jquery.validate.min.js\"></script>
<script src=\"./assets/js/mail-script.js\"></script>
<script src=\"./assets/js/jquery.ajaxchimp.min.js\"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=\"./assets/js/plugins.js\"></script>
<script src=\"./assets/js/main.js\"></script>

</body>
</html>


", "security/login.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\security\\login.html.twig");
    }
}
