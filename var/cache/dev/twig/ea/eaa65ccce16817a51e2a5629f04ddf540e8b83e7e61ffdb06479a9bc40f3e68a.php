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

/* utilisateur/_form.html.twig */
class __TwigTemplate_eee68cb2b6c8fb1fbf248fbc4fd1a00263cfd8c42914fb901dfa30ea6bea1d62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "formuser"]]);
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        echo "



  ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formenseignant"]) || array_key_exists("formenseignant", $context) ? $context["formenseignant"] : (function () { throw new RuntimeError('Variable "formenseignant" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["id" => "formens"]]);
        echo "
<div id=\"enseignantblock\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formenseignant"]) || array_key_exists("formenseignant", $context) ? $context["formenseignant"] : (function () { throw new RuntimeError('Variable "formenseignant" does not exist.', 8, $this->source); })()), 'widget');
        echo "
</div>





";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapprenant"]) || array_key_exists("formapprenant", $context) ? $context["formapprenant"] : (function () { throw new RuntimeError('Variable "formapprenant" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["id" => "formapp"]]);
        echo "
<div id=\"descriptionblock\">
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formapprenant"]) || array_key_exists("formapprenant", $context) ? $context["formapprenant"] : (function () { throw new RuntimeError('Variable "formapprenant" does not exist.', 17, $this->source); })()), 'widget');
        echo "
</div>
";
        // line 20
        echo "



<button type=\"submit\" class=\"btn btn-success swalDefaultSuccess\" style=\"\"   id=\"subdens\">SAVE ens</button>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapprenant"]) || array_key_exists("formapprenant", $context) ? $context["formapprenant"] : (function () { throw new RuntimeError('Variable "formapprenant" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formenseignant"]) || array_key_exists("formenseignant", $context) ? $context["formenseignant"] : (function () { throw new RuntimeError('Variable "formenseignant" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
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

<style>
    .btn {
        display: inline-block;
        padding: 12px 18px;
        cursor: pointer;
        border-radius: 5px;
        background-color: lightgreen;
        font-size: 16px;
        font-weight: bold;
        color: white;
    }
</style>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  90 => 26,  86 => 25,  79 => 20,  74 => 17,  69 => 15,  59 => 8,  54 => 6,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'formuser'}}) }}
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




<button type=\"submit\" class=\"btn btn-success swalDefaultSuccess\" style=\"\"   id=\"subdens\">SAVE ens</button>
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

<style>
    .btn {
        display: inline-block;
        padding: 12px 18px;
        cursor: pointer;
        border-radius: 5px;
        background-color: lightgreen;
        font-size: 16px;
        font-weight: bold;
        color: white;
    }
</style>


", "utilisateur/_form.html.twig", "C:\\xampp\\htdocs\\PIDEV-WebSkayway\\templates\\utilisateur\\_form.html.twig");
    }
}
