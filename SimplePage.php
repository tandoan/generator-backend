<?php
require_once('interfaces/iPage.php');

class SimplePage implements iPage{
	protected $im;
	protected $hilightColor;
	protected $fontColor;

	public function __construct($im) {
		$this->im = $im;
		$this->fontColor = '#000000';
		$this->hilightColor = 'rgb(255,175,43)';
	}

	public function setImage($im){
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
	}
}