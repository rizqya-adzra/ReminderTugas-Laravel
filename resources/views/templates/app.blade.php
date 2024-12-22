<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <button id="toggle-sidebar" title="Toggle Sidebar">
        <i class="bi bi-list m-1"></i>
      </button>
  
      <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3">
        <div class="d-flex">
          <a href="/" class="d-flex align-items-center gap-2 mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="bi bi-grid"></i>
          </a>
        </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <i class="bi bi-house"></i>
            <span class="ms-2">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <i class="bi bi-highlighter"></i>
            <span class="ms-2">Semua Tugas</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <i class="bi bi-people"></i>
            <span class="ms-2">Kolaborator</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <i class="bi bi-bell"></i>
            <span class="ms-2">Notifikasi</span>
          </a>
        </li>
    </ul>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <i class="bi bi-gear-fill"></i>
            <span class="ms-2">Settings</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <i class="bi bi-box-arrow-left"></i>
            <span class="ms-2">Log Out</span>
          </a>
        </li>
    </ul>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <h2>
                <a class="navbar-brand" href="#">Reminder Tugas App</a>
            </h2>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://via.placeholder.com/35" alt="Profile" class="profile-img me-2">
                  <span>Profile</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li><a class="dropdown-item" href="#">My Account</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <main class="mt-4">
      @yield('contents')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const toggleButton = document.getElementById('toggle-sidebar');
      const sidebar = document.getElementById('sidebar');

      toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
      });
    </script>
  </body>
</html>
