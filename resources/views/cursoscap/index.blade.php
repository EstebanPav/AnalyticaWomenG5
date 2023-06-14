@extends('layouts.app')

@section('template_title')
    Cursoscap
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cursoscap') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cursoscaps.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre Cursoscaps</th>
										<th>Descipcion Cursoscaps</th>
										<th>Publicacion Cursoscaps</th>
										<th>Edadmin Cursoscaps</th>
										<th>Edadmax Cursoscaps</th>
										<th>Link Cursoscaps</th>
										<th>Cupos Cursoscaps</th>
										<th>Costo Cursoscaps</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursoscaps as $cursoscap)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                {{ $cursoscap->cliente->nombre_cli}}
                                            </td>
											<td>{{ $cursoscap->nombre_cursoscaps }}</td>
											<td>{{ $cursoscap->descipcion_cursoscaps }}</td>
											<td>{{ $cursoscap->publicacion_cursoscaps }}</td>
											<td>{{ $cursoscap->edadmin_cursoscaps }}</td>
											<td>{{ $cursoscap->edadmax_cursoscaps }}</td>
											<td>{{ $cursoscap->link_cursoscaps }}</td>
											<td>{{ $cursoscap->cupos_cursoscaps }}</td>
											<td>{{ $cursoscap->costo_cursoscaps }}</td>

                                            <td>
                                                <form action="{{ route('cursoscaps.destroy',$cursoscap->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cursoscaps.show',$cursoscap->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cursoscaps.edit',$cursoscap->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cursoscaps->links() !!}
            </div>
        </div>
    </div>
@endsection
