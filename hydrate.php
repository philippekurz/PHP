<?php
class Exemple {
    private $_prop1 = "";
    private $_prop2 = "";

    public function __construct(array $props) {
        $this->hydrate($props);
    }

    private function hydrate(array $props) {
        // $props = ['prop1'=>'a', 'prop2'=>'b']
        
        foreach ($props as $key=>$value) {
            //echo "<br>$key=>$value";
            $methode = "set".ucfirst($key);
            echo "<br>$methode";
            if (method_exists($this, $methode)) {
                $this->$methode($value);
            }

        }
    }

    // Setters
    public function setProp1($valeur) {
        $this->_prop1 = $valeur;
    }
    public function setProp2($valeur) {
        $this->_prop2 = $valeur;
    }

    // Getters
    public function getProp1() {
        return $this->_prop1;
    }
    public function getProp2() {
        return $this->_prop2;
    }

}

// Le paramètre est un tableau associatif
$o = new Exemple(['prop1'=>'a', 'prop2'=>'b']);
echo "<br>Prop1 = " . $o->getProp1();
echo "<br>Prop2 = " . $o->getProp2();

?>