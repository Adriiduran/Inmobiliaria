
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        main {
            background-color: #f4f4f4f4;
        }

        .btn-añadir {
            background-color: green;
            padding: 4rem;
            color: white;
            border-radius: 2rem;
        }
    </style>
    
        <link rel="stylesheet" href="resources/css/styles.css">
    <script src="resources/js/boostrap.min.js"></script>
    <script src="resources/js/scripts.js"></script>
    <script src="resources/js/app.js"></script>
    <script src="resources/js/tables2.js"></script>
    <script src="resources/js/datatables-simple-demo.js"></script>
    </head>

<body class="sb-nav-fixed ">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/"><i class="fas fa-cat"></i> INMOBILIARIA</a>
        <!-- Sidebar Toggle-->
        <div><button class="btn btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="	fas fa-outdent"></i></button></div>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>


        <!-- Navbar-->

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-cog"></i></a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('profile.edit') }}">Perfil</a></li>
                    </form>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="dropdown-item">
                            {{ __('Desconectar') }}
                        </button>
                    </form>

                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading text-white">Sitios Administrativos</div>
                        <a class="nav-link" href="{{ url('/admin/usuarios') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                            Usuarios

                        </a>

                        <a class="nav-link  active" href="{{ url('/admin') }}">
                            <div class="sb-nav-link-icon text-white"><i class="	fas fa-home"></i></div>
                            Inmueble
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Usuario: {{ Auth::user()->name }}</div>
                    <div class="small">{{ Auth::user()->email }}</div>

                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid px-4">
                    <div class="row pt-4">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Ventas (Mes)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,375,000€</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Ventas (Año)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">245,215,000€</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tareas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                MENSAJES</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid m-4 d-flex justify-content-center align-items-center" id="btn-añadir">
                        <div class="btn btn-success" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <h4>Añadir</h4>
                        </div>
                    </div>
                 
                    <!-- Añadir inmo -->
                    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="text-center">Añadir Inmueble</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="{{route('inmueble.store')}}" method="POST">
                                    @csrf    
                                    <div class="m-3 form-floating position-relative">
                                            <input type="text" name="descripcion" id="input-email" class="form-control" placeholder=" " required />
                                            <label for="input-email" class="form-label">Descripcion</label>
                                            <div id="email-help-block" class="form-text">
                                                Breve descripcion del inmueble.
                                            </div>
                                            <div class="valid-tooltip">Campo válido</div>
                                            <div class="invalid-tooltip">Inmueble no valido</div>
                                        </div>

                                        <div class="m-3 form-floating position-relative">
                                            <input type="text" name="direccion" id="input-text" class="form-control" placeholder=" " required />
                                            <label for="input-text" class="form-label">Direccion</label>
                                            <div id="text-help-block" class="form-text">
                                                Direccion del inmueble.
                                            </div>
                                            <div class="valid-tooltip">Campo válido</div>
                                            <div class="invalid-tooltip">Direccion no valido</div>
                                        </div>


                                        <div class="m-3 form-floating position-relative">
                                            <input type="text" name="poblacion" id="input-text" class="form-control" placeholder=" " required />
                                            <label for="input-text" class="form-label">Poblacion</label>
                                            <div id="text-help-block" class="form-text">
                                                Poblacion del inmueble.
                                            </div>
                                            <div class="valid-tooltip">Campo válido</div>
                                            <div class="invalid-tooltip">Direccion no valido</div>
                                        </div>

                                        <div class="m-3 form-floating position-relative">
                                            <input type="number" name="precio" id="input-text" class="form-control" placeholder=" " required />
                                            <label for="input-number" class="form-label">Precio</label>
                                            <div id="text-help-block" class="form-text">
                                                Precio del inmueble.
                                            </div>
                                            <div class="valid-tooltip">Campo válido</div>
                                            <div class="invalid-tooltip">Direccion no valido</div>
                                        </div>

                                        <div class="m-3 form-floating position-relative">
                                            <input type="number" name="metrosCuadrados" id="input-text" class="form-control" placeholder=" " required />
                                            <label for="input-number" class="form-label">MetrosCuadrados</label>
                                            <div id="text-help-block" class="form-number">
                                                Metroscuadrados del inmueble.
                                            </div>
                                            <div class="valid-tooltip">Campo válido</div>
                                            <div class="invalid-tooltip">Direccion no valido</div>
                                        </div>
                                        <input type="hidden" name="imagen" value="imagenes/img2.png">
                                </div>
                                <div class="text-center mb-3 mbr-section-btn">
                                    <button type="submit" class="btn btn-lg btn-primary display-4">Añadir <i class="bi bi-arrow-up-right-square"></i></button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
         

                <div class="card mb-4 shadow">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        INMUEBLES
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-sm">
                            <thead class="thead-dark">
                                <tr class="table-secondary">
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Dirección</th>
                                    <th>Reserva</th>
                                    <th>Población</th>
                                    <th>Precio</th>
                                    <th>Metros Cuadrados</th>
                                    <th>Accion</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="table-secondary">
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Dirección</th>
                                    <th>Reserva</th>
                                    <th>Población</th>
                                    <th>Precio</th>
                                    <th>Metros Cuadrados</th>
                                    <th>Accion</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($inmuebles as $inmueble)
                                <tr>
                                    <td>{{ $inmueble->id }}</td>
                                    <td>{{ $inmueble->descripcion }}</td>
                                    <td>{{ $inmueble->direccion }}</td>
                                    <td>{{ $inmueble->reserva }}</td>
                                    <td>{{ $inmueble->poblacion }}</td>
                                    <td>{{ $inmueble->precio }}€</td>
                                    <td>{{ $inmueble->metrosCuadrados }}</td>


                                    <!-- resources/views/note.blade.php -->


                                    <!-- El resto del codigo aqui -->
                                    <td>
                                        <form method="POST" action="{{ url("admin/{$inmueble->id}") }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>

                                        @empty
                                        <!-- ... -->



                                    </td>
                                        
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
</body>

</html>