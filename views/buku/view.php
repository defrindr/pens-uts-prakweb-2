<?php
$buku = $db->findOne([
    "where" => [
        "=",
        "kode_buku",
        $_GET['kode_buku'],
    ],
], "buku");?>
<div class="row">

    <div class="col-md-8">
        <h1>Buku: <?=$buku->judul?></h1>
    </div>
</div>
<table class="table table-responsive">
    <tbody>
        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td><?=$buku->kode_buku?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><?=$buku->judul?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td><?=$buku->pengarang?></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><?=$buku->penerbit?></td>
        </tr>
    </tbody>
</table>

<a href="?module=buku&routes=index" class="btn btn-warning">Kembali</a>