 <?php
 require_once("../../UberGallery.php");
 
 $gallery = new UberGallery();
 $db_link = $gallery->connectDatabase();
 
 if(isset($_REQUEST['action']) && $_REQUEST['action'] == "viewresults") {

	$totalVotes = $gallery->getVoteResults();
	//echo "<pre>";
	//print_r($totalVotes);exit;
	
	$result = '
	<table border="0" width="100%" id="VoteTable">
		<tr>
			<th width="100%" align="center" style="text-align:center" colspan="2">Score Card</th>
		</tr>
		<tr>
			<th width="70%" align="left">Name</th>
			<th align="left">Total</th>
		</tr>
	';
	if($totalVotes != null && count($totalVotes) > 0) {
		foreach($totalVotes as $vote){
			$result = $result . '
								<tr>
									<td align="left">'.$vote['image_name'].'</td>
									<td align="left">'.$vote['totalvote'].' Votes</td>
								</tr>';
		}
	}
	else {
			$result = $result . '
								<tr>
									<td align="left" colspan="2" align="center"> No results found. </td>
								</tr>';	
	}
	
	$result =$result . '		
	</table>';
	
 }
  
 $gallery->closeDatabase($db_link);
 
 echo $result;
 
 ?>