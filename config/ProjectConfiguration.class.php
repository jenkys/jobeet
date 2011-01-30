<?php

require_once 'C:\\Users\\jenkys\\programming\\www\\symfony_source\\1.4.6\\lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
