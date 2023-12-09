@extends('layout')
@section('title','create computers')
@section('computersedit')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
     <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
         <h1>Edit a new computer</h1>
     </div>

     <div>

         <form action="{{ route('computers.update',['computer' => $computer->id]) }}" method="POST" class="form bg-white p-6">
        @csrf
        @method('PUT')
        <!-- creoss site request forgery -->
         <div>
            <label for="computer-name">Computer Name</label>
            <input type="text" id="computer-name" name="computer-name" value="{{ $computer->name }}">
            @error('computer-name')
               <div class="error_form">
               {{$message}}
               </div>
            @enderror
        </div>

        <div>
            <label for="computer-origin">Computer Origin</label>
            <input type="text" id="computer-origin" name="computer-origin" value="{{ $computer->origin }}">
            @error('computer-origin')
               <div class="error_form">
               {{$message}}
               </div>
            @enderror
        </div>

        <div>
            <label for="computer-price">Computer Price</label>
            <input type="text" id="computer-price" name="computer-price" value="{{ $computer->price }}">
            @error('computer-price')
               <div class="error_form">
               {{$message}}
               </div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
     
     </form>
</div>
@endsection 