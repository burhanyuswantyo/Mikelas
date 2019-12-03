<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getMenu($id)
    {
        $query = "SELECT *
                FROM `user_menu`
                WHERE `id` = $id
        ";
        return $this->db->query($query)->row_array();
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getIdSubMenu($id)
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu`.`id` = $id
        ";
        return $this->db->query($query)->row_array();
    }

    public function tambahSubMenu()
    {
        $data = [
            'menu_id' => $this->input->post('menu_id', true),
            'sub_menu' => $this->input->post('sub_menu', true),
            'url' => $this->input->post('url', true),
            'icon' => $this->input->post('icon', true),
            'is_active' => $this->input->post('is_active', true)
        ];

        $this->db->insert('user_sub_menu', $data);
    }

    public function hapusMenu($id)
    {
        $this->db->delete('user_menu', array('id' => $id));
    }

    public function hapusSubMenu($id)
    {
        $this->db->delete('user_sub_menu', array('id' => $id));
    }
}
