# @bitrix/crest 
[English](#contenten) | [Русский](#contentru)


<div id="contenten"></div>
@bitrix/crest — small PHPSDK used for Bitrix24 REST API for webhooks, local or public applications.

# Contents
1. [Description](#description)
2. [Calling using inbound webhook](#usingwebhook)
3. [Calling from local application](#localapp)
4. [Calling from public application](#publicapp)


## <div id="description"></div>Description

<ul>
<li>Provided examples use cURL module to run REST requests. You need to learn how to enable cURL module on your server.
<li>Your web server must have valid SSL certificate.
<li>Examples use base SDK as CRest class for running requests and extending authentication tokens. Download files from repository and implement necessary authorization updates in settings.php file and place it on your server, inserting an example you need from documentation.
<li>When SDK errors occur, you can open file checkserver.php in browser; it performs minimum server settings check to enable CRest class operation.
<li>When project uses CRest class and encoding is not UTF-8, there are 2 additional actions:
<br/><br/>Open files from archive and update the encoding to the required one.
<br/>Declare the constant C_REST_CURRENT_ENCODING in the settings.php file. For example, when project has encoding windows-1251, the constant must look as follows:</li></ul>
   
```php
define('C_REST_CURRENT_ENCODING','windows-1251');
```

## <div id="usingwebhook"></div>Calling REST using inbound webhook

Indicate webhook URL in define C_REST_WEB_HOOK_URL inside the settings.php file:

```php
define('C_REST_WEB_HOOK_URL','https://xxx.bitrix24.ru/rest/1/douasdqdsxSWgc3mgc1/');
```

Insert example text into the index.php file:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
          'TITLE' => 'Lead name',//Title*[string]
          'NAME' => 'Name',//Name[string]
          'LAST_NAME' => 'Last name',//Last name[string]
      ]
   ])
);

echo '</PRE>';
```

Indicate example URL in the browser address bar https://example.com/index.php to see the example results.


## <div id="localapp"></div>Calling REST from local application

Insert example text into the index.php file:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
          'TITLE' => 'Lead name',//Title*[string]
          'NAME' => 'Name',//Name[string]
          'LAST_NAME' => 'Last name',//Last name[string]
      ]
   ])
);

echo '</PRE>';
```

Indicate your app URL https://example.com/index.php as well as installation script URL https://example.com/install.php inside the local app details form.
Indicate parameters client_id and client_secret for OAuth 2.0 authorization in define C_REST_CLIENT_ID and C_REST_CLIENT_SECRET inside the settings.php file.
Take these values from the local app details form.
<br>
In the list of local applications, click on your local app and select “Reinstall”. It’s required for install.php to operate correctly after you have indicated correct values C_REST_CLIENT_ID and C_REST_CLIENT_SECRET.
After installation is complete, you will see example results. When the example demonstrates widget embedding into other Bitrix24 tools, switch to these tools.

## <div id="publicapp"></div>Calling REST from public application

Insert example text into the index.php file:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
          'TITLE' => 'Lead name',//Title*[string]
          'NAME' => 'Name',//Name[string]
          'LAST_NAME' => 'Last name',//Last name[string]
      ]
   ])
);

