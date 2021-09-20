@extends('conponents.layout')

@section('content')
<p class="bold">[update]</p>
<form action="{{ route('update_update', $post) }}" method="POST">
    @method('PATCH')
    @csrf
    <label for="">title : <input type="text" name="title" value="{{ old('title', $post->title) }}"></label>
    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror
    <br><br>
    <label for="">text : <textarea name="text">{{ old('text', $post->text) }}</textarea></label>
    @error('text')
        <div class="error">{{ $message }}</div>
    @enderror
    <button>update</button>
</form>
<p><a href="{{ route('index_view') }}">back</a></p>
@endsection

