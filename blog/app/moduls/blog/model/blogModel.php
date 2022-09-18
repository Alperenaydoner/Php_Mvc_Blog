<?php
class blogModel extends mainModel{
    public function anasayfa()
    {
        $veri=$this->db->read("icerik");
        return $veri->fetchAll(PDO::FETCH_ASSOC);
    }
    public function giris()
    {
        $veri=$this->db->towread("proje");
         if($veri->fetch(PDO::FETCH_ASSOC))
        {
            return $veri;
        }else{
            echo "Veriler Hatalı";
        }
    }
    public function kaydol()
    {
        $veri=$this->db->wread("proje","eposta",$_POST['mail']);
         if($veri->fetch(PDO::FETCH_ASSOC))
        {
            echo "Kayıtlı kullanıcı var";
        }else{
           $veri=$this->db->kisiekle();
            
        }
        
    }
    public function konuekle()
    {
        $veri=$this->db->konuekle();
        
    }
}