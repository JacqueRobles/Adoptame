@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full lg:w-1/2">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">Animals for Adoption</div>

                <div class="px-4 py-5 sm:p-6">
                    <p><a href="/admin/adoptions/create" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">New</a></p>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($adoptions as $adoption)
                            <tr>
                            <th scope="row">{{$adoption->id}}</th>
                                <td>{{$adoption->name}}</td>
                                <td>
                                <form action="/admin/adoptions/{{$adoption->id}}" method="post">
                                    @csrf
                                        <a href="/admin/adoptions/{{$adoption->id}}/edit" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <input type="submit" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer" value="Delete">
                                        @method('delete')
                                    </form>
                                    
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="buttom">{{$adoptions->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection