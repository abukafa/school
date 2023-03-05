<?php

namespace App\Controllers;

use App\Models\BlogModel;

class AdminBlog extends BaseController
{
    public function index()
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->findAll();
        $data = [
            'title' => 'Blog',
            'blog' => $blog
        ];
        return view('admin/blog', $data);
    }

    public function detail($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);
        $data = [
            'title' => 'Blog',
            'blog' => $blog
        ];
        return view('admin/blog_detail', $data);
    }

    public function save($id)
    {
        $image = '';
        if ($pic = $this->request->getFile('image')) {
            $newName = $pic->getRandomName();
            uploadFile($this->request->getFile('image'), FCPATH . '/img/galeri', $newName);
            $image = $newName;
        }
        $blogModel = new BlogModel();
        if ($id == 0) {
            $blogModel->insert([
                'kategori' => $this->request->getPost('kategori'),
                'idm' => $this->request->getPost('idm'),
                'autor' => $this->request->getPost('autor'),
                'judul' => $this->request->getPost('judul'),
                'image' => $image,
                'excerpt' => substr(strip_tags($this->request->getPost('body')), 0, 200),
                'body' => $this->request->getPost('body'),
                'created' => date('Y-m-d h:m:s'),
                'publish' => false
            ]);
            flash('Berhasil', 'Menambah Postingan baru..');
            return redirect()->to('/data/blog');
        } else {
            $blog = $blogModel->find($id);
            if ($blog['image'] <> '') {
                $old_file = FCPATH . '/img/galeri/' . $blog['image'];
                if (file_exists($old_file)) {
                    unlink($old_file);
                };
            }

            $blogModel->update($id, [
                'kategori' => $this->request->getPost('kategori'),
                'idm' => $this->request->getPost('idm'),
                'autor' => $this->request->getPost('autor'),
                'judul' => $this->request->getPost('judul'),
                'image' => $image ?: $blog['image'],
                'excerpt' => substr(strip_tags($this->request->getPost('body')), 0, 200),
                'body' => $this->request->getPost('body'),
            ]);
            flash('Berhasil', 'Mengubah Postingan..');
            return redirect()->to('/data/blog/' . $id);
        }
    }

    public function publish($id)
    {
        $blogModel = new BlogModel();
        $blogModel->update($id, ['publish' => true]);
        flash('Berhasil', 'Postingan telah dipublish');
        return redirect()->to('/data/blog');
    }

    public function saveToGaleri($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);
        $data = ($blog['galeri'] == true) ? ['galeri' => false] : ['galeri' => true];
        $blogModel->update($id, $data);
        return 'OK';
    }

    public function delete($id)
    {
        $blogModel = new BlogModel();
        $blogModel->delete($id);
        flash('Berhasil', 'Menghapus Posting', 'warning');
        return redirect()->to('/data/blog');
    }
}
