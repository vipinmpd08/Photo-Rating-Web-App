<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Who is the beauty !!</title>
    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/style.css" />
    <?php echo $gallery->getColorboxStyles(5); ?>

    <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?php echo THEMEPATH; ?>/jquery-2.0.3.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>

	<!-- JQuery UI -->
	<script src="<?php echo THEMEPATH; ?>/jquery-impromptu.js"></script>	
	<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/jquery-impromptu.css">
  
    <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>

</head>
<body>

<!-- <?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?>  -->
<div id="galleryWrapper">
    <h1>Who is the real queen? Mark your hit now !!</h1>
    <div class="line"></div>

    <?php if($gallery->getSystemMessages()): ?>
        <ul id="systemMessages">
            <?php foreach($gallery->getSystemMessages() as $message): ?>
                <li class="<?php echo $message['type']; ?>">
                    <?php echo $message['text']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <div id="galleryListWrapper">
        <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
            <ul id="galleryList" class="clearfix">
                <?php foreach ($galleryArray['images'] as $image): ?>
                    <li><a id="image_<?php echo $image['image_props']['id']; ?>" href="<?php echo $image['file_path']; ?>" title="<?php echo $image['image_props']['title']; ?>" rel="colorbox"><img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['image_props']['title']; ?>"/></a> </br> <a class="votenow" href="javascript:;" id="image_vote_<?php echo $image['image_props']['id']; ?>">Vote for <?php echo $image['image_props']['title']; ?></a>
					
					<script type="text/javascript" >
					$(document).ready(function(){
						$("#image_vote_<?php echo $image['image_props']['id']; ?>").click(function(){
						
						  if(confirm('Click Ok to vote for <?php echo $image['image_props']['title']; ?>')) {
							  $.post("resources/themes/uber-blue/vote.php",
							  {
								action:"vote",
								image_id:"<?php echo $image['image_props']['id']; ?>",
								image_name:"<?php echo $image['image_props']['title']; ?>"
							  },
							  function(data,status){
								if(status == "success") {						
									alert("Thanks for your vote. Please watch scorecard for updates !");
								}
								else {
								}
							  });
						  }
									  
						});
					});
					</script>
					
					</li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
		<ul id="ViewResult" class="clearfix">
		 <a id="refreshResult" href="javascript:;" title="Refresh">Refresh Scorecard</a>
		 <div id="ViewResultContent">
			
		 </div>
		</li>
		</ul>
    </div>

    <div class="line"></div>
    <div id="galleryFooter" class="clearfix">

        <?php if ($galleryArray['stats']['total_pages'] > 1): ?>
        <ul id="galleryPagination">

            <?php foreach ($galleryArray['paginator'] as $item): ?>

                <li class="<?php echo $item['class']; ?>">
                    <?php if (!empty($item['href'])): ?>
                        <a href="<?php echo $item['href']; ?>"><?php echo $item['text']; ?></a>
                    <?php else: ?><?php echo $item['text']; ?><?php endif; ?>
                </li>

            <?php endforeach; ?>

        </ul>
        <?php endif; ?>

        <div id="credit"><a href="http://www.vipindas.in" target="_blank">Vipindas.In</a></div>
    </div>
</div>

<div id="dialog-message-confirm" title="Confirm Voting" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Click confirm to vote </p>
</div>

<div id="dialog-message-done" title="Voting complete" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Thanks for your vote ! </p>
</div>

<script type="text/javascript" >
$(document).ready(function(){
	
	function loadResults() {
		$.ajax({
			url: "resources/themes/uber-blue/viewresults.php?action=viewresults",
			success: function(data){
				$("#ViewResultContent").html(data);
			}   
		});
	}
	$("#refreshResult").click(function(){
		loadResults();
	});

	loadResults();
	
	//Load the results every 10 seconds
	setInterval(function() {
      loadResults();
	}, 10000);
	
});
</script>
</body>
</html>
