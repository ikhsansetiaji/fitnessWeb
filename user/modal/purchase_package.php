<!-- Modal untuk Beli Paket -->
<div class="modal fade" id="purchasePackageModal" tabindex="-1" aria-labelledby="purchasePackageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="packageForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchasePackageModalLabel">Pilih Paket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="menu_paket_id">Pilih Paket:</label>
                        <select name="menu_paket_id" id="menu_paket_id" class="form-control" required>
                            <!-- Opsi paket dari database -->
                            <?php
                            session_start();
                            $conn = new mysqli("localhost", "root", "", "fitness_db");
                            if ($conn->connect_error) {
                                echo '<option disabled>Gagal memuat paket</option>';
                            } else {
                                $result = $conn->query("SELECT id, nama, harga FROM menu_paket");
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nama'] . ' - Rp' . number_format($row['harga'], 2) . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success" onclick="">Bayar dengan Dana</button>
                </div>
            </form>
        </div>
    </div>
</div>