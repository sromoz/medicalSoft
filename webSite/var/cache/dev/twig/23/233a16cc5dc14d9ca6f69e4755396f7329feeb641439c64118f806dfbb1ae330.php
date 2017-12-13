<?php

/* ::inicio.html.twig */
class __TwigTemplate_d4b48de621fef6614d01ac30f87c8b3e5e1b588e4de7c7d1f84af8a147a98c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::inicio.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'content1' => array($this, 'block_content1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cad64e903f86aac0d543092fab40cfee94fb003dca054eb75abe96792137df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cad64e903f86aac0d543092fab40cfee94fb003dca054eb75abe96792137df5->enter($__internal_0cad64e903f86aac0d543092fab40cfee94fb003dca054eb75abe96792137df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::inicio.html.twig"));

        $__internal_be6e6b141a0d0512c6a9ffc46561ad890ede143de890617c0ebfb7977b1115ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6e6b141a0d0512c6a9ffc46561ad890ede143de890617c0ebfb7977b1115ab->enter($__internal_be6e6b141a0d0512c6a9ffc46561ad890ede143de890617c0ebfb7977b1115ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cad64e903f86aac0d543092fab40cfee94fb003dca054eb75abe96792137df5->leave($__internal_0cad64e903f86aac0d543092fab40cfee94fb003dca054eb75abe96792137df5_prof);

        
        $__internal_be6e6b141a0d0512c6a9ffc46561ad890ede143de890617c0ebfb7977b1115ab->leave($__internal_be6e6b141a0d0512c6a9ffc46561ad890ede143de890617c0ebfb7977b1115ab_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_55ed3ca11df3afd842e4f111593a885ae86e6b706d4cc19f894570f6e7166fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ed3ca11df3afd842e4f111593a885ae86e6b706d4cc19f894570f6e7166fb6->enter($__internal_55ed3ca11df3afd842e4f111593a885ae86e6b706d4cc19f894570f6e7166fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_37ad7551ac9c3976e5d8283afb49fc116e75b45d85bdde2a18c8a3652ebf400d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ad7551ac9c3976e5d8283afb49fc116e75b45d85bdde2a18c8a3652ebf400d->enter($__internal_37ad7551ac9c3976e5d8283afb49fc116e75b45d85bdde2a18c8a3652ebf400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "  

  <body class=\"nav-md\">
      
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("menu_homepage");
        echo "\" class=\"site_title\"><i class=\"fa fa-suitcase\"></i> <span>MedicalSoft!</span></a>
            </div>

            <div class=\"clearfix\"></div>
            
            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              
              <div class=\"profile_info\">
                <span>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "</span>
                <h2>";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>Hospital Básico Virgen del Cisne</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Administración <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        
                        <li><a>Usuarios<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Perfil</a>
                            </li>
                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Registrar</a>                                
                            </li>
                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        
                      <li><a href=\"index.html\">Dashboard</a></li>
                      <li><a href=\"index2.html\">Dashboard2</a></li>
                      <li><a href=\"index3.html\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a></li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                      <li><a href=\"form_validation.html\">Form Validation</a></li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                      <li><a href=\"form_upload.html\">Form Upload</a></li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a></li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                      <li><a href=\"typography.html\">Typography</a></li>
                      <li><a href=\"icons.html\">Icons</a></li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                      <li><a href=\"widgets.html\">Widgets</a></li>
                      <li><a href=\"invoice.html\">Invoice</a></li>
                      <li><a href=\"inbox.html\">Inbox</a></li>
                      <li><a href=\"calendar.html\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a></li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"chartjs.html\">Chart JS</a></li>
                      <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                      <li><a href=\"morisjs.html\">Moris JS</a></li>
                      <li><a href=\"echarts.html\">ECharts</a></li>
                      <li><a href=\"other_charts.html\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
                
              <div class=\"nav toggle\">                  
                <a id=\"menu_toggle\" ><i class=\"fa fa-bars\"></i></a>                
                
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/img.jpg\" alt=\"\">";
        // line 162
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Perfil</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>";
        // line 188
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
                
            ";
        // line 251
        $this->displayBlock('content1', $context, $blocks);
        // line 254
        echo "         </div>     
      
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    

         
    <!-- jQuery -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/custom.min.js"), "html", null, true);
        echo "\"></script>
     
    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/pnotify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function (){
           \$('.ui-pnotify').remove();
        });
    </script>
    <script>
            \$(document).ready(function(){
            \$(\"#mytable #checkall\").click(function () {
        if (\$(\"#mytable #checkall\").is(':checked')) {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", true);
            });

        } else {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", false);
            });
        }
    });
    
    \$(\"[data-toggle=tooltip]\").tooltip();
});
</script>
   
