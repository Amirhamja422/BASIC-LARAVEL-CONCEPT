{{-- <div style="text-align:center;">

    <button wire:click="increment">increment</button>

      <h1>{{ $count }}</h1>

      <button wire:click="descrement">descrement</button>
    </div> --}}


    <div class="container">
        <div class="mb-3">
            {{ $newComment }}
            <label for="exampleInputEmail1" class="form-label">New Item</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="newComment">


            <button type="button" class="btn btn-primary btn-lg" wire:click="addComment">Add</button>

        </div>

        @foreach ($comments as $comment )

        <div class="card">
            <div class="card-body">
                <p class="card-text">{{ $comment['body'] }}</p>
                <h4 class="card-title">{{ $comment['created_at'] }}</h4>
                <h4 class="card-title">{{ $comment['creator'] }}</h4>
            </div>
        </div>

        @endforeach


    </div>


