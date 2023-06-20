## PHP_CodeSniffer

1. В разделе ```File | Settings | PHP | Quality Tools | PHP_CodeSniffer | Configuration```
    - Выбираем CLI Interpreter с необходимой версий PHP
    - PHP_CodeSniffer path указываем путь к бинарнику phpstorm, проверив корректность нажав validate.
    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/bin/phpcs
    ```
    - PHP Code Beautifier and Fixer Settings указываем путь к бинарнику
    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/bin/phpcbf
    ```

2. В разделе ```File | Settings | PHP | Quality Tools | PHP_CodeSniffer```
    - Включаем настройку
    - Указываем Coding standard "Webpractik", если установили путь к стандарту по умолчанию, либо п.3

3. (Если не настроен п.2) В разделе ```File | Settings | PHP | Quality Tools | PHP_CodeSniffer```
    - Выбираем Custom в выпадающем списке и прописываем путь к xml файлу

    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/webpractik/php_code_style/Webpractik/ruleset.xml
    ```

4. Если хотим исключить какие блоки кода из проверки (например ядро CMS)
    - В настройках открываем Appearance => scopes
    - Выбираем папку, которую хотим исключить, и нажимаем Exclude Recursively, называем наш scope например public
    - В разделе ```Editor => Inspections => PHP => PHP Code Sniffer validation```

      Нажимаем ```"+"``` и выбираем наш новый scope. Старый Everywhere отключаем, сняв галку.

      Теперь если вы зайдете в файлы ядра, не следующему стандарту, у вас не будет все гореть красным от подсветок.

      Пример настройки:

      ![Пример настройки](https://w6p.ru/MmU4Zj.png)

## PHP_CodeSniffer

1. В разделе ```File | Settings | PHP | Quality Tools | PHP CS Fixer | Configuration```
    - PHP CS Fixer path указываем путь к бинарнику phpstorm, проверив корректность нажав validate.
    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/bin/php-cs-fixer
    ```
2. В разделе ```File | Settings | PHP | Quality Tools | PHP CS Fixer | Options```
    - Ruleset: Custom
    - Path указываем путь к конфигурации текущей библиотеки
    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/webpractik/php_code_style/.php-cs-fixer.php
    ```
    - Включаем настройку