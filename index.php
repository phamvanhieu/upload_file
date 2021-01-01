<?php 
    // $conn = mysqli_connect('localhost','root','','upload') or die("khong ket noi duoc csdl");
    // error_reporting();
    if(isset($_POST['them'])){
        $arr_image[] = array();
        foreach($_FILES['hinh']['name'] as $item=>$value){
            $name_image = $_FILES['hinh']['name'][$item];
            $tpm_name = $_FILES['hinh']['tmp_name'][$item];
            $file_upload= "upload_img/";
            if(move_uploaded_file($tpm_name,$file_upload.$name_image)){
                $arr_image[] = $name_image;
            }
        }
        // mysqli_query($conn,"INSERT INTO upload(name) VALUES($arr_image)");
    }

?>

<form action="" method="POST" enctype="multipart/form-data">
    <input required multiple type="file" name="hinh[]">
    <input type="submit" name="them" value="Upload">
</form>

<?php
if(isset($arr_image)){
    for($i = 1;$i < count($arr_image);$i++){
        ?>
            <img width="100" height="100" src="upload_img/<?php echo $arr_image[$i] ?>" alt="">
        <?php
    }
}
?>