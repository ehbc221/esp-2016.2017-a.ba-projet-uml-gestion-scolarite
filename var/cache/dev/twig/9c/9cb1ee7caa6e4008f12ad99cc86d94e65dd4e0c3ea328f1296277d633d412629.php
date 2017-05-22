<?php

/* GFSstatistiquesBundle:Statistiques:indexStat.html.twig */
class __TwigTemplate_88b84d474e974b4303f248494abf6dce45370de605ee122e615d3fdcba5c0d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFSstatistiquesBundle:Statistiques:indexStat.html.twig", 1);
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
        $__internal_3d24eae5e0b8e099cdb2946951455bfa9db9180d5660a3375e362d0117d23045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d24eae5e0b8e099cdb2946951455bfa9db9180d5660a3375e362d0117d23045->enter($__internal_3d24eae5e0b8e099cdb2946951455bfa9db9180d5660a3375e362d0117d23045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSstatistiquesBundle:Statistiques:indexStat.html.twig"));

        $__internal_85d6871439cee93eccdbd91508277c765a45d64c526ba455b7728882e02312c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d6871439cee93eccdbd91508277c765a45d64c526ba455b7728882e02312c3->enter($__internal_85d6871439cee93eccdbd91508277c765a45d64c526ba455b7728882e02312c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSstatistiquesBundle:Statistiques:indexStat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d24eae5e0b8e099cdb2946951455bfa9db9180d5660a3375e362d0117d23045->leave($__internal_3d24eae5e0b8e099cdb2946951455bfa9db9180d5660a3375e362d0117d23045_prof);

        
        $__internal_85d6871439cee93eccdbd91508277c765a45d64c526ba455b7728882e02312c3->leave($__internal_85d6871439cee93eccdbd91508277c765a45d64c526ba455b7728882e02312c3_prof);

    }

    // line 2
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_49512bdbd89dadbc2e3b7edea612dd1864a586951d4ff8a6360249e3e7489d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49512bdbd89dadbc2e3b7edea612dd1864a586951d4ff8a6360249e3e7489d98->enter($__internal_49512bdbd89dadbc2e3b7edea612dd1864a586951d4ff8a6360249e3e7489d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        $__internal_7d9380f5f66e1789360d5abee74c8a1e0d5624abd51bfe7151d0e896ff3e82f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9380f5f66e1789360d5abee74c8a1e0d5624abd51bfe7151d0e896ff3e82f6->enter($__internal_7d9380f5f66e1789360d5abee74c8a1e0d5624abd51bfe7151d0e896ff3e82f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 3
        echo "    Listes
";
        
        $__internal_7d9380f5f66e1789360d5abee74c8a1e0d5624abd51bfe7151d0e896ff3e82f6->leave($__internal_7d9380f5f66e1789360d5abee74c8a1e0d5624abd51bfe7151d0e896ff3e82f6_prof);

        
        $__internal_49512bdbd89dadbc2e3b7edea612dd1864a586951d4ff8a6360249e3e7489d98->leave($__internal_49512bdbd89dadbc2e3b7edea612dd1864a586951d4ff8a6360249e3e7489d98_prof);

    }

    // line 5
    public function block_contentPage($context, array $blocks = array())
    {
        $__internal_ce86bf560490ed46ed36e10a7dfe67305dede0c8081b99b2bc5361cce1c55c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce86bf560490ed46ed36e10a7dfe67305dede0c8081b99b2bc5361cce1c55c4e->enter($__internal_ce86bf560490ed46ed36e10a7dfe67305dede0c8081b99b2bc5361cce1c55c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        $__internal_d817ded7601b659199b41a49cf1204a71058a79d7bbc5e66db1e0fc26e12ef8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d817ded7601b659199b41a49cf1204a71058a79d7bbc5e66db1e0fc26e12ef8b->enter($__internal_d817ded7601b659199b41a49cf1204a71058a79d7bbc5e66db1e0fc26e12ef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        // line 6
        echo "<div class=\"panel panel-primary\">
   <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list-ol\"></i> Liste des éléves de l'établissement</h3>
   </div>
   <div ng-controller=\"listesCtrl as showCase\">
    <div class=\"table-responsive card\">
        <table datatable=\"\" dt-options=\"showCase.dtOptions\" dt-columns=\"showCase.dtColumns\" class=\"table table-striped b-t b-b\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiant"]) || array_key_exists("listeEtudiant", $context) ? $context["listeEtudiant"] : (function () { throw new Twig_Error_Runtime('Variable "listeEtudiant" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 28
            echo "                <tr>
                    <td style=\"vertical-align:middle;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "num", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "getDdnToStr", array(), "method"), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "lieunaiss", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align:center;vertical-align:middle;\">";
            // line 34
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->country(twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "paysNaiss", array()), "fr");
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "nationalite", array()), "html", null, true);
            echo "</td>
                    <td style=\"vertical-align:middle;\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "formation", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align:center;vertical-align:middle;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["etudiant"], "statut", array()), "html", null, true);
            echo "</td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
      </div>
    </div>
</div>
";
        
        $__internal_d817ded7601b659199b41a49cf1204a71058a79d7bbc5e66db1e0fc26e12ef8b->leave($__internal_d817ded7601b659199b41a49cf1204a71058a79d7bbc5e66db1e0fc26e12ef8b_prof);

        
        $__internal_ce86bf560490ed46ed36e10a7dfe67305dede0c8081b99b2bc5361cce1c55c4e->leave($__internal_ce86bf560490ed46ed36e10a7dfe67305dede0c8081b99b2bc5361cce1c55c4e_prof);

    }

    public function getTemplateName()
    {
        return "GFSstatistiquesBundle:Statistiques:indexStat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  97 => 28,  93 => 27,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block titlePage %}
    Listes
{% endblock %}
{% block contentPage %}
<div class=\"panel panel-primary\">
   <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list-ol\"></i> Liste des éléves de l'établissement</h3>
   </div>
   <div ng-controller=\"listesCtrl as showCase\">
    <div class=\"table-responsive card\">
        <table datatable=\"\" dt-options=\"showCase.dtOptions\" dt-columns=\"showCase.dtColumns\" class=\"table table-striped b-t b-b\">
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
            {% for etudiant in listeEtudiant %}
                <tr>
                    <td style=\"vertical-align:middle;\">{{ etudiant.num }}</td>
                    <td style=\"vertical-align:middle;\">{{ etudiant.nom }}</td>
                    <td style=\"vertical-align:middle;\">{{ etudiant.prenom }}</td>
                    <td style=\"vertical-align:middle;\">{{ etudiant.getDdnToStr() }}</td>
                    <td style=\"vertical-align:middle;\">{{ etudiant.lieunaiss }}</td>
                    <td style=\"text-align:center;vertical-align:middle;\">{{ etudiant.paysNaiss | country('fr') }}</td>
                    <td style=\"vertical-align:middle;\">{{ etudiant.nationalite }}</td>
                    <td style=\"vertical-align:middle;\">{{ etudiant.formation }}</td>
                    <td style=\"text-align:center;vertical-align:middle;\">{{ etudiant.statut }}</td>

                </tr>
            {% endfor %}
            </tbody>
        </table>
      </div>
    </div>
</div>
{% endblock %}", "GFSstatistiquesBundle:Statistiques:indexStat.html.twig", "C:\\wamp64\\www\\esp-projet-uml-dic1-gestion-scolarite\\src\\GFS\\statistiquesBundle/Resources/views/Statistiques/indexStat.html.twig");
    }
}
