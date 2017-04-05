<?php

/* GOLRepositoriesBundle:Default:index.html.twig */
class __TwigTemplate_13bb897afa86463bd57af9e2650b31e748fc46aad7c86889fb9f096b0031fc32 extends Twig_Template
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
        $__internal_59e4ebc8a9617fa5414dc6460cd77cd8849b3818a887301fed13e54a67a7a690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e4ebc8a9617fa5414dc6460cd77cd8849b3818a887301fed13e54a67a7a690->enter($__internal_59e4ebc8a9617fa5414dc6460cd77cd8849b3818a887301fed13e54a67a7a690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLRepositoriesBundle:Default:index.html.twig"));

        $__internal_5436e4cfeea89e1756bbca2454278f88c8c4cf7d83a94479d0d6279dd03f42e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5436e4cfeea89e1756bbca2454278f88c8c4cf7d83a94479d0d6279dd03f42e1->enter($__internal_5436e4cfeea89e1756bbca2454278f88c8c4cf7d83a94479d0d6279dd03f42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLRepositoriesBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title>Prueba | Gilberto Orozco</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />

    </head>
    <body id=\"home\">
        <div class=\"container\">
            <div class=\"jumbotron\">
                <h1>Gilberto Orozco Linero</h1>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Most Populars</div>
                <div class=\"panel-body\">
                    <p>Repositories list most stared</p>
                </div>

                <!-- Table -->
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Repository</th>
                        <th>Author</th>
                        <th>Started date</th>
                        <th>Ranking</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Repository</td>
                        <td>Author</td>
                        <td>Started date</td>
                        <td>Ranking</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Javascript -->
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_59e4ebc8a9617fa5414dc6460cd77cd8849b3818a887301fed13e54a67a7a690->leave($__internal_59e4ebc8a9617fa5414dc6460cd77cd8849b3818a887301fed13e54a67a7a690_prof);

        
        $__internal_5436e4cfeea89e1756bbca2454278f88c8c4cf7d83a94479d0d6279dd03f42e1->leave($__internal_5436e4cfeea89e1756bbca2454278f88c8c4cf7d83a94479d0d6279dd03f42e1_prof);

    }

    public function getTemplateName()
    {
        return "GOLRepositoriesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 46,  74 => 45,  32 => 6,  25 => 1,);
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
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title>Prueba | Gilberto Orozco</title>
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" />

    </head>
    <body id=\"home\">
        <div class=\"container\">
            <div class=\"jumbotron\">
                <h1>Gilberto Orozco Linero</h1>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Most Populars</div>
                <div class=\"panel-body\">
                    <p>Repositories list most stared</p>
                </div>

                <!-- Table -->
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Repository</th>
                        <th>Author</th>
                        <th>Started date</th>
                        <th>Ranking</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Repository</td>
                        <td>Author</td>
                        <td>Started date</td>
                        <td>Ranking</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Javascript -->
        <script src=\"{{ asset('bootstrap/js/jquery-3.2.0.min.js') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    </body>
</html>
", "GOLRepositoriesBundle:Default:index.html.twig", "/var/www/github/src/GOL/RepositoriesBundle/Resources/views/Default/index.html.twig");
    }
}
