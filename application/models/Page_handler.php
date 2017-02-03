<?php

		/* 
			Page Handler: Page Verification
		*/
		
		
		class Page_handler extends CI_Model { 
		
			
			public function isLoggedIn(){ 
				return ($this->session->userdata("logged_in"))? true : false;
			}
			
			public function member_page(){ 
				if( $this->isLoggedIn() )
				{ 
					return true;
				} else { 
					redirect(base_url(),"refresh");
				}
			}
			
		}

?>