
<div>
    
        <div class="card" style="width: 18rem;">
          <img style="height: 250px" src="{{ asset('images/girl-2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$name}}</h5>
            <p class="card-text">{{$description}}.</p>
            <a href="images/girl-2.png" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
 


    <p></p>
    <hr>
    <div>Add two number {{ $addNumber(16,20) }}</div>
    <hr>
    <h1 {{ $attributes->merge(['class'=>'declass']) }}>Add attributes</h1>
  </div>