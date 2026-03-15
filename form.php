<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h3 class="text-center mb-4">Form Pemesanan Makanan</h3>

<div class="alert alert-info">
   <b>Informasi Harga</b><br>
      Dimsum : Rp3.000 *best seller* <br>
      Burger : Rp30.000<br>
      Sushi : Rp55.000<br>
      Jus Alpukat : Rp15.000<br>
      Salad : Rp20.000
</div>

 <form action="proses_form.php" method="POST">

<div class="mb-3">
   <label class="form-label">Nama Lengkap</label>
   <input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
   <label class="form-label">No HP</label>
   <input type="number" name="dimsum" class="form-control" min="0" value="0">
</div>

<div class="mb-3">
   <label class="form-label">Pilih Menu</label><br>

<div class="form-check">
   <input type="number" name="dimsum" class="form-control" min="0" placeholder="Jumlah Dimsum">
   <label class="form-check-label">Dimsum</label>
</div>

<div class="form-check">
   <input type="number" name="burger" class="form-control" min="0" placeholder="Jumlah Burger">
   <label class="form-check-label">Burger</label>
</div>

<div class="form-check">
   <input type="number" name="sushi" class="form-control" min="0" placeholder="Jumlah Sushi">
   <label class="form-check-label">Sushi</label>
</div>

<div class="form-check">
   <input type="number" name="jus" class="form-control" min="0" placeholder="Jumlah Jus">
   <label class="form-check-label">Jus Alpukat</label>
</div>

<div class="form-check">
   <input type="number" name="salad" class="form-control" min="0" placeholder="Jumlah Salad">
   <label class="form-check-label">Salad</label>
</div>

</div>

<div class="mb-3">
   <label class="form-label">Cara Penyajian</label><br>

<div class="form-check">
   <input class="form-check-input" type="radio" name="cara" value="Makan di Tempat" required>
   <label class="form-check-label">Makan di Tempat</label>
</div>

<div class="form-check">
   <input class="form-check-input" type="radio" name="cara" value="Dibawa Pulang">
   <label class="form-check-label">Dibawa Pulang</label>
</div>

</div>

<div class="mb-3">
   <label class="form-label">Tambahan</label>

<div class="form-check">
   <input class="form-check-input" type="checkbox" name="tambahan[]" value="Extra Saus">
   <label class="form-check-label">Extra Saus (+5000)</label>
</div>

<div class="form-check">
   <input class="form-check-input" type="checkbox" name="tambahan[]" value="Extra Keju">
   <label class="form-check-label">Extra Keju (+7000)</label>
   </div>

</div>

<div class="mb-3">
   <label class="form-label">Metode Pembayaran</label>

<select class="form-select" name="pembayaran" required>
    <option value="">-- Pilih Metode --</option>
    <option>Cash</option>
    <option>Transfer</option>
    <option>E-Wallet</option>
</select>

</div>

<div class="mb-3">
   <label class="form-label">Upload Bukti Pembayaran</label>
   <input type="file" class="form-control" name="bukti" required>
</div>

<button type="submit" class="btn btn-primary w-100">Pesan</button>
<button type="reset" class="btn btn-secondary w-100">Reset</button>

</form>

  </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>