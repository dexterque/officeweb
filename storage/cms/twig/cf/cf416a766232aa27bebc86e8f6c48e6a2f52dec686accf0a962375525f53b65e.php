<?php

/* D:\phpStudy\PHPTutorial\WWW\officeweb/plugins/rainlab/blog/components/rssfeed/default.htm */
class __TwigTemplate_85525b96251c63a2d8377f1d24c081dfbb38e6f4704ee849c8d09cafbce2f0a8 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
        <link>";
        // line 5
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "</link>
        <description>";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array()))), "html", null, true);
        echo "</description>
        <atom:link href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["rssLink"] ?? null), "html", null, true);
        echo "\" rel=\"self\" type=\"application/rss+xml\" />
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        <item>
            <title>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</title>
            <link>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "</link>
            <guid>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "</guid>
            <pubDate>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "toRfc2822String", array()), "html", null, true);
            echo "</pubDate>
            <description>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()), "html", null, true);
            echo "</description>
        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/plugins/rainlab/blog/components/rssfeed/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <title>{{ this.page.meta_title ?: this.page.title }}</title>
        <link>{{ link }}</link>
        <description>{{ this.page.meta_description ?: this.page.description }}</description>
        <atom:link href=\"{{ rssLink }}\" rel=\"self\" type=\"application/rss+xml\" />
        {% for post in posts %}
        <item>
            <title>{{ post.title }}</title>
            <link>{{ post.url }}</link>
            <guid>{{ post.url }}</guid>
            <pubDate>{{ post.published_at.toRfc2822String }}</pubDate>
            <description>{{ post.summary }}</description>
        </item>
        {% endfor %}
    </channel>
</rss>
", "D:\\phpStudy\\PHPTutorial\\WWW\\officeweb/plugins/rainlab/blog/components/rssfeed/default.htm", "");
    }
}
