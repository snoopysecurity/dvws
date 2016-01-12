<?php
function Return_price($name)
{
		$details=array(
			'Android'=>82.8,                 //value arrays
			'iOS'=>13.9,
			'Windows Phone'=>2.6,
			'Others'=>0.4	
            );
            
            
       foreach($details as $n=>$p)
       {
		   if($name==$n)
					$price=$p;
					
		}
		return $price;
}
	function check_user_id($username)
	{
		$details=array(
			'Admin'=>'001, Well done!',              //value arrays
			'Root'=>'002, Well done!',
			'Mike'=>'003, Well done!',
			'Will'=>'004, Well done!',
			'John'=>'005, Well done!',
			'Robin'=>'006, Well done!'
            );
       foreach($details as $n=>$d)
       {
		   if($username==$n)
					$id=$d;
					
		}
		return $id;
}
	function Population($get_value)
	{
		$details=array(                          
			'China'=>1458,                                //value arrays
			'India'=>1398,
			'United States'=>352,
			'Indonesia'=>273,
			'Brazil'=>223,
			'Pakistan'=>226
            );
       foreach($details as $n=>$d)
       {
		   if($get_value==$n)
					$val=$d;
					
		}
		return $val;
}
?>
