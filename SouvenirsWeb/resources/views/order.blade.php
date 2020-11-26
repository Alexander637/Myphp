<div style="background-color: aliceblue; font-size: 18px; text-align: center">
<div>Оформление заказа</div>
<form action="{{route('submit')}}">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="text" name="phone" placeholder="Phone Number">
    <input type="text" name="email" placeholder="Email">
    <div>{{$product->name}}</div>
    <div>{{$amount}}</div>
    <div>Price: {{$product->price * $amount}}</div>
    <button type="submit" style="background-color: black; color: white"> Подтвердить</button>
</form>
</div>
