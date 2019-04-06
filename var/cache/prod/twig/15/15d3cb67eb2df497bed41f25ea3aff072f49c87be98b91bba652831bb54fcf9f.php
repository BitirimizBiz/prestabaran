<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig */
class __TwigTemplate_dd865579183434ebe0be9fa70839432000ee5831c69ccd39db28831924dfb7c2 extends Twig_Template
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
        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_download</i>
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download", array(), "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <p>
      <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["downloadFile"] ?? null), "url", array()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary\">
        <i class=\"material-icons\">cloud_download</i>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download the backup file (%s MB)", array("%s" => $this->getAttribute(($context["downloadFile"] ?? null), "size", array())), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </a>
    </p>
    <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tip: You can also download this file from your FTP server. Backup files are located in the \"/adminXXXX/backups\" directory.", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 40,  40 => 37,  35 => 35,  28 => 31,  22 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig");
    }
}
