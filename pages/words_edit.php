<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");

// Proteksi Halaman: Khusus Administrator
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'administrator') {
    echo "<script>alert('Akses Ditolak! Halaman ini khusus Administrator.'); window.location='index.php?hal=landing';</script>";
    exit;
}

$pesan = '';

// --- PROSES CRUD (POST) ---
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action == 'add') {
        $subcat_id = (int)$_POST['modal_subcategory_id'];
        $word = $conn->real_escape_string($_POST['word_name']);
        $ipa = $conn->real_escape_string($_POST['ipa']);
        $trans = $conn->real_escape_string($_POST['translation']);
        $note = $conn->real_escape_string($_POST['note']);
        
        $sql = "INSERT INTO words (subcategory_id, word_name, ipa, translation, note) 
                VALUES ($subcat_id, '$word', '$ipa', '$trans', '$note')";
        if ($conn->query($sql)) {
            $pesan = "<div class='alert alert-success'>Kata berhasil ditambahkan!</div>";
        } else {
            $pesan = "<div class='alert alert-error'>Gagal: " . $conn->error . "</div>";
        }
    }
    elseif ($action == 'edit') {
        $word_id = (int)$_POST['word_id'];
        $subcat_id = (int)$_POST['modal_subcategory_id'];
        $word = $conn->real_escape_string($_POST['word_name']);
        $ipa = $conn->real_escape_string($_POST['ipa']);
        $trans = $conn->real_escape_string($_POST['translation']);
        $note = $conn->real_escape_string($_POST['note']);
        
        $sql = "UPDATE words SET 
                subcategory_id = $subcat_id, word_name = '$word', ipa = '$ipa', translation = '$trans', note = '$note' 
                WHERE word_id = $word_id";
        if ($conn->query($sql)) {
            $pesan = "<div class='alert alert-success'>Kata berhasil diperbarui!</div>";
        } else {
            $pesan = "<div class='alert alert-error'>Gagal: " . $conn->error . "</div>";
        }
    }
    elseif ($action == 'delete') {
        $word_id = (int)$_POST['word_id'];
        if ($conn->query("DELETE FROM words WHERE word_id = $word_id")) {
            $pesan = "<div class='alert alert-success'>Kata berhasil dihapus!</div>";
        }
    }
}

// --- AMBIL DATA KATEGORI & SUBKATEGORI ---
$kategori_data = [];
$subkategori_data = [];

$res_cat = $conn->query("SELECT * FROM categories ORDER BY category_name ASC");
while($row = $res_cat->fetch_assoc()) { $kategori_data[] = $row; }

$res_sub = $conn->query("SELECT * FROM subcategories ORDER BY subcategory_name ASC");
while($row = $res_sub->fetch_assoc()) { $subkategori_data[$row['category_id']][] = $row; }

$filter_cat = isset($_GET['filter_cat']) ? (int)$_GET['filter_cat'] : 0;
$filter_sub = isset($_GET['filter_sub']) ? (int)$_GET['filter_sub'] : 0;
?>

