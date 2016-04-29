<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45c99509f2c90f2491fd1b1122741f0e2a136dd1a18a8d8ff73e120f2c825b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea2c0e9f0f88d3f2c2f6db23a5f6ebc006f07811450dcf472615f63d729371ad = $this->env->getExtension("native_profiler");
        $__internal_ea2c0e9f0f88d3f2c2f6db23a5f6ebc006f07811450dcf472615f63d729371ad->enter($__internal_ea2c0e9f0f88d3f2c2f6db23a5f6ebc006f07811450dcf472615f63d729371ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2c0e9f0f88d3f2c2f6db23a5f6ebc006f07811450dcf472615f63d729371ad->leave($__internal_ea2c0e9f0f88d3f2c2f6db23a5f6ebc006f07811450dcf472615f63d729371ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cca1c5607606fe4b0c0ced1717ba9a3f23a67af2b842013bbc4e330c8a25328d = $this->env->getExtension("native_profiler");
        $__internal_cca1c5607606fe4b0c0ced1717ba9a3f23a67af2b842013bbc4e330c8a25328d->enter($__internal_cca1c5607606fe4b0c0ced1717ba9a3f23a67af2b842013bbc4e330c8a25328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cca1c5607606fe4b0c0ced1717ba9a3f23a67af2b842013bbc4e330c8a25328d->leave($__internal_cca1c5607606fe4b0c0ced1717ba9a3f23a67af2b842013bbc4e330c8a25328d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd8b7024f73d2fa3eefa83964382a3e90b0d8ab6095701b90208707003878ca1 = $this->env->getExtension("native_profiler");
        $__internal_fd8b7024f73d2fa3eefa83964382a3e90b0d8ab6095701b90208707003878ca1->enter($__internal_fd8b7024f73d2fa3eefa83964382a3e90b0d8ab6095701b90208707003878ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd8b7024f73d2fa3eefa83964382a3e90b0d8ab6095701b90208707003878ca1->leave($__internal_fd8b7024f73d2fa3eefa83964382a3e90b0d8ab6095701b90208707003878ca1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_380be2aced4445579af49ec707d4a1069e4c6fc1a19e8f6a1ee537830cd974b8 = $this->env->getExtension("native_profiler");
        $__internal_380be2aced4445579af49ec707d4a1069e4c6fc1a19e8f6a1ee537830cd974b8->enter($__internal_380be2aced4445579af49ec707d4a1069e4c6fc1a19e8f6a1ee537830cd974b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_380be2aced4445579af49ec707d4a1069e4c6fc1a19e8f6a1ee537830cd974b8->leave($__internal_380be2aced4445579af49ec707d4a1069e4c6fc1a19e8f6a1ee537830cd974b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
