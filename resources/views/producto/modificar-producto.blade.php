@extends('layouts.default')
@section('content')

<?php
/**
 * @var \App\Core\Dominio\Producto $producto
 */
?>

<h1>Modificar Producto</h1>

<form action="<?= url('producto/update', ['id' => $producto->getId()]) ?>" method="post">

    <?= csrf_field() ?>

    <div class="mb-3 row">
        <label for="codigo" class="col-sm-1 col-form-label">Código</label>
        <div class="col-sm-4">
            <input type="search" name="codigo" id="codigo" class="form-control @error('name') is-invalid @enderror" value="<?= old('codigo') ?: $producto->getCodigo() ?>" />
        </div>
    </div>

    <div class="mb-3 row">
        <label for="nombre" class="col-sm-1 col-form-label">Nombre</label>
        <div class="col-sm-4">
            <input type="search" name="nombre" id="nombre" class="form-control" value="<?= old('nombre') ?: $producto->getNombre() ?>" />
        </div>
    </div>

    <div class="mb-3 row">
        <label for="precio" class="col-sm-1 col-form-label">Precio</label>
        <div class="col-sm-4">
            <input type="text" inputmode="numeric" name="precio" id="precio" class="form-control" value="<?= old('precio') ?: $producto->getPrecio() ?>" />
        </div>
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>


@stop