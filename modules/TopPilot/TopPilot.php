<?php
class TopPilot extends CodonModule
{
	public function index() 
		{
			$revision = trim(file_get_contents(CORE_PATH.'/version'));
			if($revision != 'simpilot 5.5.2')
				{
					echo '<center>phpVMS Version Installed Is Not Compatible With This Module!</center><br />';
					echo '<center>phpVMS Version Installed: '.$revision.'</center>';
				}
			else
			{
            $this->show('/toppilot/toppilot.php');
			}           
        }
}
?>