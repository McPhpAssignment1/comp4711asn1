<?php
    defined('BASEPATH') OR exit('No direct script access allowed');


class History extends Application
{
    //constructor
    function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
            $this->data['pagebody'] = 'history';
            $this->data['stocks'] = $this->Stocks->getData("http://www.comp4711bsx.local/data/stocks");

            $stock = $this->Moves->getData("http://www.comp4711bsx.local/data/movement/1");

            $this->data['title'] = "Recent History";
            $this->data['stocktype'] = $this->Moves->getData("http://comp4711bsx.local/data/movement/5");
            //$this->data['stocktype'] = $this->Moves->getDataForName("http://bsx.jlparry.com/data/movement", $stock[0]['code']);
            $this->render();
    }
    
    public function loadStocks($stock)
    {
        $this->data['pagebody'] = 'history';
        $this->data['title'] = $stock . " History";
        $this->data['stocktype'] = $this->Moves->getDataForName("http://www.comp4711bsx.local/data/movement", $stock);
        $this->data['translist'] = $this->Trans->some("Stock", $stock);
        $this->data['stocks'] = $this->Stocks->getData("http://www.comp4711bsx.local/data/stocks");
        $this->data['movelist'] = $this->Moves->all();
        
        $this->render();
    }
}

?>