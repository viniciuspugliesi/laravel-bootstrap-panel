<?php

namespace App\Models\Entities;

/**
 * @property integer $id
 */
interface Entity
{
    public function getTable();

    public function toArray();
}
