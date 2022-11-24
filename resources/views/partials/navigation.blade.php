{{--Navegator bar--}}
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="/img/logo.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          HEALTHLINK
        </a>
    </div>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>
    <div class="container-fluid">
      <div class="collapse navbar-collapse"  id="navbarNav">
        <a class="navbar-brand">Bienvenidos</a>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/clinica') }}">Clinicas Medicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/medicos') }}">Médicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contacto') }}">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('acercade') }}">Acerca de</a>
            </li>
            {{--<li class="nav-item">

              <a class="nav-link" href="{{ url('Heathlink/bienvenido') }}">Registrate</a>
            </li>--}}
          </ul>
      </div>
      <form class="d-flex" role="registro">
        <a href="{{ url('registro/registro') }}"><button class="btn btn-outline-success" type="submit">Registrate</button></a>
      </form>
    </div>
  </nav>
<nav>
