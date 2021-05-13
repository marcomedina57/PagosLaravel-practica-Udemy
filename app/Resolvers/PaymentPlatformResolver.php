<?php

namespace App\Resolvers;

use App\Models\PaymentPlatform;

class PaymentPlatformResolver{

    protected $paymentPlatforms;

    public function __construct(){
        $this->paymentPlatforms = PaymentPlatform::all();
    }

    public function resolveservice($paymentPlatformId){

        $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)
        ->name);
        
        $service = config("services.{$name}.class");
        if ($service){
            return resolve($service);
        }

        throw new \Exception('The selected payment platform
        doesnt exist');
    }
}


?>