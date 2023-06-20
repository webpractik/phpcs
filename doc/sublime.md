Устанавливаем [sublime-phpcs](http://benmatselby.github.io/sublime-phpcs/)

Пример конфига для windows:

```json
{
    "show_debug": false,
    "phpcs_executable_path": "~/AppData/Roaming/Composer/vendor/bin/phpcs.bat",
    "phpcs_execute_on_save": true,
    "phpcs_additional_args": {
        "--standard": "Webpractik",
        "-n": ""
    },
    "php_cs_fixer_executable_path": "~/AppData/Roaming/Composer/vendor/bin/php-cs-fixer.bat",
    "php_cs_fixer_on_save": false,
    "php_cs_fixer_additional_args": {
        "--config": "~/AppData/Roaming/Composer/vendor/webpractik/php_code_style/.php-cs-fixer.php"
    }
}
````

При наличии проблем, включаем show_debug, открываем консоль sublime txt и смотрим на что ругается. 
