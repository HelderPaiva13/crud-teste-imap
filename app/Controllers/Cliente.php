<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Cliente extends Controller
{
    public function index()
    {
        $clienteModel = new ClienteModel();
        $data['clientes'] = $clienteModel->orderBy('id', 'DESC')->findAll();
        return view('cliente_view', $data);
    }
    //formulario
    public function create()
    {
        return view('add_cliente');
    }

    //iserir no banco
    public function store()
    {
        $clienteModel = new ClienteModel();

        $data = [
            'nome' => $this->request->getVar('nome'),
            'endereco' => $this->request->getVar('endereco'),
            'idade' => $this->request->getVar('idade'),
            'telefone' => $this->request->getVar('telefone'),
            'cpf' => $this->request->getVar('cpf'),
            'email' => $this->request->getVar('email'),
        ];

        $clienteModel->insert($data);
        return $this->response->redirect(site_url('/cliente-list'));
    }

    // unico cliente
    public function unicoCliente($id = null)
    {
        $clienteModel = new ClienteModel();
        $data['cliente_obj'] = $clienteModel->where('id', $id)->first();

        return view('edit_cliente', $data);
    }

    //update cliente data
    public function update()
    {
        $clienteModel = new ClienteModel();
        $id = $this->request->getVar('id');
        $data = [
            'nome' => $this->request->getVar('nome'),
            'endereco' => $this->request->getVar('endereco'),
            'idade' => $this->request->getVar('idade'),
            'telefone' => $this->request->getVar('telefone'),
            'cpf' => $this->request->getVar('cpf'),
            'email' => $this->request->getVar('email'),
        ];
        $clienteModel->update($id, $data);
        return $this->response->redirect(site_url('/cliente-list'));
    }

    // delete cliente
    public function delete($id = null)
    {
        $clienteModel = new ClienteModel();
        $data['cliente'] = $clienteModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/cliente-list'));
    }
}
