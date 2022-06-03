<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Responses;
use App\Models\Animal;
use App\Models\Image;
use App\Models\User;
use App\Models\Review;


use Illuminate\Http\Request;
use Exception;
use Auth; 

class AnimalController extends Controller
{   

    public function searchsitter(Request $request){
        // return $user= phpinfo();
        return view("animal.searchsitter");
    }
    
    public function becomesitter(Request $request){
        return view("animal.becomesitter");
    }
   

    public function index(){

        return view("animal.index",[
            'animal'=> \App\Models\Animal::all(),
            'image'=> \App\Models\Image::all(),
        ]);
    }
    public function storeReview($id,Request $request){
        $review=new Review;
        $review->review =$request->input("review");
        $review->user_id=DB::table('users')->where('id',$id)->value('id');
        $review->save();
        return redirect('/responses');
    }
    public function create(Request $request){
        return view('animal.create');
    }
    public function review($id, Request $request){
        return view('animal.review',[
            'user'=> \App\Models\User::find($id),
        ]);
    }
    public function store(Request $request, \App\Models\Animal $animal,\App\Models\Image $image){
        // return $request->all();
        $animal=new Animal;
        $animal->name =$request->input("name");
        $animal->kind =$request->input("kind");
        $animal->description =$request->input("description");
        $animal->hourly =$request->input("hourly");
        $animal->important =$request->input("important");
        $animal->user_id=Auth::id();
        $animal->dateFrom =$request->input("datefrom");
        $animal->dateTill =$request->input("datetill");

            $animal->save();
        
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $path = $imagefile->store('/images/resource', ['disk' =>'my_files']);
                $image->url = $path;
                $image->animal_id = $animal->id;
                $image->save();
        }
        $animal->image=DB::table('images')->where('animal_id',$animal->id )->value('url');  
        $animal->save();
        return redirect('/');
    
    
    }
    public function respons($id,\App\Models\Responses $Responses ){
        $ownerId= DB::table('animal')->where('id',$id )->value('user_id');
        $animalName=  DB::table('animal')->where('id',$id )->value('name');
        $sitterName= DB::table('users')->where('id',Auth::id())->value('name');

        $Responses->sitterid =Auth::id();
        $Responses->ownerId = $ownerId;
        $Responses->animalId =$id;
        $Responses->accepted = 0;
        $Responses->animalName= $animalName;
        $Responses->sitterName=$sitterName;
        $Responses->save();
        return redirect('/');    
    }
    public function deleteRow($id,\App\Models\Animal $Responses){

         DB::table("animal")->where('id',$id)->delete();
        return redirect('/delete');   
    }
    public function deleteUserRow($id,\App\Models\User $Responses){
        $user= DB::table("users")->where('id',$id)->update(['banned'=>1]);

       
        return redirect('/allUsers');   
    }

    public function delete(){
        return view("animal.delete",[
            'animal'=> \App\Models\Animal::all(),
            'image'=> \App\Models\Image::all(),
        ]);}
    public function allUsers(){
        return view("animal.deleteUser",[
            'users'=> \App\Models\User::all(),
            'image'=> \App\Models\Image::all(),
        ]);}

    public function show($id){
            $image= DB::table('images')->where('animal_id',$id)->get();
            return view("animal.show",[
                'currentUser'=>DB::table("users")->where('id',Auth::id())->value("id"),
                'animal' => \App\Models\Animal::find($id),
                'users' => \App\Models\User::all(),
                'images'=> $image,
                'int'=> 0,
                'currentAdminUser'=> Auth::user(),

            ]);
        }       
public function user($id){
    $review= DB::table('review')->where('user_id',$id)->get();
    $image= DB::table('user_image')->where('user_id',$id)->get();
    return view("animal.userCard",[
        'animal' => \App\Models\Animal::find($id),
        'user' => \App\Models\User::find($id),
        'images'=> $image,
        'currentUser'=> Auth::user(),
        'reviews'=> $review,
    ]);
}

public function responses(){
   
    if (Animal::where('user_id',Auth::id())->exists()) {
        $myanimal= DB::table("animal")->where('user_id',Auth::id())->pluck('id');
    }
    else{
       $myanimal=DB::table("users")->where('id',Auth::id())->pluck('id');
    }
    
    return view("animal.responses",[
        'responses' => Responses::all()->where('ownerId', auth()->user()->id),
        'animals'=>Animal::all(),
        'users'=>User::all(),
        'myanimals'=>$myanimal,

    ]);
}

public function send($id){
    DB::update('update responses set accepted = true where id ='.$id);
    return redirect('/responses');    
}
public function myresponses(){
        return view("animal.myResponses",[
            'responses' => Responses::all()->where('sitterId', auth()->user()->id),
            'animals'=>Animal::all(),
            'users'=>User::all(),
        ]);
}
}