<?php

/* GFSMainBundle::login.html.twig */
class __TwigTemplate_2d82971de2668736f7c44c9a5a963f82a9ff10e781606df205ab48908f4a38d5 extends Twig_Template
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
        $__internal_12077d1ba329f07780683aa1c4ff658ca6bc53b53d08c0884e793f26d43e561f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12077d1ba329f07780683aa1c4ff658ca6bc53b53d08c0884e793f26d43e561f->enter($__internal_12077d1ba329f07780683aa1c4ff658ca6bc53b53d08c0884e793f26d43e561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSMainBundle::login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\" />
  <title>ESP | Ecole Superireur Polytechnique</title>
  <meta name=\"description\" content=\"app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  <!--
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/assets/animate.css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/waves/dist/waves.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/material-design-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" />

  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/font.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/app.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  -->
  <style>
     *{ box-sizing:border-box; }

    body {
      margin-top:6%;
      margin-right:45%;
    \tfont-family: Helvetica;
    \tbackground: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/body.jpg"), "html", null, true);
        echo ");
      -webkit-font-smoothing: antialiased;
    }
    
    hgroup { 
    \ttext-align:center;
    \tmargin-top: 4em;
    }
    
    h1, h3 { font-weight: 300; }
    
    h1 { color: #636363; }
    
    h3 { color: #4a89dc; }
    
    form {
    \twidth: 400px;
    \tmargin: 4em auto;
    \tpadding: 3em 2em 2em 2em;
    \tbackground: #fafafa;
    \tborder: 1px solid #ebebeb;
    \tbox-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
    }
    
    .group { 
    \tposition: relative; 
    \tmargin-bottom: 45px; 
    }
    
    input {
    \tfont-size: 18px;
    \tpadding: 10px 10px 10px 5px;
    \t-webkit-appearance: none;
    \tdisplay: block;
    \tbackground: #fafafa;
    \tcolor: #636363;
    \twidth: 100%;
    \tborder: none;
    \tborder-radius: 0;
    \tborder-bottom: 1px solid #757575;
    }
    
    input:focus { outline: none; }
    
    
    /* Label */
    
    label {
    \tcolor: #999; 
    \tfont-size: 18px;
    \tfont-weight: normal;
    \tposition: absolute;
    \tpointer-events: none;
    \tleft: 5px;
    \ttop: 10px;
    \ttransition: all 0.2s ease;
    }
    
    
    /* active */
    
    input:focus ~ label, input.used ~ label {
    \ttop: -20px;
      transform: scale(.75); left: -2px;
    \t/* font-size: 14px; */
    \tcolor: #4a89dc;
    }
    
    
    /* Underline */
    
    .bar {
    \tposition: relative;
    \tdisplay: block;
    \twidth: 100%;
    }
    
    .bar:before, .bar:after {
    \tcontent: '';
    \theight: 2px; 
    \twidth: 0;
    \tbottom: 1px; 
    \tposition: absolute;
    \tbackground: #4a89dc; 
    \ttransition: all 0.2s ease;
    }
    
    .bar:before { left: 50%; }
    
    .bar:after { right: 50%; }
    
    
    /* active */
    
    input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }
    
    
    /* Highlight */
    
    .highlight {
    \tposition: absolute;
    \theight: 60%; 
    \twidth: 100px; 
    \ttop: 25%; 
    \tleft: 0;
    \tpointer-events: none;
    \topacity: 0.5;
    }
    
    
    /* active */
    
    input:focus ~ .highlight {
    \tanimation: inputHighlighter 0.3s ease;
    }
    
    
    /* Animations */
    
    @keyframes inputHighlighter {
    \tfrom { background: #4a89dc; }
    \tto \t{ width: 0; background: transparent; }
    }
    
    
    /* Button */
    
    .button {
      position: relative;
      display: inline-block;
      padding: 12px 24px;
      margin: .3em 0 1em 0;
      width: 100%;
      vertical-align: middle;
      color: #fff;
      font-size: 16px;
      line-height: 20px;
      -webkit-font-smoothing: antialiased;
      text-align: center;
      letter-spacing: 1px;
      background: transparent;
      border: 0;
      border-bottom: 2px solid #3160B6;
      cursor: pointer;
      transition: all 0.15s ease;
    }
    .button:focus { outline: 0; }
    
    
    /* Button modifiers */
    
    .buttonBlue {
      background: #4a89dc;
      text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
    }
    
    .buttonBlue:hover { background: #357bd8; }
    
    
    /* Ripples container */
    
    .ripples {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background: transparent;
    }
    
    
    /* Ripples circle */
    
    .ripplesCircle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.25);
    }
    
    .ripples.is-active .ripplesCircle {
      animation: ripples .4s ease-in;
    }
    
    
    /* Ripples animation */
    
    @keyframes ripples {
      0% { opacity: 0; }
    
      25% { opacity: 1; }
    
      100% {
        width: 200%;
        padding-bottom: 200%;
        opacity: 0;
      }
    }
    
    footer { text-align: center; }
    
    footer p {
    \tcolor: #888;
    \tfont-size: 13px;
    \tletter-spacing: .4px;
    }
    
    footer a {
    \tcolor: #4a89dc;
    \ttext-decoration: none;
    \ttransition: all .2s ease;
    }
    
    footer a:hover {
    \tcolor: #666;
    \ttext-decoration: underline;
    }
    
    footer img {
    \twidth: 80px;
    \ttransition: all .2s ease;
    }
    
    footer img:hover { opacity: .83; }
    
    footer img:focus , footer a:focus { outline: none; }

  </style>
  
</head>
<body>
  
  <hgroup>
    <h1>Connecter vous !</h1>
  </hgroup>
  ";
        // line 266
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 267
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 269
        echo "  <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">
    <div class=\"group\">
      <input type=\"text\" id=\"username\"value=\"";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) ? $context["lastUsername"] : $this->getContext($context, "lastUsername")), "html", null, true);
        echo "\"  name=\"_username\"><span class=\"highlight\"></span><span class=\"bar\"></span>
      <label>Votre adresse mail</label>
    </div>
    <div class=\"group\">
      <input id=\"password\" type=\"password\" name=\"_password\"><span class=\"highlight\"></span><span class=\"bar\"></span>
      <label>Mot de passe</label>
    </div>
    <button type=\"submit\" class=\"button buttonBlue\">Se connecter
      <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
    </button>
  </form>
  <footer><a href=\"#\" target=\"_blank\"><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logoEsp.png"), "html", null, true);
        echo "\" style=\"width:20%;\"></a>
  </footer>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    \$(window, document, undefined).ready(function() {
  
    \$('input').blur(function() {
      var \$this = \$(this);
      if (\$this.val())
        \$this.addClass('used');
      else
        \$this.removeClass('used');
    });
  
    var \$ripples = \$('.ripples');
  
    \$ripples.on('click.Ripples', function(e) {
  
      var \$this = \$(this);
      var \$offset = \$this.parent().offset();
      var \$circle = \$this.find('.ripplesCircle');
  
      var x = e.pageX - \$offset.left;
      var y = e.pageY - \$offset.top;
  
      \$circle.css({
        top: y + 'px',
        left: x + 'px'
      });
  
      \$this.addClass('is-active');
  
    });
  
    \$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    \t\$(this).removeClass('is-active');
    });
  
  });
