<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3c12bdaafe8dfb15fc2f5d1762951cf021baee255b752cd8440b387dcdf38829 extends Twig_Template
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
        $__internal_f413f8013e557ccb4b97ade20f249cbf2afa2f0d8a86b294c1d56aa0bc65108c = $this->env->getExtension("native_profiler");
        $__internal_f413f8013e557ccb4b97ade20f249cbf2afa2f0d8a86b294c1d56aa0bc65108c->enter($__internal_f413f8013e557ccb4b97ade20f249cbf2afa2f0d8a86b294c1d56aa0bc65108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f413f8013e557ccb4b97ade20f249cbf2afa2f0d8a86b294c1d56aa0bc65108c->leave($__internal_f413f8013e557ccb4b97ade20f249cbf2afa2f0d8a86b294c1d56aa0bc65108c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
