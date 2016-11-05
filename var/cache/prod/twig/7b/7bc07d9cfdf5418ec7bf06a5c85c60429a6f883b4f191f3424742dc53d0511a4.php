<?php

/* blog/about.html.twig */
class __TwigTemplate_ea5284f298ab8619b8f717924542bfc94b4b16ee613961f440a34f2dccccf845 extends Twig_Template
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
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('translator')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('translator')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="section about">*/
/*     <div class="well well-lg">*/
/*         <p>*/
/*             {{ 'help.app_description'|trans|raw }}*/
/*         </p>*/
/*         <p>*/
/*             {{ 'help.more_information'|trans|raw }}*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
/* {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*    avoid errors when the 'intl' PHP extension is not available and the application*/
/*    is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/* <!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->*/
/* */
