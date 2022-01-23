<nav id="sidebar">

  <div class="sidebar-header">
    <h3>Admin Menu</h3>
  </div>

  <ul class="list-unstyled components">
    <p>Content</p>

      <li class="active">

        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
        
        <ul class="collapse list-unstyled" id="homeSubmenu">
            
            <li>
              <a href="{{ route ('admin.articles.index') }}"
              >
                Articles
              </a>
            </li>
            <li>
              <a href="#">Stock</a>
            </li>
            <li>
              <a href="#">Live</a>
            </li>

        </ul>

      </li>

      <li>
        <a href="#">Example Title</a>
      </li>

      <li>

        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
        
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
              <a href="#">Page 1</a>
          </li>
          <li>
              <a href="#">Page 2</a>
          </li>
          <li>
              <a href="#">Page 3</a>
          </li>
        </ul>
      
      </li>

      <li>
        <a href="#">Portfolio</a>
      </li>

      <li>
        <a href="#">Contact</a>
      </li>

  </ul>

</nav>