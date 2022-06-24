<?= $this->extend('layouts/template')?>
<?= $this->section('content')?>
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/bimahelm.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="/img/bimahelm.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="/img/bimahelm.png" class="d-block w-100" alt="">
        </div>
    </div>
</div>

<div class="vh-50"></div>
<?= $this->endSection()?>