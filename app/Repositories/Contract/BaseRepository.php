<?php


namespace App\Repositories\Contract;


use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    protected $model;

    public function find(int $id)
    {
        return $this->model::find($id);
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(int $id, array $data)
    {
        $item = $this->model::find($id);
        return $item->update($data);
    }

    public function all()
    {
        return $this->model::all();
    }

    public function delete(int $id)
    {
        $item = $this->model::find($id);
        return $item->delete();
    }

    public function findBy(array $criteria, string $opration = "=", $single = true)
    {

        $query = $this->model::query();
        foreach ($criteria as $key => $item) {
            $query->where($key, $opration, $item);
        }
        if ($single) {
            return $query->first();
        }
        return $query->get();

    }


}
