{{-- \resources\views\countries\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Vehículos')

@section('content')
<div aria-controls="g-offcanvas" aria-expanded="false" class="g-offcanvas-hide g-offcanvas-toggle" data-offcanvas-toggle="">
    <i class="fa fa-fw fa-bars">
    </i>
</div>
<section id="g-top">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100 nomarginall nopaddingall">
                <div class="g-system-messages">
                </div>
            </div>
        </div>
    </div>
</section>
<header id="g-header">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100">
                <div class="g-content">
                    <div class="moduletable ">
                        <div class="g-infolist g-1cols center g-layercontent noborder">
                            <div class="g-infolist-item ">
                                <div class="g-infolist-item-text g-infolist-textstyle-header">
                                    <div class="g-infolist-item-title ">
                                        Catalógo de Vehículos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="g-bottom">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100">
                <div class="g-content">
                    <div class="platform-content">
                        <div class="moduletable ">
                            <div class="custom">
                                <div class="g-grid">
                                    <div class="g-block">
                                        <div class="g-content nomargintop nopaddingtop">
                                            @if(Session::has('flash_message'))
                                                <div class="container">      
                                                    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                                                    </div>
                                                </div>
                                            @endif 

                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">              
                                                    @include ('errors.list') {{-- Including error file --}}
                                                </div>
                                            </div>

                                            <br>
                                            <div style="width: 100%; display: inline-flex; margin-bottom: 10px;">
                                                <div style="width: 50% !important;">
                                                    <!-- agregar -->
                                                    <a href="{{ URL::to('vehicles/create') }}" class="button btn-primary validate">
                                                        Agregar
                                                    </a>
                                                </div>

                                                {!! Form::open(['route' => 'vehicles.index', 'method' => 'get', 'style' => 'width: 50% !important;']) !!}
                                                <div style="width: 100% !important; display: inline-flex;">
                                                    <div style="width: calc(100% - 135px) !important;">
                                                        <input type="text" placeholder="Ingrese su busqueda" id="search" name="search">
                                                    </div>
                                                    <div style="width: 125px !important;">
                                                        <input type="submit" value="Buscar" class="button btn-primary" style="margin-left: 10px !important;">
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>

                                            <br>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Tipo de usuarios
                                                            </th>
                                                            <th>
                                                                Opciones
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($vehicles as $vehicle)
                                                        <tr>
                                                            <td>
                                                                {{ $vehicle->name }}
                                                            </td>
                                                            <td class="tdOptions">
                                                                <div style="display: inline-flex;">
                                                                    <a href="{{ URL::to('vehicles/'.$vehicle->id.'/edit') }}" class="button button-grey button-2">
                                                                        <i class="fa fa-fw fa-edit"></i>
                                                                    </a>

                                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['vehicles.destroy', $vehicle->id] ]) !!}
                                                                        <button class="button button-red button-2" type="submit">
                                                                            <i class="fa fa-fw fa-trash"></i>
                                                                        </button>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="pagination">
                                                    {{ $vehicles->links() }}
                                                </div>
                                            </br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
