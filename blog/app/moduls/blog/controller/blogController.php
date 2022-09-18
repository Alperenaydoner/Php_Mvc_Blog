<?php
session_start();
class blogController extends mainController
{
    public function index()
    {
        $data = [];
            $_SESSION['user']="user"; 
        $this->callVİew("blog", "login", $data);
    }
    public function anasayfa()
    {
        $data = [];
        $anasayfaModel = new blogModel();
        $data['icerik'] = $anasayfaModel->anasayfa();
        $this->callVİew("blog", "blog", $data);
    }
    public function indir()
    {
        header("Content-Type:application/vnd.ms-excel");
        header("Content-disposition:attachment;filename=Konu.xls");
        $data = [];
        $anasayfaModel = new blogModel();
        $data['icerik'] = $anasayfaModel->anasayfa();
        echo "Konu" . "\t" . "İcerik" . "\n";
        foreach ($data['icerik'] as $key => $value) {
            echo $value['konu'] . "<\t>" . $value['metin'] . "<\n>";
        }
    }
    public function konuekle()
    {
        $data = [];
        $this->callVİew("blog", "konuekle", $data);
    }
    public function giris()
    {
        $data = [];
        $girissayfaModel = new blogModel();

        if (isset($_POST['giris'])) {
            $data['bilgiler'] = $girissayfaModel->giris();
            if ($data['bilgiler']) {
                $_SESSION['mail'] = $_POST['mail'];
                $this->anasayfa();
            }
        } elseif (isset($_POST['ekle'])) {
            try {
                $data['bilgiler'] = $girissayfaModel->kaydol();

                $_SESSION['mail'] = $_POST['mail'];
                $this->anasayfa();
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
    public function kekle()
    {
        $data = [];
        $girissayfaModel = new blogModel();
        $data['bilgiler'] = $girissayfaModel->konuekle();
        $this->anasayfa();
    }
}
