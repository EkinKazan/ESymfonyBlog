<?php

/* liste/listele.html.twig */
class __TwigTemplate_6640fb54cc0de88757702aabd2a3dab91fb5f71657efd79235871d9d3e5cfc5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "liste/listele.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <br><br><br>
    <div class=\"container\">

        <div class=\"blog-header\">
            <h1 class=\"blog-title\">Ekin'in Blog</h1>
            <p class=\"lead blog-description\">Blogdaki tüm yazıların olduğu sayfadır.</p>
        </div>

        <div class=\"row\">

            <div class=\"col-sm-8 blog-main\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["yazilar"]) ? $context["yazilar"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 16
            echo "                <div class=\"blog-post\">
                    <h2 class=\"blog-post-title\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "baslik", array()), "html", null, true);
            echo "</h2>
                    <p class=\"blog-post-meta\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "ozet", array()), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yazi", array("slug" => $this->getAttribute($context["y"], "id", array()))), "html", null, true);
            echo "\">devamı için tıklayınız</a></p>
                </div><!-- /.blog-post -->

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "liste/listele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <br><br><br>*/
/*     <div class="container">*/
/* */
/*         <div class="blog-header">*/
/*             <h1 class="blog-title">Ekin'in Blog</h1>*/
/*             <p class="lead blog-description">Blogdaki tüm yazıların olduğu sayfadır.</p>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-sm-8 blog-main">*/
/*                 {% for y in yazilar %}*/
/*                 <div class="blog-post">*/
/*                     <h2 class="blog-post-title">{{ y.baslik }}</h2>*/
/*                     <p class="blog-post-meta">{{ y.ozet }}<a href="{{ path('yazi',{'slug':y.id}) }}">devamı için tıklayınız</a></p>*/
/*                 </div><!-- /.blog-post -->*/
/* */
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
