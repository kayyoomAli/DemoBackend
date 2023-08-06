<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function insert(Request $request)
    {
        $addcat = new Category;
        $addcat->name = $request->name;


        $addcat->save();

        if($addcat)
        {
            return response()->json([

                'status' => true,
                'message' => 'added category successfully',
                'data' => $addcat,
            ]);
        }
        else
        {
            return response()->json([

                'status' => false,
                'message' => ' unsuccessful',
                'data' => [],
            ]);
        }

    }

    public function fetch()
    {
        $fetchcat = Category::all();

        if ($fetchcat)
        {
            return response()->json([

                'status' => true,
                'category' => $fetchcat,
            ]);
        }
        else
        {
            return response()->json([

                'status' => false,
            ]);
        }
    }

    public function edit(Request $request)
    {




        $editcat = Category::find($request->id);

        // dd($editcat);

        if($editcat)
        {
            return response()->json([
                'status' => true,
                'editdata' => $editcat,
            ]);
        }


    }

    public function update(Request $request)
    {
        $updatecat =  Category::find($request->id);
        $updatecat->name = $request->name;
        $updatecat->save();

        if($updatecat)
        {
            return response()->json([

                'status' => true,
                'message' => 'update category successfully',
                'data' => $updatecat,
            ]);
        }
        else
        {
            return response()->json([

                'status' => false,
                'message' => ' unsuccessful',
                'data' => [],
            ]);
        }

    }
}
