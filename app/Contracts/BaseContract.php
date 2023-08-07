<?php

namespace App\Contracts;


interface BaseContract {
    public function all();
    public function getById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function getMaxPosition();

    public function getOrderByPosition();

    public function fetchLatestData();

    public function latestDataUpdate(array $data);


    // Add other specific methods here as needed
}
