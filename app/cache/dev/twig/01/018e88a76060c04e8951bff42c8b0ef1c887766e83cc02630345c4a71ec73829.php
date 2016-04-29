<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb0f24cc7bb1559ec63b15c24245ffc3f5c7d604ec34a7e6af6313e8076e049a extends Twig_Template
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
        $__internal_fd3a3df201eb7d096ac6d24b41dea5d40ad3142348e7e715249c73d087e6573d = $this->env->getExtension("native_profiler");
        $__internal_fd3a3df201eb7d096ac6d24b41dea5d40ad3142348e7e715249c73d087e6573d->enter($__internal_fd3a3df201eb7d096ac6d24b41dea5d40ad3142348e7e715249c73d087e6573d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3a3df201eb7d096ac6d24b41dea5d40ad3142348e7e715249c73d087e6573d->leave($__internal_fd3a3df201eb7d096ac6d24b41dea5d40ad3142348e7e715249c73d087e6573d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c47592d132bfb9b7c921850ea73fa4d4e23e9a8d25718c22cccecc6c3e5b24b6 = $this->env->getExtension("native_profiler");
        $__internal_c47592d132bfb9b7c921850ea73fa4d4e23e9a8d25718c22cccecc6c3e5b24b6->enter($__internal_c47592d132bfb9b7c921850ea73fa4d4e23e9a8d25718c22cccecc6c3e5b24b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c47592d132bfb9b7c921850ea73fa4d4e23e9a8d25718c22cccecc6c3e5b24b6->leave($__internal_c47592d132bfb9b7c921850ea73fa4d4e23e9a8d25718c22cccecc6c3e5b24b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8146cbb46d6b723a7bcd659890b59822924325bfe9e30739be2eac2ebe8cf73 = $this->env->getExtension("native_profiler");
        $__internal_b8146cbb46d6b723a7bcd659890b59822924325bfe9e30739be2eac2ebe8cf73->enter($__internal_b8146cbb46d6b723a7bcd659890b59822924325bfe9e30739be2eac2ebe8cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8146cbb46d6b723a7bcd659890b59822924325bfe9e30739be2eac2ebe8cf73->leave($__internal_b8146cbb46d6b723a7bcd659890b59822924325bfe9e30739be2eac2ebe8cf73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01389c5bf0e15453d74f63e28fcbda7062791b520545cb779b4a8a8afe53a040 = $this->env->getExtension("native_profiler");
        $__internal_01389c5bf0e15453d74f63e28fcbda7062791b520545cb779b4a8a8afe53a040->enter($__internal_01389c5bf0e15453d74f63e28fcbda7062791b520545cb779b4a8a8afe53a040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01389c5bf0e15453d74f63e28fcbda7062791b520545cb779b4a8a8afe53a040->leave($__internal_01389c5bf0e15453d74f63e28fcbda7062791b520545cb779b4a8a8afe53a040_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
