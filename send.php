<?php
ini_set('display_errors',1);
include ("NotificationHub.php");

 if(isset($_POST['titre'])){
    $titre = $_POST['titre']; 
    $message = $_POST['message']; 
    $radioVal = $_POST['question']; 
    $url = $_POST['lien']; 
    
    
    $payloadFcm = "";
    $payloadApple = "";
    

    if ($radioVal == "yes"){
        $payloadFcm = '{"data":{"title":"'.$titre.'","body":"'.$message.'", "url":"'.$url.'"}}';
        $payloadApple ='{"aps":{"alert":{"title":"'.$titre.'","body":"'.$message.'", }, "url":"'.$url.'"}}';
        
    }else{
        $action = $_POST['selectVue'];
        $payloadFcm = '{"data":{"title":"'.$titre.'","body":"'.$message.'", "action":"'.$action.'"}}';
        //$payloadApple ='{"aps":{"alert":{"title":"'.$titre.'","body":"'.$message.'", "action":"'.$action.'"}}}';
        $payloadApple ='{"aps":{"alert":{"title":"'.$titre.'","body":"'.$message.'", }, "action":"'.$action.'"}}';
    }
    //unset($_POST);

    $hubAndroid = new NotificationHub ("Endpoint=sb://XXXXXXX.servicebus.windows.net/;SharedAccessKeyName=DefaultFullSharedAccessSignature;SharedAccessKey=XXXXXXXXXXXXXXXXXX", "XXXXXXx");
    $notificationFcm = new Notification('gcm', $payloadFcm); 
    $hubAndroid->sendNotification($notificationFcm, null);
   
 }else{
     echo "erreur";
 }
 

?>
