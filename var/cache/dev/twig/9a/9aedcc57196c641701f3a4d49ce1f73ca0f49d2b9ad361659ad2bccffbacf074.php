<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1f6973622c00edd46183ad7032b111c2bf08a88076754fabbcb997337a979c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f6973622c00edd46183ad7032b111c2bf08a88076754fabbcb997337a979c1->enter($__internal_f1f6973622c00edd46183ad7032b111c2bf08a88076754fabbcb997337a979c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f900d5e9a7bb6d2e20451707b4189a483a8b5196fe4a5538ce8ffc6acc66d93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f900d5e9a7bb6d2e20451707b4189a483a8b5196fe4a5538ce8ffc6acc66d93f->enter($__internal_f900d5e9a7bb6d2e20451707b4189a483a8b5196fe4a5538ce8ffc6acc66d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f1f6973622c00edd46183ad7032b111c2bf08a88076754fabbcb997337a979c1->leave($__internal_f1f6973622c00edd46183ad7032b111c2bf08a88076754fabbcb997337a979c1_prof);

        
        $__internal_f900d5e9a7bb6d2e20451707b4189a483a8b5196fe4a5538ce8ffc6acc66d93f->leave($__internal_f900d5e9a7bb6d2e20451707b4189a483a8b5196fe4a5538ce8ffc6acc66d93f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63b78b91e3772554dda6878303c10f40cf5988abf390f67707382ce0a943be0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b78b91e3772554dda6878303c10f40cf5988abf390f67707382ce0a943be0e->enter($__internal_63b78b91e3772554dda6878303c10f40cf5988abf390f67707382ce0a943be0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecd3be04a5277a0f71eebcad2af230376bf2b9b6ca35476d240b13387b962db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd3be04a5277a0f71eebcad2af230376bf2b9b6ca35476d240b13387b962db7->enter($__internal_ecd3be04a5277a0f71eebcad2af230376bf2b9b6ca35476d240b13387b962db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ecd3be04a5277a0f71eebcad2af230376bf2b9b6ca35476d240b13387b962db7->leave($__internal_ecd3be04a5277a0f71eebcad2af230376bf2b9b6ca35476d240b13387b962db7_prof);

        
        $__internal_63b78b91e3772554dda6878303c10f40cf5988abf390f67707382ce0a943be0e->leave($__internal_63b78b91e3772554dda6878303c10f40cf5988abf390f67707382ce0a943be0e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cda39137ffe4edd6e9424cb6c390882a0249f22fa0038de900224165dd31db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cda39137ffe4edd6e9424cb6c390882a0249f22fa0038de900224165dd31db5->enter($__internal_9cda39137ffe4edd6e9424cb6c390882a0249f22fa0038de900224165dd31db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bde6904c82ca239bf7bdab9d14e9e9539d94756a6ccb2e8dc7c530ed301282fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde6904c82ca239bf7bdab9d14e9e9539d94756a6ccb2e8dc7c530ed301282fd->enter($__internal_bde6904c82ca239bf7bdab9d14e9e9539d94756a6ccb2e8dc7c530ed301282fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bde6904c82ca239bf7bdab9d14e9e9539d94756a6ccb2e8dc7c530ed301282fd->leave($__internal_bde6904c82ca239bf7bdab9d14e9e9539d94756a6ccb2e8dc7c530ed301282fd_prof);

        
        $__internal_9cda39137ffe4edd6e9424cb6c390882a0249f22fa0038de900224165dd31db5->leave($__internal_9cda39137ffe4edd6e9424cb6c390882a0249f22fa0038de900224165dd31db5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3035ce6473d2d543f9e71ec24f149ac82972da4134f27de0d0317796ebb38bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3035ce6473d2d543f9e71ec24f149ac82972da4134f27de0d0317796ebb38bb7->enter($__internal_3035ce6473d2d543f9e71ec24f149ac82972da4134f27de0d0317796ebb38bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46f56fff34826ccfc7aa1a1fbbb4182f0a5660cb7918347c4c9f4c670e2092e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f56fff34826ccfc7aa1a1fbbb4182f0a5660cb7918347c4c9f4c670e2092e7->enter($__internal_46f56fff34826ccfc7aa1a1fbbb4182f0a5660cb7918347c4c9f4c670e2092e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46f56fff34826ccfc7aa1a1fbbb4182f0a5660cb7918347c4c9f4c670e2092e7->leave($__internal_46f56fff34826ccfc7aa1a1fbbb4182f0a5660cb7918347c4c9f4c670e2092e7_prof);

        
        $__internal_3035ce6473d2d543f9e71ec24f149ac82972da4134f27de0d0317796ebb38bb7->leave($__internal_3035ce6473d2d543f9e71ec24f149ac82972da4134f27de0d0317796ebb38bb7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d39a835279c497457e923e9f0427175e5efbf06c3f6ba59df8eef4edb9270b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d39a835279c497457e923e9f0427175e5efbf06c3f6ba59df8eef4edb9270b4->enter($__internal_7d39a835279c497457e923e9f0427175e5efbf06c3f6ba59df8eef4edb9270b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b04b3374f8c24bed60f788abeb0d0cef7454a9eb876501a2b1f6642003eb4a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04b3374f8c24bed60f788abeb0d0cef7454a9eb876501a2b1f6642003eb4a50->enter($__internal_b04b3374f8c24bed60f788abeb0d0cef7454a9eb876501a2b1f6642003eb4a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b04b3374f8c24bed60f788abeb0d0cef7454a9eb876501a2b1f6642003eb4a50->leave($__internal_b04b3374f8c24bed60f788abeb0d0cef7454a9eb876501a2b1f6642003eb4a50_prof);

        
        $__internal_7d39a835279c497457e923e9f0427175e5efbf06c3f6ba59df8eef4edb9270b4->leave($__internal_7d39a835279c497457e923e9f0427175e5efbf06c3f6ba59df8eef4edb9270b4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/github/app/Resources/views/base.html.twig");
    }
}
