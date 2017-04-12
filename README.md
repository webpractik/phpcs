# Webpractik PHP Code standarts

Стандарт наследуется от @PSR-2 за исключением:
- Табы вместо пробелов
- Скобка у методов и функций в стиле Kernighan & Ritchie

Репозиторий содержит в себе
1. Стандарт для [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)
2. Конфиг для [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

## Установка
Устанавливаем глобально в систему. Не забываем что у вас в систем должен быть прописан path к /vendor/bin/
```bash
composer global require squizlabs/php_codesniffer
composer global require friendsofphp/php-cs-fixer
composer global require webpractik/php_code_style:dev-master
```

Устанавливаем путь к стандарту по умолчанию для phpcs
```bash
phpcs --config-set installed_paths "~/AppData/Roaming/Composer/vendor/webpractik/php_code_style"
```

Примечание: иногда может некорректно на ~ реагировать, и прийдется прописать полный путь к файлу. Может быть проблема если у вас в имени есть пробел. Решается симлинком.

## Sublime Text
Т.к. для phpstorm конфиги описаны в рунете, описано подключение только для sublimeText.
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
		"--config": "~/AppData/Roaming/Composer/vendor/webpractik/php_code_style/.php_cs"
	},
}
````

При наличии проблем, включаем show_debug, открываем консоль sublime txt и смотрим на что ругается. 
