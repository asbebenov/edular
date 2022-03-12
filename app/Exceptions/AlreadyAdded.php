<?php


namespace App\Exceptions;
use DomainException;
class AlreadyAdded extends \DomainException
{
protected $message = "Такой номер уже есть";
protected $code = 400;
}
