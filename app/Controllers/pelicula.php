<?php
namespace App\Controllers;
use App\Models\peliculaModel;
class pelicula extends BaseController
{
    public function show($IDcliente)
    {  
        $peliculaModel=new peliculaModel();
       
        return view('rouss/show',[
         'pelicula'=>$peliculaModel->find($IDcliente)
        ]);

        
    }
    public function create()
    {
        $peliculaModel=new peliculaModel();
        $peliculaModel->insert([
            'IDcliente'=>$this->request->getPost('IDcliente'),
            'NombreCliente'=>$this->request->getPost('NombreCliente'),
            'ApellidoCliente'=>$this->request->getPost('ApellidoCliente'),
        ]);
        return 'creado';
    }
   
  public function new()
  {
    return view('rouss/new');
   
  }
  public function edit($IDcliente)
  {
      $peliculaModel=new peliculaModel();   
      return view('rouss/edit',[
          'pelicula'=>$peliculaModel->find($IDcliente)
      ]);
  }
  public function update($IDcliente)
  {
      $peliculaModel=new peliculaModel();
      $peliculaModel->update($IDcliente,[
        'IDcliente'=>$this->request->getPost('IDcliente'),
        'NombreCliente'=>$this->request->getPost('NombreCliente'),
        'ApellidoCliente'=>$this->request->getPost('ApellidoCliente'),
      ]);
     return 'modificado';
  }
  public function delete($IDcliente)
  {
    $peliculaModel=new peliculaModel();
    $peliculaModel->delete($IDcliente);
    return 'delete';

  }
   public function index()
   {
        $peliculaModel=new peliculaModel();
     
        return view('rouss/index',[
            'peliculas'=>$peliculaModel->findAll(),
            
        ]);
    }
    
   
}
