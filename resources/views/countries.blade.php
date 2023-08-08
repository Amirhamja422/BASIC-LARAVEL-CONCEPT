<!DOCTYPE html>
<html lang="en">
<head>
  <title>LIVEWIRE CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{  asset('sweetalert2/sweetalert2.min.css') }}">


  @livewireStyles

</head>
<body>

<div class="container-fluid p-5  text-white text-center">
</div>

<livewire:countries />

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>

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


     window.addEventListener('CloseEditCountryModel',function(){
        // alert('hi');
        $('.addEidtCountry').find('span').html('');
        $('.addEidtCountry').find('form')[0].reset();
        $('.addEidtCountry').modal('hide');
        alert('New country Updated successfully');

     });


     window.addEventListener('SwalConfirm', function(event){
               swal.fire({
                   title:event.detail.title,
                   imageWidth:48,
                   imageHeight:48,
                   html:event.detail.html,
                   showCloseButton:true,
                   showCancelButton:true,
                   cancelButtonText:'Cancel',
                   confirmButtonText:'Yes, Delete',
                   cancelButtonColor:'#d33',
                   confirmButtonColor:'#3085d6',
                   width:300,
                   allowOutsideClick:false
               }).then(function(result){
                   if(result.value){
                       window.livewire.emit('delete',event.detail.id);
                   }
               })
           })

           window.addEventListener('deleted', function(event){
               alert('Country record has been deleted');
           });

        //    window.addEventListener('swal:deleteCountries', function(event){

        //        swal.fire({
        //            title:event.detail.title,
        //            html:event.detail.html,
        //            showCloseButton:true,
        //            showCancelButton:true,
        //            cancelButtonText:'No',
        //            confirmButtonText:'Yes',
        //            cancelButtonColor:'#d33',
        //            confirmButtonColor:'#3085d6',
        //            width:300,
        //            allowOutsideClick:false
        //        }).then(function(result){
        //            if(result.value){
        //                window.livewire.emit('deleteCheckedCountries',event.detail.checkedIDs);
        //            }
        //        });
        //    });


  </script>
</body>
</html>

