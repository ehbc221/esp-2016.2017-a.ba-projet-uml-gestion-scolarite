<?php

/* GFSMainBundle::index.html.twig */
class __TwigTemplate_cc5f27920c9e854b7bf9f8f6eb6c589e5eefd027e26cbf42961c3b54daf7b7d4 extends Twig_Template
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
        $__internal_a485c5c90b8d0ebb51f6610c66c165bddd2347d4b83686aa84b3a9f8ea556b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a485c5c90b8d0ebb51f6610c66c165bddd2347d4b83686aa84b3a9f8ea556b7e->enter($__internal_a485c5c90b8d0ebb51f6610c66c165bddd2347d4b83686aa84b3a9f8ea556b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSMainBundle::index.html.twig"));

        $__internal_4033c0f4fa1662a4e80a032c01d55a0af8d8e297a21c9031290b6d40b13c9b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4033c0f4fa1662a4e80a032c01d55a0af8d8e297a21c9031290b6d40b13c9b91->enter($__internal_4033c0f4fa1662a4e80a032c01d55a0af8d8e297a21c9031290b6d40b13c9b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a485c5c90b8d0ebb51f6610c66c165bddd2347d4b83686aa84b3a9f8ea556b7e->leave($__internal_a485c5c90b8d0ebb51f6610c66c165bddd2347d4b83686aa84b3a9f8ea556b7e_prof);

        
        $__internal_4033c0f4fa1662a4e80a032c01d55a0af8d8e297a21c9031290b6d40b13c9b91->leave($__internal_4033c0f4fa1662a4e80a032c01d55a0af8d8e297a21c9031290b6d40b13c9b91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_976d58a3794258685d0d899e4680e61b3adffde55c66332f4121f6feba4f90b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976d58a3794258685d0d899e4680e61b3adffde55c66332f4121f6feba4f90b8->enter($__internal_976d58a3794258685d0d899e4680e61b3adffde55c66332f4121f6feba4f90b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c7440287d3507c11e201df2076f7d315aa362557b6f38ee7dc2f1bc8843ff04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7440287d3507c11e201df2076f7d315aa362557b6f38ee7dc2f1bc8843ff04->enter($__internal_3c7440287d3507c11e201df2076f7d315aa362557b6f38ee7dc2f1bc8843ff04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Acceuil ";
        
        $__internal_3c7440287d3507c11e201df2076f7d315aa362557b6f38ee7dc2f1bc8843ff04->leave($__internal_3c7440287d3507c11e201df2076f7d315aa362557b6f38ee7dc2f1bc8843ff04_prof);

        
        $__internal_976d58a3794258685d0d899e4680e61b3adffde55c66332f4121f6feba4f90b8->leave($__internal_976d58a3794258685d0d899e4680e61b3adffde55c66332f4121f6feba4f90b8_prof);

    }

    // line 5
    public function block_contentPage($context, array $blocks = array())
    {
        $__internal_4a4fce8dcb70e2612a60c4cec803def4b3b09a4c493b5954e7f5cf766526bb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4fce8dcb70e2612a60c4cec803def4b3b09a4c493b5954e7f5cf766526bb71->enter($__internal_4a4fce8dcb70e2612a60c4cec803def4b3b09a4c493b5954e7f5cf766526bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        $__internal_66f4e8ce18a036ddf3f7a1e119b27eacd86503cae134c325a74d32919c2acefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f4e8ce18a036ddf3f7a1e119b27eacd86503cae134c325a74d32919c2acefd->enter($__internal_66f4e8ce18a036ddf3f7a1e119b27eacd86503cae134c325a74d32919c2acefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

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
                        <tr ng-repeat = \"departement in \">
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
        
        $__internal_66f4e8ce18a036ddf3f7a1e119b27eacd86503cae134c325a74d32919c2acefd->leave($__internal_66f4e8ce18a036ddf3f7a1e119b27eacd86503cae134c325a74d32919c2acefd_prof);

        
        $__internal_4a4fce8dcb70e2612a60c4cec803def4b3b09a4c493b5954e7f5cf766526bb71->leave($__internal_4a4fce8dcb70e2612a60c4cec803def4b3b09a4c493b5954e7f5cf766526bb71_prof);

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
        return array (  197 => 124,  186 => 116,  164 => 97,  153 => 89,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %} Acceuil {% endblock %}

{% block contentPage %}
<div ng-controller=\"globalStatCtrl\">
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
                        <tr ng-repeat = \"departement in \">
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
                   <img src=\"{{ asset('assets/images/profil.jpg') }}\" class=\"w-full img-circle\">
                </a>
                <div class=\"clear\">
                    <a href class=\"font-bold block\">James Brogan</a>
                    <div class=\"text-xxs font-thin text-muted\">Public - 28 March</div>
                    </div>
                </div>
                <div class=\"item\">
                   <img src=\"{{ asset('assets/images/scolarite.jpg') }}\" class=\"w-full\" alt=\"Washed Out\">
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
                   <img src=\"{{ asset('assets/images/profil.jpg') }}\" class=\"w-full img-circle\">
                </a>
                <div class=\"clear\">
                    <a href class=\"font-bold block\">James Brogan</a>
                    <div class=\"text-xxs font-thin text-muted\">Public - 28 March</div>
                    </div>
                </div>
                <div class=\"item\">
                   <img src=\"{{ asset('assets/images/scolarite.jpg') }}\" class=\"w-full\" alt=\"Washed Out\">
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
 
   
{% endblock %}", "GFSMainBundle::index.html.twig", "C:\\wamp64\\www\\esp-projet-uml-dic1-gestion-scolarite\\src\\GFS\\MainBundle/Resources/views/index.html.twig");
    }
}
