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

/* reponse/index.html.twig */
class __TwigTemplate_f8d736080471665c6709af62d5244af09f9f39f789b11c59277dc9f6fa41e891 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse/index.html.twig", 1);
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

        echo "Reponse index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
         <h1>Reponse index</h1>

         <table  id =\"tableac\" >
             <thead>

             <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search by .....\">
             <thead>
             <tr>
                 <th>ID</th>
                 <th>Réponse correcte</th>
                 <th>Réponse incorrecte 1</th>
                 <th>Réponse incorrecte 2</th>
                 <th>Réponse incorrecte 3</th>
                 <th>user</th>
                 <th>Question</th>
                 <th>actions</th>
             </tr>
             </thead>
             <tbody>
             ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 27
            echo "                 <tr>
                     <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idR", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                     <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "textR1", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                     <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "textR2", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                     <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "textR3", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                     <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "textR4", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                     <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                     <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "idQ", [], "any", false, false, false, 34), "textQ", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>

                     <td>
                         <button type=“button” class=\"button-show\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_show", ["idR" => twig_get_attribute($this->env, $this->source, $context["reponse"], "idR", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">show</a></button>
                         <button type=“button” class=\"button-edit\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_edit", ["idR" => twig_get_attribute($this->env, $this->source, $context["reponse"], "idR", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">edit</a></button>
                     </td>
                 </tr>
             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                 <tr>
                     <td colspan=\"7\">no records found</td>
                 </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "             </tbody>
         </table>

         <button type=“button” class=\"button-create\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_new");
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
         <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
         <script>
             \$(document).ready(function(){
                 \$('#search').keyup(function(){
                     search_table(\$(this).val());
                 });
                 function search_table(value){
                     \$('#tableac tbody tr').each(function(){
                         var found = 'false';
                         \$(this).each(function(){
                             if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                             {
                                 found = 'true';
                             }
                         });
                         if(found === 'true')
                         {
                             \$(this).show();

                         }
                         else
                         {
                             \$(this).hide();

                         }
                     });
                 }
             });
         </script>
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 49,  195 => 46,  186 => 42,  177 => 38,  173 => 37,  167 => 34,  163 => 33,  159 => 32,  155 => 31,  151 => 30,  147 => 29,  143 => 28,  140 => 27,  135 => 26,  113 => 6,  103 => 5,  92 => 115,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reponse index{% endblock %}
 {% block content %}
     {% block body %}

         <h1>Reponse index</h1>

         <table  id =\"tableac\" >
             <thead>

             <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search by .....\">
             <thead>
             <tr>
                 <th>ID</th>
                 <th>Réponse correcte</th>
                 <th>Réponse incorrecte 1</th>
                 <th>Réponse incorrecte 2</th>
                 <th>Réponse incorrecte 3</th>
                 <th>user</th>
                 <th>Question</th>
                 <th>actions</th>
             </tr>
             </thead>
             <tbody>
             {% for reponse in reponses %}
                 <tr>
                     <td>{{ reponse.idR }}</td>
                     <td>{{ reponse.textR1 }}</td>
                     <td>{{ reponse.textR2 }}</td>
                     <td>{{ reponse.textR3 }}</td>
                     <td>{{ reponse.textR4 }}</td>
                     <td>{{ reponse.id.username }}</td>
                     <td>{{ reponse.idQ.textQ }}</td>

                     <td>
                         <button type=“button” class=\"button-show\"><a href=\"{{ path('reponse_show', {'idR': reponse.idR}) }}\">show</a></button>
                         <button type=“button” class=\"button-edit\"><a href=\"{{ path('reponse_edit', {'idR': reponse.idR}) }}\">edit</a></button>
                     </td>
                 </tr>
             {% else %}
                 <tr>
                     <td colspan=\"7\">no records found</td>
                 </tr>
             {% endfor %}
             </tbody>
         </table>

         <button type=“button” class=\"button-create\"><a href=\"{{ path('reponse_new') }}\">Create new</a></button>

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
         <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
         <script>
             \$(document).ready(function(){
                 \$('#search').keyup(function(){
                     search_table(\$(this).val());
                 });
                 function search_table(value){
                     \$('#tableac tbody tr').each(function(){
                         var found = 'false';
                         \$(this).each(function(){
                             if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                             {
                                 found = 'true';
                             }
                         });
                         if(found === 'true')
                         {
                             \$(this).show();

                         }
                         else
                         {
                             \$(this).hide();

                         }
                     });
                 }
             });
         </script>
     {% endblock %}

 {% endblock %}
", "reponse/index.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\reponse\\index.html.twig");
    }
}
