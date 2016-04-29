<?php

/* base.html.twig */
class __TwigTemplate_6c55edd318f98757d6e48e05eedaf9ca99d953a82ceb6f8a454c063fc1d6ffa7 extends Twig_Template
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
        $__internal_66b3e7c1c6990af4e5343ae29dfb585d1781650df154700f8e77c2ff797c6da2 = $this->env->getExtension("native_profiler");
        $__internal_66b3e7c1c6990af4e5343ae29dfb585d1781650df154700f8e77c2ff797c6da2->enter($__internal_66b3e7c1c6990af4e5343ae29dfb585d1781650df154700f8e77c2ff797c6da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_66b3e7c1c6990af4e5343ae29dfb585d1781650df154700f8e77c2ff797c6da2->leave($__internal_66b3e7c1c6990af4e5343ae29dfb585d1781650df154700f8e77c2ff797c6da2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e7cd0cc78b93e2e170bdea4efdb2709d50a763c04647675174365c7cc9ed0b5 = $this->env->getExtension("native_profiler");
        $__internal_9e7cd0cc78b93e2e170bdea4efdb2709d50a763c04647675174365c7cc9ed0b5->enter($__internal_9e7cd0cc78b93e2e170bdea4efdb2709d50a763c04647675174365c7cc9ed0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e7cd0cc78b93e2e170bdea4efdb2709d50a763c04647675174365c7cc9ed0b5->leave($__internal_9e7cd0cc78b93e2e170bdea4efdb2709d50a763c04647675174365c7cc9ed0b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7960e1feee70b57825dbdcef0fe6d5cbf43e544e0899cccc7267def5a76a3d5e = $this->env->getExtension("native_profiler");
        $__internal_7960e1feee70b57825dbdcef0fe6d5cbf43e544e0899cccc7267def5a76a3d5e->enter($__internal_7960e1feee70b57825dbdcef0fe6d5cbf43e544e0899cccc7267def5a76a3d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7960e1feee70b57825dbdcef0fe6d5cbf43e544e0899cccc7267def5a76a3d5e->leave($__internal_7960e1feee70b57825dbdcef0fe6d5cbf43e544e0899cccc7267def5a76a3d5e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d53ed9f0f4075e967fbee10b507199374cb17d445cd9db5636496dd6d419d975 = $this->env->getExtension("native_profiler");
        $__internal_d53ed9f0f4075e967fbee10b507199374cb17d445cd9db5636496dd6d419d975->enter($__internal_d53ed9f0f4075e967fbee10b507199374cb17d445cd9db5636496dd6d419d975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d53ed9f0f4075e967fbee10b507199374cb17d445cd9db5636496dd6d419d975->leave($__internal_d53ed9f0f4075e967fbee10b507199374cb17d445cd9db5636496dd6d419d975_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca5207a0b83f82adda8d1beb9bc18d95c5619da03ca036993b9d36b2ab97a593 = $this->env->getExtension("native_profiler");
        $__internal_ca5207a0b83f82adda8d1beb9bc18d95c5619da03ca036993b9d36b2ab97a593->enter($__internal_ca5207a0b83f82adda8d1beb9bc18d95c5619da03ca036993b9d36b2ab97a593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca5207a0b83f82adda8d1beb9bc18d95c5619da03ca036993b9d36b2ab97a593->leave($__internal_ca5207a0b83f82adda8d1beb9bc18d95c5619da03ca036993b9d36b2ab97a593_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
