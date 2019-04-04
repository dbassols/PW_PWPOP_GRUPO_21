<?php

namespace SallePW\Controller;

use SallePW\View\Renderer;
use SallePW\View\RenderException;
use SallePW\src\Model\Services;

    require_once("../Model/Services/PostTaskService.php");
    $services = new Service();
    $datos = $services->getServicios();
    require_once("../view/templates/post_task.php");
    
class PostTaskController
{
    /**
     * @var Renderer
     */
    private $renderer;

    /**
     * PostController constructor.
     * @param Renderer $renderer
     */


    
    
       public function __construct(Renderer $renderer)
    {
         $this->renderer = $renderer;
    }

    public function indexAction()
    {
        try {
            echo $this->renderer->render('post_task');
            http_response_code(200);
        } catch (RenderException $e) {
            echo "An unexpected error has occurred, please try it again later.";
            http_response_code(500);
        }
    }
    private $ex;
    public function exercis(Renderer $renderer){
        
        $this->renderer->render('post_task', ['name' => 'David', 'age' => 25]);
        echo $name;
        echo $age;
        
    }
    public function exact(){
        
        if(name.lenght > 20){
            echo " nom massa llarg";
        }
        else if (name.lenght < 1){
            echo "cal escriure un nom";
        }
               else{
        try {
            echo $this->exercisi->ex('ex_task');
            http_response_code(200);
        } catch (RenderException $e) {
            echo "An unexpected error has occurred to exercise, please try it again later.";
            http_response_code(500);
        } 
        }
        
    }



}
