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

/* /admin/template/instructions/edit.twig */
class __TwigTemplate_955bb0f9984223f5f84e03009b46532a extends Template
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
        $this->parent = $this->loadTemplate("layouts/admin_layout.twig", "/admin/template/instructions/edit.twig", 1);
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
        yield "    Редактирование инструкции
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
                        <h1 class=\"m-3\">Редактирование инструкции </h1>
                        <form>
                            <div class=\"card-body\">
                                <div class=\"form-group\">
                                    <label for=\"title\">Название инструкции</label>
                                    <input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" placeholder=\"Название инструкции\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputFile\">File input</label>
                                    <div class=\"input-group\">
                                        <div class=\"custom-file\">
                                            <input type=\"file\" class=\"custom-file-input\" id=\"exampleInputFile\">
                                            <label class=\"custom-file-label\" for=\"exampleInputFile\">Новый файл</label>
                                        </div>
                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">Загрузить файл</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-primary\">Изменить</button>
                            </div>
                        </form>
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
        return "/admin/template/instructions/edit.twig";
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
        return array (  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/admin_layout.twig\" %}

{% block title %}
    Редактирование инструкции
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
                        <h1 class=\"m-3\">Редактирование инструкции </h1>
                        <form>
                            <div class=\"card-body\">
                                <div class=\"form-group\">
                                    <label for=\"title\">Название инструкции</label>
                                    <input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" placeholder=\"Название инструкции\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputFile\">File input</label>
                                    <div class=\"input-group\">
                                        <div class=\"custom-file\">
                                            <input type=\"file\" class=\"custom-file-input\" id=\"exampleInputFile\">
                                            <label class=\"custom-file-label\" for=\"exampleInputFile\">Новый файл</label>
                                        </div>
                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">Загрузить файл</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-primary\">Изменить</button>
                            </div>
                        </form>
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
{% endblock %}", "/admin/template/instructions/edit.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\admin\\template\\instructions\\edit.twig");
    }
}
