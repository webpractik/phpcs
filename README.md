# Webpractik PHP Code standarts

Стандарт наследуется от [@PSR-2](http://www.php-fig.org/psr/psr-2/) ([рус](https://svyatoslav.biz/misc/psr_translation/#_PSR-2)) за исключением:
- Длина строки (шаблоны в Bitrix сложно валидировать)
- Отключение требования не использовать пользовательский код вместе с классами (в Bitrix нужно порой вызывать модуль или компонент перед определением класса в связи со своей системой autoload)

Репозиторий содержит в себе
1. Стандарт для [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)
2. Конфиг для [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

## Установка
Устанавливаем глобально в систему. Не забываем что у вас в систем должен быть прописан path к [/vendor/bin/](https://github.com/webpractik/phpcs/blob/master/doc/linux-vendor.md).
```bash
composer global require webpractik/php_code_style
```

Устанавливаем путь к стандарту по умолчанию для phpcs
```bash
# linux
phpcs --config-set installed_paths "$HOME/.config/composer/vendor/webpractik/php_code_style"

# linux kde
phpcs --config-set installed_paths $HOME/.composer/vendor/webpractik/php_code_style

# windows
phpcs --config-set installed_paths "~/AppData/Roaming/Composer/vendor/webpractik/php_code_style"
```
Если вы правильно сделали, то при наборе в консоли `phpcs -i` у вам должен появиться стандарт Webpractik среди прочих.

Примечание: в windows иногда может некорректно на ~ реагировать, и прийдется прописать полный путь к файлу. Также может быть проблема если у вас в имени есть пробел. Решается симлинком.

## Настройка редакторов
- [phpstorm](https://github.com/webpractik/phpcs/blob/master/doc/phpstorm.md)
- [sublime-text](https://github.com/webpractik/phpcs/blob/master/doc/sublime.md)
