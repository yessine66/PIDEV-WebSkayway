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

/* security/registration.html.twig */
class __TwigTemplate_2257ad850a0b6fa4b9daa64bbf77c1b2179d0ea63c0c07b761d19f67e1c64f1f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        // line 1
        echo "






<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title> Registration </title>
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

    ";
        // line 56
        echo "
        <div class=\"login-form\">

            <div class=\"logo-login\">
                <a href=\"index.html\"><img src=\"assets/img/logo/logoxx.png\" alt=\"\"></a>
            </div>

            <h2>Registration Here</h2>

            <div class=\"form-input\">



 ";
        // line 70
        echo "


";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_start', ["attr" => ["id" => "formuser"]]);
        echo "
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'widget');
        echo "



  ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formenseignant"]) || array_key_exists("formenseignant", $context) ? $context["formenseignant"] : (function () { throw new RuntimeError('Variable "formenseignant" does not exist.', 78, $this->source); })()), 'form_start', ["attr" => ["id" => "formens"]]);
        echo "
<div id=\"enseignantblock\">
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formenseignant"]) || array_key_exists("formenseignant", $context) ? $context["formenseignant"] : (function () { throw new RuntimeError('Variable "formenseignant" does not exist.', 80, $this->source); })()), 'widget');
        echo "
</div>





";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapprenant"]) || array_key_exists("formapprenant", $context) ? $context["formapprenant"] : (function () { throw new RuntimeError('Variable "formapprenant" does not exist.', 87, $this->source); })()), 'form_start', ["attr" => ["id" => "formapp"]]);
        echo "
<div id=\"descriptionblock\">
    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formapprenant"]) || array_key_exists("formapprenant", $context) ? $context["formapprenant"] : (function () { throw new RuntimeError('Variable "formapprenant" does not exist.', 89, $this->source); })()), 'widget');
        echo "
</div>
";
        // line 92
        echo "
            </div>

<button type=\"submit\" class=\"btn btn-success swalDefaultSuccess\" style=\"\"   id=\"subdens\">Register</button>
";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapprenant"]) || array_key_exists("formapprenant", $context) ? $context["formapprenant"] : (function () { throw new RuntimeError('Variable "formapprenant" does not exist.', 96, $this->source); })()), 'form_end');
        echo "
";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formenseignant"]) || array_key_exists("formenseignant", $context) ? $context["formenseignant"] : (function () { throw new RuntimeError('Variable "formenseignant" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$('#descriptionblock').hide();
        \$('#enseignantblock').hide();
        \$('#utilisateur_role').change(function() {
            if(\$('#utilisateur_role').val() == \"admin\"){
                \$('#descriptionblock').hide();
                \$('#enseignantblock').hide();
            }
            else if(  \$('#utilisateur_role').val() == \"apprenant\"){
                \$('#descriptionblock').show();
                \$('#enseignantblock').hide();

            }

            else if(\$('#utilisateur_role').val() == \"enseignant\"){
                \$('#enseignantblock').show();
                \$('#descriptionblock').hide();
            }
            else {
                \$('#descriptionblock').hide();
                \$('#enseignantblock').hide();
            }

        });
        /*    \$('#subdens').click(function(){
                if(  \$('#utilisateur_role').val() == \"apprenant\") {
                    \$('.apprenant').submit();
                }
            }); */

    });
</script>
<script>
    function submitform() {
        if(document.getElementById(\"utilisateur_role\").value==\"apprenant\"){
            //alert(document.getElementById(\"apprenant_description\").value);

            document.getElementById(\"fromapp\").submit();

        }


    }
</script>
            <div class=\"form-input pt-30\">
                 <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"registration\">login</a>
            </div>


        </div>
  ";
        // line 155
        echo "    <!-- /end login form -->
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
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 155,  222 => 149,  169 => 99,  165 => 97,  161 => 96,  155 => 92,  150 => 89,  145 => 87,  135 => 80,  130 => 78,  123 => 74,  119 => 73,  114 => 70,  99 => 56,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("






<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title> Registration </title>
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

    {# <form class=\"form-default\" > #}

        <div class=\"login-form\">

            <div class=\"logo-login\">
                <a href=\"index.html\"><img src=\"assets/img/logo/logoxx.png\" alt=\"\"></a>
            </div>

            <h2>Registration Here</h2>

            <div class=\"form-input\">



 {# {{ include('utilisateur/_form.html.twig') }} #}



{{ form_start(form, {'attr': {'id': 'formuser'}}) }}
    {{ form_widget(form) }}



  {{ form_start(formenseignant, {'attr': {'id': 'formens'}}) }}
<div id=\"enseignantblock\">
    {{ form_widget(formenseignant) }}
</div>





{{ form_start(formapprenant, {'attr': {'id': 'formapp'}}) }}
<div id=\"descriptionblock\">
    {{ form_widget(formapprenant) }}
</div>
{# <button type=\"submit\" class=\"btn btn-success swalDefaultSuccess\" style=\"\"  id=\"subdesc\">SAVE app</button> #}

            </div>

<button type=\"submit\" class=\"btn btn-success swalDefaultSuccess\" style=\"\"   id=\"subdens\">Register</button>
{{ form_end(formapprenant) }}
{{ form_end(formenseignant) }}
    {# <button type=\"submit\" class=\"btn btn-success swalDefaultSuccess\" onsubmit=\"myFunction()\" id=\"subuser\">{{ button_label|default('Save') }}</button> #}
{{ form_end(form) }}


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$('#descriptionblock').hide();
        \$('#enseignantblock').hide();
        \$('#utilisateur_role').change(function() {
            if(\$('#utilisateur_role').val() == \"admin\"){
                \$('#descriptionblock').hide();
                \$('#enseignantblock').hide();
            }
            else if(  \$('#utilisateur_role').val() == \"apprenant\"){
                \$('#descriptionblock').show();
                \$('#enseignantblock').hide();

            }

            else if(\$('#utilisateur_role').val() == \"enseignant\"){
                \$('#enseignantblock').show();
                \$('#descriptionblock').hide();
            }
            else {
                \$('#descriptionblock').hide();
                \$('#enseignantblock').hide();
            }

        });
        /*    \$('#subdens').click(function(){
                if(  \$('#utilisateur_role').val() == \"apprenant\") {
                    \$('.apprenant').submit();
                }
            }); */

    });
</script>
<script>
    function submitform() {
        if(document.getElementById(\"utilisateur_role\").value==\"apprenant\"){
            //alert(document.getElementById(\"apprenant_description\").value);

            document.getElementById(\"fromapp\").submit();

        }


    }
</script>
            <div class=\"form-input pt-30\">
                 <a href=\"{{path('login')}}\" class=\"registration\">login</a>
            </div>


        </div>
  {#  </form> #}
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
", "security/registration.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\security\\registration.html.twig");
    }
}
