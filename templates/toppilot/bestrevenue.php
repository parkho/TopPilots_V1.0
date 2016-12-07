<table>
<tr style="background: #dddddd; text-transform: uppercase;"><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Amount</td></tr>
			<?php 
			foreach ((array)$brs as $br)
				{
					if($brs == '')		
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
						$pilotcode = PilotData::getPilotCode($br->code, $br->pilotid);
			?>
					<tr><td><?php echo $pilotcode ;?></td><td><?php echo $br->firstname.' '.$br->lastname ;?></td><td><img src="<?php echo $rank ;?>"></td><td><?php echo FinanceData::formatMoney($br->revenue) ;?></td></tr>
			<?php 
					}
				} 
			?>
			
		</table>
