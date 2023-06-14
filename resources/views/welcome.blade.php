@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
                <style>
                    body {
                        margin: 0;
                        padding: 0;
                    }
                    
                    header {
                        background-color: pink;
                        padding: 20px;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        align-items: center;
                    }
                    
                    .company-info {
                        display: flex;
                        align-items: center;
                    }
                    
                    .company-name {
                        color: white;
                        font-size: 24px;
                        margin-right: 10px;
                    }
                    
                    .logo {
                        width: 50px;
                        height: 50px;
                    }
                    
                    .mission,
                    .vision {
                        padding: 10px;
                        color: white;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }
                    
                    .mission {
                        background-color: #ff8080; /* Rosa claro */
                    }
                    
                    .vision {
                        background-color: #ff4d4d; /* Rosa oscuro */
                    }
                    
                    section {
                        padding: 20px;
                    }
                    
                    .employee {
                        margin-bottom: 20px;
                        background-color: pink;
                        padding: 20px;
                    }
                    
                    .employee-img {
                        width: 200px;
                        height: auto;
                        border-radius: 50%;
                    }
                    
                    .employee-desc {
                        margin-top: 10px;
                        text-align: center;
                    }
                    
                    footer {
                        background-color: pink;
                        padding: 20px;
                        text-align: center;
                        color: white;
                    }
                </style>
				</h5>
                <header>
                    <div class="company-info">
                        <div class="mission">
                            Misión
                        </div>
                        <div class="company-name">
                            Nombre de la Empresa
                        </div>
                        <img class="logo" src="ruta-del-logo.png" alt="Logo de la Empresa">
                        <div class="vision">
                            Visión
                        </div>
                    </div>
                </header>
                <section>
                    <h2>Equipo de Trabajo</h2>
                    <div class="employee">
                        <img class="employee-img" src="ruta-foto-empleado1.png" alt="Foto del empleado 1">
                        <div class="employee-desc">
                            <h3>Nombre del empleado 1</h3>
                            <p>Descripción del empleado 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="employee">
                        <img class="employee-img" src="ruta-foto-empleado2.png" alt="Foto del empleado 2">
                        <div class="employee-desc">
                            <h3>Nombre del empleado 2</h3>
                            <p>Descripción del empleado 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="employee">
                        <img class="employee-img" src="ruta-foto-empleado3.png" alt="Foto del empleado 3">
                        <div class="employee-desc">
                            <h3>Nombre del empleado 3</h3>
                            <p>Descripción del empleado 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="employee">
                        <img class="employee-img" src="ruta-foto-empleado4.png" alt="Foto del empleado 4">
                        <div class="employee-desc">
                            <h3>Nombre del empleado 4</h3>
                            <p>Descripción del empleado 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="employee">
                        <img class="employee-img" src="ruta-foto-empleado5.png" alt="Foto del empleado 5">
                        <div class="employee-desc">
                            <h3>Nombre del empleado 5</h3>
                            <p>Descripción del empleado 5 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </section>
                <footer>
                    <p>Información de contacto de la empresa:</p>
                    <p>Teléfono: 123-456-7890</p>
                    <p>Email: info@empresa.com</p>
                    <p>Dirección: Calle Principal, Ciudad</p>
                </footer>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
