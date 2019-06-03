<?php

  class Scan_model extends Ci_Model{

    function cek_id($id_karyawan){
        $query_str = "SELECT * FROM karyawan WHERE id_karyawan= ? ";
        $result = $this->db->query($query_str, array($id_karyawan));
          if ($result->num_rows()==1){
              return $result->row(0)->id_karyawan;
            }
            else{
              return false;
            }
    }

    function kar_abs_msk($id_karyawan){
        $query_str = "SELECT * FROM karyawan WHERE id_karyawan= ?";
        $result = $this->db->query($query_str,array($id_karyawan));
          if ($result->num_rows()==1) {
            $tgl=date('Y-m-d');
            $jam_msk=date('H:i:s');
            $id_khd = 1;
            $id_status = 1;
            $data=array(
              'id_karyawan' =>$id_karyawan,
              'tgl' => $tgl,
              'jam_msk' => $jam_msk,
              'id_khd'=> $id_khd,
              'id_status' => $id_status
            );
            $this->db->insert('presensi',$data);
            return $result->row(0)->id_karyawan;
          } else {
            return false;
      }
  }

      function kar_abs_klr($id_karyawan,$tgl){
        $query_str = "SELECT * FROM presensi WHERE id_karyawan= ? AND tgl= ?";
        $result = $this->db->query($query_str,array($id_karyawan,$tgl));
          if ($result->num_rows()==1) {
          $jam_klr=date('H:i:s');
          $id_status = 2;
          $data=array(
            'id_karyawan' =>$id_karyawan,
            'jam_klr' => $jam_klr,
            'id_status' => $id_status,
          );
          $this->db->where('id_karyawan',$id_karyawan);
          $this->db->where('tgl',$tgl);
          $this->db->update('presensi',$data);
          return $result->row(0)->id_karyawan;
            }
          else{
            return false;
          }
      }
  }





 ?>
