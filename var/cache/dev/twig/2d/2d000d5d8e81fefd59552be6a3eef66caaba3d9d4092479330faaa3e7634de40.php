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

/* test/index.html.twig */
class __TwigTemplate_9b9c70a1eeb39bc178248aef40152823fbb5db9a5cc0001968c520439ca41ff1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "test/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tests";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contentfr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentfr"));

        // line 6
        echo "    ";
        $this->displayBlock('bodyfr', $context, $blocks);
        // line 151
        echo "    </main>

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

        <main xmlns=\"http://www.w3.org/1999/html\">
        <!--? slider Area Start-->
        <section class=\"slider-area slider-area2\">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 col-lg-11 col-md-12\">
                                <div class=\"hero__caption hero__caption2\">
                                    <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">QUIZ 1</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label=\"breadcrumb\">
                                        <h3 class=\"text-heading\">POO - Une seule réponse est bonne :)</h3>
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
        // line 38
        $context["i"] = 0;
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 40
            echo "                    <article class=\"blog_item\">
                        <p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "textQ", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>

                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 44
                echo "
                            ";
                // line 45
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, $context["r"], "getIdR", [], "method", false, false, false, 45)))) {
                    // line 46
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 46, $this->source); })()) + 1);
                    // line 47
                    echo "
                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
                                <input id=\"";
                    // line 49
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 49, $this->source); })()), "html", null, true);
                    echo "\" type=\"radio\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 49), "html", null, true);
                    echo "\"
                                       value=\"";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "nbrPoint", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" onclick=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "nbrPoint", [], "any", false, false, false, 50), "html", null, true);
                    echo "\"/>   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR1", [], "any", false, false, false, 50), "html", null, true);
                    echo " <br>
                                <input id=\"okk\" type=\"radio\" name=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 51), "html", null, true);
                    echo "\"
                                       value=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "nbrPoint", [], "any", false, false, false, 52), "html", null, true);
                    echo "\"/>   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR2", [], "any", false, false, false, 52), "html", null, true);
                    echo " <br>
                                <input type=\"radio\" name=\"";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 53), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 53), "html", null, true);
                    echo "\"
                                       value=\"";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "nbrPoint", [], "any", false, false, false, 54), "html", null, true);
                    echo "\"/>   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR3", [], "any", false, false, false, 54), "html", null, true);
                    echo " <br>
                                <input type=\"radio\" name=\"";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 55), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 55), "html", null, true);
                    echo "\"
                                       value=\"";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "nbrPoint", [], "any", false, false, false, 56), "html", null, true);
                    echo "\"/>   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR4", [], "any", false, false, false, 56), "html", null, true);
                    echo " <br><br>

                            ";
                }
                // line 59
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "

                        <br>

                    </article>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_indexcert", ["idTest" => "tests.idTest|last"]);
        echo "\">
                    <input type=\"submit\" onclick=\"valider()\" name=\"ProcessButton\" value=\"Voir le résultat\">
                    <input type=\"hidden\" name=\"score\" id=\"score\" type=\"number\">
                </form>



                </nav>
            </div>
        </div>
        <div class=\"col-lg-4\">
        <div class=\"blog_right_sidebar\">

        <aside class=\"single_sidebar_widget newsletter_widget\">
        <form action=\"#\">
        <h3 class=\"text-heading\">Timer</h3>
        <div id=\"countdown\"></div>
        <script>
            let startingMinutes = 30;


            let time = startingMinutes * 60;

            const countDownEl = document.getElementById('countdown');

            setInterval(updateCountdown, 1000);

            function updateCountdown() {
                const minutes = Math.floor(time / 60);
                let seconds = time % 60;

                seconds = seconds < 10 ? '0' + seconds : seconds;

                countDownEl.innerHTML = `\${minutes} : \${seconds}`;
                if (time > 0) {
                    time--;
                } else {
                    countDownEl.innerHTML = `Le test n'est pas comptabilisé !`
                }


            }


        </script>

        <script>


            function valider() {
                var score = 0;
                ";
        // line 119
        $context["y"] = 0;
        // line 120
        echo "                ";
        $context["x"] = 0;
        // line 121
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 122
            echo "                ";
            $context["y"] = ((isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 122, $this->source); })()) + 1);
            // line 123
            echo "
                var spare = document.getElementById('";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 124, $this->source); })()), "html", null, true);
            echo "');


                if (spare.checked) {
                    ";
            // line 128
            $context["x"] = ((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 128, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["j"], "nbrPoint", [], "any", false, false, false, 128));
            // line 129
            echo "                    alert(\"checked \" + ";
            echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 129, $this->source); })()), "html", null, true);
            echo ");

                    document.getElementById(\"score\").value = '";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 131, $this->source); })()), "html", null, true);
            echo "';

                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
            }


        </script>


    </form>
    </aside>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Blog Area End -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 135,  337 => 131,  331 => 129,  329 => 128,  322 => 124,  319 => 123,  316 => 122,  311 => 121,  308 => 120,  306 => 119,  251 => 68,  238 => 60,  232 => 59,  224 => 56,  218 => 55,  212 => 54,  206 => 53,  200 => 52,  194 => 51,  186 => 50,  178 => 49,  174 => 47,  171 => 46,  169 => 45,  166 => 44,  162 => 43,  157 => 41,  154 => 40,  149 => 39,  147 => 38,  114 => 7,  104 => 6,  92 => 151,  89 => 6,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}


