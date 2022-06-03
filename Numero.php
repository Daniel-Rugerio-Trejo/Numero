<?php
	class Numero{
		public $n;
		public function __construct($num){
			$this->n = $num;
			}
		
        public function va()
        {
			if ($this->n<0) return -1*$this->n;
			else return $this->n;
		}
        public function par(){
            if($this->n % 2 == 0 )return true;
            else return false;
        }
        //devuelve true si el número es primo, false de lo contrario
        public function primo(){
            
        }
        //devuelve el máximo común divisor
        public function mcd($numero2){
            if($num == 1)
            {
            return false;
            }
        else if($num == 2)
        {    
        return true;
        }
        else{
        $ceil = ceil(sqrt($num));
        for($i = 3; $i <= $ceil; $i = $i + 2) {
            if($num % $i == 0)
                return false;
        
    }
}
        }
        //devuelve el texto en letra del número
        public function numeroenletra(){
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
            if($this->n==0) return "uno";
        }
	}	
?>