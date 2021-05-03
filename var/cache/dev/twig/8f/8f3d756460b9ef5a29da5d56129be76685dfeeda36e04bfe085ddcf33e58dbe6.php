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

/* evenement/indexF.html.twig */
class __TwigTemplate_6a709d32c4f5d74db5e8183c4a450421b8bbf2d6c719f941a6b44dfe13749b77 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "evenement/indexF.html.twig", 1);
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
        // line 132
        echo "    <script
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"> </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchEvenementx");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */ type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('div#all').hide();
                                \$('article#art').append('<h3>'+obj.idEv+'</h3><ul><li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Aura lieu à '+obj.espace+
                                '</h2></li><li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Le '+obj.dateEv+
                                '</h2></li><li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">'+obj.nombrePl+'places</h2></li></ul></div>'); });
                               }
                        else
                            {
                                \$('div#all').show();
                                \$('div#search').empty();
                                \$('div#search').fadeIn('fast');
                            }
                        },
                    });
                return false;
            });
        });
    </script>


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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Evènements</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contoller");
        echo "\">Home</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_indexF");
        echo "\">Events</a></li>
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
                            <div id=\"all\" class=\"blog_left_sidebar\">
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 38
            echo "                                    <article id=\"art\" class=\"blog_item\">
                                        <div class=\"blog_item_img\">
                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_showF", ["idEv" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEv", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"blog_item_date\">
                                                <h3>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEv", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
                                            </a>
                                        </div>
                                        <div class=\"blog_details\">
                                            <ul>
                                                <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Aura lieu à ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "espace", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2></li>
                                                <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Le ";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEv", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEv", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " à ";
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEv", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateEv", [], "any", false, false, false, 47), "H:i"), "html", null, true))) : (print ("")));
            echo "</h2></li>
                                                <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nombrePl", [], "any", false, false, false, 48), "html", null, true);
            echo " places</h2></li>

                                            </ul>
                                        </div>

                                    </article>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                                    <h1>no records found</h1>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                <nav class=\"blog-pagination justify-content-center d-flex\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item\">
                                            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\" aria-label=\"Previous\">
                                                <i class=\"ti-angle-left\"></i>
                                            </a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\">1</a>
                                        </li>
                                        <li class=\"page-item active\">
                                            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\">2</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"page-link\" aria-label=\"Next\">
                                                <i class=\"ti-angle-right\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div id=\"search\"></div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"blog_right_sidebar\">
                                <aside class=\"single_sidebar_widget search_widget\">
                                    <form action=\"#\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group mb-3\">
                                                <input id=\"search\" type=\"text\" class=\"form-control\" placeholder='Search Keyword'>
                                            </div>
                                        </div>
                                        <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                                type=\"submit\">Search</button>
                                    </form>
                                </aside>
                                <aside class=\"single_sidebar_widget newsletter_widget\">
                                    <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Localisation</h4>
                                        <div class=\"d-flex form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Ariana\">
                                            <label class=\"form-check-label\">Ariana</label>&nbsp;<span>(120)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Tunis\">
                                            <label class=\"form-check-label\">Tunis</label>&nbsp;<span>(230)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Ben Arous\">
                                            <label class=\"form-check-label\">Ben Arous</label>&nbsp;<span>(57)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Béja\">
                                            <label class=\"form-check-label\">Béja</label>&nbsp;<span>(20)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Sousse\">
                                            <label class=\"form-check-label\">Sousse</label>&nbsp;<span>(70)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Sfax\">
                                            <label class=\"form-check-label\">Sfax</label>&nbsp;<span>(180)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Nabeul\">
                                            <label class=\"form-check-label\">Nabeul</label>&nbsp;<span>(90)</span>
                                        </div>
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
        return "evenement/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 71,  246 => 68,  240 => 65,  232 => 60,  227 => 57,  220 => 55,  208 => 48,  202 => 47,  198 => 46,  190 => 41,  186 => 40,  182 => 38,  177 => 37,  157 => 20,  153 => 19,  137 => 5,  127 => 4,  86 => 142,  74 => 132,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                                        <h1 data-animation=\"bounceIn\" data-delay=\"0.2s\">Evènements</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"{{ path('home_contoller') }}\">Home</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"{{ path('evenement_indexF') }}\">Events</a></li>
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
                            <div id=\"all\" class=\"blog_left_sidebar\">
                                {% for evenement in evenements %}
                                    <article id=\"art\" class=\"blog_item\">
                                        <div class=\"blog_item_img\">
                                            <a href=\"{{ path('evenement_showF', {'idEv': evenement.idEv}) }}\" class=\"blog_item_date\">
                                                <h3>{{ evenement.nomEv }}</h3>
                                            </a>
                                        </div>
                                        <div class=\"blog_details\">
                                            <ul>
                                                <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Aura lieu à {{ evenement.espace }}</h2></li>
                                                <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Le {{ evenement.dateEv? evenement.dateEv|date('Y-m-d') : '' }} à {{ evenement.dateEv? evenement.dateEv|date('H:i') : '' }}</h2></li>
                                                <li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">{{ evenement.nombrePl }} places</h2></li>

                                            </ul>
                                        </div>

                                    </article>
                                {% else %}
                                    <h1>no records found</h1>
                                {% endfor %}
                                <nav class=\"blog-pagination justify-content-center d-flex\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item\">
                                            <a href=\"{{ asset('#') }}\" class=\"page-link\" aria-label=\"Previous\">
                                                <i class=\"ti-angle-left\"></i>
                                            </a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"{{ asset('#') }}\" class=\"page-link\">1</a>
                                        </li>
                                        <li class=\"page-item active\">
                                            <a href=\"{{ asset('#') }}\" class=\"page-link\">2</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"{{ asset('#') }}\" class=\"page-link\" aria-label=\"Next\">
                                                <i class=\"ti-angle-right\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div id=\"search\"></div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"blog_right_sidebar\">
                                <aside class=\"single_sidebar_widget search_widget\">
                                    <form action=\"#\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group mb-3\">
                                                <input id=\"search\" type=\"text\" class=\"form-control\" placeholder='Search Keyword'>
                                            </div>
                                        </div>
                                        <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                                type=\"submit\">Search</button>
                                    </form>
                                </aside>
                                <aside class=\"single_sidebar_widget newsletter_widget\">
                                    <h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Localisation</h4>
                                        <div class=\"d-flex form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Ariana\">
                                            <label class=\"form-check-label\">Ariana</label>&nbsp;<span>(120)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Tunis\">
                                            <label class=\"form-check-label\">Tunis</label>&nbsp;<span>(230)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Ben Arous\">
                                            <label class=\"form-check-label\">Ben Arous</label>&nbsp;<span>(57)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Béja\">
                                            <label class=\"form-check-label\">Béja</label>&nbsp;<span>(20)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Sousse\">
                                            <label class=\"form-check-label\">Sousse</label>&nbsp;<span>(70)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Sfax\">
                                            <label class=\"form-check-label\">Sfax</label>&nbsp;<span>(180)</span>
                                        </div>
                                        <div class=\"form-check form-check\">
                                            <input type=\"checkbox\" class=\"form-check-input\" name=\"region[]\" id=\"front\" value=\"Nabeul\">
                                            <label class=\"form-check-label\">Nabeul</label>&nbsp;<span>(90)</span>
                                        </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
        </main>
    {% endblock %}
    <script
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"> </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('searchEvenementx') }}\",
                    /* La méthode utilisée pour transférer les données est GET */ type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('div#all').hide();
                                \$('article#art').append('<h3>'+obj.idEv+'</h3><ul><li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Aura lieu à '+obj.espace+
                                '</h2></li><li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Le '+obj.dateEv+
                                '</h2></li><li><h2 class=\"blog-head\" style=\"color: #2d2d2d;\">'+obj.nombrePl+'places</h2></li></ul></div>'); });
                               }
                        else
                            {
                                \$('div#all').show();
                                \$('div#search').empty();
                                \$('div#search').fadeIn('fast');
                            }
                        },
                    });
                return false;
            });
        });
    </script>


{% endblock %}
", "evenement/indexF.html.twig", "C:\\wamp64\\www\\PIDEV-WebSkayway\\templates\\evenement\\indexF.html.twig");
    }
}
