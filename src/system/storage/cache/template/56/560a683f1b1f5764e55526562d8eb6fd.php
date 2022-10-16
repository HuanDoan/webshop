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

/* admin/view/template/tool/log.twig */
class __TwigTemplate_5754440a44c2b6018cbae888421a34c5 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        // line 17
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
        // line 18
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          ";
        // line 21
        $context["i"] = 0;
        // line 22
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 23
            echo "            <li class=\"nav-item\"><a href=\"#tab-log-";
            echo ($context["i"] ?? null);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if ((($context["i"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["log"], "name", [], "any", false, false, false, 23);
            echo "</a></li>
            ";
            // line 24
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 25
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </ul>
        <div class=\"tab-content\">
          ";
        // line 28
        $context["i"] = 0;
        // line 29
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 30
            echo "            <div id=\"tab-log-";
            echo ($context["i"] ?? null);
            echo "\" class=\"tab-pane";
            if ((($context["i"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
              ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["log"], "error", [], "any", false, false, false, 31)) {
                // line 32
                echo "                <div class=\"alert alert-danger\">";
                echo twig_get_attribute($this->env, $this->source, $context["log"], "error", [], "any", false, false, false, 32);
                echo "</div>
              ";
            }
            // line 34
            echo "              <textarea name=\"log\" wrap=\"off\" rows=\"15\" id=\"input-log-";
            echo ($context["i"] ?? null);
            echo "\" class=\"form-control\" readonly>";
            echo twig_get_attribute($this->env, $this->source, $context["log"], "output", [], "any", false, false, false, 34);
            echo "</textarea>
              <br/>
              <div class=\"row row-cols-2\">
                <div class=\"col\">
                  <a href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["log"], "download", [], "any", false, false, false, 38);
            echo "\" class=\"btn btn-primary w-100\"";
            if ( !twig_get_attribute($this->env, $this->source, $context["log"], "download", [], "any", false, false, false, 38)) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-download\"></i> ";
            echo ($context["button_download"] ?? null);
            echo "</a>
                </div>
                <div class=\"col\">
                  <button type=\"button\" value=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["log"], "clear", [], "any", false, false, false, 41);
            echo "\" data-oc-target=\"input-log-";
            echo ($context["i"] ?? null);
            echo "\" class=\"btn btn-danger w-100\"><i class=\"fa-solid fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                </div>
              </div>
            </div>
            ";
            // line 45
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 46
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('.tab-content .btn-danger').on('click', function () {
    var element = this;

    if (confirm('";
        // line 56
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        \$.ajax({
            url: \$(element).attr('value'),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#' + \$(element).attr('data-oc-target')).val('');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 86
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/tool/log.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  194 => 56,  183 => 47,  177 => 46,  175 => 45,  164 => 41,  152 => 38,  142 => 34,  136 => 32,  134 => 31,  125 => 30,  120 => 29,  118 => 28,  114 => 26,  108 => 25,  106 => 24,  95 => 23,  90 => 22,  88 => 21,  82 => 18,  79 => 17,  73 => 15,  71 => 14,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/tool/log.twig", "/var/www/html/admin/view/template/tool/log.twig");
    }
}
