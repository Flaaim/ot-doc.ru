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

/* /admin/template/other/upload.twig */
class __TwigTemplate_d2d274da5d1a1f707ccf3bb534b49bfb extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/admin_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/admin_layout.twig", "/admin/template/other/upload.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    Загрузка
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-3\">Загрузить прочий документ</h1>
                        <div class=\"mb-3\">
                            <form id=\"upload\" encType=\"multipart/form-data\" action=\"/admin/file/upload\">
                                <p>
                                    <b>Выберите тип прочего документа:</b>
                                </p>
                                <div class=\"form-group\">
                                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 26
            yield "                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\"  type=\"checkbox\" name=\"type[]\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
                                            <label class=\"form-check-label\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 28), "html", null, true);
            yield "</label>
                                        </div>
                                        ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "children", [], "any", false, false, false, 30) != null)) {
                // line 31
                yield "
                                            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "children", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["children_type"]) {
                    // line 33
                    yield "                                            <div class=\"form-check mx-4\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"type[]\" value=\"";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["children_type"], "id", [], "any", false, false, false, 34), "html", null, true);
                    yield "\">
                                                <label class=\"form-check-label\" >";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["children_type"], "name", [], "any", false, false, false, 35), "html", null, true);
                    yield "</label>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['children_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "                                        ";
            }
            // line 39
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                                </div>
                                <div class=\"custom-file\">
                                <input type=\"file\" id=\"instructions_upload\" class=\"custom-file-input\" name=\"file[]\" multiple=\"multiple\" />
                                    <label class=\"custom-file-label\" for=\"instructions_upload\">Выберите файлы</label>
                                </div>
                                <input type=\"hidden\" name=\"template_id\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        yield "\">
                                <div class=\"input-group-append mt-3\">
                                <button type=\"submit\"  class=\"btn btn-outline-success\" id=\"file-upload\">Загрузить</button>
                                </div>
                            </form>

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/admin/template/other/upload.twig";
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
        return array (  158 => 45,  151 => 40,  145 => 39,  142 => 38,  133 => 35,  129 => 34,  126 => 33,  122 => 32,  119 => 31,  117 => 30,  112 => 28,  108 => 27,  105 => 26,  101 => 25,  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/admin_layout.twig\" %}

{% block title %}
    Загрузка
{% endblock %}

{% block description %}

{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-3\">Загрузить прочий документ</h1>
                        <div class=\"mb-3\">
                            <form id=\"upload\" encType=\"multipart/form-data\" action=\"/admin/file/upload\">
                                <p>
                                    <b>Выберите тип прочего документа:</b>
                                </p>
                                <div class=\"form-group\">
                                    {% for type in types %}
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\"  type=\"checkbox\" name=\"type[]\" value=\"{{ type.id }}\">
                                            <label class=\"form-check-label\">{{ type.name }}</label>
                                        </div>
                                        {% if type.children != null %}

                                            {% for children_type in type.children %}
                                            <div class=\"form-check mx-4\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"type[]\" value=\"{{ children_type.id }}\">
                                                <label class=\"form-check-label\" >{{ children_type.name }}</label>
                                            </div>
                                            {% endfor %}
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <div class=\"custom-file\">
                                <input type=\"file\" id=\"instructions_upload\" class=\"custom-file-input\" name=\"file[]\" multiple=\"multiple\" />
                                    <label class=\"custom-file-label\" for=\"instructions_upload\">Выберите файлы</label>
                                </div>
                                <input type=\"hidden\" name=\"template_id\" value=\"{{ template.id }}\">
                                <div class=\"input-group-append mt-3\">
                                <button type=\"submit\"  class=\"btn btn-outline-success\" id=\"file-upload\">Загрузить</button>
                                </div>
                            </form>

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
{% endblock %}", "/admin/template/other/upload.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\admin\\template\\other\\upload.twig");
    }
}
