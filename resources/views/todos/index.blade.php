@extends('layouts.myapp')

@section('content')
<h2>Todos</h2>
<a href="{{route('todos.create')}}"> Create</a>




<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Snippit
                </th>
                <th scope="col" class="px-6 py-3">
                    User
                </th>
                <th scope="col" class="px-6 py-3">
                    Created
                </th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($todos as $todo)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$todo->title}}
                </th>
                <td class="px-6 py-4">
                    {{$todo->body}}
                </td>
                <td class="px-6 py-4">
                    {{$todo->user_id}}
                </td>
                <td class="px-6 py-4">
                    {{$todo->created_at}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('todos.show', $todo->id)}}">Read More</a>
                </td>
            </tr>
        

        @empty
        <h4>No Todos found!</h4>
        @endforelse
            
            
        </tbody>
    </table>
</div>





@endsection