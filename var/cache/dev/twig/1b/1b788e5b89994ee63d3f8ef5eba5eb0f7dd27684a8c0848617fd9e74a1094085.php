<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bf39df6f12fe1ec50489b51b5e88c154e4fce8ba7e05b546d544a4525d9c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bf39df6f12fe1ec50489b51b5e88c154e4fce8ba7e05b546d544a4525d9c2e->enter($__internal_d8bf39df6f12fe1ec50489b51b5e88c154e4fce8ba7e05b546d544a4525d9c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_638c8ca5905e250d159fb507cf544e6d7b69c0c1e47db2cf405020ecfa70d23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638c8ca5905e250d159fb507cf544e6d7b69c0c1e47db2cf405020ecfa70d23f->enter($__internal_638c8ca5905e250d159fb507cf544e6d7b69c0c1e47db2cf405020ecfa70d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bf39df6f12fe1ec50489b51b5e88c154e4fce8ba7e05b546d544a4525d9c2e->leave($__internal_d8bf39df6f12fe1ec50489b51b5e88c154e4fce8ba7e05b546d544a4525d9c2e_prof);

        
        $__internal_638c8ca5905e250d159fb507cf544e6d7b69c0c1e47db2cf405020ecfa70d23f->leave($__internal_638c8ca5905e250d159fb507cf544e6d7b69c0c1e47db2cf405020ecfa70d23f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5785c3a2ec799dbfad53842a28fee4bc0a67d0ce524ad99d153a959e696a801c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5785c3a2ec799dbfad53842a28fee4bc0a67d0ce524ad99d153a959e696a801c->enter($__internal_5785c3a2ec799dbfad53842a28fee4bc0a67d0ce524ad99d153a959e696a801c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2577e6585e90fcf15e3c623ee383c196e7a37822d4fb25f730ceadcd4638c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2577e6585e90fcf15e3c623ee383c196e7a37822d4fb25f730ceadcd4638c97->enter($__internal_a2577e6585e90fcf15e3c623ee383c196e7a37822d4fb25f730ceadcd4638c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2577e6585e90fcf15e3c623ee383c196e7a37822d4fb25f730ceadcd4638c97->leave($__internal_a2577e6585e90fcf15e3c623ee383c196e7a37822d4fb25f730ceadcd4638c97_prof);

        
        $__internal_5785c3a2ec799dbfad53842a28fee4bc0a67d0ce524ad99d153a959e696a801c->leave($__internal_5785c3a2ec799dbfad53842a28fee4bc0a67d0ce524ad99d153a959e696a801c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f0e0914247a153b7a8dec49a1807745df0c266be2eb3687d6766aa0c613e5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0e0914247a153b7a8dec49a1807745df0c266be2eb3687d6766aa0c613e5a7->enter($__internal_6f0e0914247a153b7a8dec49a1807745df0c266be2eb3687d6766aa0c613e5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4acd637643829457393a9ecdefb352791e96678262c24968e8c32a1e5ae934e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acd637643829457393a9ecdefb352791e96678262c24968e8c32a1e5ae934e1->enter($__internal_4acd637643829457393a9ecdefb352791e96678262c24968e8c32a1e5ae934e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4acd637643829457393a9ecdefb352791e96678262c24968e8c32a1e5ae934e1->leave($__internal_4acd637643829457393a9ecdefb352791e96678262c24968e8c32a1e5ae934e1_prof);

        
        $__internal_6f0e0914247a153b7a8dec49a1807745df0c266be2eb3687d6766aa0c613e5a7->leave($__internal_6f0e0914247a153b7a8dec49a1807745df0c266be2eb3687d6766aa0c613e5a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aec725ffb41370c1c4fb2306e9461c077854ea28dd830e6c648afbe3cf34ebae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec725ffb41370c1c4fb2306e9461c077854ea28dd830e6c648afbe3cf34ebae->enter($__internal_aec725ffb41370c1c4fb2306e9461c077854ea28dd830e6c648afbe3cf34ebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2660dad272a217c68531af6c0fa10d38601939e82d827ab5bf2c4747d5259af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2660dad272a217c68531af6c0fa10d38601939e82d827ab5bf2c4747d5259af4->enter($__internal_2660dad272a217c68531af6c0fa10d38601939e82d827ab5bf2c4747d5259af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2660dad272a217c68531af6c0fa10d38601939e82d827ab5bf2c4747d5259af4->leave($__internal_2660dad272a217c68531af6c0fa10d38601939e82d827ab5bf2c4747d5259af4_prof);

        
        $__internal_aec725ffb41370c1c4fb2306e9461c077854ea28dd830e6c648afbe3cf34ebae->leave($__internal_aec725ffb41370c1c4fb2306e9461c077854ea28dd830e6c648afbe3cf34ebae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
