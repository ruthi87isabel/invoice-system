<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2014/07/29 17:04:58
sfConfig::add(array(
  'mod_invoices_enabled' => true,
  'mod_invoices_view_class' => 'sfPHP',
  'mod_invoices_urls_include' => array (
  0 => 'payments',
  1 => 'search',
),
  'mod_invoices_urls_variables' => array (
  'editRow' => 'invoices/edit',
  'calculateInvoice' => 'common/calculate',
  'printHtml' => '@invoices_print?action=print',
  'printPdf' => '@invoices_print?action=pdf',
),
));