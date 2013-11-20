$(function() {
   $('#upload_file').submit(function(e) {
      e.preventDefault();
      $.ajaxFileUpload({
         url:$(this).attr("action"),
         secureuri:false,
         fileElementId:'userfile',
         dataType: 'json',
          data: $(this).serialize(), 
         success:function(data, status)
         { 
          },
         error: function (data, status, e) {
         alert(e);
       }
      });
      return false;
   });
});