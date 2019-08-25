<?php

namespace App\Modules\SystemPlugin;

use floatPHP\Kernel\Module;
use DateTime;

class SystemPluginModule extends Module
{
	public $namespace = '/App/Modules/SystemPlugin';

	public function __construct()
	{
		// Preview assets hooks
		// $this->addJS("{$this->namespace}/assets/hook.js");
		// $this->addCSS("{$this->namespace}/assets/hook.css");

		$this->hook('action','sidebar-item',function(){
			$this->render([], "SystemPlugin/views/menu");
		});

		// Preview background hooks
		$this->hook('action','content',function(){
			$this->render([], "SystemPlugin/views/list");
		});
	}

	public function list()
	{
		// ...
	}

	public function enable()
	{
		// ...
	}	
	
	public function disable()
	{
		// ...
	}
}
