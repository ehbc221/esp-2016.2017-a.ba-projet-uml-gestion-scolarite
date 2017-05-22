<?php

/* ::base.html.twig */
class __TwigTemplate_50d9c558a0d0ef3530ba4f76fba3bdb942b3d6af5743d8cc4e220a14fc86281d extends Twig_Template
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
        $__internal_a992aaaed222c3a8aea860eefa38cc7d61033c2fa440677e838ff2acee82f22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a992aaaed222c3a8aea860eefa38cc7d61033c2fa440677e838ff2acee82f22c->enter($__internal_a992aaaed222c3a8aea860eefa38cc7d61033c2fa440677e838ff2acee82f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bde75d28b2177db61fd3beebff21dd6e2359a1cd1a1ebe8d882559391bdfc3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde75d28b2177db61fd3beebff21dd6e2359a1cd1a1ebe8d882559391bdfc3ee->enter($__internal_bde75d28b2177db61fd3beebff21dd6e2359a1cd1a1ebe8d882559391bdfc3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a992aaaed222c3a8aea860eefa38cc7d61033c2fa440677e838ff2acee82f22c->leave($__internal_a992aaaed222c3a8aea860eefa38cc7d61033c2fa440677e838ff2acee82f22c_prof);

        
        $__internal_bde75d28b2177db61fd3beebff21dd6e2359a1cd1a1ebe8d882559391bdfc3ee->leave($__internal_bde75d28b2177db61fd3beebff21dd6e2359a1cd1a1ebe8d882559391bdfc3ee_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b715b4ac91ad44c53c3c22f63b472422411516ee9341b935d1d3834d66fe720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b715b4ac91ad44c53c3c22f63b472422411516ee9341b935d1d3834d66fe720->enter($__internal_6b715b4ac91ad44c53c3c22f63b472422411516ee9341b935d1d3834d66fe720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c912a534f0a3f76720356ebbd1e9337862b4d4442f1722a7037d749dddf03e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c912a534f0a3f76720356ebbd1e9337862b4d4442f1722a7037d749dddf03e01->enter($__internal_c912a534f0a3f76720356ebbd1e9337862b4d4442f1722a7037d749dddf03e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c912a534f0a3f76720356ebbd1e9337862b4d4442f1722a7037d749dddf03e01->leave($__internal_c912a534f0a3f76720356ebbd1e9337862b4d4442f1722a7037d749dddf03e01_prof);

        
        $__internal_6b715b4ac91ad44c53c3c22f63b472422411516ee9341b935d1d3834d66fe720->leave($__internal_6b715b4ac91ad44c53c3c22f63b472422411516ee9341b935d1d3834d66fe720_prof);

    }

    // line 134
    public function block_modalAttestation($context, array $blocks = array())
    {
        $__internal_963d0ffedcf37657f66b19e74ade8bdf99275b43b03d4868618ebd013b13761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963d0ffedcf37657f66b19e74ade8bdf99275b43b03d4868618ebd013b13761e->enter($__internal_963d0ffedcf37657f66b19e74ade8bdf99275b43b03d4868618ebd013b13761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modalAttestation"));

        $__internal_3439b71ea51ee67fc2f5e8534d320ed8919c0e93d2bd3c66928af69fda224448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3439b71ea51ee67fc2f5e8534d320ed8919c0e93d2bd3c66928af69fda224448->enter($__internal_3439b71ea51ee67fc2f5e8534d320ed8919c0e93d2bd3c66928af69fda224448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modalAttestation"));

        // line 135
        echo "
  ";
        
        $__internal_3439b71ea51ee67fc2f5e8534d320ed8919c0e93d2bd3c66928af69fda224448->leave($__internal_3439b71ea51ee67fc2f5e8534d320ed8919c0e93d2bd3c66928af69fda224448_prof);

        
        $__internal_963d0ffedcf37657f66b19e74ade8bdf99275b43b03d4868618ebd013b13761e->leave($__internal_963d0ffedcf37657f66b19e74ade8bdf99275b43b03d4868618ebd013b13761e_prof);

    }

    // line 147
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_58cb93bb018280e4cd6c42768900e9092b2acce77c9e84fc529c88c0c9e3e8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58cb93bb018280e4cd6c42768900e9092b2acce77c9e84fc529c88c0c9e3e8d8->enter($__internal_58cb93bb018280e4cd6c42768900e9092b2acce77c9e84fc529c88c0c9e3e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        $__internal_2c6c9a74ad8c09622e59a2e6a0f39a2c8bc555d29023d0117b7ea315a9a86f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6c9a74ad8c09622e59a2e6a0f39a2c8bc555d29023d0117b7ea315a9a86f2f->enter($__internal_2c6c9a74ad8c09622e59a2e6a0f39a2c8bc555d29023d0117b7ea315a9a86f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 148
        echo "
          ";
        
        $__internal_2c6c9a74ad8c09622e59a2e6a0f39a2c8bc555d29023d0117b7ea315a9a86f2f->leave($__internal_2c6c9a74ad8c09622e59a2e6a0f39a2c8bc555d29023d0117b7ea315a9a86f2f_prof);

        
        $__internal_58cb93bb018280e4cd6c42768900e9092b2acce77c9e84fc529c88c0c9e3e8d8->leave($__internal_58cb93bb018280e4cd6c42768900e9092b2acce77c9e84fc529c88c0c9e3e8d8_prof);

    }

    // line 185
    public function block_contentPage($context, array $blocks = array())
    {
        $__internal_978ffd2aa1159391f41069908cff7265bac1d6cdd6d6720a1cb040c681177c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978ffd2aa1159391f41069908cff7265bac1d6cdd6d6720a1cb040c681177c58->enter($__internal_978ffd2aa1159391f41069908cff7265bac1d6cdd6d6720a1cb040c681177c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        $__internal_7f82fd0132ff3d93fe7a1c2e438777c1d735cedb1b9e2bfafd0dd3c5322a4fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f82fd0132ff3d93fe7a1c2e438777c1d735cedb1b9e2bfafd0dd3c5322a4fa4->enter($__internal_7f82fd0132ff3d93fe7a1c2e438777c1d735cedb1b9e2bfafd0dd3c5322a4fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPage"));

        // line 186
        echo "
                ";
        
        $__internal_7f82fd0132ff3d93fe7a1c2e438777c1d735cedb1b9e2bfafd0dd3c5322a4fa4->leave($__internal_7f82fd0132ff3d93fe7a1c2e438777c1d735cedb1b9e2bfafd0dd3c5322a4fa4_prof);

        
        $__internal_978ffd2aa1159391f41069908cff7265bac1d6cdd6d6720a1cb040c681177c58->leave($__internal_978ffd2aa1159391f41069908cff7265bac1d6cdd6d6720a1cb040c681177c58_prof);

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
", "::base.html.twig", "/var/www/html/projet-uml/app/Resources/views/base.html.twig");
    }
}
