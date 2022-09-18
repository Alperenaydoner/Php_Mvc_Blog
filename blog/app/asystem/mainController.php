<?php
class mainController{
    public function callVİew($module,$method,$params=[])
    {
      
        return view::frontView($module,$method,$params);
    }
}