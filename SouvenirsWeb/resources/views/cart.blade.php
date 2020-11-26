<div style="background-color: aliceblue; font-size: 18px; text-align: center">
<h1>Корзина</h1>
<div style="border: 3px solid black">
    <div>{{$product->name}}</div>
    <div>{{$product->comment}}</div>
    <div{{$product->price}}></div>
    <div>
        <form action="{{route('Buy')}}">
            <input type="hidden" name="id" value="{{$product->id}}">
            <div>Количество</div>
            <input type="text" name="amount" placeholder="0">
            <div><button style="background-color: black; color: white">Оформить заказ</button></div>
        </form>
    </div>
</div>
</div>
