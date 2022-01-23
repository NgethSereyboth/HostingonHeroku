<div class="ml-5 mr-5 mt-5">

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif

  <div class="form-group">

    <label for="title">Title</label>
    
    <input 
      type="text" 
      class="form-control" 
      id="title"
      name="title" 
      placeholder="Title for the article"
    >
    
  </div>

  <div class="form-group">

    <label for="content">Content</label>
    
    <input 
      type="text" 
      class="form-control" 
      id="content"
      name="content" 
      placeholder="Content for the article"
    >
    
  </div>

  <div class="form-group">
    <label for="image">Upload image for the article</label>
    <input 
      id="image" 
      type="file" 
      class="form-control-file"
      name="image"
      accept="image/png, image/gif, image/jpeg"
    >
  </div>

  <div class="d-flex align-items-center justify-content-end">

    <button
      type="button"
      class="btn btn-warning mr-5"
    >
      Cancel
    </button>

    <button
      type="submit"
      class="btn btn-primary"
    >
      Submit
    </button>

  </div>

</div>