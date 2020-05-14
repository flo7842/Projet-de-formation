<?php
namespace F\Controller;

use F\Core\Controller;

class FormController extends Controller{




    /**
     * @var array Données utilisées par le formulaire
     */
    //protected $date;


    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';


    /**
     * Form constructor.
     * @param array $data
     */
    public function __construct(/*$data = array()*/){

        //$this->data = $data;

    }


    /**
     * @param $html
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }


    /**
     * @param $index
     * @return mixed|null
     */
    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    protected function getId($id){
        return $this->id = $id;
    }

    protected function getClass($class){
        return $this->class = $class;
    }

    protected function getType($type){
        return $this->type = $type;
    }


    /**
     * @param $type
     * @return string
     */

    /**
     * @param $id
     * @return string
     */

    /**
     * @param $class
     * @return string
     */

    /**
     * @param $name
     * @return string
     */

    /**
     * @param $placeholder
     * @return string
     */

    public function input($type, $id, $class = null, $name, $placeholder = null){
        if(is_null($class) && is_null($placeholder)) {
            return $this->surround(
                '<input type="' . $this->getType($type) . '" id="'. $id. '" name="' . $name . '" required>'
            );
        }else if(is_null($class)) {
            return $this->surround(
                '<input type="' . $this->getType($type) . '" id="'.$id. '" name="' . $name . '" placeholder="' . $placeholder . '" required>'
            );
        }else if(is_null($placeholder)){
            return $this->surround(
                '<input type="' . $this->getType($type) . '" id="'.$id. '" name="' . $name . '" required>'
            );
        }else{
            return $this->surround(
                '<input type="' . $this->getType($type) .'" id="'.$id. '" class="' . $this->getClass($class) . '" name="' . $name . '" placeholder="' . $placeholder . '" required>'
            );
        }
    }

    /**
     * @return string
     */
    public function submit($name){

        return $this->surround('<button type="submit" name="'.$name.'">Envoyez</button>');
    }

}