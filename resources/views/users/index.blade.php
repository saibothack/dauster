{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Usuarios')

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
                                        Catalógo Usuarios
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
                                                    <a href="{{ URL::to('users/create') }}" class="button">
                                                        Agregar
                                                    </a>
                                                </div>

                                                {!! Form::open(['route' => 'users.index', 'method' => 'get', 'style' => 'width: 50% !important;']) !!}
                                                <div style="width: 100% !important; display: inline-flex;">
                                                    <div style="width: 70% !important;">
                                                        <input type="text" placeholder="Ingrese su busqueda" id="search" name="search" style="vertical-align: middle !important;">
                                                    </div>
                                                    <div style="width: 30% !important;">
                                                        <input type="submit" value="Buscar" class="button" style="margin-left: 20px !important;">
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>

                                            <br>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Usuario
                                                            </th>
                                                            <th>
                                                                Email
                                                            </th>
                                                            <th>
                                                                Tipo Cuenta
                                                            </th>
                                                            <th>
                                                                Opciones
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $user)
                                                        <tr>
                                                            <td>
                                                                {{ $user->name }} {{ $user->surnames }}
                                                            </td>
                                                            <td>
                                                                {{ $user->email }}
                                                            </td>
                                                            <td>
                                                                {{ $user->provider }}
                                                            </td>
                                                            <td class="tdOptions">
                                                                <div style="display: inline-flex;">
                                                                    <a href="{{ URL::to('users/'.$user->id.'/edit') }}" class="button button-grey button-2">
                                                                        <i class="fa fa-fw fa-edit"></i>
                                                                    </a>

                                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
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
                                                    {{ $users->links() }}
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
