<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/scripts.html.twig */
class __TwigTemplate_c249540eb8c1651ee8ad47f038c824f0f18cfe514f7d19b0c467a816efa998e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/fastclickb146.js"], "method");
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/foundation.minb146.js"], "method");
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/background-checkb146.js"], "method");
        // line 5
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/post-header-animationsb146.js"], "method");
        // line 6
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/summerb146.js"], "method");
    }

    public function getTemplateName()
    {
        return "partials/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.add('jquery', 101) %}
{% do assets.addJs('theme://js/vendor/fastclickb146.js') %}
{% do assets.addJs('theme://js/vendor/foundation.minb146.js') %}
{% do assets.addJs('theme://js/vendor/background-checkb146.js') %}
{% do assets.addJs('theme://js/vendor/post-header-animationsb146.js') %}
{% do assets.addJs('theme://js/summerb146.js') %}", "partials/scripts.html.twig", "/usr/share/nginx/html/user/themes/notepad/templates/partials/scripts.html.twig");
    }
}
