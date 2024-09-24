<?php

 // โหลด lib Controllers
namespace App\Http\Controllers;
 
// โหลด lib เชื่อมต่อ View
use Illuminate\View\View;

// โหลด lib เชื่อมต่อ Database
use Illuminate\Support\Facades\DB;

 
class UserController extends Controller
{
    // main function/method
    public function index(): View
    {
        // Select Query Builder แบบ Bindings
        // $users = DB::select('select * from user_details where active = ?', [1]);
        // รูปแบบการเขียน query เพิ่มเติม https://laravel.com/docs/11.x/database 


        // ผลของการใช้ Query Builder ด้วยคำสั่ง select จะถูกเก็บไว้ในตัวแปร users
        $users = DB::select('select * from user_details ');
        
        return view('user.index', ['users' => $users]);
    }
    

    /*
        //  เรียก view ชื่อ index.blade.php และส่งค่าจากการ Query Database ด้วยตัวแปร users ในรูปแบบ Array ไปด้วย
        public function show(string $id): View
        {
            return view('user.profile');
        }
    */
    
}



