<?php

namespace App\Filters;

use CodeIgniter\Http\RequestInterface;
use CodeIgniter\Http\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilters implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('logged_in'))
        {
            return redirect()->to('/admin/login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if(session()->get('logged_in'))
        {
            return redirect()->to('/menu/index');
        }
    }
}