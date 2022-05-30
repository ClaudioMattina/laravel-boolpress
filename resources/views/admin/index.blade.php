<div class="container text-center bg-primary">

</div>

@extends('layouts.app')

@section('content')
    <div class="container w-50 mx-auto">
        <div class="row flex-column">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>TITOLO</th>
                        <th>AUTORE</th>
                    </tr>

                    <tbody>
                        @forelse ($posts as $post)
                           <tr>
                                <td>
                                    <a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a>
                                </td>
                                <td>
                                    {{$post->author}}
                                </td>
                           </tr>
                        @empty
                           <tr>
                            <td>
                                Non ci sono post da vedere.
                            </td>
                           </tr>
                        @endforelse
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection