<table>
			<tr style="background: #dddddd; text-transform: uppercase;"><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Hour(s)</td></tr>
			<?php 
			foreach ($bfts as $bft)
				{
								$hrs = intval($bft->flighttime);
								$min = ($bft->flighttime - $hrs) * 100;
								$rnk = "SELECT * FROM phpvms_ranks WHERE rank = '$bft->rank'";
								$pilotcode = PilotData::getPilotCode($bft->code, $bft->pilotid);
										$rn = DB::get_row($rnk);
										$rank = $rn->rankimage;
								if($min >= 60)
									{
										$hrss = $hrs + 1;
										$mins = $min - 60;
										
			?>
										<tr><td><?php echo $pilotcode ;?></td><td><?php echo $bft->firstname.' '.$bft->lastname ;?></td><td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrss.':'.$mins ;?> HRS</td></tr>
			<?php						
									}
								elseif($min < 10)
									{
			?>
										<tr><td><?php echo $pilotcode ;?></td><td><?php echo $bft->firstname.' '.$bft->lastname ;?></td><td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':0'.$min ;?> HRS</td></tr>
			<?php 
									}
								else
									{
			?>
										<tr><td><?php echo $pilotcode ;?></td><td><?php echo $bft->firstname.' '.$bft->lastname ;?></td><td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':'.$min ;?> HRS</td></tr>
			<?php							
									}
										
				} 
			?>
			
		</table>