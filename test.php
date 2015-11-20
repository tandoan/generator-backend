<?php
require_once('SimplePage.php');
require_once('decorators/LogoDecorator.php');
require_once('decorators/TextBorderDecorator.php');
require_once('decorators/MetaTextDecorator.php');
require_once('decorators/DateDecorator.php');

$myPage = new LogoDecorator(new TextBorderDecorator( new SimplePage(@imagecreate(602,602))));

$myPage = new MetaTextDecorator( $myPage, 'Twatwaffles (Asshole) - Pathetic Fool');

$myPage = new DateDecorator( $myPage, 1447991481879);

$myPage->draw();
imagepng($myPage->pageToBeDecorated->getImage(), './test.png');
