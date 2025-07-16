<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{


    public function index(){

      

        
        
     
    return view('welcome',[

      
    ]);

}



 public function home( Request $request){


      return view('events.home',[
         

        ]);

     }





public function create(){
    return view('events.create');
}


}



// public function store(Request $request){

    

//     $event = new Event;


//     $event->name = $request->name;
//     $event->qnt = $request->qnt;
//     $event->description = $request->description;
//     $event->date = $request->date;
//     $event->items = $request->items;

    

//     //UPLOAD DE IMAGEM 

//     if($request->hasFile('image') && $request->file('image')->isValid()){

//         $requestImage = $request->image;
//         $extension = $requestImage->extension();
//  //       $imagename = $requestImage->getClientOriginalName().'.'.$extension;
//         $imagename = uniqid() . '.' . $extension;
//        //        echo"<pre>";print_r($imagename);exit;


//         $requestImage->move(public_path('img/events'),$imagename);

//         $event->image = $imagename;

//     }


//     $user = auth()->user();      // utilizador logado
//     $event->user_id = $user->id;

//     $event->save();

//     return redirect('/')->with('msg','Evento criado com sucesso!');

// }

// public function show($id){
//     $event = Event::findOrFail($id); // Corrigido "OR" para "Or"
//     $eventowner = User::where('id', $event->user_id)->first()->toArray();

//     $user = auth()->user();
//     $hasjoined = false;

//     if ($user) {
//         $userEvents = $user->eventsAsparticipant->toArray(); // array de eventos do usuário

//         foreach ($userEvents as $userEvent) {
//             if ($userEvent['id'] == $id) {
//                 $hasjoined = true;
//                 break; // já achou, pode parar o loop
//             }
//         }
//     }

//     return view('events.show', [
//         'events' => $event,
//         'eventowner' => $eventowner,
//         'hasuserjoined' => $hasjoined,
//     ]);
// }

    

// public function dashboard(){

//     $user = auth()->user();
//     $events = $user->events;            /// relaciona o usuario dos eventos criados

//     $eventAsparticipant = $user->eventsAsparticipant;

//     //echo $events;exit;

//     return view('events.dashboard',[

//        'events'=>$events,
//        'eventsparticipant'=> $eventAsparticipant,

//     ]);

// }


// public function destroy ($id){


//       Event::findOrFail($id)->delete();
//       return redirect('/dashboard')->with('msg','Evento apagado com sucesso');  

// }


// public function edit ($id){

    
//       $event = Event::findOrFail($id);
//     $user = auth()->user();

//         if($user->id !=$event->user_id){
//             return redirect('/dashboard');
//         }

//       return view('events.edit',[
//         'event'=>$event,
//       ]);  

// }



// public function update (Request $request){

//     $data = $request->all();

    
    
//     //actualizacao DE IMAGEM 

//     if($request->hasFile('image') && $request->file('image')->isValid()){

//         $requestImage = $request->image;
//         $extension = $requestImage->extension();
//  //       $imagename = $requestImage->getClientOriginalName().'.'.$extension;
//         $imagename = uniqid() . '.' . $extension;
//        //        echo"<pre>";print_r($imagename);exit;


//         $requestImage->move(public_path('img/events'),$imagename);

//         $data['image']= $imagename;

//     }

//       Event::findOrFail($request->id)->update($data);
//       return redirect('/dashboard')->with('msg','Evento actualizado com sucesso');  


// }




// public function joinEvent($id){


    
//     // $user = auth()->user();
//     // $user ->eventsAsparticipant()->attach($id);

// $user = auth()->user();
// $user->eventsAsparticipant()->attach($id); // $id é o id do evento


//     $event = Event::findOrFail($id);         /// se existir id actua caso nao morre
//     return redirect('/dashboard')->with('msg','presenca confirmada com sucesso');  


// }


// public function leaveEvent($id){

//         $user = auth()->user();
//         $user->eventsAsparticipant()->detach($id);      //usamos para nao participar + no evento
//         $event = Event::findOrFAil($id);

//          return redirect('/dashboard')->with('msg','voce ja nao participa no evento');  
// }


// }
