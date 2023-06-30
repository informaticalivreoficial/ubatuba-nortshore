<?php

namespace App\Repositories;

use App\Models\Tenant;

class ConfigRepository
{
    protected $model;

    public function __construct(Tenant $model)
    {
        $this->model = $model;
    }

    public function getConfigById(int $id)
    {
        $config = $this->model->where('id', $id)->first();
        return $config;
    }
}