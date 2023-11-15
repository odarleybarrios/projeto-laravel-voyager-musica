<div class="card" style="width: 18rem;">
    <img src="{{ @asset('assets/images/exemplos/2.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">
            {{$post->excerpt}}
        </p>
        <a href="#" class="btn btn-primary">Ler</a>
    </div>
</div>
