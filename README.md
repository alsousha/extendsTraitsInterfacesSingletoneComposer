
1. разделена логика: ядро в папке wfn (абстр класс Products, traits, interfases) и пользовательские классы в app
2. наследование
3. пространство имен
4. трейты (на примере singleton)
5. интерфейсы
6. подключение автозагрузчика
7. использование composer
8. исползование сторонней библиотеки (отправка писем)


*composer*

	1. в корне проекта создаем файл composer.json
	в нем:
	{
		"require":{"phpmailer/phpmailer":"^6.1"},
		"autoload":{
		    "psr-4":{
		        "app\\":"app",
			    "wfm\\":"vendor/wfm" //исп путь vendor/wfm как wfm
	        }
		}
	}
	разделение нужно для того, что подключать файлы с разных мест: с арр и wfm.
	н-р в book.php сферху указываем namespace app; а в products.php - namespace wfm;
	
	2. на значке OServer ПКМ/ дополнительно / консоль
	3. прописываем путь к текущей папке через cd  путь
	4. "composer install"
	5. index.php сверху подключаем автозагрузчик композера require_once__DIR__.'/vendor/autoload.php';

composer dump-autoload - обновить композер





*подключить стороннюю библиотеку* 

в консоли
composer require phpmailer/phpmailer (берем из описания библиотеки)
в индекс файле создаем объект новой библиотеки: $mail=new\PHPMailer\PHPMailer\PHPMailer(); 