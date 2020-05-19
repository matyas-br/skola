<?php

//abstraktni class ustredny a v ni protected $napeti
abstract class  ustredny_Braun_Matyas{

    protected $napeti_Braun_Matyas;
    
    /**
     * paramert muze nabyvyt pouze float
     * kontrola = float
     * kdyz se cte take to same
 */
    public function setNapeti_Braun_Matyas(float $napeti_Braun_Matyas):float{
        $this->napeti_Braun_Matyas = $napeti_Braun_Matyas;
    }
    //zjisti hodnotu napeti
    public function getNapeti_Braun_Matyas() : float {
        return $this-> napeti_Braun_Matyas;
    }
}
// trida ustredna dedi do abstraktni tridy ustredny
class  ustredna_Braun_Matyas extends ustredny_Braun_Matyas{
   public $Napeti_Braun_Matyas= 15;

   //nastaveni konstanty type
   const TYPE ="12";
}
//trida iustredna dedi interface od abstraktni tridy ustredny
interface iustredna_Braun_Matyas extends ustredny_Braun_Matyas{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Braun_Matyas);
}

//pres vardump bude vypsana hodnota v napeti na ustredne a v TYPE
 var_dump (ustredna_Braun_Matyas::TYPE);
 var_dump (ustredna_Braun_Matyas::Napeti_Braun_Matyas);
?>
