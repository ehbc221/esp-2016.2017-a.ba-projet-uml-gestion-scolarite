<?php

/* GFSMainBundle::index.html.twig */
class __TwigTemplate_89d204d7c4de2db6421852320e6a57d5f58a6d7ee269ce1e28ed5177bfd6576b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFSMainBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Acceuil ";
    }

    // line 5
    public function block_contentPage($context, array $blocks = array())
    {
        // line 6
        echo "<div ng-controller=\"globalStatCtrl\">
     <div class = \"row\">
        <div class = \"col-lg-2\">
           <div class=\"card blue\">
             <div class=\"card-heading\">
                <h2>Génie Info</h2>
                <h1>25%</h1>
             </div>
           </div>
        </div>
        <div class = \"col-lg-2\">
           <div class=\"card red\">
             <div class=\"card-heading\">
                <h2>Génie Mécanique</h2>
                <h1>25%</h1>
             </div>
           </div>
        </div>
        <div class = \"col-lg-2\">
           <div class=\"card yellow\">
             <div class=\"card-heading\">
                <h2>Gestion</h2>
                <h1>25%</h1>
             </div>
           </div>
        </div>
        <div class = \"col-lg-2\">
           <div class=\"card green\">
             <div class=\"card-heading\">
                <h2>GCBA</h2>
                <h1>25%</h1>
             </div>
           </div>
        </div>
        <div class = \"col-lg-2\">
           <div class=\"card indigo\">
             <div class=\"card-heading\">
                <h2>Génie Civile</h2>
                <h1>25%</h1>
             </div>
           </div>
        </div>
        <div class = \"col-lg-2\">
           <div class=\"card purple\">
             <div class=\"card-heading\">
                <h2>Génie Electrique</h2>
                <h1>25%</h1>
             </div>
           </div>
        </div>
     </div>  
     <div class=\"row\">
    <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list-ol\"></i> Les effectifs de chaque département de l'ESP</h3>
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
     <div class = \"row\">
        <div class=\"col-lg-6\">
           <div class=\"card\">
              <div class=\"card-heading\">
                <a href class=\"pull-left w-32 m-r\">
                   <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profil.jpg"), "html", null, true);
        echo "\" class=\"w-full img-circle\">
                </a>
                <div class=\"clear\">
                    <a href class=\"font-bold block\">James Brogan</a>
                    <div class=\"text-xxs font-thin text-muted\">Public - 28 March</div>
                    </div>
                </div>
                <div class=\"item\">
                   <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/scolarite.jpg"), "html", null, true);
        echo "\" class=\"w-full\" alt=\"Washed Out\">
                   <div class=\"bottom text-white p-md\">
                       Title
                   </div>
                </div>
                <a md-ink-ripple=\"\" class=\"md-btn md-raised md-fab m-r md-fab-offset pull-right bg-white\">Top</a>
                <div class=\"card-body\">
                  <h3 class=\"no-margin m-b\">Paracosm</h3>
                  <p>
                    The titles of Washed Out's breakthrough song and the first single from Paracosm share the
                    two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
                  </p>
                </div>
             </div>
        </div>
        <div class=\"col-lg-6\">
           <div class=\"card\">
              <div class=\"card-heading\">
                <a href class=\"pull-left w-32 m-r\">
                   <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profil.jpg"), "html", null, true);
        echo "\" class=\"w-full img-circle\">
                </a>
                <div class=\"clear\">
                    <a href class=\"font-bold block\">James Brogan</a>
                    <div class=\"text-xxs font-thin text-muted\">Public - 28 March</div>
                    </div>
                </div>
                <div class=\"item\">
                   <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/scolarite.jpg"), "html", null, true);
        echo "\" class=\"w-full\" alt=\"Washed Out\">
                   <div class=\"bottom text-white p-md\">
                       Title
                   </div>
                </div>
                <a md-ink-ripple=\"\" class=\"md-btn md-raised md-fab m-r md-fab-offset pull-right bg-white\">Top</a>
                <div class=\"card-body\">
                  <h3 class=\"no-margin m-b\">Paracosm</h3>
                  <p>
                    The titles of Washed Out's breakthrough song and the first single from Paracosm share the
                    two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
                  </p>
                </div>
             </div>
        </div>
     </div>
 </div>
 
   
";
    }

    public function getTemplateName()
    {
        return "GFSMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 124,  156 => 116,  134 => 97,  123 => 89,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GFSMainBundle::index.html.twig", "C:\\Users\\BassehostDroid\\Documents\\Projets\\Projet-uml\\src\\GFS\\MainBundle/Resources/views/index.html.twig");
    }
}
