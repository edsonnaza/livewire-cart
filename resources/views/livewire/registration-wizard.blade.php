<?php
/** @see \App\Http\Livewire\RegistrationWizard */
?>
<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

     <div style="{{$currentStep===1 ? 'display:block;':'display:none;'}}"><h1>Step 1</h1>


      <div class="form-group">
        <label for="">Name:</label>
        <input type="text"
          class="form-control" wire:model="name" name="name"  aria-describedby="helpId" placeholder="">
        @error('name')<small id="helpId" class="form-text text-muted " ><span style="color:red;">{{$message}}</span></small>@enderror
      </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email"
            class="form-control" wire:model="email" name="email" id="" aria-describedby="helpId" placeholder="">
          @error('email')<small id="helpId"  class="form-text text-muted "><span style="color:red">{{$message}}</span></small>@enderror
        </div>

        <br class="">
        <button class="btn btn-secondary" wire:click="progressWizard(2)">Next</button>


    </div>
     <div style="{{$currentStep===2 ? 'display:block;' : 'display:none;'}}"><h1>Step 2</h1>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password"
            class="form-control" wire:model="password" name="password" id="" aria-describedby="helpId" placeholder="">
          @error('password')
            <small id="helpId" class="form-text text-muted"><span style="color:red">{{$message}}</span></small>
          @enderror
        </div>
            <br class="">
            <button type="button" class="btn btn-secondary" wire:click="actuallyDoSubmit()">Submit Me</button>
    </div>
            <br class="">
    <div class="d-none d-sm-block">
        <button style="{{$currentStep===2 ? 'display:block;':'display:none;'}}" class="btn btn-primary " wire:click="progressWizard(1,false)">Go to step 1</button>
        <button style="{{$currentStep===1 ? 'display:block;':'display:none;'}}" class="btn btn-primary" wire:click="progressWizard(2,false)">Go to step 2</button>
    </div>



</div>
