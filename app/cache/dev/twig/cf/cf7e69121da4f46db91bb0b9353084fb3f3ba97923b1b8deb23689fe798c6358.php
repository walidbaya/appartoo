<?php

/* UserBundle:Dashboard:modifier.html.twig */
class __TwigTemplate_994a5696cef6e83e0d9bfaedd1f1bc5fcb939e05e9395da8ca6b90d760599e24 extends Twig_Template
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
        // line 1
        echo "<html>
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css\">
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js\"></script>

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/User/js/script.js"), "html", null, true);
        echo "\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/User/css/style.css"), "html", null, true);
        echo "\">

</head>
<body>
<section>
  <header>
    <nav class=\"rad-navigation\">
      <div class=\"rad-logo-container\">
                                 <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/user/img/logo_appartoo.png", null, true), "html", null, true);
        echo "\" alt=\"appartoo\" />

        <a href=\"#\" class=\"rad-toggle-btn pull-right\"><i class=\"fa fa-bars\"></i></a>
      </div>
      <div class=\"rad-top-nav-container\">
  <ul class=\"links\">
          <li>
              Bonjour ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ess"]) ? $context["ess"] : $this->getContext($context, "ess")), "username", array()), "html", null, true);
        echo "<a class=\"rad-menu-item\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"> Se déconnecter <i class=\"fa fa-comment-o\"></i></a>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
</section>
<aside>
  <nav class=\"rad-sidebar\">
    <ul>
     
      <li>
        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_accueil");
        echo "\">
          <i class=\"fa fa-bar-chart-o\">
\t\t\t\t\t\t<span class=\"icon-bg rad-bg-danger\"></span>
\t\t\t\t\t</i>
          <span class=\"rad-sidebar-item\" style=\"font-size:12px;\">Ajouter un contact</span>
        </a>
      </li>
      <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister_contacts");
        echo "\" class=\"snooz\"><i class=\"fa fa-line-chart\"><span class=\"icon-bg rad-bg-primary\"></span></i><span class=\"rad-sidebar-item\"style=\"font-size:12px;\">Lister les contacts</span></a></li>
    </ul>
  </nav>
</aside>
<main>
  <section>
    <div class=\"rad-body-wrapper\">
      <div class=\"container-fluid\">
        <div class=\"col-lg-4 col-md-6 col-xs-12\">
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Formulaire d'enregistrement d'un nouveau contact</h3>
              </div>
              <div class=\"panel-body\"><div class=\"row\">
       <center>  <div class=\"panel-body\" >
\t\t\t    \t<form  action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier1_contact", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                    <fieldset><table>
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t<tr><td>Prénom : &nbsp; &nbsp;</td><td>
\t\t\t    \t  \t<div class=\"form-group\">
\t\t\t    \t\t    <input class=\"form-control\" name=\"prenom\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo "\" type=\"text\" required>
\t\t\t    \t\t</div></td>
\t\t\t\t\t\t<tr><td>Nom : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "\" name=\"nom\" type=\"text\" required>
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t\t<tr><td>E-mail : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\"  name=\"email\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "\" type=\"email\" ></td>
\t\t\t    \t\t</div></tr>
\t\t\t\t\t\t<tr><td>adresse : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\"  name=\"adresse\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "\" type=\"text\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                                <tr><td>Téléphone : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\"  name=\"tel\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel", array()), "html", null, true);
        echo "\" type=\"number\" maxlength=\"10\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                            
                                                <tr><td>Site Web : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" name=\"site\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "site", array()), "html", null, true);
        echo "\" type=\"url\" ></td>
\t\t\t    \t\t</div></td></tr>     

