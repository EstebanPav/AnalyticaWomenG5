@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Cli</th>
										<th>Genero Id</th>
										<th>Nombre Cli</th>
										<th>Fecha Nac Cli</th>
										<th>Telefono1 Cli</th>
										<th>Telefono2 Cli</th>
										<th>Email Cli</th>
										<th>Titulo Cli</th>
										<th>Rol Cli</th>
										<th>Experiencia Cli</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->id_cli }}</td>
											<td>{{ $cliente->genero_id }}</td>
											<td>{{ $cliente->nombre_cli }}</td>
											<td>{{ $cliente->fecha_nac_cli }}</td>
											<td>{{ $cliente->telefono1_cli }}</td>
											<td>{{ $cliente->telefono2_cli }}</td>
											<td>{{ $cliente->email_cli }}</td>
											<td>{{ $cliente->titulo_cli }}</td>
											<td>{{ $cliente->rol_cli }}</td>
											<td>{{ $cliente->experiencia_cli }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id_cli) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id_cli) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id_cli) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
