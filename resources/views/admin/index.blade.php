@extends('layouts.app')

@section('styles_scripts')

  <!-- Scripts -->
  <script src="{{ asset('js/admin.js') }}" defer></script>
    
  <!-- Styles -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

@endsection

@section('content')

<div class="wrapper">

  {{-- side bar --}}
  @include('admin._partials.side_bar')

  <div id="content" style="width: 100%">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Open Menu</span>
        </button>

        <a 
          id="create-article" 
          type="button" 
          class="btn btn-info" 
          href="{{ route('admin.articles.create') }}"
        >
          <i class="fas fa-align-left"></i>
          <span>Create</span>
        </a>

      </div>
    
    </nav>

    @yield('admin.content')
  
  </div>

</div>


@endsection