@extends('layouts.app')

@section('content')

<h1>Create:</h1>

<form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image_url">Carica una immagine</label>
    <input type="file" id="image_url" name="image_url">

    <label for="title">title</label>
    <input type="text" id="title" name="title">

    <label for="author">author</label>
    <input type="text" id="author" name="author">

    <label for="content">content</label>
    <input type="text" id="content" name="content">

    <input type="submit" value="ciao">

</form>

@endsection