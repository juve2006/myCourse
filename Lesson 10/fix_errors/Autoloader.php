<?php
	declare(strict_types=1);
	class Autoloader
	{
		const LIB_DIR = __DIR__ . '\Shopproduct\\';
		const DS = DIRECTORY_SEPARATOR;
		/**
		 * Register function for requiring needed PhP files
		 *
		 * @return void
		 */
		public static function registerAutoload(): void
		{
			spl_autoload_register(callback: function ($class) {
				$file = str_replace('\\', self::DS, $class) . '.php';
				if (file_exists($file)) {
					require (__DIR__ . self::LIB_DIR . $file);
					return true;
				}
				var_dump( self::LIB_DIR . $file);
				return false;
			});
		}
	}
	
