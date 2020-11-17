$(document).ready(function(){


    $(".checking").change(function () {
       var id = $(this).attr('data-id');
       $.ajax({
           url: "/test-admin/change-status/" + id,
           success: function(result){
             console.log(result);
        }});
  });
})
