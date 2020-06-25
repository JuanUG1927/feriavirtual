<?php

/* themes/interrio/templates/header.html.twig */
class __TwigTemplate_8e9284589e9c56e9f84c9170870fd7b33d6b00ec069c474687cb7988b544a663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<section class=\"top-bar-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-7\">
                <!--Start contact info left-->
                <div class=\"contact-info-left clearfix\">
                    ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_left", array()), "html", null, true));
        echo "
                </div>
                <!--End contact info left-->    
            </div>
            <div class=\"col-lg-5 col-md-5\">
                <!--Start contact info right-->
                
                    ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_right", array()), "html", null, true));
        echo "
                
                <!--End contact info right--> 
            </div>
        </div>
    </div>
</section>

<!--Start header-search  area-->
<section class=\"header-search\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"search-form pull-right\">
                    <form action=\"search/node\">
                        <div class=\"search\">
                            <input type=\"search\" name=\"search\" value=\"\" placeholder=\"Search Something\">
                            <button type=\"submit\"><span class=\"icon fa fa-search\"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End header-search  area-->  

<!--Start header area-->
<header class=\"header-area stricky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"outer-box clearfix\">
                    <!--Start logo-->
                    <div class=\"logo\">
                        ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
        echo "
                    </div>
                    <!--End logo-->
                    <!--Start search box btn-->
                    <div class=\"search-box-btn\">
                        <div class=\"toggle-search\">
                            <button><span class=\"icon fa fa-search\"></span></button>    
                        </div>
                    </div>
                    <!--End search box btn-->
                    <!--Start cart btn-->
                    
                    <!--End cart btn-->
                    <!--Start mainmenu-->
                    <nav class=\"main-menu\">
                        <div class=\"navbar-header\">   \t
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse clearfix\">
                            ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
                           
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</header>  
<!--End header area-->";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 72,  99 => 49,  61 => 14,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/header.html.twig", "/var/www/html/themes/interrio/templates/header.html.twig");
    }
}