</table>
\t\t\t    \t\t<!-- <div class=\"checkbox\">
\t\t\t    \t    \t<label>
\t\t\t    \t    \t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\"> Remember Me
\t\t\t    \t    \t</label> 
\t\t\t    \t    </div>--><tr><td>
\t\t\t    \t\t<input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" name=\"submit\" value=\"Enregistrer le contact\" style=\"\"></td></tr>
\t\t\t    \t</fieldset>
\t\t\t      \t</form>
\t\t\t    </div></center> </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Dashboard:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 96,  145 => 90,  137 => 85,  130 => 81,  123 => 77,  116 => 73,  106 => 66,  88 => 51,  78 => 44,  60 => 31,  50 => 24,  39 => 16,  34 => 14,  19 => 1,);
    }

    public function getSource()
    {
        return "<html>
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css\">
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js\"></script>

<script src=\"{{asset('bundles/User/js/script.js')}}\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('bundles/User/css/style.css')}}\">

</head>
<body>
<section>
  <header>
    <nav class=\"rad-navigation\">
      <div class=\"rad-logo-container\">
                                 <img src=\"{{ asset('bundles/user/img/logo_appartoo.png', absolute=true) }}\" alt=\"appartoo\" />

        <a href=\"#\" class=\"rad-toggle-btn pull-right\"><i class=\"fa fa-bars\"></i></a>
      </div>
      <div class=\"rad-top-nav-container\">
  <ul class=\"links\">
          <li>
              Bonjour {{ess.username}}<a class=\"rad-menu-item\" href=\"{{path('fos_user_security_logout')}}\"> Se déconnecter <i class=\"fa fa-comment-o\"></i></a>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
</section>
<aside>
  <nav class=\"rad-sidebar\">
    <ul>
     
      <li>
        <a href=\"{{path('appartoo_accueil')}}\">
          <i class=\"fa fa-bar-chart-o\">
\t\t\t\t\t\t<span class=\"icon-bg rad-bg-danger\"></span>
\t\t\t\t\t</i>
          <span class=\"rad-sidebar-item\" style=\"font-size:12px;\">Ajouter un contact</span>
        </a>
      </li>
      <li><a href=\"{{path('lister_contacts')}}\" class=\"snooz\"><i class=\"fa fa-line-chart\"><span class=\"icon-bg rad-bg-primary\"></span></i><span class=\"rad-sidebar-item\"style=\"font-size:12px;\">Lister les contacts</span></a></li>
    </ul>
  </nav>
</aside>
<main>
  <section>
    <div class=\"rad-body-wrapper\">
      <div class=\"container-fluid\">
        <div class=\"col-lg-4 col-md-6 col-xs-12\">
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Formulaire d'enregistrement d'un nouveau contact</h3>
              </div>
              <div class=\"panel-body\"><div class=\"row\">
       <center>  <div class=\"panel-body\" >
\t\t\t    \t<form  action=\"{{path('modifier1_contact',{'id':contact.id})}}\" method=\"POST\">
                    <fieldset><table>
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t<tr><td>Prénom : &nbsp; &nbsp;</td><td>
\t\t\t    \t  \t<div class=\"form-group\">
\t\t\t    \t\t    <input class=\"form-control\" name=\"prenom\" value=\"{{contact.prenom}}\" type=\"text\" required>
\t\t\t    \t\t</div></td>
\t\t\t\t\t\t<tr><td>Nom : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" value=\"{{contact.nom}}\" name=\"nom\" type=\"text\" required>
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t\t<tr><td>E-mail : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\"  name=\"email\" value=\"{{contact.email}}\" type=\"email\" ></td>
\t\t\t    \t\t</div></tr>
\t\t\t\t\t\t<tr><td>adresse : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\"  name=\"adresse\" value=\"{{contact.adresse}}\" type=\"text\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                                <tr><td>Téléphone : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\"  name=\"tel\" value=\"{{contact.tel}}\" type=\"number\" maxlength=\"10\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                            
                                                <tr><td>Site Web : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" name=\"site\" value=\"{{contact.site}}\" type=\"url\" ></td>
\t\t\t    \t\t</div></td></tr>     

</table>
\t\t\t    \t\t<!-- <div class=\"checkbox\">
\t\t\t    \t    \t<label>
\t\t\t    \t    \t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\"> Remember Me
\t\t\t    \t    \t</label> 
\t\t\t    \t    </div>--><tr><td>
\t\t\t    \t\t<input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" name=\"submit\" value=\"Enregistrer le contact\" style=\"\"></td></tr>
\t\t\t    \t</fieldset>
\t\t\t      \t</form>
\t\t\t    </div></center> </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
</body>
</html>";
    }
}
