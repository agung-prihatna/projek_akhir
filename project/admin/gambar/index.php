<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM gambar inner join detail_destinasi on gambar.ID_Detail=detail_destinasi.ID_Detail inner join destinasi 
on detail_destinasi.ID_Destinasi=destinasi.ID_Destinasi");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Gambar Destinasi</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>Nama Destinasi</th>
                  <th>Gambar</th>
                  <th style="width: 100px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while ($data = mysqli_fetch_array($result)) :
                ?>
                  <tr class="text-center">
                    <td><?= $data['ID_Gambar'] ?></td>
                    <td><?= $data['Nama_Destinasi'] ?></td>
                    <td><img src="../../img/gambar/<?php echo $data['Nama_File'] ?>" style="width: 150px; height: auto;"></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?ID_Gambar=<?= $data['ID_Gambar'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?ID_Gambar=<?= $data['ID_Gambar'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>
                <?php
                  endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>