<?php


namespace App\Session;


interface SessionInterface
{
    /**
     * keep information in session
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * add an information in session
     *
     * @param string $key
     * @param $value
     * @return mixed
     */
    public function set(string $key, $value): void;

    /**
     * delete a key in session
     *
     * @param string $key
     */
    public function delete(string $key): void;



}