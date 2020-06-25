<?php

/* themes/interrio/templates/system/page.html.twig */
class __TwigTemplate_0e1b4e5cc793ede2f0fcc578a95122b5c74c54a6a59705de43f93d3e3a8f51b7 extends Twig_Template
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
        $tags = array("include" => 3, "if" => 7, "block" => 8);
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
        // line 3
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header.html.twig"), "themes/interrio/templates/system/page.html.twig", 3)->display($context);
        // line 4
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page-title.html.twig"), "themes/interrio/templates/system/page.html.twig", 4)->display($context);
        // line 5
        echo "
 ";
        // line 7
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 8
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 11
            echo "    ";
        }
        // line 12
        echo "


    ";
        // line 16
        echo "    ";
        if (($context["action_links"] ?? null)) {
            // line 17
            echo "        ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 23
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 24
            echo "        ";
            $this->displayBlock('help', $context, $blocks);
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    ";
        // line 30
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "

";
        // line 35
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer.html.twig"), "themes/interrio/templates/system/page.html.twig", 35)->display($context);
    }

    // line 8
    public function block_highlighted($context, array $blocks = array())
    {
        // line 9
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 17
    public function block_action_links($context, array $blocks = array())
    {
        // line 18
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
        ";
    }

    // line 24
    public function block_help($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
        ";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/interrio/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  137 => 30,  130 => 25,  127 => 24,  120 => 18,  117 => 17,  110 => 9,  107 => 8,  103 => 35,  99 => 33,  96 => 30,  93 => 28,  90 => 27,  87 => 24,  84 => 23,  81 => 21,  78 => 20,  75 => 17,  72 => 16,  67 => 12,  64 => 11,  61 => 8,  58 => 7,  55 => 5,  53 => 4,  51 => 3,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/interrio/templates/system/page.html.twig", "/var/www/html/themes/interrio/templates/system/page.html.twig");
    }
}
