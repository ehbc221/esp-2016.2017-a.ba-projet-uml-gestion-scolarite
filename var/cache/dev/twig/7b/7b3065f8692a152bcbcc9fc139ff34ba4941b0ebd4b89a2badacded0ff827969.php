<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_865344a43c348fc7d5a0f8edb1518c9675931144e4f506071a1663da1bc4ae14 extends Twig_Template
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
        $__internal_9c52a4fdd9d8ed58a1bbda97126376f29f97cae516c050ad38f26eb1193775b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c52a4fdd9d8ed58a1bbda97126376f29f97cae516c050ad38f26eb1193775b7->enter($__internal_9c52a4fdd9d8ed58a1bbda97126376f29f97cae516c050ad38f26eb1193775b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_322ae560c5b9766a0a1130c185ce4639736961fb19969a90d07e32f945a45d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322ae560c5b9766a0a1130c185ce4639736961fb19969a90d07e32f945a45d15->enter($__internal_322ae560c5b9766a0a1130c185ce4639736961fb19969a90d07e32f945a45d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c52a4fdd9d8ed58a1bbda97126376f29f97cae516c050ad38f26eb1193775b7->leave($__internal_9c52a4fdd9d8ed58a1bbda97126376f29f97cae516c050ad38f26eb1193775b7_prof);

        
        $__internal_322ae560c5b9766a0a1130c185ce4639736961fb19969a90d07e32f945a45d15->leave($__internal_322ae560c5b9766a0a1130c185ce4639736961fb19969a90d07e32f945a45d15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6972e322e185615fe2b01b4b34b729197cb4f1ffda73cf723f1ff771b805ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6972e322e185615fe2b01b4b34b729197cb4f1ffda73cf723f1ff771b805ffe->enter($__internal_d6972e322e185615fe2b01b4b34b729197cb4f1ffda73cf723f1ff771b805ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd6928213ecfe5a2d5cb3029d464f384438475b3f31bcc4c24523462e2e76aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6928213ecfe5a2d5cb3029d464f384438475b3f31bcc4c24523462e2e76aaa->enter($__internal_cd6928213ecfe5a2d5cb3029d464f384438475b3f31bcc4c24523462e2e76aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd6928213ecfe5a2d5cb3029d464f384438475b3f31bcc4c24523462e2e76aaa->leave($__internal_cd6928213ecfe5a2d5cb3029d464f384438475b3f31bcc4c24523462e2e76aaa_prof);

        
        $__internal_d6972e322e185615fe2b01b4b34b729197cb4f1ffda73cf723f1ff771b805ffe->leave($__internal_d6972e322e185615fe2b01b4b34b729197cb4f1ffda73cf723f1ff771b805ffe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b84ec497ed5e856f354aa39733533cc4b83b6a8248bf6a353a6a934cc6af5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b84ec497ed5e856f354aa39733533cc4b83b6a8248bf6a353a6a934cc6af5ab->enter($__internal_9b84ec497ed5e856f354aa39733533cc4b83b6a8248bf6a353a6a934cc6af5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_966f0e3f52d45e00edb126b1c0cbed0285eec7e66bc9de93fa5ccf23bd07bc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966f0e3f52d45e00edb126b1c0cbed0285eec7e66bc9de93fa5ccf23bd07bc69->enter($__internal_966f0e3f52d45e00edb126b1c0cbed0285eec7e66bc9de93fa5ccf23bd07bc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_966f0e3f52d45e00edb126b1c0cbed0285eec7e66bc9de93fa5ccf23bd07bc69->leave($__internal_966f0e3f52d45e00edb126b1c0cbed0285eec7e66bc9de93fa5ccf23bd07bc69_prof);

        
        $__internal_9b84ec497ed5e856f354aa39733533cc4b83b6a8248bf6a353a6a934cc6af5ab->leave($__internal_9b84ec497ed5e856f354aa39733533cc4b83b6a8248bf6a353a6a934cc6af5ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a9e4f572261e5b219bda2211e843179dc33e57670bd1f9d4c0e1271a904ba70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9e4f572261e5b219bda2211e843179dc33e57670bd1f9d4c0e1271a904ba70->enter($__internal_8a9e4f572261e5b219bda2211e843179dc33e57670bd1f9d4c0e1271a904ba70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_931027eb7a9ad73cfe8616f4d61962a2cf19e57f003338b73942d09a71a5e10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931027eb7a9ad73cfe8616f4d61962a2cf19e57f003338b73942d09a71a5e10e->enter($__internal_931027eb7a9ad73cfe8616f4d61962a2cf19e57f003338b73942d09a71a5e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_931027eb7a9ad73cfe8616f4d61962a2cf19e57f003338b73942d09a71a5e10e->leave($__internal_931027eb7a9ad73cfe8616f4d61962a2cf19e57f003338b73942d09a71a5e10e_prof);

        
        $__internal_8a9e4f572261e5b219bda2211e843179dc33e57670bd1f9d4c0e1271a904ba70->leave($__internal_8a9e4f572261e5b219bda2211e843179dc33e57670bd1f9d4c0e1271a904ba70_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projet-uml/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
