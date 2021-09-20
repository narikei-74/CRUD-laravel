@extends('conponents.layout')

@section('content')
<p class="bold">[create]</p>
<form action="{{ route('index_create') }}" method="POST">
    @csrf
    <label for="">title : <input type="text" name="title" value="{{ old('title') }}"></label>
    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label for="">text : <textarea name="text">{{ old('text') }}</textarea></label>
    @error('text')
        <div class="error">{{ $message }}</div>
    @enderror
    <button>create</button>
</form>
<p class="bold">[read]</p>
<table>
    <thead>
        <tr>
            <th>title</th>
            <th>view more</th>
            <th class="bold">[update]</th>
            <th class="bold">[delete]</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td><a href="{{ route('show_view', $post) }}">show</a></td>
                <td><a href="{{ route('update_view', $post) }}">update</a></td>
                <td>
                    <form action="{{ route('index_delete', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button>delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

