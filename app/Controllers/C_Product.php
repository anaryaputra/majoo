<?php

namespace App\Controllers;

use App\Models\M_Product;
use App\Models\M_Category;

class C_Product extends BaseController
{

    protected $product_model;
    protected $category_model;

    public function __construct()
    {
        helper(["url"]);

        $this->product_model = new M_Product();
        $this->category_model = new M_Category();
    }

    public function createProduct()
    {
        $valid = $this->validate([
            'inputProductName' => 'required',
            'inputProductCategory' => 'required',
            'inputProductDescription' => 'required',
            'inputProductPrice' => 'required',
        ]);

        if ($valid) {
            $productName = $this->request->getVar('inputProductName');
            $product = $this->product_model->where('name', $productName)->first();

            if (empty($product)) {
                $photo = $this->request->getFile('inputProductPhoto');

                if ($photo->isValid()) {
                    $data = [
                        'name' => $this->request->getVar('inputProductName'),
                        'category' => $this->request->getVar('inputProductCategory'),
                        'description' => $this->request->getVar('inputProductDescription'),
                        'price' => $this->request->getVar('inputProductPrice'),
                        'photo' => urlencode($this->request->getVar('inputProductName') . "." . $photo->guessExtension())
                    ];

                    $photo->move('public/images/product/', urlencode($data['name'] . "." . $photo->guessExtension()), true);
                    if ($photo->hasMoved()) {
                        if ($this->product_model->insert($data)) {
                            $response = [
                                'success' => true,
                                'message' => "Produk berhasil dibuat!"
                            ];
                        } else {
                            $response = [
                                'success' => false,
                                'message' => "Gagal membuat produk. Silahkan coba beberapa saat lagi!"
                            ];
                        }
                    } else {
                        $response = [
                            'success' => false,
                            'message' => "Foto produk gagal dipindahkan. Silahkan submit ulang!"
                        ];
                    }
                } else {
                    $response = [
                        'success' => false,
                        'message' => "Foto produk tidak valid. Silahkan submit ulang!"
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => "Nama produk sudah digunakan. Gunakan nama lain."
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

    public function createCategory()
    {
        $valid = $this->validate([
            'inputCategoryName' => 'required'
        ]);

        if ($valid) {
            $categoryName = $this->request->getVar('inputCategoryName');
            $category = $this->category_model->where('category', $categoryName)->first();

            if (empty($category)) {
                $data = [
                    'category' => $categoryName
                ];

                if ($this->category_model->insert($data)) {
                    $response = [
                        'success' => true,
                        'message' => "Kategori produk berhasil dibuat!"
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => "Gagal membuat kategori produk. Silahkan coba beberapa saat lagi!"
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => "Kategori produk sudah digunakan. Gunakan nama lain."
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

    public function updateCategory()
    {
        $valid = $this->validate([
            'inputUpdateCategoryName' => 'required'
        ]);

        if ($valid) {
            $targetId = $this->request->getVar('inputCategoryId');
            $categoryName = $this->request->getVar('inputUpdateCategoryName');
            $category = $this->category_model->where('category', $categoryName)->first();

            if (empty($category)) {
                $data = [
                    'category' => $categoryName
                ];

                if ($this->category_model->update($targetId, $data)) {
                    $response = [
                        'success' => true,
                        'message' => "Kategori produk berhasil diperbarui!"
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => "Gagal memperbarui kategori produk. Silahkan coba beberapa saat lagi!"
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => "Kategori produk sudah digunakan. Gunakan nama lain."
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

    public function deleteCategory()
    {
        $targetId = $this->request->getVar('id');
        if ($this->category_model->delete($targetId)) {
            $response = [
                'success' => true,
                'message' => "Kategori produk berhasil dihapus!"
            ];
        } else {
            $response = [
                'success' => false,
                'message' => "Gagal menghapus kategori produk. Silahkan coba beberapa saat lagi!"
            ];
        }

        return $this->response->setJSON($response);
    }
}
