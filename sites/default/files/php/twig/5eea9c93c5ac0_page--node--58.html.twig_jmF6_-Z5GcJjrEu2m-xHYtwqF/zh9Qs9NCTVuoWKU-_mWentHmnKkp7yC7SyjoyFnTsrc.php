<?php

/* themes/interrio/templates/pages/page--node--58.html.twig */
class __TwigTemplate_37fe88408af87b0bdc42cfeb58aa213b65901c43b0d7f864707addd44569a2cf extends Twig_Template
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
        $tags = array("include" => 2, "if" => 7, "block" => 8);
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
        echo "
";
        // line 2
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header.html.twig"), "themes/interrio/templates/pages/page--node--58.html.twig", 2)->display($context);
        // line 3
        echo "


                         ";
        // line 7
        echo "                        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 8
            echo "                            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 11
            echo "                        ";
        }
        // line 12
        echo "

                        ";
        // line 15
        echo "                        ";
        if (($context["action_links"] ?? null)) {
            // line 16
            echo "                            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 19
            echo "                        ";
        }
        // line 20
        echo "
                        ";
        // line 22
        echo "                        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 23
            echo "                            ";
            $this->displayBlock('help', $context, $blocks);
            // line 26
            echo "                        ";
        }
        // line 27
        echo "
                        ";
        // line 29
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "




";
        // line 37
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer.html.twig"), "themes/interrio/templates/pages/page--node--58.html.twig", 37)->display($context);
    }

    // line 8
    public function block_highlighted($context, array $blocks = array())
    {
        // line 9
        echo "                                <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
                            ";
    }

    // line 16
    public function block_action_links($context, array $blocks = array())
    {
        // line 17
        echo "                                <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
                            ";
    }

    // line 23
    public function block_help($context, array $blocks = array())
    {
        // line 24
        echo "                                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
                            ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "                            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/pages/page--node--58.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  138 => 29,  131 => 24,  128 => 23,  121 => 17,  118 => 16,  111 => 9,  108 => 8,  104 => 37,  97 => 32,  94 => 29,  91 => 27,  88 => 26,  85 => 23,  82 => 22,  79 => 20,  76 => 19,  73 => 16,  70 => 15,  66 => 12,  63 => 11,  60 => 8,  57 => 7,  52 => 3,  50 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/pages/page--node--58.html.twig", "/var/www/html/themes/interrio/templates/pages/page--node--58.html.twig");
    }
}
