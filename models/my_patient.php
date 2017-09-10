<?php 

include './core/patient.php';

// Extended Patient Model
class my_patient extends patient
{
	public function __construct()
    {
        parent::__construct();
    }

    public function list_by_age($age)
    {
        $result_array = array();
        $result = $this->db->query('select * from patients where patient_age >= 50');
        return parent::result_array($result);
    }

    public function list_by_age_grouped()
    {
        $result_array = array();
        $result = $this->db->query('select * from patients where patient_age >= 50 group by patient_age');
        return parent::result_array($result);
    }



}