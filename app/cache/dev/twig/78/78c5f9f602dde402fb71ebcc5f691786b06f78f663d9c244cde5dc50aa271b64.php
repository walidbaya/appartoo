<?php

/* UserBundle:Dashboard:index_add.html.twig */
class __TwigTemplate_a68021bd7f03050af686f6309e0bc2c174810cda50f49b3cd983bfe4e4c5c0ee extends Twig_Template
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
            <a class=\"rad-menu-item\" href=\"#\"><i class=\"fa fa-comment-o\"></i></a>
          </li>
          <li class=\"rad-dropdown\"><a class=\"rad-menu-item\" href=\"#\"><i class=\"fa fa-envelope-o\"><span class=\"rad-menu-badge\">3</span></i></a>
            <ul class=\"rad-dropmenu-item\">
              <li class=\"rad-dropmenu-header\"><a href=\"#\">Your Notifications</a></li>
              <li class=\"rad-notification-item\">
                <a class=\"rad-notification-content\" href=\"#\">

                </a>
              </li>
              <li class=\"rad-dropmenu-footer\"><a href=\"#\">See all notifications</a></li>
            </ul>
          </li>
          <li class=\"rad-dropdown\"><a class=\"rad-menu-item\" href=\"#\"><i class=\"fa fa-bell-o\"><span class=\"rad-menu-badge\">49</span></i></a>
            <ul class=\"rad-dropmenu-item\">
              <li class=\"rad-dropmenu-header\"><a href=\"#\">Your Alerts</a></li>
              <li class=\"rad-notification-item\">
                <a class=\"rad-notification-content\" href=\"#\">

                </a>
              </li>
              <li class=\"rad-dropmenu-footer\"><a href=\"#\">See all alerts</a></li>
            </ul>
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
        <a href=\"formulairevehicule.php\">
          <i class=\"fa fa-bar-chart-o\">
\t\t\t\t\t\t<span class=\"icon-bg rad-bg-danger\"></span>
\t\t\t\t\t</i>
          <span class=\"rad-sidebar-item\" style=\"font-size:12px;\">Ajouter un contact</span>
        </a>
      </li>
      <li><a href=\"\" class=\"snooz\"><i class=\"fa fa-line-chart\"><span class=\"icon-bg rad-bg-primary\"></span></i><span class=\"rad-sidebar-item\"style=\"font-size:12px;\">Lister les contacts</span></a></li>
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
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_contact");
        echo "\" method=\"POST\">
                    <fieldset><table>
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t<tr><td>Prénom : &nbsp; &nbsp;</td><td>
\t\t\t    \t  \t<div class=\"form-group\">
\t\t\t    \t\t    <input class=\"form-control\" placeholder=\"Julie\" name=\"prenom\" type=\"text\" required>
\t\t\t    \t\t</div></td>
\t\t\t\t\t\t<tr><td>Nom : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" placeholder=\"jcp\" name=\"nom\" type=\"text\" required>
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t\t<tr><td>E-mail : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"julie.jcp@appartoo.com\" name=\"email\" type=\"email\" required></td>
\t\t\t    \t\t</div></tr>
\t\t\t\t\t\t<tr><td>adresse : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" placeholder=\"176 avenue Charles de Gaulles\" name=\"adresse\" type=\"text\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                                <tr><td>Téléphone : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"0692200920\" name=\"tel\" type=\"number\" maxlength=\"10\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                            
                                                <tr><td>Site Web : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"www.appartoo.com\" name=\"site\" type=\"url\" ></td>
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
        return "UserBundle:Dashboard:index_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 87,  50 => 24,  39 => 16,  34 => 14,  19 => 1,);
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
            <a class=\"rad-menu-item\" href=\"#\"><i class=\"fa fa-comment-o\"></i></a>
          </li>
          <li class=\"rad-dropdown\"><a class=\"rad-menu-item\" href=\"#\"><i class=\"fa fa-envelope-o\"><span class=\"rad-menu-badge\">3</span></i></a>
            <ul class=\"rad-dropmenu-item\">
              <li class=\"rad-dropmenu-header\"><a href=\"#\">Your Notifications</a></li>
              <li class=\"rad-notification-item\">
                <a class=\"rad-notification-content\" href=\"#\">

                </a>
              </li>
              <li class=\"rad-dropmenu-footer\"><a href=\"#\">See all notifications</a></li>
            </ul>
          </li>
          <li class=\"rad-dropdown\"><a class=\"rad-menu-item\" href=\"#\"><i class=\"fa fa-bell-o\"><span class=\"rad-menu-badge\">49</span></i></a>
            <ul class=\"rad-dropmenu-item\">
              <li class=\"rad-dropmenu-header\"><a href=\"#\">Your Alerts</a></li>
              <li class=\"rad-notification-item\">
                <a class=\"rad-notification-content\" href=\"#\">

                </a>
              </li>
              <li class=\"rad-dropmenu-footer\"><a href=\"#\">See all alerts</a></li>
            </ul>
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
        <a href=\"formulairevehicule.php\">
          <i class=\"fa fa-bar-chart-o\">
\t\t\t\t\t\t<span class=\"icon-bg rad-bg-danger\"></span>
\t\t\t\t\t</i>
          <span class=\"rad-sidebar-item\" style=\"font-size:12px;\">Ajouter un contact</span>
        </a>
      </li>
      <li><a href=\"\" class=\"snooz\"><i class=\"fa fa-line-chart\"><span class=\"icon-bg rad-bg-primary\"></span></i><span class=\"rad-sidebar-item\"style=\"font-size:12px;\">Lister les contacts</span></a></li>
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
\t\t\t    \t<form  action=\"{{path('ajout_contact')}}\" method=\"POST\">
                    <fieldset><table>
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t<tr><td>Prénom : &nbsp; &nbsp;</td><td>
\t\t\t    \t  \t<div class=\"form-group\">
\t\t\t    \t\t    <input class=\"form-control\" placeholder=\"Julie\" name=\"prenom\" type=\"text\" required>
\t\t\t    \t\t</div></td>
\t\t\t\t\t\t<tr><td>Nom : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" placeholder=\"jcp\" name=\"nom\" type=\"text\" required>
\t\t\t    \t\t</div></td></tr>
\t\t\t\t\t\t\t<tr><td>E-mail : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"julie.jcp@appartoo.com\" name=\"email\" type=\"email\" required></td>
\t\t\t    \t\t</div></tr>
\t\t\t\t\t\t<tr><td>adresse : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" placeholder=\"176 avenue Charles de Gaulles\" name=\"adresse\" type=\"text\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                                <tr><td>Téléphone : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"0692200920\" name=\"tel\" type=\"number\" maxlength=\"10\" ></td>
\t\t\t    \t\t</div></td></tr>
                                                
                                            
                                                <tr><td>Site Web : &nbsp;&nbsp;</td><td>
\t\t\t    \t\t<div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"www.appartoo.com\" name=\"site\" type=\"url\" ></td>
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
