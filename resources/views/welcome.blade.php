<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To Do List Application</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="../css/app.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <style>
        .footer {
            margin-top: 140px !important;
        }
    </style>
    <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">To Do List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="/tasks" class="btn  ml-5">Task</a>
        </li>
        <li class="nav-item">
           <a href="/tasks/create" class="btn  ml-5">Create Task</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Benvenuto Nella mia To Do List Application Realizzata in Php con  il Framework Laravel </h1>
    </div>
  </section>
  <br>

  <!-- About Section -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Informazioni sulla nostra applicazione To Do List</h2>
          <p>Questa applicazione ti aiuta a tenere traccia delle tue attività in modo semplice e intuitivo. Che tu stia gestendo le faccende quotidiane o pianificando un grande progetto, la nostra app ti copre.</p>
        </div>
        <div class="col-md-6">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnhoVwuJmtF1Lu4t9WcsZ7fESV9KdIQ7pVHw&s" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </section>
  

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!-- Footer -->
  <footer class="footer text-muted py-5 bg-dark">
    <div class="container text-center">
      <p>&copy; 2024 To Do List Application</p>
    </div>
  </footer>
    </body>
</html>
