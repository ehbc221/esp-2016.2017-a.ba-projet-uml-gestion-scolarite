<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f345397162a61dc99892d2ef34d5675231d53c110d93ae17e4b800e0812b6a46 extends Twig_Template
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
        $__internal_2a5fd56abcdbe59c05a016b61e7c231623bef2d7f7ebfbb7c717ff07c0e43248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5fd56abcdbe59c05a016b61e7c231623bef2d7f7ebfbb7c717ff07c0e43248->enter($__internal_2a5fd56abcdbe59c05a016b61e7c231623bef2d7f7ebfbb7c717ff07c0e43248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0c97b855a169ef3003df5d2afb2ffdef7e89c8731f2bac76b8c7352fd967a87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c97b855a169ef3003df5d2afb2ffdef7e89c8731f2bac76b8c7352fd967a87e->enter($__internal_0c97b855a169ef3003df5d2afb2ffdef7e89c8731f2bac76b8c7352fd967a87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5fd56abcdbe59c05a016b61e7c231623bef2d7f7ebfbb7c717ff07c0e43248->leave($__internal_2a5fd56abcdbe59c05a016b61e7c231623bef2d7f7ebfbb7c717ff07c0e43248_prof);

        
        $__internal_0c97b855a169ef3003df5d2afb2ffdef7e89c8731f2bac76b8c7352fd967a87e->leave($__internal_0c97b855a169ef3003df5d2afb2ffdef7e89c8731f2bac76b8c7352fd967a87e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b10862da665acddc023e62ff156f720ad6aa67c6db4e021156f59275cd40eae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10862da665acddc023e62ff156f720ad6aa67c6db4e021156f59275cd40eae5->enter($__internal_b10862da665acddc023e62ff156f720ad6aa67c6db4e021156f59275cd40eae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c55c4a5a1e8f0195a09b6cc5473140bee7dcdf90bf61f437406f15b55c9398a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c55c4a5a1e8f0195a09b6cc5473140bee7dcdf90bf61f437406f15b55c9398a->enter($__internal_5c55c4a5a1e8f0195a09b6cc5473140bee7dcdf90bf61f437406f15b55c9398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5c55c4a5a1e8f0195a09b6cc5473140bee7dcdf90bf61f437406f15b55c9398a->leave($__internal_5c55c4a5a1e8f0195a09b6cc5473140bee7dcdf90bf61f437406f15b55c9398a_prof);

        
        $__internal_b10862da665acddc023e62ff156f720ad6aa67c6db4e021156f59275cd40eae5->leave($__internal_b10862da665acddc023e62ff156f720ad6aa67c6db4e021156f59275cd40eae5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_98800a2e42f7e8b06dbe426dc7e216a0074de573070dbed0d6c9444eb99b279c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98800a2e42f7e8b06dbe426dc7e216a0074de573070dbed0d6c9444eb99b279c->enter($__internal_98800a2e42f7e8b06dbe426dc7e216a0074de573070dbed0d6c9444eb99b279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f0025a069cadaef0000c5f45c6943849e49f9e3801e3abb9ca5869d5c39b122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0025a069cadaef0000c5f45c6943849e49f9e3801e3abb9ca5869d5c39b122->enter($__internal_2f0025a069cadaef0000c5f45c6943849e49f9e3801e3abb9ca5869d5c39b122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2f0025a069cadaef0000c5f45c6943849e49f9e3801e3abb9ca5869d5c39b122->leave($__internal_2f0025a069cadaef0000c5f45c6943849e49f9e3801e3abb9ca5869d5c39b122_prof);

        
        $__internal_98800a2e42f7e8b06dbe426dc7e216a0074de573070dbed0d6c9444eb99b279c->leave($__internal_98800a2e42f7e8b06dbe426dc7e216a0074de573070dbed0d6c9444eb99b279c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a34e1668086513af6a6621599ac13ab0b613425a5775a7fde6f5c7fe886381a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a34e1668086513af6a6621599ac13ab0b613425a5775a7fde6f5c7fe886381a->enter($__internal_4a34e1668086513af6a6621599ac13ab0b613425a5775a7fde6f5c7fe886381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26554757768e8d9e6784e64623504a8d89e0f084cd477d55934be3cfa29a8fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26554757768e8d9e6784e64623504a8d89e0f084cd477d55934be3cfa29a8fa2->enter($__internal_26554757768e8d9e6784e64623504a8d89e0f084cd477d55934be3cfa29a8fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_26554757768e8d9e6784e64623504a8d89e0f084cd477d55934be3cfa29a8fa2->leave($__internal_26554757768e8d9e6784e64623504a8d89e0f084cd477d55934be3cfa29a8fa2_prof);

        
        $__internal_4a34e1668086513af6a6621599ac13ab0b613425a5775a7fde6f5c7fe886381a->leave($__internal_4a34e1668086513af6a6621599ac13ab0b613425a5775a7fde6f5c7fe886381a_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/projet-uml/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
