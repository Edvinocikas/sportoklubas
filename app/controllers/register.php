<?php

Class Register extends Controller
{
    public function index()
    {
        $data['page_title'] = "Signup";

        if(isset($_POST['email']))
        {
            $model = $this->loadModel("user");
            $model->signup($_POST);
        }

        $this->view("sportClub/register",$data);
    }

}