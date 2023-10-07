<?php

namespace Savalan\Rocket\Repository;
use Savalan\Rocket\RocketClient;


class RocketRepository implements RocketRepositoryInterface
{


    public function login()
    {   
        return (new RocketClient)->login();
    }

    public function send()
    {

    }
}