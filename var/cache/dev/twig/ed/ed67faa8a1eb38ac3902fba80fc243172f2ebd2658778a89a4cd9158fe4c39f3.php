<?php

/* GOLRepositoriesBundle:Default:more-ranked.html.twig */
class __TwigTemplate_8c2c79581f0f2089cfc498a0a092d9ee5bdcc536bdf719e4d81981aeceafd24e extends Twig_Template
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
        $__internal_703428dfa4c8e4f16286c154e2952b7d197ce4a5f758de549fc152f50253629e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703428dfa4c8e4f16286c154e2952b7d197ce4a5f758de549fc152f50253629e->enter($__internal_703428dfa4c8e4f16286c154e2952b7d197ce4a5f758de549fc152f50253629e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLRepositoriesBundle:Default:more-ranked.html.twig"));

        $__internal_98920c77a661719cb3af0dc610cff6619a38c6b10d7137c4516c1afc11d82751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98920c77a661719cb3af0dc610cff6619a38c6b10d7137c4516c1afc11d82751->enter($__internal_98920c77a661719cb3af0dc610cff6619a38c6b10d7137c4516c1afc11d82751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLRepositoriesBundle:Default:more-ranked.html.twig"));

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
            
            <!-- INICIO HEADER -->
            <div class=\"jumbotron\">
                <h1>Gilberto Orozco Linero</h1>
            </div>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"\"><a href=\"/app_dev.php/more-collaborators\">More Collaborators</a></li>
                            <li class=\"\"><a href=\"/app_dev.php/more-ranked\">More Ranked</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- FIN HEADER -->

            <!-- INICIO CONTENT -->
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h2>Most Populars</h2></div>
                <div class=\"panel-body\">
                    <p>Repositories list with most stared</p>
                </div>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Repository</th>
                            <th>Author</th>
                            <th>URL</th>
                            <th>Description</th>
                            <th>Stars</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mostPopulars"] ?? $this->getContext($context, "mostPopulars")));
        foreach ($context['_seq'] as $context["_key"] => $context["mostPopular"]) {
            // line 58
            echo "                        <tr>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostPopular"], "repository", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostPopular"], "author", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostPopular"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostPopular"], "url", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostPopular"], "description", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostPopular"], "stars", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostPopular'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <!-- FIN CONTENT -->

        <!-- Javascript -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_703428dfa4c8e4f16286c154e2952b7d197ce4a5f758de549fc152f50253629e->leave($__internal_703428dfa4c8e4f16286c154e2952b7d197ce4a5f758de549fc152f50253629e_prof);

        
        $__internal_98920c77a661719cb3af0dc610cff6619a38c6b10d7137c4516c1afc11d82751->leave($__internal_98920c77a661719cb3af0dc610cff6619a38c6b10d7137c4516c1afc11d82751_prof);

    }

    public function getTemplateName()
    {
        return "GOLRepositoriesBundle:Default:more-ranked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 74,  129 => 73,  120 => 66,  111 => 63,  107 => 62,  101 => 61,  97 => 60,  93 => 59,  90 => 58,  86 => 57,  32 => 6,  25 => 1,);
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
            
            <!-- INICIO HEADER -->
            <div class=\"jumbotron\">
                <h1>Gilberto Orozco Linero</h1>
            </div>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"\"><a href=\"/app_dev.php/more-collaborators\">More Collaborators</a></li>
                            <li class=\"\"><a href=\"/app_dev.php/more-ranked\">More Ranked</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- FIN HEADER -->

            <!-- INICIO CONTENT -->
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h2>Most Populars</h2></div>
                <div class=\"panel-body\">
                    <p>Repositories list with most stared</p>
                </div>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Repository</th>
                            <th>Author</th>
                            <th>URL</th>
                            <th>Description</th>
                            <th>Stars</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for mostPopular in mostPopulars %}
                        <tr>
                            <td>{{ mostPopular.repository }}</td>
                            <td>{{ mostPopular.author }}</td>
                            <td><a href=\"{{ mostPopular.url }}\" target=\"_blank\">{{ mostPopular.url }}</a></td>
                            <td>{{ mostPopular.description }}</td>
                            <td>{{ mostPopular.stars }}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- FIN CONTENT -->

        <!-- Javascript -->
        <script src=\"{{ asset('bootstrap/js/jquery-3.2.0.min.js') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    </body>
</html>
", "GOLRepositoriesBundle:Default:more-ranked.html.twig", "/var/www/github/src/GOL/RepositoriesBundle/Resources/views/Default/more-ranked.html.twig");
    }
}
