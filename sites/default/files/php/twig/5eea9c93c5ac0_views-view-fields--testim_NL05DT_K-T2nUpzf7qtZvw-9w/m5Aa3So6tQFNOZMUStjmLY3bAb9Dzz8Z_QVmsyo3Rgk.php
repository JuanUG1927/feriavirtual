<?php

/* themes/interrio/templates/views/Testimonials/front page/views-view-fields--testimonials--block-2.html.twig */
class __TwigTemplate_8805e684883a2798e750671e0b730fc4b4939d8269c85d14283ce90b6e219491 extends Twig_Template
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
        echo "<div class=\"single-slide-item\">
    <div class=\"img-box\">
        <img src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uri_1", array()), "content", array()))))), "html", null, true));
        echo "\" alt=\"Awesome Image\">
        <div class=\"client-photo\">
            <img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uri_2", array()), "content", array()))))), "html", null, true));
        echo "\" alt=\"Awesome Image\">
        </div>
        <div class=\"review-box\">
            ";
        // line 9
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_project_star_rating", array()), "content", array()), "html", null, true));
        echo "
        </div>
    </div>
    <div class=\"text-box\">
        <span class=\"flaticon-right\"></span>
        <div class=\"text\">
            <p>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", array()), "content", array()), "html", null, true));
        echo "</p>
            <h3>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</h3>
            <h4>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_theme", array()), "content", array()), "html", null, true));
        echo "</h4>
        </div>
    </div>
</div>





































";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/views/Testimonials/front page/views-view-fields--testimonials--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  72 => 16,  68 => 15,  58 => 9,  52 => 5,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/views/Testimonials/front page/views-view-fields--testimonials--block-2.html.twig", "/var/www/html/themes/interrio/templates/views/Testimonials/front page/views-view-fields--testimonials--block-2.html.twig");
    }
}
