<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d709992ed0ce1d1528b711113022f76d805ce010373e1ac9b78a26a14fa57edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f5cfc6d95984d7b01d1a8925bdce24ec7b33d9195083a2dc4dcfb7199698311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5cfc6d95984d7b01d1a8925bdce24ec7b33d9195083a2dc4dcfb7199698311->enter($__internal_2f5cfc6d95984d7b01d1a8925bdce24ec7b33d9195083a2dc4dcfb7199698311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1af7827a2bbc3204747af91e991e13503581664d3b0221710e07ded0fdb1f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af7827a2bbc3204747af91e991e13503581664d3b0221710e07ded0fdb1f7e5->enter($__internal_1af7827a2bbc3204747af91e991e13503581664d3b0221710e07ded0fdb1f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5cfc6d95984d7b01d1a8925bdce24ec7b33d9195083a2dc4dcfb7199698311->leave($__internal_2f5cfc6d95984d7b01d1a8925bdce24ec7b33d9195083a2dc4dcfb7199698311_prof);

        
        $__internal_1af7827a2bbc3204747af91e991e13503581664d3b0221710e07ded0fdb1f7e5->leave($__internal_1af7827a2bbc3204747af91e991e13503581664d3b0221710e07ded0fdb1f7e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81a26f434e0c3f96e3974cf652ab2cb87989e5ac07356e7d7cc013ec47654d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a26f434e0c3f96e3974cf652ab2cb87989e5ac07356e7d7cc013ec47654d50->enter($__internal_81a26f434e0c3f96e3974cf652ab2cb87989e5ac07356e7d7cc013ec47654d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b25a07479bc3e3107f90634a3049b25dac248bbaa0fe19f8af4b9773d6e75c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25a07479bc3e3107f90634a3049b25dac248bbaa0fe19f8af4b9773d6e75c52->enter($__internal_b25a07479bc3e3107f90634a3049b25dac248bbaa0fe19f8af4b9773d6e75c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b25a07479bc3e3107f90634a3049b25dac248bbaa0fe19f8af4b9773d6e75c52->leave($__internal_b25a07479bc3e3107f90634a3049b25dac248bbaa0fe19f8af4b9773d6e75c52_prof);

        
        $__internal_81a26f434e0c3f96e3974cf652ab2cb87989e5ac07356e7d7cc013ec47654d50->leave($__internal_81a26f434e0c3f96e3974cf652ab2cb87989e5ac07356e7d7cc013ec47654d50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\esp-projet-uml-dic1-gestion-scolarite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
