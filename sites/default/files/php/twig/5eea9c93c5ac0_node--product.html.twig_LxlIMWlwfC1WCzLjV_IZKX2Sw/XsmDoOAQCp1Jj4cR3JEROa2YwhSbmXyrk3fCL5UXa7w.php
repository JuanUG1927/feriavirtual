<?php

/* themes/interrio/templates/node/node--product.html.twig */
class __TwigTemplate_f407985c52811ebfdc43026f54d652436d6d3e636842eb61c6d502ef404642ec extends Twig_Template
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
        echo "<div class=\"single-products-details\">       
                    <div class=\"product-content-box\">
                        <div class=\"row\">
                            <div class=\"col-md-6 img-box\">
                                
                                    ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
        echo "
                                
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"content-box\">
                                    <h2>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "getTitle", array()), "html", null, true));
        echo "</h2>
                                    <div class=\"review-box\">
                                        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_star_rating", array()), 0, array()), "html", null, true));
        echo "
                                    </div>
                                    <span class=\"price\">";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "price", array()), 0, array()), "html", null, true));
        echo "<del class=\"before-rate\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_old_price", array()), 0, array()), "html", null, true));
        echo "</del></span>
                                    <div class=\"text\">
                                        <p>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "summary", array()), "html", null, true));
        echo "</p>
                                    </div>
                                   
                                    <div class=\"addto-cart-box\">
                                        ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "add_to_cart", array()), "html", null, true));
        echo "
                                    </div>    
                                </div>
                            </div>
                        </div>   
                    </div>
                
                    ";
        // line 204
        echo "                
                    <!--Start related product -->
                    ";
        // line 315
        echo "                    <!--End related product -->
                </div>   
";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/node/node--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 315,  92 => 204,  82 => 21,  75 => 17,  68 => 15,  63 => 13,  58 => 11,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/node/node--product.html.twig", "/var/www/html/themes/interrio/templates/node/node--product.html.twig");
    }
}
