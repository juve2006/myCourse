<?php
	declare(strict_types=1);

/**
 * Class auto loader
 */
class Autoloader
{

    const DIR = 'ShopProduct';

    /**
     * Register function for requiring needed PhP files
     *
     * @return void
     */
    public static function registerAutoload(): void
    {
        spl_autoload_register(static function ($class) {
            $ds = DIRECTORY_SEPARATOR;
            $file = __DIR__ . $ds . self::DIR . $ds . str_replace('\\', $ds, $class) . '.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
var_dump($file);
            return false;

        });
            }
/*function __autoload($class_name)
{
    // Массив папок, в которых могут находиться необходимые классы
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    // Проходим по массиву папок
    foreach ($array_paths as $path) {

        // Формируем имя и путь к файлу с классом
        $path = ROOT . $path . $class_name . '.php';

        // Если такой файл существует, подключаем его
        if (is_file($path)) {
            include_once $path;
        }
    }
}*/




/*public static function registerAutoload(): void
{
    spl_autoload_register(callback: function ($class) {
        $ds = DIRECTORY_SEPARATOR;

        $file = str_replace('\\', $ds, $class) . '.php';
        if (file_exists($file)) {
            require (__DIR__ . self::LIB_DIR . $file);
            return true;
        }
        var_dump( self::LIB_DIR . $file);
        return false;
    });
}*/
}
	
