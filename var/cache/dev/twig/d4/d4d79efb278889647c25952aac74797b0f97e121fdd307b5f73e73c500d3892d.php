<?php

/* GFSattestationBundle:Attestation:attestation_reussite.html.twig */
class __TwigTemplate_6195307e83f20c94fbef17307320905517dd3a0be61c3e6ac6abc2fd91084c77 extends Twig_Template
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
        $__internal_7875a32681d4a4549953b0726a76eb49bdc6aa9474a74fc626e28f877357f5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7875a32681d4a4549953b0726a76eb49bdc6aa9474a74fc626e28f877357f5f8->enter($__internal_7875a32681d4a4549953b0726a76eb49bdc6aa9474a74fc626e28f877357f5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSattestationBundle:Attestation:attestation_reussite.html.twig"));

        $__internal_e6b8fc374aabca75f25e5b34eb745b8e4c838a76d3ceec4b2b01d9724985ab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b8fc374aabca75f25e5b34eb745b8e4c838a76d3ceec4b2b01d9724985ab41->enter($__internal_e6b8fc374aabca75f25e5b34eb745b8e4c838a76d3ceec4b2b01d9724985ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFSattestationBundle:Attestation:attestation_reussite.html.twig"));

        // line 1
        echo "
<page backtop=\"14mm\" backbottom=\"14mm\" backleft=\"10mm\" backright=\"10mm\" style=\"font-size: 12pt\">
    <page_header >
        <div id=\"entete\" style=\"width: 250px ;text-align: center\">
            <small>
                UNIVERSITE CHEIKH ANTA DIOP DE DAKAR<br><br>
                <!--<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo_ucad.png"), "html", null, true);
        echo "\" style=\"width: 80px\"><br><br>-->
                École Supérieure Polytechnique<br>
                SERVICE DE LA SCOLARITE<br>
                B.P. 5085 – DAKAR-FANN<br>
                Tel (221) 33 864 51 96 - Fax (221) 33 825 55 94<br>
                E-mail : <strong style=\"color: blue\"> scolarite.esp@ucad.edu.sn</strong><br></small>
        </div>

    </page_header>
    <page_footer>
        <p>
            <strong>N.B : </strong><i>Il n’est pas délivré de duplicata de cette attestation. <br>Il appartient au titulaire d’établir lui-même et de faire
                certifier <br>conformes par les services compétents,<br>les copies qui peuvent lui être nécessaires.</i>
        </p>
    </page_footer>
    <div class=\"container\">
        <div class=\"jumbotron\" style=\"font-size: 20px\">

            <br><br><br><br><br><br><br><br>

            <h1 style=\"background-color: #bfbfbf\"> ATTESTATION DE REUSSITE </h1>
            <p>
                Après délibération du Jury de fin de Formation en date <br><br>
                du <strong> ...... </strong><br><br>
                Mademoiselle <strong>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 31, $this->getSourceContext()); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 31, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo "</strong><br><br>
                Née le <strong> ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 32, $this->getSourceContext()); })()), "dateNaiss", array()), "d/m/Y"), "html", null, true);
        echo " </strong> à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 32, $this->getSourceContext()); })()), "paysNaiss", array()), "html", null, true);
        echo "<br><br>
                a effectué la scolarité réglementaire et satisfait aux conditions prescrites pour<br><br>
                l’obtention du <strong>DIPLÔME DE ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 34, $this->getSourceContext()); })()), "nomFormation", array()), "html", null, true);
        echo "</strong><br><br>
                Spécialité : <strong>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new Twig_Error_Runtime('Variable "etudiant" does not exist.', 35, $this->getSourceContext()); })()), "nomOption", array()), "html", null, true);
        echo "</strong><br><br>

                <strong>PROMOTION : 2016</strong><br><br>

                La présente attestation est délivrée pour servir et valoir ce que de droit.<br><br><br><br><br><br><br>


                Fait à Dakar, le <strong> ..... </strong>

            <div style=\"padding-left: 130px\">
                <strong>
                    Le Chef des Services Administratifs<br>
                </strong>
            </div>

            </p>
        </div>
    </div>
</page>
";
        
        $__internal_7875a32681d4a4549953b0726a76eb49bdc6aa9474a74fc626e28f877357f5f8->leave($__internal_7875a32681d4a4549953b0726a76eb49bdc6aa9474a74fc626e28f877357f5f8_prof);

        
        $__internal_e6b8fc374aabca75f25e5b34eb745b8e4c838a76d3ceec4b2b01d9724985ab41->leave($__internal_e6b8fc374aabca75f25e5b34eb745b8e4c838a76d3ceec4b2b01d9724985ab41_prof);

    }

    public function getTemplateName()
    {
        return "GFSattestationBundle:Attestation:attestation_reussite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  73 => 34,  66 => 32,  60 => 31,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<page backtop=\"14mm\" backbottom=\"14mm\" backleft=\"10mm\" backright=\"10mm\" style=\"font-size: 12pt\">
    <page_header >
        <div id=\"entete\" style=\"width: 250px ;text-align: center\">
            <small>
                UNIVERSITE CHEIKH ANTA DIOP DE DAKAR<br><br>
                <!--<img src=\"{{asset('assets/images/logo_ucad.png')}}\" style=\"width: 80px\"><br><br>-->
                École Supérieure Polytechnique<br>
                SERVICE DE LA SCOLARITE<br>
                B.P. 5085 – DAKAR-FANN<br>
                Tel (221) 33 864 51 96 - Fax (221) 33 825 55 94<br>
                E-mail : <strong style=\"color: blue\"> scolarite.esp@ucad.edu.sn</strong><br></small>
        </div>

    </page_header>
    <page_footer>
        <p>
            <strong>N.B : </strong><i>Il n’est pas délivré de duplicata de cette attestation. <br>Il appartient au titulaire d’établir lui-même et de faire
                certifier <br>conformes par les services compétents,<br>les copies qui peuvent lui être nécessaires.</i>
        </p>
    </page_footer>
    <div class=\"container\">
        <div class=\"jumbotron\" style=\"font-size: 20px\">

            <br><br><br><br><br><br><br><br>

            <h1 style=\"background-color: #bfbfbf\"> ATTESTATION DE REUSSITE </h1>
            <p>
                Après délibération du Jury de fin de Formation en date <br><br>
                du <strong> ...... </strong><br><br>
                Mademoiselle <strong>{{etudiant.prenom}}{{ \" \" }}{{etudiant.nom}}</strong><br><br>
                Née le <strong> {{ etudiant.dateNaiss|date(\"d/m/Y\") }} </strong> à {{etudiant.paysNaiss}}<br><br>
                a effectué la scolarité réglementaire et satisfait aux conditions prescrites pour<br><br>
                l’obtention du <strong>DIPLÔME DE {{etudiant.nomFormation}}</strong><br><br>
                Spécialité : <strong>{{etudiant.nomOption}}</strong><br><br>

                <strong>PROMOTION : 2016</strong><br><br>

                La présente attestation est délivrée pour servir et valoir ce que de droit.<br><br><br><br><br><br><br>


                Fait à Dakar, le <strong> ..... </strong>

            <div style=\"padding-left: 130px\">
                <strong>
                    Le Chef des Services Administratifs<br>
                </strong>
            </div>

            </p>
        </div>
    </div>
</page>
", "GFSattestationBundle:Attestation:attestation_reussite.html.twig", "/var/www/html/projet-uml/src/GFS/attestationBundle/Resources/views/Attestation/attestation_reussite.html.twig");
    }
}
