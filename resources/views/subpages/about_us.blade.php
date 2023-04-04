@extends('welcome')

@section('content')


<div class="container">
    <div class="row mt-4 border-top border-white">
        <div class="col-6">
            <h1 class="mt-4 display-4 text-center text-white opaciti" id="myDiv_2">
                Hello, I'm a Bart
            </h1>
        </div>
        <div class="col-6">
            <h1 class="mt-4 display-4 text-center text-white opaciti" id="myDiv_4">
                and this is our team
            </h1>
        </div>
        
    </div>

    <div class="row mt-2">
        <div class="col-12 col-md-4 text-white"> 
            <div class="opaciti" id="myDiv_12">
            All the Lorem Ipsum generators on the Internet tend to repeat predefined 
            chunks as necessary, making this or randomised words which don't look even 
            slightly believable. If you are going to use a passage of Lorem Ipsum, you 
            need to be sure there isn't anything embarrassing hidden in the middle of text. 
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
            </div>
        </div>
            <div class="col-12 col-md-4 opaciti" id="myDiv_3">
                <a href="{{ URL::to('/gallery')}}">
                    <img src="img/team/1.png" class="mx-auto d-block rounded-circle" href="{{ URL::to('/bartek')}}"></img>
                </a>
            </div>
        <div class="col-12 col-md-4 text-white"> 
            <div class="opaciti" id="myDiv_11">
             Ipsum, you need to be sure there isn't anything . 
             All the Lorem Ipsum generators on the Internet tend to repeat predefined 
             chunks as necessary, or randomised words which don't look even slightly 
             believable. If you are going to use a passage of Lorem Ipsum, you need 
             to be sure there isn't anything embarrassing hidden in the middle of text. 
             All the Lorem Ipsum generators on the Internet tend to repeat predefined 
             chunks as necessary 
            </div>
        </div>
    </div>

    <div class="row mt-4 text-center">
        <div class="col-12 col-md-2">
            <div class="card opaciti" id="myDiv_5">
                <a href="{{ URL::to('/gallery')}}">
                <img class="card-img-top" src="img/team/2.png" alt="Card image">
                </a> 
                    <div class="card-body">
                        <h4 class="card-title">Caroline</h4>
                    </div>                  
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="card opaciti" id="myDiv_6">
                <a href="{{ URL::to('/gallery')}}">
                <img class="card-img-top" src="img/team/3.png" alt="Card image">
                </a>                     
                    <div class="card-body">
                        <h4 class="card-title">Nicodem</h4>
                    </div>
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="card opaciti" id="myDiv_7">
                <a href="{{ URL::to('/gallery')}}">
                <img class="card-img-top" src="img/team/4.png" alt="Card image">
                </a>                        
                    <div class="card-body">
                        <h4 class="card-title">Mandy</h4>
                    </div>
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="card opaciti" id="myDiv_8">
                <a href="{{ URL::to('/gallery')}}">
                <img class="card-img-top" src="img/team/5.png" alt="Card image">
                </a>                        
                    <div class="card-body">
                        <h4 class="card-title">Ashley</h4>
                    </div>
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="card opaciti" id="myDiv_9">
                <a href="{{ URL::to('/gallery')}}">
                <img class="card-img-top" src="img/team/6.png" alt="Card image">
                </a>                        
                    <div class="card-body">
                        <h4 class="card-title">Adrian</h4>
                    </div>
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="card opaciti" id="myDiv_10">
                <a href="{{ URL::to('/gallery')}}">
                <img class="card-img-top" src="img/team/7.png" alt="Card image">
                </a>                        
                    <div class="card-body">
                        <h4 class="card-title">Gigi</h4>
                    </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-4 text-white text-center">
        <div class="col-12 opaciti" id="myDiv_13">
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
        </div>
    </div>


</div>

@if (count($contents) != 0)
@foreach ($contents as $content)
<div class="container">
<div class="row mb-5">
    <div class="col-12 mt-5 bg-black ">
    @if ($content->column_type === '1')
    <div class="row mt-{{$content->block_margin_top}} mb-{{$content->block_margin_bottom}} border-top border-white">
        <div class="col-12">
            <h1 class="text-{{$content->title_color}}  text-{{$content->title_position}} mt-{{$content->title_margin_top}} mb-{{$content->title_margin_bottom}}">{{$content->title}}</h1>
            <p  class="text-{{$content->content_color}}  text-{{$content->content_position}} mt-{{$content->content_margin_top}} mb-{{$content->content_margin_bottom}}">{{$content->content}}</p>
        </div>
    </div>
    @else
    <div class="row mt-3 border-top border-white display-{{$content->size_2}}">
        <div class="col-sm-12 col-md-6">
            <h1 class="text-{{$content->title_color}}  text-{{$content->title_position}} mt-{{$content->title_margin_top}} mb-{{$content->title_margin_bottom}}">{{$content->title}}</h1>
            <p  class="text-{{$content->content_color}}  text-{{$content->content_position}} mt-{{$content->content_margin_top}} mb-{{$content->content_margin_bottom}}">{{$content->content}}</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h1 class="text-{{$content->title_color_2}}  text-{{$content->title_position_2}} mt-{{$content->title_margin_top_2}} mb-{{$content->title_margin_bottom_2}}">{{$content->title_2}}</h1>
            <p  class="text-{{$content->content_color_2}}  text-{{$content->content_position_2}} mt-{{$content->content_margin_top_2}} mb-{{$content->content_margin_bottom_2}}">{{$content->content_2}}</p>
        </div>
    </div>
    @endif  
    </div>
</div>
@endforeach
@endif

@endsection('content')