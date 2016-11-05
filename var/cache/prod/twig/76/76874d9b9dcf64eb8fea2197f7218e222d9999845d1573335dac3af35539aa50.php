<?php

/* admin/blog/_form.html.twig */
class __TwigTemplate_9bc1e05a22a1527da68c2e5ca879ebaef0e414fff778b248f76e7ce3a8e1021d extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("show_confirmation", $context)) ? (_twig_default_filter((isset($context["show_confirmation"]) ? $context["show_confirmation"] : null), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = array("data-confirmation" => "true");
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : null), array())) : (array()))));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) ? $context["button_label"] : null), $this->env->getExtension('translator')->trans("label.create_post"))) : ($this->env->getExtension('translator')->trans("label.create_post"))), "html", null, true);
        echo "\"
           class=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_css", $context)) ? (_twig_default_filter((isset($context["button_css"]) ? $context["button_css"] : null), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\" />

    ";
        // line 20
        if (((array_key_exists("include_back_to_home_link", $context)) ? (_twig_default_filter((isset($context["include_back_to_home_link"]) ? $context["include_back_to_home_link"] : null), false)) : (false))) {
            // line 21
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  61 => 22,  56 => 21,  54 => 20,  49 => 18,  45 => 17,  40 => 15,  36 => 14,  33 => 13,  27 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
/* {#*/
/*     By default, forms enable client-side validation. This means that you can't*/
/*     test the server-side validation errors from the browser. To temporarily*/
/*     disable this validation, add the 'novalidate' attribute:*/
/* */
/*     {{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}*/
/* #}*/
/* */
/* {% if show_confirmation|default(false) %}*/
/*     {% set attr = {'data-confirmation': 'true'} %}*/
/*     {{ include('blog/_delete_post_confirmation.html.twig') }}*/
/* {% endif %}*/
/* */
/* {{ form_start(form, { attr: attr|default({}) }) }}*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" value="{{ button_label|default('label.create_post'|trans) }}"*/
/*            class="{{ button_css|default("btn btn-primary") }}" />*/
/* */
/*     {% if include_back_to_home_link|default(false) %}*/
/*         <a href="{{ path('admin_post_index') }}" class="btn btn-link">*/
/*             {{ 'action.back_to_list'|trans }}*/
/*         </a>*/
/*     {% endif %}*/
/* {{ form_end(form) }}*/
/* */
