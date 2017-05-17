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
              <li><a href="/posts">Blog</a></li>
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
              <label for="modal-login-toggle" class="animate"><i class="fa fa-user" aria-hidden="true"></i></label>
              <dropdown>
                <input id="modal-login-toggle" type="checkbox">
                <ul class="animate">
                  <?php if(User::isGuest()):?>
                    <li class="animate"><a href="/register">SignUp<i class="fa fa-user-plus float-right"></i></a></li>
                    <li class="animate"><a href="/login">LogIn<i class="fa fa-sign-in float-right"></i></a></li>
                  <?php else:?>
                    <li class="animate"><a href="/profile">Profile<i class="fa fa-user-circle float-right"></i></a></li>
                    <li class="animate"><a href="/logout">LogOut<i class="fa fa-sign-out float-right"></i></a></li>
                  <?php endif;?>
                </ul>
              </dropdown>
          </li>
      </ul>

    </nav>
</header>
