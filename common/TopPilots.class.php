<?php
class TopPilots extends CodonData
{
	public static function BestFlightTime()
		{
			$dbm="SELECT t1.pilotid,t1.flighttime,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(flighttime) as flighttime 
							FROM phpvms_pireps 
								WHERE date_format(submitdate, '%Y') = date_format(now(), '%Y') AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN phpvms_pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY flighttime DESC LIMIT 10";
											return DB::get_results($dbm);
		}
	
	public static function BestDistance()
		{
			$dbm="SELECT t1.pilotid,t1.distance,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(distance) as distance 
							FROM phpvms_pireps 
								WHERE date_format(submitdate, '%Y') = date_format(now(), '%Y') AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN phpvms_pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY distance DESC LIMIT 10";
											return DB::get_results($dbm);
		}
	
	public static function BestRevenue()
		{
			$dbm="SELECT t1.pilotid,t1.pirepid,t1.revenue,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, count(pirepid) as pirepid, sum(revenue) as revenue 
							FROM phpvms_pireps 
								WHERE date_format(submitdate, '%Y') = date_format(now(), '%Y') AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN phpvms_pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY revenue DESC LIMIT 10";
											return DB::get_results($dbm);
		}
}
?>
