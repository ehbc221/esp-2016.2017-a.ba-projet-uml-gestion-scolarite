<?php

/* ::base.html.twig */
class __TwigTemplate_6a744839dc72f309a5551997a48c79b029db8cd769f4372a195129550179ac3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'contentPage' => array($this, 'block_contentPage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" ng-app=\"gestionScolorite\">
<head>
  <meta charset=\"utf-8\" />
  <title>Gestion scolarité </title>
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
  


  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/font.css"), "html", null, true);
        echo "\"  type=\"text/css\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/app.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/dist/css/angular-datatables.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css\">
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
              <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\" style=\"
                    width: 30px; height: 30px;\">
                  <!--<path d=\"M 50 0 L 100 14 L 92 80 Z\" fill=\"rgba(139, 195, 74, 0.5)\"></path>
                  <path d=\"M 92 80 L 50 0 L 50 100 Z\" fill=\"rgba(139, 195, 74, 0.8)\"></path>
                  <path d=\"M 8 80 L 50 0 L 50 100 Z\" fill=\"#f3f3f3\"></path>
                  <path d=\"M 50 0 L 8 80 L 0 14 Z\" fill=\"rgba(220, 220, 220, 0.6)\"></path>-->
                  <image xlink:href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/ucad1.gif"), "html", null, true);
        echo "\" x=\"0\" y=\"0\" height=\"100px\" width=\"100px\"/>
                </svg>
              <img src=\"";
        // line 38
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
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg.png"), "html", null, true);
        echo "); background-size:cover\">
                <div class=\"rounded w-64 bg-white inline pos-rlt\">
                  <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/ESP.jpg"), "html", null, true);
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
                      <a md-ink-ripple>
                        <span class=\"pull-right text-muted\">
                          <i class=\"fa fa-caret-down\"></i>
                        </span>
                        <i class=\"pull-right up\"></i>
                        <i class=\"fa fa-bar-chart\" style=\"font-size:20px;color:red\"></i>
                        <span class=\"font-normal\">Statistiques</span>
                      </a>
                      <ul class=\"nav nav-sub\">
                        <li>
                          <a md-ink-ripple href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_statistiques_addData");
        echo "\">Ajout Étudiant</a>
                        </li>
                        <li>
                          <a md-ink-ripple href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_statistiques_listes");
        echo "\">Listes</a>
                        </li>
                        <li>
                           <a md-ink-ripple href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gfs_statistiques");
        echo "\">Statistiques globales</a>
                        </li>
                      </ul>
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
              <a href=\"http://themeforest.net/item/materil-responsive-admin-dashboard-template/11062969\" target=\"_blank\" md-ink-ripple>
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
          ";
        // line 131
        $this->displayBlock('titlePage', $context, $blocks);
        // line 134
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
        // line 169
        $this->displayBlock('contentPage', $context, $blocks);
        // line 172
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / content -->
</div>

<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/waves/dist/waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-load.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-jp.config.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-jp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-nav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-toggle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/ui-client.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/angular-google-chart/0.1.0/ng-google-chart.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/dist/angular-datatables.min.js"), "html", null, true);
        echo "\"></script>


<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/angular-dataTables/dist/plugins/buttons/angular-datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/html2canvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/statistiquesController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/globalStatController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/Controller/listeController.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
    }

    // line 131
    public function block_titlePage($context, array $blocks = array())
    {
        // line 132
        echo "          
          ";
    }

    // line 169
    public function block_contentPage($context, array $blocks = array())
    {
        // line 170
        echo "          
                ";
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
        return array (  356 => 170,  353 => 169,  348 => 132,  345 => 131,  336 => 210,  332 => 209,  328 => 208,  324 => 207,  320 => 206,  316 => 205,  305 => 197,  300 => 195,  295 => 193,  290 => 191,  286 => 190,  282 => 189,  278 => 188,  274 => 187,  270 => 186,  266 => 185,  262 => 184,  258 => 183,  254 => 182,  250 => 181,  239 => 172,  237 => 169,  200 => 134,  198 => 131,  143 => 79,  137 => 76,  131 => 73,  103 => 48,  98 => 46,  87 => 38,  82 => 36,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\Users\\BassehostDroid\\Documents\\Projets\\Projet-uml\\app/Resources\\views/base.html.twig");
    }
}
