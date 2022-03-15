<?php

namespace App\Repository\ProfileCustomers;

interface ProfilRepositoryInterface{
    public function getById(int $id);
    public function update(array $data);
}
