<?php
// koneksi database
include "koneksi.php";

// Ambil halaman saat ini dari POST atau default ke halaman 1
$hlm = isset($_POST['hlm']) ? intval($_POST['hlm']) : 1;
$limit = 5; // batas jumlah data per halaman
$limit_start = ($hlm - 1) * $limit;
$no = $limit_start + 1;

// Query untuk mengambil data galeri dengan batasan limit
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM gallery ORDER BY created_at DESC LIMIT ?, ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $limit_start, $limit);
$stmt->execute();
$hasil = $stmt->get_result();

// Hitung total records untuk pagination
$total_records = $conn->query("SELECT FOUND_ROWS() AS total")->fetch_assoc()["total"];
?>

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th class="w-25">Judul</th>
            <th class="w-75">Gambar</th>
            <th class="w-25">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($hasil->num_rows > 0): ?>
            <?php while ($row = $hasil->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <strong><?= htmlspecialchars($row["title"]) ?></strong>
                        <br>pada: <?= htmlspecialchars($row["created_at"]) ?>
                        <br>oleh: <?= htmlspecialchars($row["created_by"]) ?>
                    </td>
                    <td>
                        <?php if (!empty($row["image"]) && file_exists('uploads/' . $row["image"])): ?>
                            <img src="uploads/<?= htmlspecialchars($row["image"]) ?>" width="100">
                        <?php else: ?>
                            <p>Gambar tidak ditemukan</p>
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Link untuk Update Data -->
                        <a href="#" title="edit" class="badge rounded-pill text-bg-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["id"] ?>">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <!-- Link untuk Delete Data -->
                        <a href="#" title="delete" class="badge rounded-pill text-bg-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>">
                            <i class="bi bi-x-circle"></i>
                        </a>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="modalEdit<?= $row["id"] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $row["id"] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel<?= $row["id"] ?>">Edit Galeri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="update_gallery.php" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                    <div class="mb-3">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($row["title"]) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ganti Gambar</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gambar Lama</label><br>
                                        <?php if (!empty($row["image"]) && file_exists('uploads/' . $row["image"])): ?>
                                            <img src="uploads/<?= htmlspecialchars($row["image"]) ?>" width="100">
                                        <?php endif; ?>
                                        <input type="hidden" name="image_old" value="<?= htmlspecialchars($row["image"]) ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Hapus -->
                <div class="modal fade" id="modalHapus<?= $row["id"] ?>" tabindex="-1" aria-labelledby="hapusModalLabel<?= $row["id"] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel<?= $row["id"] ?>">Hapus Galeri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="delete_gallery.php">
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus galeri <strong><?= htmlspecialchars($row["title"]) ?></strong>?</p>
                                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                    <input type="hidden" name="image" value="<?= htmlspecialchars($row["image"]) ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Tidak ada data ditemukan.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<p>Total gallery: <?= $total_records ?></p>

<nav class="mb-2">
    <ul class="pagination justify-content-end">
        <?php
        $jumlah_page = ceil($total_records / $limit);
        $jumlah_number = 1;
        $start_number = max(1, $hlm - $jumlah_number);
        $end_number = min($jumlah_page, $hlm + $jumlah_number);

        if ($hlm == 1): ?>
            <li class="page-item disabled"><a class="page-link" href="#">First</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
        <?php else:
            $link_prev = $hlm - 1;
            ?>
            <li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>
            <li class="page-item halaman" id="<?= $link_prev ?>"><a class="page-link" href="#">&laquo;</a></li>
        <?php endif;

        for ($i = $start_number; $i <= $end_number; $i++):
            $link_active = ($hlm == $i) ? ' active' : '';
            ?>
            <li class="page-item halaman<?= $link_active ?>" id="<?= $i ?>"><a class="page-link" href="#"><?= $i ?></a></li>
        <?php endfor;

        if ($hlm == $jumlah_page): ?>
            <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">Last</a></li>
        <?php else:
            $link_next = $hlm + 1;
            ?>
            <li class="page-item halaman" id="<?= $link_next ?>"><a class="page-link" href="#">&raquo;</a></li>
            <li class="page-item halaman" id="<?= $jumlah_page ?>"><a class="page-link" href="#">Last</a></li>
        <?php endif; ?>
    </ul>
</nav>
