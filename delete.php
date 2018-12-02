<?php if(isset($_POST['file']) && !empty($_POST['file'])){
	if (!isset($_SESSION)) session_start(); 
    //find the file
    $file = $_SESSION['upload_adr'].$_POST['file'];
	$thumb_file = $_SESSION['upload_adr'].'/thumbs/'.$_POST['file'];
    if(is_file($file)){
        unlink($file);
        unlink($thumb_file);
        echo "Deleted Successfully";
    }else{
        echo $_POST['file']." has not been found!";
    }
}
?>
