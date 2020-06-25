<?php

/* themes/interrio/templates/views/blog/footer 2/views-view-fields--blog--block-4.html.twig */
class __TwigTemplate_07a4cb8bcf4031e9b91acb7691aa8220725e8907a3722ef3282957eff4359d8d extends Twig_Template
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
        $filters = array("trim" => 3, "striptags" => 3);
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('trim', 'striptags'),
                array('file_url')
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
        echo "<li class=\"single-popular-news-item clearfix\">
    <div class=\"img-holder\">
        <img style=\"width: 80px;height: 80px;\" src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uri", array()), "content", array()))))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "\">
        <div class=\"overlay\">
            <div class=\"box\">
                <div class=\"content\">
                    <a href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\"><i class=\"fa fa-link\"></i></a> 
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-holder\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\">
            <p>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</p>
        </a>
        <ul class=\"info\">
            <li>by ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uid", array()), "content", array()), "html", null, true));
        echo "</li>
            <li>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "html", null, true));
        echo "</li>  
        </ul>    
    </div>
</li>



















";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/views/blog/footer 2/views-view-fields--blog--block-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  75 => 17,  69 => 14,  65 => 13,  56 => 7,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/views/blog/footer 2/views-view-fields--blog--block-4.html.twig", "/var/www/html/themes/interrio/templates/views/blog/footer 2/views-view-fields--blog--block-4.html.twig");
    }
}
