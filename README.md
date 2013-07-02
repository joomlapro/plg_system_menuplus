Menuplus Plugin for Joomla! 3.0
===============================

Add more features to item menu for Joomla! 3.x.

Usage:
step 1: simply install plug-in via Extensions Manager and configure
step 2: copy template files from template-html folder and place them to html-mod_menu folder of or template for your frontend:

	plg_contents_menuplus
		template
			html (all files from there)

	your_template_folder
		html
			mod_menu (goes here)
step 3: to activate icon feature for menu item you must go to advanced options and put the icon class from Twitter Bootstrap or Font Awesome (for example icon-plus, watch video: http://www.youtube.com/watch?v=SNIQltPzqeQ&feature=player_detailpage)
step 4: to activate pointer feature for menu items you must:
	- define css rule for menu items, for example:
	
.mainmenu { some_css_definitions }
  .mainmenu li { some_css_definitions }
    .mainmenu li:last-child { some_css_definitions }
    .mainmenu li.act.first { some_css_definitions }
    .mainmenu li.last { some_css_definitions }
      .mainmenu li.last a { some_css_definitions }
    .mainmenu li:hover, .mainmenu li.act { some_css_definitions }
    .mainmenu li.first:hover, .mainmenu li.act.first { some_css_definitions }
    .mainmenu li.first:hover a, .mainmenu li.act.first a { some_css_definitions }
    .mainmenu li.last:hover a, mainmenu li.act.last a { some_css_definitions }
    .mainmenu li a { some_css_definitions }
      .mainmenu li a:hover, .mainmenu li.act a { some_css_definitions }
          .mainmenu li i { position:absolute; display:none; top:46px; left:50%; width:30px; height:15px; margin-left:-15px; background:url(../images/mainmenu_arrow.png) no-repeat; z-index:999; }
    .mainmenu li:hover i, .mainmenu li.act i { display:block; }

 

## Authors

* Bruno Batista
* Júlio Pontes

## License

Licensed under the terms of the MIT license.

## Bugs/Requests

* You can [report a bug or request a feature here](http://github.com/joomlapro/plg_content_menuplus/issues)