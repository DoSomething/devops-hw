<?php

namespace DevOpsHW\Http\Controllers\Traits;

use DevOpsHW\Models\Task;
use Illuminate\Http\Request;
use DevOpsHW\Http\Requests\TaskRequest;

trait TaskRequests
{
    use FiltersRequests;

    /**
     * Returns Tasks, filtered by params, if provided.
     * GET /tasks
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = $this->newQuery(Task::class)->orderBy('created_at', 'desc');

        $filters = $request->query('filter');
        $query = $this->filter($query, $filters, Task::$indexes);

        return $this->paginatedCollection($query, $request);
    }
}
