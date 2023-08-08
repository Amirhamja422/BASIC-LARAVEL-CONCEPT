<!DOCTYPE html>
<html lang="en">
<head>
  <title>LIVEWIRE CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  @livewireStyles

</head>
<body>

<div class="container-fluid p-5  text-white text-center">
</div>

<livewire:countries />

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  @livewireScripts
  <script>
     window.addEventListener('OpenAddCountryModel',function(){
        // alert('hi');
        $('.addCountry').find('span').html('');
        $('.addCountry').find('form')[0].reset();
        $('.addCountry').modal('show');

     });


     window.addEventListener('CloseAddCountryModel',function(){
        // alert('hi');
        $('.addCountry').find('span').html('');
        $('.addCountry').find('form')[0].reset();
        $('.addCountry').modal('hide');
        alert('New country added successfully');

     });


     window.addEventListener('OpenEditCountryModal',function(event){
    //  alert(event.detail.id);
    $('.addEidtCountry').find('span').html('');
     $('.addEidtCountry').modal('show');

     });


  </script>
</body>
</html>

