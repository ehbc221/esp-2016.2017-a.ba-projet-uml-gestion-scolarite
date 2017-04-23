<?php

/* GFSMainBundle::index.html.twig */
class __TwigTemplate_236490a9d8fdd567c49f4d1236d9d4b3b242f13e95827ed00512b1d458fbf416 extends Twig_Template
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
        $__internal_c16931713cd73b85891df56f05e9c8f510282a25b62a182d709e121f4bc3c29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16931713cd73b85891df56f05e9c8f510282a25b62a182d709e121f4bc3c29d->enter($__internal_c16931713cd73b85891df56f05e9c8f510282a25b62a182d709e121f4bc3c29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSMainBundle::index.html.twig"));

        $__internal_fd7237ed668f2da676c7b8a9eb384a790b5c7ed58df98aab3ac13f74db46d7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7237ed668f2da676c7b8a9eb384a790b5c7ed58df98aab3ac13f74db46d7d4->enter($__internal_fd7237ed668f2da676c7b8a9eb384a790b5c7ed58df98aab3ac13f74db46d7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c16931713cd73b85891df56f05e9c8f510282a25b62a182d709e121f4bc3c29d->leave($__internal_c16931713cd73b85891df56f05e9c8f510282a25b62a182d709e121f4bc3c29d_prof);

        
        $__internal_fd7237ed668f2da676c7b8a9eb384a790b5c7ed58df98aab3ac13f74db46d7d4->leave($__internal_fd7237ed668f2da676c7b8a9eb384a790b5c7ed58df98aab3ac13f74db46d7d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cd14dfb881d30a1f698d4647eac9514a972c0048377f418c17f63b305f0f798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd14dfb881d30a1f698d4647eac9514a972c0048377f418c17f63b305f0f798->enter($__internal_5cd14dfb881d30a1f698d4647eac9514a972c0048377f418c17f63b305f0f798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73589152def11c8cdb7e3a229854b60c2d1be671d259385ac51195c11fe8e335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73589152def11c8cdb7e3a229854b60c2d1be671d259385ac51195c11fe8e335->enter($__internal_73589152def11c8cdb7e3a229854b60c2d1be671d259385ac51195c11fe8e335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Acceuil ";
        
        $__internal_73589152def11c8cdb7e3a229854b60c2d1be671d259385ac51195c11fe8e335->leave($__internal_73589152def11c8cdb7e3a229854b60c2d1be671d259385ac51195c11fe8e335_prof);

        
        $__internal_5cd14dfb881d30a1f698d4647eac9514a972c0048377f418c17f63b305f0f798->leave($__internal_5cd14dfb881d30a1f698d4647eac9514a972c0048377f418c17f63b305f0f798_prof);

    }

    // line 5
    public function block_contentPage($context, array $blocks = array())
    {
        $__internal_c8fa16a46d7b4c0d45998c3ef61db85e0e586d7f0155591dc79bd680c5cd7807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fa16a46d7b4c0d45998c3ef61db85e0e586d7f0155591dc79bd680c5cd7807->enter($__internal_c8fa16a46d7b4c0d45998c3ef61db85e0e586d7f0155591dc79bd680c5cd7807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        $__internal_4268d631bea7eb3d47bdc9276897506ddab82b4f652f4d8c69967b8aa8f97742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4268d631bea7eb3d47bdc9276897506ddab82b4f652f4d8c69967b8aa8f97742->enter($__internal_4268d631bea7eb3d47bdc9276897506ddab82b4f652f4d8c69967b8aa8f97742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

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
        
        $__internal_4268d631bea7eb3d47bdc9276897506ddab82b4f652f4d8c69967b8aa8f97742->leave($__internal_4268d631bea7eb3d47bdc9276897506ddab82b4f652f4d8c69967b8aa8f97742_prof);

        
        $__internal_c8fa16a46d7b4c0d45998c3ef61db85e0e586d7f0155591dc79bd680c5cd7807->leave($__internal_c8fa16a46d7b4c0d45998c3ef61db85e0e586d7f0155591dc79bd680c5cd7807_prof);

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
 
   
{% endblock %}", "GFSMainBundle::index.html.twig", "/var/www/html/projet-uml/src/GFS/MainBundle/Resources/views/index.html.twig");
    }
}
