<?php 

    $KyJ = array(

        Wedding     => "PyC",
        Place       => "Yautepec, Morelos, Morelos",
        Name        => "P & C",
        link        => "Weddings/PyC/",
        
    ),
    
?>















<?php
$folder_path = 'images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>