<P>LISTANDO USUARIOS</P>

<div class="container">
<div class="table" >
    <div class="table__head">Email</div>
    <div class="table__head">User</div>
    <div class="table__head">Acciones</div>

    <?php 
    foreach ($data['users'] as $key ) {
        // print_r($key);
        // die();
        ?>
        <div>
            <?= $key['email'];?>
        </div>
        <div>
            <?= $key['username'];?>
        </div>
        <div>
            <a href="<?= URL ?>/users/edit/<?= $key['id'] ?>">Editar</a>
        </div>
    <?php
    }
    ?>
</div>
</div>


