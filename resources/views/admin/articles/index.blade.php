@extends('admin.index')

@section('admin.content')

  <table class="table table-sm mr-5 ml-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($articles as $article)

        <tr>
          <th scope="row">{{ $article->id }}</th>
          <td>{{ $article->title }}</td>
          <td>{{ $article->content }}</td>
          <td>{{ $article->image }}</td>
          <td></td>
        </tr>
        
      @endforeach
      
    </tbody>
  </table>

@endsection