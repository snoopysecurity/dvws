<?php
/**
 * original json rpc @author sergio <jsonrpcphp@inservibile.org>
 */
class example {


	private $someData = array (
	
	 
							'name' => 'JSON-RPC',
							'attr' => 'Some Personal Attribute',
							'-s' => 'Execute command',
							'-p' => 'Execute command',
							'-p' => 'Execute command',
							'find' => 'Execute command',
							);
	

	public function giveMeSomeData($param) {

		
		if (array_key_exists($param,$this->someData)) {
			return $this->someData[$param];
		} else {
			throw new Exception('Invalid parameter '.$param);
		}
	}
	
	
	public function getsystemstatus($param) {
//command injection	
//command injection	
		
		if ($param == true) {
			if (stristr(PHP_OS, 'Linux')) 
		{    
			 $cmd = shell_exec('uptime '.$param );
			 return $cmd;
		} elseif (stristr(PHP_OS, 'win'))
		{

			$cmd = shell_exec('systeminfo | '.$param.' "System Boot Time:"' );
			return $cmd;		
		}
		} else {
			throw new Exception('Invalid parameter '.$param);
		}
	}
	
	/**
	 * An immaginative public method.
	 * Since it is a public method, it WILL be served as RPC.
	 * If you want to plug out this method, extend this class with a dummy method.
	 * 
	 * This method return a trivial value and can be implemented as a RPC notification.
	 *
	 * @param string $state
	 * @return boolean
	 */
	public function changeYourState($state) {
		/*
		You can have a very complex code here
		*/
		
		// happy folks are not allowed to overcharge the host
		$state = substr($state,0,32);
		
		if ($tmpFile = fopen ('/tmp/state.txt','a')) {
			fwrite($tmpFile,date('r').' - '.$state."\n");
			fclose($tmpFile);
			return true;
		} else {
			throw new Exception('Unable to change the internal state');
		}
	}
	
}
?>
