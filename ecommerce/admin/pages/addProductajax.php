<?php
include "connection.php";
 $categoryId = $_POST['categoryid'];

//  print_r($categoryId);die;

$sql = "SELECT * FROM subcategory WHERE category_id = $categoryId";

$result = mysqli_query($con,$sql);

while($data = mysqli_fetch_array($result)){
    ?>
    <option value="<?php echo $data['id']?>"><?php echo $data['subcategory_name']?></option>
    <?php
}
