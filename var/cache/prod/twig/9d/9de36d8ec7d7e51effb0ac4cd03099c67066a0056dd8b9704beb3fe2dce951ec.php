<?php

/* @GFSstatistiques/Statistiques/indexStat.html.twig */
class __TwigTemplate_aed25132aca5a29b535e56f6c733db236b9483dcbb44e84ac3b0624e2eeefe56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@GFSstatistiques/Statistiques/indexStat.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'contentPage' => array($this, 'block_contentPage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titlePage($context, array $blocks = array())
    {
        // line 3
        echo "    Listes
";
    }

    // line 5
    public function block_contentPage($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"table-responsive card\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th  style=\"width:10%\">Numéro Étudiant</th>
                <th  style=\"width:10%\">Nom</th>
                <th  style=\"width:15%\">Prénom(s)</th>
                <th  style=\"width:10%\">Date de naissance</th>
                <th  style=\"width:10%\">Lieu de naissance</th>
                <th  style=\"width:10%\">Pays de naissance</th>
                <th  style=\"width:10%\">Nationalité</th>
                <th  style=\"width:15%\">Formation</th>
                <th  style=\"width:10%\">Statut de formation</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiant"]) ? $context["listeEtudiant"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 23
            echo "                <tr>
                    <td style=\"vertical-align:middle;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "num", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "getDdnToStr", array(), "method"), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "lieunaiss", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align:center;vertical-align:middle;\">";
            // line 29
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->country($this->getAttribute($context["etudiant"], "paysNaiss", array()), "fr");
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nationalite", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "formation", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align:center;vertical-align:middle;\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "statut", array()), "html", null, true);
            echo "</td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@GFSstatistiques/Statistiques/indexStat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  62 => 23,  58 => 22,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GFSstatistiques/Statistiques/indexStat.html.twig", "C:\\Users\\BassehostDroid\\Documents\\Projets\\Projet-uml\\src\\GFS\\statistiquesBundle\\Resources\\views\\Statistiques\\indexStat.html.twig");
    }
}
