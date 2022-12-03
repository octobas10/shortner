<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\UrlShortener;
use Illuminate\Support\Str;

  
class UrlShortenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortLinks = UrlShortener::latest()->get();
        return view('shortenlinks', compact('shortLinks'));
    }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'link' => 'required|url'
        ]);
   
        $input['link'] = $request->link;
        $input['code'] = Str::random(4);

        $link = UrlShortener::create($input);
        return redirect('generate-shorten-link')->with('success', 'Url Shortener Generated Successfully!');
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLinks($code)
    {
        $find = UrlShortener::where('code', $code)->first();
        if($find){
            return redirect($find->link);
        }else{
            return redirect('generate-shorten-link');
        }
        
    }
}