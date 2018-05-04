<?php

/* /var/www/october/themes/ahmadcholluyev-mogo-theme/partials/search.htm */
class __TwigTemplate_7534232c09cd764fd5d4bf2d33e918f0bda035b3670993273cf1187477d00a52 extends Twig_Template
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
        echo "<form action=\"\" id=\"nino-searchForm\">
    \t<input type=\"text\" placeholder=\"Search...\" class=\"form-control nino-searchInput\">
    \t<i class=\"mdi mdi-close nino-close\"></i>
    </form><!--/#nino-searchForm-->";
    }

    public function getTemplateName()
    {
        return "/var/www/october/themes/ahmadcholluyev-mogo-theme/partials/search.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"\" id=\"nino-searchForm\">
    \t<input type=\"text\" placeholder=\"Search...\" class=\"form-control nino-searchInput\">
    \t<i class=\"mdi mdi-close nino-close\"></i>
    </form><!--/#nino-searchForm-->", "/var/www/october/themes/ahmadcholluyev-mogo-theme/partials/search.htm", "");
    }
}
