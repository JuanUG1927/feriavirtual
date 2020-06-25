<?php

/* themes/interrio/templates/footer.html.twig */
class __TwigTemplate_38073a32061d91ce9c2c92166f0cd72b8849e0e6e363354f748d40c22dd8538a extends Twig_Template
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
        echo "<!--Start footer area-->  
<footer class=\"footer-area\">
    <div class=\"container\">
        <div class=\"row\">
            <!--Start single footer widget-->
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_1", array()), "html", null, true));
        echo "
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"single-footer-widget pd-bottom\">
                    ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_2", array()), "html", null, true));
        echo "
                    
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"single-footer-widget pd-bottom\">
                     ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_column_3", array()), "html", null, true));
        echo "
                    
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area--> 

<!--Start footer bottom area-->   
<section class=\"footer-bottom-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                <div class=\"copyright-text\">
                   ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "copyright", array()), "html", null, true));
        echo "
                </div>
            </div>
            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"footer-menu\">
                    ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "social_footer", array()), "html", null, true));
        echo "
                   
                </div>
            </div>
        </div>    
    </div>
</section>    
<!--End footer bottom area-->

<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-angle-up\"></span></div>
";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  90 => 37,  71 => 21,  60 => 13,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/footer.html.twig", "/var/www/html/themes/interrio/templates/footer.html.twig");
    }
}
