<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\SetupInfo;

/**
 * Class SetupInfoTransformer.
 *
 * @package namespace App\Transformers;
 */
class SetupInfoTransformer extends TransformerAbstract
{
    /**
     * Transform the SetupInfo entity.
     *
     * @param \App\Entities\SetupInfo $model
     *
     * @return array
     */
    public function transform(SetupInfo $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
