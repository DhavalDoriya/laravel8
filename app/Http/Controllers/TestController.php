<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookPrice;
use App\Models\Country;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\Mechanic;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;



class TestController extends Controller
{

    public function savefile(Request $request)
    {

        $myimage = $request->image->getClientOriginalName();
        $path = $request->image->move(public_path('images'), $myimage);

        // $url = Storage::url($myimage);
        // $url = 'http://localhost:8000'.$path;
        return view('welcome', ['test' => $myimage]);




        // return $path;
        // return Storage::disk('local')->put('/', file_get_contents($image));
        // return $image;
        // $request->image->move(public_path('images'), $filename);

        // save uploaded image filename here to your database

        // return back()
        //     ->with('success','Image uploaded successfully.')
        //     ->with('image', $filename); 




        // $file = $request->file('image');
        // // return $file;

        // $originalName = $request->file('image')->getClientOriginalName();
        // $path = "images/".$originalName;


        // // Storage::url('file.jpg');
        // $image = 'http://localhost:8000'.Storage::url($originalName);

        // return view('welcome', ['test' => $image]);

        // return $path;

        // $path = Storage::putFile('images', $file);


        // return $path;


        // return Storage::url('https://img.webcodegenie.com/img/wcgLife/lifebanner.webp');
        // $url = Storage::url('image.jpeg');

        // $author = Author::find(1);
        // echo url()->previous();
        // dd(url("/author/{$author->author_id}"));
    }

    public function index()
    {
        // return Storage::url('https://img.webcodegenie.com/img/wcgLife/lifebanner.webp');
        $url = Storage::url('image.jpeg');
        return "<img src='$url' alt=''>";
        $author = Author::find(1);
        echo url()->previous();

        dd(url("/author/{$author->author_id}"));
    }






    public function one()
    {
        //1.  One to one Book and price
        // $data = Book::find(1)->one;
        // dd('price', $data->price);

        //inverse one to one
        // $data = BookPrice::find(1)->one;
        // dd('book title', $data->title);

        // 2.  Customer and Customer  address
        // $data = Customer::with('many')->get()->find(1);
        // $data = Customer::with('many')->get();

        // dd('address' ,$data->toArray());l

        //inverse One to Many
        // $data = CustomerAddress::with('many')->get()->find(1);
        // dd('address' ,$data->toArray());

        // 3. Has Many To Many Book and author
        //    $data  = Book::with('manyto')->find(1)->toArray();
        //    $data  = Author::with('manyto')->find(1)->toArray();
        //    dd($data);

        // 4. Has One Through
        // $data = Mechanic::with('owner')->find(1)->toArray();
        // dd($data);

        // 5. Has Many Through
        // $data = Country::with('manyhas')->get();
        // $data = Customer::with('manyhas')->get();
        // dd($data->toArray());

        // // 6. one to one polymeric
        // $data = Post::with('image')->find(2);
        // // $data = User::with('image')->find(2);
        // dd($data->toArray());


        // 7. one to many polymeric
        // $data = Post::with('comments')->find(1);
        // $data = Video::with('comments')->find(1);
        // dd($data->toArray());


        // Many To Many (Polymorphic)
        // $data = Post::with('tags')->find(1);
        // $data = Video::with('tags')->find(1);
        // return $data->toArray();
        // return $data;

        // dd($data->toArray());
        // dd($data->toJson());

        //mutators
        $data = Author::get();
        $data->each->append('links');
        return $data;


        // dd($data);

    }





    public function collection()
    {


        // Log:info('test log in console');
        // $path = Storage::path('file.jpg');

        // echo $path;
        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/testphp.log'),
        ])->info('Something happened!');

        // Log::emergency('emergency');

        // Log::channel('slack')->info('Something happened!');


        // Log::info('Showing the user profile for user: ');

        $collection = collect([1, 2, 3, 4, 5, 6, 7, 9]);
        $chunks = $collection->chunk(2);
        return $chunks->all();



        // dd( $chunks->all());

        // $collection = collect(['John Doe', 'Jane Doe']);
        // $collection->dump(); //like dd
        // return  $collection;
        // $collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);

        // $filtered = $collection->except(['price']);

        // return $filtered->all();

        // ['product_id' => 1]



        return 'ABCD';
    }






    // -----------------------------END--------------------------------------


    // 5.  latest
    // $data = Customer::find(1)->latest;
    // dd('latest orders ', $data);

    // 6.  oldest
    // $data = Customer::find(1)->oldest;
    // dd('orders ', $data);


    // old task
    public function show(string $key): View
    {
        return view('test', ['key' => $key]);
    }
    public function vaccine(): View
    {
        return view('vaccine');
    }

    public function users()
    {
        return 'test';
        // return view('users/users');
    }
}
