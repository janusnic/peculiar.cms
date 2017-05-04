<body>
    <header>

    <nav class="mainnav" role="navigation">

      <ul>
          <!--   START bottom in responsive menu    -->

              <label for="responsive-toggle" id="btm-open-menu">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
              </label>
          <!--   END bottom in responsive menu    -->

          <li class="item-menu shop" id="menushop">
              <i href="/">shop</i>
              <ul class="sub-menu">
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="#">Link 4</a></li>
              <li><a href="#">Link 5</a></li>
              <li><a href="#">Link 6</a></li>
              </ul>
          </li>
          <li class="logo">
            <a href="/"><?= APPNAME; ?><br><span><?= SLOGAN; ?></span></a>
          </li>
          <li class="nav-icons" id="navicons">
              <label for="search-toggle"><i class="fa fa-search button-search" aria-hidden="true"></i></label>
              <label for="modal-basket-toggle" id="cart_trigger"><i class="fa fa-shopping-cart" aria-hidden="true"></i></label>
              <label for="modal-login-toggle"><i class="fa fa-user" aria-hidden="true"></i></label>
          </li>
      </ul>

    </nav>
</header>
