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
        <a href="{{route('class.index')}}" class="btn btn-info">All List</a>

          <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-primary" role="alert">
            {{ Session::get('message') }}
            </div>
            @endif
            <br>
            <form action="{{ route('class.update',$test->id)}}" method="post">
            @csrf
            @method("PUT")
                <label for="name">Name</label>
                <input type="name"  class="form form-control" id="name" name="name" value="{{  $test->name }}" placeholder="Enter name">
                <label for="email">Email</label>
                <input type="email" class="form form-control" id="email" name="email"  value="{{  $test->email }}" placeholder="Enter email">
                <br>
                <button type="submit" class="btn btn-primary" style="background: red;">Submit</button> 
            </form>      
            </div>
           </div>
    </div>
</x-app-layout>
