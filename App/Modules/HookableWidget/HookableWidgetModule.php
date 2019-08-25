<?php

namespace App\Modules\HookableWidget;

use floatPHP\Kernel\Module;

class HookableWidgetModule extends Module
{
	protected $namespace = '/App/Modules/HookableWidget';
	
	public function __construct()
	{
		$this->hook('action','content',[$this,'getTemplate']);
		// $this->addJS("{$this->namespace}/assets/script.js");
		// $this->addCSS("{$this->namespace}/assets/style.css");
	}

	public function getTemplate()
	{
		$this->render([], "HookableWidget/views/example");
	}

	public function getExample()
	{
		return 'example';
	}
}
