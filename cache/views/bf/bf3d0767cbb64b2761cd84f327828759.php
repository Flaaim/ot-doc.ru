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

/* layouts/layout.twig */
class __TwigTemplate_ad2c6c164ec2ac950e30c27e2e50aba5 extends Template
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
            'head' => [$this, 'block_head'],
            'navbar' => [$this, 'block_navbar'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["init"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, false, false, 1), "init", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 7
        yield "
<main class=\"flex-shrink-0\">

    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 13
        yield "
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 16
        yield "        ";
        yield from $this->loadTemplate("inc/alert.twig", "layouts/layout.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 21
        yield "    <div id=\"overlay\">
        <div class=\"cv-spinner\">
            <span class=\"spinner\"></span>
        </div>
    </div>
</main>
<!-- Yandex.RTB R-A-15250751-1 -->
<script>
  window.yaContextCb.push(() => {
    Ya.Context.AdvManager.render({
      \"blockId\": \"R-A-15250751-1\",
      \"type\": \"fullscreen\",
      \"platform\": \"desktop\"
    })
  })
</script>
";
        // line 37
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 41
        yield "</body>

";
        // line 43
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 52
        yield "

</html>
";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->loadTemplate("/parts/header.twig", "layouts/layout.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["title" =>         $this->unwrap()->renderBlock("title", $context, $blocks), "description" =>         $this->unwrap()->renderBlock("description", $context, $blocks)]));
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "        ";
        yield from $this->loadTemplate("/parts/nav.twig", "layouts/layout.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    ";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "
    ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "
    ";
        // line 39
        yield from $this->loadTemplate("/parts/footer.twig", "layouts/layout.twig", 39)->unwrap()->yield($context);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 44), "html", null, true);
        yield "/assets/js/libs/jquery.min.js\"></script>
    <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 45), "html", null, true);
        yield "/assets/js/libs/jquery.magnific-popup.min.js\"></script>
    <script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 46), "html", null, true);
        yield "/assets/js/download.js\"></script>
    <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 47), "html", null, true);
        yield "/assets/js/app.js\"></script>
    <script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 48), "html", null, true);
        yield "/assets/js/auth.js\"></script>
    <script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 49), "html", null, true);
        yield "/assets/js/flash.min.js\"></script>
    <script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 50), "html", null, true);
        yield "/assets/js/libs/bootstrap.bundle.min.js\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/layout.twig";
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
        return array (  209 => 50,  205 => 49,  201 => 48,  197 => 47,  193 => 46,  189 => 45,  184 => 44,  177 => 43,  172 => 39,  169 => 38,  162 => 37,  156 => 19,  149 => 18,  144 => 15,  137 => 14,  132 => 12,  129 => 11,  122 => 10,  116 => 4,  109 => 3,  101 => 52,  99 => 43,  95 => 41,  93 => 37,  75 => 21,  73 => 18,  70 => 17,  67 => 16,  65 => 14,  62 => 13,  60 => 10,  55 => 7,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layouts/layout.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/layouts/layout.twig");
    }
}
