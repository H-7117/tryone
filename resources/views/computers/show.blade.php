@extends('layout')
@section('title','show computers')
@section('computers')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
     <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
         <h1>computers</h1>
     </div>
     <div class="mt-8 ">
         this is the computers page
        

         <h3>{{ $computer['name'] }} is from {{ $computer['origin'] }} - {{ $computer['price'] }}</h3>
           
     </div>
     
     <a class="edit-btn" href="{{ route('computers.edit',$computer->id) }}">edit</a>

     <form action="{{ route('computers.destroy',$computer->id) }}" method="POST">
        @csrf
        @method('DELETE') 
        <input type="submit" class="delete-btn" value="delete">
     </form>
</div>
@endsection 