</script>

</body>
</html>
";
        
        $__internal_12077d1ba329f07780683aa1c4ff658ca6bc53b53d08c0884e793f26d43e561f->leave($__internal_12077d1ba329f07780683aa1c4ff658ca6bc53b53d08c0884e793f26d43e561f_prof);

    }

    public function getTemplateName()
    {
        return "GFSMainBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 282,  327 => 271,  321 => 269,  315 => 267,  313 => 266,  69 => 25,  57 => 16,  53 => 15,  49 => 14,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\" />
  <title>ESP | Ecole Superireur Polytechnique</title>
  <meta name=\"description\" content=\"app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  <!--
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/assets/animate.css/animate.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/assets/font-awesome/css/font-awesome.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/jquery/waves/dist/waves.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/styles/material-design-icons.css')}}\" type=\"text/css\" />

  <link rel=\"stylesheet\" href=\"{{asset('assets/libs/jquery/bootstrap/dist/css/bootstrap.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/styles/font.css')}}\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/styles/app.css')}}\" type=\"text/css\" />
  -->
  <style>
     *{ box-sizing:border-box; }

    body {
      margin-top:6%;
      margin-right:45%;
    \tfont-family: Helvetica;
    \tbackground: url({{asset('assets/images/body.jpg')}});
      -webkit-font-smoothing: antialiased;
    }
    
    hgroup { 
    \ttext-align:center;
    \tmargin-top: 4em;
    }
    
    h1, h3 { font-weight: 300; }
    
    h1 { color: #636363; }
    
    h3 { color: #4a89dc; }
    
    form {
    \twidth: 400px;
    \tmargin: 4em auto;
    \tpadding: 3em 2em 2em 2em;
    \tbackground: #fafafa;
    \tborder: 1px solid #ebebeb;
    \tbox-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
    }
    
    .group { 
    \tposition: relative; 
    \tmargin-bottom: 45px; 
    }
    
    input {
    \tfont-size: 18px;
    \tpadding: 10px 10px 10px 5px;
    \t-webkit-appearance: none;
    \tdisplay: block;
    \tbackground: #fafafa;
    \tcolor: #636363;
    \twidth: 100%;
    \tborder: none;
    \tborder-radius: 0;
    \tborder-bottom: 1px solid #757575;
    }
    
    input:focus { outline: none; }
    
    
    /* Label */
    
    label {
    \tcolor: #999; 
    \tfont-size: 18px;
    \tfont-weight: normal;
    \tposition: absolute;
    \tpointer-events: none;
    \tleft: 5px;
    \ttop: 10px;
    \ttransition: all 0.2s ease;
    }
    
    
    /* active */
    
    input:focus ~ label, input.used ~ label {
    \ttop: -20px;
      transform: scale(.75); left: -2px;
    \t/* font-size: 14px; */
    \tcolor: #4a89dc;
    }
    
    
    /* Underline */
    
    .bar {
    \tposition: relative;
    \tdisplay: block;
    \twidth: 100%;
    }
    
    .bar:before, .bar:after {
    \tcontent: '';
    \theight: 2px; 
    \twidth: 0;
    \tbottom: 1px; 
    \tposition: absolute;
    \tbackground: #4a89dc; 
    \ttransition: all 0.2s ease;
    }
    
    .bar:before { left: 50%; }
    
    .bar:after { right: 50%; }
    
    
    /* active */
    
    input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }
    
    
    /* Highlight */
    
    .highlight {
    \tposition: absolute;
    \theight: 60%; 
    \twidth: 100px; 
    \ttop: 25%; 
    \tleft: 0;
    \tpointer-events: none;
    \topacity: 0.5;
    }
    
    
    /* active */
    
    input:focus ~ .highlight {
    \tanimation: inputHighlighter 0.3s ease;
    }
    
    
    /* Animations */
    
    @keyframes inputHighlighter {
    \tfrom { background: #4a89dc; }
    \tto \t{ width: 0; background: transparent; }
    }
    
    
    /* Button */
    
    .button {
      position: relative;
      display: inline-block;
      padding: 12px 24px;
      margin: .3em 0 1em 0;
      width: 100%;
      vertical-align: middle;
      color: #fff;
      font-size: 16px;
      line-height: 20px;
      -webkit-font-smoothing: antialiased;
      text-align: center;
      letter-spacing: 1px;
      background: transparent;
      border: 0;
      border-bottom: 2px solid #3160B6;
      cursor: pointer;
      transition: all 0.15s ease;
    }
    .button:focus { outline: 0; }
    
    
    /* Button modifiers */
    
    .buttonBlue {
      background: #4a89dc;
      text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
    }
    
    .buttonBlue:hover { background: #357bd8; }
    
    
    /* Ripples container */
    
    .ripples {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background: transparent;
    }
    
    
    /* Ripples circle */
    
    .ripplesCircle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.25);
    }
    
    .ripples.is-active .ripplesCircle {
      animation: ripples .4s ease-in;
    }
    
    
    /* Ripples animation */
    
    @keyframes ripples {
      0% { opacity: 0; }
    
      25% { opacity: 1; }
    
      100% {
        width: 200%;
        padding-bottom: 200%;
        opacity: 0;
      }
    }
    
    footer { text-align: center; }
    
    footer p {
    \tcolor: #888;
    \tfont-size: 13px;
    \tletter-spacing: .4px;
    }
    
    footer a {
    \tcolor: #4a89dc;
    \ttext-decoration: none;
    \ttransition: all .2s ease;
    }
    
    footer a:hover {
    \tcolor: #666;
    \ttext-decoration: underline;
    }
    
    footer img {
    \twidth: 80px;
    \ttransition: all .2s ease;
    }
    
    footer img:hover { opacity: .83; }
    
    footer img:focus , footer a:focus { outline: none; }

  </style>
  
</head>
<body>
  
  <hgroup>
    <h1>Connecter vous !</h1>
  </hgroup>
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}
  <form action=\"{{path('login_check')}}\" method=\"POST\">
    <div class=\"group\">
      <input type=\"text\" id=\"username\"value=\"{{lastUsername}}\"  name=\"_username\"><span class=\"highlight\"></span><span class=\"bar\"></span>
      <label>Votre adresse mail</label>
    </div>
    <div class=\"group\">
      <input id=\"password\" type=\"password\" name=\"_password\"><span class=\"highlight\"></span><span class=\"bar\"></span>
      <label>Mot de passe</label>
    </div>
    <button type=\"submit\" class=\"button buttonBlue\">Se connecter
      <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
    </button>
  </form>
  <footer><a href=\"#\" target=\"_blank\"><img src=\"{{asset('assets/images/logoEsp.png')}}\" style=\"width:20%;\"></a>
  </footer>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    \$(window, document, undefined).ready(function() {
  
    \$('input').blur(function() {
      var \$this = \$(this);
      if (\$this.val())
        \$this.addClass('used');
      else
        \$this.removeClass('used');
    });
  
    var \$ripples = \$('.ripples');
  
    \$ripples.on('click.Ripples', function(e) {
  
      var \$this = \$(this);
      var \$offset = \$this.parent().offset();
      var \$circle = \$this.find('.ripplesCircle');
  
      var x = e.pageX - \$offset.left;
      var y = e.pageY - \$offset.top;
  
      \$circle.css({
        top: y + 'px',
        left: x + 'px'
      });
  
      \$this.addClass('is-active');
  
    });
  
    \$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    \t\$(this).removeClass('is-active');
    });
  
  });
</script>

</body>
</html>
", "GFSMainBundle::login.html.twig", "C:\\Users\\BassehostDroid\\Documents\\Projets\\Projet-uml\\var\\cache\\prod/../../../src/GFS/MainBundle/Resources/views/login.html.twig");
    }
}
