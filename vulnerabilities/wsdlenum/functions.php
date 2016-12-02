<?php
error_reporting(0);
function return_price($name)
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

function owasp_apitop10($owaspid)
{
	$details=array(
		'1'=>'Improper Data Sanitization',              //value arrays
		'2'=>'Insufficient Access Control',
		'3'=>'Insecure Direct Object Reference',
		'4'=>'Insufficient Transport Layer Security',
		'5'=>'Sensitive Data Exposure',
		'6'=>'Weak Server-Side Security',
		'7'=>'Improper Key Handling',
		'8'=>'Inconsistent API Functionality',
		'9'=>'Security Misconfiguration'
					);

		 foreach($details as $o=>$d)
		 {
		 if($owaspid==$o)
				$owaspdes=$d;

	}
	return $owaspdes;
}

	function check_user_information($username)
	{
		$details=array(
			'admin'=>'Admin, admin@comp.xyz, 6676 445 8899',              //value arrays
			'root'=>'Mike Woodman, root@comp.xyz, 0577 787 1744',
			'mike'=>'Mike Woodman, mike.woodman@comp.xyz, 0857 787 7744',
			'will'=>'Will C, Well done!',
			'john'=>'John Carroll, johc@eeemail.io, 5654 456 6655',
			'robin'=>'Digi Ninja, digi@ninja.z, 6666 666 6666'
            );
       foreach($details as $n=>$d)
       {
		   if($username==$n)
					$id=$d;

		}
		return $id;
}
	function population($get_value)
	{
		$details=array(
			'China'=>1458,                                //value arrays
			'India'=>1398,                                //new arrays
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
