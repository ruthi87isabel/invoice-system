<?php
// auto-generated by sfViewConfigHandler
// date: 2014/07/29 16:56:47
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'indexSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'editSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'indexSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $this->setComponentSlot('searchForm', 'search', 'estimateForm');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'estimateForm'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp - Estimates', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('tripoli/tripoli', '', array (  'media' => 'all',));
  $response->addStylesheet('tripoli/tripoli.ie.css', '', array (  'media' => 'all',  'condition' => 'ie',));
  $response->addStylesheet('siwapp/layout', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/typography', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/buttons', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/theme', '', array ());
  $response->addStylesheet('siwapp/controls', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/print', '', array (  'media' => 'print',));
  $response->addStylesheet('ui-orange/ui.all.css', '', array (  'media' => 'all',));
  $response->addStylesheet('/sfFormExtraPlugin/css/jquery.autocompleter.css', '', array ());
  $response->addJavascript('/js/core/js/jquery.js', '', array ());
  $response->addJavascript('/js/core/js/plugins/ui.js', '', array ());
  $response->addJavascript('/js/core/js/plugins/autocomplete.js', '', array ());
  $response->addJavascript('core/hash.js', '', array ());
  $response->addJavascript('core/i18n.js', '', array ());
  $response->addJavascript('core/timers.js', '', array ());
  $response->addJavascript('core/tools.js', '', array ());
  $response->addJavascript('siwapp/searchform.js', '', array ());
  $response->addJavascript('core/table.js', '', array ());
}
else if ($templateName.$this->viewName == 'editSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $this->setComponentSlot('searchForm', 'search', 'estimateForm');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'estimateForm'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp - Estimates', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('tripoli/tripoli', '', array (  'media' => 'all',));
  $response->addStylesheet('tripoli/tripoli.ie.css', '', array (  'media' => 'all',  'condition' => 'ie',));
  $response->addStylesheet('siwapp/layout', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/typography', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/buttons', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/theme', '', array ());
  $response->addStylesheet('siwapp/controls', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/print', '', array (  'media' => 'print',));
  $response->addStylesheet('ui-orange/ui.all.css', '', array (  'media' => 'all',));
  $response->addStylesheet('/sfFormExtraPlugin/css/jquery.autocompleter.css', '', array ());
  $response->addJavascript('/js/core/js/jquery.js', '', array ());
  $response->addJavascript('/js/core/js/plugins/ui.js', '', array ());
  $response->addJavascript('/js/core/js/plugins/autocomplete.js', '', array ());
  $response->addJavascript('core/hash.js', '', array ());
  $response->addJavascript('core/i18n.js', '', array ());
  $response->addJavascript('core/timers.js', '', array ());
  $response->addJavascript('core/tools.js', '', array ());
  $response->addJavascript('siwapp/searchform.js', '', array ());
  $response->addJavascript('core/json2', '', array ());
  $response->addJavascript('core/form', '', array ());
  $response->addJavascript('core/field', '', array ());
  $response->addJavascript('core/hotkeys', '', array ());
  $response->addJavascript('invoice', '', array ());
  $response->addJavascript('tags', '', array ());
  $response->addJavascript('jquery.textarearesizer.compressed.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $this->setComponentSlot('searchForm', 'search', 'estimateForm');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'estimateForm'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp - Estimates', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('tripoli/tripoli', '', array (  'media' => 'all',));
  $response->addStylesheet('tripoli/tripoli.ie.css', '', array (  'media' => 'all',  'condition' => 'ie',));
  $response->addStylesheet('siwapp/layout', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/typography', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/buttons', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/theme', '', array ());
  $response->addStylesheet('siwapp/controls', '', array (  'media' => 'all',));
  $response->addStylesheet('siwapp/print', '', array (  'media' => 'print',));
  $response->addStylesheet('ui-orange/ui.all.css', '', array (  'media' => 'all',));
  $response->addJavascript('/js/core/js/jquery.js', '', array ());
  $response->addJavascript('/js/core/js/plugins/ui.js', '', array ());
  $response->addJavascript('/js/core/js/plugins/autocomplete.js', '', array ());
  $response->addJavascript('core/hash.js', '', array ());
  $response->addJavascript('core/i18n.js', '', array ());
  $response->addJavascript('core/timers.js', '', array ());
  $response->addJavascript('core/tools.js', '', array ());
  $response->addJavascript('siwapp/searchform.js', '', array ());
}

