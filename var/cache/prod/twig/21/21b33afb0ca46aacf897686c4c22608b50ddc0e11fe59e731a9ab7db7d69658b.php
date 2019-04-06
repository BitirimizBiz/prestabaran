<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig */
class __TwigTemplate_4ee27207fc7bb598973e8dab53a2f9ce58ef9b330c56c4a8160fba9ba49a44e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'backup_options_card' => array($this, 'block_backup_options_card'),
            'backup_options_rest' => array($this, 'block_backup_options_rest'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('backup_options_card', $context, $blocks);
    }

    public function block_backup_options_card($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Backup options", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ignore statistics tables", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", array()), "backup_all", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", array()), "backup_all", array()), 'widget');
        echo "

            <small class=\"form-text\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import.", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo " <br>
              ";
        // line 45
        echo twig_escape_filter($this->env, twig_replace_filter("%prefix%connections, %prefix%connections_page %prefix%connections_source, %prefix%guest, %prefix%statssearch", array("%prefix%" => ($context["dbPrefix"] ?? null))), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 51
        $context["helpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the backup script will drop your tables prior to restoring data.", array(), "Admin.Advparameters.Help");
        // line 52
        echo "          ";
        $context["helpMessage"] = ((($context["helpMessage"] ?? null) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(ie. \"DROP TABLE IF EXISTS\")", array(), "Admin.Advparameters.Help"));
        // line 53
        echo "
          ";
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import", array(), "Admin.Advparameters.Feature"), ($context["helpMessage"] ?? null));
        echo "
          <div class=\"col-sm\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", array()), "backup_drop_tables", array()), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", array()), "backup_drop_tables", array()), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 61
        $this->displayBlock('backup_options_rest', $context, $blocks);
        // line 64
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 61
    public function block_backup_options_rest($context, array $blocks = array())
    {
        // line 62
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["backupForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 62,  123 => 61,  117 => 72,  110 => 68,  104 => 64,  102 => 61,  95 => 57,  91 => 56,  86 => 54,  83 => 53,  80 => 52,  78 => 51,  69 => 45,  65 => 44,  59 => 41,  55 => 40,  50 => 38,  42 => 33,  35 => 30,  29 => 29,  26 => 28,  24 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig");
    }
}
