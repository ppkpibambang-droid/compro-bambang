<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>
    <h3>Matematika Sederhana - Pembagian</h3>
    <form action="{{ route('bagi-action') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" name="angka1" id="angka1" required>
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" name="angka2" id="angka2" required>
        <br><br>
        <button type="submit">Hitung</button>
    </form>
    @isset($jumlah)
    <h2>Jumlahnya adalah : {{ $jumlah }}</h2>
    @endisset
</body>
</html>