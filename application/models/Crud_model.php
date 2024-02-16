<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{


    function view($select, $table, $where)
    {
        if ($select) {
            $this->db->select($select);
        }
        if ($where) {
            $this->db->where($where);
        }

        return $this->db->get($table);
    }


    function save($table, $data)
    {
        $this->db->insert($table, $data);

        if ($this->db->affected_rows() == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    public function update($table, $where, $data)
    {
        // WHERE BISA DUA KALI KALOH PAKE ARRAY []
        $this->db->where($where)->update($table, $data);
        if ($this->db->affected_rows() == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    public function delete($table, $where)
    {
        // WHERE BISA DUA KALI KALOH PAKE ARRAY []
        $this->db->delete($table, $where);
        if ($this->db->affected_rows() == 1) {
            return 1;
        } else {
            return 0;
        }
    }
}
