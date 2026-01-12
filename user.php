<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="bi bi-plus-lg"></i> Tambah User
    </button>

    <div class="row">
        <div class="table-responsive" id="user_data">
            <!-- Data loaded via AJAX -->
        </div>

        <!-- Awal Modal Tambah-->
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"><li class="nav-item">
                        <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
                    </li>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Tuliskan Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="floatingPassword">Password</label>
                                <input type="password" class="form-control" placeholder="Tuliskan Password" name="password" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Tambah-->
    </div>
</div>

<script>
    $(document).ready(function() {
        load_data();

        function load_data(hlm) {
            $.ajax({
                url: "user_data.php",
                method: "POST",
                data: {
                    hlm: hlm
                },
                success: function(data) {
                    $('#user_data').html(data);
                }
            })
        }

        $(document).on('click', '.halaman', function() {
            var hlm = $(this).attr("id");
            load_data(hlm);
        });
    });
</script>

<?php
include "upload_foto.php";

//jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $foto = '';
    $nama_gambar = $_FILES['foto']['name'];

    //jika ada file yang dikirim  
    if ($nama_gambar != '') {
        $cek_upload = upload_foto($_FILES["foto"]);
        if ($cek_upload['status']) {
            $foto = $cek_upload['message'];
        } else {
            echo "<script>
                alert('" . $cek_upload['message'] . "');
                document.location='admin.php?page=user';
            </script>";
            die;
        }
    }

    if (isset($_POST['id'])) {
        //update
        $id = $_POST['id'];
        if ($nama_gambar == '') {
            $foto = $_POST['foto_lama'];
        } else {
            unlink("img/" . $_POST['foto_lama']);
        }

        // Check if password is being updated
        if (!empty($_POST['password'])) {
            $password = md5($_POST['password']);
            $stmt = $conn->prepare("UPDATE user SET username =?, password =?, foto = ? WHERE id = ?");
            $stmt->bind_param("sssi", $username, $password, $foto, $id);
        } else {
            // Keep old password if field is empty (handled in Edit Modal logic usually, or just don't update it)
            // But here I'm overwriting with new MD5 if provided. 
            // Wait, in the Edit form I should handle "Leave blank to keep current password".
            // Let's assume if the input is empty in Edit, we don't update password.
            // But verify: content of $_POST['password']
            if($_POST['password'] == "") {
                 $stmt = $conn->prepare("UPDATE user SET username =?, foto = ? WHERE id = ?");
                 $stmt->bind_param("ssi", $username, $foto, $id);
            } else {
                 $stmt = $conn->prepare("UPDATE user SET username =?, password =?, foto = ? WHERE id = ?");
                 $stmt->bind_param("sssi", $username, $password, $foto, $id);
            }
        }
        
        $simpan = $stmt->execute();
    } else {
        //insert
        $stmt = $conn->prepare("INSERT INTO user (username,password,foto) VALUES (?,?,?)");
        $stmt->bind_param("sss", $username, $password, $foto);
        $simpan = $stmt->execute();
    }

    if ($simpan) {
        echo "<script>
            alert('Simpan data sukses');
            document.location='admin.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Simpan data gagal');
            document.location='admin.php?page=user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $foto = $_POST['foto'];

    if ($foto != '') {
        unlink("img/" . $foto);
    }

    $stmt = $conn->prepare("DELETE FROM user WHERE id =?");
    $stmt->bind_param("i", $id);
    $hapus = $stmt->execute();

    if ($hapus) {
        echo "<script>
            alert('Hapus data sukses');
            document.location='admin.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Hapus data gagal');
            document.location='admin.php?page=user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
