<?php
    class Registration extends CI_Controller {
        public function __construct() {
            parent:: __construct();
            $this->load->database();
            $this->load->view('navbars');
            $this->load->model('Reg_Model');
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function home() {
            $this->load->view('header');
            $this->load->view('registration_form');

            if ($this->input->post('save')) {
                echo "save";
                $full_name=$this->input->post('full_name');
                $email=$this->input->post('email');
                $phcode=$this->input->post('phcode');
                $mobile=$this->input->post('mobile');
                $job_type=$this->input->post('job_type');
                $password=$this->input->post('password');
                $conpassword=$this->input->post('con_password');

                if ($password == $conpassword) {
                    $_SESSION["userId"] = $email;

                    $this->Reg_Model->save_account($full_name, $email, $phcode, $mobile, $job_type, $password);
                    redirect('http://localhost/codeIgnitor/index.php/registration/regsuccess');
                }
                else {
                    redirect('http://localhost/codeIgnitor/index.php/registration/regfail');
                }
            }
            $this->load->view('footer');
        }

        public function regsuccess() {
        	$this->load->view('reg_success');
            $this->load->view('footer');
        }

        public function regfail() {
            $this->load->view('reg_fail');
            $this->load->view('footer');
        }

        public function tryagain() {
            redirect('http://localhost/codeIgnitor/index.php/registration/home');
        }

        public function login() {
            $this->load->view('login_form');
            $this->load->view('footer');

            if ($this->input->post('login')) {
                $email=$this->input->post('email');
                $password=$this->input->post('password');

                $result['data'] = $this->Reg_Model->check_account($email, $password);

                if ($result['data']) {
                	session_start();
                	$_SESSION["userId"] = $email;
                	redirect('http://localhost/codeIgnitor/index.php/registration/viewprofile');
                }
                else {
                	redirect('http://localhost/codeIgnitor/index.php/registration/loginfail');
                }
            }
        }

        public function loginfail() {
            $this->load->view('log_fail');
            $this->load->view('footer');
        }

        public function viewprofile() {
            $result1['data']=$this->Reg_Model->get_profile($_SESSION["userId"]);
            $this->load->view('view_profile', $result1);
            $this->load->view('footer');
        }

        public function displaydata() {
            $result['data']=$this->Reg_Model->display_accounts(); //get the results as an array

            $this->load->view('display_accounts', $result);
            $this->load->view('footer');
        }

        public function deletedata() {
            $id=$this->input->get('account_id');
            //since fetching the variable from the url itself, using get is important

            $this->Reg_Model->delete_account($id);
            redirect('http://localhost/codeIgnitor/index.php/registration/deletesuccess');
        }

        public function deletesuccess() {
        	$this->load->view('del_success');
            $this->load->view('footer');
        }

        public function deleteok() {
        	redirect('http://localhost/codeIgnitor/index.php/registration/home');
        }

        public function updatedata() {
            $id=$this->input->get('account_id');
            $result['data']=$this->Reg_Model->displayuserbyid($id);
            $this->load->view('update_account', $result);
            $this->load->view('footer');

            if ($this->input->post('update')) {
                $id=$this->input->get('account_id');
                $name=$this->input->post('full_name');
                $email=$this->input->post('email');
                $phcode=$this->input->post('phcode');
                $mobile=$this->input->post('mobile');
                $jobType=$this->input->post('job_type');
                $pwd=$this->input->post('password');
                $conpwd=$this->input->post('con_password');

                if ($pwd == $conpwd) {
                    $_SESSION["userId"] = $email;
                    $this->Reg_Model->update_account($id, $name, $email, $phcode, $mobile, $jobType, $pwd);
                    redirect('http://localhost/codeIgnitor/index.php/registration/updatesuccess');
                }
                else {
                    redirect('http://localhost/codeIgnitor/index.php/registration/updatefail');
                }
            }
        }

        public function updatesuccess() {
        	$this->load->view('up_success');
            $this->load->view('footer');
        }

        public function updateok() {
        	redirect('http://localhost/codeIgnitor/index.php/registration/viewprofile');
        }

        public function updatefail() {
        	$this->load->view('up_fail');
            $this->load->view('footer');
        }

        public function getreport() {
        	$this->load->view('get_report');

        	if ($this->input->post('displayreport')) {
        		$job=$this->input->post('job_type');
        		$result['data'] = $this->Reg_Model->get_report($job);
        		
        		$this->load->view('display_report', $result);
        	}
        }

        public function reportok() {
        	redirect('http://localhost/codeIgnitor/index.php/registration/viewprofile');
        }

        public function about() {
            $this->load->view('about');
            $this->load->view('footer');
        }
    }
?>