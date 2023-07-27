@extends("layout.main")

@section("container")

<h1>Halaman About</h1>
<h3><?= $nama ?></h3>
<h5><?= $email ?></h5>
<img src="img/<?= $img ?>" alt="<?= $nama ?>" height="100">

@endsection