<?php

/* C:\Users\Harblz\Projects\blog/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_e60b29b284452ea7eecc9bcb79b18ce5f7a118a8027e1e0505f42717a69f48ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2018 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Each post is made with ❤ & ☕ 
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Harblz\\Projects\\blog/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2018 - {{ \"now\"|date(\"Y\") }}
        &mdash; Each post is made with ❤ & ☕ 
    </p>
</div>", "C:\\Users\\Harblz\\Projects\\blog/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
