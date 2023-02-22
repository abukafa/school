<?php

// FUNGSI UPLOAD FOTO =======================================================================================================================================
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
