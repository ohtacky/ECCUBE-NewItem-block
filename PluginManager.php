<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\NewItem;

use Eccube\Plugin\AbstractPluginManager;
use Symfony\Component\Filesystem\Filesystem;

class PluginManager extends AbstractPluginManager
{

    public function install($config, $app)
    {
      $this->migrationSchema($app, __DIR__ . '/Migration', $config['code']);

      $file = new Filesystem();
      try {
          $file->copy($app['config']['root_dir']. '/app/Plugin/NewItem/newitem.twig', $app['config']['root_dir']. '/app/template/default/Block/newitem.twig', true);
          return true;
      } catch (\Exception $e) {
          return false;
      }
    }

    public function uninstall($config, $app)
    {
    }

    public function enable($config, $app)
    {
    }

    public function disable($config, $app)
    {
    }

    public function update($config, $app)
    {
    }
}
