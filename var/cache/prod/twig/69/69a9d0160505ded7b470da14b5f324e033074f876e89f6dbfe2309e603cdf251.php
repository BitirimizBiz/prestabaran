<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig */
class __TwigTemplate_01f26fa483e0c4ea00f1df6cb4c5f8baa001616914bf8628f206973c4a932239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'backup_creation_form' => array($this, 'block_backup_creation_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_creation_form', $context, $blocks);
    }

    public function block_backup_creation_form($context, array $blocks = array())
    {
        // line 27
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_backups_create");
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("backup"), "html", null, true);
        echo "\">

  <button type=\"submit\" class=\"btn btn-outline-primary\">
    <i class=\"material-icons\">save</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I have read the disclaimer. Please create a new backup.", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "
  </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 32,  34 => 28,  29 => 27,  23 => 26,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig");
    }
}
