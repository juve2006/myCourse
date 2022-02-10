<?php
declare(strict_types=1);
/**
 * Class auto loader
 */
class Autoloader
{
	/**
	 * Register function for requiring needed PhP files
	 *
	 * @return void
	 */
	public static function registerAutoload(): void
	{
		spl_autoload_register(static function (string $classname) {
			$ds = DIRECTORY_SEPARATOR;
			$file = str_replace('\\', $ds, $classname) . '.php';
			//$file = __DIR__ . $ds . str_replace('\\', $ds, $classname) . '.php';
			if (file_exists($file)) {
				require_once $file;
				
				return true;
			}
			return false;
		});
	}
}