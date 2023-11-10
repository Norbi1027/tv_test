<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
<div class='container'>
  <a class="navbar-brand" href="home.php">Simple Shopping Cart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link" href="home.php">Products</a>
      <a class="nav-item nav-link" href="view_cart.php">Cart (<?php echo $cart->get_cart_count();?>)</a>
    </div>
  </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark"
     style="background-color: black">
    <a class="navbar-brand" href="#">
        TV Shop
    </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?menu=home">
                    Home
                </a>
            </li>
<?php
                if ($_SESSION['login']) {
                    echo '<li class="nav-item">
                        <a class="nav-link' . ($menu == 'termekek' ? ' active' : '') . '" aria-current="page" href="index.php?menu=termekek">termékek</a>
                      </li>
                        <li class = "nav-item">
                            <a class = "nav-link' . ($menu == 'kilepes' ? ' active' : '') . '" href = "index.php?menu=kilepes">Kilépés</a>
                        </li>'
                            ;
                } else {

                    echo '<li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'termekekGuest' ? ' active' : '') . '" aria-current = "page" href = "index.php?menu=termekekGuest">termékek</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'login' ? ' active' : '') . '" href = "index.php?menu=login">Belépés</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'registracio' ? ' active' : '') . '" href = "index.php?menu=registracio">Regisztráció</a>
                    </li>';
                }
                ?>
                <li class = "nav-item">
                    <a class = "nav-link <?php echo ($menu == 'rolunk' ? 'active' : ''); ?>" href = "index.php?menu=rolunk">Rólunk</a>
                </li>

                    <li class = "nav-item">
                            <a class="nav-item nav-link'. ($menu == 'registracio' ? ' active' : '') . '" href="view_cart.php">Cart (<?php echo $cart->get_cart_count();?>)</a><i class="bi bi-basket"></i></a>
                        </li>;
                }
                ?>
            </ul>
            </ul>
            </div>
            </nav>
            