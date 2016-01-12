<?php
/**
 * This class extends the example class with the purpose to plug out unwanted method from the RPC mechanism.
 * Unwanted metod are simply overraided with dummy methods.
 *
 * @author sergio <jsonrpcphp@inservibile.org>
 */
class restrictedExample extends example {
	/**
	 * This is a dummy method to plug out the parent unwanted method.
	 *
	 * @param string $something
	 */
	public function writeSomething($something) {
		throw new Exception('writeSomething method is not available for RPC');
	}
}
?>