<!DOCTYPE html>
<html lang="en">
    <head>
       @include('layouts._head')
    </head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All class') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <a href="{{route('class.create')}}"  class="btn btn-info">Add new</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Sl</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($class as $key=>$row )
                    <tr>
                    <th>{{$key++}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        <a href="{{route('class.edit',$row->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('class.delete',$row->id)}}" class ="btn btn-danger">Delete</a>

                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
