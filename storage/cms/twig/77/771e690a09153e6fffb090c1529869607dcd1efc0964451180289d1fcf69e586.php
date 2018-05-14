<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_b0981b0cbfd882b903b416813985d8cfe6d56a1089829133d82ea114e31d607e extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "<p class=\"info\">
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "
    <br>
    Posted
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 9
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        // line 11
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
</p>
";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 14
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "            <p>
                <img
                    data-src=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                echo "\"
                    src=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                echo "\"
                    alt=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
";
        }
        // line 26
        echo "<div class=\"content\">";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "</div>




";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  114 => 24,  104 => 20,  100 => 19,  96 => 18,  92 => 16,  88 => 15,  85 => 14,  83 => 13,  77 => 11,  74 => 10,  60 => 9,  51 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}
<p class=\"info\">
    {{ post.title }}
    <br>
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p>
{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}
<div class=\"content\">{{ post.content_html|raw }}</div>




", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
