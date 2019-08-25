<?php

namespace App\Modules\SystemHookView;

use floatPHP\Kernel\Module;
use DateTime;

class SystemHookViewModule extends Module
{
	public $namespace = '/App/Modules/SystemHookView';

	public function __construct()
	{
		// Preview assets hooks
		// $this->addJS("{$this->namespace}/assets/hook.js");
		// $this->addCSS("{$this->namespace}/assets/hook.css");

		// Preview background hooks
		$this->hook('action','content',function(){
			$this->render([], "SystemHookView/views/hook-section");
		});

		// Preview JS Config Hooks, shwon in console
		$this->hook('action','add-script-config',function(){
			echo "globalVars.hook = 'Hook is ready';";
		});

		$this->hook('action','content',function(){
			$hook = [
				'name'  => 'before-container', 
				'desc'  => 'Add content',
				'class' => 'bg-green'
			];
			// $this->render($hook, "SystemHookView/views/hook");
		});

		$this->hook('action','after-container',function(){
			$hook = [
				'name'  => 'after-container', 
				'desc'  => 'Add elements after container',
				'class' => 'bg-green'
			];
			// $this->render($hook, "SystemHookView/views/hook");
		});

		$this->hook('action','inside-content',function(){
			$hook = [
				'name'  => 'inside-content', 
				'desc'  => 'Add elements inside content',
				'class' => 'bg-blue'
			];
			// $this->render($hook, "SystemHookView/views/hook");
		});
		
		$this->hook('action','after-content',function(){
			$hook = [
				'name'  => 'after-content', 
				'desc'  => 'Add elements after content',
				'class' => 'bg-blue'
			];
			// $this->render($hook, "SystemHookView/views/hook");
		});

		$this->hook('action','nav-item',function(){
			// echo '<li><a><code>nav-item</code></a></li>';
		});

		$this->hook('action','topnav-item',function(){
			// echo '<li><a><code>topnav-item</code></a></li>';
		});

		$this->hook('action','topnav-title',function(){
			// echo '<span><code>topnav-title</code></span>';
		});
		
		$this->hook('action','statusbar-right',function(){
			// echo '<li><a><code>statusbar-right</code></a></li>';
		});

		$this->hook('action','statusbar-left',function(){
			// echo '<li><a><code>statusbar-left</code></a></li>';
		});
			
		$this->hook('action','add-modal',function(){
			$hook = [
				'name'  => 'add-modal', 
				'desc'  => 'Add modal content',
				'class' => 'bg-green'
			];
			// $this->render($hook, "SystemHookView/views/hook");
		});
	}
}
