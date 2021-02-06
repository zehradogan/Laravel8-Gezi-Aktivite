@foreach($children as $subcategory)
    <ul>
    @if(count($subcategory->children))
            <li class="drop-down"><a href="">{{$subcategory->title}}</a></li>
        <ul>
            @include('home.categorytree', ['children'=>$subcategory->children])
        </ul>
        <hr>
    @else
            <li><a href="#"></a>{{$subcategory->title}}</li>
    @endif
    </ul>
@endforeach
