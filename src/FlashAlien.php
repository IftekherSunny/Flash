<?php namespace Sun;

class FlashAlien extends Alien
{
    /**
     * To register Alien
     *
     * @return object
     */
    public static function registerAlien()
    {
        return new Flash();
    }
}