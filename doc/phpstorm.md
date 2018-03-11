1. Открываем настройки ctrl+alt+S
2. Фильтруем настройки введя "sniffer"
3. В разделе ```Language => PHP => Code Sniffer```
    - Выбираем local и указываем путь к бинарнику phpstorm, проверив корректность нажав validate.

    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/bin/phpcs
    ```
4. В разделе ```Editor => Inspections => PHP => PHP Code Sniffer validation```
    - устанавливаем галочки активируя проверку
    - Выбираем Custom в выпадающем списке и прописываем путь к xml файлу

    ```bash
    #Пример пути для linux
    /home/north/.config/composer/vendor/webpractik/php_code_style/Webpractik/ruleset.xml
    ```

5. Если хотим исключить какие блоки кода из проверки (например ядро CMS)
    - В настройках открываем Appearance => scopes
    - Выбираем папку которую хотим исключить и нажимаем Exclude Recursively, называем наш scope например public
    - В разделе ```Editor => Inspections => PHP => PHP Code Sniffer validation```
    
        Нажимаем ```"+"``` и выбираем наш новый scope. Старый Everywhere отключаем, сняв галку.
    
        Теперь если вы зайдете в файлы ядра не следующему стандарту у вас не будет все гореть красным от подсветок.
        
        Пример настройки:
        
        ![Пример настройки](https://w6p.ru/MmU4Zj.png)
