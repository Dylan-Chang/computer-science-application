<?php
class HtmlDocument{
	private $strategy;
	
	public function __construct($strategy){
		$this->stategy = $strategy;
		
	}
	
	public function getHtml(){
		return "<html><body>".$this->stategy->getContents()."</body></html>";
	}
	
}

interface HtmlContentStrategy{
	public function __construct($name);
	public function getContents();
}

class HelloWorldStrategy implements HtmlContentStrategy{
	var $world;
	public function __construct($world){
		$this->world = $world;
	}
	
	public function getContents(){
		return "Hello" .$this->world."!";
	}
}

$hello =  new HelloWorldStrategy('aaa');
echo $hello->getContents();

$html = new HtmlDocument('HelloWorldStrategy');
echo $html->getHtml();
