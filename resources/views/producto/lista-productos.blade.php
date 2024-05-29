@extends('layouts.default')
@section('content')


<?php
/**
 * @var \App\Models\Dominio\Producto[] $productos
 * @var string $filtro
 */
?>

<h1>Lista de productos</h1>

<form action="<?= url('producto/index') ?>" method="get">
    <div class="mb-3 row">
        <label for="filtro" class="col-sm-1 col-form-label">Buscar</label>
        <div class="col-sm-2">
            <input type="search" name="filtro" id="filtro" value="<?= $filtro ?>" class="form-control" />
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-outline-secondary">Buscar</button>
        </div>
    </div>
</form>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?= $producto->getId() ?></td>

                <td><?= $producto->getCodigo() ?></td>

                <td><?= $producto->getNombre() ?></td>

                <td class="text-end"><?= number_format($producto->getPrecio(), 1) ?></td>

                <td class="text-center">
                    <?php
                    $urlEdit = url('producto/edit', ['id' => $producto->getId()]);
                    $urlDelete = url('producto/destroy', ['id' => $producto->getId()]);
                    ?>
                    
                    <a href="<?= $urlEdit ?>" class="btn btn-sm text-primary">
                        <i class="fa-solid fa-pencil"></i>
                    </a>

                    <form action="<?= $urlDelete ?>" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-sm text-danger" onclick="return confirm('Desea eliminar el producto?');">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


@stop