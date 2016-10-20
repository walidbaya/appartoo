<?php

/* UserBundle:Dashboard:liste.html.twig */
class __TwigTemplate_148d6d6b5dfa0e207ea01c7aa446cb602c8312696d1da52cb266278c1474adfb extends Twig_Template
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
<script src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>

<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/User/js/script.js"), "html", null, true);
        echo "\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/User/css/style.css"), "html", null, true);
        echo "\">
<style>
        \t.row{
\t\t    margin-top:40px;
\t\t    padding: 0 10px;
\t\t}
\t\t.clickable{
\t\t    cursor: pointer;   
\t\t}

\t\t.panel-heading div {
\t\t\tmargin-top: -18px;
\t\t\tfont-size: 15px;
\t\t}
\t\t.panel-heading div span{
\t\t\tmargin-left:5px;
\t\t}
\t\t.panel-body{
\t\t\tdisplay: none;
\t\t}
</style>
</head>
<body>
<section>
  <header>
    <nav class=\"rad-navigation\">
      <div class=\"rad-logo-container\">
                                 <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/user/img/logo_appartoo.png", null, true), "html", null, true);
        echo "\" alt=\"appartoo\" />

        <a href=\"#\" class=\"rad-toggle-btn pull-right\"><i class=\"fa fa-bars\"></i></a>
      </div>
      <div class=\"rad-top-nav-container\">
        <ul class=\"links\">
          <li>
              Bonjour ";
        // line 52
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_accueil");
        echo "\">
          <i class=\"fa fa-bar-chart-o\">
\t\t\t\t\t\t<span class=\"icon-bg rad-bg-danger\"></span>
\t\t\t\t\t</i>
          <span class=\"rad-sidebar-item\" style=\"font-size:12px;\">Ajouter un contact</span>
        </a>
      </li>
      <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister_contacts");
        echo "\" class=\"snooz\"><i class=\"fa fa-line-chart\"><span class=\"icon-bg rad-bg-primary\"></span></i><span class=\"rad-sidebar-item\"style=\"font-size:12px;\">Lister les contacts</span></a></li>
    </ul>
  </nav>
</aside>
<main>
  <section>
       <center>
    <div class=\"rad-body-wrapper\">
     
       
           
              
      
                      
                      
                  <div class=\"container\">
 
                     
 <div class=\"row\" style=\"width:600px;\">
        <div class=\"panel panel-primary filterable\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Liste de contacts</h3>
                <div class=\"pull-right\">
                    <button class=\"btn btn-default btn-xs btn-filter\"><span class=\"glyphicon glyphicon-filter\"></span> Filtrer</button>
                </div>
            </div>
    <table class=\"table\" cellspacing=\"0\">
           
      <tr>
            <thead>
                    <tr class=\"filters\">
                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" disabled></th>
                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Nom\" disabled></th>
                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Adresse\" disabled></th>
                         <th><em class=\"fa fa-cog\"></em></th>
                    </tr>
                </thead>
     
       ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["contact"]);
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            echo " 

      </tr>
      <tr>
        <td contenteditable=\"true\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo "</td>
        <td contenteditable=\"true\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "</td>
         
        <td contenteditable=\"true\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
     
        <td align='center' >
                             <table><tr> <td><form method=\"post\" action=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\" ><button class='btn btn-default' ><em class='fa fa-pencil'></em></button></form>&nbsp;&nbsp;</td> 
                                     <td> <form method=\"post\" action=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\" ><button type=\"submit\" class='btn btn-danger'><em class='fa fa-trash'></em></button></form></td></tr></table>
                            </td>

                   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    <table><tr><td>
            
        </td> </td> </tr></table>
      
      </tr>
      <!-- This is our clonable table line -->
     
     
    </table>
  </div>
 
                      
                      
                      
                           
                      
         
        </div></center>  
      </div>  
    </div>
  </section>
</main>
    
     <script>
        var \$TABLE = \$('#table');
var \$BTN = \$('#export-btn');
var \$EXPORT = \$('#export');

\$('.table-add').click(function () {
  var \$clone = \$TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  \$TABLE.find('table').append(\$clone);
});

\$('.table-remove').click(function () {
  \$(this).parents('tr').detach();
});

\$('.table-up').click(function () {
  var \$row = \$(this).parents('tr');
  if (\$row.index() === 1) return; // Don't go above the header
  \$row.prev().before(\$row.get(0));
});

