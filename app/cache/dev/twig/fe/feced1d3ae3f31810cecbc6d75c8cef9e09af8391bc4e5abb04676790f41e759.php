<?php

/* base.html.twig */
class __TwigTemplate_93dce43a6d6d7c2368bf6d5f75c74750dbece489a43fc683723f3ab8b6d8ce71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa4eb71d166edf39bd55c02ef551ac4f5926c4097f11a186b22e0f97b65b86cb = $this->env->getExtension("native_profiler");
        $__internal_fa4eb71d166edf39bd55c02ef551ac4f5926c4097f11a186b22e0f97b65b86cb->enter($__internal_fa4eb71d166edf39bd55c02ef551ac4f5926c4097f11a186b22e0f97b65b86cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fa4eb71d166edf39bd55c02ef551ac4f5926c4097f11a186b22e0f97b65b86cb->leave($__internal_fa4eb71d166edf39bd55c02ef551ac4f5926c4097f11a186b22e0f97b65b86cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_46f85c4b1f799f800cda232c2f60c3a127c83ed4d1c7ed0abf4174446928353b = $this->env->getExtension("native_profiler");
        $__internal_46f85c4b1f799f800cda232c2f60c3a127c83ed4d1c7ed0abf4174446928353b->enter($__internal_46f85c4b1f799f800cda232c2f60c3a127c83ed4d1c7ed0abf4174446928353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_46f85c4b1f799f800cda232c2f60c3a127c83ed4d1c7ed0abf4174446928353b->leave($__internal_46f85c4b1f799f800cda232c2f60c3a127c83ed4d1c7ed0abf4174446928353b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd5ca231917f97a89779a67e9bac0692df3e703eed8307a4dc1ee58f6c14bf2b = $this->env->getExtension("native_profiler");
        $__internal_cd5ca231917f97a89779a67e9bac0692df3e703eed8307a4dc1ee58f6c14bf2b->enter($__internal_cd5ca231917f97a89779a67e9bac0692df3e703eed8307a4dc1ee58f6c14bf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd5ca231917f97a89779a67e9bac0692df3e703eed8307a4dc1ee58f6c14bf2b->leave($__internal_cd5ca231917f97a89779a67e9bac0692df3e703eed8307a4dc1ee58f6c14bf2b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50ca9d20c7bbe2f37e37ae7bb5856f5cc1f4e9f38b4b7c053b220047d0e07bc9 = $this->env->getExtension("native_profiler");
        $__internal_50ca9d20c7bbe2f37e37ae7bb5856f5cc1f4e9f38b4b7c053b220047d0e07bc9->enter($__internal_50ca9d20c7bbe2f37e37ae7bb5856f5cc1f4e9f38b4b7c053b220047d0e07bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50ca9d20c7bbe2f37e37ae7bb5856f5cc1f4e9f38b4b7c053b220047d0e07bc9->leave($__internal_50ca9d20c7bbe2f37e37ae7bb5856f5cc1f4e9f38b4b7c053b220047d0e07bc9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_938cf20b386f671a85bbe62c1f13f0fbbaa4a20b755cccb5f60b0d7c09cb0665 = $this->env->getExtension("native_profiler");
        $__internal_938cf20b386f671a85bbe62c1f13f0fbbaa4a20b755cccb5f60b0d7c09cb0665->enter($__internal_938cf20b386f671a85bbe62c1f13f0fbbaa4a20b755cccb5f60b0d7c09cb0665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_938cf20b386f671a85bbe62c1f13f0fbbaa4a20b755cccb5f60b0d7c09cb0665->leave($__internal_938cf20b386f671a85bbe62c1f13f0fbbaa4a20b755cccb5f60b0d7c09cb0665_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
