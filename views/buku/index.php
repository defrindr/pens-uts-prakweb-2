<?php

if(isset($_GET['update-success'])){ ?>
<div class="alert alert-success">
    Update Success
</div>
<?php } else if(isset($_GET['create-success'])){ ?>
<div class="alert alert-success">
    Create Success
</div>
<?php } else if(isset($_GET['delete-success'])){
    if($_GET['delete-success'] == true){  ?>

<div class="alert alert-success">
    Delete Success
</div>
    <?php } else { ?>
<div class="alert alert-danger">
    Delete gagal
</div>
    <?php }
} ?>

<h1>Buku</h1>
<a href="?module=buku&routes=create" class="btn btn-success">create</a>
<table class="table table-responsive">
    <thead>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
            $buku = $db->find([],"buku");
            foreach($buku as $row): ?>
        <tr>
            <td><?= $row->kode_buku ?></td>
            <td><?= $row->judul ?></td>
            <td><?= $row->pengarang ?></td>
            <td><?= $row->penerbit ?></td>
            <td>
                <a href="?module=buku&routes=view&id=<?= $row->kode_buku ?>" class="btn btn-primary  mt-1">show</a>
                <a href="?module=buku&routes=edit&id=<?= $row->kode_buku ?>" class="btn btn-warning mt-1">edit</a>
                <form action="?module=buku&routes=delete" method="post" style="display: inline-block;">
                    <input type="hidden" name="id" value="<?= $row->kode_buku ?>">
                    <button class="btn btn-danger mt-1">delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>