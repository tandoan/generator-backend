<?php
require_once('interfaces/iPage.php');

abstract class PageDecorator implements iPage {
	public $pageToBeDecorated;

	public function setImage($im){
		$this->pageToBeDecorated->setImage($im);
	}

	public function getImage(){
		return $this->pageToBeDecorated->getImage();
	}

	public function getFontColor(){
		return $this->pageToBeDecorated->getFontColor();
	}

	public function getHilightColor(){
		return $this->pageToBeDecorated->getHilightColor();
	}

	public function __construct($pageToBeDecorated) {
		$this->pageToBeDecorated = $pageToBeDecorated;
	}

	public function draw() {
		$this->pageToBeDecorated->draw();
	}
}