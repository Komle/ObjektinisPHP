<?php
namespace userApp;
class User
{
    public $asmenskodas;
    public $vardas;
    public $pavarde;
    public $pareigos;
    public $email;
    public $uzmokestis;
    public $busena;

    public function __construct($asmenskodas, $vardas, $pavarde, $pareigos, $email, $uzmokestis, $busena){
        $this->asmenskodas = $asmenskodas;
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->pareigos = $pareigos;
        $this->email = $email;
        $this->uzmokestis = $uzmokestis;
        $this->busena = $busena;
    }
    public function showProfile(){
        $data[] = $this->asmenskodas;
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->pareigos;
        $data[] = $this->email;
        $data[] = $this->uzmokestis;
        $data[] = $this->busena;

        return $data;
    }
}
