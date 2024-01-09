<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use Image;
class GameController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function category()
    {
        $data = Category::all();
        return view('Admin.User.CategoryGame', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function categoryAdd()
    {
        return view('Admin.User.CategoryGameAdd');
    }

    /**
     * Display the specified resource.
     */
    public function categoryAddPost(Request $request)
    {
        $data = $request->all();
        if(Category::create($data)) {
            return redirect('admin/categorygame');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function categoryEdit(string $id)
    {
        $data = Category::all();
        foreach($data as $value) {
            // var_dump($value);
            if($value->id == $id) {
                $category = $value->category;
            }
        }
        return view('Admin.User.CategoryGameEdit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function categoryDeletePost(string $id)
    {
        Category::where('id', $id)->delete();
        return redirect('admin/categorygame'); 
    }

    /**
     * Display a listing of the resource.
     */
    public function listGame()
    {
        $data = Game::all();
        // dd($data);
        return view('Admin.User.Game', compact('data'));
    }

    /**
     * Display a listing of the resource.
     */
    public function gameAdd()
    {
        $categories = Category::all();
        return view('Admin.User.GameAdd', compact('categories'));
    }

    /**
         * Display a listing of the resource.
         */
    public function gameAddPost(Request $request)
    {
        $data = $request->all();

        
        if($request->hasfile('image'))
        {
            // dd($request->hasfile('image'));
            foreach($request->file('image') as $image)
            {
                // dd($image);
                $name = $image->getClientOriginalName();
                $name_2 = "hinh50_".$image->getClientOriginalName();
                $name_3 = "hinh200_".$image->getClientOriginalName();

                //$image->move('upload/product/', $name);

                $path = public_path('upload/game/' . $name);
                $path2 = public_path('upload/game/' . $name_2);
                $path3 = public_path('upload/game/' . $name_3);

                Image::make($image->getRealPath())->save($path);
                Image::make($image->getRealPath())->resize(50, 70)->save($path2);
                Image::make($image->getRealPath())->resize(200, 300)->save($path3);

                $dataImage[] = $name;

            }
        }
        $game = new Game();
        $game->title = $request['title'];
        $game->description = $request['description'];
        $game->price = $request['price'];
        $game->release_date = $request['release_date'];
        $game->image_Path = json_encode($dataImage);
        $game->category_id = $request['category_id'];
        $game->save();
        return redirect('admin/postgame');
        // if(Game::create($data)) {

        //     return redirect('admin/postgame');
        // }
        // $categories = Category::all();
        // return view('Admin.User.GameAdd', compact('categories'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
