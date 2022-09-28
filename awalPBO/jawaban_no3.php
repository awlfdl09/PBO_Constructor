<?php
class absensi_siswa
{
    public $nama_siswa = "Awal";
    public $nama_guru = "bu dian";
    public $keterangan = "hadir";

    public function __construct()
    {
        echo "ini berasal dari construct absensi_siswa ";
    }
    public function keterangan()
    {
        echo "nama siswa $this->nama_siswa dengan nama guru $this->nama_guru keterangan $this->keterangan";
    }
    public function __destruct()
    {
        echo "ini berasal dari destruct absensi_siswa";
    }
}
$keterangan_Awal = new absensi_siswa();
echo "<br/>";
echo $keterangan_Awal->keterangan();
echo "<br/>";
