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

/* question/indexF.html.twig */
class __TwigTemplate_c2ca6701089d7285c216c8d7388ead249e23d85b55b0242631455ba7ed48a45e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "question/indexF.html.twig", 1);
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

        echo "Reclamation index";
        
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
                                            <h3 class=\"text-heading\">POO - Une seule r??ponse est bonne :)</h3>
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 39
            echo "                                <article class=\"blog_item\">
                                    <p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "textQ", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>

                                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 43
                echo "
                                   ";
                // line 44
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, $context["r"], "getIdR", [], "method", false, false, false, 44)))) {
                    // line 45
                    echo "


                                            <div>


                                                <input type=\"radio\" name=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 51), "html", null, true);
                    echo "\"  class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR1", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" />   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR1", [], "any", false, false, false, 51), "html", null, true);
                    echo " <br>
                                                <input type=\"radio\" name=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR2", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" />   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR2", [], "any", false, false, false, 52), "html", null, true);
                    echo " <br>
                                                <input type=\"radio\" name=\"";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 53), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 53), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR3", [], "any", false, false, false, 53), "html", null, true);
                    echo "\" />   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR3", [], "any", false, false, false, 53), "html", null, true);
                    echo " <br>
                                                <input type=\"radio\" name=\"";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "idQ", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR4", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" />   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR4", [], "any", false, false, false, 54), "html", null, true);
                    echo " <br><br>
                                            </div>


";
                }
                // line 59
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "



                                          <br>

                                </article>

                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                                    <h1>no records found</h1>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                <button class=\"btn\" type=\"button\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Submit</a></button>

                                </nav>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"blog_right_sidebar\">

                                <aside class=\"single_sidebar_widget newsletter_widget\">
                                    <form action=\"#\">
                                        <h3 class=\"text-heading\">Timer</h3>
                                        <div id=\"countdown\"></div>
<script >
                                        let startingMinutes = 0.1;


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
                                        countDownEl.innerHTML = `Le test n'est pas comptabilis?? !`
                                        }


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
        </main>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 72,  235 => 69,  222 => 60,  216 => 59,  202 => 54,  192 => 53,  182 => 52,  172 => 51,  164 => 45,  162 => 44,  159 => 43,  155 => 42,  150 => 40,  147 => 39,  142 => 38,  109 => 7,  89 => 6,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}


{% block title %}Reclamation index{% endblock %}
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
                                            <h3 class=\"text-heading\">POO - Une seule r??ponse est bonne :)</h3>
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
                                {% for q in questions %}
                                <article class=\"blog_item\">
                                    <p>{{ q.textQ }}</p>

                                    {% for r in reponse  %}

                                   {% if q.idQ==r.getIdR() %}



                                            <div>


                                                <input type=\"radio\" name=\"{{ q.idQ }}\"  class=\"{{ q.idQ }}\" value=\"{{ r.textR1 }}\" />   {{ r.textR1  }} <br>
                                                <input type=\"radio\" name=\"{{ q.idQ }}\" class=\"{{ q.idQ }}\" value=\"{{  r.textR2  }}\" />   {{ r.textR2 }} <br>
                                                <input type=\"radio\" name=\"{{ q.idQ}}\" class=\"{{ q.idQ }}\" value=\"{{ r.textR3 }}\" />   {{ r.textR3 }} <br>
                                                <input type=\"radio\" name=\"{{ q.idQ }}\" class=\"{{ q.idQ }}\" value=\"{{  r.textR4  }}\" />   {{ r.textR4  }} <br><br>
                                            </div>


{% endif %}
                                            {% endfor %}




                                          <br>

                                </article>

                            {% else %}
                                    <h1>no records found</h1>

                            {% endfor %}
                                <button class=\"btn\" type=\"button\"><a href=\"{{ path('reclamation_new') }}\">Submit</a></button>

                                </nav>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"blog_right_sidebar\">

                                <aside class=\"single_sidebar_widget newsletter_widget\">
                                    <form action=\"#\">
                                        <h3 class=\"text-heading\">Timer</h3>
                                        <div id=\"countdown\"></div>
<script >
                                        let startingMinutes = 0.1;


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
                                        countDownEl.innerHTML = `Le test n'est pas comptabilis?? !`
                                        }


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
        </main>

    {% endblock %}
{% endblock %}", "question/indexF.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\question\\indexF.html.twig");
    }
}
