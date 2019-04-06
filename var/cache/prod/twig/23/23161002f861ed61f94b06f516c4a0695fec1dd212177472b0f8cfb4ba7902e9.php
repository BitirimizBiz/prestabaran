<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig */
class __TwigTemplate_549122b952dd536c5e84a6f756c412c6583a5289f9e6edd75bfca0e84cc133bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'backup_download_file' => array($this, 'block_backup_download_file'),
            'backup_alerts' => array($this, 'block_backup_alerts'),
            'backup_listing' => array($this, 'block_backup_listing'),
            'backup_options' => array($this, 'block_backup_options'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        $this->displayBlock('backup_download_file', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('backup_alerts', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('backup_listing', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        $this->displayBlock('backup_options', $context, $blocks);
    }

    // line 30
    public function block_backup_download_file($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        if (($context["hasDownloadFile"] ?? null)) {
            // line 32
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 32)->display($context);
            // line 33
            echo "    ";
        }
        // line 34
        echo "  ";
    }

    // line 36
    public function block_backup_alerts($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 39)->display($context);
        // line 40
        echo "      </div>
    </div>

    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 45)->display($context);
        // line 46
        echo "      </div>
    </div>
  ";
    }

    // line 50
    public function block_backup_listing($context, array $blocks = array())
    {
        // line 51
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 53
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 53)->display(array_merge($context, array("grid" => ($context["backupGrid"] ?? null))));
        // line 54
        echo "      </div>
    </div>
  ";
    }

    // line 58
    public function block_backup_options($context, array $blocks = array())
    {
        // line 59
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 61
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 61)->display($context);
        // line 62
        echo "      </div>
    </div>
  ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/backup.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  135 => 70,  129 => 68,  126 => 67,  120 => 62,  118 => 61,  114 => 59,  111 => 58,  105 => 54,  103 => 53,  99 => 51,  96 => 50,  90 => 46,  88 => 45,  81 => 40,  79 => 39,  75 => 37,  72 => 36,  68 => 34,  65 => 33,  62 => 32,  59 => 31,  56 => 30,  52 => 58,  49 => 57,  47 => 50,  44 => 49,  42 => 36,  39 => 35,  36 => 30,  33 => 29,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/index.html.twig");
    }
}
