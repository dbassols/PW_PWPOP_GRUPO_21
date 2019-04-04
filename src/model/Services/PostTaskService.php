<?php

namespace SallePW\Model\Services;

use SallePW\Model\Task;
use SallePW\Model\TaskRepository;

class PostTaskService
{
    /**
     * @var TaskRepository
     */
    private $repository;
    private $servicio;
    private $db;
       
    /** * SaveTaskService constructor.
     * @param TaskRepository $repository
     */
    public function __construct(TaskRepository $repository)
    {
       
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=web2', "root", "");
        $container['servcie'] = new \SallePW\Model\Services\PostTaskService(
            new \SallePW\Model\MySQLTaskRepository()
            );
        $this->repository = $repository;
    }

    public function execute(Task $task)
    {
        $this->repository->save($task);
    }
}
