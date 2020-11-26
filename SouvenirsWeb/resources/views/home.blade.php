<div style="background-color: aliceblue; font-size: 18px; text-align: center">
<h1>Каталог товаров</h1>
@foreach($products as $product)
    <div style="background-color: aliceblue; font-size: 18px; text-align: center" >
    <div style="border: 3px solid black">
    <div>{{$product->name}}</div>
    <div>{{$product->comment}}</div>
    <div{{$product->price}}></div>
        <div>
            <form action="{{route('addCart')}}">
                <input type="hidden" name="id" value="{{$product->id}}">
                <button style="background-color: black; color: white" >Add to cart</button>
            </form>
        </div>
    </div>
    </div>
@endforeach
</div>
