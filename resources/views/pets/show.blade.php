@extends('layouts.app')

@section('content')
<section class="flex justify-center items-center text-black pt-5">
    <div class="w-5/6 bg-white h-screen">
        <div class="flex h-1/2">
            <div class="w-1/3 bg-green-300 m-5">hello</div>
            <div class="w-2/3 bg-purple-300 m-5">
                <form action="/pets/2/update" method="POST">
                    <input type="text" name="nickname" value="{{$pet->nickname}}"/>
                </form>
                </form>
            </div>
        </div>
        <div class="bg-red-400 w-full h-1/2 p-5">
            <div class="bg-cyan-200 size-full">
            <p>{{ $pet }}</p>
            <p>Age: {{ $pet }}</p>
            <p>Species: {{ $pet }}</p>
            <p>Breed: {{ $pet }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
