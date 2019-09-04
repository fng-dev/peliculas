<template>
  <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light rounded-bottom border m-0 p-o pl-5">
    <a class="navbar-brand" href="/">Peliculas</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pelicula/drama">Drama</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/pelicula/comedia">Comedia</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/pelicula/accion">Acción</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/pelicula/terror">Terror</a>
        </li>

      </ul>
    </div>
  </nav>
</template>
