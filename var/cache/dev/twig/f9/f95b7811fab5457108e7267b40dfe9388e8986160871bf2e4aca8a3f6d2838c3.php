<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_56769400d79c99ea2a54999002af6fc52cf91b4d35497647df1da9048438988d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56769400d79c99ea2a54999002af6fc52cf91b4d35497647df1da9048438988d->enter($__internal_56769400d79c99ea2a54999002af6fc52cf91b4d35497647df1da9048438988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6f5e0634583266aba7cef2d508b37b7e4d798c6fc6e651fb2271b853402823f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f5e0634583266aba7cef2d508b37b7e4d798c6fc6e651fb2271b853402823f->enter($__internal_d6f5e0634583266aba7cef2d508b37b7e4d798c6fc6e651fb2271b853402823f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56769400d79c99ea2a54999002af6fc52cf91b4d35497647df1da9048438988d->leave($__internal_56769400d79c99ea2a54999002af6fc52cf91b4d35497647df1da9048438988d_prof);

        
        $__internal_d6f5e0634583266aba7cef2d508b37b7e4d798c6fc6e651fb2271b853402823f->leave($__internal_d6f5e0634583266aba7cef2d508b37b7e4d798c6fc6e651fb2271b853402823f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d85602d11bf99f8a5bdb47045f1e749e7e47066a2093c2c199299d24d880993e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85602d11bf99f8a5bdb47045f1e749e7e47066a2093c2c199299d24d880993e->enter($__internal_d85602d11bf99f8a5bdb47045f1e749e7e47066a2093c2c199299d24d880993e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa8371a6200ccecc8a99107e63c6c9ccc13e3a9ceb4102806fc23179ed0d1648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8371a6200ccecc8a99107e63c6c9ccc13e3a9ceb4102806fc23179ed0d1648->enter($__internal_aa8371a6200ccecc8a99107e63c6c9ccc13e3a9ceb4102806fc23179ed0d1648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa8371a6200ccecc8a99107e63c6c9ccc13e3a9ceb4102806fc23179ed0d1648->leave($__internal_aa8371a6200ccecc8a99107e63c6c9ccc13e3a9ceb4102806fc23179ed0d1648_prof);

        
        $__internal_d85602d11bf99f8a5bdb47045f1e749e7e47066a2093c2c199299d24d880993e->leave($__internal_d85602d11bf99f8a5bdb47045f1e749e7e47066a2093c2c199299d24d880993e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db19782431d252f123c9fc5d8ee71335dc904a254424179420c778f61a38f560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db19782431d252f123c9fc5d8ee71335dc904a254424179420c778f61a38f560->enter($__internal_db19782431d252f123c9fc5d8ee71335dc904a254424179420c778f61a38f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61dd08356b2cc467260f488de0f448808803da9a10dda8f06b2039719b7c5568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dd08356b2cc467260f488de0f448808803da9a10dda8f06b2039719b7c5568->enter($__internal_61dd08356b2cc467260f488de0f448808803da9a10dda8f06b2039719b7c5568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_61dd08356b2cc467260f488de0f448808803da9a10dda8f06b2039719b7c5568->leave($__internal_61dd08356b2cc467260f488de0f448808803da9a10dda8f06b2039719b7c5568_prof);

        
        $__internal_db19782431d252f123c9fc5d8ee71335dc904a254424179420c778f61a38f560->leave($__internal_db19782431d252f123c9fc5d8ee71335dc904a254424179420c778f61a38f560_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6897026a29f8abe52da8e46d3554e87efedd161a8b116895a9183a73b63b4f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6897026a29f8abe52da8e46d3554e87efedd161a8b116895a9183a73b63b4f87->enter($__internal_6897026a29f8abe52da8e46d3554e87efedd161a8b116895a9183a73b63b4f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4576117e259c4a1bbe6a22043385f2d474270c1b76a0a3253a6df3eeed2ebf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4576117e259c4a1bbe6a22043385f2d474270c1b76a0a3253a6df3eeed2ebf89->enter($__internal_4576117e259c4a1bbe6a22043385f2d474270c1b76a0a3253a6df3eeed2ebf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4576117e259c4a1bbe6a22043385f2d474270c1b76a0a3253a6df3eeed2ebf89->leave($__internal_4576117e259c4a1bbe6a22043385f2d474270c1b76a0a3253a6df3eeed2ebf89_prof);

        
        $__internal_6897026a29f8abe52da8e46d3554e87efedd161a8b116895a9183a73b63b4f87->leave($__internal_6897026a29f8abe52da8e46d3554e87efedd161a8b116895a9183a73b63b4f87_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
