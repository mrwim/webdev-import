<?php

abstract class Repository {

    public abstract function findAll();

    public abstract function findById($id);

    public abstract function saveOne($object);


}