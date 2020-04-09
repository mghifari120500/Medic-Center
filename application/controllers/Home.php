<?php
/**
 * Author: Firoz Ahmad Likhon <likh.deshi@gmail.com>
 * Website: https://github.com/firoz-ahmad-likhon
 *
 * Copyright (c) 2018 Firoz Ahmad Likhon
 * Released under the MIT license
 *       ___            ___  ___    __    ___      ___  ___________  ___      ___
 *      /  /           /  / /  /  _/ /   /  /     /  / / _______  / /   \    /  /
 *     /  /           /  / /  /_ / /    /  /_____/  / / /      / / /     \  /  /
 *    /  /           /  / /   __|      /   _____   / / /      / / /  / \  \/  /
 *   /  /_ _ _ _ _  /  / /  /   \ \   /  /     /  / / /______/ / /  /   \    /
 *  /____________/ /__/ /__/     \_\ /__/     /__/ /__________/ /__/     /__/
 * Likhon the hackman, who claims himself as a hacker but really he isn't.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles Dashboard.
    |
    */
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('Obat');
        $this->load->model('Showcase');
        $this->auth->route_access();
    }

    /**
     * Display a Dashboard.
     *
     * @return mixed
     */
    public function index() {
        $medicineData = $this->Obat->getData();
        $showcaseData = $this->Showcase->getData();

        $headerData = array(
            "title" => "Medic-Store | Home"
        );
        $viewData = array(
            "headerData" => $headerData,
            "viewData" => array(
                "showcase" => $showcaseData,
                "medicine" => $medicineData
            )
        );

        // var_dump($viewData);
        return $this->load->view('home', $viewData);
    }
}