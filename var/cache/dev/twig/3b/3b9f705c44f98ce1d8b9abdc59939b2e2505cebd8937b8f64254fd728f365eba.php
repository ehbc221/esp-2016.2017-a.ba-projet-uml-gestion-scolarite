<?php

/* ::base.html.twig */
class __TwigTemplate_7ca710bf96060a6f6f15d061d59a2fd3e306df87570326080151d99ed2eb598b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'modalAttestation' => array($this, 'block_modalAttestation'),
            'titlePage' => array($this, 'block_titlePage'),
            'contentPage' => array($this, 'block_contentPage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6c5bb0656cfcb56792e48a9ee9cb6574624ed9824e75f91908e0e5a24400534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c5bb0656cfcb56792e48a9ee9cb6574624ed9824e75f91908e0e5a24400534->enter($__internal_f6c5bb0656cfcb56792e48a9ee9cb6574624ed9824e75f91908e0e5a24400534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_dcd4a2b74794db2ac1cf67491b5ce59e40cc15af6a41e381d40012114c346e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd4a2b74794db2ac1cf67491b5ce59e40cc15af6a41e381d40012114c346e60->enter($__internal_dcd4a2b74794db2ac1cf67491b5ce59e40cc15af6a41e381d40012114c346e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" ng-app=\"gestionScolorite\">
<head>
  <meta charset=\"utf-8\" />
  <title>Gestion Scolarité</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/assets/animate.css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/waves/dist/waves.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/material-design-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/font.css"), "html", null, true);
        echo "\"  type=\"text/css\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/app.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/dist/css/angular-datatables.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>
<div class=\"app\">
  <!-- aside -->
  <aside id=\"aside\" class=\"app-aside modal fade in\" role=\"menu\">
    <div class=\"left\">
      <div class=\"box bg-white\">
        <div class=\"navbar md-whiteframe-z1 no-radius blue\">
            <!-- brand -->
            <a class=\"navbar-brand\">
              <svg version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\" style=\"
                    width: 30px; height: 30px;\">
                  <!--<path d=\"M 50 0 L 100 14 L 92 80 Z\" fill=\"rgba(139, 195, 74, 0.5)\"></path>
                  <path d=\"M 92 80 L 50 0 L 50 100 Z\" fill=\"rgba(139, 195, 74, 0.8)\"></path>
                  <path d=\"M 8 80 L 50 0 L 50 100 Z\" fill=\"#f3f3f3\"></path>
                  <path d=\"M 50 0 L 8 80 L 0 14 Z\" fill=\"rgba(220, 220, 220, 0.6)\"></path>-->
                  <image xlink:href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/ucad1.gif"), "html", null, true);
        echo "\" x=\"0\" y=\"0\" height=\"100px\" width=\"100px\"/>
                </svg>
              <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\".\" style=\"max-height: 36px; display:none\">
              <span class=\"hidden-folded m-l inline\">Logiciel Scolarité</span>
            </a>
            <!-- / brand -->
        </div>
        <div class=\"box-row\">
          <div class=\"box-cell scrollable hover\">
            <div class=\"box-inner\">
              <div class=\"p hidden-folded blue-50\" style=\"background-image:url(";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg.png"), "html", null, true);
        echo "); background-size:cover\">
                <div class=\"rounded w-64 bg-white inline pos-rlt\">
                  <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo_ucad.png"), "html", null, true);
        echo "\" class=\"img-responsive rounded\">
                </div>
                <a class=\"block m-t-sm\" ui-toggle-class=\"hide, show\" target=\"#nav, #account\">
                  <span class=\"block font-bold\">Username</span>
                  <span class=\"pull-right auto\">
                    <i class=\"fa inline fa-caret-down\"></i>
                    <i class=\"fa none fa-caret-up\"></i>
                  </span>
                  user.mail@mail.com
                </a>
              </div>
              <div id=\"nav\">
                <nav ui-nav>
                  <ul class=\"nav\">
                  <li>
                    <a md-ink-ripple href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_main_homepage");
        echo "\">
                      <i class=\"icon mdi-action-home i-20\"></i>
                      <span class=\"font-normal\">Accueil</span>
                    </a>
                  </li>
                  <li>
                    <a md-ink-ripple>
                      <span class=\"pull-right text-muted\">
                        <i class=\"fa fa-caret-down\"></i>
                      </span>
                      <i class=\"pull-right up\"></i>
                      <i class=\"icon mdi-action-trending-up i-20\"></i>
                      <span class=\"font-normal\">Statistiques</span>
                      </a>
                      <ul class=\"nav nav-sub\">
                        <li>
                          <a md-ink-ripple href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_statistiques_addData");
        echo "\">Ajout Étudiant</a>
                        </li>
                        <li>
                          <a md-ink-ripple href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_statistiques_listes");
        echo "\">Listes</a>
                        </li>
                        <li>
                           <a md-ink-ripple href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_statistiques");
        echo "\">Statistiques globales</a>
                        </li>
                      </ul>
                      <li>
                        <a md-ink-ripple href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_attestation");
        echo "\">
                          <i class=\"icon mdi-action-description i-20\"></i>
                          <span class=\"font-normal\">Document</span>
                        </a>
                      </li>
                    <li>
                      <a md-ink-ripple href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">
                        <i class=\"icon mdi-action-exit-to-app i-20\"></i>
                        <span>Se déconnecter</span>
                      </a>
                    </li>
                    </ul>
                </nav>
              </div>
              <div id=\"account\" class=\"hide m-v-xs\">
                <nav>
                  <ul class=\"nav\">
                    <li>
                      <div class=\"nav-item\" ui-toggle-class=\"folded\" target=\"#aside\">
                        <label class=\"md-check\">
                          <input type=\"checkbox\">
                          <i class=\"purple no-icon\"></i>
                          <span class=\"hidden-folded\">Folded aside</span>
                        </label>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class=\"nav b-t b\">
            <li>
              <a href=\"https://themeforest.net/item/materil-responsive-admin-dashboard-template/11062969\" target=\"_blank\" md-ink-ripple>
                <i class=\"icon mdi-action-help i-20\"></i>
                <span>Help &amp; Feedback</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
  <!-- / aside -->


  ";
        // line 134
        $this->displayBlock('modalAttestation', $context, $blocks);
        // line 137
        echo "  <!-- content -->
  <div id=\"content\" class=\"app-content\" role=\"main\">
    <div class=\"box\">
          <!-- Content Navbar -->
    <div class=\"navbar md-whiteframe-z1 no-radius blue\">
      <!-- Open side - Naviation on mobile -->
      <a md-ink-ripple  data-toggle=\"modal\" data-target=\"#aside\" class=\"navbar-item pull-left visible-xs visible-sm\"><i class=\"mdi-navigation-menu i-24\"></i></a>
      <!-- / -->
      <!-- Page title - Bind to \$state's title -->
      <div class=\"navbar-item pull-left h4\">
          ";
        // line 147
        $this->displayBlock('titlePage', $context, $blocks);
        // line 150
        echo "      </div>
      <!-- / -->
      <!-- Common tools -->
      <ul class=\"nav nav-sm navbar-tool pull-right\">
        <li>
          <a md-ink-ripple ui-toggle-class=\"show\" target=\"#search\">
            <i class=\"mdi-action-search i-24\"></i>
          </a>
        </li>
      </ul>
      <div class=\"pull-right\" ui-view=\"navbar@\"></div>
      <!-- / -->
      <!-- Search form -->
      <div id=\"search\" class=\"pos-abt w-full h-full blue hide\">
        <div class=\"box\">
          <div class=\"box-col w-56 text-center\">
            <!-- hide search form -->
            <a md-ink-ripple class=\"navbar-item inline\"  ui-toggle-class=\"show\" target=\"#search\"><i class=\"mdi-navigation-arrow-back i-24\"></i></a>
          </div>
          <div class=\"box-col v-m\">
            <!-- bind to app.search.content -->
            <input class=\"form-control input-lg no-bg no-border\" placeholder=\"Search\" ng-model=\"app.search.content\">
          </div>
          <div class=\"box-col w-56 text-center\">
            <a md-ink-ripple class=\"navbar-item inline\"><i class=\"mdi-av-mic i-24\"></i></a>
          </div>
        </div>
      </div>
      <!-- / -->
    </div>
    <!-- Content -->
      <div class=\"box-row\">
        <div class=\"box-cell\">
          <div class=\"box-inner padding\">
            <div class=\"row\">
                ";
        // line 185
        $this->displayBlock('contentPage', $context, $blocks);
        // line 188
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / content -->
</div>

<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/waves/dist/waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-load.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-jp.config.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-jp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-nav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-toggle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-client.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/angular-google-chart/0.1.0/ng-google-chart.js\" type=\"text/javascript\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js\"></script>

<!-- Angular Material Library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js\"></script>


<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/dist/angular-datatables.min.js"), "html", null, true);
        echo "\"></script>


<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/dist/plugins/buttons/angular-datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/html2canvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/statistiquesController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/globalStatController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/listeController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/attestationController.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.highcharts.com/highcharts.js\"></script>
<script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js\"></script>
<script type=\"text/javascript\">
\$(document).on(\"click\", \".open-AddBookDialog\", function (e) {

    e.preventDefault();

    var _self = \$(this);

    var myBookId = _self.data('id');
    \$(\"#bookId\").val(myBookId);

    \$(_self.attr('href')).modal('show');
});
</script>
</body>
</html>
";
        
        $__internal_f6c5bb0656cfcb56792e48a9ee9cb6574624ed9824e75f91908e0e5a24400534->leave($__internal_f6c5bb0656cfcb56792e48a9ee9cb6574624ed9824e75f91908e0e5a24400534_prof);

        
        $__internal_dcd4a2b74794db2ac1cf67491b5ce59e40cc15af6a41e381d40012114c346e60->leave($__internal_dcd4a2b74794db2ac1cf67491b5ce59e40cc15af6a41e381d40012114c346e60_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa0d29d437227328b4335fad7d692894807e69492b3d1b6694fe92761debeb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0d29d437227328b4335fad7d692894807e69492b3d1b6694fe92761debeb3b->enter($__internal_aa0d29d437227328b4335fad7d692894807e69492b3d1b6694fe92761debeb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_34d01a75c0a5f1b7d1100dbb3327e0122bf092a0e63dc784a93a3c926f74bedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d01a75c0a5f1b7d1100dbb3327e0122bf092a0e63dc784a93a3c926f74bedf->enter($__internal_34d01a75c0a5f1b7d1100dbb3327e0122bf092a0e63dc784a93a3c926f74bedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_34d01a75c0a5f1b7d1100dbb3327e0122bf092a0e63dc784a93a3c926f74bedf->leave($__internal_34d01a75c0a5f1b7d1100dbb3327e0122bf092a0e63dc784a93a3c926f74bedf_prof);

        
        $__internal_aa0d29d437227328b4335fad7d692894807e69492b3d1b6694fe92761debeb3b->leave($__internal_aa0d29d437227328b4335fad7d692894807e69492b3d1b6694fe92761debeb3b_prof);

    }

    // line 134
    public function block_modalAttestation($context, array $blocks = array())
    {
        $__internal_441aac82a05fce247960612843f195fecde8220ca0e7c022c1ae77d317c26a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441aac82a05fce247960612843f195fecde8220ca0e7c022c1ae77d317c26a17->enter($__internal_441aac82a05fce247960612843f195fecde8220ca0e7c022c1ae77d317c26a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modalAttestation"));

        $__internal_517843ddc085bcb80f8b4a63d70a35a160a74a8aa46ce9b41d7a37a5a75af550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517843ddc085bcb80f8b4a63d70a35a160a74a8aa46ce9b41d7a37a5a75af550->enter($__internal_517843ddc085bcb80f8b4a63d70a35a160a74a8aa46ce9b41d7a37a5a75af550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modalAttestation"));

        // line 135
        echo "
  ";
        
        $__internal_517843ddc085bcb80f8b4a63d70a35a160a74a8aa46ce9b41d7a37a5a75af550->leave($__internal_517843ddc085bcb80f8b4a63d70a35a160a74a8aa46ce9b41d7a37a5a75af550_prof);

        
        $__internal_441aac82a05fce247960612843f195fecde8220ca0e7c022c1ae77d317c26a17->leave($__internal_441aac82a05fce247960612843f195fecde8220ca0e7c022c1ae77d317c26a17_prof);

    }

    // line 147
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_44cd9aa144fc9503ac6e95eda370e182f780aebe6f8443875ca3b317224bd71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cd9aa144fc9503ac6e95eda370e182f780aebe6f8443875ca3b317224bd71e->enter($__internal_44cd9aa144fc9503ac6e95eda370e182f780aebe6f8443875ca3b317224bd71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        $__internal_d86dec241ecd778be9d3a919e5c033844f9b0072cc9dcf9d3c1777988c8f3a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86dec241ecd778be9d3a919e5c033844f9b0072cc9dcf9d3c1777988c8f3a40->enter($__internal_d86dec241ecd778be9d3a919e5c033844f9b0072cc9dcf9d3c1777988c8f3a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 148
        echo "
          ";
        
        $__internal_d86dec241ecd778be9d3a919e5c033844f9b0072cc9dcf9d3c1777988c8f3a40->leave($__internal_d86dec241ecd778be9d3a919e5c033844f9b0072cc9dcf9d3c1777988c8f3a40_prof);

        
        $__internal_44cd9aa144fc9503ac6e95eda370e182f780aebe6f8443875ca3b317224bd71e->leave($__internal_44cd9aa144fc9503ac6e95eda370e182f780aebe6f8443875ca3b317224bd71e_prof);

    }

    // line 185
    public function block_contentPage($context, array $blocks = array())
    {
        $__internal_7c82ac602ba260d2acd3b5a563734a545fe67d1306be870f4cc57772715117cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c82ac602ba260d2acd3b5a563734a545fe67d1306be870f4cc57772715117cd->enter($__internal_7c82ac602ba260d2acd3b5a563734a545fe67d1306be870f4cc57772715117cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        $__internal_e4747c0c4ce49ff2867c2459a645bca4f1a397d2b3eb5cbbf6e805c43f4f48ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4747c0c4ce49ff2867c2459a645bca4f1a397d2b3eb5cbbf6e805c43f4f48ca->enter($__internal_e4747c0c4ce49ff2867c2459a645bca4f1a397d2b3eb5cbbf6e805c43f4f48ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        // line 186
        echo "
                ";
        
        $__internal_e4747c0c4ce49ff2867c2459a645bca4f1a397d2b3eb5cbbf6e805c43f4f48ca->leave($__internal_e4747c0c4ce49ff2867c2459a645bca4f1a397d2b3eb5cbbf6e805c43f4f48ca_prof);

        
        $__internal_7c82ac602ba260d2acd3b5a563734a545fe67d1306be870f4cc57772715117cd->leave($__internal_7c82ac602ba260d2acd3b5a563734a545fe67d1306be870f4cc57772715117cd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 186,  473 => 185,  462 => 148,  453 => 147,  442 => 135,  433 => 134,  416 => 16,  385 => 235,  381 => 234,  377 => 233,  373 => 232,  369 => 231,  365 => 230,  361 => 229,  350 => 221,  337 => 211,  332 => 209,  327 => 207,  323 => 206,  319 => 205,  315 => 204,  311 => 203,  307 => 202,  303 => 201,  299 => 200,  295 => 199,  291 => 198,  287 => 197,  276 => 188,  274 => 185,  237 => 150,  235 => 147,  223 => 137,  221 => 134,  176 => 92,  167 => 86,  160 => 82,  154 => 79,  148 => 76,  129 => 60,  111 => 45,  106 => 43,  95 => 35,  90 => 33,  72 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\" ng-app=\"gestionScolorite\">
<head>
  <meta charset=\"utf-8\" />
  <title>Gestion Scolarité</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/assets/animate.css/animate.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/assets/font-awesome/css/font-awesome.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/jquery/waves/dist/waves.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/styles/material-design-icons.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/jquery/bootstrap/dist/css/bootstrap.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/styles/font.css')}}\"  type=\"text/css\"/>
  <link rel=\"stylesheet\" href=\"{{asset('assets/styles/app.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/scripts/angular-dataTables/dist/css/angular-datatables.min.css')}}\" type=\"text/css\" />
{% block stylesheets %}{% endblock %}
</head>
<body>
<div class=\"app\">
  <!-- aside -->
  <aside id=\"aside\" class=\"app-aside modal fade in\" role=\"menu\">
    <div class=\"left\">
      <div class=\"box bg-white\">
        <div class=\"navbar md-whiteframe-z1 no-radius blue\">
            <!-- brand -->
            <a class=\"navbar-brand\">
              <svg version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\" style=\"
                    width: 30px; height: 30px;\">
                  <!--<path d=\"M 50 0 L 100 14 L 92 80 Z\" fill=\"rgba(139, 195, 74, 0.5)\"></path>
                  <path d=\"M 92 80 L 50 0 L 50 100 Z\" fill=\"rgba(139, 195, 74, 0.8)\"></path>
                  <path d=\"M 8 80 L 50 0 L 50 100 Z\" fill=\"#f3f3f3\"></path>
                  <path d=\"M 50 0 L 8 80 L 0 14 Z\" fill=\"rgba(220, 220, 220, 0.6)\"></path>-->
                  <image xlink:href=\"{{asset('assets/images/ucad1.gif')}}\" x=\"0\" y=\"0\" height=\"100px\" width=\"100px\"/>
                </svg>
              <img src=\"{{asset('assets/images/logo.png')}}\" alt=\".\" style=\"max-height: 36px; display:none\">
              <span class=\"hidden-folded m-l inline\">Logiciel Scolarité</span>
            </a>
            <!-- / brand -->
        </div>
        <div class=\"box-row\">
          <div class=\"box-cell scrollable hover\">
            <div class=\"box-inner\">
              <div class=\"p hidden-folded blue-50\" style=\"background-image:url({{asset('assets/images/bg.png')}}); background-size:cover\">
                <div class=\"rounded w-64 bg-white inline pos-rlt\">
                  <img src=\"{{asset('assets/images/logo_ucad.png')}}\" class=\"img-responsive rounded\">
                </div>
                <a class=\"block m-t-sm\" ui-toggle-class=\"hide, show\" target=\"#nav, #account\">
                  <span class=\"block font-bold\">Username</span>
                  <span class=\"pull-right auto\">
                    <i class=\"fa inline fa-caret-down\"></i>
                    <i class=\"fa none fa-caret-up\"></i>
                  </span>
                  user.mail@mail.com
                </a>
              </div>
              <div id=\"nav\">
                <nav ui-nav>
                  <ul class=\"nav\">
                  <li>
                    <a md-ink-ripple href=\"{{path('gfs_main_homepage')}}\">
                      <i class=\"icon mdi-action-home i-20\"></i>
                      <span class=\"font-normal\">Accueil</span>
                    </a>
                  </li>
                  <li>
                    <a md-ink-ripple>
                      <span class=\"pull-right text-muted\">
                        <i class=\"fa fa-caret-down\"></i>
                      </span>
                      <i class=\"pull-right up\"></i>
                      <i class=\"icon mdi-action-trending-up i-20\"></i>
                      <span class=\"font-normal\">Statistiques</span>
                      </a>
                      <ul class=\"nav nav-sub\">
                        <li>
                          <a md-ink-ripple href=\"{{path('gfs_statistiques_addData')}}\">Ajout Étudiant</a>
                        </li>
                        <li>
                          <a md-ink-ripple href=\"{{path('gfs_statistiques_listes')}}\">Listes</a>
                        </li>
                        <li>
                           <a md-ink-ripple href=\"{{path('gfs_statistiques')}}\">Statistiques globales</a>
                        </li>
                      </ul>
                      <li>
                        <a md-ink-ripple href=\"{{path('gfs_attestation')}}\">
                          <i class=\"icon mdi-action-description i-20\"></i>
                          <span class=\"font-normal\">Document</span>
                        </a>
                      </li>
                    <li>
                      <a md-ink-ripple href=\"{{path('logout')}}\">
                        <i class=\"icon mdi-action-exit-to-app i-20\"></i>
                        <span>Se déconnecter</span>
                      </a>
                    </li>
                    </ul>
                </nav>
              </div>
              <div id=\"account\" class=\"hide m-v-xs\">
                <nav>
                  <ul class=\"nav\">
                    <li>
                      <div class=\"nav-item\" ui-toggle-class=\"folded\" target=\"#aside\">
                        <label class=\"md-check\">
                          <input type=\"checkbox\">
                          <i class=\"purple no-icon\"></i>
                          <span class=\"hidden-folded\">Folded aside</span>
                        </label>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class=\"nav b-t b\">
            <li>
              <a href=\"https://themeforest.net/item/materil-responsive-admin-dashboard-template/11062969\" target=\"_blank\" md-ink-ripple>
                <i class=\"icon mdi-action-help i-20\"></i>
                <span>Help &amp; Feedback</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
  <!-- / aside -->


  {% block modalAttestation %}

  {% endblock %}
  <!-- content -->
  <div id=\"content\" class=\"app-content\" role=\"main\">
    <div class=\"box\">
          <!-- Content Navbar -->
    <div class=\"navbar md-whiteframe-z1 no-radius blue\">
      <!-- Open side - Naviation on mobile -->
      <a md-ink-ripple  data-toggle=\"modal\" data-target=\"#aside\" class=\"navbar-item pull-left visible-xs visible-sm\"><i class=\"mdi-navigation-menu i-24\"></i></a>
      <!-- / -->
      <!-- Page title - Bind to \$state's title -->
      <div class=\"navbar-item pull-left h4\">
          {% block titlePage %}

          {% endblock %}
      </div>
      <!-- / -->
      <!-- Common tools -->
      <ul class=\"nav nav-sm navbar-tool pull-right\">
        <li>
          <a md-ink-ripple ui-toggle-class=\"show\" target=\"#search\">
            <i class=\"mdi-action-search i-24\"></i>
          </a>
        </li>
      </ul>
      <div class=\"pull-right\" ui-view=\"navbar@\"></div>
      <!-- / -->
      <!-- Search form -->
      <div id=\"search\" class=\"pos-abt w-full h-full blue hide\">
        <div class=\"box\">
          <div class=\"box-col w-56 text-center\">
            <!-- hide search form -->
            <a md-ink-ripple class=\"navbar-item inline\"  ui-toggle-class=\"show\" target=\"#search\"><i class=\"mdi-navigation-arrow-back i-24\"></i></a>
          </div>
          <div class=\"box-col v-m\">
            <!-- bind to app.search.content -->
            <input class=\"form-control input-lg no-bg no-border\" placeholder=\"Search\" ng-model=\"app.search.content\">
          </div>
          <div class=\"box-col w-56 text-center\">
            <a md-ink-ripple class=\"navbar-item inline\"><i class=\"mdi-av-mic i-24\"></i></a>
          </div>
        </div>
      </div>
      <!-- / -->
    </div>
    <!-- Content -->
      <div class=\"box-row\">
        <div class=\"box-cell\">
          <div class=\"box-inner padding\">
            <div class=\"row\">
                {% block contentPage %}

                {% endblock %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / content -->
</div>

<script src=\"{{asset('assets/libs/jquery/jquery/dist/jquery.js')}}\"></script>
<script src=\"{{asset('assets/libs/jquery/bootstrap/dist/js/bootstrap.js')}}\"></script>
<script src=\"{{asset('assets/libs/jquery/waves/dist/waves.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-load.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-jp.config.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-jp.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-nav.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-toggle.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-form.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-waves.js')}}\"></script>
<script src=\"{{asset('assets/scripts/ui-client.js')}}\"></script>

<script src=\"{{asset('assets/scripts/angular-dataTables/jquery.dataTables.min.js')}}\"></script>

<script src=\"{{asset('assets/scripts/angular.min.js')}}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/angular-google-chart/0.1.0/ng-google-chart.js\" type=\"text/javascript\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js\"></script>

<!-- Angular Material Library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js\"></script>


<script src=\"{{asset('assets/scripts/angular-dataTables/dist/angular-datatables.min.js')}}\"></script>


<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js\"></script>
<script src=\"{{asset('assets/scripts/angular-dataTables/dist/plugins/buttons/angular-datatables.buttons.min.js')}}\"></script>
<script src=\"{{asset('assets/app/Controller/html2canvas.min.js')}}\"></script>
<script src=\"{{asset('assets/app/app.js')}}\"></script>
<script src=\"{{asset('assets/app/Controller/statistiquesController.js')}}\"></script>
<script src=\"{{asset('assets/app/Controller/globalStatController.js')}}\"></script>
<script src=\"{{asset('assets/app/Controller/listeController.js')}}\"></script>
<script src=\"{{asset('assets/app/Controller/attestationController.js')}}\"></script>
<script src=\"https://code.highcharts.com/highcharts.js\"></script>
<script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js\"></script>
<script type=\"text/javascript\">
\$(document).on(\"click\", \".open-AddBookDialog\", function (e) {

    e.preventDefault();

    var _self = \$(this);

    var myBookId = _self.data('id');
    \$(\"#bookId\").val(myBookId);

    \$(_self.attr('href')).modal('show');
});
</script>
</body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\esp-projet-uml-dic1-gestion-scolarite\\app/Resources\\views/base.html.twig");
    }
}
