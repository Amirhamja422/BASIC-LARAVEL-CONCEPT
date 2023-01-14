
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new class') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{route('students.index')}}">All List</a>

          <div class="container">
            <a href="{{route('class.create')}}">Add new</a>
            @if(session()->has('message'))
            <div class="alert alert-primary" role="alert">
            {{ Session::get('message') }}
            </div>
            @endif
            <br><br>
            <form action="{{route('class.store')}}" method="post">
                @csrf
                <label for="name">Name</label>
                <input type="name"  id="name" name="name" placeholder="Enter name">
                <br><br>
                <label for="email">Email</label>
                <input type="email"  id="email" name="email" placeholder="Enter email">
                <br><br>
                <label for="roll">Roll</label>
                <input type="roll"  id="roll" name="roll" placeholder="Enter roll">
                <br><br>
                <label for="password">Password</label>
                <input type="password"  id="password" name="password" placeholder="Enter password">
                <br><br>

                <button type="submit" class="btn btn-primary" style="text-align: center;background: green;border: 5px solid white;color: yellow;margin-left:80px;height: 47px;width: 110px;">Submit</button> 
            </form>      
            </div>
           </div>
    </div>
</x-app-layout>
