<?php

namespace Encurtaqui\Entity;

use \InvalidArgumentException as Argument;

class Page
{
	protected $urlDestination;
	protected $urlShort;

	public function setUrlDestination($urlDestination){

		if (empty($urlDestination)){
			throw new Argument("Empty url isn't allowed");
			
		}

		$this->urlDestination = $urlDestination;
		return $this;
	}

}