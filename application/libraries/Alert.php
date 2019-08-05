<?php

    /*
     * Codeigniter Bootstrap Alert Library
     *
     * Author: Agwu Chibueze Dennis
     * Site URL: https://www.chivins.com
     * License: GNU v3.
     */

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Alert
	{
		protected $ci, $session;
	
		public function __construct()
		{
	        $this->ci =& get_instance();
		}

		public function set($msg, $type, $key)
        {
            $array = array(
                $key => $type,
                $key.'_msg' => $msg
            );
            
            $this ->ci->session->set_flashdata( $array );
        }

        public function get($key)
        {
        	$key_msg = $key.'_msg';

        	$type = strtolower($this->ci->session->{$key});

        	switch ($type) {
        		case "warning":
        			$class = "alert-warning";
        			$title = "Warning";
        			break;

        		case "success":
        			$class = "alert-success";
        			$title = "Success";
        			break;

        		case "error":
        			$class = "alert-danger";
        			$title = "Error";
        			break;

        		case "error":
        			$class = "alert-info";
        			$title = "Info";
        			break;
        		
        		default:
        			$class = "";
        			$title = "";
        			break;
        	}
            echo '
            	<!-- Info Alert -->
				<div class="alert '.$class.' alert-dismissible fade show">
				    <h5 class="alert-heading">'.$title.'!</h5>
				    <p>'.$this ->ci->session->{$key_msg}.'</p>
				    <hr>
				    
				    <button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
			';
            
        }
	
	}
	

?>
