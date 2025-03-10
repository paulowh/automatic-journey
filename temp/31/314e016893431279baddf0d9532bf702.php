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

/* indicadores.twig */
class __TwigTemplate_85016917f6251d2a409b798635dcdd59 extends Template
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
        yield "<select class=\"mt-5 ui fluid search dropdown indi\" multiple=\"\" >
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["indicador"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dados"]) {
            // line 3
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dados"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dados"], "titulo", [], "any", false, false, false, 3), "html", null, true);
            yield " </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dados'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "</select>

<script>
\$('.indi').dropdown()
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "indicadores.twig";
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
        return new Source("<select class=\"mt-5 ui fluid search dropdown indi\" multiple=\"\" >
    {% for dados in indicador %}
        <option value=\"{{ dados.id }}\"> {{ dados.titulo }} </option>
    {% endfor %}
</select>

<script>
\$('.indi').dropdown()
</script>
", "indicadores.twig", "C:\\xampp\\htdocs\\automatic-journey\\templates\\indicadores.twig");
    }
}
