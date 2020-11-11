<?php


namespace App\Application\School\Query;


interface SchoolQuery
{
    public function showAll(int $perPage, int $page): iterable;

    public  function show(int $id);
}