echo '</PRE>';
```

Add a public application inside the partner’s account to get client_id and client_secret as well as when saving an application. Indicate parameters client_id and client_secret OAuth 2.0 authorization in define C_REST_CLIENT_ID and C_REST_CLIENT_SECRET in the settings.php file.
Select and indicate your application URL https://example.com/index.php and installation script URL https://example.com/install.php inside the app details form. After saving the version, open the version details and install your app to any available Bitrix24 by clicking on "Install". After installation is complete, you will see example results (when the example demonstrates widget embedding into other Bitrix24 tools, switch to these tools). For actual public app operation, you must inherit CRest class by redefining methods getSettingData/setSettingData that get/save authentication tokens in text file. These methods are not designed for application working on several Bitrix24 simultaneously. 
<br><br>
<hr>
<hr>
<br>

<div id="contentru"></div>
@bitrix/crest — небольшой PHPSDK для использования REST API Битрикс24 в локальных, 
тиражных приложениях или через вебхуки

# Содержание
1. [Описание](#introduction)
2. [Вызов при помощи входящего вебхука](#webhook)
3. [Вызов из локального приложения](#local)
4. [Вызов из тиражного приложения](#public)


## <div id="introduction"></div>Описание

<ul>
<li>Примеры используют модуль cURL для выполнения REST-запросов. Узнайте, как включить модуль cURL на своем сервере.
<li>На вашем веб-сервере должен быть установлен валидный SSL-сертификат.
<li>Примеры используют базовый SDK в виде класса CRest для выполнения запросов и продления токенов авторизации. Скачайте файлы из репозитория внесите необходимые правки, связанные с авторизацией в файл settings.php и разместите на своем сервере, вставив нужный вам пример из документации.
<li>При возникновении проблем с работой SDK вы можете открыть через браузер файл checkserver.php, который произведёт минимальную проверку настроек сервера для работы класса CRest.
<li>Если в проекте используется класс CRest и кодировка отличается от utf8, то необходимо сделать 2 дополнительных действия:
<br/><br/>Открыть файлы из архива и изменить их кодировку на необходимую.
<br/>В файле settings.php объявить константу C_REST_CURRENT_ENCODING. Например, если проект в кодировке windows-1251 константа выглядеть должна так:</li></ul>
   
```php
define('C_REST_CURRENT_ENCODING','windows-1251');
```

## <div id="webhook"></div>Вызов REST с использованием входящего вебхука

Укажите URL вебхука в define C_REST_WEB_HOOK_URL в файле settings.php:

```php
define('C_REST_WEB_HOOK_URL','https://xxx.bitrix24.ru/rest/1/douasdqdsxSWgc3mgc1/');
```

Вставьте текст примера в файл index.php:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
          'TITLE' => 'Название лида',//Заголовок*[string]
          'NAME' => 'Имя',//Имя[string]
          'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

Укажите URL к примеру в адресной строке браузера https://example.com/index.php, чтобы увидеть результат работы примера.


## <div id="local"></div>Вызов REST из локального приложения

Вставьте текст примера в файл index.php:

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
          'TITLE' => 'Название лида',//Заголовок*[string]
          'NAME' => 'Имя',//Имя[string]
          'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

В карточке локального приложения укажите URL своего приложения https://example.com/index.php и URL скрипта установки https://example.com/install.php.
Укажите значения параметров client_id и client_secret для авторизации OAuth 2.0 в define C_REST_CLIENT_ID и C_REST_CLIENT_SECRET в файле settings.php, взяв эти значения из карточки локального приложения.
<br>
В списке локальных приложений нажмите правой кнопкой мыши на своё локальное приложение и выберите пункт "Переустановить". Это нужно чтобы корректно сработал install.php после того, как вы вставили корректные значения C_REST_CLIENT_ID и C_REST_CLIENT_SECRET.
После установки вы увидите результат работы примера. Если пример демонстрирует встраивание виджетов в другие инструменты Битрикс24, необходимо перейти в эти инструменты.


## <div id="public"></div>Вызов REST из тиражного приложения

Вставьте текст примера в файл index.php

```php
require_once('src/crest.php');

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.lead.add',
   [
      'fields' =>[
          'TITLE' => 'Название лида',//Заголовок*[string]
          'NAME' => 'Имя',//Имя[string]
          'LAST_NAME' => 'Фамилия',//Фамилия[string]
      ]
   ])
);

echo '</PRE>';
```

Добавьте тиражное приложение в партнерском кабинете для получения client_id и client_secret и при сохранении приложения.
Укажите значения параметров client_id и client_secret для авторизации OAuth 2.0 в define C_REST_CLIENT_ID и C_REST_CLIENT_SECRET в файле settings.php.

<br>

В карточке приложения добавьте версию и укажите URL своего приложения https://example.com/index.php и URL скрипта установки https://example.com/install.php в карточке версии.
После сохранения версии откройте карточку версии и, нажав на ссылку "Установить на своем Битрикс24", установите свое приложение на любой доступный вам Битрикс24.
После установки вы увидите результат работы примера (в случае, если пример демонстрирует встраивание виджетов в другие инструменты Битрикс24, необходимо перейти в эти инструменты).
Для реального тиражного приложения необходимо пронаследовать класс CRest, переопределив методы getSettingData/setSettingData, которые занимается получением/сохранением токенов авторизации в текстовый файл. Эти методы не предназначены для эксплуатации приложения на нескольких Битрикс24 одновременно.
