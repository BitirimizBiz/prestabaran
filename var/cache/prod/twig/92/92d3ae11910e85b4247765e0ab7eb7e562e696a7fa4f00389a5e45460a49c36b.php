<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig */
class __TwigTemplate_48c3951347b2df44e00074c5f4eaa97a0da4590543c0a3e777b8415013aaef14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'backup_info' => array($this, 'block_backup_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_info', $context, $blocks);
    }

    public function block_backup_info($context, array $blocks = array())
    {
        // line 27
        echo "  <div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 28
        if (($context["isHostMode"] ?? null)) {
            // line 29
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to restore a database backup", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</h4>
      <p>";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you need to restore a database backup, we invite you to subscribe to a [1][2]technical support plan[/2][/1].", array("[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<a class=\"_blank\" href=\"https://addons.prestashop.com/support/16298-support-essentiel-plan.html\">", "[/2]" => "</a>"), "Admin.Advparameters.Notification");
            echo "</p>
      <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our team will take care of restoring your database safely.", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
      <br>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Why can't I restore it by myself?", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
      <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your shop is hosted by PrestaShop. Although you can create backup files here below, there are core settings you cannot access for security reasons, like the database management. Thus, only our team can proceed to a restoration.", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 36
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to restore a database backup in 10 easy steps", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</h4>
      <ol class=\"mb-0\">
        <li>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please ask your hosting provider for \"phpMyAdmin\" access to your database.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connect to \"phpMyAdmin\" and select your current database.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("At the top of the screen, please select the \"Import\" tab", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the \"Browse\" button and select the backup file from your hard drive.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>
          ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the maximum filesize allowed (e.g. Max: 16MB)", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo " <br>
          ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If your backup file exceeds this limit, contact your hosting provider for assistance. ", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo "
        </li>
        <li>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the \"Go\" button and please wait patiently for the import process to conclude. This may take several minutes.", array(), "Admin.Advparameters.Help"), "html", null, true);
            echo " <br></li>
      </ol>
    ";
        }
        // line 53
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 53,  105 => 50,  100 => 48,  96 => 47,  91 => 45,  87 => 44,  83 => 43,  79 => 42,  75 => 41,  71 => 40,  67 => 39,  63 => 38,  57 => 36,  52 => 34,  48 => 33,  43 => 31,  39 => 30,  34 => 29,  32 => 28,  29 => 27,  23 => 26,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig");
    }
}
