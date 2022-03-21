<?php 

class Home extends Controller{

    public function index()
    {   
       $data['profile'] = $this->model('PortofolioModel')->getProfile();
       $data['about'] = $this->model('PortofolioModel')->getAbout();

       $this->view('user/index',$data);
    }

}