function myAjax() {
      $.ajax({
           type: "POST",
           url: 'item/items.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }