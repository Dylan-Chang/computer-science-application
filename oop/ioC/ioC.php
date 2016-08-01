<?php



class Power {

    protected $ability;
    protected $range;

    public function __construct($ability, $range) {
        $this->ability = $ability;
        $this->range = $range;
    }

}

class Fight{
    protected $speed;
    protected $holdtime;
    
    public function __construct($speed,$holdtime) {
        $this->speed = $speed;
        $this->holdtime = $holdtime;
    }
}

class force{
    protected  $force;
    public function __construct($force) {
        $this->force = $force;
    }
}

class shot{
    protected $atk;
    protected $range;
    protected $limit;
    public function __construct($atk,$range,$limit) {
        ;
    }
}

//工厂模式
class SuperModuleFactory{
    public function makeModule($moduleName,$options){
        switch ($moduleName){
            case "Fight":
                return new Fight($options[0],$options[1]);
            case "Force":
                return new Force($options[0]);
            case "Shot":
                return new Shot($options[0],$options[1],$options[2]);
        }
        
    }
}



?>