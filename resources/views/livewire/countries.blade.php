<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <button type="button" class="btn btn-primary btn-sm" wire:click="OpenAddCountryModel()" style="margin-left: 43rem;">ADD NEW CON</button>
    <table class="table table-bordered table-dark" style="margin-top: 9px;text-align: center;width: 50%;margin-left: 33px;">
        <thead>
          <tr>
            <th scope="col">Continent Name</th>
            <th scope="col">Capital City</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($countries as $data)
          <tr>
            <td>{{ $data->continent->continent_name }}</td>
            <td>{{ $data->capital_city }}</td>
            <td>{{ $data->created_at }}</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-danger btn-sm" wire:click="deleteConfirm({{$data->id}})">Delete</button>
                </div>
                <div class="btn-group">

                    <button class="btn btn-success btn-sm" wire:click="OpenEditCountryModal({{$data->id}})">Edit</button>
                </div>
            </td>
          </tr>
          @empty
          <code>No country found!</code>
         @endforelse

        </tbody>
      </table>
      @include('models.add-model');
      @include('models.edit-model');
</div>
