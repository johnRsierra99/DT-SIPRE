@extends('layouts.app')

@section('template_title')
    Programa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Programa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('programa.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Descripción</th>
										<th>Facultad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programa as $programa1)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $programa1->descripcion }}</td>
											<td>{{ $programa1->facultad->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('programa.destroy',$programa1->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('programa.show',$programa1->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('programa.edit',$programa1->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $programa->links() !!}
            </div>
        </div>
    </div>
@endsection
