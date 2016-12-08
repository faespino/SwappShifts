<?php
class Shifts_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    // public function get_shifts_by_id($id = 0)
    // {
    //    if ($id === 0)
    //     {
    //         $query = $this->db->get('L_All_Shifts');
    //         return $query->result_array();
    //     }
 
    //     $query = $this->db->get_where('L_All_Shifts', array('All_Shift_ID' => $id));
    //     return $query->row_array();
    // }


 public function get_have_shifts_by_uid($uid)
    {
       /*if ($uid === 0)
        {
            $query = $this->db->get('L_All_Shifts');
            return $query->result_array();
        }*/ 
 
        $query = $this->db->get_where('User_Have_Shifts', array('UserID' => $uid));
        return $query->result_array();
    }

 public function get_l_shifts_by_id($id)
    {
       if ($id === 0)
        {
            $query = $this->db->get('L_All_Shifts');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('L_All_Shifts', array('All_Shift_ID' => $id));
        return $query->result_array();
    }


public function set_news($id = 0)
    {
        $this->load->helper('url');
 
 
        $data = array(
            'Shift_Start' => $this->input->post('Shift_Start'),
            'Shift_End' => $this->input->post('Shift_End')
        );
        
        if ($id == 0) {
            return $this->db->insert('L_All_Shifts', $data);
        } else {
            $this->db->where('All_Shift_ID', $id);
            return $this->db->update('L_All_Shifts', $data);
        }
    }



}