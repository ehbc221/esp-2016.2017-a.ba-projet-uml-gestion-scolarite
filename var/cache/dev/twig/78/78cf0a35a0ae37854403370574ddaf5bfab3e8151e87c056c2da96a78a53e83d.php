<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_53ff4d2d7f2c6aa6ab226f8b36a5387956bb5b2a02c7862daec7ff89de07124f extends Twig_Template
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
        $__internal_25b1b762d7daeb3d153e1f5173040acffe9e845eb8cb6431c787db9a55d43f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b1b762d7daeb3d153e1f5173040acffe9e845eb8cb6431c787db9a55d43f9c->enter($__internal_25b1b762d7daeb3d153e1f5173040acffe9e845eb8cb6431c787db9a55d43f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_19087e586ca855e1e993476718b433d6635e0cc3b3722490201234c235af1552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19087e586ca855e1e993476718b433d6635e0cc3b3722490201234c235af1552->enter($__internal_19087e586ca855e1e993476718b433d6635e0cc3b3722490201234c235af1552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b1b762d7daeb3d153e1f5173040acffe9e845eb8cb6431c787db9a55d43f9c->leave($__internal_25b1b762d7daeb3d153e1f5173040acffe9e845eb8cb6431c787db9a55d43f9c_prof);

        
        $__internal_19087e586ca855e1e993476718b433d6635e0cc3b3722490201234c235af1552->leave($__internal_19087e586ca855e1e993476718b433d6635e0cc3b3722490201234c235af1552_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8b17648171442e80a7ba35a9639107968be16dfeee11b7fa785c6a92ebac71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b17648171442e80a7ba35a9639107968be16dfeee11b7fa785c6a92ebac71c->enter($__internal_b8b17648171442e80a7ba35a9639107968be16dfeee11b7fa785c6a92ebac71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7eb43f6c17478ef29053a277de67aa74df59ebb5677b9936fcb60d13dc139221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb43f6c17478ef29053a277de67aa74df59ebb5677b9936fcb60d13dc139221->enter($__internal_7eb43f6c17478ef29053a277de67aa74df59ebb5677b9936fcb60d13dc139221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7eb43f6c17478ef29053a277de67aa74df59ebb5677b9936fcb60d13dc139221->leave($__internal_7eb43f6c17478ef29053a277de67aa74df59ebb5677b9936fcb60d13dc139221_prof);

        
        $__internal_b8b17648171442e80a7ba35a9639107968be16dfeee11b7fa785c6a92ebac71c->leave($__internal_b8b17648171442e80a7ba35a9639107968be16dfeee11b7fa785c6a92ebac71c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b33d70f7869b99b5f4c77a35ff7978357ad1e51fc058dc552bb3ce55dfaf1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b33d70f7869b99b5f4c77a35ff7978357ad1e51fc058dc552bb3ce55dfaf1c0->enter($__internal_5b33d70f7869b99b5f4c77a35ff7978357ad1e51fc058dc552bb3ce55dfaf1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a0dc127d1b91007f5564cb73560b3f634de9426f25249d7813c23508f6b2642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0dc127d1b91007f5564cb73560b3f634de9426f25249d7813c23508f6b2642->enter($__internal_0a0dc127d1b91007f5564cb73560b3f634de9426f25249d7813c23508f6b2642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0a0dc127d1b91007f5564cb73560b3f634de9426f25249d7813c23508f6b2642->leave($__internal_0a0dc127d1b91007f5564cb73560b3f634de9426f25249d7813c23508f6b2642_prof);

        
        $__internal_5b33d70f7869b99b5f4c77a35ff7978357ad1e51fc058dc552bb3ce55dfaf1c0->leave($__internal_5b33d70f7869b99b5f4c77a35ff7978357ad1e51fc058dc552bb3ce55dfaf1c0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19397d7071606a70ace50b37951aa53477a038a925cd2ed3882d5529f94d1715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19397d7071606a70ace50b37951aa53477a038a925cd2ed3882d5529f94d1715->enter($__internal_19397d7071606a70ace50b37951aa53477a038a925cd2ed3882d5529f94d1715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93c542774fb7d6378bdcb848f976ed8c9de31ea4f4b7f31156326b77bc1b8cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c542774fb7d6378bdcb848f976ed8c9de31ea4f4b7f31156326b77bc1b8cf2->enter($__internal_93c542774fb7d6378bdcb848f976ed8c9de31ea4f4b7f31156326b77bc1b8cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_93c542774fb7d6378bdcb848f976ed8c9de31ea4f4b7f31156326b77bc1b8cf2->leave($__internal_93c542774fb7d6378bdcb848f976ed8c9de31ea4f4b7f31156326b77bc1b8cf2_prof);

        
        $__internal_19397d7071606a70ace50b37951aa53477a038a925cd2ed3882d5529f94d1715->leave($__internal_19397d7071606a70ace50b37951aa53477a038a925cd2ed3882d5529f94d1715_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\esp-projet-uml-dic1-gestion-scolarite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
