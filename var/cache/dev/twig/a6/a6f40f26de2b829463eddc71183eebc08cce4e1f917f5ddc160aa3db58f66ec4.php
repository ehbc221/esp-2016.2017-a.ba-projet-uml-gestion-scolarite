<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2b4e2aa8fd2929d19835c371c171bb618116a44c228a3c67fe0b7d57fb38dd37 extends Twig_Template
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
        $__internal_4e51f4ac7bfaacd5ca44c257ad6f12f4e0d9792949bff8aba3262d904db3847b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e51f4ac7bfaacd5ca44c257ad6f12f4e0d9792949bff8aba3262d904db3847b->enter($__internal_4e51f4ac7bfaacd5ca44c257ad6f12f4e0d9792949bff8aba3262d904db3847b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ba1952926f7307286af1a77bfdeae0f2ddec31224d873525650c62dfbca9d95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1952926f7307286af1a77bfdeae0f2ddec31224d873525650c62dfbca9d95d->enter($__internal_ba1952926f7307286af1a77bfdeae0f2ddec31224d873525650c62dfbca9d95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e51f4ac7bfaacd5ca44c257ad6f12f4e0d9792949bff8aba3262d904db3847b->leave($__internal_4e51f4ac7bfaacd5ca44c257ad6f12f4e0d9792949bff8aba3262d904db3847b_prof);

        
        $__internal_ba1952926f7307286af1a77bfdeae0f2ddec31224d873525650c62dfbca9d95d->leave($__internal_ba1952926f7307286af1a77bfdeae0f2ddec31224d873525650c62dfbca9d95d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed29cc0fc793e1243c33c7a6b308415722dcef4f8bdbdb1d0c471b2232b01cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed29cc0fc793e1243c33c7a6b308415722dcef4f8bdbdb1d0c471b2232b01cff->enter($__internal_ed29cc0fc793e1243c33c7a6b308415722dcef4f8bdbdb1d0c471b2232b01cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a6208f4f83bbcce4a4066a01a84cad5efdded69386313ed86b4d0947e7f2c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6208f4f83bbcce4a4066a01a84cad5efdded69386313ed86b4d0947e7f2c35->enter($__internal_9a6208f4f83bbcce4a4066a01a84cad5efdded69386313ed86b4d0947e7f2c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9a6208f4f83bbcce4a4066a01a84cad5efdded69386313ed86b4d0947e7f2c35->leave($__internal_9a6208f4f83bbcce4a4066a01a84cad5efdded69386313ed86b4d0947e7f2c35_prof);

        
        $__internal_ed29cc0fc793e1243c33c7a6b308415722dcef4f8bdbdb1d0c471b2232b01cff->leave($__internal_ed29cc0fc793e1243c33c7a6b308415722dcef4f8bdbdb1d0c471b2232b01cff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51d6c0948e5172e8d7267a98c4450dd3f997a8fa96358ab1dfd8339094fc86eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d6c0948e5172e8d7267a98c4450dd3f997a8fa96358ab1dfd8339094fc86eb->enter($__internal_51d6c0948e5172e8d7267a98c4450dd3f997a8fa96358ab1dfd8339094fc86eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24b69b8bad156cdf55312ce77bfedb5fb0c130c242af4c03c9cdabb69d72f83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b69b8bad156cdf55312ce77bfedb5fb0c130c242af4c03c9cdabb69d72f83e->enter($__internal_24b69b8bad156cdf55312ce77bfedb5fb0c130c242af4c03c9cdabb69d72f83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_24b69b8bad156cdf55312ce77bfedb5fb0c130c242af4c03c9cdabb69d72f83e->leave($__internal_24b69b8bad156cdf55312ce77bfedb5fb0c130c242af4c03c9cdabb69d72f83e_prof);

        
        $__internal_51d6c0948e5172e8d7267a98c4450dd3f997a8fa96358ab1dfd8339094fc86eb->leave($__internal_51d6c0948e5172e8d7267a98c4450dd3f997a8fa96358ab1dfd8339094fc86eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d26e1fcc0ffe61a9fb4b3b9fc2ae27355c906d2da314bcf495575868d0418c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d26e1fcc0ffe61a9fb4b3b9fc2ae27355c906d2da314bcf495575868d0418c3->enter($__internal_5d26e1fcc0ffe61a9fb4b3b9fc2ae27355c906d2da314bcf495575868d0418c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_441fab0e7679eb0275b0935a56c0cbb468375e581683b90dccba4eece6f67ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441fab0e7679eb0275b0935a56c0cbb468375e581683b90dccba4eece6f67ef0->enter($__internal_441fab0e7679eb0275b0935a56c0cbb468375e581683b90dccba4eece6f67ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_441fab0e7679eb0275b0935a56c0cbb468375e581683b90dccba4eece6f67ef0->leave($__internal_441fab0e7679eb0275b0935a56c0cbb468375e581683b90dccba4eece6f67ef0_prof);

        
        $__internal_5d26e1fcc0ffe61a9fb4b3b9fc2ae27355c906d2da314bcf495575868d0418c3->leave($__internal_5d26e1fcc0ffe61a9fb4b3b9fc2ae27355c906d2da314bcf495575868d0418c3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/projet-uml/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
