(function() {
   tinymce.create('tinymce.plugins.fontawesome', {
      init : function(ed, url) {
        ed.addCommand('mceFat', function() {
           ed.windowManager.open({
                   file : url + '/tinymce/tinymce.php',
                   width : 550,
                   height: 300,
                   title : 'Font Awesome',
                   inline : 1
           }, {
                   plugin_url : url
           });
         });

         ed.addButton('fontawesome', {
            title : 'Font Awesome',
            image : url+'/tinymce/icon.png',
            cmd   : 'mceFat'
         });
      }
     
   });
   tinymce.PluginManager.add('fontawesome', tinymce.plugins.fontawesome);
})();