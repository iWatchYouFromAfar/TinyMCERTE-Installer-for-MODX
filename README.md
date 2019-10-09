<h1><strong>TinyMCERTE Installer for MODX:</strong></h1>
<h5>Автоматическая установка и настройка редактор TinyMCE Rich Text Editor для MODX.</h5>

<p>Автор: iWatchYouFromAfar<p/>

<h2>Описание:</h2>
<p>TinyMCERTE Installer for MODX - это транспортный пакет, который устанавливает и настраивает компонент <a href="https://modx.com/extras/package/tinymcerichtexteditor" target="_blank">TinyMCE Rich Text Editor</a> для MODX.</p>

<h2>Установка:</h2>
<ol>
	<li>Скачать транспортный пакет tinymcerte-1.0.0-beta.transport.zip;</li>
	<li>Пакет tinymcerte-1.0.0-beta.transport.zip поместить в ../core/packages/ и через установщик в MODX ищем пакет локально;</li>
	<li>Далее просто устанавливаем. Настройки автоустановщик установит сам;</li>
	<li>В папке ../files/TinyMCERTE-settings вы можете найти небольшой readme.txt и плагин typograf, который нужно поместить в папку плагинов редактора (об этом читайте в readme.txt). На этом все — редактор готов к использованию.</li>
</ol>

<h2>Системные настройки в TinyMCE Rich Text Editor:</h2>
<p>TinyMCERTE Installer for MODX сам установит нужные настройки для редактора.</p>

<ul>
	<li><strong>tinymcerte.paste_as_text</strong>: Вставить как текст - <strong>Да</strong></li>
	<li><strong>tinymcerte.external_config</strong>: Путь к кастомному файлу external-config.json - <strong>../assets/components/tinymcerte/tinymcerte/js/external-config.json</strong></li>
	<li><strong>tinymcerte.plugins</strong>: Активируем все нужные плагины - <strong>print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern modximage modxlink code paste spellchecker typograf</strong></li>
	<li><strong>tinymcerte.skin</strong>: Устанавливаем тему lightgray для TinyMCERTE - <strong>lightgray</strong></li>
	<li><strong>tinymcerte.toolbar1</strong>: Настраиваем Панель инструментов 1 - <strong>undo redo | formatselect fontsizeselect  | bold italic strikethrough forecolor backcolor removeformat | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent</strong></li>
	<li><strong>tinymcerte.toolbar2</strong>: Настраиваем Панель инструментов 2 - <strong>link unlink openlink | image media | template codesample code cite | hr | spellchecker typograf</strong></li>
</ul>

<h2>Предостережения:</h2>
<ol>
  <li>Автоустановщик протестирован на чистой версии MODX и версии с заранее установленным редактором Ace. Что произойдет, если установить его на сайт где уже установлен другой редактор, неизвестно;</li>
  <li>Для проверки орфографии редактор использует сервис Yandex.Speller. Настройки сервиса вы можете найти в файле ../assets/components/tinymcerte/tinymcerte/js/external-config.json. Spellchecker TinyMCE поддерживает огромное кол-во языков для проверки, тогда как Yandex.Speller только 3 (русский, украинский, английский).</li>
</ol>
