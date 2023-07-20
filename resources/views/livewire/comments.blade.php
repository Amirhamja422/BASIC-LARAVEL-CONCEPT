{{-- <div style="text-align:center;">

    <button wire:click="increment">increment</button>

      <h1>{{ $count }}</h1>

      <button wire:click="descrement">descrement</button>
    </div> --}}

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

    <div class="container">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <br>
            <button type="button" class="btn btn-primary btn-lg">Add</button>

        </div>

        @foreach ($comments as $comment )

        <div class="card">
            <div class="card-body">
            <h4 class="card-title">{{ $comment['creator'] }}</h4>
            <h4 class="card-title">{{ $comment['created_at'] }}</h4>

            <p class="card-text">{{ $comment['body'] }}</p>
            </div>
        </div>

        @endforeach


    </div>

    </body>
    </html>


