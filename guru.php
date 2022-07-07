<?php
    class Guru extends Database{

        // menampilkan data dosen ke index.php
        public function index(){

            $dataguru = mysqli_query($this->koneksi, "select * from guru");

            return $dataguru;
        }

        public function create($nip,$name,$alamat)
        {
            mysqli_query($this->koneksi,
                        "insert into guru values (null,'$nip','$name','$alamat')"
                    );

        }

        // memilih data dosen yang akan diubah
        public function edit($no)
        {
            $dataguru = mysqli_query($this->koneksi, 
                        "select * from guru where no='$no'"
                    );

            return $dataguru;
        }
        // merubah data dosen
        public function update($no, $nip, $name,$alamat)
        {
            mysqli_query(
                $this->koneksi,
            "update guru set nip='$nip', name='$name',alamat='$alamat' where no='$no'"
            );
        }

        // menampilkan data dosen berdasarkan id
        public function show($no)
        {
            $dataguru = mysqli_query($this->koneksi, 
                        "select * from guru where no='$no'"
                    );

            return $dataguru;
        }

        // menghapus data dosen
        public function delete($no)
        {
            mysqli_query($this->koneksi, "delete from guru where no='$no'"
                    );

        }
    }
?>