@extends('layouts.permisos')
@section('content')
 
<!-- [ Layout content ] Start -->
<div class="layout-content">

<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">   
    <div class="row">
        <div class="col-6">
            <h4 class="font-weight-bold py-3 mb-0">PRODUCTOS</h4>
        </div>
            <div class="col-6" align="right">
                    <a href="{{route('producto.create')}}" type="button" class="btn btn-round btn-success"><i class="feather icon-plus"></i> Registrar</a>
            </div>
         </div>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item" >Productos</li>
            <li class="breadcrumb-item active" >Registro</li>
        </ol>
    </div>

    <div class="card" style="padding:30px;">
        <div class="card-header" style="margin-bottom:30px;">Listado de Productos</div>
        @if (session('success'))
            <div class="alert alert-dark-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('success') }}
            </div>
            
        @endif
        <table class="table card-table" id="basic-datatable">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($productos as $i => $item)
                    <tr>
                        <th scope="row">{{$i + 1 }}</th>
                        <td>{{$item->nombre}}</td>
                        <td style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{!! $item->descripcion !!}</td>
                        <td>{{$item->precio}}</td>
                        <td>{{$item->stock}}</td>
                        <td>
                            <a href="{{route('producto.edit',$item->id)}}" class="btn btn-round btn-info"
                               title="Editar">
                                <i class="feather icon-edit-2"></i>
                            </a>&nbsp;
                            
                            <a href="{{route('producto.delete', $item->id)}}" class="btn btn-round btn-danger"
                               data-id="{{ $item->id }}"
                               title="Eliminar">
                                <i class="feather icon-trash-2"></i>
                            </a>
                        </td>
                    
                    </tr>
                @endforeach
                    
               
            </tbody>
        </table>
    </div>
    
    


</div>
<!-- [ Layout content ] Start -->

@endsection