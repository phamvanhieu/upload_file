<?php 
    if(isset($_POST['them'])){

    
        if(isset($_FILES['hinh']['name'])){
            $name_hinh = $_FILES['hinh']['name'];
            $type_hinh = $_FILES['hinh']['type'];
            $size_hinh = $_FILES['hinh']['size'];
            $tpm_hinh = $_FILES['hinh']['tmp_name'];
            switch ($type_hinh) {
                case 'image/jpeg':
                case 'image/png':
                case 'image/jpg':
                case 'image/gif':
                    if($size_hinh < 2000000){
                        $tam = "dsadiashdsajkdhdjsadsajhdkassdsahdasdjsadsadsadsadsadksadjksadsds";
                        $str_random = substr(str_shuffle($tam),0,50);
                        $num_random = random_int(0,9999999999999);
                        $name_img = $str_random.$num_random.$name_hinh;
                        move_uploaded_file($tpm_hinh,'upload_img/'.$name_img);
                        echo $name_img;
                    }else{
                        echo "anh qua lon";
                    }
                    
                    break;
                
                default:
                    echo 'Chi cho phep chon cac loai anh sau(jpeg,png,jpg,gif)';
                    break;
            }
        }else{
        
        }        
    }
?>

<form action="" method="POST" enctype="multipart/form-data">
    <input required type="file" name="hinh" id="">
    <input type="submit" name="them" value="Upload">
</form>