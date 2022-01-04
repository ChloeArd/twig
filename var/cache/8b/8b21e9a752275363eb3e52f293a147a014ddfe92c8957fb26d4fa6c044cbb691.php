<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* hello.html.twig */
class __TwigTemplate_0a83c1e5dca506c1d47a0a96e023cee8c28ed107d44a392618a5769c6726c082 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["greeting"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>

    <p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["greeting"] ?? null), "html", null, true);
        echo "</p>
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => ($context["greeting"] ?? null)]), "html", null, true);
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hello.html.twig", "C:\\Users\\chloe\\PhpstormProjects\\twig\\templates\\hello.html.twig");
    }
}
