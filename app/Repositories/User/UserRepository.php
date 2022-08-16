<?php
/**
 * Created by PhpStorm
 * User: Kha Nam
 * Date: 01/08/2022
 * Time: 21:02
 */


namespace App\Repositories\User;


use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function findUser($_data)
    {
        $query = $this->model;
        if (!empty($_data['id'])) $query = $query->where('id', $_data['id']);
        return $query->first();
    }
}
