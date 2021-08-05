<?php
    class Reg_Model extends CI_Model {
        public function save_account ($full_name, $email, $phcode, $mobile, $job_type, $password) {
            $query="insert into accounts values('', '$full_name', '$email', '$phcode', '$mobile', '$job_type', '$password')";
            $this->db->query($query);
           //return $query->id($account_id);
        }

        public function display_accounts() {
            $query=$this->db->query('select * from accounts');
            return $query->result();
        }

        public function delete_account($id) {
            //passing $id here because once the delete button is pressed
            //that particular id is taking from in display_accounts.php file and then
            //passing it to the controller function and from there the variable id is passing to the model
            $this->db->query("delete from accounts where account_id='".$id."'");
        }

        public function displayuserbyid($id) {
            $query=$this->db->query("select * from accounts where account_id='".$id."'");
            return $query->result();
        }

        public function update_account($id, $name, $email, $phcode, $mobile, $job_type, $password) {
            $query=$this->db->query("update accounts SET full_name='$name', email='$email', phcode ='$phcode', mobile='$mobile', job_type='$job_type', password='$password' where account_id='".$id."'");
        }

        public function check_account($email, $password) {
            $query=$this->db->query("select * from accounts where email = '".$email."' and password = '".$password."' ");
            return $query->result();
        }

        public function get_profile($email) {
            $query=$this->db->query("select * from accounts where email = '".$email."' ");
            return $query->result();
        }

        public function search_profile($id) {
            $query=$this->db->query("select * from accounts where account_id = '".$id."' ");
            return $query->result();
        }

        public function get_report($job_type) {
            $query=$this->db->query("select full_name, email from accounts where job_type = '".$job_type."' ");
            return $query->result();
        }
    }
?>