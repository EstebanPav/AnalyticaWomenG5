@extends('layouts.app')

@section('template_title')
    Informacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Informacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('informacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Red Id</th>
										<th>Cont Id</th>
										<th>Mision Inf</th>
										<th>Vision Inf</th>
										<th>Cultural Inf</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informacions as $informacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                {{ $informacion->redsocial->nombre_redsocials}}
                                            </td>
											<td>
                                                {{ $informacion->contacto->nombre_contc}}
                                            </td>
											<td>{{ $informacion->mision_inf }}</td>
											<td>{{ $informacion->vision_inf }}</td>
											<td>{{ $informacion->cultural_inf }}</td>

                                            <td>
                                                <form action="{{ route('informacions.destroy',$informacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('informacions.show',$informacion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('informacions.edit',$informacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $informacions->links() !!}
            </div>
        </div>
    </div>
@endsection
