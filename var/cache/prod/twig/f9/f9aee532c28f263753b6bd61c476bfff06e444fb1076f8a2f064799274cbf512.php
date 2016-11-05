<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_ec5cf61d4db937650fa0cfc0eed1fccd2d88909707c3f0384b492733d1af7523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        echo "admin_post_edit";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit_post", array("%id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 9
(isset($context["edit_form"]) ? $context["edit_form"] : null), "button_label" => $this->env->getExtension('translator')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 12
        echo "
";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"section actions\">
        ";
        // line 17
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 18
(isset($context["delete_form"]) ? $context["delete_form"] : null), "button_label" => $this->env->getExtension('translator')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 22
        echo "
    </div>

    ";
        // line 25
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 27
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  67 => 25,  62 => 22,  60 => 18,  59 => 17,  56 => 16,  53 => 15,  48 => 12,  46 => 9,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_edit' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>*/
/* */
/*     {{ include('admin/blog/_form.html.twig', {*/
/*         form: edit_form,*/
/*         button_label: 'action.save'|trans,*/
/*         include_back_to_home_link: true,*/
/*     }, with_context = false) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         {{ include('admin/blog/_form.html.twig', {*/
/*             form: delete_form,*/
/*             button_label: 'action.delete_post'|trans,*/
/*             button_css: 'btn btn-lg btn-block btn-danger',*/
/*             show_confirmation: true,*/
/*         }, with_context = false) }}*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
