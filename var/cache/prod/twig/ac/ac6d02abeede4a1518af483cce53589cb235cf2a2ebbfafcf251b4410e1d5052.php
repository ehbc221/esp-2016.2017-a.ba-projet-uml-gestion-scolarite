<?php

/* @GFSstatistiques/Statistiques/globalStat.html.twig */
class __TwigTemplate_20aaab74e0b29738c9fde5436be407592efe695636fef4e291ba2f01a6e41ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@GFSstatistiques/Statistiques/globalStat.html.twig", 1);
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
        echo "    Statistiques globales
";
    }

    // line 5
    public function block_contentPage($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"contents\" ng-controller=\"globalStatCtrl\">
        <div class=\"card\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                   <div class=\"panel-body\">
                       <form class=\"form-horizontal\">
                           <div class=\"radio\">
                              <label><input type=\"radio\" ng-checked=\"true\" name=\"optradio\" ng-click=\"changeStat()\" ng-model=\"choix.motCle\" value=\"all\">Mixte</label>
                            </div>
                           <div class=\"radio\">
                              <label><input type=\"radio\" name=\"optradio\" ng-click=\"changeStat()\" ng-model=\"choix.motCle\" value=\"sexe\">Par sexe</label>
                            </div>
                            <hr>
                            <div class=\"radio\">
                              <label><input type=\"radio\" name=\"optradio1\" ng-checked=\"true\" ng-click=\"changeCritereStat()\" ng-model=\"choix.critere\" value=\"all\">Par effectif total</label>
                            </div>
                            <div class=\"radio\">
                              <label><input type=\"radio\" name=\"optradio1\" ng-click=\"changeCritereStat()\" ng-model=\"choix.critere\" value=\"niveau\">Par niveau</label>
                            </div>
                            <div class=\"radio\">
                              <label><input type=\"radio\" name=\"optradio1\" ng-click=\"changeCritereStat()\" ng-model=\"choix.critere\" value=\"nationalite\">Par nationalité</label>
                            </div>
                            <div class=\"radio\">
                              <label><input type=\"radio\" name=\"optradio1\" ng-click=\"changeCritereStat()\" ng-model=\"choix.critere\" value=\"resultat\">Par taux de réussite</label>
                            </div>
                       </form>
                   </div> 
                </div>
                <div class=\"col-md-9\">
                    <div class=\"panel-body\">
                      <form class=\"form-horizontal\" role=\"form\">
                        <div class=\"form-group\">
                          <label>Départements</label>
                          <select class=\"form-control\" ng-change=\"loadFormation()\" ng-model=\"nomDepartement\">
                            <option value='Tout'>Tout</option>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDepartement"]) ? $context["listeDepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 42
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
            echo "\">
                                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
            echo "
                            </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                          </select>
                        </div>
                        <div class=\"form-group\">
                          <label>Formation</label>
                          <select class=\"form-control\">
                            <option value=\"Globales\">Tout</option>
                            <option ng-repeat=\"formation in listeFormations\" ng-if=\"formation.nomDepartement == nomDepartement\" value=\"[[formation.nom]]\">
                                [[formation.nom]]
                            </option>
                          </select>
                        </div>
                        <div class=\"form-group\">
                              <label>Année académique</label>
                              <select class=\"form-control\">
                                <option value='Tout'>Tout</option>
                              </select>
                            </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div google-chart chart=\"ChartObjectPub\" style=\"height:600px; width:100%;\"></div>
                </div>
                <div class=\"col-lg-6\">
                    <div google-chart chart=\"ChartObjectPrive\" style=\"height:600px; width:100%;\"></div>
                </div>
            </div>
        </div>
         <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> Les effectifs de chaque département de l'ESP</h3>
            </div>
            <div class=\"card\">
                <table class= \"table table-hover\">
                    <thead>
                    <tr>
                        <th  style=\"width:10%\">Nom Département</th>
                        <th  style=\"width:10%\">Effectif Privé</th>
                        <th  style=\"width:10%\">Effectif Public</th>
                        <th  style=\"width:10%\">Effectif Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat = \"departement in listeAll\">
                            <td style=\"vertical-align:middle;\">[[departement.nomDepartement]]</td>
                            <td style=\"vertical-align:middle;\">[[departement.effectifPrive]]</td>
                            <td style=\"vertical-align:middle;\">[[departement.effectifPub]]</td>
                            <td style=\"vertical-align:middle;\">[[departement.effectifTotal]]</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@GFSstatistiques/Statistiques/globalStat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 46,  86 => 43,  81 => 42,  77 => 41,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GFSstatistiques/Statistiques/globalStat.html.twig", "C:\\Users\\BassehostDroid\\Documents\\Projets\\Projet-uml\\src\\GFS\\statistiquesBundle\\Resources\\views\\Statistiques\\globalStat.html.twig");
    }
}
