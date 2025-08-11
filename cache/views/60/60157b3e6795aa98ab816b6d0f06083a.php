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

/* layouts/admin_layout.twig */
class __TwigTemplate_8f2453ed4dcccebc5870563e6136b4ba extends Template
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
            'nav' => [$this, 'block_nav'],
            'aside' => [$this, 'block_aside'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
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
        // line 6
        yield "

";
        // line 8
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 11
        yield "
";
        // line 12
        yield from $this->unwrap()->yieldBlock('aside', $context, $blocks);
        // line 15
        yield "
";
        // line 16
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 19
        yield "<div id=\"overlay\">
    <div class=\"cv-spinner\">
        <span class=\"spinner\"></span>
    </div>
</div>
";
        // line 24
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 27
        yield "
";
        // line 28
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 64
        yield "</body>
</html>";
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
        yield from $this->loadTemplate("admin/parts/header.twig", "layouts/admin_layout.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["title" =>         $this->unwrap()->renderBlock("title", $context, $blocks)]));
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        yield from $this->loadTemplate("admin/parts/nav.twig", "layouts/admin_layout.twig", 9)->unwrap()->yield($context);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_aside(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield from $this->loadTemplate("admin/parts/aside.twig", "layouts/admin_layout.twig", 13)->unwrap()->yield($context);
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        yield from $this->loadTemplate("admin/parts/footer.twig", "layouts/admin_layout.twig", 25)->unwrap()->yield($context);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "
    <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 30), "html", null, true);
        yield "/assets/adminLte/plugins/jquery/jquery.min.js\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 32), "html", null, true);
        yield "/assets/adminLte/plugins/jquery-ui/jquery-ui.min.js\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 38), "html", null, true);
        yield "/assets/adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- ChartJS -->
    <script src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 40), "html", null, true);
        yield "/assets/adminLte/plugins/chart.js/Chart.min.js\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 42), "html", null, true);
        yield "/assets/adminLte/plugins/sparklines/sparkline.js\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 44), "html", null, true);
        yield "/assets/adminLte/plugins/jqvmap/jquery.vmap.min.js\"></script>
    <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 45), "html", null, true);
        yield "/assets/adminLte/plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 47), "html", null, true);
        yield "/assets/adminLte/plugins/moment/moment.min.js\"></script>
    <script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 48), "html", null, true);
        yield "/assets/adminLte/plugins/daterangepicker/daterangepicker.js\"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 50), "html", null, true);
        yield "/assets/adminLte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
    <!-- Summernote -->
    <script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 52), "html", null, true);
        yield "/assets/adminLte/plugins/summernote/summernote-bs4.min.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <link href=\"https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.2.2/datatables.min.css\" rel=\"stylesheet\" integrity=\"sha384-EMec0P+bM7BzPRifh0Da2z4pEzNGzbb1pmzxZ/E0fZjPky+56QS2Y+x6U/00/L2z\" crossorigin=\"anonymous\">

    <script src=\"https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.2.2/datatables.min.js\" integrity=\"sha384-h+dgoYlXhgp1Rdr2BQORgRZ8uTV8KHpMEDxsAXD5RMRvytPCeeiubqmZx5ZIewmp\" crossorigin=\"anonymous\"></script>

    <script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 59), "html", null, true);
        yield "/assets/js/flash.min.js\"></script>
    <script src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 60), "html", null, true);
        yield "/assets/adminLte/dist/js/adminlte.js\"></script>
    <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 61), "html", null, true);
        yield "/assets/js/admin/file-upload.js\"></script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/admin_layout.twig";
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
        return array (  236 => 61,  232 => 60,  228 => 59,  218 => 52,  213 => 50,  208 => 48,  204 => 47,  199 => 45,  195 => 44,  190 => 42,  185 => 40,  180 => 38,  171 => 32,  166 => 30,  163 => 29,  156 => 28,  150 => 25,  143 => 24,  137 => 17,  130 => 16,  124 => 13,  117 => 12,  111 => 9,  104 => 8,  98 => 4,  91 => 3,  85 => 64,  83 => 28,  80 => 27,  78 => 24,  71 => 19,  69 => 16,  66 => 15,  64 => 12,  61 => 11,  59 => 8,  55 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set init = app.config.init %}

{% block head %}
    {% include \"admin/parts/header.twig\"  with {title: block('title')} %}
{% endblock %}


{% block nav %}
    {% include \"admin/parts/nav.twig\" %}
{% endblock %}

{% block aside %}
    {% include \"admin/parts/aside.twig\" %}
{% endblock %}

{% block content %}

{% endblock %}
<div id=\"overlay\">
    <div class=\"cv-spinner\">
        <span class=\"spinner\"></span>
    </div>
</div>
{% block footer %}
    {% include \"admin/parts/footer.twig\" %}
{% endblock %}

{% block scripts %}

    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/jquery/jquery.min.js\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/jquery-ui/jquery-ui.min.js\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- ChartJS -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/chart.js/Chart.min.js\"></script>
    <!-- Sparkline -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/sparklines/sparkline.js\"></script>
    <!-- JQVMap -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/jqvmap/jquery.vmap.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
    <!-- daterangepicker -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/moment/moment.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/daterangepicker/daterangepicker.js\"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
    <!-- Summernote -->
    <script src=\"{{ init.PATH }}/assets/adminLte/plugins/summernote/summernote-bs4.min.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <link href=\"https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.2.2/datatables.min.css\" rel=\"stylesheet\" integrity=\"sha384-EMec0P+bM7BzPRifh0Da2z4pEzNGzbb1pmzxZ/E0fZjPky+56QS2Y+x6U/00/L2z\" crossorigin=\"anonymous\">

    <script src=\"https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.2.2/datatables.min.js\" integrity=\"sha384-h+dgoYlXhgp1Rdr2BQORgRZ8uTV8KHpMEDxsAXD5RMRvytPCeeiubqmZx5ZIewmp\" crossorigin=\"anonymous\"></script>

    <script src=\"{{ init.PATH }}/assets/js/flash.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/adminLte/dist/js/adminlte.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/admin/file-upload.js\"></script>

{% endblock %}
</body>
</html>", "layouts/admin_layout.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\layouts\\admin_layout.twig");
    }
}
