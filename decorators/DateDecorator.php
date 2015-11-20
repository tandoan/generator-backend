<?php
require_once('PageDecorator.php');

class DateDecorator	extends PageDecorator {
	private function drawDate(){
		// TODO: get this from the users timezone, passed in via JSON
		date_default_timezone_set('America/Los_Angeles');
		$date = $this->date/1000;

		$day = date('d', $date);
		$bigBlock = date('* l * F', $date);

		$im = $this->pageToBeDecorated->getImage();
		$color = $this->pageToBeDecorated->getFontColor();
		$orange = $this->pageToBeDecorated->getHilightColor();
		$fontfile = 'fonts/rubik/Rubik-Regular.ttf';

		$pageWidth = 602; 

		$y = 561;
		$yPadding = 8;
		$baseline = $y - $yPadding;
		$dayFontSize = 48;

		$boundingBox = imageftbbox($dayFontSize, 0, $fontfile, $day);
		$dayHeight = abs($boundingBox[7] - $boundingBox[1]);

		$dayLeftPadding = 38;

		$dayX = $dayLeftPadding;
		imagettftext ( $im , $dayFontSize , 0, $dayX , $baseline , $orange , $fontfile , $day);

		$bigBlockPadding = 8;
		$bigBlockX = $dayX + abs($boundingBox[2]-$boundingBox[1]) + $bigBlockPadding;
		imagettftext ( $im , 32 , 0, $bigBlockX , $baseline , $color , $fontfile , $bigBlock);
	}

	public function __construct($pageToBeDecorated, $date) {
		$this->pageToBeDecorated = $pageToBeDecorated;
		$this->date = $date;
	}

	public function draw(){
		parent::draw();
		$this->drawDate();
	}
}