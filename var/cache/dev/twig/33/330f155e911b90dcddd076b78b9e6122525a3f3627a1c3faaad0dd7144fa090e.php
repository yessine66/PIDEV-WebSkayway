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

/* utilisateur/showFront.html.twig */
class __TwigTemplate_5ed68ec4b3e04480f5ceeb248a21808a1aa5c2dc3bf1d3a78fbb271b3bf1a7a6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/showFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/showFront.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "utilisateur/showFront.html.twig", 1);
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

        echo "Promotion index";
        
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
        echo "
    ";
        // line 6
        $this->displayBlock('bodyfr', $context, $blocks);
        // line 157
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_bodyfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyfr"));

        // line 7
        echo "
        <main>

   ";
        // line 36
        echo "            <h1>Utilisateur</h1>

            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "mail", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "age", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "tel", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "genre", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>DateNaiss</th>
                    <td>";
        // line 70
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "dateNaiss", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "dateNaiss", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "username", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "password", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "role", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>CreCompte</th>
                    <td>";
        // line 86
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "creCompte", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "creCompte", [], "any", false, false, false, 86), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                </tbody>
            </table>

            <button type=“button” class=\"button-back\"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\">back to list</a></button>

            <button type=“button” class=\"button-edit\"><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">edit</a></button>


            <style>
                .button-edit {
                    display: inline-block;
                    padding: 12px 18px;
                    cursor: pointer;
                    border-radius: 5px;
                    background-color: #fde8cd;
                    font-size: 16px;
                    font-weight: bold;
                    color: red;
                }
                .button-back {
                    display: inline-block;
                    padding: 12px 18px;
                    cursor: pointer;
                    border-radius: 5px;
                    background-color: #fff3cd;
                    font-size: 16px;
                    font-weight: bold;
                    color: red;
                }
            </style>

            ";
        // line 119
        echo twig_include($this->env, $context, "utilisateur/_delete_form.html.twig");
        echo "

";
        // line 148
        echo "




        </main>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 148,  247 => 119,  218 => 93,  213 => 91,  205 => 86,  198 => 82,  191 => 78,  184 => 74,  177 => 70,  170 => 66,  163 => 62,  156 => 58,  149 => 54,  142 => 50,  135 => 46,  128 => 42,  120 => 36,  115 => 7,  105 => 6,  94 => 157,  92 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Promotion index{% endblock %}
{% block contentfr %}

    {% block bodyfr %}

        <main>

   {#
   <!--? slider Area Start-->
   <!--? slider Area Start-->
   <section class=\"slider-area slider-area2\">
       <div class=\"slider-active\">
           <!-- Single Slider -->
           <div class=\"single-slider slider-height2\">
               <div class=\"container\">
                   <div class=\"row\">
                       <div class=\"col-xl-8 col-lg-11 col-md-12\">
                           <div class=\"hero__caption hero__caption2\">
                               <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Profile </h1>
                               <!-- breadcrumb Start-->
                                                              <nav aria-label=\"breadcrumb\">
                               <h3 class=\"text-heading\">PROMOTION</h3>
                           </nav>
            <!-- breadcrumb End -->
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>

            #}
            <h1>Utilisateur</h1>

            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ app.user.id }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ app.user.nom }}</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>{{ app.user.prenom }}</td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td>{{ app.user.mail }}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{ app.user.age }}</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>{{ app.user.tel }}</td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td>{{ app.user.genre }}</td>
                </tr>
                <tr>
                    <th>DateNaiss</th>
                    <td>{{ app.user.dateNaiss ? app.user.dateNaiss|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>{{ app.user.username }}</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>{{ app.user.password }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ app.user.role }}</td>
                </tr>
                <tr>
                    <th>CreCompte</th>
                    <td>{{ app.user.creCompte ? app.user.creCompte|date('Y-m-d') : '' }}</td>
                </tr>
                </tbody>
            </table>

            <button type=“button” class=\"button-back\"><a href=\"{{ path('utilisateur_index') }}\">back to list</a></button>

            <button type=“button” class=\"button-edit\"><a href=\"{{ path('utilisateur_edit', {'id': utilisateur.id}) }}\">edit</a></button>


            <style>
                .button-edit {
                    display: inline-block;
                    padding: 12px 18px;
                    cursor: pointer;
                    border-radius: 5px;
                    background-color: #fde8cd;
                    font-size: 16px;
                    font-weight: bold;
                    color: red;
                }
                .button-back {
                    display: inline-block;
                    padding: 12px 18px;
                    cursor: pointer;
                    border-radius: 5px;
                    background-color: #fff3cd;
                    font-size: 16px;
                    font-weight: bold;
                    color: red;
                }
            </style>

            {{ include('utilisateur/_delete_form.html.twig') }}

{#             <div  class=\"container\",style =\"top: 50rem\";>
                <div style =\"margin-top: 5rem;\"></div>
                <div class=\"row\",style =\"margin-top: 50rem\";>
                    <div class=\"col-md-9\">
                        <div class=\"grid\",style =\"margin-top: 50rem\";>
                            {% for promotion in promotions %}
                                {% include 'promotion/_card.html.twig'with {promotion:promotion} only %}

                            {% endfor %}
                        </div>
                    </div>
                </div>

                <div style =\"margin-top: 5rem;\"></div>

                <button type=“button” class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\" tabindex=\"0\" style=\"animation-delay: 0.7s;\"><a href=\"{{ path('play') }}\">Jouer</a></button>

                <div style =\"margin-top: 5rem;\"></div>








            </div> #}





        </main>


    {% endblock %}

{% endblock %}", "utilisateur/showFront.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\utilisateur\\showFront.html.twig");
    }
}
