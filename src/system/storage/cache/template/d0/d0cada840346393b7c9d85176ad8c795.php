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

/* extension/opencart/admin/view/template/dashboard/chart_info.twig */
class __TwigTemplate_579d2bfb6f4180d5ca3daa30b70fd678 extends Template
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
        echo "<div class=\"card mb-3\">
  <div class=\"card-header\">
    <div class=\"float-end\"><a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-regular fa-calendar\"></i> <i class=\"fa-solid fa-caret-down\"></i></a>
      <div id=\"range\" class=\"dropdown-menu dropdown-menu-right\">
        <a href=\"day\" class=\"dropdown-item\">";
        // line 5
        echo ($context["text_day"] ?? null);
        echo "</a> <a href=\"week\" class=\"dropdown-item\">";
        echo ($context["text_week"] ?? null);
        echo "</a> <a href=\"month\" class=\"dropdown-item active\">";
        echo ($context["text_month"] ?? null);
        echo "</a> <a href=\"year\" class=\"dropdown-item\">";
        echo ($context["text_year"] ?? null);
        echo "</a>
      </div>
    </div>
    <i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "
  </div>
  <div class=\"card-body\">
    <div id=\"chart-sale\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.resize.min.js\"></script>
<script type=\"text/javascript\"><!--
\$('#range a').on('click', function (e) {
    e.preventDefault();

    \$(this).parent().find('a').removeClass('active');

    \$(this).addClass('active');

    \$.ajax({
        type: 'get',
        url: 'index.php?route=extension/opencart/dashboard/chart|chart&user_token=";
        // line 26
        echo ($context["user_token"] ?? null);
        echo "&range=' + \$(this).attr('href'),
        dataType: 'json',
        success: function (json) {
            if (typeof json['order'] == 'undefined') {
                return false;
            }

            var option = {
                shadowSize: 0,
                colors: ['#9FD5F1', '#1065D2'],
                bars: {
                    show: true,
                    fill: true,
                    lineWidth: 1
                },
                grid: {
                    backgroundColor: '#FFFFFF',
                    hoverable: true
                },
                points: {
                    show: false
                },
                xaxis: {
                    show: true,
                    ticks: json['xaxis']
                }
            }

            \$.plot('#chart-sale', [json['order'], json['customer']], option);

            \$('#chart-sale').bind('plothover', function (event, pos, item) {
                \$('.tooltip').remove();

                if (item) {
                    \$('<div id=\"tooltip\" class=\"tooltip top show\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');

                    \$('#tooltip').css({
                        position: 'absolute',
                        left: item.pageX - (\$('#tooltip').outerWidth() / 2),
                        top: item.pageY - \$('#tooltip').outerHeight(),
                        pointer: 'cursor'
                    }).fadeIn('slow');

                    \$('#chart-sale').css('cursor', 'pointer');
                } else {
                    \$('#chart-sale').css('cursor', 'auto');
                }
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#range a.active').trigger('click');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/chart_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  55 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/dashboard/chart_info.twig", "/var/www/html/extension/opencart/admin/view/template/dashboard/chart_info.twig");
    }
}
