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

/* feedback/feed.html.twig */
class __TwigTemplate_bf397e50a8d5ace61ff169da365cbefdefa2d9d68c2770468eb13797708cff19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/feed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/feed.html.twig"));

        // line 1
        echo "
        <table class=\"table\" id=\"tableac\">

            <thead>
            <tr>
                <th>IdF</th>
                <th>Objet</th>
                <th>Text</th>
                <th>Avis</th>
                <!--   <th>actions</th> -->
            </tr>
            </thead>
            <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["feedback"]);
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "idF", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "objet", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "text", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feedback"], "avis", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                    <!--   <td>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_show", ["idF" => twig_get_attribute($this->env, $this->source, $context["feedback"], "idF", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_edit", ["idF" => twig_get_attribute($this->env, $this->source, $context["feedback"], "idF", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">edit</a>
                </td> -->

                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "feedback/feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  86 => 22,  82 => 21,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <table class=\"table\" id=\"tableac\">

            <thead>
            <tr>
                <th>IdF</th>
                <th>Objet</th>
                <th>Text</th>
                <th>Avis</th>
                <!--   <th>actions</th> -->
            </tr>
            </thead>
            <tbody>
            {% for feedback in feedback %}
                <tr>
                    <td>{{ feedback.idF }}</td>
                    <td>{{ feedback.objet }}</td>
                    <td>{{ feedback.text }}</td>
                    <td>{{ feedback.avis }}</td>
                    <!--   <td>
                    <a href=\"{{ path('feedback_show', {'idF': feedback.idF}) }}\">show</a>
                    <a href=\"{{ path('feedback_edit', {'idF': feedback.idF}) }}\">edit</a>
                </td> -->

                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>



", "feedback/feed.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\feedback\\feed.html.twig");
    }
}
