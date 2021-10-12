<?php

namespace Vendor\Interfaces;

use App\Entity\Animal;

interface ManagerInterface
{

    public function create($animal);

    public function getList();

    public function getOne(int $id);

    public function update(int $id, Animal $animal);

    public function delete(int $id);
}