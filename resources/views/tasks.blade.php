@extends("base")

@section("page-title", "All Tasks")

@section("content")

    <table border=1>
        @foreach($tasks as $task):
            <tr>
                <td>{{$task->task_name}}</td>
                <td>{{$task->task_duration}}</td>
            </tr>
        @endforeach
    </table>

    {{$tasks->onEachSide(1)->links()}}
@endsection