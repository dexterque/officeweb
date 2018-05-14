<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/themes/ahmadcholluyev-mogo-theme/partials/header.htm */
class __TwigTemplate_7bd75119c02a1cb597cf6cd1fe0fe5bd5697ea59e851e2c7ab4c2435265dba3d extends Twig_Template
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
        echo "<!-- Header
    ================================================== -->
\t<header id=\"nino-header\">
\t\t<div id=\"nino-headerInner\">
\t\t\t<nav id=\"nino-navbar\" class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nino-navbar-collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">深圳市益鼎铭科技有限公司</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"nino-menuItem pull-right\">
\t\t\t\t\t\t<div class=\"collapse navbar-collapse pull-left\" id=\"nino-navbar-collapse\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav my-nav\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#nino-header\">主页 <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-story\">关于我们</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-services\">服务</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-ourTeam\">团队</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-portfolio\">作品</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-latestBlog\">新闻</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t\t<ul class=\"nino-iconsGroup nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"nino-search\"><i class=\"mdi mdi-magnify nino-icon\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t\t";
        // line 37
        if ((($context["title"] ?? null) == "Home")) {
            // line 38
            echo "\t\t\t<section id=\"nino-slider\" class=\"carousel slide container\" data-ride=\"carousel\">

\t\t\t\t<!-- Wrapper for slides -->
\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Indicators -->
\t\t\t\t<ol class=\"carousel-indicators clearfix\">
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"0\" class=\"active\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">01</span> intro
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"1\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">02</span> work
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"2\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">03</span> about
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"3\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">04</span> contacts
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</section>
\t\t
\t\t\t";
        }
        // line 98
        echo "
\t\t</div>
\t</header><!--/#header-->
<script src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.js\"></script>
<script>
\tvar title = '";
        // line 103
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "';
\tif (title !== 'Home') {
\t\tvar url = window.location.href;
\t\tvar domain = document.domain;

\t\t\$(\".my-nav li a\").click(function () {
\t\t\tvar url = \$(this).attr(\"href\");
            window.location.href = './' + url;
        })
    }

</script>";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 103,  124 => 98,  62 => 38,  60 => 37,  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header
    ================================================== -->
\t<header id=\"nino-header\">
\t\t<div id=\"nino-headerInner\">
\t\t\t<nav id=\"nino-navbar\" class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nino-navbar-collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{'home'|page}}\">深圳市益鼎铭科技有限公司</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"nino-menuItem pull-right\">
\t\t\t\t\t\t<div class=\"collapse navbar-collapse pull-left\" id=\"nino-navbar-collapse\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav my-nav\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#nino-header\">主页 <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-story\">关于我们</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-services\">服务</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-ourTeam\">团队</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-portfolio\">作品</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#nino-latestBlog\">新闻</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t\t<ul class=\"nino-iconsGroup nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"nino-search\"><i class=\"mdi mdi-magnify nino-icon\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t\t{% if title == 'Home' %}
\t\t\t<section id=\"nino-slider\" class=\"carousel slide container\" data-ride=\"carousel\">

\t\t\t\t<!-- Wrapper for slides -->
\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<h2 class=\"nino-sectionHeading\">
\t\t\t\t\t\t\t<span class=\"nino-subHeading\">Creative Template</span>
\t\t\t\t\t\t\tWelcome <br>to MoGo
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"nino-btn\">Learn more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Indicators -->
\t\t\t\t<ol class=\"carousel-indicators clearfix\">
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"0\" class=\"active\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">01</span> intro
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"1\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">02</span> work
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"2\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">03</span> about
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li data-target=\"#nino-slider\" data-slide-to=\"3\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<span class=\"number\">04</span> contacts
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</section>
\t\t
\t\t\t{% endif %}

\t\t</div>
\t</header><!--/#header-->
<script src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.js\"></script>
<script>
\tvar title = '{{title}}';
\tif (title !== 'Home') {
\t\tvar url = window.location.href;
\t\tvar domain = document.domain;

\t\t\$(\".my-nav li a\").click(function () {
\t\t\tvar url = \$(this).attr(\"href\");
            window.location.href = './' + url;
        })
    }

</script>", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/partials/header.htm", "");
    }
}
