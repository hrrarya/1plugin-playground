<?php
class Example extends \WP_Background_Process {

	/**
	 * @var string
	 */
	protected $prefix = 'my_plugin';

	/**
	 * @var string
	 */
	protected $action = 'example_process';

    public function __construct() {
        parent::__construct();
    }
	/**
	 * Perform task with queued item.
	 *
	 * Override this method to perform any actions required on each
	 * queue item. Return the modified item for further processing
	 * in the next pass through. Or, return false to remove the
	 * item from the queue.
	 *
	 * @param mixed $item Queue item to iterate over.
	 *
	 * @return mixed
	 */
	protected function task( $item ) {
		// Actions to perform.
        // error_log('hello');
        if( $item == 'calc' ) {
            $this->$item();
            // return false;
        }
        
		return false;
	}

    public function calc() {
        // sleep(10);
        error_log('hello from calc');
        // $fp = fopen('lidn.txt', 'w');
        // fwrite($fp, 'Cats chase mice');
        // fclose($fp);
    }

	/**
	 * Complete processing.
	 *
	 * Override if applicable, but ensure that the below actions are
	 * performed, or, call parent::complete().
	 */
	protected function complete() {
		parent::complete();

		// Show notice to user or perform some other arbitrary task...
	}

}