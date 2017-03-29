<?php 
namespace App\Repositories;
use DB;
abstract class BaseRepository {

	/**
	 * The Model instance.
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;
    
    /**
     * 修改
     * @param type $data
     * @return type
     */
    public function create($data) {
        if($this->model->fill($data)->save()){
            return $this->model;
        }
        return false;
    }
    /**
     * 修改
     * @param type $data
     * @return type
     */
    public function update($data,$id) {
        $model = $this->find($id);
        if($model->fill($data)->save()) {
            return $model;
        }
        return false;
    }
    /**
     * @param  array $data
     * @param  $id
     * @return mixed
     */
    public function updateRich(array $data, $id)
    {
        if (!($model = $this->model->find($id))) {
            return false;
        }
        return $model->fill($data)->save();
    }
	/**
	 * Destroy a model.
	 *
	 * @param  int $id
	 * @return void
	 */
	public function delete($id)
	{
		return $this->getById($id)->delete();
	}

	/**
	 * Get Model by id.
	 *
	 * @param  int  $id
	 * @return App\Models\Model
	 */
	public function find($id)
	{
		return $this->model->find($id);
	}

     /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findAllBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

    /**
     * Find a collection of models by the given query conditions.
     *
     * @param array $where
     * @param array $columns
     * @param bool $or
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function findWhere($where, $columns = ['*'], $or = false)
    {
        $model = $this->model;
        foreach ($where as $field => $value) {
            if ($value instanceof \Closure) {
                $model = (!$or)
                    ? $model->where($value)
                    : $model->orWhere($value);
            } elseif (is_array($value)) {
                if (count($value) === 3) {
                    list($field, $operator, $search) = $value;
                    $model = (!$or)
                        ? $model->where($field, $operator, $search)
                        : $model->orWhere($field, $operator, $search);
                } elseif (count($value) === 2) {
                    list($field, $search) = $value;
                    $model = (!$or)
                        ? $model->where($field, '=', $search)
                        : $model->orWhere($field, '=', $search);
                }
            } else {
                $model = (!$or)
                    ? $model->where($field, '=', $value)
                    : $model->orWhere($field, '=', $value);
            }
        }
        return $model->get($columns);
    }
    
    public function paginate($where = [], $orderBy = ['id', 'desc'], $pageSize = 10) {
        $model = $this->model;
        foreach ($where as $field => $value) {
            if ($value instanceof \Closure) {
                $model = $model->where($value);
            } elseif (is_array($value)) {
                if (count($value) === 3) {
                    list($field, $operator, $search) = $value;
                    $model = $model->where($field, $operator, $search);
                } elseif (count($value) === 2) {
                    list($field, $search) = $value;
                    $model = $model->where($field, '=', $search);
                }
            } else {
                $model = $model->where($field, '=', $value);
            }
        }
        return $model->orderBy($orderBy[0], $orderBy[1])->paginate($pageSize);
    }
    
    public function lists($column1, $column2 = '') {
        if(!$column2) {
            return $this->model->pluck($column1);
        }
        return $this->model->pluck($column1, $column2);
    }
}