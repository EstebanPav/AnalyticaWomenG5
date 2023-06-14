@extends('layouts.app')

@section('template_title')
    Empleo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cliente Id</th>
										<th>Nombre Emp</th>
										<th>Descripcion Emp</th>
										<th>Modalidad Emp</th>
										<th>Horario Emp</th>
										<th>Fechapub Emp</th>
										<th>Experiencia Emp</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleos as $empleo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                {{ $empleo->cliente->nombre_cli }}
                                            </td>
											<td>{{ $empleo->nombre_emp }}</td>
											<td>{{ $empleo->descripcion_emp }}</td>
											<td>{{ $empleo->modalidad_emp }}</td>
											<td>{{ $empleo->horario_emp }}</td>
											<td>{{ $empleo->fechapub_emp }}</td>
											<td>{{ $empleo->experiencia_emp }}</td>

                                            <td>
                                                <form action="{{ route('empleos.destroy',$empleo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleos.show',$empleo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleos.edit',$empleo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $empleos->links() !!}
            </div>
        </div>
    </div>
@endsection
