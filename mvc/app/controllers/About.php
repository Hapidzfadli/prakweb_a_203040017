<?php

class About
{
    public function index($nama = 'Hapid Fadli', $pekerjaan = 'Hacker')
    {
        echo "Halo cuy, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
