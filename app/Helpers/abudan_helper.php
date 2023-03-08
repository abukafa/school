<?php

date_default_timezone_set("Asia/Jakarta");

// FUNGSI VIEW UPLOADED PIC =================================================================================================================================
function uploaded($fileName = '', $dir = '', $default = '')
{
    if ($fileName <> '' && $fileName <> NULL && file_exists(FCPATH . $dir . '/' . $fileName)) {
        return base_url($dir . '/' . $fileName);
    } else {
        if ($default == '') {
            return base_url('img/profile/no.png');
        } else {
            return base_url($dir . '/' . $default);
        }
    }
}

// FUNGSI UPLOAD PIC =======================================================================================================================================

function uploadFile($file, $directory, $filename)
{
    $targetDir = $directory . '/';
    $targetFile = $targetDir . $filename;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        return "Sorry, file already exists.";
    }

    // Check file size
    if ($file->getSize() > 5000000) {
        return "Sorry, your file is too large.";
    }

    // Allow certain file formats
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
        return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    if ($file->move($targetDir, $filename)) {
        return "The file " . htmlspecialchars($filename) . " has been uploaded.";
    } else {
        return "Sorry, there was an error uploading your file.";
    }
}


// FUNGSI PESAN FLASH =======================================================================================================================================
function flash($pesan, $ket, $tipe = 'success')
{
    session()->setFlashdata('pesan', $pesan);
    session()->setFlashdata('ket', $ket);
    session()->setFlashdata('tipe', $tipe);
}

function flash_alert()
{
    if (session()->getFlashdata('pesan')) {
        echo
        "<script>
            swal({
                    title: '" . session()->getFlashdata('pesan') . "',
                    text: '" . session()->getFlashdata('ket') . "',
                    type: '" . session()->getFlashdata('tipe')  . "'
                });
        </script>";
    }
}

// HITUNG KELAS =======================================================================================================================================
function kelas($thn)
{
    if (date('m') > 6) {
        $period = date('Y');
    } else {
        $period = date('Y') - 1;
    }
    $kelas = $period - $thn + 7;
    return $kelas;
}

function tahun($kls)
{
    if (date('m') > 6) {
        $period = date('Y');
    } else {
        $period = date('Y') - 1;
    }
    $tahun = $period - $kls + 7;
    return $tahun;
}
