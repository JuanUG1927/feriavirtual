<?php

/* themes/interrio/templates/pages/page--node--product.html.twig */
class __TwigTemplate_670e74d0366053a7bb49ff14b27a29079329cec96ca21ac9c1698a6c9f63a234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'highlighted' => array($this, 'block_highlighted'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("include" => 1, "if" => 9, "block" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if', 'block'),
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
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header.html.twig"), "themes/interrio/templates/pages/page--node--product.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page-title.html.twig"), "themes/interrio/templates/pages/page--node--product.html.twig", 2)->display($context);
        // line 3
        echo "
<section class=\"shop-single-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 col-md-8 col-sm-12 col-xs-12\">
                ";
        // line 9
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 10
            echo "                        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 13
            echo "                    ";
        }
        // line 14
        echo "


                    ";
        // line 18
        echo "                    ";
        if (($context["action_links"] ?? null)) {
            // line 19
            echo "                        ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 22
            echo "                    ";
        }
        // line 23
        echo "
                    ";
        // line 25
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 26
            echo "                        ";
            $this->displayBlock('help', $context, $blocks);
            // line 29
            echo "                    ";
        }
        // line 30
        echo "
                    ";
        // line 32
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "                
                 
            </div>
            <!--Start sidebar Wrapper-->
            <div class=\"col-lg-3 col-md-4 col-sm-7 col-xs-12\">
                <div class=\"sidebar-wrapper\">
                 ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
        echo "
                </div>    
            </div>
            <!--End Sidebar Wrapper-->          
        </div>
    </div>
</section>         


























";
        // line 74
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer.html.twig"), "themes/interrio/templates/pages/page--node--product.html.twig", 74)->display($context);
    }

    // line 10
    public function block_highlighted($context, array $blocks = array())
    {
        // line 11
        echo "                            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
                        ";
    }

    // line 19
    public function block_action_links($context, array $blocks = array())
    {
        // line 20
        echo "                            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
                        ";
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        // line 27
        echo "                            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
                        ";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/pages/page--node--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 33,  177 => 32,  170 => 27,  167 => 26,  160 => 20,  157 => 19,  150 => 11,  147 => 10,  143 => 74,  107 => 41,  99 => 35,  96 => 32,  93 => 30,  90 => 29,  87 => 26,  84 => 25,  81 => 23,  78 => 22,  75 => 19,  72 => 18,  67 => 14,  64 => 13,  61 => 10,  58 => 9,  51 => 3,  49 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/pages/page--node--product.html.twig", "/var/www/html/themes/interrio/templates/pages/page--node--product.html.twig");
    }
}
