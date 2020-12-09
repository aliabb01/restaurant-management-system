{{      
    Mail::send('adver',[],function($m){
      $m->to('user@gmail.com')->subject('La Cozzza Infuriata');
      return view ('welcome');
    })
    }}