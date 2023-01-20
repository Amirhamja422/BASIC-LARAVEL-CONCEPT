<!DOCTYPE html>
<html lang="en">
    <head>
       @include('layouts._head')
    </head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new class') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('class.index')}}" class="btn btn-info">Class List</a>
            <div class="container">

            @if(session()->has('message'))
            <div class="alert alert-primary" role="alert">
            {{ Session::get('message') }}
           </div>
            @endif
            <br>
            <form action="{{route('class.store')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="name"  id="name" name="name" class="form-control"  placeholder="Enter name">
                </div>
                
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control"  placeholder="Enter email">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="background:red;">Submit</button> 
            </form>      
            </div>
           </div>
    </div>
</x-app-layout>
