<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiscountModel;

class DiscountController extends BaseController
{
    protected $discountModel;

    public function __construct()
    {
        helper(['form']);

        if (session()->get('role') != 'admin') {
            exit('Akses ditolak');
            // atau:
            // return redirect()->to('/');
        }

        $this->discountModel = new DiscountModel();
    }

    public function index()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('/');
        }

        $data['discounts'] = $this->discountModel->findAll();

        return view('discount/index', $data);
    }

    public function create()
    {
        $rules = [
            'tanggal' => 'required|is_unique[discount.tanggal]',
            'nominal' => 'required'
        ];

        if (!$this->validate($rules)) {

            return redirect()->back()
                ->withInput()
                ->with('failed', $this->validator->getError('tanggal'));
        }

        $this->discountModel->insert([
            'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal')
        ]);

        return redirect()->to('diskon')
            ->with('success', 'Data berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $this->discountModel->update($id,[

            'nominal'=>$this->request->getPost('nominal')

        ]);

        return redirect('diskon')

        ->with(

            'success',

            'Data berhasil diubah'

        );
    }

    public function delete($id)
    {
        $this->discountModel->delete($id);

        return redirect('diskon')

        ->with(

            'success',

            'Data berhasil dihapus'

        );
    }
}