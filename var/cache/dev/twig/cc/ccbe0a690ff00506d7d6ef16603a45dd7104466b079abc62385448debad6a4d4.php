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

/* question/showF.html.twig */
class __TwigTemplate_d9c6cbad2f40f4876ba81cf3fab37687e41f1eb156cc76810b4cf727394aa6e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/showF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/showF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "question/showF.html.twig", 1);
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
        // line 156
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Catégorie des tests</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <h2 data-animation=\"bounceIn\" data-delay=\"0.2s\">Choisissez un test, et obtenez un certificat!</h2>
                                            <ol class=\"breadcrumb\">

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
                                <div class=\"blog_details\">

                                    <form  id=\"CatForm\" method=\"post\" action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_cat");
        echo "\" >
                                        <select id=\"selectDo\"   style=\"\" onchange=\"myFunction(event); this.form.submit(); \"  >
                                            <option value=\"\" disabled selected>Choisir catégorie spécifique..</option>
                                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 43
            echo "                                                <option class=\"dropdown-item\"  onclick=\"document.getElementById('CatForm').submit();\" ><i class=\"ri-eye-fill mr-2\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nameT", [], "any", false, false, false, 43), "html", null, true);
            echo "</option>

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                            <input  type=\"hidden\" name=\"myText\" id=\"myText\" type=\"text\" value=\"colors\">



                                            <script>function myFunction(e) {
                                                    document.getElementById(\"myText\").value = e.target.value
                                                } </script>

                                        </select>
                                    </form>

                                </div>
                                    <article class=\"blog_item\">
                                        <div class=\"blog_item_img\">
                                            <img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">


                                            <style type=\"text/css\">
                                                a:link {
                                                    text-decoration: none;
                                                }

                                                .order-card {
                                                    color: rgb(255, 255, 255);
                                                }

                                                .bg-c-blue {
                                                    background: #04868f;
                                                }

                                                .bg-c-green {
                                                    background:#4C51BF;
                                                }

                                                .bg-c-yellow {
                                                    background: #F56565;
                                                }

                                                .bg-c-pink {
                                                    background: #663a30;
                                                }


                                                .card {

                                                    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                                                    box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                                                    border: 1px solid black;
                                                    margin-bottom: 30px;
                                                    -webkit-transition: all 0.3s ease-in-out;
                                                    transition: all 0.3s ease-in-out;
                                                }

                                                .card .card-block {
                                                    padding: 25px;
                                                }

                                                .order-card i {
                                                    font-size: 26px;
                                                }

                                                .f-left {
                                                    float: left;
                                                }

                                                .f-right {
                                                    float: right;
                                                }
                                                header {
                                                    left: 0px;
                                                    right: 0px;
                                                }
                                            </style>

                                            <br><br>

                                            <div class=\"container\">
                                                <div class=\"row\">

                                                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 126
            echo "                                                    <div class=\"col-md-4 col-xl-6\">

                                                        <div class=\"card bg-c-blue order-card\">
                                                            <div class=\"card-block\">
                                                                <h3 class=\"m-b-20\">QUIZ ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nameT", [], "any", false, false, false, 130), "html", null, true);
            echo "</h3>
                                                                <h2 class=\"text-right\"><i class=\"fas fa-book f-left\"></i></h2>
                                                                <button class=\"btn\"><a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_newwwww");
            echo "\">Commencer le test!</a></button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                        </div>

                        </div>
                        <div class=\"col-lg-4\">

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
        return "question/showF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 138,  247 => 132,  242 => 130,  236 => 126,  232 => 125,  151 => 46,  141 => 43,  137 => 42,  131 => 39,  95 => 5,  85 => 4,  74 => 156,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Catégorie des tests</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <h2 data-animation=\"bounceIn\" data-delay=\"0.2s\">Choisissez un test, et obtenez un certificat!</h2>
                                            <ol class=\"breadcrumb\">

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
                                <div class=\"blog_details\">

                                    <form  id=\"CatForm\" method=\"post\" action=\"{{ path('question_cat')}}\" >
                                        <select id=\"selectDo\"   style=\"\" onchange=\"myFunction(event); this.form.submit(); \"  >
                                            <option value=\"\" disabled selected>Choisir catégorie spécifique..</option>
                                            {% for c in questions %}
                                                <option class=\"dropdown-item\"  onclick=\"document.getElementById('CatForm').submit();\" ><i class=\"ri-eye-fill mr-2\"></i>{{ c.nameT}}</option>

                                            {% endfor %}
                                            <input  type=\"hidden\" name=\"myText\" id=\"myText\" type=\"text\" value=\"colors\">



                                            <script>function myFunction(e) {
                                                    document.getElementById(\"myText\").value = e.target.value
                                                } </script>

                                        </select>
                                    </form>

                                </div>
                                    <article class=\"blog_item\">
                                        <div class=\"blog_item_img\">
                                            <img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">


                                            <style type=\"text/css\">
                                                a:link {
                                                    text-decoration: none;
                                                }

                                                .order-card {
                                                    color: rgb(255, 255, 255);
                                                }

                                                .bg-c-blue {
                                                    background: #04868f;
                                                }

                                                .bg-c-green {
                                                    background:#4C51BF;
                                                }

                                                .bg-c-yellow {
                                                    background: #F56565;
                                                }

                                                .bg-c-pink {
                                                    background: #663a30;
                                                }


                                                .card {

                                                    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                                                    box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                                                    border: 1px solid black;
                                                    margin-bottom: 30px;
                                                    -webkit-transition: all 0.3s ease-in-out;
                                                    transition: all 0.3s ease-in-out;
                                                }

                                                .card .card-block {
                                                    padding: 25px;
                                                }

                                                .order-card i {
                                                    font-size: 26px;
                                                }

                                                .f-left {
                                                    float: left;
                                                }

                                                .f-right {
                                                    float: right;
                                                }
                                                header {
                                                    left: 0px;
                                                    right: 0px;
                                                }
                                            </style>

                                            <br><br>

                                            <div class=\"container\">
                                                <div class=\"row\">

                                                    {% for question in questions %}
                                                    <div class=\"col-md-4 col-xl-6\">

                                                        <div class=\"card bg-c-blue order-card\">
                                                            <div class=\"card-block\">
                                                                <h3 class=\"m-b-20\">QUIZ {{ question.nameT }}</h3>
                                                                <h2 class=\"text-right\"><i class=\"fas fa-book f-left\"></i></h2>
                                                                <button class=\"btn\"><a href=\"{{ path('test_newwwww') }}\">Commencer le test!</a></button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% endfor %}


                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                        </div>

                        </div>
                        <div class=\"col-lg-4\">

                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
        </main>
    {% endblock %}

{% endblock %}
", "question/showF.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\question\\showF.html.twig");
    }
}
