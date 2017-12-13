<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_37a7b2324f811c89339200cc2f6445880703659ef2d2477a1c83c93c969940f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("inicio.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 2);
        $this->blocks = array(
            'content1' => array($this, 'block_content1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23c3c8085d1c97a3536f449f40f76cefda734d6323f5fab206b679bd4d7475e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c3c8085d1c97a3536f449f40f76cefda734d6323f5fab206b679bd4d7475e8->enter($__internal_23c3c8085d1c97a3536f449f40f76cefda734d6323f5fab206b679bd4d7475e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_8760a80af30af9a8486a0a2259013ed5819dbb3148bfc8f9902f75d80d4412f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8760a80af30af9a8486a0a2259013ed5819dbb3148bfc8f9902f75d80d4412f6->enter($__internal_8760a80af30af9a8486a0a2259013ed5819dbb3148bfc8f9902f75d80d4412f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c3c8085d1c97a3536f449f40f76cefda734d6323f5fab206b679bd4d7475e8->leave($__internal_23c3c8085d1c97a3536f449f40f76cefda734d6323f5fab206b679bd4d7475e8_prof);

        
        $__internal_8760a80af30af9a8486a0a2259013ed5819dbb3148bfc8f9902f75d80d4412f6->leave($__internal_8760a80af30af9a8486a0a2259013ed5819dbb3148bfc8f9902f75d80d4412f6_prof);

    }

    // line 3
    public function block_content1($context, array $blocks = array())
    {
        $__internal_85b8e442f46d1944647980293d5d636bb32fcc033188c4fb9a123a7c87aea64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b8e442f46d1944647980293d5d636bb32fcc033188c4fb9a123a7c87aea64c->enter($__internal_85b8e442f46d1944647980293d5d636bb32fcc033188c4fb9a123a7c87aea64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        $__internal_a657e64cf66299e5bb944bbff577ae4984ba3bf2b92b78c0130249cb96897301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a657e64cf66299e5bb944bbff577ae4984ba3bf2b92b78c0130249cb96897301->enter($__internal_a657e64cf66299e5bb944bbff577ae4984ba3bf2b92b78c0130249cb96897301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 37
        echo "
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Perfil de Usuario</h3>
              </div>              
            </div>
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Usuario: <small>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                      <div class=\"profile_img\">
                        <div id=\"crop-avatar\">
                          <!-- Current avatar -->
                          <img class=\"img-responsive avatar-view\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/imagenes/user.png"), "html", null, true);
        echo "\" alt=\"Avatar\" title=\"Change the avatar\">
                        </div>
                      </div>
                      <h3>";
        // line 69
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "</h3>

                      <ul class=\"list-unstyled user_data\">
                        <li><i class=\"fa fa-envelope user-profile-icon\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
                        </li>
                        
                      </ul>

                      <a class=\"btn btn-success\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                      <br />

                      

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>Usuarios Registrados</h2>
                        </div>
                        <div class=\"col-md-6\">
                          <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                            <span>";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div class=\"table-responsive\">

                
              <table id=\"mytable\" class=\"table table-bordred table-striped\">
                   
                   <thead>
                   
                   <th><input type=\"checkbox\" id=\"checkall\" /></th>
                   <th>First Name</th>
                    <th>Last Name</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Contact</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
    
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
   
    
   
    
    </tbody>
        
</table>

<div class=\"clearfix\"></div>
<ul class=\"pagination pull-right\">
  <li class=\"disabled\"><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a></li>
  <li class=\"active\"><a href=\"#\">1</a></li>
  <li><a href=\"#\">2</a></li>
  <li><a href=\"#\">3</a></li>
  <li><a href=\"#\">4</a></li>
  <li><a href=\"#\">5</a></li>
  <li><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a></li>
</ul>
                
            </div>
            
        </div>
                          
                          <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
      </div>
          <div class=\"modal-body\">
          <div class=\"form-group\">
        <input class=\"form-control \" type=\"text\" placeholder=\"Mohsin\">
        </div>
        <div class=\"form-group\">
        
        <input class=\"form-control \" type=\"text\" placeholder=\"Irshad\">
        </div>
        <div class=\"form-group\">
        <textarea rows=\"2\" class=\"form-control\" placeholder=\"CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan\"></textarea>
    
        
        </div>
      </div>
          <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
                      <!-- end of user-activity-graph -->

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
";
        
        $__internal_a657e64cf66299e5bb944bbff577ae4984ba3bf2b92b78c0130249cb96897301->leave($__internal_a657e64cf66299e5bb944bbff577ae4984ba3bf2b92b78c0130249cb96897301_prof);

        
        $__internal_85b8e442f46d1944647980293d5d636bb32fcc033188c4fb9a123a7c87aea64c->leave($__internal_85b8e442f46d1944647980293d5d636bb32fcc033188c4fb9a123a7c87aea64c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 92,  103 => 77,  95 => 72,  89 => 69,  83 => 66,  65 => 51,  49 => 37,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{%  extends \"inicio.html.twig\" %}
{% block content1 %}
{#<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>#}
{#{% trans_default_domain 'FOSUserBundle' %}
<form class=\"form-horizontal\" role=\"form\">
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">Nombres</label>        
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">{{ user.firstName }}</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">Apellidos</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">{{ user.lastName }}</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">{{ 'profile.show.username'|trans }}</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">{{ user.username }}</p>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">{{ 'profile.show.email'|trans }}</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">{{ user.email }}</p>
        </div>
    </div>
</form>
<a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\">Editar</a>
<a class=\"btn btn-primary\" href=\"{{ path('fos_user_change_password') }}\">Cambiar contraseña</a>#}

          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Perfil de Usuario</h3>
              </div>              
            </div>
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Usuario: <small>{{app.user.username}}</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                      <div class=\"profile_img\">
                        <div id=\"crop-avatar\">
                          <!-- Current avatar -->
                          <img class=\"img-responsive avatar-view\" src=\"{{asset('public/imagenes/user.png')}}\" alt=\"Avatar\" title=\"Change the avatar\">
                        </div>
                      </div>
                      <h3>{{app.user.firstName ~ \" \" ~ app.user.lastName}}</h3>

                      <ul class=\"list-unstyled user_data\">
                        <li><i class=\"fa fa-envelope user-profile-icon\"></i> {{user.email}}
                        </li>
                        
                      </ul>

                      <a class=\"btn btn-success\" href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                      <br />

                      

                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                      <div class=\"profile_title\">
                        <div class=\"col-md-6\">
                          <h2>Usuarios Registrados</h2>
                        </div>
                        <div class=\"col-md-6\">
                          <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                            <span>{{\"now\"|date(\"d/m/Y\")}}</span> <b class=\"caret\"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div class=\"table-responsive\">

                
              <table id=\"mytable\" class=\"table table-bordred table-striped\">
                   
                   <thead>
                   
                   <th><input type=\"checkbox\" id=\"checkall\" /></th>
                   <th>First Name</th>
                    <th>Last Name</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Contact</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
    
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
    
 <tr>
    <td><input type=\"checkbox\" class=\"checkthis\" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></td>
    <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>
    </tr>
    
   
    
   
    
    </tbody>
        
</table>

<div class=\"clearfix\"></div>
<ul class=\"pagination pull-right\">
  <li class=\"disabled\"><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a></li>
  <li class=\"active\"><a href=\"#\">1</a></li>
  <li><a href=\"#\">2</a></li>
  <li><a href=\"#\">3</a></li>
  <li><a href=\"#\">4</a></li>
  <li><a href=\"#\">5</a></li>
  <li><a href=\"#\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a></li>
</ul>
                
            </div>
            
        </div>
                          
                          <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
      </div>
          <div class=\"modal-body\">
          <div class=\"form-group\">
        <input class=\"form-control \" type=\"text\" placeholder=\"Mohsin\">
        </div>
        <div class=\"form-group\">
        
        <input class=\"form-control \" type=\"text\" placeholder=\"Irshad\">
        </div>
        <div class=\"form-group\">
        <textarea rows=\"2\" class=\"form-control\" placeholder=\"CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan\"></textarea>
    
        
        </div>
      </div>
          <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
                      <!-- end of user-activity-graph -->

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
{% endblock %}       
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
