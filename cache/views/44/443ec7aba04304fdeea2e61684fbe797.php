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

/* admin/login.twig */
class __TwigTemplate_bb1bfc79131665ee38f1f40eb9dfdda8 extends Template
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
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    Логин в админку
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0\">LOGIN</h1>
                        <div class=\"card\">
                            <div class=\"card-body login-card-body\">
                                <p class=\"login-box-msg\">Sign in to start your session</p>

                                <form action=\"/admin/auth/login\" method=\"POST\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\">
                                        <div class=\"input-group-append\">
                                            <div class=\"input-group-text\">
                                                <span class=\"fas fa-envelope\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"input-group mb-3\">
                                        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                                        <div class=\"input-group-append\">
                                            <div class=\"input-group-text\">
                                                <span class=\"fas fa-lock\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <!-- /.col -->
                                        <div class=\"col-4\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
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
        return "admin/login.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  96 => 11,  89 => 10,  83 => 7,  76 => 6,  70 => 3,  63 => 2,  58 => 10,  55 => 9,  53 => 6,  50 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/login.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/admin/login.twig");
    }
}
