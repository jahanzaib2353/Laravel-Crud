<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
    
</head>

<body>
<div class="container ">
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
<a class="navbar-brand text-white " href="#">User</a>
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      
      <li class="nav-item">
        <a class="nav-link text-white" href="list">User list</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="add">Add User</a>
      </li>
      
      </li>
    </ul>
  </div>
</nav>
    
        @yield('content') 
    
    <footer class="text-center">Copyrights reserved by @Crudapp</footer>
    </div>
</body>
</html>



