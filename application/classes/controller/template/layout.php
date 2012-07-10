<?php defined('SYSPATH') or die('No direct access allowed.');
 
  class Controller_Template_Layout extends Controller_Template 
  {
      public $template = 'template/layout';
      /**
       * The before() method is called before your controller action.
       * In our template controller we override this method so that we can
       * set up default values. These variables are then available to our
       * controllers if they need to be modified.
       */
      public function before()
      {
		parent::before();
		$this->session = Session::instance();
		
  	    if ($this->auto_render)
  	    {
  	    	// Initialize empty values
  	    	$this->template->title   = '';
  	    	$this->template->content = '';
			$this->template->templates = '';
  			
  		$this->template->styles = array();
  		$this->template->scripts = array();
        }
      }
  	
      /**
       * The after() method is called after your controller action.
       * In our template controller we override this method so that we can
       * make any last minute modifications to the template before anything
       * is rendered.
       */
      public function after()
      {
		if ($this->auto_render)
		{
			$styles = array(
				'assets/css/bootstrap.css' => 'screen, projection',
				'assets/css/bootstrap-responsive.css' => 'screen, projection',
			);
	  
			$scripts = array(
				'assets/js/jquery-1.7.2.min.js',
				'assets/js/bootstrap.js',
			);
			
			$this->template->styles = array_merge( $styles, $this->template->styles );
			$this->template->scripts = array_merge( $scripts, $this->template->scripts );
		}
		parent::after();
      }

  }