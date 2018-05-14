<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/themes/ahmadcholluyev-mogo-theme/pages/blog/category.htm */
class __TwigTemplate_f7e6594b91e0b3fdecec6fee95a071515835127ec687963d260804b8c841093c extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-xs-12 col-md-8\" style=\"padding:0 60px\">
\t";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "\t</div>
\t<div class=\"col-xs-12 col-md-4\" style=\"padding:0 60px\">
    ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
\t<div class=\"col-xs-12 col-md-8\" style=\"padding:0 60px\">
\t{% component 'blogPosts' %}
\t</div>
\t<div class=\"col-xs-12 col-md-4\" style=\"padding:0 60px\">
    {% component 'blogCategories' %}
\t</div>
</div>", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/themes/ahmadcholluyev-mogo-theme/pages/blog/category.htm", "");
    }
}
