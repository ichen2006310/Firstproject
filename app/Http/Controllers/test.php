<?php
namespace App\Http\Controllers;

// use App\User;
// use App\Http\Controllers\Controller;


// use Illuminate\Http\Request;

class test extends Controller
{
    //顯示所有資料
    //NewsController.php
    //
    public function index()
    {
        return '這是最新消息的首頁';
    }
    //新增一筆資料
    public function create()
    {
        return '新增一筆資料';
    }

    //儲存資料
    public function store(Request $request)
    {
        //
    }

    //顯示一筆資料
    public function show($id)
    {
        return '最新消息'.$id;
    }

    //編輯一筆資料
    public function edit($id)
    {
        return '編輯一筆資料'.$id;
    }

    //更新一筆資料
    public function update(Request $request, $id)
    {
        //
    }

    //刪除一筆資料
    public function destroy($id)
    {
        //
    }

    // Http/Controllers/test.php
    public function hello()
    {
        return view('hello');
    }

    // Http/Controllers/NewsController.php
    public function show_id($id=null)
    {
        if(!is_null($id)){
            //第一種傳變數進view的方法
            return view('hello')->with('id',$id);
            //第二種方法
            // return view('hello',compact('id',$id));
        }else{
            return '無資料';
        }
    
    
    }

}

// class test extends Controller
// {
//     public function __invoke($id)
//     {
//         return view('user.profile', ['user' => User::findOrFail($id)]);
//     }
// }



?>