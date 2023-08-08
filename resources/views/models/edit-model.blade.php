<div class="modal fade addEidtCountry" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Country</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="update">
                    <input type="hidden" wire:model="cid">
                     <div class="form-group">
                         <label for="">Continent</label>
                         <select class="form-control" wire:model="up_continent">
                               <option value="">No selected</option>
                               @foreach ($continents as $continent)
                                   <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
                               @endforeach

                         </select>
                         <span class="text-danger"> @error('continent') {{ $message }}@enderror</span>
                     </div>
                     <br>
                     <div class="form-group">
                         <label for="">Country Name</label>
                         <input type="text" class="form-control" placeholder="Country name" wire:model="up_country_name">
                         <span class="text-danger"> @error('up_country_name') {{ $message }}@enderror</span>
                     </div>
                     <br>

                     <div class="form-group">
                         <label for="">Capital City</label>
                         <input type="text" class="form-control" placeholder="Capital city" wire:model="up_capital_city">
                         <span class="text-danger"> @error('up_capital_city') {{ $message }}@enderror</span>
                     </div>
                     <br>

                     <div class="form-group">
                         <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary btn-sm">Update</button>
                     </div>
                 </form>

            </div>
        </div>
    </div>
</div>
