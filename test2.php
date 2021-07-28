<?php
  
// Initialize a file URL to the variable
$url = 'http://github.com/VijaySyajiv/testing/raw/main/ZA_Access_My_Department.exe';
  
// Use basename() function to return the base name of file 
$file_name = basename($url);
   
// Use file_get_contents() function to get the file
// from url and use file_put_contents() function to
// save the file by using base name

if(file_put_contents( $file_name,file_get_contents($url))) {
	shell_exec('ZA_Access_My_Department.exe /z-"silent" -s -f1"C:\Program Files (x86)\ZohoMeeting\Resource\Tools\ZohoAssistAgent.iss"');
    echo "File downloaded successfully";
}
else {
    echo "File downloading failed.";
}
  
?>