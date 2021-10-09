<?php 

class About {
    public function index($name='Muhammad Syahrul Amiruddin', $job='Mahasiswa Teknik Informatika (201951030)')
    {
        echo "Halo, nama saya $name, saya adalah seorang $job";
    }
    public function page()
    {
        echo 'About/page';
    }
}
