/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

$objPlugin = new QPlugin();
$objPlugin->strName = "QVisualEvent";
$objPlugin->strDescription = 'Plugin that eases debugging of QCubed JS applications through ' .
			'integration with Visual Event http://www.sprymedia.co.uk/article/Visual+Event tool';
$objPlugin->strVersion = "0.1";
$objPlugin->strPlatformVersion = "1.1";
$objPlugin->strAuthorName = "Eduardo Garcia aka enzo";
$objPlugin->strAuthorEmail ="enzo [at] anexusit [dot] com";

$components = array();

$components[] = new QPluginMiscIncludedFile("includes/QVisualEvent.class.php");

$components[] = new QPluginJsFile("js/event-loader.js");

$components[] = new QPluginExampleFile("example/qvisualevent.php");
$components[] = new QPluginExampleFile("example/qvisualevent.tpl.php");

$components[] = new QPluginIncludedClass("QVisualEvent", "includes/QVisualEvent.class.php");

$components[] = new QPluginExample("example/qvisualevent.php", "Introduction to Debugging with QVisualEvent");

$objPlugin->addComponents($components);
$objPlugin->install();
	
?>