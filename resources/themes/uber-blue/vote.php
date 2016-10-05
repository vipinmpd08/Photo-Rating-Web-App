 <?php
 require_once("../../UberGallery.php");
 
 $gallery = new UberGallery();
 
 //Create DB Connection
 $db_link = $gallery->connectDatabase();
 
 //Logic to post rating
 if(isset($_REQUEST['action']) && $_REQUEST['action'] == "vote") {
	//$image_pros = $gallery->getImageProps(); // not used currently
	$image_id = $_REQUEST['image_id'];
	$image_name = $_REQUEST['image_name'];
	$ipaddress = $gallery->getClientIp();
	
	$gallery->postVote($image_id,$ipaddress,$image_name);
 }
 
 //Close DB Connection
 $gallery->closeDatabase($db_link);
 
 ?>