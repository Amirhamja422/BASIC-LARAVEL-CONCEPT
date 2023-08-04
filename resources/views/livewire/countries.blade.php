<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <button type="button" class="btn btn-primary btn-sm" wire:click="OpenAddCountryModel()">ADD NEW CON</button>

    <table class="table table-bordered table-dark" style="margin-top: 9px;">
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
      @include('models.add-model');
</div>
