<div class="modal fade addCountry" id="exampleModal" wire:ignore:self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="save">

                <div class="mb-3">
                  <label for="exampleInput" class="form-label">Continent</label>
                  <select id="inputState" class="form-select" wire:model="continent">
                    <option selected>--Select a cont--</option>
                    @foreach ($continents as $item)
                    <option value="{{ $item->id }}">{{ $item->continent_name }}</option>
                    <option>test01</option>
                    <option>test01</option>
                    <option>test01</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleInput" class="form-label">Country Name</label>
                  <input type="text" class="form-control" id="country_name"  name="country_name" aria-describedby="emailHelp" wire:model="country_name">
                </div>

                <div class="mb-3">
                  <label for="exampleInput" class="form-label">Capital City</label>
                  <input type="text" class="form-control" id="capital_city" name="capital_city" aria-describedby="emailHelp" wire:model="capital_city">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
            </div>

      </div>
    </div>
  </div>
