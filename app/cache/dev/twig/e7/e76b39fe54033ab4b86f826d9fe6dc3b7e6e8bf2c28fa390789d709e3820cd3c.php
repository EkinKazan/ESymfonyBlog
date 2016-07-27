<?php

/* base.html.twig */
class __TwigTemplate_d8003ebcb28a3e4a2fc93c3edaf38d0e01f50e8cb08e1cbe1a30cb5b3b7eddea extends Twig_Template
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
        $__internal_40c2a50e0857443a20afcab437a3a3472ebcebc3511dae3c8b54ab22b407c699 = $this->env->getExtension("native_profiler");
        $__internal_40c2a50e0857443a20afcab437a3a3472ebcebc3511dae3c8b54ab22b407c699->enter($__internal_40c2a50e0857443a20afcab437a3a3472ebcebc3511dae3c8b54ab22b407c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"container\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Ekin'in Blogu</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Anasayfa</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <h1></h1>
    </div>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_40c2a50e0857443a20afcab437a3a3472ebcebc3511dae3c8b54ab22b407c699->leave($__internal_40c2a50e0857443a20afcab437a3a3472ebcebc3511dae3c8b54ab22b407c699_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1418ac138c8f33a2a5ca7cb6853814b047d645dd65d7d7b6c26f443415d41b2a = $this->env->getExtension("native_profiler");
        $__internal_1418ac138c8f33a2a5ca7cb6853814b047d645dd65d7d7b6c26f443415d41b2a->enter($__internal_1418ac138c8f33a2a5ca7cb6853814b047d645dd65d7d7b6c26f443415d41b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ekin'in Bloguna Hoşgeldiniz!";
        
        $__internal_1418ac138c8f33a2a5ca7cb6853814b047d645dd65d7d7b6c26f443415d41b2a->leave($__internal_1418ac138c8f33a2a5ca7cb6853814b047d645dd65d7d7b6c26f443415d41b2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9c52567a7245331c5af7b11c9ee74969bad56506298e6b3b603f0a6068dcecb = $this->env->getExtension("native_profiler");
        $__internal_a9c52567a7245331c5af7b11c9ee74969bad56506298e6b3b603f0a6068dcecb->enter($__internal_a9c52567a7245331c5af7b11c9ee74969bad56506298e6b3b603f0a6068dcecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a9c52567a7245331c5af7b11c9ee74969bad56506298e6b3b603f0a6068dcecb->leave($__internal_a9c52567a7245331c5af7b11c9ee74969bad56506298e6b3b603f0a6068dcecb_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dfc909f9893ba266d4761673bb43d91e4c78fb6467fa1b629b3aaa22feb9e13 = $this->env->getExtension("native_profiler");
        $__internal_9dfc909f9893ba266d4761673bb43d91e4c78fb6467fa1b629b3aaa22feb9e13->enter($__internal_9dfc909f9893ba266d4761673bb43d91e4c78fb6467fa1b629b3aaa22feb9e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9dfc909f9893ba266d4761673bb43d91e4c78fb6467fa1b629b3aaa22feb9e13->leave($__internal_9dfc909f9893ba266d4761673bb43d91e4c78fb6467fa1b629b3aaa22feb9e13_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23ea3c385afe30b411f3fad408f9c3b3581a6adb1ba421f3f32fae8e1f350843 = $this->env->getExtension("native_profiler");
        $__internal_23ea3c385afe30b411f3fad408f9c3b3581a6adb1ba421f3f32fae8e1f350843->enter($__internal_23ea3c385afe30b411f3fad408f9c3b3581a6adb1ba421f3f32fae8e1f350843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_23ea3c385afe30b411f3fad408f9c3b3581a6adb1ba421f3f32fae8e1f350843->leave($__internal_23ea3c385afe30b411f3fad408f9c3b3581a6adb1ba421f3f32fae8e1f350843_prof);

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
        return array (  122 => 33,  111 => 32,  100 => 6,  88 => 5,  79 => 34,  76 => 33,  74 => 32,  64 => 25,  57 => 21,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Ekin'in Bloguna Hoşgeldiniz!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('homepage') }}">Ekin'in Blogu</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="collapse navbar-collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="{{ path('homepage') }}">Anasayfa</a></li>*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </nav>*/
/*         <h1></h1>*/
/*     </div>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
