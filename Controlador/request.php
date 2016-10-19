<?php 

class Request{
	
	protected $url;

	public function __construct($url)
	{
		$this->url_=$url;
	}

	public function getUrl()
	{
		return $this->url;
	}
}

?>