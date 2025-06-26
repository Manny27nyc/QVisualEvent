/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class QVisualEvent extends QControl {
	
	public function __construct($objParentObject,$strControlId = null) {
		if ($objParentObject) {
			parent::__construct($objParentObject, $strControlId);
		}

		$this->AddPluginJavascriptFile("QVisualEvent", "event-loader.js");
	}
	
	public function Init(){
		//Execute javascript to run visual event parser
		QApplication::ExecuteJavaScript("QVisualEvent.Init();");
	}

	public function Close(){
		QApplication::ExecuteJavaScript("if(document.getElementById('Event_display')) VisualEvent.fnClose();");
	}	
	
	public function GetControlHtml() {return null;}
	
	public function GetEndScript() {return null;}

	public function ParsePostData() {return true;}

	public function Validate(){return true;}
}
?>
