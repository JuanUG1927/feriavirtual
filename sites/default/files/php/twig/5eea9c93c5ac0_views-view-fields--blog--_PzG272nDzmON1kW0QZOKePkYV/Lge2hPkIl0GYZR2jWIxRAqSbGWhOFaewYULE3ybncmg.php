<?php

/* themes/interrio/templates/views/blog/front page/views-view-fields--blog--block-5.html.twig */
class __TwigTemplate_b3487beba01f65b97b04f9dd3595b9e6898789f2cd1cf7e467c8e813a6ea496c extends Twig_Template
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
        $filters = array("trim" => 5, "striptags" => 5);
        $functions = array("file_url" => 5);

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
        echo "<!--Start single blog item-->
<div class=\"col-md-4\">
    <div class=\"single-blog-item\">
        <div class=\"img-holder\">
            <img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uri", array()), "content", array()))))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "\">
            <div class=\"overlay\">
                <div class=\"box\">
                    <div class=\"content\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\"><i class=\"fa fa-link\"></i></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class=\"text-holder\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\">
                <h3 class=\"blog-title\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</h3>
            </a>
           
        <ul class=\"meta-info\">
            <li><i class=\"fa fa-user\" aria-hidden=\"true\"></i><a href=\"#\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uid", array()), "content", array()), "html", null, true));
        echo "</a></li>
            <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><a href=\"#\">";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "html", null, true));
        echo "</a></li>
        </ul>
            <div class=\"text\">
                <p>";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", array()), "content", array()), "html", null, true));
        echo "</p>
                <a class=\"readmore\" href=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\">Read More<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a>
            </div>
        </div>    
    </div>    
</div>
<!--End single blog item-->





















";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/views/blog/front page/views-view-fields--blog--block-5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  88 => 24,  82 => 21,  78 => 20,  71 => 16,  67 => 15,  58 => 9,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/views/blog/front page/views-view-fields--blog--block-5.html.twig", "/var/www/html/themes/interrio/templates/views/blog/front page/views-view-fields--blog--block-5.html.twig");
    }
}
