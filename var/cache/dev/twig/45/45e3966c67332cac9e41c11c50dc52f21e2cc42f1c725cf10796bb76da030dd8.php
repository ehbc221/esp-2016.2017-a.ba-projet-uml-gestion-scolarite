<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_777df8b0b0f7f6a6307e478ceb57682839ea60a38cf0d2f3e1ec6e7c6c885760 extends Twig_Template
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
        $__internal_25cee79ba7a0fc2e5000fe4ff75c5cd0002ac342dc6433b2e0dcdcecc383dd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cee79ba7a0fc2e5000fe4ff75c5cd0002ac342dc6433b2e0dcdcecc383dd4c->enter($__internal_25cee79ba7a0fc2e5000fe4ff75c5cd0002ac342dc6433b2e0dcdcecc383dd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_82b111df2ee4b762305d8153d0e545f6d43d87a69f7879a130603e2731dbc919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b111df2ee4b762305d8153d0e545f6d43d87a69f7879a130603e2731dbc919->enter($__internal_82b111df2ee4b762305d8153d0e545f6d43d87a69f7879a130603e2731dbc919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25cee79ba7a0fc2e5000fe4ff75c5cd0002ac342dc6433b2e0dcdcecc383dd4c->leave($__internal_25cee79ba7a0fc2e5000fe4ff75c5cd0002ac342dc6433b2e0dcdcecc383dd4c_prof);

        
        $__internal_82b111df2ee4b762305d8153d0e545f6d43d87a69f7879a130603e2731dbc919->leave($__internal_82b111df2ee4b762305d8153d0e545f6d43d87a69f7879a130603e2731dbc919_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c89cee59fd0764071afb38ea05263a1cddd56a8451b69ad22e0bb355d1e5fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c89cee59fd0764071afb38ea05263a1cddd56a8451b69ad22e0bb355d1e5fc5->enter($__internal_0c89cee59fd0764071afb38ea05263a1cddd56a8451b69ad22e0bb355d1e5fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af480ceb464286e66012e64694054e488b2d742dae549d4f1b30523a954b556c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af480ceb464286e66012e64694054e488b2d742dae549d4f1b30523a954b556c->enter($__internal_af480ceb464286e66012e64694054e488b2d742dae549d4f1b30523a954b556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_af480ceb464286e66012e64694054e488b2d742dae549d4f1b30523a954b556c->leave($__internal_af480ceb464286e66012e64694054e488b2d742dae549d4f1b30523a954b556c_prof);

        
        $__internal_0c89cee59fd0764071afb38ea05263a1cddd56a8451b69ad22e0bb355d1e5fc5->leave($__internal_0c89cee59fd0764071afb38ea05263a1cddd56a8451b69ad22e0bb355d1e5fc5_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/projet-uml/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
