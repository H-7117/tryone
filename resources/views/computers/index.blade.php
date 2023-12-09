@extends('layout')
@section('title','computers')
@section('computers')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
     <div class="flex justify-center ">
         <h1>computers</h1>
     </div>
     <div class="mt-8 ">
         <!-- this is the computers page -->
        
         <!-- {{ print_r($computers); }} -->

         <ul>
            
            @if (count($computers) > 0)

             @foreach($computers as $computer)
             
             <a href="{{ route('computers.show',['computer' => $computer['id']]) }}"> 
                <li>
                  <p>{{ $computer['name'] }} is from {{ $computer['origin'] }} - {{ $computer['price'] }} </p>  
                </li>
            </a>
             
             
             @endforeach
            </ul>
            @else
            <p>there is not computers to show</p>
            @endif
     </div>
     
</div>
@endsection 