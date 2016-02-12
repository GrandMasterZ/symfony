<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_eadc0aa1315c9f0cebaac4e6016b758b8dab251a24a4d2f222a2abc6ce675444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1deb1c5e1d3ffef7c24261c692681642c79c401bb2494b49b87bc336fd61f7d1 = $this->env->getExtension("native_profiler");
        $__internal_1deb1c5e1d3ffef7c24261c692681642c79c401bb2494b49b87bc336fd61f7d1->enter($__internal_1deb1c5e1d3ffef7c24261c692681642c79c401bb2494b49b87bc336fd61f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1deb1c5e1d3ffef7c24261c692681642c79c401bb2494b49b87bc336fd61f7d1->leave($__internal_1deb1c5e1d3ffef7c24261c692681642c79c401bb2494b49b87bc336fd61f7d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1af16a683415d0e0c75b83781239e9329ebd883e5e3c057fb40026ba8665852 = $this->env->getExtension("native_profiler");
        $__internal_a1af16a683415d0e0c75b83781239e9329ebd883e5e3c057fb40026ba8665852->enter($__internal_a1af16a683415d0e0c75b83781239e9329ebd883e5e3c057fb40026ba8665852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a1af16a683415d0e0c75b83781239e9329ebd883e5e3c057fb40026ba8665852->leave($__internal_a1af16a683415d0e0c75b83781239e9329ebd883e5e3c057fb40026ba8665852_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_218082bbc82b3b361ff34a3e19fe04261ea4ecc073cf01151e76b6c35627ba76 = $this->env->getExtension("native_profiler");
        $__internal_218082bbc82b3b361ff34a3e19fe04261ea4ecc073cf01151e76b6c35627ba76->enter($__internal_218082bbc82b3b361ff34a3e19fe04261ea4ecc073cf01151e76b6c35627ba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_218082bbc82b3b361ff34a3e19fe04261ea4ecc073cf01151e76b6c35627ba76->leave($__internal_218082bbc82b3b361ff34a3e19fe04261ea4ecc073cf01151e76b6c35627ba76_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eb84368e959280d9b3017436925baf100ea79fe2d69a91df9b7c8ab0f00d227 = $this->env->getExtension("native_profiler");
        $__internal_0eb84368e959280d9b3017436925baf100ea79fe2d69a91df9b7c8ab0f00d227->enter($__internal_0eb84368e959280d9b3017436925baf100ea79fe2d69a91df9b7c8ab0f00d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0eb84368e959280d9b3017436925baf100ea79fe2d69a91df9b7c8ab0f00d227->leave($__internal_0eb84368e959280d9b3017436925baf100ea79fe2d69a91df9b7c8ab0f00d227_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
