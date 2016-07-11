<?php
 $bfts = TopPilots::BestFlightTime();
 $bds = TopPilots::BestDistance();
 $brs = TopPilots::BestRevenue();
?>
<h3 style="margin-left: 80px; margin-top: 75px;">Top Pilots</h3>
<div style="border: solid 3px; margin-bottom: 35px; padding: 25px; border-radius: 5px;" class="container">
<link type="text/css" rel="stylesheet" href="http://onlinehtmltools.com/tab-generator/skins/skin6/top.css"></script>
<div style="border-radius: 10px;" class="toppilot">
 <ul style="text-align:center;">
  <li style="border-radius: 10px;" class="tab_selected"><a href="#br">Best Revenues</a></li>
  <li style="border-radius: 10px;"><a href="#bd">Best Distance</a></li>
  <li style="border-radius: 10px;"><a href="#bft">Best Flight Time</a></li>
 </ul>
 <div style="border-radius: 10px;" class="content_holder">
  <div id="br"><?php Template::show('toppilot/bestrevenue.php');?></div>
  <div id="bd"><?php Template::show('toppilot/bestdistance.php');?></div>
  <div id="bft"><?php Template::show('toppilot/bestflighttime.php');?></div>
 </div><!-- /.content_holder -->
</div><!-- /.tabs_holder -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://onlinehtmltools.com/tab-generator/skinable_tabs.min.js"></script>
<script type="text/javascript">
$('.toppilot').skinableTabs({
    effect: 'simple_fade',
    skin: 'skin6',
    position: 'top'
  });
</script>
</div>