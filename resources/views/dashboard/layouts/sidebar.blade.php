<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" 
            href="/dashboard">
              <span data-feather="align-justify"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/data_penugasan') ? 'active' : ''}}" 
            href="/dashboard/data_penugasan">
              <span data-feather="file"></span>
              Data Penugasan
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/penilaian') ? 'active' : ''}}" 
            href="/dashboard/penilaian">
              <span data-feather="file-text"></span>
              Penilaiaan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : ''}}" aria-current="page" 
            href="/home">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : ''}}" aria-current="page" 
            href="/about">
              <span data-feather="alert-circle"></span>
              About
            </a>
          </li>
          
      </div>
      
    </nav>