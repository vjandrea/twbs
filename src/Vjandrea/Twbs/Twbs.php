<?php namespace Vjandrea\Twbs;

class Twbs {


	/**
	 * Returns a container
	 *
	 * @param string $content default ''
	 * @return string
	 **/
	public function container($content = '')
	{
		return '<div class="container">'.$content.'</div>';
	}


	/**
	 * Returns a row
	 *
	 * @param string $content default ''
	 * @return string
	 **/
	public function row($content = '')
	{
		return '<div class="row">'.$content.'</div>';
	}


	/**
	 * Returns a glyphicon
	 *
	 * @param string $type default ''
	 * @return void
	 * @todo add a check with in_array to see if the type specified exists
	 **/
	public function icon($type = '')
	{
		return '<span class="glyphicon glyphicon-'.$type.'"></span>';
	}


	/**
	 * Returns an alert of the type specified
	 *
	 * @param string $content default ''
	 * @param string $type default 'success'
	 * @return void
	 * @todo add dismissable option
	 **/
	public function alert($content = '', $type = 'success')
	{
		if($this->isValidAlertType($type)) {			
			return '<div class="alert alert-'.$type.'" role="alert">'.$content.'</div>';
		}

		return '';
	}


	/**
	 * Returns an alert of the type specified
	 *
	 * @param string $content default ''
	 * @param string $type default 'success'
	 * @return void
	 * @todo add dismissable option
	 **/
	public function dismissable_alert($content = '', $type = 'success')
	{
		if($this->isValidAlertType($type)) {			
			return '<div class="alert alert-'.$type.' alert-dismissible" role="alert">
 	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  	<strong>'.ucfirst(strtolower($type)).'!</strong> '.$content.'</div>';
		}

		return '';
	}


	/**
	 * Returns true if the alert type specified is valid
	 *
	 * @param string $type default ''
	 * @return bool
	 **/
	private function isValidAlertType($type = '')
	{
		if(in_array($type, ['success', 'info', 'warning', 'danger'])) {
			return true;
		}
		return false;
	}

	/**
	 * Returns a progress bar
	 *
	 * @param 
	 * @return void
	 **/
	public function progressbar($value = 0, $label = '', $minimum = 0, $maximum = 100)
	{
		$html = '<div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="'. (int) $value .'" aria-valuemin="'. (int) $minimum .'" aria-valuemax="'.(int) $maximum.'" style="width: '.(int) $value.'%;">';
		$html .= $label ? '<span class="sr-only">'.$label.'</span>' : '';
  		$html .= '</div></div>';

  		return $html;
	}
	
	/**
	 * Returns a progress bar
	 *
	 * @param 
	 * @return void
	 **/
	public function progressbar_label($value = 0, $label = '', $minimum = 0, $maximum = 100)
	{
		$html = '<div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="'. (int) $value .'" aria-valuemin="'. (int) $minimum .'" aria-valuemax="'.(int) $maximum.'" style="width: '.(int) $value.'%;">';
		$html .= $label;
  		$html .= '</div></div>';

  		return $html;
	}

	/**
	 * 
	 *
	 * @param 
	 * @return void
	 **/
	public function panel()
	{
		
	}
	/*<div class="panel panel-default">
  <div class="panel-body">
    Panel content
  </div>
  <div class="panel-footer">Panel footer</div>
</div>*/

	
	/**
	 * 
	 *
	 * @param 
	 * @return void
	 **/
	public function well()
	{
		
	}
	// <div class="well">...</div>
	// <div class="well well-lg">...</div>
	// <div class="well well-sm">...</div>

}