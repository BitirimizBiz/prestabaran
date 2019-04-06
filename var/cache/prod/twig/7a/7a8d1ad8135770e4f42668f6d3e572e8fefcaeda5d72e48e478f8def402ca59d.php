<?php

/* @PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_general.html.twig */
class __TwigTemplate_09303d1935c73ddc5f7c168cccc9e66ad717755b312e76c35d5dce9fbba88bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'order_preferences_general' => array($this, 'block_order_preferences_general'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_general.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('order_preferences_general', $context, $blocks);
    }

    public function block_order_preferences_general($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"col-xl-10\">
    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-block row\">
            <div class=\"card-text\">
                <div class=\"form-group row\">
                    ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable final summary", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display an overview of the addresses, shipping method and cart just before the order button (required in some European countries).", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_final_summary", array()), 'errors');
        echo "
                      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_final_summary", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable guest checkout", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow guest visitors to place an order without registering.", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_guest_checkout", array()), 'errors');
        echo "
                      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_guest_checkout", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 52
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Reordering Option", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable the option to allow customers to reorder in one click from the order history page (required in some European countries).", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "disable_reordering_option", array()), 'errors');
        echo "
                      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "disable_reordering_option", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 59
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Minimum purchase total required in order to validate the order", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set to 0 to disable this feature.", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "purchase_minimum_value", array()), 'errors');
        echo "
                      ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "purchase_minimum_value", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 66
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recalculate shipping costs after editing the order", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Automatically updates the shipping costs when you edit an order.", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "recalculate_shipping_cost", array()), 'errors');
        echo "
                      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "recalculate_shipping_cost", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 72
        if (($context["isMultishippingEnabled"] ?? null)) {
            // line 73
            echo "                    <div class=\"form-group row\">
                        ";
            // line 74
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow multishipping", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow the customer to ship orders to multiple addresses. This option will convert the customer's cart into one or more orders.", array(), "Admin.Shopparameters.Help"));
            echo "
                        <div class=\"col-sm\">
                          ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "allow_multishipping", array()), 'errors');
            echo "
                          ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "allow_multishipping", array()), 'widget');
            echo "
                        </div>
                    </div>
                ";
        }
        // line 81
        echo "                <div class=\"form-group row\">
                    ";
        // line 82
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delayed shipping", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allows you to delay shipping at your customers' request.", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "allow_delayed_shipping", array()), 'errors');
        echo "
                      ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "allow_delayed_shipping", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 89
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Terms of service", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Require customers to accept or decline terms of service before processing an order.", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_tos", array()), 'errors');
        echo "
                      ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_tos", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 96
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page for the Terms and conditions", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose the page which contains your store's terms and conditions of use.", array(), "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "tos_cms_id", array()), 'errors');
        echo "
                      ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "tos_cms_id", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 106,  191 => 99,  187 => 98,  182 => 96,  175 => 92,  171 => 91,  166 => 89,  159 => 85,  155 => 84,  150 => 82,  147 => 81,  140 => 77,  136 => 76,  131 => 74,  128 => 73,  126 => 72,  120 => 69,  116 => 68,  111 => 66,  104 => 62,  100 => 61,  95 => 59,  88 => 55,  84 => 54,  79 => 52,  72 => 48,  68 => 47,  63 => 45,  56 => 41,  52 => 40,  47 => 38,  39 => 33,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_general.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_general.html.twig");
    }
}