\$('.table-down').click(function () {
  var \$row = \$(this).parents('tr');
  \$row.next().after(\$row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

\$BTN.click(function () {
  var \$rows = \$TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  \$(\$rows.shift()).find('th:not(:empty)').each(function () {
    headers.push(\$(this).text().toLowerCase());
  });
  
  // Turn all existing rows into a loopable array
  \$rows.each(function () {
    var \$td = \$(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = \$td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  \$EXPORT.text(JSON.stringify(data));
});
        
        
    </script>
    
    <script type=\"text/javascript\">
    \$(document).ready(function(){
    \$('.filterable .btn-filter').click(function(){
        var \$panel = \$(this).parents('.filterable'),
        \$filters = \$panel.find('.filters input'),
        \$tbody = \$panel.find('.table tbody');
        if (\$filters.prop('disabled') == true) {
            \$filters.prop('disabled', false);
            \$filters.first().focus();
        } else {
            \$filters.val('').prop('disabled', true);
            \$tbody.find('.no-result').remove();
            \$tbody.find('tr').show();
        }
    });

    \$('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var \$input = \$(this),
        inputContent = \$input.val().toLowerCase(),
        \$panel = \$input.parents('.filterable'),
        column = \$panel.find('.filters th').index(\$input.parents('th')),
        \$table = \$panel.find('.table'),
        \$rows = \$table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var \$filteredRows = \$rows.filter(function(){
            var value = \$(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        \$table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        \$rows.show();
        \$filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if (\$filteredRows.length === \$rows.length) {
            \$table.find('tbody').prepend(\$('<tr class=\"no-result text-center\"><td colspan=\"'+ \$table.find('.filters th').length +'\">No result found</td></tr>'));
        }
    });
});
</script>

    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Dashboard:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 126,  178 => 121,  174 => 120,  168 => 117,  163 => 115,  159 => 114,  150 => 110,  109 => 72,  99 => 65,  81 => 52,  71 => 45,  41 => 18,  36 => 16,  19 => 1,);
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
<script src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>

<script src=\"{{asset('bundles/User/js/script.js')}}\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('bundles/User/css/style.css')}}\">
<style>
        \t.row{
\t\t    margin-top:40px;
\t\t    padding: 0 10px;
\t\t}
\t\t.clickable{
\t\t    cursor: pointer;   
\t\t}

\t\t.panel-heading div {
\t\t\tmargin-top: -18px;
\t\t\tfont-size: 15px;
\t\t}
\t\t.panel-heading div span{
\t\t\tmargin-left:5px;
\t\t}
\t\t.panel-body{
\t\t\tdisplay: none;
\t\t}
</style>
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
       <center>
    <div class=\"rad-body-wrapper\">
     
       
           
              
      
                      
                      
                  <div class=\"container\">
 
                     
 <div class=\"row\" style=\"width:600px;\">
        <div class=\"panel panel-primary filterable\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Liste de contacts</h3>
                <div class=\"pull-right\">
                    <button class=\"btn btn-default btn-xs btn-filter\"><span class=\"glyphicon glyphicon-filter\"></span> Filtrer</button>
                </div>
            </div>
    <table class=\"table\" cellspacing=\"0\">
           
      <tr>
            <thead>
                    <tr class=\"filters\">
                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" disabled></th>
                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Nom\" disabled></th>
                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Adresse\" disabled></th>
                         <th><em class=\"fa fa-cog\"></em></th>
                    </tr>
                </thead>
     
       {% for contact in contact %} 

      </tr>
      <tr>
        <td contenteditable=\"true\">{{contact.prenom}}</td>
        <td contenteditable=\"true\">{{contact.nom}}</td>
         
        <td contenteditable=\"true\">{{contact.email}}</td>
     
        <td align='center' >
                             <table><tr> <td><form method=\"post\" action=\"{{path('modifier_contact',{'id':contact.id})}}\" ><button class='btn btn-default' ><em class='fa fa-pencil'></em></button></form>&nbsp;&nbsp;</td> 
                                     <td> <form method=\"post\" action=\"{{path('supprimer_contact',{'id':contact.id})}}\" ><button type=\"submit\" class='btn btn-danger'><em class='fa fa-trash'></em></button></form></td></tr></table>
                            </td>

                   
{% endfor%}
    <table><tr><td>
            
        </td> </td> </tr></table>
      
      </tr>
      <!-- This is our clonable table line -->
     
     
    </table>
  </div>
 
                      
                      
                      
                           
                      
         
        </div></center>  
      </div>  
    </div>
  </section>
</main>
    
     <script>
        var \$TABLE = \$('#table');
var \$BTN = \$('#export-btn');
var \$EXPORT = \$('#export');

\$('.table-add').click(function () {
  var \$clone = \$TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  \$TABLE.find('table').append(\$clone);
});

\$('.table-remove').click(function () {
  \$(this).parents('tr').detach();
});

\$('.table-up').click(function () {
  var \$row = \$(this).parents('tr');
  if (\$row.index() === 1) return; // Don't go above the header
  \$row.prev().before(\$row.get(0));
});

\$('.table-down').click(function () {
  var \$row = \$(this).parents('tr');
  \$row.next().after(\$row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

\$BTN.click(function () {
  var \$rows = \$TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  \$(\$rows.shift()).find('th:not(:empty)').each(function () {
    headers.push(\$(this).text().toLowerCase());
  });
  
  // Turn all existing rows into a loopable array
  \$rows.each(function () {
    var \$td = \$(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = \$td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  \$EXPORT.text(JSON.stringify(data));
});
        
        
    </script>
    
    <script type=\"text/javascript\">
    \$(document).ready(function(){
    \$('.filterable .btn-filter').click(function(){
        var \$panel = \$(this).parents('.filterable'),
        \$filters = \$panel.find('.filters input'),
        \$tbody = \$panel.find('.table tbody');
        if (\$filters.prop('disabled') == true) {
            \$filters.prop('disabled', false);
            \$filters.first().focus();
        } else {
            \$filters.val('').prop('disabled', true);
            \$tbody.find('.no-result').remove();
            \$tbody.find('tr').show();
        }
    });

    \$('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var \$input = \$(this),
        inputContent = \$input.val().toLowerCase(),
        \$panel = \$input.parents('.filterable'),
        column = \$panel.find('.filters th').index(\$input.parents('th')),
        \$table = \$panel.find('.table'),
        \$rows = \$table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var \$filteredRows = \$rows.filter(function(){
            var value = \$(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        \$table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        \$rows.show();
        \$filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if (\$filteredRows.length === \$rows.length) {
            \$table.find('tbody').prepend(\$('<tr class=\"no-result text-center\"><td colspan=\"'+ \$table.find('.filters th').length +'\">No result found</td></tr>'));
        }
    });
});
</script>

    
</body>
</html>";
    }
}
