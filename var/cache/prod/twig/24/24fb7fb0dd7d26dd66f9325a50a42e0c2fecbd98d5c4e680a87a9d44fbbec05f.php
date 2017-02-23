<?php

/* @SonataIntl/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_a5e2907ca0aebd52c7118bb36440d8d503e501a2b39ae0badc6d42ad503f6d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "timestamp", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataIntl/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataIntl/CRUD/history_revision_timestamp.html.twig", "C:\\Users\\BassehostDroid\\Documents\\Projets\\Projet-uml\\vendor\\sonata-project\\intl-bundle\\Resources\\views\\CRUD\\history_revision_timestamp.html.twig");
    }
}
