<?php

namespace App\Controllers;

use App\Models\M_User;

class C_User extends BaseController
{

    protected $user_model;

    public function __construct()
    {
        helper(["url"]);

        $this->user_model = new M_user();
    }

    public function validateRegistration()
    {
        $valid = $this->validate([
            'inputSignupEmail' => 'required|valid_email',
            'inputSignupPassword' => 'required|min_length[8]'
        ]);

        if ($valid) {
            $data = [
                'email' => $this->request->getVar('inputSignupEmail'),
                'password' => password_hash($this->request->getVar('inputSignupPassword'), PASSWORD_DEFAULT)
            ];

            if ($this->user_model->insert($data)) {
                $response = [
                    'success' => true,
                    "message" => "Akun berhasil dibuat. Mengarahkan ke dashboard!"
                ];
                $this->session->set($data);
            } else {
                $response = [
                    'success' => false,
                    "message" => "Pembuatan akun gagal. Silahkan coba beberapa saat lagi!"
                ];
            }
        } else {
            $response = [
                'success' => false,
                "message" => "Validasi gagal. Silahkan coba beberapa saat lagi!"
            ];
        }

        return $this->response->setJSON($response);
    }

    public function validateLogin()
    {
        $valid = $this->validate([
            'inputLoginEmail' => 'required|valid_email',
            'inputLoginPassword' => 'required'
        ]);

        if ($valid) {
            $email = $this->request->getVar('inputLoginEmail');

            $account = $this->user_model->where('email', $email)->first();

            if (!empty($account)) {
                if (password_verify($this->request->getVar('inputLoginPassword'), $account['password'])) {
                    $response = [
                        'success' => true,
                        'message' => "Log in berhasil. Mengarahkan ke dashboard!"
                    ];
                    $this->session->set($account);
                } else {
                    $response = [
                        'success' => false,
                        'message' => "Log in gagal. Password salah."
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => "Akun tidak terdaftar. Silahkan buat akun terlebih dahulu."
                ];
            }
        } else {
            $response = [
                'success' => false,
                "message" => "Validasi gagal. Silahkan coba beberapa saat lagi!"
            ];
        }

        return $this->response->setJSON($response);
    }

    public function logout()
    {
        if ($this->session->has('email')) {
            $this->session->destroy();
            return redirect()->route('login');
        } else {
            return redirect()->to(current_url());
        }
    }
}
