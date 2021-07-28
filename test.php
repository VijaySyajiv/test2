<?



echo "My program Start";

$scriptName='ZA_Access_My_Department.exe';

$path='C:\Program Files (x86)\ZohoMeeting\Resource\Tools\ZohoAssistAgent.iss';
$path1='C:\Program Files (x86)\ZohoMeeting\Resource\Tools';

#$moveCommand="$scriptName /z"-silent" -s -f1$path";


shell_exec('ZA_Access_My_Department.exe /z-"silent" -s -f1"C:\Program Files (x86)\ZohoMeeting\Resource\Tools\ZohoAssistAgent.iss"');


echo "My program end";
?>