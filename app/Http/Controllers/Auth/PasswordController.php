<?php
 
namespace App\Http\Controllers;
 
use App\User;
use Auth;
use Hash;
use Validator;
 
/**
 * @author Yugo <dedy.yugo.purwanto@gmail.com>
 * @copyright Laravel.web.id - 2016
 */
class PasswordController extends Controller
{
    /**
     * @return mixed
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
}