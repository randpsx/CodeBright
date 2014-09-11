<?php

class BirthdayFilter
{
    public function filter($route, $request, $date)
    {
        if(date('m/d') == $date) {
            return View::make('birthday');
        }
    }
}