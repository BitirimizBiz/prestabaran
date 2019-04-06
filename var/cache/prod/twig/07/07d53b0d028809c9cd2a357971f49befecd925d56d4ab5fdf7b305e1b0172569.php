<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig */
class __TwigTemplate_33a02dbeddd3975962a965ea9a1fed6a4d28dc553a8a68c7ecefb9d864d755f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">cloud_download</i>
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download", array(), "Admin.Actions"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-body\">
            <div class=\"alert alert-success\" role=\"alert\">
              <p class=\"alert-text\">
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Beginning the download ...", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              </p>
            </div>
            <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Backup files should automatically start downloading.", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "</p>
            <p class=\"mb-0\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If not,[1][2] please click here[/1]!", array("[1]" => ((" <a href=\"" . $this->getAttribute(($context["downloadFile"] ?? null), "url", array())) . "\" class=\"btn btn-outline-primary btn-sm\">"), "[/1]" => "</a> ", "[2]" => "<i class=\"icon-download\"></i>"), "Admin.Advparameters.Notification");
        echo "</p>

            <iframe src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["downloadFile"] ?? null), "url", array()), "html", null, true);
        echo "\" class=\"d-none\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 47,  57 => 45,  53 => 44,  47 => 41,  39 => 36,  31 => 30,  28 => 29,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", "/home/bitirimiz/BARANPRESTA/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig");
    }
}
