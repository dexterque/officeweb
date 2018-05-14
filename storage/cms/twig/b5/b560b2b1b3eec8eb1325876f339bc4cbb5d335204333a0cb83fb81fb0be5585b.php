<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/themes/ahmadcholluyev-mogo-theme/layouts/default.htm */
class __TwigTemplate_9421c10a4c2026023a36797828e650cc1e2dfbbbb129e4e268a8dbb7da09f66b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"October themes\">
\t<meta name=\"author\" content=\"AhmCho, mail@ahmcho.com, ahmcho.com\">
\t<meta name=\"copyright\" content=\"ninodezign.com\">
\t<title>Modo</title>
\t<!-- favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/favicon.jpg");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">

\t<!-- css -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/materialdesignicons.min.css");
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/jquery.mCustomScrollbar.min.css");
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/prettyPhoto.css");
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/unslider.css");
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/template.css");
        echo "\" />
    ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "</head>
<body data-target=\"#nino-navbar\" data-spy=\"scroll\">
    ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("search"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    <a href=\"#\" id=\"nino-scrollToTop\">Go to Top</a>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/isotope.pkgd.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.hoverdir.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/modernizr.custom.97074.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.mCustomScrollbar.concat.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/unslider-min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/template.js");
        echo "\"></script>
\t<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<!-- css3-mediaqueries.js for IE less than 9 -->
\t<!--[if lt IE 9]>
\t    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
\t<![endif]-->
\t";
        // line 49
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 50
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 51
        echo "    <script>";
        $context['__placeholder_inline_scripts_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('inline_scripts', $context['__placeholder_inline_scripts_default_contents']);
        unset($context['__placeholder_inline_scripts_default_contents']);        echo "</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 51,  155 => 50,  148 => 49,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  101 => 31,  96 => 30,  91 => 29,  88 => 28,  84 => 27,  80 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"October themes\">
\t<meta name=\"author\" content=\"AhmCho, mail@ahmcho.com, ahmcho.com\">
\t<meta name=\"copyright\" content=\"ninodezign.com\">
\t<title>Modo</title>
\t<!-- favicon -->
    <link rel=\"shortcut icon\" href=\"{{'assets/images/ico/favicon.jpg'|theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{'assets/images/ico/apple-touch-icon-144-precomposed.png' | theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{'assets/images/ico/apple-touch-icon-114-precomposed.png' | theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme}}\">

\t<!-- css -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/bootstrap.min.css'|theme}}\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/materialdesignicons.min.css'|theme}}\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/jquery.mCustomScrollbar.min.css'|theme}}\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/prettyPhoto.css'|theme}}\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/unslider.css'|theme}}\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/template.css'|theme}}\" />
    {% styles %}
</head>
<body data-target=\"#nino-navbar\" data-spy=\"scroll\">
    {% partial 'header' %}
    {% page %}
    {% partial 'footer' %}
    {% partial 'search' %}
    <a href=\"#\" id=\"nino-scrollToTop\">Go to Top</a>
    <script type=\"text/javascript\" src=\"{{'assets/js/jquery.min.js' |theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/isotope.pkgd.min.js' |theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/jquery.prettyPhoto.js' |theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/bootstrap.min.js' |theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/jquery.hoverdir.js' |theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/modernizr.custom.97074.js' |theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/jquery.mCustomScrollbar.concat.min.js'|theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/unslider-min.js'|theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/js/template.js'|theme}}\"></script>
\t<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<!-- css3-mediaqueries.js for IE less than 9 -->
\t<!--[if lt IE 9]>
\t    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
\t<![endif]-->
\t{% framework extras %}
    {% scripts %}
    <script>{% placeholder inline_scripts %}</script>
</body>
</html>", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/layouts/default.htm", "");
    }
}
