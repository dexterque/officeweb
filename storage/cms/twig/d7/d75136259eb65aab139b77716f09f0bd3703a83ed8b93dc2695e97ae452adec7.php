<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/themes/ahmadcholluyev-mogo-theme/layouts/fallback.htm */
class __TwigTemplate_7c8124705f56acbee906a99d5615eb1af3402cf147d5cf4e7adaf732aeef028a extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/layouts/fallback.htm", "");
    }
}
