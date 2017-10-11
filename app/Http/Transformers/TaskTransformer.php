<?php

namespace DevOpsHW\Http\Transformers;

use Carbon\Carbon;
use DevOpsHW\Models\Task;
use League\Fractal\TransformerAbstract;

class TaskTransformer extends TransformerAbstract
{

    /**
     * Transform resource data.
     *
     * @param \DevOpsHW\Models\Task $task
     * @return array
     */
    public function transform(Task $task)
    {

        return [
            'id' => $task->id,
            'name' => $task->name,
            'created_at' => $task->created_at->toIso8601String(),
            'updated_at' => $task->updated_at->toIso8601String(),
        ];
    }

}
