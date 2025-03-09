<?php
class About extends Controller
{
    public function index($nama = 'Fazdagam', $pekerjaan = 'Programmer', $umur = 17)
    {
        // echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan dan umur saya adalah $umur tahun";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        // echo 'About/page';
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('About/page');
        $this->view('templates/footer');
    }
}
