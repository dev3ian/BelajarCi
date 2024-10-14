<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Controllers\BaseController;

class News extends BaseController
{
    public function index()
    {
        $newsModel = new NewsModel();
        $data['news'] = $newsModel->orderBy('created_at', 'DESC')->findAll();

        return view('news_view', $data);
    }

    public function create()
    {
        return view('create_news_view');
    }

    public function store()
    {
        $newsModel = new NewsModel();
        $newsModel->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to('/news');
    }
}
