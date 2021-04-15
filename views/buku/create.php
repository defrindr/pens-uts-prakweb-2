<?php

if(isset($_POST['kode_buku'])){
    $response = $db->insertOne($_POST, "buku");

    if($response){
        header("location: ?module=buku&routes=index&create-success=true");
    }else{ ?>
<div class="alert alert-danger">
    Gagal Dibuat
</div>
<?php }
}


?>

<div class="row">
    <div class="col-md-8">
        <h1>Crete Buku</h1>
    </div>
</div>

<form class="form" action="" method="POST">
    <div class="row">
        <div class="col-md-6 mb-1">
            <div class="mb-3">
                <label for="">Kode Buku</label>
                <input type="text" class="form-control" name="kode_buku" value="<?= ($_POST['kode_buku']) ?? '' ?>">
            </div>
            <div class="mb-3">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?= ($_POST['judul']) ?? '' ?>">
            </div>
        </div>
        <div class="col-md-6 mb-1">
            <div class="mb-3">
                <label for="">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" value="<?= ($_POST['pengarang']) ?? '' ?>">
            </div>
            <div class="mb-3">
                <label for="">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" value="<?= ($_POST['penerbit']) ?? '' ?>">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" value="submit">Submit</button>
        <a href="?module=buku&routes=index" class="btn btn-warning">Kembali</a>
    </div>
</form>