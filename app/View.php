<?php

namespace App;

class View
{
    private $view_path = BASE_DIR . '/public/views/';
    private $data = [];
    private $render = false;

    public function __construct($template)
    {
        try {
            $file = $this->view_path . strtolower($template) . '.php';

            if (file_exists($file)) {
                $this->render = $file;
            } else {
                throw new \Exception('File '.$this->view_path.$template.'.php does not exist');
            }
        }
        catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }

    public function __destruct()
    {
        extract($this->data);
        include $this->render;
    }
}

