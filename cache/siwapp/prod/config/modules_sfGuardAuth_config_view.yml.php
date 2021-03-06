<?php
// auto-generated by sfViewConfigHandler
// date: 2014/07/29 16:21:53
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'signinSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'secureSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'passwordRecoverySuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'signinSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'empty' ? false : 'empty'.$this->getExtension());
  }
  $this->setComponentSlot('searchForm', 'search', 'form');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'form'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp', false, false);
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
  $response->addStylesheet('siwapp/login', '', array ());
  $response->addJavascript('siwapp/login', '', array ());
}
else if ($templateName.$this->viewName == 'secureSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'empty' ? false : 'empty'.$this->getExtension());
  }
  $this->setComponentSlot('searchForm', 'search', 'form');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'form'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp', false, false);
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
}
else if ($templateName.$this->viewName == 'passwordRecoverySuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $this->setComponentSlot('searchForm', 'search', 'form');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'form'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp', false, false);
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
  $this->setComponentSlot('searchForm', 'search', 'form');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'searchForm', 'search', 'form'))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'siwapp', false, false);
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

