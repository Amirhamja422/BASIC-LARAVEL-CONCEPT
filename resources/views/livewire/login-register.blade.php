<form wire:submit.prevent="submit">

    <div class="form-group">

        <label for="exampleInputName">Name</label>

        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">

        @error('name') <span class="text-danger">{{ $message }}</span> @enderror

    </div>



    <div class="form-group">

        <label for="exampleInputEmail">Email</label>

        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter name" wire:model="email">

        @error('email') <span class="text-danger">{{ $message }}</span> @enderror

    </div>



    <div class="form-group">

        <label for="exampleInputbody">Body</label>

        <textarea class="form-control" id="exampleInputbody" placeholder="Enter Body" wire:model="body"></textarea>

        @error('body') <span class="text-danger">{{ $message }}</span> @enderror

    </div>



    <button type="submit" class="btn btn-primary">Save Contact</button>

</form>
<div class="container">
    <h2>Contact List</h2>

    <table class="table" style="width:70%;">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Body</th>
      </tr>
    </thead>
      <tbody>
      @foreach ($contacts as $contact)

        <tr>
            <td>{{ $contact['id'] }}</td>
            <td>{{ $contact['name'] }}</td>
            <td>{{ $contact['email'] }}</td>
            <td>{{ $contact['body'] }}</td>

        </tr>

      @endforeach
    </tbody>
</table>
</div>


  </div>
