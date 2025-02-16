<?php

namespace App\Services;

class CustomLogDbService implements CustomLogServiceInterface {

    protected $queryBuilder;

    /**
     * Class constructor.
     */
    public function __construct($queryBuilder) {
        $this->queryBuilder = $queryBuilder;
    }

    public function rotateLogs() {

        $this->queryBuilder->where('id', '<=', 1000)->delete();

    }
    
}

    