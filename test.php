<?php
require_once('SimplePage.php');
require_once('decorators/LogoDecorator.php');
require_once('decorators/TextBorderDecorator.php');
require_once('decorators/MetaTextDecorator.php');
require_once('decorators/DateDecorator.php');

$height = 602;
$width = 602;
$im = new Imagick();
$im->newImage($width, $height, new ImagickPixel('#fff'));

// $myPage = new LogoDecorator(new TextBorderDecorator( new SimplePage($im)));
$myPage = new SimplePage($im);
$myPage = new MetaTextDecorator( $myPage, 'Twatwaffles (Asshole) - Pathetic Fool');
// $myPage = new DateDecorator( $myPage, 1447991481879);

$myPage->draw();

// $im->setImageFormat('png');
$myPage->pageToBeDecorated->getImage()->setImageFormat('png');
$myPage->pageToBeDecorated->getImage()->writeImage('./test.png');
// imagepng($myPage->pageToBeDecorated->getImage(), './test.png');