<style>
    .alert { padding: 15px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; }
    .alert-success { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
    .alert-error { background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; }
    .card { background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.03); margin-bottom: 30px; }
    .table-words { width: 100%; border-collapse: collapse; min-width: 800px; }
    .table-words th { background: var(--primary); color: white; padding: 15px; text-align: left; }
    .table-words td { padding: 15px; border-bottom: 1px solid #e2e8f0; vertical-align: top; }
    .btn-small { padding: 8px 15px; border-radius: 8px; font-size: 13px; font-weight: 600; border: none; cursor: pointer; display: inline-block; margin-right: 5px; }
    .btn-edit { background: #fef3c7; color: #d97706; }
    .btn-delete { background: #fee2e2; color: #ef4444; }
    .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(4px); z-index: 2000; display: none; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s; }
    .modal-overlay.active { display: flex; opacity: 1; }
    .modal-content { background: white; width: 90%; max-width: 600px; border-radius: 20px; padding: 30px; transform: translateY(-20px); transition: transform 0.3s; max-height: 90vh; overflow-y: auto; }
    .modal-overlay.active .modal-content { transform: translateY(0); }
</style>

<section class="section" style="padding-top: 130px; background: var(--light); min-height: 80vh;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 class="section-title" style="margin-bottom: 0;">Manajemen Kosakata</h2>
        <button class="btn-main" onclick="openModal('add')" style="padding: 10px 20px; font-size: 14px;">+ Tambah Kata</button>
    </div>

    <?= $pesan ?>

    <div class="card">
        <form method="GET" action="index.php" style="display: flex; gap: 15px; flex-wrap: wrap; align-items: flex-end;">
            <input type="hidden" name="hal" value="words_edit">
            <div style="flex: 1;">
                <label class="form-label">Kategori</label>
                <select name="filter_cat" id="filter_cat" class="form-control" onchange="updateFilterSubcat()">
                    <option value="0">-- Pilih Kategori --</option>
                    <?php foreach($kategori_data as $cat): ?>
                        <option value="<?= $cat['category_id'] ?>" <?= ($filter_cat == $cat['category_id']) ? 'selected' : '' ?>><?= htmlspecialchars($cat['category_name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div style="flex: 1;">
                <label class="form-label">Subkategori</label>
                <select name="filter_sub" id="filter_sub" class="form-control" required><option value="">-- Pilih Subkategori --</option></select>
            </div>
            <button type="submit" class="btn-main" style="padding: 12px 25px;">Tampilkan</button>
        </form>
    </div>

    <div class="card" style="padding: 0; overflow-x: auto;">
        <table class="table-words">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="20%">Kata (Inggris)</th>
                    <th width="15%">IPA</th>
                    <th width="25%">Terjemahan</th>
                    <th width="20%">Catatan</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($filter_sub > 0) {
                    $sql_words = "SELECT * FROM words WHERE subcategory_id = $filter_sub ORDER BY word_name ASC";
                    $res_words = $conn->query($sql_words);
                    if ($res_words && $res_words->num_rows > 0) {
                        $no = 1;
                        while($row = $res_words->fetch_assoc()) {
                            // Perbaikan penanganan NULL menggunakan ?? ''
                            $safe_row = array_map(fn($v) => $v ?? '', $row);
                            $data_json = htmlspecialchars(json_encode($safe_row), ENT_QUOTES, 'UTF-8');
                            echo '<tr>';
                            echo '  <td>'.$no++.'</td>';
                            echo '  <td><strong>'.htmlspecialchars($safe_row['word_name']).'</strong></td>';
                            echo '  <td>'.htmlspecialchars($safe_row['ipa']).'</td>';
                            echo '  <td>'.htmlspecialchars($safe_row['translation']).'</td>';
                            echo '  <td style="font-size:13px;">'.htmlspecialchars($safe_row['note']).'</td>';
                            echo '  <td>';
                            echo '      <button class="btn-small btn-edit" onclick=\'openModal("edit", '.$data_json.')\'>Edit</button>';
                            echo '      <form method="POST" style="display:inline;" onsubmit="return confirm(\'Hapus?\')">';
                            echo '          <input type="hidden" name="action" value="delete"><input type="hidden" name="word_id" value="'.$row['word_id'].'">';
                            echo '          <button type="submit" class="btn-small btn-delete">Hapus</button>';
                            echo '      </form>';
                            echo '  </td></tr>';
                        }
                    } else { echo '<tr><td colspan="6" align="center">Belum ada data.</td></tr>'; }
                } else { echo '<tr><td colspan="6" align="center" style="padding:40px;">Pilih filter untuk menampilkan data.</td></tr>'; }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!-- MODAL -->
<div class="modal-overlay" id="wordModal">
    <div class="modal-content">
        <h3 id="modalTitle">Tambah Kata</h3><hr><br>
        <form method="POST" action="index.php?hal=words_edit&filter_cat=<?= $filter_cat ?>&filter_sub=<?= $filter_sub ?>">
            <input type="hidden" name="action" id="modalAction" value="add">
            <input type="hidden" name="word_id" id="modalWordId">
            <div style="display:flex; gap:10px;">
                <div style="flex:1;"><label class="form-label">Kategori</label>
                    <select id="modal_cat" class="form-control" onchange="updateModalSubcat()">
                        <?php foreach($kategori_data as $cat): ?><option value="<?= $cat['category_id'] ?>"><?= htmlspecialchars($cat['category_name']) ?></option><?php endforeach; ?>
                    </select>
                </div>
                <div style="flex:1;"><label class="form-label">Subkategori</label><select name="modal_subcategory_id" id="modal_sub" class="form-control" required></select></div>
            </div><br>
            <div style="display:flex; gap:10px;">
                <div style="flex:1;"><label class="form-label">Kata Inggris</label><input type="text" name="word_name" id="modalWordName" class="form-control" required></div>
                <div style="flex:1;"><label class="form-label">IPA</label><input type="text" name="ipa" id="modalIpa" class="form-control"></div>
            </div><br>
            <label class="form-label">Terjemahan</label><textarea name="translation" id="modalTrans" class="form-control" required rows="2"></textarea><br>
            <label class="form-label">Catatan</label><textarea name="note" id="modalNote" class="form-control" rows="2"></textarea><br>
            <button type="submit" class="btn-main" style="width:100%;">Simpan</button>
            <button type="button" onclick="closeModal()" style="width:100%; margin-top:10px; background:#e2e8f0; color:#475569; border:none; padding:10px; border-radius:8px; cursor:pointer;">Batal</button>
        </form>
    </div>
</div>

<script>
    const subkategoriData = <?= json_encode($subkategori_data) ?>;
    function updateFilterSubcat(sel = null) {
        const catId = document.getElementById('filter_cat').value;
        const sub = document.getElementById('filter_sub');
        sub.innerHTML = '<option value="">-- Pilih --</option>';
        if (catId && subkategoriData[catId]) {
            subkategoriData[catId].forEach(s => {
                let opt = new Option(s.subcategory_name, s.subcategory_id);
                if(sel == s.subcategory_id) opt.selected = true;
                sub.add(opt);
            });
        }
    }
    function updateModalSubcat(sel = null) {
        const catId = document.getElementById('modal_cat').value;
        const sub = document.getElementById('modal_sub');
        sub.innerHTML = '';
        if (catId && subkategoriData[catId]) {
            subkategoriData[catId].forEach(s => {
                let opt = new Option(s.subcategory_name, s.subcategory_id);
                if(sel == s.subcategory_id) opt.selected = true;
                sub.add(opt);
            });
        }
    }
    window.onload = () => { if(<?= $filter_cat ?> > 0) updateFilterSubcat(<?= $filter_sub ?>); };
    function openModal(mode, data = null) {
        document.getElementById('modalAction').value = mode;
        if(mode === 'add') {
            document.getElementById('modalTitle').innerText = 'Tambah Kata';
            ['modalWordId','modalWordName','modalIpa','modalTrans','modalNote'].forEach(id => document.getElementById(id).value = '');
            document.getElementById('modal_cat').value = '<?= $filter_cat ?>';
            updateModalSubcat('<?= $filter_sub ?>');
        } else {
            document.getElementById('modalTitle').innerText = 'Edit Kata';
            document.getElementById('modalWordId').value = data.word_id;
            document.getElementById('modalWordName').value = data.word_name;
            document.getElementById('modalIpa').value = data.ipa;
            document.getElementById('modalTrans').value = data.translation;
            document.getElementById('modalNote').value = data.note;
            for (let catId in subkategoriData) {
                if (subkategoriData[catId].some(s => s.subcategory_id == data.subcategory_id)) {
                    document.getElementById('modal_cat').value = catId;
                    updateModalSubcat(data.subcategory_id);
                    break;
                }
            }
        }
        document.getElementById('wordModal').classList.add('active');
    }
    function closeModal() { document.getElementById('wordModal').classList.remove('active'); }
</script>