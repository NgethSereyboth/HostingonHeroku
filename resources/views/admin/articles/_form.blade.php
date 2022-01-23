<div class="ml-5 mr-5 mt-5">

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