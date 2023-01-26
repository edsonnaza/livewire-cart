<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationSweetAlert extends Component
{   protected $listener=['remove'];

    public function render()
    {
        return view('livewire.notification-sweet-alert');
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'User Delete Successfully!',
                'text' => 'It will not list on users table soon.'
            ]);
    }
}
