<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route to the home page

Route::get('/', function () {
    $posts = DB::table('blog_posts')->get();
    return view('home', ['posts'=>$posts]);
});

//This route either deletes a post or updates it

Route::post('/updatePost', function () {

    $deleteId = request('delete');
    
    if ($deleteId != NULL) {

        $posts = DB::delete('DELETE FROM blog_posts WHERE id=?', [$deleteId]);

    }else {

        $title = request('title');
        $catagory = request('catagory');
        $tags = request('tags');
        $article = request('article');
        $id = request('id');

        DB::update('UPDATE blog_posts SET title=?, catagory=?, tags=?, article=? WHERE id=?', [$title, $catagory, $tags, $article, $id]);

    }

    return redirect('/admin');

});

//This opens the post editor based on which post the user selects

Route::post('/postEditor', function () {
    $id = request('postSelect');
    $post = DB::table('blog_posts')->find($id);
    return view('postEditor', ['post'=>$post]);
});

//This shows a specific article

Route::get('/article/{id}', function ($id) {
    $post = DB::table('blog_posts')->find($id);
    return view('article', ['post'=>$post]);
});

//This lists all the catagorys

Route::get('/catList', function () {
    $posts = DB::select('SELECT DISTINCT catagory FROM blog_posts');
    return view('catList', ['posts'=>$posts]);
});

//This shows a specific catagory

Route::get('/catView/{slug}', function ($slug) {
    $posts = DB::table('blog_posts')->where('catagory', '=', $slug)->get();
    return view('catView', ['posts'=>$posts]);
});

//This shows a specific tag

Route::get('/tagView/{tag}', function ($tag) {
    $posts = DB::table('blog_posts')->where('tags', 'LIKE', '%' . $tag . '%')->get();
    return view('tagView', ['posts'=>$posts], ['tag'=>$tag]);
});

//This routes to the about page

Route::get('/about', function () {
    return view('about');
});

//This routes to the admin page
Route::get('/admin', function () {
    return view('admin');
});

//This routes to the legal page

Route::get('/legal/{subsection}', function ($subsection) {
    return view('legal', ['subsection'=>$subsection]);
})->where('subsection', '(tos|privacy)');


//This routes to the login page
//If the user is already logged in, it redirects to their corresponding console (ie. admin console, writers console)

Route::get('/login', function () {
    if (isset($_COOKIE['status'])) {
        if ($_COOKIE['status'] == "writer") {
            return redirect('/writer/');
        } else {
            return redirect('/admin/');
        }
    } else {
        $users = DB::table('users')->get();
        return view('login', ['users'=>$users]);
    }
});

//This handles the post functionallity when logging in

Route::post('/login', function () {
    $email = request('email');
    $password = request('password');
    $users = DB::table('users')->get();
    
    foreach ($users as $user) {
        if ($user->email == $email) {
            if ($user->password == $password) {
                setcookie('name', $user->name, time() + (60*60*24), '/');
                setcookie('email', $user->email, time() + (60*60*24), '/');
                setcookie('status', $user->status, time() + (60*60*24), '/');
                
                if ($user->status == "writer") {
                    return redirect('/writer');
                } else {
                    return redirect('/admin');
                }
            } else {
                return view('incorrect');
            }
        }
    }

    return view('incorrect');
});

//This routes to the writers console

Route::get('/writer', function () {
    $posts = DB::table('blog_posts')->get();
    return view('writer', ['posts'=>$posts]);
});

//This routes to the admins console

Route::get('/admin', function () {
    $posts = DB::table('blog_posts')->get();
    return view('admin', ['posts'=>$posts]);
});

//This routes to the register page

Route::get('/register', function () {
    return view('register');
});

//This handles the post requests when registering

Route::post('/register', function () {
    $name = request('name');
    $email = request('email');
    $password = request('password');
    $status = request('status');

    DB::insert('INSERT INTO users (name, email, password, status) VALUES (?, ?, ?, ?)', [$name, $email, $password, $status]);

    setcookie('name', $name, time() + (60*60*24), '/');
    setcookie('email', $email, time() + (60*60*24), '/');
    setcookie('status', $status, time() + (60*60*24), '/');

    return view('/');
});

//This clears cookies when the user wants to log out

Route::get('/logout', function () {
    setcookie('name', $_COOKIE["name"], time() - 5, '/');
    setcookie('email', $_COOKIE["email"], time() - 5, '/');
    setcookie('status', $_COOKIE["status"], time() - 5, '/');

    return redirect('/');
});

//This handles the post request when adding a blog post

Route::post('/newpost', function () {
    $title = request('title');
    $category = request('category');
    $tags = request('tags');
    $article = request('article');

    DB::insert('INSERT INTO blog_posts (catagory, tags, title, article) VALUES (?, ?, ?, ?)', [$category, $tags, $title, $article]);

    return redirect('/login');
});

//This routes to the search page

Route::get('/search', function () {
    return view('search');
});


//This handles the search functionality

Route::post('/search', function () {
    $idSearch = request('idSearch');
    $categorySearch = request('categorySearch');
    $tagSearch = request('tagSearch');

    if ($idSearch != null) {
        return redirect('/article/' . $idSearch);
    } elseif ($categorySearch != null) {
        return redirect('/catView/' . $categorySearch);
    } elseif ($tagSearch != null) {
        return redirect('/tagView/' . $tagSearch);
    }
});
