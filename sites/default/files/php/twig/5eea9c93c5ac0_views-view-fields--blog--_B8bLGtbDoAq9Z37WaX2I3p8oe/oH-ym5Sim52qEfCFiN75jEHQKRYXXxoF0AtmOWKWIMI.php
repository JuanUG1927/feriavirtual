<?php

/* themes/interrio/templates/views/blog/blog sidebar/views-view-fields--blog--block-2.html.twig */
class __TwigTemplate_70d58798b0e47a72fd304a81178b165670b803af96f62cd9953bd4b52d4041ec extends Twig_Template
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
        echo "     <li>
            <div class=\"img-holder\">
                <img style=\"width: 80px;height: 70px;\" src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uri", array()), "content", array()))))), "html", null, true));
        echo "\" alt=\"Awesome Image\">
                <div class=\"overlay\">
                    <div class=\"box\">
                        <div class=\"content\">
                            <a href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"title\">
                <h3><a href=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</a></h3>
                <p>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", array()), "content", array()), "html", null, true));
        echo "</p>
            </div>
        </li>













";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/views/blog/blog sidebar/views-view-fields--blog--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  63 => 13,  54 => 7,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/views/blog/blog sidebar/views-view-fields--blog--block-2.html.twig", "/var/www/html/themes/interrio/templates/views/blog/blog sidebar/views-view-fields--blog--block-2.html.twig");
    }
}
