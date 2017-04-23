<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b4541fd5af34231f7f931f566107e15538964e71023dae63647122f021bd12f5 extends Twig_Template
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
        $__internal_f4f3c9009cf39b3ece1ec8fb9bc8b3360fd04d829d50acf4852a04a90baf8639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f3c9009cf39b3ece1ec8fb9bc8b3360fd04d829d50acf4852a04a90baf8639->enter($__internal_f4f3c9009cf39b3ece1ec8fb9bc8b3360fd04d829d50acf4852a04a90baf8639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4b2e2bac5533f552ea588e9ca47ee3ec2060fc2cbc74d40f551a7dfe3e00de56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2e2bac5533f552ea588e9ca47ee3ec2060fc2cbc74d40f551a7dfe3e00de56->enter($__internal_4b2e2bac5533f552ea588e9ca47ee3ec2060fc2cbc74d40f551a7dfe3e00de56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f3c9009cf39b3ece1ec8fb9bc8b3360fd04d829d50acf4852a04a90baf8639->leave($__internal_f4f3c9009cf39b3ece1ec8fb9bc8b3360fd04d829d50acf4852a04a90baf8639_prof);

        
        $__internal_4b2e2bac5533f552ea588e9ca47ee3ec2060fc2cbc74d40f551a7dfe3e00de56->leave($__internal_4b2e2bac5533f552ea588e9ca47ee3ec2060fc2cbc74d40f551a7dfe3e00de56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1684951b7f00a38ee47898b88414274cd6683d3eda5ce7f595dd18ba5f5e7f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1684951b7f00a38ee47898b88414274cd6683d3eda5ce7f595dd18ba5f5e7f4d->enter($__internal_1684951b7f00a38ee47898b88414274cd6683d3eda5ce7f595dd18ba5f5e7f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_44fc5b9c74bd5e5f0ba0888d3d80fd3fc544c23b7cbf8a9c20ec5e66d3bc6314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fc5b9c74bd5e5f0ba0888d3d80fd3fc544c23b7cbf8a9c20ec5e66d3bc6314->enter($__internal_44fc5b9c74bd5e5f0ba0888d3d80fd3fc544c23b7cbf8a9c20ec5e66d3bc6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44fc5b9c74bd5e5f0ba0888d3d80fd3fc544c23b7cbf8a9c20ec5e66d3bc6314->leave($__internal_44fc5b9c74bd5e5f0ba0888d3d80fd3fc544c23b7cbf8a9c20ec5e66d3bc6314_prof);

        
        $__internal_1684951b7f00a38ee47898b88414274cd6683d3eda5ce7f595dd18ba5f5e7f4d->leave($__internal_1684951b7f00a38ee47898b88414274cd6683d3eda5ce7f595dd18ba5f5e7f4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a41eb2fc02e00c63a93e13b257ccf5d4a1bc565c18035c6f5ec16a0deeda1e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41eb2fc02e00c63a93e13b257ccf5d4a1bc565c18035c6f5ec16a0deeda1e40->enter($__internal_a41eb2fc02e00c63a93e13b257ccf5d4a1bc565c18035c6f5ec16a0deeda1e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35c28838c058e950db57e0b42fa6c7d9c01e58f611f9185f8ec5796fd778bef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c28838c058e950db57e0b42fa6c7d9c01e58f611f9185f8ec5796fd778bef8->enter($__internal_35c28838c058e950db57e0b42fa6c7d9c01e58f611f9185f8ec5796fd778bef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35c28838c058e950db57e0b42fa6c7d9c01e58f611f9185f8ec5796fd778bef8->leave($__internal_35c28838c058e950db57e0b42fa6c7d9c01e58f611f9185f8ec5796fd778bef8_prof);

        
        $__internal_a41eb2fc02e00c63a93e13b257ccf5d4a1bc565c18035c6f5ec16a0deeda1e40->leave($__internal_a41eb2fc02e00c63a93e13b257ccf5d4a1bc565c18035c6f5ec16a0deeda1e40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcffcba3fabcc4d5d2a9e5bcef0be0662a920af4f2834072ac6306a13f3b1a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcffcba3fabcc4d5d2a9e5bcef0be0662a920af4f2834072ac6306a13f3b1a81->enter($__internal_fcffcba3fabcc4d5d2a9e5bcef0be0662a920af4f2834072ac6306a13f3b1a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ef08b58e821795133739434e52e522543268f962e86d50bb2a23386248df15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef08b58e821795133739434e52e522543268f962e86d50bb2a23386248df15a->enter($__internal_2ef08b58e821795133739434e52e522543268f962e86d50bb2a23386248df15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2ef08b58e821795133739434e52e522543268f962e86d50bb2a23386248df15a->leave($__internal_2ef08b58e821795133739434e52e522543268f962e86d50bb2a23386248df15a_prof);

        
        $__internal_fcffcba3fabcc4d5d2a9e5bcef0be0662a920af4f2834072ac6306a13f3b1a81->leave($__internal_fcffcba3fabcc4d5d2a9e5bcef0be0662a920af4f2834072ac6306a13f3b1a81_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\esp-projet-uml-dic1-gestion-scolarite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
