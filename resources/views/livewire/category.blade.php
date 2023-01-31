<div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" wire:click="OpenAddCategoryModal()"  >
 Add new
</button>
    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



 @livewireScripts
    <script>

           window.addEventListener('OpenAddCategoryModal', function(){
              //  $('.addCategory').find('span').html('');
              //  $('.addCategory').find('form')[0].reset();
                $('#OpenAddCategoryModal').modal('show');
           });
           window.addEventListener('CloseAddCategoryModal', function(){
               $('.addCategory').find('span').html('');
               $('.addCategory').find('form')[0].reset();
               $('.addCategory').modal('hide');
               alert('New Category Has been Saved Successfully');
           });
           window.addEventListener('OpenEditCountryModal', function(event){
               $('.editCountry').find('span').html('');
               $('.editCountry').modal('show');
           });
           window.addEventListener('CloseEditCountryModal', function(event){
               $('.editCountry').find('span').html('');
               $('.editCountry').find('form')[0].reset();
               $('.editCountry').modal('hide');
           });


</script>

<div wire:ignore.self class="modal" id="OpenAddCategoryModal" tabindex="-1">
  <div class="modal-dialog addCategory">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form wire:submit.prevent="save">
        <div   class="form-group">
          <label for="">Category Name</label>
          <input type="text" class="form-control"  wire:model="name" name="" id="name" aria-describedby="helpId" placeholder="Category name">
          @error('name')
                <small id="helpId"   class="form-text text-muted text-danger">{{$message}}</small>
          @enderror
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>
    </div>




