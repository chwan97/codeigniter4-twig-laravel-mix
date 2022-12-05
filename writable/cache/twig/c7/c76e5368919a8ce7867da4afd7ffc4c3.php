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

/* page1.html.twig */
class __TwigTemplate_9d85fd85eecda39ea6c3d9ce2fe40830 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>page1</title>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('mix')->getCallable()("/css/page1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <p>下方为 react 渲染部分</p>
        <div id=\"errors\" style=\"
              background: #c00;
              color: #fff;
              display: none;
              margin: -20px -20px 20px;
              padding: 20px;
              white-space: pre-wrap;
            \"></div>
        <div id=\"root\"></div>
        <script>
            window.addEventListener('mousedown', function (e) {
                document.body.classList.add('mouse-navigation');
                document.body.classList.remove('kbd-navigation');
            });
            window.addEventListener('keydown', function (e) {
                if (e.keyCode === 9) {
                    document.body.classList.add('kbd-navigation');
                    document.body.classList.remove('mouse-navigation');
                }
            });
            window.addEventListener('click', function (e) {
                if (e.target.tagName === 'A' && e.target.getAttribute('href') === '#') {
                    e.preventDefault();
                }
            });
            window.onerror = function (message, source, line, col, error) {
                var text = error ? error.stack || error : message + ' (at ' + source + ':' + line + ':' + col + ')';
                errors.textContent += text + '\\n';
                errors.style.display = '';
            };
            console.error = (function (old) {
                return function error() {
                    errors.textContent += Array.prototype.slice.call(arguments).join(' ') + '\\n';
                    errors.style.display = '';
                    old.apply(this, arguments);
                }
            })(console.error);
        </script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getFunction('mix')->getCallable()("/js/page1.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 50,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page1.html.twig", "/Users/chwan/Desktop/repo/bbp/project-root/app/Views/page1.html.twig");
    }
}
