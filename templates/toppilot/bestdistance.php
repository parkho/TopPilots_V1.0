<table>
			<tr style="background: #dddddd; text-transform: uppercase;"><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Miles</td></tr>
			<?php 
			foreach ($bds as $bd)
				{
					if($bds == '')		
					{
			?>
					<tr><td align="center" colspan="2">No Records yet!</td></tr>
			<?php
					}
					else
					{
						$rnk = "SELECT * FROM phpvms_ranks WHERE rank = '$btm->rank'";
						$rn = DB::get_row($rnk);
						$rank = $rn->rankimage;
						$pilotcode = PilotData::getPilotCode($bd->code, $bd->pilotid);
			?>
					<tr><td><?php echo $pilotcode ;?></td><td><?php echo $bd->firstname.' '.$bd->lastname ;?></td><td><img src="<?php echo $rank ;?>"></td><td><?php echo $bd->distance ;?> NM</td></tr>
			<?php 
					}
				} 
			?>
			
		</table>