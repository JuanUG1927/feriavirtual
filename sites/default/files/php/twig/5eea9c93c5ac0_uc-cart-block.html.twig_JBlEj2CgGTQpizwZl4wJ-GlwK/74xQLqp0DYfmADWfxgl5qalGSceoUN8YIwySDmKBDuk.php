<?php

/* modules/ubercart/uc_cart/templates/uc-cart-block.html.twig */
class __TwigTemplate_390020eace9eef394362d24c33cacd67e6d1e8e9c4e643584601c2eece1baa51 extends Twig_Template
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
        $tags = array("if" => 21, "for" => 23, "trans" => 45);
        $filters = array("t" => 38);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'trans'),
                array('t'),
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

        // line 21
        if (($context["items"] ?? null)) {
            // line 22
            echo "  <table ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "    <tr>
      <td class=\"cart-block-item-qty\">";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "qty", array()), "html", null, true));
                echo " ×</td>
      ";
                // line 26
                if ($this->getAttribute($context["item"], "desc", array())) {
                    // line 27
                    echo "        <td class=\"cart-block-item-title\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "<br />
        <span class=\"cart-block-item-desc\">";
                    // line 28
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "desc", array()), "html", null, true));
                    echo "</span></td>
      ";
                } else {
                    // line 30
                    echo "        <td class=\"cart-block-item-title\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</td>
      ";
                }
                // line 32
                echo "      <td class=\"cart-block-item-price\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true));
                echo "</td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </table>
";
        } else {
            // line 37
            echo "  <p ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("There are no products in your shopping cart.")));
            echo "
  </p>
";
        }
        // line 41
        echo "
<table class=\"cart-block-summary\">
  <tr>
    <td class=\"cart-block-summary-items\">
      ";
        // line 45
        echo \Drupal::translation()->formatPlural(abs(        // line 47
($context["item_count"] ?? null)), "<span class=\"num-items\">1</span> Item", "<span class=\"num-items\">@item_count</span> Items", array("@item_count" =>         // line 48
($context["item_count"] ?? null), ));
        // line 50
        echo "    </td>
    <td class=\"cart-block-summary-total\">
      <strong>";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total")));
        echo ":</strong> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["total"] ?? null), "html", null, true));
        echo "
    </td>
  </tr>
</table>

";
        // line 57
        if (($context["items"] ?? null)) {
            // line 58
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["summary_links"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 58,  128 => 57,  118 => 52,  114 => 50,  112 => 48,  111 => 47,  110 => 45,  104 => 41,  98 => 38,  93 => 37,  89 => 35,  79 => 32,  73 => 30,  68 => 28,  63 => 27,  61 => 26,  57 => 25,  54 => 24,  50 => 23,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/ubercart/uc_cart/templates/uc-cart-block.html.twig", "/var/www/html/modules/ubercart/uc_cart/templates/uc-cart-block.html.twig");
    }
}
