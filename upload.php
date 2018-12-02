<?php
if (!isset($_SESSION)) session_start(); 

if(isset($_SESSION['upload_adr'])){
	$full_adr	=	$_SESSION['upload_adr'];
}else{
	$full_adr	=	"./images/Lessons/";
}

if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

		$sourcePath = $_FILES['userImage']['tmp_name'];
		$targetPath = $full_adr.$_FILES['userImage']['name'];
		$filename = $_FILES['userImage']['name'];
		
		if(file_exists($targetPath)){
			$increment = 0;
			list($name, $ext) = explode('.', $targetPath);
			while(file_exists($targetPath)) {
				$filename = md5(date('Y-m-d H:i:s:u').$name).'.' . $ext;
				$targetPath = $full_adr.$filename;
			}
		}

		if(move_uploaded_file($sourcePath,$targetPath )) {
			chmod($targetPath,0777);
			echo '<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />';
		}
	}
}
?>
