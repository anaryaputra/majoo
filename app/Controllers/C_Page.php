<?php

namespace App\Controllers;

use App\Models\M_Product;
use App\Models\M_Category;

class C_Page extends BaseController
{
    protected $product_model;
    protected $category_model;

    public function __construct()
    {
        $this->product_model = new M_Product();
        $this->category_model = new M_Category();
    }

    public function displayHome()
    {
        $data['produk'] = $this->product_model->findAll();
        return view('V_Home', $data);
    }

    public function displayLogin()
    {
        if ($this->session->has('email')) {
            return redirect()->route('dashboard');
        } else {
            return view('V_Login');
        }
    }

    public function displayDashboard()
    {
        if ($this->session->has('email')) {
            $data['account'] = [
                'email' => $this->session->get('email')
            ];
            $data['produk'] = $this->product_model->paginate(6, 'produk');
            $data['kategori'] = $this->category_model->paginate(4, 'kategori');
            $data['pager'] = $this->product_model->pager;
            return view('V_Dashboard', $data);
        } else {
            return redirect()->route('login');
        }
    }

    // public function displayPage($pageName)
    // {
    //     if (empty($pageName)) {
    //         return view('V_Home');
    //     } else {
    //         switch ($pageName) {
    //             case "login":
    //                 if ($this->session->has('email')) {
    //                     return redirect()->to(site_url('dashboard'));
    //                 } else {
    //                     return view('V_Login');
    //                 }
    //                 break;
    //             case "dashboard":
    //                 if ($this->session->has('email')) {
    //                     $data['account'] = [
    //                         'email' => $this->session->get('email')
    //                     ];
    //                     $data['produk'] = $this->product_model->paginate(4, 'produk');
    //                     $data['pager'] = $this->product_model->pager;
    //                     return view('V_Dashboard', $data);
    //                 } else {
    //                     return redirect()->to(site_url('login'));
    //                 }
    //                 break;
    //         }
    //     }
    // }

    // public function displayCategorizedDashboard($category)
    // {
    //     $data['produk'] = $this->product_model->
    // }

    // public function index()
    // {
    //     return view('welcome_message');
    // }
}
