<?php


/**
 * Author = babak yousefian
 */


use Illuminate\Support\Facades\Session;
function login_validate()
{
    if(Session::has('admin_id'))
    {
        return true;
    }else
    {
        return false;
    }
}
