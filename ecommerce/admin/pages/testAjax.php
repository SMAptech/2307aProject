Test Page
<?php
include "connection.php";
$sql = "SELECT * FROM category";
$result = mysqli_query($con,$sql);
// $data = mysqli_fetch_array($result);
// print_r($data);die;
?>
<select name="" id="cat_id"  onchange = "getSubCat()">
    <option value="">Select Category</option>
    <?php
    while($data = mysqli_fetch_array($result)){
        ?>
            <option value="<?php echo $data["id"] ?>"><?php echo $data["category_name"] ?></option>

    <?php
    }
    
    ?>

</select>




<select name="" id="subcat">
    <option value="">Select sub category</option>
    
</select>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    
function getSubCat(){
    // console.log("chnages");
    var cat_id = document.getElementById("cat_id").value;
    // console.log(cat_id);
   $.ajax({
        type: "post",
        url: "testAjax.php",
        data: "categoryid="+cat_id,
        success: function (response) {
            // console.log(response);
            $("#subcat").html(response);
        }
    });
}

</script>
<?php

if(isset($_POST['categoryid'])){
    $cat_id =  $_POST['categoryid'];
    $sql = 'SELECT * FROM subcategory WHERE category_id = "'.$cat_id.'" ';
    $result = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($result)){
        ?>
        
        <option value=""><?php echo $data['subcategory_name']?></option>
        
        
        <?php
    }
}


?>
