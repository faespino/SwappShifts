<?php
class Shifts_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_shifts_by_id($id = 0)
    {
       if ($id === 0)
        {
            $query = $this->db->get('L_All_Shifts');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('L_All_Shifts', array('All_Shift_ID' => $id));
        return $query->row_array();
    }
}