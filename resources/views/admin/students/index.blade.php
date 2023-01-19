

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Creative - Start Bootstrap Theme</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap Icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
<!-- SimpleLightbox plugin CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All class') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <a href="{{route('students.create')}}" class="btn btn-info" style="float:right;">Add Student</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class ID</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $key=>$row )
                    <tr>
                    <th>{{$key++}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->class_id}}</td>

                    <td>
                        <a href="{{route('class.edit',$row->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('students.destroy',$row->id)}}"  method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                        <button type="submit" name="_method" value="DELETE"  class="btn btn-sm btn-danger">Delete</button>
                        </form>

                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
