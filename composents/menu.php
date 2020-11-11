        <nav class="navbar navbar-expand-sm br-yellow backg-primary br-buttom">
          <a class="navbar-brand text-bold" href="#">TPMUHESI</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= $_SERVER['PHP_SELF'];?>?page=importation"
                  >IMPORTATION <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item br-rect">
                <a class="nav-link" href="<?= $_SERVER['PHP_SELF'];?>?page=exportation">EXPORTATION</a>
              </li>
             
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Rapport
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <a class="dropdown-item" href="<?= $_SERVER['PHP_SELF'];?>?page=rapport">Imprimer en EXCEL</a>
                  <a class="dropdown-item" href="<?= $_SERVER['PHP_SELF'];?>?page=rapport"">Imprimer en PDF</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>