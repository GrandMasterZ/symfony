<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8cb491191e7c792562b1034fa85c1fdf1f29d5850f1cbf35296febb881fe1968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f94a01c1b1fc28c53f6b8841a2c65c0a7c44198a46ec4139d3835536e1e296a = $this->env->getExtension("native_profiler");
        $__internal_6f94a01c1b1fc28c53f6b8841a2c65c0a7c44198a46ec4139d3835536e1e296a->enter($__internal_6f94a01c1b1fc28c53f6b8841a2c65c0a7c44198a46ec4139d3835536e1e296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f94a01c1b1fc28c53f6b8841a2c65c0a7c44198a46ec4139d3835536e1e296a->leave($__internal_6f94a01c1b1fc28c53f6b8841a2c65c0a7c44198a46ec4139d3835536e1e296a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d792594bf514287e25485a93e04b356808303b8eff3f50022e60a17bf82b8c7 = $this->env->getExtension("native_profiler");
        $__internal_0d792594bf514287e25485a93e04b356808303b8eff3f50022e60a17bf82b8c7->enter($__internal_0d792594bf514287e25485a93e04b356808303b8eff3f50022e60a17bf82b8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d792594bf514287e25485a93e04b356808303b8eff3f50022e60a17bf82b8c7->leave($__internal_0d792594bf514287e25485a93e04b356808303b8eff3f50022e60a17bf82b8c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff6d24e6a14df37fc67ec23e71c4bb6c627cff8ff863cf5e44bb9929d8b10ad5 = $this->env->getExtension("native_profiler");
        $__internal_ff6d24e6a14df37fc67ec23e71c4bb6c627cff8ff863cf5e44bb9929d8b10ad5->enter($__internal_ff6d24e6a14df37fc67ec23e71c4bb6c627cff8ff863cf5e44bb9929d8b10ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff6d24e6a14df37fc67ec23e71c4bb6c627cff8ff863cf5e44bb9929d8b10ad5->leave($__internal_ff6d24e6a14df37fc67ec23e71c4bb6c627cff8ff863cf5e44bb9929d8b10ad5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fca895f30486a0f4c834163c2dddd8b74e44c8c8463b818b952c03b00b4e1c9c = $this->env->getExtension("native_profiler");
        $__internal_fca895f30486a0f4c834163c2dddd8b74e44c8c8463b818b952c03b00b4e1c9c->enter($__internal_fca895f30486a0f4c834163c2dddd8b74e44c8c8463b818b952c03b00b4e1c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fca895f30486a0f4c834163c2dddd8b74e44c8c8463b818b952c03b00b4e1c9c->leave($__internal_fca895f30486a0f4c834163c2dddd8b74e44c8c8463b818b952c03b00b4e1c9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
