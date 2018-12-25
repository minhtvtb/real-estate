<?php

namespace App\Presenters;

use App\Transformers\SetupInfoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SetupInfoPresenter.
 *
 * @package namespace App\Presenters;
 */
class SetupInfoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SetupInfoTransformer();
    }
}
