<?php

/* themes/interrio/templates/views/shop/full width/views-view-fields--shop.html.twig */
class __TwigTemplate_1cfbb322d30f56035b5d20ab4aaef21657ac70f6f2e2a4eb2c0df31922f54f28 extends Twig_Template
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
        $tags = array("if" => 6);
        $filters = array("trim" => 4, "striptags" => 4);
        $functions = array("file_url" => 4, "kint" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('trim', 'striptags'),
                array('file_url', 'kint')
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
        echo "<div class=\"col-md-3 col-sm-4 col-xs-12\">
    <div class=\"single-shop-item\">
        <div class=\"img-holder\">
            <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uri", array()), "content", array()))))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "\">
            ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\kint\Twig\KintExtension')->kint($this->env, $context, array(0 => $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_new", array()), "content", array())))));
        echo "
             ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_new", array()), "content", array()) == "New")) {
            // line 7
            echo "            <div class=\"new-item\">
                <p>";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_new", array()), "content", array()), "html", null, true));
            echo "</p>
            </div>
                ";
        }
        // line 11
        echo "
            <div class=\"overlay\">
                <div class=\"box\">
                    <div class=\"content\">
                        ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "add_to_cart", array()), "content", array()), "html", null, true));
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"title-holder\">
            <div class=\"top clearfix\">
                <div class=\"product-title pull-left\">
                    <h5>";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</h5>
                </div>
                <div class=\"review-box pull-right\">
                    ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_star_rating", array()), "content", array()), "html", null, true));
        echo "
                </div>
            </div>
            <h4>";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "price", array()), "content", array()), "html", null, true));
        echo "<del class=\"before-rate\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_old_price", array()), "content", array()), "html", null, true));
        echo "</del></h4>
        </div>
    </div>
</div>









";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/views/shop/full width/views-view-fields--shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  92 => 26,  86 => 23,  75 => 15,  69 => 11,  63 => 8,  60 => 7,  58 => 6,  54 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/views/shop/full width/views-view-fields--shop.html.twig", "/var/www/html/themes/interrio/templates/views/shop/full width/views-view-fields--shop.html.twig");
    }
}
