function getSubcategory()
{
    var category_id = $("#category option:selected").attr('value');
    // console.log(category_id);

    $.ajax({
        url:"addProductajax.php",
        type:"post",
        data:"categoryid="+category_id,
        cache:false,
        success:function(html)
        {
            $("#subcategory").html(html);
        }



    });

  
  }