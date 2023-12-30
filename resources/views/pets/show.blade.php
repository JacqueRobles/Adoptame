@extends('layouts.app')

@section('content')
<section class="flex justify-center items-center h-full text-black py-5">
    <div class="w-5/6 bg-white h-full">
        <div class="flex h-1/2">
            <div class="w-1/3 bg-green-300 m-5">hello</div>
            <div class="w-2/3 bg-purple-300 m-5">
                <form action="/pets/2/update" method="POST">
                    <input type="text" name="nickname" value="{{$pet->nickname}}"/>
                </form>
                </form>
            </div>
        </div>
        <div class="bg-red-400 w-full h-1/2">
            <p>{{ $pet }}</p>
            <p>Age: {{ $pet }}</p>
            <p>Species: {{ $pet }}</p>
            <p>Breed: {{ $pet }}</p>
        </div>
    </div>
</section>
@endsection