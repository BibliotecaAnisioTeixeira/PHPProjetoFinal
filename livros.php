<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
require 'conexao.php';

$extension='';
$files_array = array();


/* Opening the thumbnail directory and looping through all the thumbs: */

$dir_handle = @opendir($directory) or die("Existe um erro com seu diretório");

while ($file = readdir($dir_handle)) 
{
	/* Skipping the system files: */
	if($file{0}=='.') continue;
	
	/* end() returns the last element of the array generated by the explode() function: */
	$parts = explode('.',$file);
	$extension = strtolower(end($parts));
	
	/* Skipping the php files: */
	if($extension == 'php') continue;

	$files_array[]=$file;
}

/* Sorting the files alphabetically */
sort($files_array,SORT_STRING);

$file_downloads=array();

$result = mysqli_query("SELECT * FROM download_manager");

if(mysqli_num_rows($result))
while($row=mysqli_fetch_assoc($result))
{
	$file_downloads[$row['filename']]=$row['downloads'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Livros</title>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" media="screen" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

</head>

<body>
    
<div id="file-manager">

    <ul class="manager">
    <?php 

        foreach($files_array as $key=>$val)
        {
            echo '<li><a href="download.php?file='.urlencode($val).'"download>'.$val.'
                
                    </li>';
        }
        
    
    ?>
    
  </ul>

</div>

<script type="text/javascript" src="http://cdn.tutorialzine.com/misc/adPacks/v1.js" async></script>

</body>
</html>