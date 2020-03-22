<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">Ouchikh Zineddine</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <router-link to="/" class="nav-link">A propos de moi</router-link>   
            </li>
            <li class="nav-item">
                <router-link to="/formation" class="nav-link">Formations</router-link>   
            </li>
            <li class="nav-item">
                <router-link to="/experience" class="nav-link">Expériences</router-link>   
            </li>
            <li class="nav-item">
                <router-link to="/competence" class="nav-link">Compétences</router-link>
            </li>
            </ul>
        </div>
        </nav>
  </div>
</template>