</body>
";
        
        $__internal_37ad7551ac9c3976e5d8283afb49fc116e75b45d85bdde2a18c8a3652ebf400d->leave($__internal_37ad7551ac9c3976e5d8283afb49fc116e75b45d85bdde2a18c8a3652ebf400d_prof);

        
        $__internal_55ed3ca11df3afd842e4f111593a885ae86e6b706d4cc19f894570f6e7166fb6->leave($__internal_55ed3ca11df3afd842e4f111593a885ae86e6b706d4cc19f894570f6e7166fb6_prof);

    }

    // line 251
    public function block_content1($context, array $blocks = array())
    {
        $__internal_be219321c4d817b0bb31464f1bbf37431b78a1f145cbba0074fc15a25b8c4647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be219321c4d817b0bb31464f1bbf37431b78a1f145cbba0074fc15a25b8c4647->enter($__internal_be219321c4d817b0bb31464f1bbf37431b78a1f145cbba0074fc15a25b8c4647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        $__internal_94fd5180dca409d0cc184266558574e601e2a642e77b5eb5eb4bef3ef1d9cbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fd5180dca409d0cc184266558574e601e2a642e77b5eb5eb4bef3ef1d9cbef->enter($__internal_94fd5180dca409d0cc184266558574e601e2a642e77b5eb5eb4bef3ef1d9cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 252
        echo "                   
            ";
        
        $__internal_94fd5180dca409d0cc184266558574e601e2a642e77b5eb5eb4bef3ef1d9cbef->leave($__internal_94fd5180dca409d0cc184266558574e601e2a642e77b5eb5eb4bef3ef1d9cbef_prof);

        
        $__internal_be219321c4d817b0bb31464f1bbf37431b78a1f145cbba0074fc15a25b8c4647->leave($__internal_be219321c4d817b0bb31464f1bbf37431b78a1f145cbba0074fc15a25b8c4647_prof);

    }

    public function getTemplateName()
    {
        return "::inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 252,  509 => 251,  472 => 315,  468 => 314,  464 => 313,  459 => 311,  454 => 309,  450 => 308,  446 => 307,  442 => 306,  437 => 304,  433 => 303,  429 => 302,  424 => 300,  419 => 298,  415 => 297,  411 => 296,  406 => 294,  402 => 293,  398 => 292,  394 => 291,  390 => 290,  385 => 288,  380 => 286,  375 => 284,  370 => 282,  365 => 280,  360 => 278,  355 => 276,  350 => 274,  345 => 272,  325 => 254,  323 => 251,  257 => 188,  228 => 162,  106 => 43,  101 => 41,  96 => 39,  76 => 22,  72 => 21,  60 => 12,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
                    
{% block content %}  

  <body class=\"nav-md\">
      
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"{{path('menu_homepage')}}\" class=\"site_title\"><i class=\"fa fa-suitcase\"></i> <span>MedicalSoft!</span></a>
            </div>

            <div class=\"clearfix\"></div>
            
            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              
              <div class=\"profile_info\">
                <span>{{\"now\"|date(\"m/d/Y\")}}</span>
                <h2>{{app.user.firstName ~ \" \" ~ app.user.lastName}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>Hospital Básico Virgen del Cisne</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Administración <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        
                        <li><a>Usuarios<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"{{path('fos_user_profile_show')}}\">Perfil</a>
                            </li>
                            <li><a href=\"{{path('fos_user_registration_register')}}\">Registrar</a>                                
                            </li>
                            <li><a href=\"{{path('fos_user_profile_edit')}}\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        
                      <li><a href=\"index.html\">Dashboard</a></li>
                      <li><a href=\"index2.html\">Dashboard2</a></li>
                      <li><a href=\"index3.html\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a></li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                      <li><a href=\"form_validation.html\">Form Validation</a></li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                      <li><a href=\"form_upload.html\">Form Upload</a></li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a></li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                      <li><a href=\"typography.html\">Typography</a></li>
                      <li><a href=\"icons.html\">Icons</a></li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                      <li><a href=\"widgets.html\">Widgets</a></li>
                      <li><a href=\"invoice.html\">Invoice</a></li>
                      <li><a href=\"inbox.html\">Inbox</a></li>
                      <li><a href=\"calendar.html\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a></li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"chartjs.html\">Chart JS</a></li>
                      <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                      <li><a href=\"morisjs.html\">Moris JS</a></li>
                      <li><a href=\"echarts.html\">ECharts</a></li>
                      <li><a href=\"other_charts.html\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
                
              <div class=\"nav toggle\">                  
                <a id=\"menu_toggle\" ><i class=\"fa fa-bars\"></i></a>                
                
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/img.jpg\" alt=\"\">{{app.user.firstName ~ \" \" ~ app.user.lastName}}
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Perfil</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>{{app.user.firstName ~ \" \" ~ app.user.lastName}}</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
                
            {% block content1 %}
                   
            {% endblock %}
         </div>     
      
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    

         
    <!-- jQuery -->
    <script src=\"{{asset('public/js/jquery.min.js')}}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{asset('public/js/bootstrap.min.js')}}\"></script>
    <!-- FastClick -->
    <script src=\"{{asset('public/js/fastclick.js')}}\"></script>
    <!-- NProgress -->
    <script src=\"{{asset('public/js/nprogress.js')}}\"></script>
    <!-- Chart.js -->
    <script src=\"{{asset('public/js/Chart.min.js')}}\"></script>
    <!-- gauge.js -->
    <script src=\"{{asset('public/js/gauge.min.js')}}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{asset('public/js/bootstrap-progressbar.min.js')}}\"></script>
    <!-- iCheck -->
    <script src=\"{{asset('public/js/icheck.min.js')}}\"></script>
    <!-- Skycons -->
    <script src=\"{{asset('public/js/skycons.js')}}\"></script>
    <!-- Flot -->
    <script src=\"{{asset('public/js/jquery.flot.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.flot.time.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.flot.resize.js')}}\"></script>
    <!-- Flot plugins -->
    <script src=\"{{asset('public/js/jquery.flot.orderBars.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.flot.spline.min.js')}}\"></script>
    <script src=\"{{asset('public/js/curvedLines.js')}}\"></script>
    <!-- DateJS -->
    <script src=\"{{asset('public/js/date.js')}}\"></script>
    <!-- JQVMap -->
    <script src=\"{{asset('public/js/jquery.vmap.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.vmap.world.js')}}\"></script>
    <script src=\"{{asset('public/js/jquery.vmap.sampledata.js')}}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{asset('public/js/moment.min.js')}}\"></script>
    <script src=\"{{asset('public/js/daterangepicker.js')}}\"></script>
    <script src=\"{{asset('public/js/raphael.min.js')}}\"></script>
    <script src=\"{{asset('public/js/morris.min.js')}}\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"{{asset('public/js/custom.min.js')}}\"></script>
     
    <script src=\"{{asset('public/js/pnotify.js')}}\"></script>
    <script src=\"{{asset('public/js/pnotify.nonblock.js')}}\"></script>
    <script src=\"{{asset('public/js/pnotify.buttons.js')}}\"></script>
    <script>
        \$(document).ready(function (){
           \$('.ui-pnotify').remove();
        });
    </script>
    <script>
            \$(document).ready(function(){
            \$(\"#mytable #checkall\").click(function () {
        if (\$(\"#mytable #checkall\").is(':checked')) {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", true);
            });

        } else {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", false);
            });
        }
    });
    
    \$(\"[data-toggle=tooltip]\").tooltip();
});
</script>
   
</body>
{% endblock  %}", "::inicio.html.twig", "C:\\wamp64\\www\\webSite\\app/Resources\\views/inicio.html.twig");
    }
}
