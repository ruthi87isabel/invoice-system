<?php

/* 1 */
class __TwigTemplate_5b441a318dcb9547456125094c50fa27 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context['lang']) ? $context['lang'] : null), "html");
        echo "\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <title>Invoice</title>

  <style type=\"text/css\">
    /* Custom CSS code */
    table {border-spacing:0; border-collapse: collapse;}
    ul {list-style-type: none; padding-left:0;}
    body, input, textarea { font-family:helvetica,sans-serif; font-size:8pt; }
    body { color:#464648; margin:2cm 1.5cm; }
    h2   { color:#535255; font-size:16pt; font-weight:normal; line-height:1.2em; border-bottom:1px solid #DB4823; margin-right:220px }
    h3   { color:#9A9A9A; font-size:13pt; font-weight:normal; margin-bottom: 0em}

    table th.right,
    table td.right              { text-align:right; }

    .customer-data              { padding:1em 0; }
    .customer-data table        { width:100%;       }
    .customer-data table td     { width:50%;        }
    .customer-data td span      { display:block; margin:0 0 5pt; padding-bottom:2pt; border-bottom:1px solid #DCDCDC; }
    .customer-data td span.left { margin-right:1em; }
    .customer-data label        { display:block; font-weight:bold; font-size:8pt; }
    .payment-data               { padding:1em 0;    }
    .payment-data table         { width:100%;       }
    .payment-data th,
    .payment-data td            { line-height:1em; padding:5pt 8pt 5pt; border:1px solid #DCDCDC; }
    .payment-data thead th      { background:#FAFAFA; }
    .payment-data th            { font-weight:bold; white-space:nowrap; }
    .payment-data .bottomleft   { border-color:white; border-top:inherit; border-right:inherit; }
    .payment-data span.tax      { display:block; white-space:nowrap; }
    .terms, .notes              { padding:9pt 0 0; font-size:7pt; line-height:9pt; }

    .section                    { margin-bottom: 1em; }
    .logo                       { text-align: right; }
  </style>

  <style type=\"text/css\">
    /* CSS code for printing */
    @media print {
      body           { margin:auto; }
      .section       { page-break-inside:avoid; }
      div#sfWebDebug { display:none; }
    }
  </style>
</head>
<body>

  ";
        // line 50
        if ($this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_logo", array(), "any", false)) {
            // line 51
            echo "    <div class=\"logo\">
      <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_logo", array(), "any", false), "html");
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_name", array(), "any", false), "html");
            echo "\" />
    </div>
  ";
        }
        // line 55
        echo "    
  <div class=\"h2\">
    <h2>Invoice #";
        // line 57
        echo twig_escape_filter($this->env, (isset($context['invoice']) ? $context['invoice'] : null), "html");
        echo "</h2>
  </div>

  <div class=\"section\">
    <div class=\"company-data\">
      <ul>
        <li>Company: ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_name", array(), "any", false), "html");
        echo "</li>
        <li>Address: ";
        // line 64
        echo simple_format_text(twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_address", array(), "any", false), "html"));
        echo "</li>
        <li>Phone: ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_phone", array(), "any", false), "html");
        echo "</li>
        <li>Fax: ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_fax", array(), "any", false), "html");
        echo "</li>
        <li>Email: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_email", array(), "any", false), "html");
        echo "</li>
        <li>Web: ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "company_url", array(), "any", false), "html");
        echo "</li>
      </ul>
    </div>
  </div>

  <div class=\"section\">
    <h3>Client info</h3>

    <div class=\"customer-data\">
      <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
        <tr>
          <td>
            <span class=\"left\">
              <label>Customer:</label>
              ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "customer_name", array(), "any", false), "html");
        echo "
            </span>
          </td>
          <td>
            <span class=\"right\">
              <label>Customer identification:</label>
              ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "customer_identification", array(), "any", false), "html");
        echo "
            </span>
          </td>
        </tr>
        <tr>
          <td>
            <span class=\"left\">
              <label>Contact person:</label>
              ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "contact_person", array(), "any", false), "html");
        echo "
            </span>
          </td>
          <td>
            <span class=\"right\">
              <label>Email:</label>
              ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "customer_email", array(), "any", false), "html");
        echo "
            </span>
          </td>
        </tr>
        <tr>
          <td>
            <span class=\"left\">
              <label>Invoicing address:</label>
              ";
        // line 110
        echo simple_format_text(twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "invoicing_address", array(), "any", false), "html"));
        echo "
            </span>
          </td>
          <td>
            <span class=\"right\">
              <label>Shipping address:</label>
              ";
        // line 116
        echo simple_format_text(twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "shipping_address", array(), "any", false), "html"));
        echo "
            </span>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <div class=\"section\">
    <h3>Payment details</h3>

    <div class=\"payment-data\">
      <table>
        <thead>
          <tr>
            <th>Description</th>
            <th class=\"right\">Unit Cost</th>
            <th class=\"right\">Qty</th>
            <th class=\"right\">Taxes</th>
            ";
        // line 136
        echo "            ";
        if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
            // line 137
            echo "            <th class=\"right\">Discount</th>
            ";
        }
        // line 139
        echo "            <th class=\"right\">Price</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 143
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "Items", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 144
            echo "            <tr>
              <td>
                ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "description", array(), "any", false), "html");
            echo "
              </td>
              <td class=\"right\">";
            // line 148
            echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['item']) ? $context['item'] : null), "unitary_cost", array(), "any", false)), "html");
            echo "</td>
              <td class=\"right\">";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any", false), "html");
            echo "</td>
              <td class=\"right\">
                ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['item']) ? $context['item'] : null), "Taxes", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tax']) {
                // line 152
                echo "                  <span class=\"tax\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['tax']) ? $context['tax'] : null), "name", array(), "any", false), "html");
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 154
            echo "              </td>
              ";
            // line 155
            if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
                // line 156
                echo "              <td class=\"right\">";
                echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['item']) ? $context['item'] : null), "discount_amount", array(), "any", false)), "html");
                echo "</td>
              ";
            }
            // line 158
            echo "              <td class=\"right\">";
            echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['item']) ? $context['item'] : null), "gross_amount", array(), "any", false)), "html");
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 161
        echo "        </tbody>
        <tfoot>
          <tr>
            <td class=\"bottomleft\" colspan=\"";
        // line 164
        if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
            echo "4";
        } else {
            echo "3";
        }
        echo "\"></td>
            <th class=\"right\">Base</th>
            <td class=\"right\">";
        // line 166
        echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "base_amount", array(), "any", false)), "html");
        echo "</td>
          </tr>
          ";
        // line 168
        if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
            // line 169
            echo "          <tr>
            <td class=\"bottomleft\" colspan=\"";
            // line 170
            if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
                echo "4";
            } else {
                echo "3";
            }
            echo "\"></td>
            <th class=\"right\">Discount</th>
            <td class=\"td_global_discount right\">";
            // line 172
            echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)), "html");
            echo "</td>
          </tr>
          ";
        }
        // line 175
        echo "          <tr>
            <td class=\"bottomleft\" colspan=\"";
        // line 176
        if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
            echo "4";
        } else {
            echo "3";
        }
        echo "\"></td>
            <th class=\"right\">Subtotal</th>
            <td class=\"td_subtotal right\">";
        // line 178
        echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "net_amount", array(), "any", false)), "html");
        echo "</td>
          </tr>
          <tr>
            <td class=\"bottomleft\" colspan=\"";
        // line 181
        if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
            echo "4";
        } else {
            echo "3";
        }
        echo "\"></td>
            <th class=\"right\">Taxes</th>
            <td class=\"td_total_taxes right\">";
        // line 183
        echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "tax_amount", array(), "any", false)), "html");
        echo "</td>
          </tr>
          <tr class=\"strong\">
            <td class=\"bottomleft\" colspan=\"";
        // line 186
        if ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "discount_amount", array(), "any", false)) {
            echo "4";
        } else {
            echo "3";
        }
        echo "\"></td>
            <th class=\"right\">Total</th>
            <td class=\"td_total right\">";
        // line 188
        echo twig_escape_filter($this->env, common_twig_extension_format_currency($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "gross_amount", array(), "any", false)), "html");
        echo "</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  
  <div class=\"section\">
    <h3>Terms & conditions</h3>
    <div class=\"terms\">
      ";
        // line 198
        echo simple_format_text(twig_escape_filter($this->env, $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "terms", array(), "any", false), "html"));
        echo "
    </div>
  </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "1";
    }

    public function isTraitable()
    {
        return false;
    }
}
