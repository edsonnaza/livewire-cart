<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationWizard extends Component
{
    public string $email;
    public string $name;
    public string $password;
    public int $currentStep=1;
    public function render()
    {
        return view('livewire.registration-wizard');
    }

    private static function myGetRules(): array{
              $myrules1=[
                'name'=>['required'],
                'email'=>['required','email'],
            ];
            $myrules2=[
                'password'=>['required','min:6'],
            ];
            $allRules=[
                1 => $myrules1,
                2 => $myrules2,
            ];
        return $allRules;
    }
    public function progressWizard(int $toWhere,$validation=true){

            $allRules=self::myGetRules();

            if($validation){
                    $this->validate($allRules[$this->currentStep]);
            }
            $this->currentStep=$toWhere;

     }

    public function actuallyDoSubmit(){


    }
}
