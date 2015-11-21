<?php
require_once('PageDecorator.php');

class MetaTextDecorator	extends PageDecorator {
	private function drawMeta(){
		$im = $this->pageToBeDecorated->getImage();
		$color = $this->pageToBeDecorated->getFontColor();
		$fontFile = 'fonts/rubik/Rubik-Regular.ttf';
		$fontSize = 10;

		$x = 0;
		$y = 404;
		$pageWidth = 602;
		$padding = 8;

		$draw = new ImagickDraw();
		$draw->setTextAntialias(true);
		$draw->setFillColor($color);
		$draw->setStrokeColor('none');	
		$draw->setStrokeWidth(0);
		$draw->setTextKerning(0);

		$draw->setFont($fontFile);
		$draw->setFontSize($fontSize);


		$stats = $im->queryFontMetrics($draw, $this->text);
		$boundingBox = $stats["boundingBox"];
		$x = $pageWidth - $padding - ($stats['textWidth']);
		$y = $y + $stats['textHeight'];

		$im->annotateImage($draw, $x, $y, 0, $this->text);
	}

	public function __construct($pageToBeDecorated, $text) {
		$this->pageToBeDecorated = $pageToBeDecorated;
		$this->text = $text;
	}

	public function draw(){
		parent::draw();
		$this->drawMeta();
	}
}