{% block title %}Tests{% endblock %}
{% block contentfr %}
    {% block bodyfr %}


        <main xmlns=\"http://www.w3.org/1999/html\">
        <!--? slider Area Start-->
        <section class=\"slider-area slider-area2\">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 col-lg-11 col-md-12\">
                                <div class=\"hero__caption hero__caption2\">
                                    <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">QUIZ 1</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label=\"breadcrumb\">
                                        <h3 class=\"text-heading\">POO - Une seule réponse est bonne :)</h3>
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
                {% set i = 0 %}
                {% for q in questions %}
                    <article class=\"blog_item\">
                        <p>{{ q.textQ }}</p>

                        {% for r in reponses %}

                            {% if q.idQ==r.getIdR() %}
                                {% set i = i + 1 %}

                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
                                <input id=\"{{ i }}\" type=\"radio\" name=\"{{ q.idQ }}\" class=\"{{ q.idQ }}\"
                                       value=\"{{ q.nbrPoint }}\" onclick=\"{{ q.nbrPoint }}\"/>   {{ r.textR1 }} <br>
                                <input id=\"okk\" type=\"radio\" name=\"{{ q.idQ }}\" class=\"{{ q.idQ }}\"
                                       value=\"{{ q.nbrPoint }}\"/>   {{ r.textR2 }} <br>
                                <input type=\"radio\" name=\"{{ q.idQ }}\" class=\"{{ q.idQ }}\"
                                       value=\"{{ q.nbrPoint }}\"/>   {{ r.textR3 }} <br>
                                <input type=\"radio\" name=\"{{ q.idQ }}\" class=\"{{ q.idQ }}\"
                                       value=\"{{ q.nbrPoint }}\"/>   {{ r.textR4 }} <br><br>

                            {% endif %}
                        {% endfor %}


                        <br>

                    </article>


                {% endfor %}
                <form method=\"post\" action=\"{{ path('test_indexcert', {'idTest':   'tests.idTest|last'}) }}\">
                    <input type=\"submit\" onclick=\"valider()\" name=\"ProcessButton\" value=\"Voir le résultat\">
                    <input type=\"hidden\" name=\"score\" id=\"score\" type=\"number\">
                </form>



                </nav>
            </div>
        </div>
        <div class=\"col-lg-4\">
        <div class=\"blog_right_sidebar\">

        <aside class=\"single_sidebar_widget newsletter_widget\">
        <form action=\"#\">
        <h3 class=\"text-heading\">Timer</h3>
        <div id=\"countdown\"></div>
        <script>
            let startingMinutes = 30;


            let time = startingMinutes * 60;

            const countDownEl = document.getElementById('countdown');

            setInterval(updateCountdown, 1000);

            function updateCountdown() {
                const minutes = Math.floor(time / 60);
                let seconds = time % 60;

                seconds = seconds < 10 ? '0' + seconds : seconds;

                countDownEl.innerHTML = `\${minutes} : \${seconds}`;
                if (time > 0) {
                    time--;
                } else {
                    countDownEl.innerHTML = `Le test n'est pas comptabilisé !`
                }


            }


        </script>

        <script>


            function valider() {
                var score = 0;
                {% set y = 0 %}
                {% set x = 0 %}
                {% for j in questions %}
                {% set y = y + 1 %}

                var spare = document.getElementById('{{ y }}');


                if (spare.checked) {
                    {% set x = x + j.nbrPoint %}
                    alert(\"checked \" + {{ x }});

                    document.getElementById(\"score\").value = '{{ x }}';

                }
                {% endfor %}

            }


        </script>


    </form>
    </aside>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Blog Area End -->
    {% endblock %}
    </main>

{% endblock %}", "test/index.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\test\\index.html.twig");
    }
}
