@extends('admin.home')

@section('content')


<div class="container">
<form action="{{ url('content_update') }}" method="POST" role="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<input type="hidden" name="id" value="{{ $content->id }}" />
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Section and layout</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <label for="section">Section for element</label>
                        <select class="form-control" name="section" id="section" value="{{ $content->content_area_id}}">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    <label for="column_type">Layout</label>
                        <select class="form-control" name="column_type" id="column_type" value="{{ $content->column_type}}">
                            <option>1</option>
                            <option>2</option>
                        </select>
                </div>
            </div> 
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h1 class="mb-2">Column I</h1></div>
                <div class="card-body">
                    <label for="block_margin_top">Margin top of block</label>
                        <input type="text" class="form-control" name="block_margin_top" value="{{ $content->block_margin_top}}"/>
                    <label for="block_margin_bottom">Margin bottom of block</label>
                        <input type="text" class="form-control" name="block_margin_bottom" value="{{ $content->block_margin_bottom }}"/>

                    <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $content->title }}"/>
                    <label for="title_color">Title color</label>
                        <input type="text" class="form-control" name="title_color" value="{{ $content->title_color }}"/>
                    <label for="title_size">Title size</label>
                        <input type="text" class="form-control" name="title_size" value="{{ $content->title_size }}"/>

                    <label for="title_position">Title position</label>
                        <select class="form-control" name="title_position" id="title_position" value="{{ $content->title_position }}">
                            <option>left</option>
                            <option>right</option>
                            <option>center</option>
                        </select>
                        
                    <label for="title_margin_top">Margin top</label>
                        <input type="text" class="form-control" name="title_margin_top" value="{{ $content->title_margin_top }}"/>
                    <label for="title_margin_bottom">Margin bottom</label>
                        <input type="text" class="form-control" name="title_margin_bottom" value="{{ $content->title_margin_bottom }}"/>

                    <label for="content">Content</label>
                        <textarea type="text" class="form-control" name="content" placeholder="{{ $content->content }}"></textarea>
                    <label for="content_color">Content color</label>
                        <input type="text" class="form-control" name="content_color" value="{{ $content->content_color }}"/>
                    <label for="content_size">Content size</label>
                        <input type="text" class="form-control" name="content_size" value="{{ $content->content_size }}"/>
                    
                    <label for="content_position">Content position</label>
                        <select class="form-control" name="content_position" id="content_position" value="{{ $content->content_position }}">
                            <option>left</option>
                            <option>right</option>
                            <option>center</option>
                        </select>

                    <label for="content_margin_top">Margin top</label>
                        <input type="text" class="form-control" name="content_margin_top" value="{{ $content->content_margin_top }}"/>
                    <label for="content_margin_bottom">Margin bottom</label>
                        <input type="text" class="form-control" name="content_margin_bottom" value="{{ $content->content_margin_bottom }}"/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h1 class="mb-2">Column II</h1></div>
                <div class="card-body">
                    <label for="block_2_margin_top">Margin top of block 2</label>
                        <input type="text" class="form-control" name="block_2_margin_top" value="{{ $content->block_2_margin_top }}"/>
                    <label for="block_2_margin_bottom">Margin bottom of block 2</label>
                        <input type="text" class="form-control" name="block_2_margin_bottom" value="{{ $content->block_2_margin_bottom }}"/>

                    <label for="title_2">Title 2</label>
                        <input type="text" class="form-control" name="title_2" value="{{ $content->title_2 }}"/>
                    <label for="title_color_2">Title color 2</label>
                        <input type="text" class="form-control" name="title_color_2" value="{{ $content->title_color_2 }}"/>
                    <label for="title_size_2">Title size 2</label>
                        <input type="text" class="form-control" name="title_size_2" value="{{ $content->title_size_2 }}"/>

                    <label for="title_position_2">Title Position 2</label>
                        <select class="form-control" name="title_position_2" id="title_position_2" value="{{ $content->title_position_2 }}">
                            <option>left</option>
                            <option>right</option>
                            <option>center</option>
                        </select>

                    <label for="title_margin_top_2">Margin top 2</label>
                        <input type="text" class="form-control" name="title_margin_top_2" value="{{ $content->title_margin_top_2 }}"/>
                    <label for="title_margin_bottom_2">Margin bottom 2</label>
                        <input type="text" class="form-control" name="title_margin_bottom_2" value="{{ $content->title_margin_bottom_2 }}"/>

                    <label for="content_2">Content</label>
                        <textarea type="text" class="form-control" name="content_2" placeholder="{{ $content->content_2 }}"></textarea>
                    <label for="content_color_2">Content color 2</label>
                        <input type="text" class="form-control" name="content_color_2" value="{{ $content->content_color_2 }}"/>
                    <label for="content_size_2">Content size 2</label>
                        <input type="text" class="form-control" name="content_size_2" value="{{ $content->content_size_2 }}"/>

                    <label for="content_position_2">Content Position 2</label>
                        <select class="form-control" name="content_position_2" id="content_position_2" value="{{ $content->content_position_2 }}">
                            <option>left</option>
                            <option>right</option>
                            <option>center</option>
                        </select>

                    <label for="content_margin_top_2">Margin top 2</label>
                        <input type="text" class="form-control" name="content_margin_top_2" value="{{ $content->content_margin_top_2 }}"/>
                    <label for="content_margin_bottom_2">Margin bottom 2</label>
                        <input type="text" class="form-control" name="content_margin_bottom_2" value="{{ $content->content_margin_bottom_2 }}"/>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center mb-4">    
            <input type="submit" value="Edit" class="btn btn-success mt-2" />
        </div>  
    </div>
</form>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="card">
            <div class="card-header">
                <div class="col-12">
                    <h1 class="text-center mb-4 mt-4">The appearance of the item</h1>
                </div>      
            </div>
            <div class="card-body bg-black">
                    <div class="bg-black" style='height:300px'>
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
            </div>
        </div>
    </div>
</div>
</div>

@endsection('content')