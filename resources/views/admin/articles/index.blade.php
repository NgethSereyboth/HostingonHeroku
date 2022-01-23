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
          <td>{{ Str::limit($article->title, 20) }}</td>
          <td>{{ Str::limit($article->content, 20) }}</td>
          <td>
            <div
              class="image-preview-listing"
              style="
                background: url('{{ asset('storage/'.$article->image) }}');
              "
            >
            </div>
          </td>
          <td>
            <div 
              class="btn btn-success"
              data-controller="admin-article"
              data-action="click->admin-article#openPopUpModal"
            >
              Show
            </div>
            <div class="btn btn-primary">Edit</div>
            <div class="btn btn-danger">Delete</div>
          </td>
        </tr>

      @endforeach
      
    </tbody>
  </table>

@endsection