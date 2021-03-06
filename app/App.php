<?php

use Core\Config;
use Core\Database\MysqlDatabase;

class App
{
	public $title = "Blog Profesionnel";
	private $db_instance;
	private static $_instance;

	public static function getInstance()
	{
		if(is_null(self::$_instance))
			{
				self::$_instance = new App();
			}
			return self::$_instance;
	}

	public static function load()
	{
		require ROOT . '/app/autoloader.php';
		App\Autoloader::register();
		require ROOT . '/core/autoloader.php';
		Core\Autoloader::register();
	}

	public function getTable($name)
	{
		$class_name = '\\App\\Table\\' . ucfirst($name) . 'table';
		return new $class_name($this->getDb());
	}

	public function getDb()
	{
		$config = Config::getInstance(ROOT . '/config/config.php');
		if(is_null($this->db_instance))
		{
			$this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
		}
		return $this->db_instance;
	}
}

?>