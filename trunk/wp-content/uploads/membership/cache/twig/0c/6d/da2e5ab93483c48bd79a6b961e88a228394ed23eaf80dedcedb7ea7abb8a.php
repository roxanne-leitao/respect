<?php

/* @reports/backend/index.twig */
class __TwigTemplate_0c6dda2e5ab93483c48bd79a6b961e88a228394ed23eaf80dedcedb7ea7abb8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@base/layouts/backend.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@base/layouts/backend.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["options"] = $this->env->loadTemplate("@base/macros/options.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"sc-tabs\">
        <a href=\"#\" class=\"tab active\" data-target=\"reports\">
            <i class=\"fa fa-flag\"></i>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reports")), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    // line 12
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 13
        echo "    <h2 class=\"sc-header\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reports")), "html", null, true);
        echo "</h2>
";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"mp-option\" id=\"search\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                ";
        // line 20
        echo $context["options"]->getlabel("Search");
        echo "
            </div>
            <div class=\"col-md-4\">
                <div class=\"report-filter search\">
                    <input class=\"sc-input\" name=\"search\">
                </div>
            </div>
            <div class=\"col-md-2\">
                <button class=\"sc-button primary\">Search</button>
            </div>
        </div>
    </div>
    <table class=\"sc-table reports\" data-reports=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["reports"]) ? $context["reports"] : null)), "html", null, true);
        echo "\">
        <tr>
            <th><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (((isset($context["reportsUrl"]) ? $context["reportsUrl"] : null) . "&order_by=date") . ((((isset($context["orderBy"]) ? $context["orderBy"] : null) == "date")) ? ("+desc") : (""))), "html", null, true);
        echo "\">Date</a></th>
            <th><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (((isset($context["reportsUrl"]) ? $context["reportsUrl"] : null) . "&order_by=content_type") . ((((isset($context["orderBy"]) ? $context["orderBy"] : null) == "content_type")) ? ("+desc") : (""))), "html", null, true);
        echo "\">Content type</a></th>
            <th>Content</th>
            <th>Comment</th>
            <th><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (((isset($context["reportsUrl"]) ? $context["reportsUrl"] : null) . "&order_by=reporter_id") . ((((isset($context["orderBy"]) ? $context["orderBy"] : null) == "reporter_id")) ? ("+desc") : (""))), "html", null, true);
        echo "\">Reporter</a></th>
            <th><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (((isset($context["reportsUrl"]) ? $context["reportsUrl"] : null) . "&order_by=reported_id") . ((((isset($context["orderBy"]) ? $context["orderBy"] : null) == "reported_id")) ? ("+desc") : (""))), "html", null, true);
        echo "\">Reported</a></th>
            <th><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (((isset($context["reportsUrl"]) ? $context["reportsUrl"] : null) . "&order_by=status") . ((((isset($context["orderBy"]) ? $context["orderBy"] : null) == "status")) ? ("+desc") : (""))), "html", null, true);
        echo "\">Status</a></th>
        </tr>
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 43
            echo "        <tr class=\"report\" data-report-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "id"), "html", null, true);
            echo "\" data-report=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["report"]) ? $context["report"] : null)), "html", null, true);
            echo "\">
            <td>
                <div class=\"date\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "date"), "html", null, true);
            echo "</div>
            </td>
            <td>
                <div class=\"content-type\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "content_type"), "html", null, true);
            echo "</div>
            </td>
            <td>
                <div class=\"content\">";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "content"), 0, 80), "html", null, true);
            echo "</div>
            </td>
            <td>
                <div class=\"comment\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "comment"), "html", null, true);
            echo "</div>
            </td>
            <td>
                <div class=\"reporter\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "reporter_link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "reporter_name"), "html", null, true);
            echo "</a></div>
            </td>
            <td>
                <div class=\"reported\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "reported_link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "reported_name"), "html", null, true);
            echo "</a></div>
            </td>
            <td>
                <div class=\"status\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "status"), "html", null, true);
            echo "</div>
            </td>
            <td>
                <div class=\"info\">
                    <a href=\"#\" class=\"more-info\">More info</a>
                </div>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </table>
    <div class=\"sc-hidden report-details-template\">
        ";
        // line 74
        $this->env->loadTemplate("@reports/backend/partials/report-details.twig")->display($context);
        // line 75
        echo "    </div>
    <div class=\"mp-modal send-message-modal sc-hidden\">
        <div class=\"mp-option\" id=\"message\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <input type=\"hidden\" class=\"user-id\" name=\"user-id\" value=\"\">
                    <div class=\"mp-option-label\">
                        <span id=\"message-label\" title=\"\">Compose message</span>
                    </div>
                    <div class=\"mp-option-input\">
                        <textarea id=\"message-input\" class=\"sc-input\" name=\"\" cols=\"35\" rows=\"10\"></textarea>
                    </div>
                    <div class=\"mp-result\">
                        <span id=\"message-result\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@reports/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 75,  179 => 74,  175 => 72,  160 => 63,  152 => 60,  144 => 57,  138 => 54,  132 => 51,  126 => 48,  120 => 45,  112 => 43,  108 => 42,  103 => 40,  99 => 39,  95 => 38,  89 => 35,  85 => 34,  80 => 32,  65 => 20,  60 => 17,  57 => 16,  50 => 13,  47 => 12,  39 => 7,  35 => 5,  32 => 4,  27 => 2,);
    }
}
