<?php
PRINT<<<HERE
<!--Navegador-->
<nav class="navbar bg-body-tertiary" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">
                <img src="./images/logoBita.png" alt="Logo" height="50rem" style="margin: 0 auto; display: block;"> 
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="./catalogo.html">Libros</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link active" aria-current="page" href="./categories.html">Categorias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./login.html">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./postPage.html">Sugerencias</a>
                  </li>
              </ul>
            
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
HERE;
