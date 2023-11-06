<?php
namespace App\Model;
class Tesla
{
    private string $model;
    private float $acceleration;
    private float $wltp;
    private int $seats;
    private string $img;
    private static $models = ["s","3","x","y"];

    public function __construct(string $model,float $acceleration,float $wltp, int $seats, string $img){
        $this->model = $model;
        $this->acceleration = $acceleration;
        $this->wltp = $wltp;
        $this->seats = $seats;
        $this->img = $img;
    }

    public function getModel(): string{
        return $this->model;
    }
    public function getAcceleration():float{
        return $this->acceleration;
    }
    public function getwltp():float{
        return $this->wltp;
    }
    public function getseats():int{
        return $this->seats;
    }
    public function getImgPath():string{
        return $this->img;
    }
    public static function getModels(): array{
        return self::$models;
    }


}






?>