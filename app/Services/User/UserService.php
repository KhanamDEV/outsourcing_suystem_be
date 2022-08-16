<?php
/**
 * Created by PhpStorm
 * User: Kha Nam
 * Date: 01/08/2022
 * Time: 21:02
 */


namespace App\Services\User;


use App\Repositories\User\UserRepositoryInterface;

class UserService
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function find($data = []){
        $data['id'] = auth('user')->id();
        return $this->userRepository->findUser($data);
    }
}
