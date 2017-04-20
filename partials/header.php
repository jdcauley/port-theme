<header class="banner">
  <nav class="">

    <div class="container">

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu( array(
                  'theme_location' => 'primary_navigation',
                  'menu_class' => 'navbar-nav mr-auto',
                  'container'=> false,
                  'walker' => new bs4navwalker()
                ) );
              endif;
              ?>

            <form class="form-inline my-2 my-lg-0">
              <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
              <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
          </div>
        </nav>

    </div>

  </nav>

</header>
