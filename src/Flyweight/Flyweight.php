<?php

interface Order {
    public function create();
}

class IntegralOrder implements Order{
    public function create()
    {
        // TODO: Implement create() method.
    }
}

class VirtualOrder implements Order {
    public function create()
    {
        // TODO: Implement create() method.
    }
}


class OrderFactory {

}
