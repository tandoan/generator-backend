<?php
require_once('interfaces/iPage.php');

class SimplePage implements iPage{
	protected $im;
	protected $hilightColor;
	protected $fontColor;

	public function __construct($im) {
		$this->im = $im;
	}

	public function getImage(){
		return $this->im;
	}

	public function getFontColor(){
		return $this->fontColor;
	}

	public function getHilightColor(){
		return $this->hilightColor;
	}

	public function draw(){
		imagecolorallocate($this->im, 255,255,255);
		$this->hilightColor = imagecolorallocate($this->im, 255, 175, 43);
		$this->fontColor = imagecolorallocate($this->im, 0, 0, 0);
	}
}