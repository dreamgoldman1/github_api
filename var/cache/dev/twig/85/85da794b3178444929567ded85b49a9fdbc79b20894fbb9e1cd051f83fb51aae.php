<?php

/* GOLApiBundle:Default:index.html.twig */
class __TwigTemplate_4550aaf164532fbcc478d6af2719741382550bc186cea7a25516b3c80283d98f extends Twig_Template
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
        $__internal_5cef8d49a97d0c46412d0a886700fc7818bc34138684ea00cd5f9cbb65a0d338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cef8d49a97d0c46412d0a886700fc7818bc34138684ea00cd5f9cbb65a0d338->enter($__internal_5cef8d49a97d0c46412d0a886700fc7818bc34138684ea00cd5f9cbb65a0d338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLApiBundle:Default:index.html.twig"));

        $__internal_029f26c9b66b2b5130c44345fe1729add3e17619929363ac7db58293ab676583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029f26c9b66b2b5130c44345fe1729add3e17619929363ac7db58293ab676583->enter($__internal_029f26c9b66b2b5130c44345fe1729add3e17619929363ac7db58293ab676583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLApiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5cef8d49a97d0c46412d0a886700fc7818bc34138684ea00cd5f9cbb65a0d338->leave($__internal_5cef8d49a97d0c46412d0a886700fc7818bc34138684ea00cd5f9cbb65a0d338_prof);

        
        $__internal_029f26c9b66b2b5130c44345fe1729add3e17619929363ac7db58293ab676583->leave($__internal_029f26c9b66b2b5130c44345fe1729add3e17619929363ac7db58293ab676583_prof);

    }

    public function getTemplateName()
    {
        return "GOLApiBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "GOLApiBundle:Default:index.html.twig", "/var/www/github/src/GOL/ApiBundle/Resources/views/Default/index.html.twig");
    }
}
