<?php

namespace Router;

class RouterHandler{
    protected $method;
    protected $data;

    public function set_method($method){
        $this->method = $method;
    }

    public function set_data($data){
        $this->data = $data;
    }

    public function route($controller, $pos1){
        $resource = new $controller();

        switch($this->method){
            case "get":
                if($pos1== null){
                    $resource->index();
                }
                else if($pos1 == "id"){
                    $resource->show($this->data['id']);
                }
                else if($pos1== "create"){
                    $resource->create();
                }
                else if($pos1== "edit"){
                    $resource->edit($this->data['id2']);
                }
            break;
            case "post":
                $resource->store($this->data);
            break;
            case "put":
                $resource->update($this->data, $this->data['id2']);
            break;
            case "delete":
                if($pos1 == "delete"){
                    $resource->destroy($this->data['id3']);
                }
            break;
        }
    }
}

?>