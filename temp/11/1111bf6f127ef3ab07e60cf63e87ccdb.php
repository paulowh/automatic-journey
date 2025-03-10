<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* cadastrar-uc.twig */
class __TwigTemplate_590e7e9461797e5e12c1a538025c656e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<select class=\"mt-5 ui fluid search selection dropdown\" id=\"select-uc\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ucs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uc"]) {
            // line 3
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["uc"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["uc"], "titulo", [], "any", false, false, false, 3), "html", null, true);
            yield "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['uc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "</select>

<div class=\"result\"></div>

<script>
    \$('.dropdown').dropdown();
    \$('.ui.dropdown').change(function() {
        var valorSelecionado = \$(this).dropdown('get value'); // Pega o valor selecionado
        console.log(valorSelecionado);

        \$.post(\"./indicadores.php\", {
            id: valorSelecionado
        }, function(data) {
            console.log(data);
            
            \$(\".result\").html(data);
        });
    })
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cadastrar-uc.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  60 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<select class=\"mt-5 ui fluid search selection dropdown\" id=\"select-uc\">
    {% for uc in ucs %}
        <option value=\"{{ uc.id }}\">{{ uc.titulo }}</option>
    {% endfor %}
</select>

<div class=\"result\"></div>

<script>
    \$('.dropdown').dropdown();
    \$('.ui.dropdown').change(function() {
        var valorSelecionado = \$(this).dropdown('get value'); // Pega o valor selecionado
        console.log(valorSelecionado);

        \$.post(\"./indicadores.php\", {
            id: valorSelecionado
        }, function(data) {
            console.log(data);
            
            \$(\".result\").html(data);
        });
    })
</script>", "cadastrar-uc.twig", "C:\\xampp\\htdocs\\automatic-journey\\templates\\cadastrar-uc.twig");
    }
}
