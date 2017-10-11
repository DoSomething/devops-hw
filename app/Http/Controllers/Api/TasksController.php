<?php

namespace DevOpsHW\Http\Controllers\Api;

use DevOpsHW\Services\TaskService;
use DevOpsHW\Http\Transformers\TaskTransformer;
use DevOpsHW\Http\Controllers\Traits\TaskRequests;

class TasksController extends ApiController
{
    use TaskRequests;

    /**
     * The post service instance.
     *
     * @var \DevOpsHW\Services\TaskService
     */
    protected $tasks;

    /**
     * @var \League\Fractal\TransformerAbstract;
     */
    protected $transformer;

    /**
     * Create a controller instance.
     *
     * @param  PostContract  $tasks
     * @return void
     */
    public function __construct(TaskService $tasks)
    {
        $this->tasks = $tasks;

        $this->transformer = new TaskTransformer;
    }
}
