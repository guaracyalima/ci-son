<?php
/**
 * Created by PhpStorm.
 * User: guabirabadev
 * Date: 25/04/2017
 * Time: 06:30
 */

?>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Pagina</th>
            <th class="text-center">Acao</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $item) : ?>
        <tr>
            <td>
                <?php echo $item->id;?>
            </td>

            <td>
                <?php echo $item->title; ?>
            </td>

            <td>
                <a href="/pages/view/<?php echo $item->id ?>" class="btn btn-success">Visualizar</a>
                <a href="/pages/<?php echo $item->id ?>/edit" class="btn btn-info">Editar</a>
                <form action="/pages/<?php echo $item->id ?>/delete" style="display:inline-block" method="post">
                    <input type="submit" value="remover" class="btn btn-danger">
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
