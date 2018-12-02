# ckeditor-with-custom-image-upload
ckeditor with custom image upload feature with php
This is image browser-uploader by www.pcesolutions4u.com
now VERSION 1.0: 
dated 02.12.2018

process- 

1- change browse url from "ckeditor/plugin.js" in line 6.
2- now change $upload_folder in "ckeditor/uploader.php" in line 6.
3- now add or change in "ckeditor/config.js"
	config.extraPlugins = 'zsuploader';
	Or if you allredy have enabled some plugins,just add like this
	config.extraPlugins = 'youtybe, zsuploader';
	note here youtybe is anothor extra plugins


by default image upload folder is : localhost/assets/images
