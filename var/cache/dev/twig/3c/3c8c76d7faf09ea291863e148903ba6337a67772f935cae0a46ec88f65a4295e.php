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

/* question/show_front.html.twig */
class __TwigTemplate_bec86138c92409565dce52f5057e46ce3d2d95f0303338c446438c24af94259f extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show_front.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "question/show_front.html.twig", 1);
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

        echo "Question";
        
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
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h1>Question</h1>

        <table class=\"table\">
            <tbody>
            <tr>
                <th>IdQ</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 12, $this->source); })()), "idQ", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th></th>
                <td>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 18
            echo "
                        ";
            // line 19
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 19, $this->source); })()), "idQ", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, $context["r"], "getIdR", [], "method", false, false, false, 19)))) {
                // line 20
                echo "

                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
                    <input id=\"ok\" type=\"radio\" name=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 23, $this->source); })()), "idQ", [], "any", false, false, false, 23), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 23, $this->source); })()), "idQ", [], "any", false, false, false, 23), "html", null, true);
                echo "\"
                           value=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 24, $this->source); })()), "nbrPoint", [], "any", false, false, false, 24), "html", null, true);
                echo "\" onclick=\"r=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 24, $this->source); })()), "nbrPoint", [], "any", false, false, false, 24), "html", null, true);
                echo "\"/>   ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR1", [], "any", false, false, false, 24), "html", null, true);
                echo " <br>
                    <input id=\"okk\" type=\"radio\" name=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "idQ", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "idQ", [], "any", false, false, false, 25), "html", null, true);
                echo "\"
                           value=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 26, $this->source); })()), "nbrPoint", [], "any", false, false, false, 26), "html", null, true);
                echo "\"/>   ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR2", [], "any", false, false, false, 26), "html", null, true);
                echo " <br>
                    <input type=\"radio\" name=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 27, $this->source); })()), "idQ", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 27, $this->source); })()), "idQ", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                           value=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 28, $this->source); })()), "nbrPoint", [], "any", false, false, false, 28), "html", null, true);
                echo "\"/>   ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR3", [], "any", false, false, false, 28), "html", null, true);
                echo " <br>
                    <input type=\"radio\" name=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "idQ", [], "any", false, false, false, 29), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "idQ", [], "any", false, false, false, 29), "html", null, true);
                echo "\"
                           value=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 30, $this->source); })()), "nbrPoint", [], "any", false, false, false, 30), "html", null, true);
                echo "\"/>   ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "textR4", [], "any", false, false, false, 30), "html", null, true);
                echo " <br><br>
                        ";
            }
            // line 32
            echo "                        <script>
                            function valider() {
                                var score = 0;
                                var spare = document.getElementById('ok');
                                if (spare.checked) {
                                    score = score + ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 37, $this->source); })()), "nbrPoint", [], "any", false, false, false, 37), "html", null, true);
            echo ";
                                    alert(\"Checked \" + score);
                                }
                            }
                        </script>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </td>
            </tr>
            </tbody>
        </table>
        <input type=\"button\" name=\"ProcessButton\" value=\"Voir la note\" id=\"valider\" onclick=\"valider()\">
        <button type=“button” class=\"button-back\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index");
        echo "\">Back to list</a></button>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 51
            echo "            <script> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "score", [], "any", false, false, false, 51), "html", null, true);
            echo " = score ;</script>
            <input type=\"hidden\" name=\"score\" id=\"score\" value=\"0\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <style>


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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/show_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 54,  225 => 51,  221 => 50,  217 => 49,  210 => 44,  197 => 37,  190 => 32,  183 => 30,  177 => 29,  171 => 28,  165 => 27,  159 => 26,  153 => 25,  145 => 24,  139 => 23,  134 => 20,  132 => 19,  129 => 18,  125 => 17,  117 => 12,  109 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Question{% endblock %}
{% block contentfr %}
    {% block body %}
        <h1>Question</h1>

        <table class=\"table\">
            <tbody>
            <tr>
                <th>IdQ</th>
                <td>{{ question.idQ }}</td>
            </tr>
            <tr>
                <th></th>
                <td>
                    {% for r in reponse %}

                        {% if question.idQ==r.getIdR() %}


                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
                    <input id=\"ok\" type=\"radio\" name=\"{{ question.idQ }}\" class=\"{{ question.idQ }}\"
                           value=\"{{ question.nbrPoint }}\" onclick=\"r={{ question.nbrPoint }}\"/>   {{ r.textR1 }} <br>
                    <input id=\"okk\" type=\"radio\" name=\"{{ question.idQ }}\" class=\"{{ question.idQ }}\"
                           value=\"{{ question.nbrPoint }}\"/>   {{ r.textR2 }} <br>
                    <input type=\"radio\" name=\"{{ question.idQ }}\" class=\"{{ question.idQ }}\"
                           value=\"{{ question.nbrPoint }}\"/>   {{ r.textR3 }} <br>
                    <input type=\"radio\" name=\"{{ question.idQ }}\" class=\"{{ question.idQ }}\"
                           value=\"{{ question.nbrPoint }}\"/>   {{ r.textR4 }} <br><br>
                        {% endif %}
                        <script>
                            function valider() {
                                var score = 0;
                                var spare = document.getElementById('ok');
                                if (spare.checked) {
                                    score = score + {{ question.nbrPoint }};
                                    alert(\"Checked \" + score);
                                }
                            }
                        </script>

                    {% endfor %}
                </td>
            </tr>
            </tbody>
        </table>
        <input type=\"button\" name=\"ProcessButton\" value=\"Voir la note\" id=\"valider\" onclick=\"valider()\">
        <button type=“button” class=\"button-back\"><a href=\"{{ path('test_index') }}\">Back to list</a></button>
        {% for t in test %}
            <script> {{ t.score }} = score ;</script>
            <input type=\"hidden\" name=\"score\" id=\"score\" value=\"0\">
        {% endfor %}
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
    {% endblock %}
{% endblock %}", "question/show_front.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\question\\show_front.html.twig");
    }
}
