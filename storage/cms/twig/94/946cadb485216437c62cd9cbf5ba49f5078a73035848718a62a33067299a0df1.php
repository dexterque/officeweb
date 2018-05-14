<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/themes/ahmadcholluyev-mogo-theme/pages/blog/post.htm */
class __TwigTemplate_10d77e50bd39d78804cc728f8d53eb56b4bda37cad54ad6ae3542ccb9d78a41e extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/pages/blog/post.htm", "");
    }
}
