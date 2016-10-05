 <?php
 session_start();
 require_once("../../UberGallery.php");
 
	 $gallery = new UberGallery();
 
	 //Logic to view image
	 if(isset($_REQUEST['action']) && $_REQUEST['action'] == "viewprofile") {
		$image_pros = $gallery->getImageProps(); // not used currently
		$image_id = $_REQUEST['image_id'];
		$current_image = findImageById($image_id, $image_pros);
		
	 }
 
 	 function findImageById($image_id, $image_pros) {
		$current_image = array();
		$current_image_name = "";
		
		foreach($image_pros as $image_prop){
			if($image_prop['id'] == $image_id) {
				$current_image['props'] = $image_prop ;
				$current_image_name = $image_prop['file_name'];
				break;
			}
		}
		foreach($_SESSION['galleryArray']['images'] as $key => $image){
			if($key == $current_image_name) {
				$current_image['image'] = $image ;
				break;
			}
		}	
		
		//echo "<pre>";
		
		//print_r($current_image);exit;
		
		return $current_image;
	 }
 
 ?>
 
<table border="0" width="100%" id="VoteTable" height="100%">
	<tr>
		<td align="left" width="70%">
		<img src ="<?php echo $current_image['image']['file_path'];?>" title="<?php echo $current_image['props']['title'];?>" border="0" />
		</td>
		<td align="left" valign="top">
			<?php 
			if (isset($current_image['props']['description'])) {
			?>
			<table border="0" width="100%" >
				<tr>
					<th width="100%" align="left">Profile Summary</th>
				</tr>
				<tr>
					<th width="100%" align="left"><?php echo $current_image['props']['description']; ?></th>
				</tr>					
			</table>	
			<?php
			}		
			?>			
		</td>
	</tr>
</table>