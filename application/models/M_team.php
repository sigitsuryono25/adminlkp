<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_team
 *
 * @author Sigit Suryono
 */
class M_team extends CI_Model {

    //put your code here
    function daftarTeamBy($idTeam) {
        $query = "SELECT * FROM team INNER JOIN posisi ON team.posisi=posisi.id_posisi WHERE team.id='$idTeam'";
        return $this->db->query($query)->row();
    }

    function daftarTeam() {
        $query = "SELECT * FROM team INNER JOIN posisi ON team.posisi=posisi.id_posisi ORDER BY team.id ASC";
        return $this->db->query($query)->result();
    }

    function insertTeam($objectData) {
        $this->db->insert('team', $objectData);
        return $this->db->affected_rows();
    }

    function editTeam($object, $condition) {
        $this->db->where($condition);
        $this->db->update('team', $object);

        return $this->db->affected_rows();
    }

    function hapusTeam($condition) {
        $this->db->where($condition);
        $this->db->delete('team');

        return $this->db->affected_rows();
    }

}
