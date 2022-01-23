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
      
      @include(
        'layouts._partials.pop_up_modal',
        [ 'saveButtonName' => 'Confirm' ] 
      )

      @foreach ($articles as $article)

        <tr class="admin-article-row">

          <th scope="row">{{ $article->id }}</th>
          
          <td 
            class="admin-article-title"
            data-title="{{ $article->title }}"
          >
            {{ Str::limit($article->title, 20) }}
          </td>

          <td
            class="admin-article-content"
            data-content="{{ $article->content }}"
          >
            {{ Str::limit($article->content, 20) }}
          </td>
          
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
              data-toggle="modal" 
              data-target="#pop-up-modal"
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