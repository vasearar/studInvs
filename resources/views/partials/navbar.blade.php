<nav class="navbar navbar-expand-lg" style="background-color: transparent;" data-bs-theme="dark">
  <style>
    .nav-link:hover{
      text-decoration: underline;
    }
  </style>
  <div class="container-fluid ms-4">
      <a class="navbar-brand" href="/" style="color: black;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path fill="black" d="M280-80v-366q-51-14-85.5-56T160-600v-280h80v280h40v-280h80v280h40v-280h80v280q0 56-34.5 98T360-446v366h-80Zm400 0v-320H560v-280q0-83 58.5-141.5T760-880v800h-80Z"/>
      </svg>Bloguri culinare</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="margin-left: 30%;" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item ms-2" style="margin-right: 10%">
                  <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog" style="color: black;">Recete</a>
              </li>
              <li class="nav-item ms-2">
                  <a class="nav-link {{ Request::is('users') ? 'active' : '' }}" href="/users" style="color: black;">Utilizatori</a>
              </li>
              <li class="nav-item ms-2">
                  <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about" style="color: black; text-wrap: nowrap;">Despre noi</a>
              </li>
          </ul>

          <ul class="navbar-nav ms-auto" style="margin-right: 40px">
              @auth
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                      Salut, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Tabloul de bord</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                              @csrf

                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Ieși din cont</button>
                          </form>
                      </li>
                  </ul>
              </li>
              @else
              <li class="nav-item ms-2">
                  <a class="nav-link {{ (($title == "Login") ? 'active' : '') }}" href="/login" style="color: black;">
                      <i class="bi bi-box-arrow-in-right"></i> Login
                  </a>
              </li>
              @endauth
          </ul>
      </div>
  </div>
</nav>
