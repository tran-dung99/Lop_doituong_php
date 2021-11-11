<?php
class QuadraticEquation{
    private $a;
    private $b;
    private $c;
    private $delta;
    public function __construct($a,$b,$c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->delta = $b*$b - 4*$a*$c;
    }
    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->b;
    }
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        return $this->delta;
    }
    public function getRoot()
    {
        if($this->delta > 0) {
            return "Phương trình có 2 nghiệm x1 = ".(-$this->b + sqrt($this->delta))/(2*$this->a)."và x2 = ".
                (-$this->b -  sqrt($this->delta))/(2*$this->a);
        }else if($this->delta === 0){
            return "Phương trình có nghiệp kép x1 = x2 = ".-$this->b/(2*$this->a);
        }else{
            return "The equation has no roots";
        }
    }
}
?>
