<?php
	
	$icons = array(
		'icon-glass',
		'icon-music',
		'icon-search',
		'icon-envelope',
		'icon-heart',
		'icon-star',
		'icon-star-empty',
		'icon-user',
		'icon-film',
		'icon-th',
		'icon-ok',
		'icon-remove',
		'icon-zoom-in',
		
		'icon-zoom-out',
		'icon-off',
		'icon-signal',
		'icon-cog',
		'icon-trash',
		'icon-home',
		'icon-file',
		'icon-time',
		'icon-road',
		'icon-download-alt',
		'icon-download',
		'icon-upload',
		'icon-inbox',
		'icon-play-circle',
		'icon-repeat',
		
		'icon-refresh',
		'icon-list',
		'icon-list-alt',
		'icon-lock',
		'icon-flag',
		'icon-headphones',
		'icon-volume-off',
		'icon-volume-down',
		'icon-volume-up',
		'icon-qrcode',
		'icon-barcode',
		'icon-tag',
		'icon-tags',
		'icon-book',
		'icon-bookmark',
		'icon-print',
		
		'icon-camera',
		'icon-font',
		'icon-bold',
		'icon-italic',
		'icon-text-height',
		'icon-text-width',
		'icon-align-left',
		'icon-align-right',
		'icon-align-center',
		'icon-align-justify',
		'icon-indent-left',
		'icon-indent-right',
		'icon-facetime-video',
		'icon-picture',
		
		'icon-pencil',
		'icon-map-marker',
		'icon-adjust',
		'icon-tint',
		'icon-edit',
		'icon-share',
		'icon-check',
		'icon-move',
		'icon-step-backward',
		'icon-fast-backward',
		'icon-backward',
		'icon-play',
		'icon-pause',
		'icon-stop',
		'icon-forward',

		'icon-fast-forward',
		'icon-step-forward',
		'icon-eject',
		'icon-chevron-left',
		'icon-chevron-right',
		'icon-plus-sign',
		'icon-minus-sign',
		'icon-remove-sign',
		'icon-ok-sign',
		'icon-question-sign',
		'icon-info-sign',
		'icon-screenshot',
		'icon-remove-circle',
		'icon-ok-circle',
		'icon-ban-circle',

		'icon-arrow-left',
		'icon-arrow-right',
		'icon-arrow-up',
		'icon-arrow-down',
		'icon-share-alt',
		'icon-resize-full',
		'icon-resize-small',
		'icon-plus',
		'icon-minus',
		'icon-asterisk',
		'icon-exclamation-sign',
		'icon-gift',
		'icon-leaf',
		'icon-fire',
		'icon-eye-open',

		'icon-eye-close',
		'icon-warning-sign',
		'icon-plane',
		'icon-calendar',
		'icon-random',
		'icon-comment',
		'icon-magnet',
		'icon-chevron-up',
		'icon-chevron-down',
		'icon-retweet',
		'icon-shopping-cart',
		'icon-folder-close',
		'icon-folder-open',
		'icon-resize-vertical',
		'icon-resize-horizontal',

		'icon-bar-chart',
		'icon-twitter-sign',
		'icon-facebook-sign',
		'icon-camera-retro',
		'icon-key',
		'icon-cogs',
		'icon-comments',
		'icon-thumbs-up',
		'icon-thumbs-down',
		'icon-star-half',
		'icon-heart-empty',
		'icon-signout',
		'icon-linkedin-sign',
		'icon-pushpin',
		'icon-external-link',

		'icon-signin',
		'icon-trophy',
		'icon-github-sign',
		'icon-upload-alt',
		'icon-lemon',
		'icon-phone',
		'icon-check-empty',
		'icon-bookmark-empty',
		'icon-phone-sign',
		'icon-twitter',
		'icon-facebook',
		'icon-github',
		'icon-unlock',
		'icon-credit-card',
		'icon-rss',

		'icon-hdd',
		'icon-bullhorn',
		'icon-bell',
		'icon-certificate',
		'icon-hand-right',
		'icon-hand-left',
		'icon-hand-up',
		'icon-hand-down',
		'icon-circle-arrow-left',
		'icon-circle-arrow-right',
		'icon-circle-arrow-up',
		'icon-circle-arrow-down',
		'icon-globe',
		'icon-wrench',
		'icon-tasks',

		'icon-filter',
		'icon-briefcase',
		'icon-fullscreen',

		'icon-group',
		'icon-link',
		'icon-cloud',
		'icon-beaker',
		'icon-cut',
		'icon-copy',
		'icon-paper-clip',
		'icon-save',
		'icon-sign-blank',
		'icon-reorder',
		'icon-list-ul',
		'icon-list-ol',
		'icon-strikethrough',
		'icon-underline',
		'icon-table',

		'icon-magic',
		'icon-truck',
		'icon-pinterest',
		'icon-pinterest-sign',
		'icon-google-plus-sign',
		'icon-google-plus',
		'icon-money',
		'icon-caret-down',
		'icon-caret-up',
		'icon-caret-right',
		'icon-caret-left',
		'icon-columns',
		'icon-sort-down',
		'icon-sort-up',

		'icon-envelope-alt',
		'icon-linkedin',
		'icon-undo',
		'icon-legal',
		'icon-dashboard',
		'icon-comment-alt',
		'icon-comments-alt',
		'icon-bolt',
		'icon-sitemap',
		'icon-umbrella',
		'icon-paste',

		'icon-user-md',

	);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Font Awesome</title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		//TINYMCE
		var tinymce=null,tinyMCEPopup,tinyMCE;tinyMCEPopup={init:function(){var b=this,a,c;a=b.getWin();tinymce=a.tinymce;tinyMCE=a.tinyMCE;b.editor=tinymce.EditorManager.activeEditor;b.params=b.editor.windowManager.params;b.features=b.editor.windowManager.features;b.dom=b.editor.windowManager.createInstance("tinymce.dom.DOMUtils",document);if(b.features.popup_css!==false){b.dom.loadCSS(b.features.popup_css||b.editor.settings.popup_css)}b.listeners=[];b.onInit={add:function(e,d){b.listeners.push({func:e,scope:d})}};b.isWindow=!b.getWindowArg("mce_inline");b.id=b.getWindowArg("mce_window_id");b.editor.windowManager.onOpen.dispatch(b.editor.windowManager,window)},getWin:function(){return(!window.frameElement&&window.dialogArguments)||opener||parent||top},getWindowArg:function(c,b){var a=this.params[c];return tinymce.is(a)?a:b},getParam:function(b,a){return this.editor.getParam(b,a)},getLang:function(b,a){return this.editor.getLang(b,a)},execCommand:function(d,c,e,b){b=b||{};b.skip_focus=1;this.restoreSelection();return this.editor.execCommand(d,c,e,b)},resizeToInnerSize:function(){var a=this;setTimeout(function(){var b=a.dom.getViewPort(window);a.editor.windowManager.resizeBy(a.getWindowArg("mce_width")-b.w,a.getWindowArg("mce_height")-b.h,a.id||window)},10)},executeOnLoad:function(s){this.onInit.add(function(){eval(s)})},storeSelection:function(){this.editor.windowManager.bookmark=tinyMCEPopup.editor.selection.getBookmark(1)},restoreSelection:function(){var a=tinyMCEPopup;if(!a.isWindow&&tinymce.isIE){a.editor.selection.moveToBookmark(a.editor.windowManager.bookmark)}},requireLangPack:function(){var b=this,a=b.getWindowArg("plugin_url")||b.getWindowArg("theme_url");if(a&&b.editor.settings.language&&b.features.translate_i18n!==false&&b.editor.settings.language_load!==false){a+="/langs/"+b.editor.settings.language+"_dlg.js";if(!tinymce.ScriptLoader.isDone(a)){document.write('<script type="text/javascript" src="'+tinymce._addVer(a)+'"><\/script>');tinymce.ScriptLoader.markDone(a)}}},pickColor:function(b,a){this.execCommand("mceColorPicker",true,{color:document.getElementById(a).value,func:function(e){document.getElementById(a).value=e;try{document.getElementById(a).onchange()}catch(d){}}})},openBrowser:function(a,c,b){tinyMCEPopup.restoreSelection();this.editor.execCallback("file_browser_callback",a,document.getElementById(a).value,c,window)},confirm:function(b,a,c){this.editor.windowManager.confirm(b,a,c,window)},alert:function(b,a,c){this.editor.windowManager.alert(b,a,c,window)},close:function(){var a=this;function b(){a.editor.windowManager.close(window);tinymce=tinyMCE=a.editor=a.params=a.dom=a.dom.doc=null}if(tinymce.isOpera){a.getWin().setTimeout(b,0)}else{b()}},_restoreSelection:function(){var a=window.event.srcElement;if(a.nodeName=="INPUT"&&(a.type=="submit"||a.type=="button")){tinyMCEPopup.restoreSelection()}},_onDOMLoaded:function(){var b=tinyMCEPopup,d=document.title,e,c,a;if(b.domLoaded){return}b.domLoaded=1;if(b.features.translate_i18n!==false){c=document.body.innerHTML;if(tinymce.isIE){c=c.replace(/ (value|title|alt)=([^"][^\s>]+)/gi,' $1="$2"')}document.dir=b.editor.getParam("directionality","");if((a=b.editor.translate(c))&&a!=c){document.body.innerHTML=a}if((a=b.editor.translate(d))&&a!=d){document.title=d=a}}if(!b.editor.getParam("browser_preferred_colors",false)||!b.isWindow){b.dom.addClass(document.body,"forceColors")}document.body.style.display="";if(tinymce.isIE){document.attachEvent("onmouseup",tinyMCEPopup._restoreSelection);b.dom.add(b.dom.select("head")[0],"base",{target:"_self"})}b.restoreSelection();b.resizeToInnerSize();if(!b.isWindow){b.editor.windowManager.setTitle(window,d)}else{window.focus()}if(!tinymce.isIE&&!b.isWindow){tinymce.dom.Event._add(document,"focus",function(){b.editor.windowManager.focus(b.id)})}tinymce.each(b.dom.select("select"),function(f){f.onkeydown=tinyMCEPopup._accessHandler});tinymce.each(b.listeners,function(f){f.func.call(f.scope,b.editor)});if(b.getWindowArg("mce_auto_focus",true)){window.focus();tinymce.each(document.forms,function(g){tinymce.each(g.elements,function(f){if(b.dom.hasClass(f,"mceFocus")&&!f.disabled){f.focus();return false}})})}document.onkeyup=tinyMCEPopup._closeWinKeyHandler},_accessHandler:function(a){a=a||window.event;if(a.keyCode==13||a.keyCode==32){a=a.target||a.srcElement;if(a.onchange){a.onchange()}return tinymce.dom.Event.cancel(a)}},_closeWinKeyHandler:function(a){a=a||window.event;if(a.keyCode==27){tinyMCEPopup.close()}},_wait:function(){if(document.attachEvent){document.attachEvent("onreadystatechange",function(){if(document.readyState==="complete"){document.detachEvent("onreadystatechange",arguments.callee);tinyMCEPopup._onDOMLoaded()}});if(document.documentElement.doScroll&&window==window.top){(function(){if(tinyMCEPopup.domLoaded){return}try{document.documentElement.doScroll("left")}catch(a){setTimeout(arguments.callee,0);return}tinyMCEPopup._onDOMLoaded()})()}document.attachEvent("onload",tinyMCEPopup._onDOMLoaded)}else{if(document.addEventListener){window.addEventListener("DOMContentLoaded",tinyMCEPopup._onDOMLoaded,false);window.addEventListener("load",tinyMCEPopup._onDOMLoaded,false)}}}};tinyMCEPopup.init();tinyMCEPopup._wait();

		$(function(){
		
			$('li').click(function(){
				var i = $(this).html();
				console.log(i);
				tinyMCE.execCommand('mceInsertContent',false,i);
				tinyMCEPopup.close();
			});

		});
	</script>
	<style>
		* { margin: 0; padding: 0; }
		ul { list-style: none; }
		li { float: left; border: 1px solid #ddd; margin: 0 2px 2px 0; padding-top: 4px; }
		li:hover { cursor: pointer; background: #ccc; color: #555; }
		i { font-size: 16px; }
	</style>
</head>
<body>
<strong>Select a Font Awesome Character</strong><br /><br />
<ul>
	<?php sort($icons); ?>
	<?php foreach($icons as $icon) : ?>
		<li title="<?php echo $icon; ?>"><i class="<?php echo $icon; ?>"></i></li>
	<?php endforeach; ?>
</ul>


</body>
</html>
