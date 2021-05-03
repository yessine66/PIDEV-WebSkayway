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

/* question/index.html.twig */
class __TwigTemplate_6ad4c872d77e1017b353d9efbaf3aef5763a255e634e16b7d8fa8abde057d9b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/index.html.twig", 1);
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

        echo "Question index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "         <div class=\"alert alert-success\">
             ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
         </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "     <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("/question/tri");
        echo "\">
         <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
             <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                 <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                     tri par nombre des points
                 </button>


             </div>
         </div>
     <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{ path('triCategorieB'){ }}\">
         <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
             <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                 <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                     tri par ordre de catégorie
                 </button>


             </div>
         </div>



     </form>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
         <h1>Question index</h1>

         <table >
             <tr>
                 <th>ID</th>
                 <th>Question</th>
                 <th>Nbre des points</th>
                 <th>categorie</th>
                 <th>actions</th>
             </tr>
             </thead>
             <tbody>
             ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 26
            echo "                 <tr>
                     <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "idQ", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                     <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "textQ", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                     <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nbrPoint", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                     <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "nameT", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                     <td>
                         <button type=“button” class=\"button-show\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["idQ" => twig_get_attribute($this->env, $this->source, $context["question"], "idQ", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">show</a></button>
                         <button type=“button” class=\"button-edit\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["idQ" => twig_get_attribute($this->env, $this->source, $context["question"], "idQ", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">edit</a></button>
                     </td>
                 </tr>
             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                 <tr>
                     <td colspan=\"5\">no records found</td>
                 </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "             </tbody>
         </table>

         <button type=“button” class=\"button-create\"><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        echo "\">Create new</a></button>


         <style>

             .button-create {
                 display: inline-block;
                 padding: 12px 18px;
                 cursor: pointer;
                 border-radius: 5px;
                 background-color: #fff3cd;
                 font-size: 16px;
                 font-weight: bold;
                 color: red;
             }
             .button-show {
                 display: inline-block;
                 padding: 12px 18px;
                 cursor: pointer;
                 border-radius: 5px;
                 background-color: #d3e0ea;
                 font-size: 16px;
                 font-weight: bold;
                 color: red;
             }
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

         </style>

     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 44,  217 => 41,  208 => 37,  199 => 33,  195 => 32,  190 => 30,  186 => 29,  182 => 28,  178 => 27,  175 => 26,  170 => 25,  155 => 12,  145 => 11,  109 => 83,  106 => 11,  97 => 8,  94 => 7,  89 => 6,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Question index{% endblock %}
 {% block content %}
     {% for message in app.flashes('success') %}
         <div class=\"alert alert-success\">
             {{ message }}
         </div>
     {% endfor %}
     {% block body %}

         <h1>Question index</h1>

         <table >
             <tr>
                 <th>ID</th>
                 <th>Question</th>
                 <th>Nbre des points</th>
                 <th>categorie</th>
                 <th>actions</th>
             </tr>
             </thead>
             <tbody>
             {% for question in questions %}
                 <tr>
                     <td>{{ question.idQ }}</td>
                     <td>{{ question.textQ }}</td>
                     <td>{{ question.nbrPoint }}</td>
                     <td>{{ question.nameT }}</td>
                     <td>
                         <button type=“button” class=\"button-show\"><a href=\"{{ path('question_show', {'idQ': question.idQ}) }}\">show</a></button>
                         <button type=“button” class=\"button-edit\"><a href=\"{{ path('question_edit', {'idQ': question.idQ}) }}\">edit</a></button>
                     </td>
                 </tr>
             {% else %}
                 <tr>
                     <td colspan=\"5\">no records found</td>
                 </tr>
             {% endfor %}
             </tbody>
         </table>

         <button type=“button” class=\"button-create\"><a href=\"{{ path('question_new') }}\">Create new</a></button>


         <style>

             .button-create {
                 display: inline-block;
                 padding: 12px 18px;
                 cursor: pointer;
                 border-radius: 5px;
                 background-color: #fff3cd;
                 font-size: 16px;
                 font-weight: bold;
                 color: red;
             }
             .button-show {
                 display: inline-block;
                 padding: 12px 18px;
                 cursor: pointer;
                 border-radius: 5px;
                 background-color: #d3e0ea;
                 font-size: 16px;
                 font-weight: bold;
                 color: red;
             }
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

         </style>

     {% endblock %}
     <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('/question/tri') }}\">
         <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
             <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                 <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                     tri par nombre des points
                 </button>


             </div>
         </div>
     <form role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{ path('triCategorieB'){ }}\">
         <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Programmatic control\">
             <div class=\"btn-group btn-group-sm\" aria-label=\"Set Select2 option\">
                 <button class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1\">
                     tri par ordre de catégorie
                 </button>


             </div>
         </div>



     </form>
 {% endblock %}", "question/index.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\question\\index.html.twig");
    }
}
